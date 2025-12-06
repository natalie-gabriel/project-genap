<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request) {
        User::create(['name'=>$request->name, 'email'=>$request->email, 'password'=>Hash::make($request->password)]);
        return response()->json(['message'=>'Register Berhasil']);
    }
    public function login(Request $request) {
        if (!Auth::attempt($request->only('email', 'password'))) return response()->json(['message'=>'Gagal'], 401);
        $token = User::where('email', $request->email)->first()->createToken('auth_token')->plainTextToken;
        return response()->json(['access_token' => $token, 'token_type' => 'Bearer']);
    }
}