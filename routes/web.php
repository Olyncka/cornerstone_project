<?php

use App\Http\Controllers\Home;
use App\Http\Livewire\Admin\DashbordComponent;
use App\Http\Livewire\Admin\GestionAgent\AjouterAgent;
use App\Http\Livewire\Admin\GestionAgent\ListeAgent;
use App\Http\Livewire\Admin\GestionArticle\ArticleAddComponent;
use App\Http\Livewire\Admin\GestionArticle\ArticleListComponent;
use App\Http\Livewire\Admin\GestionArticle\ArticleUpdateComponent;
use App\Http\Livewire\Admin\ItemAddComponent;
use App\Http\Livewire\Admin\ItemListComponent;
use App\Http\Livewire\Admin\ItemUpateComponent;
use App\Http\Livewire\Admin\ResidenceAddComponent;
use App\Http\Livewire\Admin\ResidenceListComponent;
use App\Http\Livewire\Admin\ResidenceUpdateComponent;
use App\Http\Livewire\AuthForm;
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

Route::get('/donate/{id}',DonateComponent::class)->name('donate');
Route::post('logout',[Home::class,'logout'])->name('logout');


Route::middleware(['guest:web'])->group(function(){
    Route::view('/login','Auth.login')->name('login');
    Route::get('/login/v1',AuthForm::class)->name('login.v1');
    // Route::get('/login',AuthLogin::class)->name('login');
    Route::view('/forgot-password','forgot')->name('forgot-password');
});
Route::prefix('admin')->name('admin.')->group(function(){
    Route::get('/dashboard',DashbordComponent::class)->name('dashboard');

    Route::get('/residence/add',ResidenceAddComponent::class)->name('residence.add');
    Route::get('/residence/list',ResidenceListComponent::class)->name('residence.list');
    Route::get('/residence/edit/{slug}',ResidenceUpdateComponent::class)->name('residence.edit');

    Route::get('/article/add',ArticleAddComponent::class)->name('article.add');
    Route::get('/article/list',ArticleListComponent::class)->name('article.list');
    Route::get('/article/edit/{slug}',ArticleUpdateComponent::class)->name('article.edit');

    Route::get('/chefderesidence/add',AjouterAgent::class)->name('chefderesidence.add');
    Route::get('/chefderesidence/list',ListeAgent::class)->name('chefderesidence.list');


});
Route::prefix('gerant')->name('gerant.')->group(function(){
    Route::get('/dashboard',DashbordComponent::class)->name('dashboard');

});
