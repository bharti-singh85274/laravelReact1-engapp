<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    

public function profile(Request $request)
{
    return response()->json([
        'user' => $request->user()
    ]);
}


public function update(Request $request)
{
    $user = $request->user();

    $user->update([
        'name' => $request->name,
        'email' => $request->email,
    ]);

    return response()->json([
        'message' => 'Profile updated',
        'user' => $user
    ]);
}



public function changePassword(Request $request)
{
    $request->validate([
        'current_password' => 'required',
        'new_password' => 'required|min:6|confirmed',
    ]);

    $user = $request->user();

    if (!Hash::check($request->current_password, $user->password)) {

        throw ValidationException::withMessages([
            'current_password' => ['Current password is incorrect.'],
        ]);

    }

    $user->password = Hash::make($request->new_password);

    $user->save();

    return response()->json([
        'success' => true,
        'message' => 'Password changed successfully.'
    ]);
}


}
