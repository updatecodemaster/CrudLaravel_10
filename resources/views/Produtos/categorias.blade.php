@extends('layouts/app')
@section('title', '$exibir_categoria->nome')
@section('conteudo')
    <div class="row mt-3 mr-3">
        @foreach ($exibir_categoria as $produto)
            <div class="col-md-3">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">Categoria:
                            {{ Str::limit($produto->slug, 15) }}</strong>
                        <h3 class="mb-0">{{ str::limit($produto->nome, 15) }}</h3>
                        <div class="mb-1 text-body-secondary">Data: {{ $produto->created_at }}</div>
                        <p class="card-text mb-auto">Preço: {{ $produto->preco }} Reais.</p>
                        <a type="button" href="{{ route('detalhes', $produto->id) }}" class="btn btn-dark">Veja Mais
                            <i class="fa-solid fa-cart-plus"></i></a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg"
                            role="img" src="{{ $produto->image }}" preserveAspectRatio="xMidYMid slice"
                            focusable="false" />
                    </div>
                </div>
            </div>
        @endforeach
    </div>


    {{ $produtos->links('layouts/pagination') }}

@endsection
