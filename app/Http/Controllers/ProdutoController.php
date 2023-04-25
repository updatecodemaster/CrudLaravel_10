<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produtos;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produtos = Produtos::paginate(12);

        return view('Produtos/index', compact('produtos'));
    }

    public function detalhes_do_produto($id_do_produto)
    {
        $exibir_produto = Produtos::where('id', $id_do_produto)->first();

        return view('produtos/detalhes', compact('exibir_produto'));
    }

    public function all_produtos_categoria($id_da_categoria)
    {
        $exibir_categoria = Produtos::where('id_categoria', $id_da_categoria)->get();

        $produtos = Produtos::paginate(12);

        return view('produtos/categorias', compact('exibir_categoria', 'produtos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
