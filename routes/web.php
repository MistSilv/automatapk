<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', function () {
  return view('products.index');
});

Route::get('/products/create', function () {
  return view('products.create');
});

Route::get('/products/{id}', function ($id) {
  return view('products.show', ['id' => $id]);
});

Route::resource('products', ProductController::class);


//Routes for vending machines
Route::get('/automaty', function () {
  $vendingMachines = [
    ["location" => "Warszawa","stock" => 20,"name" => "Maszyna 1", "id" => "1"],
    ["location" => "Kraków","stock" => 30,"name" => "Maszyna 2", "id" => "2"],
  ];

  return view('vendingmachine.index', ["vendingMachines" => $vendingMachines]);
});

Route::get('/automaty/create', function () {
  return view('vendingmachine.create');
});
Route::get('/automaty/{id}', function ($id) {
  return view('vendingmachine.show', ['id' => $id]);
});