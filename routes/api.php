<?php

Route::get('empresas','\App\Http\Controllers\api\EmpresaController@getAllEmpresas');
Route::get('empresas/{id}','\App\Http\Controllers\api\EmpresaController@getEmpresaById');
Route::post('empresas','\App\Http\Controllers\api\EmpresaController@saveEmpresa');
Route::delete('empresas/{id}','\App\Http\Controllers\api\EmpresaController@deleteById');