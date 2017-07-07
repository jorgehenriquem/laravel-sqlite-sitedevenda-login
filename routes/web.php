<?php

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

//ROTA ORIGINAL 
/*Route::get('/', function () {
    return view('site.home');
});*/

Route::get('/',['as'=>'site.home',function(){
	return view('site.home');
}]);

Route::get('/sobre',['as'=>'site.sobre','uses'=>'Site\PaginaController@sobre']);
	

Route::post('/contato/enviar',['as'=>'site.contato.enviar','uses'=>'Site\PaginaController@enviarContato'	]);

Route::get('/contato',['as'=>'site.contato','uses'=>'Site\PaginaController@contato'	]);


Route::get('/login',['as'=>'site.login',function(){
	return view('site.login');
}]);

Route::get('admin/paginas',['as'=>'admin.paginas', 'uses'=>'Admin\PaginaController@index']);

Route::get('/admin/paginas/editar/{id}',['as'=>'admin.paginas.editar', 'uses'=>'Admin\PaginaController@editar']);

Route::put('/admin/paginas/atualizar/{id}',['as'=>'admin.paginas.atualizar', 'uses'=>'Admin\PaginaController@atualizar']);


Route::get('/admin/login',['as'=>'admin.login',function(){
	return view('admin.login.index');
}]);




Route::get('/consulta/{id}/{titulo?}',['as'=>'site.consulta',function(){
	return view('site.consulta');
}]);

Route::get('/consulta/{id}/{titulo?}',['as'=>'site.consulta',function(){
	return view('site.consulta');
}]);

Route::post('/admin/login',['as'=>'admin.login', 'uses'=>'Admin\UsuarioController@login']);


//GRUPO DE ROTAS QUE SÓ FUNCIONA COM USERS LOGADOS

Route::group(['middleware' => 'auth'], function(){

	Route::get('/admin/login/sair',['as'=>'admin.login.sair', 'uses'=>'Admin\UsuarioController@sair']);

	Route::get('/admin',['as'=>'admin.principal', function(){
	return view('admin.principal.index');
}]);

	Route::get('/admin/usuarios',['as'=>'admin.usuarios', 'uses'=>'Admin\UsuarioController@index']);

	Route::get('/admin/usuarios/adicionar',['as'=>'admin.usuarios.adicionar', 'uses'=>'Admin\UsuarioController@adicionar']);

	Route::post('/admin/usuarios/salvar',['as'=>'admin.usuarios.salvar', 'uses'=>'Admin\UsuarioController@salvar']);

	Route::get('/admin/usuarios/editar/{id}',['as'=>'admin.usuarios.editar', 'uses'=>'Admin\UsuarioController@editar']);

	Route::put('/admin/usuarios/atualizar/{id}',['as'=>'admin.usuarios.atualizar', 'uses'=>'Admin\UsuarioController@atualizar']);

	Route::get('/admin/usuarios/deletar/{id}',['as'=>'admin.usuarios.deletar', 'uses'=>'Admin\UsuarioController@deletar']);
});



