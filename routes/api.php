<?php

Route::get('empresas','\App\Http\Controllers\api\EmpresaController@getAllEmpresas');
Route::get('empresas/{id}','\App\Http\Controllers\api\EmpresaController@getEmpresaById');
Route::post('empresas','\App\Http\Controllers\api\EmpresaController@saveEmpresa');
Route::delete('empresas/{id}','\App\Http\Controllers\api\EmpresaController@deleteById');

Route::get('agricultores','\App\Http\Controllers\api\AgricultorController@getAllAgricultores');
Route::get('agricultores/{id}','\App\Http\Controllers\api\AgricultorController@getAgricultorById');
Route::post('agricultores','\App\Http\Controllers\api\AgricultorController@saveAgricultor');
Route::delete('agricultores/{id}','\App\Http\Controllers\api\AgricultorController@deleteById');