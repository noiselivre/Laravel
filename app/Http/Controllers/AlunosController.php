<?php

namespace App\Http\Controllers;

use App\Aluno;
use App\Nascimento;
use Illuminate\Http\Request;

class AlunosController extends Controller
{
    private $nascimentos_controller;
    private $aluno;

    public function __construct(NascimentosController $nascimentos_controller)
    {
        $this->nascimentos_controller = $nascimentos_controller;
        $this->aluno = new Aluno();
    }

    public function index()
    {
        $list_alunos = Aluno::all();
        return view('alunos.index', [
            'alunos' => $list_alunos
        ]);
    }
    
    public function novoView()
    {
        return view('alunos.create');
    }

    public function store(Request $request)
    {
        $aluno = Aluno::create($request->all());
        if ($request->data) {
            $nascimento = new Nascimento();
            $nascimento->data = $request->data;
            $nascimento->aluno_id = $aluno->id;
            $this->nascimentos_controller->store($nascimento);
        }
        
        return redirect("/alunos")->with("message", "Cadastro criado com sucesso!");
    }

    
    public function excluirView($id)
    {
        return view('alunos.delete', [
            'aluno' => $this->getAluno($id)
        ]);
    }

    public function detroy($id)
    {
        $this->getAluno($id)->delete();
        return redirect(url('alunos'))->with('success', 'Excluído');
    }

    public function editarView($id)
    {
        return view('alunos.edit', [
           'aluno' => $this->getAluno($id)
        ]);
    }

    protected function getAluno($id)
    {
        return $this->aluno->find($id);
    }

    public function update(Request $request)
    {
        $aluno = $this->getAluno($request->id);
        $aluno->update($request->all());
        return redirect('/alunos');
    }


}
