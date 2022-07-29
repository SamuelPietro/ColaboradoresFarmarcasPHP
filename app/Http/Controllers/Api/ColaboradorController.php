<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Colaborador as ColaboradorResource;
use App\Models\Colaborador as Colaborador;
use Illuminate\Http\Request;

class ColaboradorController extends Controller
{

    public function index()
    {
        $colaboradores = Colaborador::paginate(15);
        return ColaboradorResource::collection($colaboradores);
    }

    public function show($id)
    {
        $colaborador = Colaborador::findOrFail($id);
        return new ColaboradorResource($colaborador);
    }

    public function store(Request $request)
    {
        $colaborador = new Colaborador;
        $colaborador->nome = $request->input('nome');
        $colaborador->cpf = $request->input('cpf');
        $colaborador->rg = $request->input('rg');
        $colaborador->nascimento = $request->input('nascimento');
        $colaborador->salario = $request->input('salario');
        $colaborador->celular = $request->input('celular');
        $colaborador->email = $request->input('email');
        $colaborador->cep = $request->input('cep');
        $colaborador->logradouro = $request->input('logradouro');
        $colaborador->numero = $request->input('numero');
        $colaborador->complemento = $request->input('complemento');
        $colaborador->bairro = $request->input('bairro');
        $colaborador->cidade = $request->input('cidade');
        $colaborador->uf = $request->input('uf');

        if ($colaborador->save()) {
            return new ColaboradorResource($colaborador);
        }
    }

    public function update(Request $request)
    {
        $colaborador = Colaborador::findOrFail($request->id);
        $colaborador->nome = $request->input('nome');
        $colaborador->cpf = $request->input('cpf');
        $colaborador->rg = $request->input('rg');
        $colaborador->nascimento = $request->input('nascimento');
        $colaborador->salario = $request->input('salario');
        $colaborador->celular = $request->input('celular');
        $colaborador->email = $request->input('email');
        $colaborador->cep = $request->input('cep');
        $colaborador->logradouro = $request->input('logradouro');
        $colaborador->numero = $request->input('numero');
        $colaborador->complemento = $request->input('complemento');
        $colaborador->bairro = $request->input('bairro');
        $colaborador->cidade = $request->input('cidade');
        $colaborador->uf = $request->input('uf');

        if ($colaborador->save()) {
            return new ColaboradorResource($colaborador);
        }
    }

    public function destroy($id)
    {
        $colaborador = Colaborador::findOrFail($id);
        if ($colaborador->delete()) {
            return new ColaboradorResource($colaborador);
        }

    }
}
