<?php

use App\Http\Livewire\Admin\DashbordComponent;
use App\Http\Livewire\Admin\ResidenceAdd;
use App\Http\Livewire\Admin\ResidenceAddComponent;
use App\Http\Livewire\Admin\ResidenceListComponent;
use App\Http\Livewire\Home;
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
    return view('index');
});

Route::get('/dashbord',DashbordComponent::class)->name('dashbord');
Route::get('/residence/add',ResidenceAdd::class)->name('residence.add');
Route::get('/residence/list',ResidenceListComponent::class)->name('residence.list');

Route::get('/home',Home::class);
