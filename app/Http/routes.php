<?php

Route::get('/', [
    'as' => 'home_path',
    'uses' => 'HomeController@index'
]);

Route::get('nosotros', [
    'as' => 'about_path',
    'uses' => 'PageController@getAbout'
]);

Route::get('gestion-desempeno', [
    'as' => 'gd_path',
    'uses' => 'PageController@getGD'
]);

Route::get('gestion-seleccion', [
    'as' => 'gs_path',
    'uses' => 'PageController@getGS'
]);

Route::get('gestion-talentos', [
    'as' => 'gt_path',
    'uses' => 'PageController@getGT'
]);

Route::get('control-gestion', [
    'as' => 'cg_path',
    'uses' => 'PageController@getCG'
]);

Route::get('gestion-capacitacion', [
    'as' => 'gc_path',
    'uses' => 'PageController@getGC'
]);

Route::get('contacto', [
    'as' => 'contact_path',
    'uses' => 'ContactController@getIndex'
]);

Route::post('contacto', [
    'as' => 'contact_path',
    'uses' => 'ContactController@sendContact'
]);

