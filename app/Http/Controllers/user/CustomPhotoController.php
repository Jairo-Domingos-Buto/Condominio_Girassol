<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomPhotoController extends Controller
{
    public function update(Request $request)
    {
        // Validação do arquivo
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        // Verificar se um arquivo foi enviado
        if ($request->hasFile('photo')) {
            // Obter o arquivo
            $file = $request->file('photo');
    
            // Gerar um nome único para o arquivo
            $fileName = time() . '_' . $file->getClientOriginalName();
    
            // Mover o arquivo para a pasta de uploads (por exemplo, 'public/uploads')
            $file->move(public_path('uploads'), $fileName);
    
            // Atualizar o caminho do arquivo no banco de dados (exemplo)
            $user = Auth::user();
            $user->photo = $fileName;
            $user->save();
        }
    
        return redirect()->back()->with('success', 'Foto atualizada com sucesso!');
    }
    
}
