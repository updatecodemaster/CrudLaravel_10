@extends('layouts/app')
@section('title', $exibir_produto->nome)
@section('conteudo')
    <div class="container py-4">
        <div class="p-5 mb-4 bg-body-tertiary rounded-3">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold">{{ $exibir_produto->nome }}</h1>
                <p class="col-md-8 fs-4">{{ $exibir_produto->descricao }}</p>
                <button class="btn btn-primary btn-lg" type="button">Comprar</button>
            </div>
        </div>

        <div class="row align-items-md-stretch">
            <div class="col-md-6">
                <div class="h-100 p-5 text-bg-dark rounded-3">
                    <h2>Imagens do produto</h2>
                    <img width="200" height="250" src="../{{ $exibir_produto->image }}" />

                </div>
            </div>
            <div class="col-md-6">
                <div class="h-100 p-5 bg-body-tertiary border rounded-3">
                    <h2>Informacoes adicionais</h2>
                    <p>Usuario que comprou esse produto: {{ $exibir_produto->user->firstName }}.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
