<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Mail;
use App\Mail\SendOtpMail;
use App\Models\User;
use App\Models\PasswordOtp;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Requests\Auth\ForgotPasswordRequest;
use App\Http\Requests\Auth\ResetPasswordRequest;
use App\Http\Requests\Auth\VerifyOtpRequest;


class AuthController extends Controller
{

   
public function register(RegisterRequest $request)
{
    
    $user = User::create([

        'name' => $request->name,

        'email' => $request->email,

        'password' => Hash::make($request->password)

    ]);

    $token = $user->createToken('auth_token')->plainTextToken;

    return response()->json([

        'success' => true,

        'message' => 'Registration successful.',

        'token' => $token,

        'user' => $user

    ],201);
}



public function forgotPassword(ForgotPasswordRequest $request)
{
    // Delete old OTP
    PasswordOtp::where('email', $request->email)->delete();

    // Generate 6-digit OTP
    // $otp = rand(100000, 999999);
    $otp = random_int(100000, 999999);

    // Save OTP
    PasswordOtp::create([
        'email'      => $request->email,
        'otp'        => Hash::make($otp),
        'expires_at' => Carbon::now()->addMinutes(10)
    ]);

    // Send Email
    Mail::to($request->email)->send(new SendOtpMail($otp));

    return response()->json([
        'success' => true,
        'message' => 'OTP sent successfully.'
    ]);
}


public function verifyOtp(VerifyOtpRequest $request)
{
    $otp = PasswordOtp::where('email',$request->email)->first();

    if(!$otp){

        return response()->json([

            'success'=>false,

            'message'=>'OTP not found.'

        ],404);

    }

    if(Carbon::now()->greaterThan($otp->expires_at)){

        return response()->json([

            'success'=>false,

            'message'=>'OTP expired.'

        ],400);

    }

    if(!Hash::check($request->otp,$otp->otp)){

        return response()->json([

            'success'=>false,

            'message'=>'Invalid OTP.'

        ],400);

    }

    return response()->json([

        'success'=>true,

        'message'=>'OTP verified.'

    ]);
}


public function resetPassword(ResetPasswordRequest $request)
{

\Log::info('RESET PASSWORD', [
    'request' => $request->all(),
    'database' => DB::connection()->getDatabaseName(),
    'all_otps' => PasswordOtp::all()->toArray(),
]);

    $otp = PasswordOtp::where('email',$request->email)->first();

    if(!$otp){

        return response()->json([

            'success'=>false,

            'message'=>'OTP not found.'

        ],404);

    }

    if(Carbon::now()->greaterThan($otp->expires_at)){

        return response()->json([

            'success'=>false,

            'message'=>'OTP expired.'

        ],400);

    }

    if(!Hash::check($request->otp,$otp->otp)){

        return response()->json([

            'success'=>false,

            'message'=>'Invalid OTP.'

        ],400);

    }

    User::where('email',$request->email)->update([

        'password'=>Hash::make($request->password)

    ]);

    $otp->delete();

    return response()->json([

        'success'=>true,

        'message'=>'Password reset successfully.'

    ]);
}


    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json([
                'message' => 'Invalid credentials'
            ], 401);
        }

        $user = Auth::user();
        

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'user' => $user,
            'token' => $token,
            'message' => 'Login successful'
        ]);
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'message' => 'Logged out successfully'
        ]);
    }
}