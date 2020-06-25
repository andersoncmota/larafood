<?php

use Illuminate\Support\Facades\Route;

Route::any('admin/plans/search', 'Admin\PlanController@search')->name('plans.search');
Route::delete('admin/plans/{url}', 'Admin\PlanController@destroy')->name('plans.destroy');
Route::post('admin/plans', 'Admin\PlanController@store')->name('plans.store');
Route::get('admin/create', 'Admin\PlanController@create')->name('plans.create');
Route::get('admin/plans/{url}', 'Admin\PlanController@show')->name('plans.show');
Route::get('admin/plans', 'Admin\PlanController@index')->name('plans.index');

Route::get('admin', 'Admin\PlanController@index')->name('admin.index');

Route::get('/', function () {
    return view('welcome');
});
