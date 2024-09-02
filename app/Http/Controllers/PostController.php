<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(Request $request){
        $new_post = [
            'tilte' => 'Meu Primeiro Post',
            'content' => 'Conteudo Qualquer',
            'author' => 'Gabriel'
        ];

        // instanciando um model
        $post = new Post($new_post);
        $post->save();

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
}
