<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomProfileController extends Controller
{
    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'birthdate' => ['required', 'date'],
            'gender' => ['required', 'string', 'max:255'],
            'card_id' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
        ]);

        $user->name = $request->input('name');
        $user->birthdate = $request->input('birthdate');
        $user->gender = $request->input('gender');
        $user->card_id = $request->input('card_id');
        $user->phone = $request->input('phone');
        $user->email = $request->input('email'); 
        $user->save();

        return redirect()->back()->with('status', 'Perfil atualizado com sucesso!');
    }
}
