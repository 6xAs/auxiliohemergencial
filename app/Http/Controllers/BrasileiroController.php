<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Flash;
use Redirect;
use App\Brasileiro;
use Auth;



class BrasileiroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brasileiros = \App\Brasileiro::where('id', Auth::user()->id)->get();
        return view('home-auxilio', compact('brasileiros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('solicitar-auxilio');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Pegar os dados do Post
        $nome                   = $request->input('nome');
        $cpf                    = $request->input('cpf');
        $data_nascimento        = $request->input('data_nascimento');
        $nome_mae               = $request->input('nome_mae');
        $celular                = $request->input('celular');
        $quanto_ganhava         = $request->input('quanto_ganhava');
        $enderco                = $request->input('enderco');
        $cidade                 = $request->input('cidade');
        $estado                 = $request->input('estado');
        $banco                  = $request->input('banco');
        $agencia                = $request->input('agencia');
        $conta_corrente         = $request->input('conta_corrente');

        // Inserir no DB
        DB::table('brasileiros')->insert(
            [
                'nome' => $nome, 'cpf' => $cpf, 'data_nascimento' => $data_nascimento,
                'nome_mae' => $nome_mae, 'celular' => $celular, 'quanto_ganhava' => $quanto_ganhava,
                'enderco' => $enderco, 'cidade' => $cidade, 'estado' => $estado, 'banco' => $banco,
                'agencia' => $agencia, 'conta_corrente' => $conta_corrente

            ]
        );
        // Retornar algo para o usuario
        $request->Session()->flash('message', 'Auxílio Solicitado com Sucesso!');
        return Redirect::to('/home-auxilio');

    }

    public function consultarAuxilio(request $request){

        $max_valor_salario = 10000;
        $quanto_ganhava = DB::table('brasileiros')->select('quanto_ganhava')->get();

        if (count($quanto_ganhava) >= $max_valor_salario) {

            $request->Session()->flash('message', 'Seu auxílio não pode ser autorizado!');
            return view('consultaauxilio');

        }else{
            $request->Session()->flash('message', 'Seu auxílio foi autorizdo, seu dinheiro estará na conta esse mês, aguarde...');
            return view('consultaauxilio');
        }

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $brasileiros = \App\Brasileiro::where('id', Auth::user()->id)->get();
        return view('dados-brasileiros', compact('brasileiros'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Trazer os dados para edição
        $brasileiro = \App\Brasileiro::find($id);
        return view('brasileiro-edit', compact('brasileiro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Alterar dados Auxilio

        // Pegar os dados do Post
        $nome                   = $request->input('nome');
        $cpf                    = $request->input('cpf');
        $data_nascimento        = $request->input('data_nascimento');
        $nome_mae               = $request->input('nome_mae');
        $celular                = $request->input('celular');
        $quanto_ganhava         = $request->input('quanto_ganhava');
        $enderco                = $request->input('enderco');
        $cidade                 = $request->input('cidade');
        $estado                 = $request->input('estado');
        $banco                  = $request->input('banco');
        $agencia                = $request->input('agencia');
        $conta_corrente         = $request->input('conta_corrente');

        DB::table('brasileiros')
              ->where('id', $id)
              ->update(
                    [

                    'nome' => $nome, 'cpf' => $cpf, 'data_nascimento' => $data_nascimento,
                    'nome_mae' => $nome_mae, 'celular' => $celular, 'quanto_ganhava' => $quanto_ganhava,
                    'enderco' => $enderco, 'cidade' => $cidade, 'estado' => $estado, 'banco' => $banco,
                    'agencia' => $agencia, 'conta_corrente' => $conta_corrente

                    ]
                );
        // Retornar algo para o usuario
        $request->Session()->flash('message', 'Dadso Alterados com Sucesso!');
        return Redirect::to('/home-auxilio');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
