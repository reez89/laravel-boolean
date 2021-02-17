<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{

    /**
     * Show index page
     * @return view
     */

    public function home(){
        $title = "Blog";
        $posts = [
            ["title"=> 'My first post',
            "description"=> "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio ducimus aut molestias itaque facilis dignissimos at obcaecati aliquid perspiciatis, quisquam nisi consequuntur autem et porro, incidunt necessitatibus fugiat. Quam accusamus, hic incidunt quos ratione animi reiciendis itaque nulla veritatis nemo reprehenderit earum, debitis dicta, iste quod similique odio saepe eveniet?"
        ],
            ["title"=> 'My seecond post',
            "description"=> "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio ducimus aut molestias itaque facilis dignissimos at obcaecati aliquid perspiciatis, quisquam nisi consequuntur autem et porro, incidunt necessitatibus fugiat. Quam accusamus, hic incidunt quos ratione animi reiciendis itaque nulla veritatis nemo reprehenderit earum, debitis dicta, iste quod similique odio saepe eveniet?"
        ],
        ["title"=> 'My third post',
        "description"=> "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio ducimus aut molestias itaque facilis dignissimos at obcaecati aliquid perspiciatis, quisquam nisi consequuntur autem et porro, incidunt necessitatibus fugiat. Quam accusamus, hic incidunt quos ratione animi reiciendis itaque nulla veritatis nemo reprehenderit earum, debitis dicta, iste quod similique odio saepe eveniet?"
        ],
        ["title"=> 'My fourth post',
        "description"=> "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio ducimus aut molestias itaque facilis dignissimos at obcaecati aliquid perspiciatis, quisquam nisi consequuntur autem et porro, incidunt necessitatibus fugiat. Quam accusamus, hic incidunt quos ratione animi reiciendis itaque nulla veritatis nemo reprehenderit earum, debitis dicta, iste quod similique odio saepe eveniet?"
        ],
        ];
        return view('home', compact('title','posts'));
    }

    public function about(){
        return view('about');
    }

    public function posts(Post $post){
        $posts = $post->all();
        dd($posts);
        return view('posts');
    }
}
