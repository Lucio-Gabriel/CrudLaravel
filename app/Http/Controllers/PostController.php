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
}
