<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $maisVendidos = Produtos::mais_vendidos(4);

        return view('home/index', compact('maisVendidos'));
    }

    public function mais_vendidos($quantidade)
    {
        $ids = Produtos::select('id', DB::raw('count(*) as total'))
            ->groupBy('id')
            ->orderByRaw('count(*) DESC')
            ->limit($quantidade)
            ->pluck('id');
        $produtos = Produtos::whereIn('id', $ids)->get();

        return response()->json($produtos);
    }
}
