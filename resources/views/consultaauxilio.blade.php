@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Consultar Auxílio | <a href="/home-auxilio">HOME</a> </div>

                <div class="card-body">

                            <ul class="list-group">

                                <li class="list-group-item disabled" aria-disabled="true"><h3>Resposta do seu Auxílio Emergencial</h3></li>
                                <li class="list-group-item disabled" aria-disabled="true">
                                    <div>
                                        @if (Session::has('message'))
                                            <div class="alert alert-primary" role="alert">
                                                <h3>{{ Session::get('message') }}</h3>
                                            </div>
                                        @endif

                                    </div>
                                </li>
                            </ul>
                            <br>

                        {{--  <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <a href=" {{URL::to('meus-dados/'.$brasileiro->id.'/edit')}} ">
                                    <button type="submit" class="btn btn-primary">
                                        Editar meus dados
                                    </button>
                                </a>
                            </div>
                        </div>  --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
