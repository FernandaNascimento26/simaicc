<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Secretaria;

class SecretariaController extends Controller
{

	public function index()
	{

		$secretarias = Secretaria::all();

		return view("secretaria.listar",['secretarias'=>$secretarias]);

	}

	public function create()
	{
		return view("secretaria.inserir");
	}

	public function store(Request $request)
	{

		 $validacao = $request->validate([
			'cidade' => 'required',
			'estado' => 'required',
			'endereco' => 'required',
			'telefone' => 'required',
			'cnpj' => 'required|numeric',
			]);
		 
		$secretaria = new Secretaria();
        //$secretaria->id = $request->input('id');
		$secretaria->cidade = $request->input('cidade');
		$secretaria->estado = $request->input('estado');
		$secretaria->endereco = $request->input('endereco');
		$secretaria->telefone = $request->input('telefone');
		$secretaria->cnpj = $request->input('cnpj');

		$secretaria->save();
		return redirect()->route('secretaria.index')->with('success','Secretaria cadastrada!');;


	}

	public function show($id)
	{
		$secretaria = Secretaria::find($id);
		 return view('secretaria.mostrar', ['s'=> $secretaria]);
	}


	public function edit($id)
	{
		$secretaria = Secretaria::find($id);
		return view('secretaria.editar', ['s' => $secretaria]);
	}

	public function update(Request $request, $id)
	{
         $validacao = $request->validate([
			'cidade' => 'required',
			'estado' => 'required',
			'endereco' => 'required',
			'telefone' => 'required',
			'cnpj' => 'required|numeric',
			]);
			
        $secretaria = Secretaria::find($id); // consulta dos dados que estão no BD 
        $secretaria->cidade = $request->input('cidade');
        $secretaria->estado = $request->input('estado');
        $secretaria->endereco = $request->input('endereco');
        $secretaria->telefone = $request->input('telefone');
        $secretaria->cnpj = $request->input('cnpj');
        $secretaria->save();

        return redirect()->route('secretaria.index')->with('success','Dados Atualizados com Sucesso!!');
    }

    public function destroy($id)
    {
        $secretaria = Secretaria::find($id); // consulta no BD
        $secretaria->delete();  // Exclui do BD

        return redirect()->route('secretaria.index')->with('success','Excluido com sucesso!');
    }

}
