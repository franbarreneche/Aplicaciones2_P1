<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{

    function login(Request $request) {
        $validated = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $email = $request->email;
        $password = $request->password;
        $user = null;
        try {
            $user = User::where('email',$email)->firstOrFail();
        }catch(ModelNotFoundException $e) {
            return back()->withInput($request->input())->withErrors(["email" => "No hay nadie registrado con ese email"]);
        }
        if(!(hash("sha256",$password) === $user->password))
            return back()->withInput($request->input())->withErrors(["password" => "El password no concuerda con nuestros registros"]);
        Auth::login($user);
        //return view("home");
        return redirect()->route('home');
    }

    function logout(Request $request) {
        $user = Auth::user();
        Auth::logout();
        return redirect()->route('login');
    }
}
