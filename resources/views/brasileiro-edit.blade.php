@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Solicitar Auxílio | <a href="/home-auxilio">HOME</a></div>

                <div class="card-body">
                    <form action=" {{route('/auxilioupdate', $brasileiro->id)}} " method="POST" >
                        @method('PUT')
                        @csrf

                        <div class="form-group row">
                            <label for="nome" class="col-md-4 col-form-label text-md-right">Nome Completo</label>

                            <div class="col-md-6">
                                <input id="nome" type="text" class="form-control @error('name') is-invalid @enderror" name="nome" value="{{ $brasileiro->nome }}" required autocomplete="nome" autofocus placeholder="Digite seu nome completo">

                                @error('nome')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cpf" class="col-md-4 col-form-label text-md-right">CPF</label>

                            <div class="col-md-6">
                                <input id="cpf" type="text" class="form-control @error('name') is-invalid @enderror" name="cpf" value="{{ $brasileiro->cpf }}" required autocomplete="cpf" autofocus placeholder="Ex: 000.000.000-00">

                                @error('cpf')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="data_nascimento" class="col-md-4 col-form-label text-md-right">Data Nascimento</label>

                            <div class="col-md-6">
                                <input id="data_nascimento" type="date" class="form-control @error('name') is-invalid @enderror" name="data_nascimento" value="{{ $brasileiro->data_nascimento }}" required autocomplete="data_nascimento" autofocus placeholder="Digite seu data_nascimento completo">

                                @error('data_nascimento')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nome_mae" class="col-md-4 col-form-label text-md-right">Nome da Mãe Completo</label>

                            <div class="col-md-6">
                                <input id="nome_mae" type="text" class="form-control @error('name') is-invalid @enderror" name="nome_mae" value="{{ $brasileiro->nome_mae }}" required autocomplete="nome_mae" autofocus placeholder="Ex: Maria da Silva">

                                @error('nome_mae')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="celular" class="col-md-4 col-form-label text-md-right">Celular</label>

                            <div class="col-md-6">
                                <input id="celular" type="text" class="form-control @error('name') is-invalid @enderror" name="celular" value="{{ $brasileiro->celular }}" required autocomplete="celular" autofocus placeholder="99 9 9999-9999">

                                @error('celular')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="quanto_ganhava" class="col-md-4 col-form-label text-md-right">Quanto Ganhava</label>

                            <div class="col-md-6">
                                <input id="quanto_ganhava" type="text" class="form-control @error('name') is-invalid @enderror" name="quanto_ganhava" value="{{ $brasileiro->quanto_ganhava }}" required autocomplete="quanto_ganhava" autofocus placeholder="Ex: R$1500,00">
                                @error('quanto_ganhava')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="endereco" class="col-md-4 col-form-label text-md-right">Endereço Completo</label>

                            <div class="col-md-6">
                                <input id="endereco" type="text" class="form-control @error('name') is-invalid @enderror" name="enderco" value="{{ $brasileiro->enderco }}" required autocomplete="endereco" autofocus placeholder="Rua Joaquim Lima n34 Floral">

                                @error('endereco')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cidade" class="col-md-4 col-form-label text-md-right">Cidade</label>

                            <div class="col-md-6">
                                <input id="cidade" type="text" class="form-control @error('name') is-invalid @enderror" name="cidade" value="{{ $brasileiro->cidade }}" required autocomplete="cidade" autofocus placeholder="Digite a Cidade">

                                @error('cidade')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="estado" class="col-md-4 col-form-label text-md-right">Estado</label>

                            <div class="col-md-6">
                                <input id="estado" type="text" class="form-control @error('name') is-invalid @enderror" name="estado" value="{{ $brasileiro->estado }}" required autocomplete="estado" autofocus placeholder="Digite o estado onde mora">

                                @error('estado')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <hr>
                        <h2> Dados Bancários </h2>
                        <div class="form-group row">
                            <label for="banco" class="col-md-4 col-form-label text-md-right">Banco</label>

                            <div class="col-md-6">
                                <select id="banco" type="text" class="form-control @error('name') is-invalid @enderror" name="banco" value="{{ $brasileiro->banco }}" required autocomplete="banco" autofocus placeholder="Escolha seu banco">
                                    <option value="Brasil">Brasil</option>
                                    <option value="Caixa">Caixa</option>
                                </select>

                                @error('banco')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="agencia" class="col-md-4 col-form-label text-md-right">Agência</label>

                            <div class="col-md-6">
                                <input id="agencia" type="text" class="form-control @error('name') is-invalid @enderror" name="agencia" value="{{ $brasileiro->agencia }}" required autocomplete="agencia" autofocus placeholder="Digite a agencia do seu banco selecionado">

                                @error('agencia')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="conta_corrente" class="col-md-4 col-form-label text-md-right">Conta Corrente</label>

                            <div class="col-md-6">
                                <input id="conta_corrente" type="text" class="form-control @error('name') is-invalid @enderror" name="conta_corrente" value="{{ $brasileiro->conta_corrente }}" required autocomplete="conta_corrente" autofocus placeholder="Digite sua conta corrente">

                                @error('conta_corrente')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Alterar Dados') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
