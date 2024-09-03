<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(Request $request){
        $new_post = [
            'tilte' => 'Meu terceiro Post',
            'content' => 'Conteudo somente de teste',
            'author' => 'Azevedo'
        ];

        // instanciando um model
        $post = new Post($new_post);
        $post->save();

        // dd($post);

    }

    public function read(Request $r){

        $post = new Post();

        // pega todos os posts que temos no banco
        // $posts = $post->all();

        // pega todos os posts que temos no banco por chave primaria - ID
        $post = $post->find(2);

        return $post;
    }

    public function all(Request $r){
        // pega todos os posts que temos no banco
        $posts = Post::all();

        return $posts;
    }

    public function update(Request $request){

        // // busanco um item
        // $post = Post::find(1);
        // // atualizando um dado
        // $post->tilte = 'Meu post atualizado';
        // $post->save();

        $posts = Post::where('id','>',2)->update([
            'author' => 'Gabriel',
            'tilte' => 'Dado Alterado'
        ]);



        return $posts;

    }
}
