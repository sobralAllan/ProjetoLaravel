<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;#Conectando essa classe a controller

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
/*
Route::get('/', function () {
    return redirect()->route('admin.dashbord');#Retornando com o uso de grupos
});

/*
Route::get('/empresa', function(){
    return view('empresa');
}); Isso é substituído pela Route::view lá debaixo*/

/* Route Any, permite qualquer tipo de acesso HTTP */
/*
Route::any('/any', function(){
    return "Permite qualquer tipo de Acesso HTTP: put, delete, get, post";
});

/* Match: permite apenas acessos definidos no primeiro parâmetro */
/*
Route::match(['get','post'], '/match', function(){
    return "Permite apenas acessos definidos";
});

/*Passagem de parâmetros nas rotas: Quando colocamos chaves é a variável e interrogação é um valor pré-definido */
/*
Route::get('/produto/{id}/{cat?}', function($id,$cat = ''){
    return "O id é: ".$id. ",<br> e sua categoria é: ".$cat;
});

/* Redirecionando uma página para outro lugar, primeiro a página nova, depois a redireção*/
/*
Route::redirect('/sobre','/empresa');
/* Renderizando uma view sem usar a função get */
/*
Route::view('/empresa', '/empresa');

/*É possível nomear os intervalos para conseguir direcioná-los */
/*
Route::get('/news',function(){
    return "News";
})->name('noticias');

Route::get('/novidades', function(){
    return redirect()->route('noticias');
});

#Agrupamento de rotas: por prefixo e por nome
Route::group(
    [
        'prefix' => 'admin',
        'as'     => 'admin.'
    ],function(){
        
        Route::get('dashbord',function(){
            return 'dashbord';
        })->name('dashbord');

        Route::get('users',function(){
            return 'users';
        })->name('users');

        Route::get('clientes',function(){
            return 'clientes';
        })->name('clientes');

});*/


#Trabalhando com controllers
#Informo o controller e o método responsável por ele, pós name é uma referência a essa rota: 
/*
Route::get('/', [ProdutoController::class, 'index'])->name('produto.index');

#Passando parâmetros nas rotas do controller, o ponto de interrogação é um ?
Route::get('/produtos/{id?}', [ProdutoController::class, 'show'])->name('produto.show');

#Pode se utilizar o recurso do resource para criar diversos códigos prontos e métodos prontos, depois é só usar o route resource
igual abaixo, uso "produtos" mesmo criando no singular

com o php artisan route list - você observa todas as rotas possíveis
*/
# Route::Cache && Route::Clear

Route::resource('produtos', ProdutoController::class);