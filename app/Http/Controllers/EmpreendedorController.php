<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Empreendedor;
use App\Secretaria;
use App\Atividade;
use \Validator;
use File;

class EmpreendedorController extends Controller
{
	public function index()
	{

		$empreendedores = Empreendedor::all();

		return view("empreendedor.listar",['empreendedores'=>$empreendedores]);

	}

	public function create()
	{
		$secretarias = Secretaria::all();
		$atividades = Atividade::all();
		//dd($atividades[0]->atividade);
		return view("empreendedor.inserir", compact('atividades','secretarias'));

	}

	public function store(Request $request)
	{
		$mensagens = [
          'imagem.mimes' => 'Somente imagem no formato de jpeg e png.',
      ];

		$validacao = $request->validate([
			'nome' => 'required',
			'sexo' => 'required',
			'rg' => 'required|numeric',
			'cpf' => 'nullable|numeric',
			'dt_nasc' => 'required',
			'secretaria_id' => 'required',
			'rua' => 'required',
			'numero' => 'nullable',
			'bairro' => 'required',
			'cidade' => 'required',
			'estado' => 'required',
			'cep' => 'required|numeric',
			'telefone' => 'required|numeric',
			'escolaridade' => 'required',
			'atividade_id' => 'required',
			'trabalha_informal' => 'required',
			'ganho_mensal' => 'nullable|numeric',
			'formacao_atividade' => 'required',
			'imagem'=>'nullable|mimes:jpeg,png',

		]);

      if(Input::file('imagem'))
      {
        $imagem = Input::file('imagem');
        $extensao = $imagem->getClientOriginalExtension();
        if($extensao != 'jpg' && $extensao != 'png')
        {
          return back()->with('erro','Erro: Este arquivo não é imagem');
        }
      }

		$empreendedor = new Empreendedor();
        //$empreendedor->id = $request->input('id');
		$empreendedor->nome = $request->input('nome');
		$empreendedor->sexo = $request->input('sexo');
		$empreendedor->rg = $request->input('rg');
		$empreendedor->cpf = $request->input('cpf');
		$empreendedor->dt_nasc = $request->input('dt_nasc');
		$empreendedor->secretaria_id = $request->input('secretaria_id');
		$empreendedor->rua = $request->input('rua');
		$empreendedor->numero = $request->input('numero');
		$empreendedor->bairro = $request->input('bairro');
		$empreendedor->cidade = $request->input('cidade');
		$empreendedor->cidade = $request->input('cidade');
		$empreendedor->estado = $request->input('estado');
		$empreendedor->cep = $request->input('cep');
		$empreendedor->telefone = $request->input('telefone');
		$empreendedor->escolaridade = $request->input('escolaridade');
		$empreendedor->atividade_id = $request->input('atividade_id');
		$empreendedor->trabalha_informal = $request->input('trabalha_informal');
		$empreendedor->ganho_mensal = $request->input('ganho_mensal');
		$empreendedor->formacao_atividade = $request->input('formacao_atividade');
		 if(Input::file('imagem'))
      {
        File::move($imagem,public_path().'/imagens'.$empreendedor->id.'.'.$extensao);
        $empreendedor->imagem = '/imagens'.$empreendedor->id.'.'.$extensao;

		$empreendedor->save();

		return redirect()->route('empreendedor.index')->with('success','Empreendedor cadastrado!');


	}
}

	public function show($id)
	{
		$empreendedor = Empreendedor::find($id);
		return view('empreendedor.mostrar', ['e'=> $empreendedor]);
	}


	public function edit($id)
	{

		$e = Empreendedor::find($id);
		$secretarias = Secretaria::all();
		$atividades = Atividade::all();
		//dd($atividades[0]->atividade);

		return view("empreendedor.editar", compact('e','atividades','secretarias'));
	}

	public function update(Request $request, $id)
	{

      $validacao = $request->validate([
			'nome' => 'required',
			'sexo' => 'required',
			'rg' => 'required|numeric',
			'cpf' => 'nullable|numeric',
			'dt_nasc' => 'required',
			'secretaria_id' => 'required',
			'rua' => 'required',
			'numero' => 'nullable',
			'bairro' => 'required',
			'cidade' => 'required',
			'estado' => 'required',
			'cep' => 'required|numeric',
			'telefone' => 'required|numeric',
			'escolaridade' => 'required',
			'atividade_id' => 'required',
			'trabalha_informal' => 'required',
			'ganho_mensal' => 'nullable',
			'formacao_atividade' => 'required',
			'imagem'=>'required|mimes:jpeg,png',

		]);

		$empreendedor = Empreendedor::find($id);
		$empreendedor->nome = $request->input('nome');
		$empreendedor->sexo = $request->input('sexo');
		$empreendedor->rg = $request->input('rg');
		$empreendedor->cpf = $request->input('cpf');
		$empreendedor->dt_nasc = $request->input('dt_nasc');
		$empreendedor->secretaria_id = $request->input('secretaria_id');
		$empreendedor->rua = $request->input('rua');
		$empreendedor->numero = $request->input('numero');
		$empreendedor->bairro = $request->input('bairro');
		$empreendedor->cidade = $request->input('cidade');
		$empreendedor->cidade = $request->input('cidade');
		$empreendedor->estado = $request->input('estado');
		$empreendedor->cep = $request->input('cep');
		$empreendedor->telefone = $request->input('telefone');
		$empreendedor->escolaridade = $request->input('escolaridade');
		$empreendedor->atividade_id = $request->input('atividade_id');
		$empreendedor->trabalha_informal = $request->input('trabalha_informal');
		$empreendedor->ganho_mensal = $request->input('ganho_mensal');
		$empreendedor->formacao_atividade = $request->input('formacao_atividade');
		$empreendedor->imagem = $request->input('imagem');
		$empreendedor->save();
		
		return redirect()->route('empreendedor.index')->with('success','Empreendedor Atualizado!');


	}

	public function destroy($id)
	{
        $empreendedor = Empreendedor::find($id); // consulta no BD
        $empreendedor->delete();  // Exclui do BD

        return redirect()->route('empreendedor.index')->with('success','Excluido com sucesso!');
    }


}
