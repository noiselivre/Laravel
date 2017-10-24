@extends('template.app')

@section('content')
    <div class="card">
        <h3 class="card-header">Editar Aluno</h3>
            <div class="card-block">
                <form class="col-md-12" action="{{ url('/alunos/update') }}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $aluno->id }}">
                    <div class="from-group col-md-12">
                        <label class="control-label">Nome</label>
                        <input name="nome" value="{{ $aluno->nome }} "class="form-control" placeholder="Digite o nome do aluno">
                    </div>
                    <div class="col-md-12">
                    <button style="margin-top: 5px; float: right" class="btn btn-primary">salvar</button>
                    </div>
                </form>
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