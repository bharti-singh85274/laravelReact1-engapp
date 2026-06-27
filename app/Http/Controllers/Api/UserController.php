<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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



}
