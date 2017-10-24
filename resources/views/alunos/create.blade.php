@extends('template.app')

@section('content')
    <div class="card">
        <h3 class="card-header">Novo Aluno</h3>
            <div class="card-block">
                <form class="col-md-12" action="{{ url('/alunos/store') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="from-group col-md-12">
                        <label class="control-label">Nome</label>
                        <input name="nome" class="form-control" placeholder="Digite o nome do aluno">
                    </div>
                    <div class="from-group col-md-12">
                        <label class="control-label">Data de nascimento</label>
                        <input name="data" class="form-control" placeholder="Digite a data de nascimento do aluno">
                    </div>
                    <div class="col-md-12">
                    <button style="margin-top: 5px; float: right" class="btn btn-primary">salvar</button>
                    </div>
                </form>
            </div>
    </div>
@endsection