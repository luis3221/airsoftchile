<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class RegisterController extends Controller
{
    /**
     * GET /register — Formulario de registro.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * POST /register — Crea la cuenta y cifra la contraseña antes de guardarla.
     */
    public function store(Request $request): RedirectResponse
    {
        $datos = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        // Ciframos la clave antes de guardar (Hash irreversible, inmune a lectura por el administrador).
        $datos['password'] = Hash::make($datos['password']);

        $usuario = User::create($datos);

        Auth::login($usuario);

        $request->session()->regenerate();

        return redirect('/')->with('exito', 'Cuenta creada correctamente. ¡Bienvenido!');
    }
}
