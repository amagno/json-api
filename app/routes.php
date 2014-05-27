<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array('before' => 'auth', function(){
    return View::make('index');
}));

Route::get('/login', function(){
    return View::make('login');
});

Route::post('/sigin', function(){
       $rules = array(
           'username' => 'required|min:3',
           'password' => 'required|min:3'
       );

    $validation = Validator::make(Input::all(), $rules);

    if($validation->fails()){
        return Redirect::to('/login')->withErrors($validation);
    }else{
        $credentials = array(
            'username' => Input::get('username'),
            'password' => Input::get('password'),
            'enabled' => 1
        );
        $remenber = Input::get('remenber', false);
        if(Auth::attempt($credentials, $remenber)){
            return Redirect::to('/');
        }else{
            return Redirect::to('/login')->withErrors('Username ou Sennha incorretos');
        }
    }
});

Route::get('/logout', function(){
    Auth::logout();
    return Redirect::to('/login');
});

Route::get('/teste', function(){
    return Response::json(Teste::get());
});

App::missing(function(){
    return Redirect::to('/');
});