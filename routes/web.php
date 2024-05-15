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

Route::get('/detail', function () {
    $users = [
        [
        "id" => 1,
        "nama" => "ronald Alberty",
        "age" => 20,
        ],
        [
        "id" => 2,
        "nama" => "kevin Leonardo",
        "age" => 24,
        ],
        [
        "id" => 3,
        "nama" => "Stevano Michael",
        "age" => 20,
        ]
    ];
    $id = request() -> get("id");
    return $id;
});

Route::name("admin.")->group(function() {
    
    Route::get("/admin/detail", function() {
        return [
            "id" => 1,
            "username" => "admin"
        ];
    })->name("detail");
});