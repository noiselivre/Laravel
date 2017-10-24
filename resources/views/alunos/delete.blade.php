@extends('template.app')

@section('content')
    <div class="card">
        <h3 class="card-header">Excluir Aluno</h3>
            <div class="card-block">
                <a class="btn btn-default" href="{{ url("alunos") }}">
                    Cancelar
                </a>
                <a class="btn btn-danger" href="{{ url("alunos/$aluno->id/destroy") }}">
                    Excluir
                </a>
            </div>
    </div>
    <div class="card" style="margin-top: 20px;">        
        <h3 class="card-header">{{$aluno->nome}}
            
        </h3>        
            <div class="card-block">
                <p class="card-text"><strong>Data de Nascimento: </strong>{{$aluno->nascimento}}</p>
            </div>    
    </div>
@endsection