<?php

use App\Http\Controllers\Home;
use App\Http\Livewire\Admin\DashbordComponent;
use App\Http\Livewire\Admin\ItemAddComponent;
use App\Http\Livewire\Admin\ItemListComponent;
use App\Http\Livewire\Admin\ItemUpateComponent;
use App\Http\Livewire\Admin\ResidenceAddComponent;
use App\Http\Livewire\Admin\ResidenceListComponent;
use App\Http\Livewire\Admin\ResidenceUpdateComponent;
use App\Http\Livewire\DonateComponent;
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

Route::get('/',[Home::class,'index']);

Route::get('/dashbord',DashbordComponent::class)->name('dashbord');

Route::get('/residence/add',ResidenceAddComponent::class)->name('residence.add');
Route::get('/residence/list',ResidenceListComponent::class)->name('residence.list');
Route::get('/residence/edit/{slug}',ResidenceUpdateComponent::class)->name('residence.edit');

Route::get('/item/add',ItemAddComponent::class)->name('item.add');
Route::get('/item/list',ItemListComponent::class)->name('item.list');
Route::get('/item/edit/{slug}',ItemUpateComponent::class)->name('item.edit');




Route::get('/donate/{id}',DonateComponent::class)->name('donate');
