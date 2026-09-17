<?php

namespace App\Http\Controllers;

use App\Models\Retirada;
use App\Models\Usuario;
use Illuminate\Http\Request;

class SistemaController extends Controller
{
    public function index()
    {
        $usuario = Usuario::findOrFail(session('usuario_id'));
        $retiradas = Retirada::where('usuario_id', $usuario->id)->get();

        return view('sistema', compact('usuario', 'retiradas'));
    }

    public function retirada()
    {
        return view('retirada_chave');
    }

    public function store(Request $request)
    {
        $dados = $request->validate([
            'bloco' => 'required|string|max:80',
            'sala' => 'required|string|max:120',
            'data_retirada' => 'required|date',
            'hora_retirada' => 'required',
            'hora_devolucao' => 'required',
        ]);

        $dados['usuario_id'] = session('usuario_id');
        Retirada::create($dados);

        return redirect('/historico')->with('success', 'Retirada registrada com sucesso.');
    }

    public function historico()
    {
        $retiradas = Retirada::where('usuario_id', session('usuario_id'))
            ->latest()
            ->get();

        return view('historico', compact('retiradas'));
    }

    public function destroy(Retirada $retirada)
    {
        abort_unless($retirada->usuario_id === session('usuario_id'), 403);
        $retirada->delete();

        return redirect('/historico');
    }

    public function devolver(Retirada $retirada)
    {
        abort_unless($retirada->usuario_id === session('usuario_id'), 403);
        $retirada->update([
            'status' => 'devolvida',
            'hora_devolucao' => now()->format('H:i:s'),
        ]);

        return redirect('/historico');
    }
}