<?php
use App\Http\Controllers\ControllerHello;
use Illuminate\Support\Facades\Route;


 Route::get('/', function () {
    return view('welcome');
});

Route::get('/usuario', [ControllerHello::class, 'index']);

Route::get('/home', function () {
    return view('welcome');
})->name('home-index');


Route::get('/usuario/{name?}', function ($name = null) {
    return view('apresentation',['nome'=>$name]);
})->where('name','[A-Za-z]+');

route::fallback(function(){

return "Rota não encontrada";

});