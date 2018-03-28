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


Route::get('/','LoginController@getLogin');
Route::post('/login','LoginController@postLogin');

Route::get('/noPermission',function(){
	return view('noPermission');
});


Route::group(['middleware'=>['authen']],function(){

    Route::get('/dashboard',['as'=>'dashboard','uses'=>'DashboardController@dashboard']);
    Route::get('/logout','LoginController@getLogout');
    
    });


Route::group(['middleware'=>['authen','roles'],'roles'=>['Admin']],function(){

    
    Route::get('/gestion/cours',function(){
        return view('cours.gestionCours');
     });
     Route::post('/gestion/cours/ajouter-annee',['as'=>'postInsertYear','uses'=>'CoursController@postInsertYear']);
     Route::post('/gestion/cours/ajouter-matiere',['as'=>'postInsertProgram','uses'=>'CoursController@postInsertProgram']);

     Route::get('/gestion/eleves',function(){
        return view('eleves.eleveRegister');
     });
     Route::get('/gestion/eleveList',function(){
        return view('eleves.eleveList');
     });
    Route::get('/createuser',function(){
      echo 'admin test';  
   });

});
