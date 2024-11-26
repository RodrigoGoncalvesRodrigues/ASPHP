<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produto::all();
        return view('produtos.index', compact('produtos'));
    }

    public function create()
    {
        // Gate::authorize('create', Produto::class);
       
        $categorias = Categoria::all();
        return view('produtos.create', compact('produtos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'Descricao' => 'required',
            'preco' => 'required',
            'descricao_id'
        ]);
        
        $produto = new Produto();
        $produto->Descricao = $request->Descricao;
        $produto->type = $request->type;
        $produto->descricao_id = $request->descricao_id;
        $produto->save();

        return redirect('produto')->with('success', 'produto created successfully.');
    }

    public function edit($id)
    {
        // Gate::authorize('update', Produto::class);
        $produto = Produto::findOrFail($id);
        $categorias = Categoria::all();
        return view('produtos.edit', compact('produto','categorias'));
    }

    public function update(Request $request, $id)
    {
        $produto = Produto::findOrFail($id);
        $produto->update($request->all());


        $produto->Descricao = $request->Descricao;
        $produto->preco = $request->preco;
        $produto->save();

        return redirect('produto')->with('success', 'pokemon created successfully.');
    }

    public function destroy($id)
    {
        // Gate::authorize('delete', Produto::class);
        $produto = Produto::findOrFail($id);
        $produto->delete();
        return redirect('produto')->with('success', 'produto deleted successfully.');
    }
}
