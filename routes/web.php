<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sobrenos', function (){
    return 'Essa é a página sobre nós';
});

Route::get('/esqueci_a_senha', function (){
    return 'essa é a tela de recuperação de senha';
});

Route::get('/alterando_senha', function (){
    return 'Altere sua senha';
});

Route::get('/login', function (){
    return 'Faça o login';
});

Route::get('/cadastro', function (){
    return 'Faça seu cadastro';
});

Route::get('/adocao', function (){
    return 'Adote um pet';
});

Route::get('/descricao', function (){
    return 'Descreva seu pet';
});

Route::get('/desaparecidos', function (){
    return 'Encontre um pet';
});

Route::get('/Postagem', function (){
    return 'Poste um pet';
});

Route::get('/Perfil', function (){
    return 'Esse é seu perfil';
});

Route::get('/Editar_perfil', function (){
    return 'Edite seu perfil';
});

