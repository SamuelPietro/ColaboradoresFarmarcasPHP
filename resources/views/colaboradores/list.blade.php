@extends('layouts.app')
@section('content')

    <div class="content-title">
        <h2>Colaboradores</h2>
        <a href="colaborador/novo" type="button" class="btn-incluir">Novo</a>
    </div>
    <div class="flex">
        <table class="w-full mb-10">
            <thead class="align-bottom ">
            <tr>
                <th scope="col" class="table-title">Nome</th>
                <th scope="col" class="table-title hidden lg:block">Contato</th>
                <th scope="col" class="table-title">Ações</th>
            </tr>
            <tbody>
            @foreach($colaboradores as $key => $colaborador)
                <tr>
                    <td class="table-content">
                        <p class="font-semibold ">{{ $colaborador->nome }}</p>
                        <p class="text-slate-400 hidden lg:block ">{{ $colaborador->cpf }}</p>
                        <p class="text-slate-400 lg:hidden ">{{ $colaborador->celular }}</p>
                    </td>
                    <td class="table-content hidden lg:block ">
                        <p>{{ $colaborador->email }}</p>
                        <p class="text-slate-400">{{ $colaborador->celular }}</p>
                    </td>
                    <td class="table-content text-2xl">
                        <div class="gap-3 flex">
                            <a href="{{ route('show_colaborador', ['id' => $colaborador->id]) }}" title="Detalhar">
                                <i class="bi bi-eye-fill text-green-700"></i>
                            </a>
                            <a href="{{ route('edit_colaborador', ['id' => $colaborador->id]) }}" title="Editar">
                                <i class="bi bi-pencil-square text-yellow-500"></i>
                            </a>
                            <a href="{{ route('delete_colaborador', ['id' => $colaborador->id]) }}" title="Excluir">
                                <i class="bi bi-trash-fill text-red-500"></i>
                            </a>
                        </div>
                    </td>
                </tr>
            @endforeach

            </tbody>


            </thead>

        </table>
    </div>
@endsection

