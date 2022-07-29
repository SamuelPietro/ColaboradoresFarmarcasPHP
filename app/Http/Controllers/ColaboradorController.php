<?php

namespace App\Http\Controllers;

use App\Http\Resources\Colaborador as ColaboradorResource;
use App\Models\Colaborador as Colaborador;
use Illuminate\Http\Request;

class ColaboradorController extends Controller
{
    public function list(){
        $colaboradores = Colaborador::paginate(15);
        return view('colaboradores.list', ['colaboradores' => $colaboradores]);

        //return ColaboradorResource::collection($colaboradores);

    }

    public function create()
    {
        return view('colaboradores.novo');
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
            return redirect()->route('show_colaborador', ['id' => $colaborador->id])
                ->with('success', 'Colaborador cadastrado com sucesso!');
        }
    }

    public function show($id)
    {
        $colaborador = Colaborador::findOrFail($id);
        return view('colaboradores.ver', ['colaborador' => $colaborador]);
    }

    public function edit($id)
    {
        $colaborador = Colaborador::findOrFail($id);
        return view('colaboradores.editar', ['colaborador' => $colaborador]);
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
                return redirect()->route('edit_colaborador', ['id' => $colaborador->id])
                    ->with('success', 'Colaborador atualizado com sucesso!');
            }
    }

    public function delete($id)
    {
        $colaborador = Colaborador::findOrFail($id);
        return view('colaboradores.delete', ['colaborador' => $colaborador]);
    }

    public function destroy($id)
    {
        $colaborador = Colaborador::findOrFail($id);
        if ($colaborador->delete()) {
            return redirect()->route('list_colaboradores', ['id' => $colaborador->id])
                ->with('success', 'Colaborador excluído com sucesso!');
        }
    }

    public function search(Request $request){
        $search = $request->input('search');

        $colaboradores = Colaborador::query()
            ->where('id', 'LIKE', "%{$search}%")
            ->orWhere('cpf', 'LIKE', "%{$search}%")
            ->get();

        return view('colaboradores.list', ['colaboradores' => $colaboradores]);
    }
}
