<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empreendedor;
use App\Secretaria;
use App\Atividade;

class CriarEmpreendedorController extends Controller
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
		
		return view("empreendedor.inserir", compact('atividades','secretarias'));

	}

	public function store(Request $request)
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
			'ganho_mensal' => 'nullable|numeric',
			'formacao_atividade' => 'required',

		]);

		$empreendedor = new Empreendedor(); // Pega todos os empreededores do BD
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

		$empreendedor->save();

		return redirect()->route('empreendedor.index')->with('success','Empreendedor cadastrado!');


	}

}
