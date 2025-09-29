<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/helo',action: function (): View {
    return view(View: 'hello');
});

Route::get('/valami',action: function (): View {
    return view(View: 'valami');
});

Route::get(uri: '/tomb-visszaad',action: function (): array {
    return ["kulcs" => "ertek"];
});


Route::get( '/udvozles', function(){
    $name="Kevin";
    $age=22;
    return view( "udvozollek", ["nev"=>$name], ["kor"=>$age] );
});



Route::get( '/bevasarlolista', function(){
    $lista=[
        "tej",
        "kenyér",
        "dinnye",
        "körte",
        "liszt",
        "cukor",
        "só"
    ];
        return view( "sajatbevasarlas", ["bevasarlolista" => $lista] );
});



Route::get( '/felhasznaloiadat', function(){
    return view( "userinput", [
        "input" => request("felhasznalonev"),
        "vnev" => request("vezeteknev"),
        "knev" => request("keresztnev")
        ]);
});


Route::get('posts/{post}', function ($post) {

    $posts = [
        "first" => 'Első blog',
        "second" => 'Második blog'

    ];

    return view('postnezet', [
        'post' => $posts[$post] ?? 'Nincs ilyen blog!'
    ]);
});


Route::get("vezerlo/{bejegyzes}", [
    'App\Http\Controllers\PostController',
    'show'
]);

Route::view(uri: '/contact', view: 'contact');
