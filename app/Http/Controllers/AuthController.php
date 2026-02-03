<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
class AuthController extends Controller
{
    public function showRegister (Request $request)
    {
    return view("auth.register");
    }

    public function showLogin (Request $request)
    {
        return view("auth.login");
    }

    public function register (Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email'=> 'required|email|unique:users',
            'password' => 'required|string|min:4|confirmed',
        ]);

        $user = User::create($validated);

        Auth::login($user);

        return redirect()->route('login');
    }

    public function login (Request $request)
    {
        $validated = $request->validate([
            'email'=> 'required|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($validated)) {
            $request->session()->regenerate();

            return redirect()->route('clients.index'); #change later
        }

        throw ValidationException::withMessages([
            'credenciais' => 'Email/senha não encontrados'
        ]);
        
    }

    public function logout (Request $request)
    {
        auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
