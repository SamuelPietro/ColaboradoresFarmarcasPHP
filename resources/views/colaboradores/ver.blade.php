@extends('layouts.app')
@section('content')

    <div class="content-title">
        <h2>Detalhes do colaborador</h2>
    </div>
    <form>
        <div class="flex flex-col lg:flex-row lg:gap-6">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input disabled id="nome" name="nome" type="text" value="{{ $colaborador->nome }}">
            </div>
        </div>
        <div class="flex flex-col lg:flex-row lg:gap-6">
            <div class="form-group">
                <label for="cpf">CPF/CNPJ</label>
                <input disabled id="cpf" required name="cpf" type="text" value="{{ $colaborador->cpf }}"/>
            </div>
            <div class="form-group">
                <label for="rg">RG</label>
                <input disabled id="rg" name="rg" type="text" value="{{ $colaborador->rg }}"/>
            </div>
            <div class="form-group">
                <label for="nascimento">Dt. Nasc.</label>
                <input disabled id="nascimento" name="nascimento" type="date" value="{{ $colaborador->dat_nasc }}"/>
            </div>
        </div>

        <div class="flex flex-col lg:flex-row lg:gap-6">
            <div class="form-group">
                <label for="salario">Salário</label>
                <input disabled id="salario" name="salario" type="text" value="{{ $colaborador->salario }}">
            </div>
            <div class="form-group">
                <label for="celular">Celular</label>
                <input disabled id="celular" name="celular" type="tel" value="{{ $colaborador->celular }}"/>
            </div>

            <div class="form-group">
                <label for="email">E-mail</label>
                <input disabled id="email" required name="email" type="email" value="{{ $colaborador->email }}"/>
            </div>

        </div>
        <div class="flex flex-col lg:flex-row lg:gap-6">
            <div class="form-group">
                <label for="cep">CEP</label>
                <input disabled id="cep" name="cep" type="text" value="{{ $colaborador->cep }}"/>
            </div>
            <div class="form-group">
                <label for="logradouro">Logradouro</label>
                <input disabled id="logradouro" name="logradouro" type="text" value="{{ $colaborador->logradouro }}"/>
            </div>
            <div class="form-group">
                <label for="numero">Número</label>
                <input disabled id="numero" name="numero" type="text" value="{{ $colaborador->numero }}"/>
            </div>
            <div class="form-group">
                <label for="complemento">Complemento</label>
                <input disabled id="complemento" name="complemento" type="text"
                       value="{{ $colaborador->complemento }}"/>
            </div>
        </div>
        <div class="flex flex-col lg:flex-row lg:gap-6">
            <div class="form-group">
                <label for="bairro">Bairro</label>
                <input disabled id="bairro" name="bairro" type="text" value="{{ $colaborador->bairro }}"/>
            </div>
            <div class="form-group">
                <label for="cidade">Cidade</label>
                <input disabled id="cidade" name="cidade" type="text" value="{{ $colaborador->cidade }}"/>
            </div>
            <div class="form-group">
                <label for="uf">Estado</label>
                <select disabled id="uf" name="uf">
                    <option {{ old('uf') == 'AC' ? "selected" : "" }} value="AC">Acre</option>
                    <option {{ old('uf') == 'AL' ? "selected" : "" }} value="AL">Alagoas</option>
                    <option {{ old('uf') == 'AP' ? "selected" : "" }} value="AP">Amapá</option>
                    <option {{ old('uf') == 'AM' ? "selected" : "" }} value="AM">Amazonas</option>
                    <option {{ old('uf') == 'BA' ? "selected" : "" }} value="BA">Bahia</option>
                    <option {{ old('uf') == 'CE' ? "selected" : "" }} value="CE">Ceará</option>
                    <option {{ old('uf') == 'DF' ? "selected" : "" }} value="DF">Distrito Federal</option>
                    <option {{ old('uf') == 'ES' ? "selected" : "" }} value="ES">Espírito Santo</option>
                    <option {{ old('uf') == 'GO' ? "selected" : "" }} value="GO">Goiás</option>
                    <option {{ old('uf') == 'MA' ? "selected" : "" }} value="MA">Maranhão</option>
                    <option {{ old('uf') == 'MT' ? "selected" : "" }} value="MT">Mato Grosso</option>
                    <option {{ old('uf') == 'MS' ? "selected" : "" }} value="MS">Mato Grosso do Sul</option>
                    <option {{ old('uf') == 'MG' ? "selected" : "" }} value="MG">Minas Gerais</option>
                    <option {{ old('uf') == 'PA' ? "selected" : "" }} value="PA">Pará</option>
                    <option {{ old('uf') == 'PB' ? "selected" : "" }} value="PB">Paraíba</option>
                    <option {{ old('uf') == 'PR' ? "selected" : "" }} value="PR">Paraná</option>
                    <option {{ old('uf') == 'PE' ? "selected" : "" }} value="PE">Pernambuco</option>
                    <option {{ old('uf') == 'PI' ? "selected" : "" }} value="PI">Piauí</option>
                    <option {{ old('uf') == 'RR' ? "selected" : "" }} value="RR">Roraima</option>
                    <option {{ old('uf') == 'RO' ? "selected" : "" }} value="RO">Rondônia</option>
                    <option {{ old('uf') == 'RJ' ? "selected" : "" }} value="RJ">Rio de Janeiro</option>
                    <option {{ old('uf') == 'RN' ? "selected" : "" }} value="RN">Rio Grande do Norte</option>
                    <option {{ old('uf') == 'RS' ? "selected" : "" }} value="RS">Rio Grande do Sul</option>
                    <option {{ old('uf') == 'SC' ? "selected" : "" }} value="SC">Santa Catarina</option>
                    <option {{ old('uf') == 'SP' ? "selected" : "" }} value="SP">São Paulo</option>
                    <option {{ old('uf') == 'SE' ? "selected" : "" }} value="SE">Sergipe</option>
                    <option {{ old('uf') == 'TO' ? "selected" : "" }} value="TO">Tocantins</option>

                </select>
            </div>
        </div>
    </form>

@endsection
