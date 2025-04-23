<?php
namespace App\Http\Controllers;

use App\Models\tipoContato;
use Illuminate\Http\Request;

class ClassControllerTipoContato extends Controller {
    public function index() {
        return view('tipocontato');
    }
    public function insereTipoContato(Request $request) {
        $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string',
        ]);

        tipoContato::Create([
            'nome' => $request->input('nome'),
            'descricao' => $request->input('descricao'),
        ]);

        return redirect('contato/tipocontato')->with('success', 'Produto cadastrado com sucesso!');
    }
}

?>