@extends('layouts.app')
@section('content')
    <div class="content-title">
        <h2>Excluir colaborador</h2>
    </div>
    <p class="font-bold text-2xl">Tem certeza que deseja excluir este colaborador?</p>
    Colaborador: {{ $colaborador->nome }}
    <p class="font-bold text-l text-red-500 mb-4">Essa ação não pode ser desfeita</p>

    <form method="POST" action="{{ route('destroy_colaborador', ['id' => $colaborador->id]) }}">
        @csrf <!-- {{ csrf_field() }} -->

        <input hidden name="nome" value="{{ $colaborador->nome }}">
        <a href="{{ route('list_colaboradores') }}">
            <button type="button" class="btn">Cancelar</button>
        </a>
        <button type="submit" class="btn-danger">Confirmar</button>
    </form>


@endsection
