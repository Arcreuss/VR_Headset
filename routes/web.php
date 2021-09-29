<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/addVR', function(){
    return view('addVR');
});

Route::post('/addVR', function(){
    request()->validate([ // fonction qui permet vérifier/valider pleins de chose
        'brand'=>['required'],
        'name' =>['required'],
        'price' =>['required'], 
        'releasedate' =>['required'],
        'resolution', 
        'refreshrate',
        'fov',
        'connections',
        'sensors',
        'controllersensor',
    ]);

    $VrHeadset = App\Models\VrHeadset::create([
        'brand'=>request('brand'),
        'name' =>request('name'),
        'price'=>request('price'), 
        'releasedate' =>request('releasedate'),
        'resolution'=>request('resolution'), 
        'refreshrate'=>request('refreshrate'),
        'fov'=>request('fov'),
        'connections'=>request('connections'),
        'sensors'=>request('sensors'),
        'controllersensor'=>request('controllersensor'),
    ]);
});

Route::get('/Valve', function (){
    return view('Valve');
});

Route::get('/Htc', function (){
    return view('Htc');
});

Route::get('/Oculus', function (){
    return view('Oculus');
});

Route::get('/Varjo', function (){
    return view('Varjo');
});
