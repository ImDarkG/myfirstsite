<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    function show($post){

        return view('postnezet', [
            'posttartalma' => $post,
            'posthossza' => Post::getLength($post)
        ]);
    }
}

?>
