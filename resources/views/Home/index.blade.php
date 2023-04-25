@extends('layouts/app')
@section('title', 'Home')
@section('conteudo')
    <h1>Os 4 Produtos mais comprados!</h1>
    <div class="row mt-3">
        @foreach ($maisVendidos as $maisvendido)
            <div class="col-md-3">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">Categoria: {{ $maisvendido->slug }}</strong>
                        <h3 class="mb-0">{{ Str::limit($maisvendido->nome, 15) }}</h3>
                        <div class="mb-1 text-body-secondary">Data: {{ $maisvendido->created_at }}</div>
                        <p class="card-text mb-auto">Preço: {{ $maisvendido->preco }} Reais.</p>
                        <a href="#" class="stretched-link">Veja mais +</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg"
                            role="img" src="{{ $maisvendido->image }}" preserveAspectRatio="xMidYMid slice"
                            focusable="false" />
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
