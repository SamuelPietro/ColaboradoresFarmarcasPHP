<?php

namespace App\Http\Controllers;

use App\Models\Colaborador as Colaborador;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ColaboradorController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function list()
    {
        $colaboradores = Colaborador::paginate(15);
        return view('colaboradores.list', ['colaboradores' => $colaboradores]);

        //return ColaboradorResource::collection($colaboradores);

    }

    /**
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('colaboradores.novo');
    }

    /**
     * @param Request $request
     * @return RedirectResponse|void
     */
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

    /**
     * @param $id
     * @return Application|Factory|View
     */
    public function show($id)
    {
        $colaborador = Colaborador::findOrFail($id);
        return view('colaboradores.ver', ['colaborador' => $colaborador]);
    }

    /**
     * @param $id
     * @return Application|Factory|View
     */
    public function edit($id)
    {
        $colaborador = Colaborador::findOrFail($id);
        return view('colaboradores.editar', ['colaborador' => $colaborador]);
    }

    /**
     * @param Request $request
     * @return RedirectResponse|void
     */
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

    /**
     * @param $id
     * @return RedirectResponse|void
     */
    public function destroy($id)
    {
        $colaborador = Colaborador::findOrFail($id);
        if ($colaborador->delete()) {
            return redirect()->route('list_colaboradores', ['id' => $colaborador->id])
                ->with('success', 'Colaborador excluído com sucesso!');
        }
    }

    /**
     * @param $id
     * @return Application|Factory|View
     */
    public function delete($id)
    {
        $colaborador = Colaborador::findOrFail($id);
        return view('colaboradores.delete', ['colaborador' => $colaborador]);
    }

    /**
     * @param Request $request
     * @return Application|Factory|View
     */
    public function search(Request $request)
    {
        $search = $request->input('search');

        $colaboradores = Colaborador::query()
            ->where('id', 'LIKE', "%{$search}%")
            ->orWhere('cpf', 'LIKE', "%{$search}%")
            ->get();

        return view('colaboradores.list', ['colaboradores' => $colaboradores]);
    }
}
