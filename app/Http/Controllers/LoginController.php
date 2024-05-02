<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function register(Request $request){
        // Crear un registro
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        Auth::login($user);

        return redirect(route('admin'));
    }

    //funcion de iniciar sesion
    public function login(Request $request){
        //validar datos
        $credentials = [
            "email" =>$request->email,
            "password" => $request->password,
        ];

        $remember = ($request->has('remember') ? true : false);
        if(Auth::attempt($credentials, $remember)){
            $request->session()->regenerate();
            return redirect(route('admin'));
        }else{
            return redirect('login');
        }
    }

    //funcion de cerrar sesion
    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('login'));
    }
}
