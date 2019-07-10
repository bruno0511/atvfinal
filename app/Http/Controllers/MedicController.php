<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//importar a classe simples de acesso ao BD
use Illuminate\Support\Facades\DB;

//importar o modelo post
use App\Medic;

//importar o modelo categoria
use App\Categoria;

//Importando a classe de Validação
use App\Http\Requests\MedicRequest;

class MedicController extends Controller
{
    //

    /**
     * Retorna todos os index cadastrados
     */
    public function index()
    {

        $dados = Medic::all();

        return view('index')->with('index', $dados);
    }

    /**
     * Chama a view com o formulario de adicionar
     *
     */
    public function formAdicionar()
    {
        $categorias = Categoria::all();

        return view('form-adicionar')->with('categorias', $categorias);
    }

    /**
     * Método que vai adicionar um post no BD
     */
    public function adicionar(MedicRequest $request)
    {

        //Validacao
        /*$request->validate([
            'titulo' => 'required|min:3|max:255',
            'texto' => 'required',
        ]);*/

        //$post = new Post();
        //$post->titulo = $request->titulo;
        //$post->texto = $request->texto;
        //$post->save();

        //Atribuição em massa
        Medic::create($request->input());

        return redirect()->action('MedicController@index');

    }

    public function excluir($id)
    {
        //Excluir via eloquent quando tem o id
        Medic::destroy($id);



        return redirect()->action('MedicController@index');
    }

    public function form_editar($id)
    {
        //$post = Post::where('id', $id)->get();

        //Buscar o post no BD pelo id
        $post = Medic::find($id);

        $categorias = Categoria::all();

        //chamando a view e passando o dado do post
        return view('form-editar')->with('post', $post)
        ->with('categorias', $categorias);

    }

    public function editar(MedicRequest $request)
    {

        //Validacao
        /*$request->validate([
            'titulo' => 'required|min:3|max:255',
            'texto' => 'required',
        ]);*/


        //$post = Post::find($request->id);
        //$post->titulo = $request->titulo;
        //$post->texto = $request->texto;
        //$post->save();

        //VIa atribuicao em massa
        Medic::find($request->id)->update($request->input());

        return redirect()->action('MedicController@index');
    }

}
