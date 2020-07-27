@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar meus Dados | <a href="/home-auxilio">HOME</a> </div>

                <div class="card-body">

                        @foreach ($brasileiros as $brasileiro)
                            <ul class="list-group">
                                <li class="list-group-item disabled" aria-disabled="true">Seus Dados</li>
                                <li class="list-group-item"> <label for="Nome">Nome: </label> <h3> {{ $brasileiro->nome }}</h3></li>
                                <li class="list-group-item"> <label for="cpf">CPF: </label> <h3> {{ $brasileiro->cpf }}</h3> </li>
                                <li class="list-group-item"> <label for="data_nascimento">Data Nascimento: </label> <h3> {{ date( 'd/m/Y' , strtotime($brasileiro->data_nascimento))}}</h3></li>
                                <li class="list-group-item"> <label for="nome_mae">Nome da Mãe: </label> <h3> {{ $brasileiro->nome_mae }}</h3></li>
                                <li class="list-group-item"> <label for="celular">Celular: </label> <h3> {{ $brasileiro->celular }}</h3></li>
                                <li class="list-group-item"> <label for="quanto_ganhava">Quanto Ganhava: </label> <h3> {{ $brasileiro->quanto_ganhava }}</h3> </li>
                                <li class="list-group-item"> <label for="enderco">Endereço Completo: </label> <h3> {{ $brasileiro->enderco }}</h3> </li>
                                <li class="list-group-item"> <label for="cidade">Cidade: </label> <h3> {{ $brasileiro->cidade }}</h3> </li>
                                <li class="list-group-item"> <label for="estado">Estado: </label> <h3> {{ $brasileiro->estado }}</h3> </li>
                                <li class="list-group-item"><h2>Dados Bancários</h2></li>
                                <li class="list-group-item"> <label for="banco">Banco: </label> <h3> {{ $brasileiro->banco }}</h3> </li>
                                <li class="list-group-item"> <label for="agencia">Agência: </label> <h3> {{ $brasileiro->agencia }}</h3> </li>
                                <li class="list-group-item"> <label for="conta_corrente">Conta Corrente: </label> <h3> {{ $brasileiro->conta_corrente }}</h3> </li>

                            </ul>
                        @endforeach

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <a href=" {{URL::to('meus-dados/'.$brasileiro->id.'/edit')}} ">
                                    <button type="submit" class="btn btn-primary">
                                        Editar meus dados
                                    </button>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
