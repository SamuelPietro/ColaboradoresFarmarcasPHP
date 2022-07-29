@extends('layouts.app')
@section('content')

    <div class="content-title">
        <h2>Cadastrar novo colaborador</h2>
    </div>
    <form method="POST" action="{{ route('store_colaborador') }}">
        @csrf <!-- {{ csrf_field() }} -->
        <div class="flex flex-col lg:flex-row lg:gap-6">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input id="nome" name="nome" type="text" required>
            </div>
        </div>
        <div class="flex flex-col lg:flex-row lg:gap-6">
            <div class="form-group">
                <label for="cpf">CPF</label>
                <input id="cpf" name="cpf" type="text" required>
            </div>
            <div class="form-group">
                <label for="rg">RG</label>
                <input id="rg" name="rg" type="text">
            </div>
            <div class="form-group">
                <label for="nascimento">Dt. Nasc.</label>
                <input id="nascimento" name="nascimento" type="date">
            </div>
        </div>
        <div class="flex flex-col lg:flex-row lg:gap-6">
            <div class="form-group">
                <label for="salario">Salário</label>
                <input id="salario" name="salario" type="text">
            </div>
            <div class="form-group">
                <label for="celular">Celular</label>
                <input id="celular" name="celular" type="tel" required>
            </div>

            <div class="form-group">
                <label for="email">E-mail</label>
                <input id="email" name="email" type="email" required>
            </div>

        </div>
        <div class="flex flex-col lg:flex-row lg:gap-6">
            <div class="form-group">
                <label for="cep">CEP</label>
                <input id="cep" name="cep" type="text">
            </div>
            <div class="form-group">
                <label for="logradouro">Logradouro</label>
                <input id="logradouro" name="logradouro" type="text" />
            </div>
            <div class="form-group">
                <label for="numero">Número</label>
                <input id="numero" name="numero" type="text"/>
            </div>
            <div class="form-group">
                <label for="complemento">Complemento</label>
                <input id="complemento" name="complemento" type="text"/>
            </div>
        </div>
        <div class="flex flex-col lg:flex-row lg:gap-6">
            <div class="form-group">
                <label for="bairro">Bairro</label>
                <input id="bairro" name="bairro" type="text" />
            </div>
            <div class="form-group">
                <label for="cidade">Cidade</label>
                <input id="cidade" name="cidade" type="text" />
            </div>
            <div class="form-group">
                <label for="uf">Estado</label>
                <select id="uf" name="uf">
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG" selected>Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                </select>
            </div>
        </div>
        <div class="flex flex-col lg:flex-row lg:gap-6">
            <button type="submit" class="btn mt-4">Salvar</button>
            <button type="reset" class="btn-danger lg:ml-6 mt-4">Limpar</button>
        </div>
    </form>

    @endsection
