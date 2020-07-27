@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Bem vindo ao seu painel administrativo. </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div>

                            @if (Session::has('message'))
                            <div class="alert alert-primary" role="alert">
                                <h3>{{ Session::get('message') }}</h3>
                            </div>
                            @endif

                        <br>
                        <h2>O que você deseja fazer?</h2>
                        <hr>
                        <div>
                            <a href="/solicitar-auxilio"><button class="btn btn-primary">Solicitar Auxílio</button></a>
                            <a href="/consultar-auxilio"><button class="btn btn-primary">Consultar Auxílio</button></a>
                            @foreach ($brasileiros as $brasileiro)
                                <a href=" {{URL::to('meus-dados/'.$brasileiro->id.'/auxilio')}} "><button class="btn btn-primary">Meus Dados</button></a>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
