<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empreendedor;

class CriarEmpreendedorController extends Controller
{
	public function index()
	{

		$empreendedores = Empreendedor::all();

		return view("empreendedor.listar",['empreendedores'=>$empreendedores]);

	}
   public function create()
	{
		return view("empreendedor.inserir");
		$emp = Empreendedor::find($id);
		$emp->atividade_id = $request->input('atividade_id');

	}

	public function store(Request $request)
	{
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


		$empreendedor->save();
		return redirect()->route('empreendedor.index');


	}

	public function show($id)
	{
		$empreendedor = Empreendedor::find($id);
		return view('empreendedor.mostrar', ['e'=> $empreendedor]);
	}

}
