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

                        <h2>O que você deseja fazer?</h2>
                        <div>
                            <a href="/solicitar-auxilio"><button>Solicitar Auxílio</button></a>
                            <a href="/consultar-auxilio"><button>Consultar Auxílio</button></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
