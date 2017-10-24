@extends("template.app")

@section("content")
    <style>
        .btn-action {
            padding: 5px;
            margin-left: 5px;
            float: right;
        }
    </style>


    @foreach($alunos as $aluno)
    <div class="card">        
        <h3 class="card-header">{{$aluno->nome}}
            <a href="{{ url("/alunos/$aluno->id/excluir") }}" class="btn btn-xs btn-danger btn-action">
                Excluir
            </a>
            <a href="{{ url("/alunos/$aluno->id/editar") }}" class="btn btn-xs btn-primary btn-action">
                Editar
            </a>            
        </h3>        
            <div class="card-block">
                <p class="card-text"><strong>Data de Nascimento: </strong>{{$aluno->nascimento}}</p>
            </div>    
    </div>
    @endforeach
@endsection