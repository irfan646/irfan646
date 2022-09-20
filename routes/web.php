<?php

use App\Http\Controllers\admin\CategoriesController;
use App\Http\Controllers\admin\create;
use App\Http\Controllers\admin\store;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\admin\PagesController;
use App\Http\Controllers\admin\pages;
use App\Http\Controllers\admin\SkillsController;
use App\Http\Controllers\admin\skills;
use App\Http\Controllers\admin\EducationController;
use App\Http\Controllers\admin\ReviewsController;
use App\Http\Controllers\admin\QueriesController;

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

Route::get('/',[HomeController::class, 'index']);
Route::get('/login',[AuthController::class,'showLoginForm']);
Route::get('/register',[AuthController::class,'showRegisterForm']);
Route::get('logout', [AuthContorller::class, 'logout']);

Auth::routes();
Route::get('/categories',[CategoriesController::class, 'index'])->name('categories');
Route::get('category-create',[CategoriesController::class, 'create'])->name('category-create');
Route::post('category-store',[CategoriesController::class, 'store']);
Route::get('category-edit/{id}', [CategoriesController::class, 'edit'])->name('category-edit');
Route::put('category-update/{id}', [CategoriesController::class, 'update'])->name('category-update');
Route::delete('category-destroy/{id}', [CategoriesController::class, 'destroy'])->name('category-destroy');

Route::get('/pages', [PagesController::class, 'index'])->name('pages');
Route::get('page-create', [PagesController::class, 'create'])->name('page-create');
Route::post('page-store', [PagesController::class, 'store']);
Route::get('pages-edit/{id}', [PagesController::class, 'edit'])->name('pages-edit');
Route::put('pages-update/{id}', [PagesController::class, 'update'])->name('pages-update');
Route::delete('pages-destroy/{id}', [PagesController::class, 'destroy'])->name('pages-destroy');


Route::get('/skills', [SkillsController::class, 'index'])->name('skills');
Route::get('skill-create', [SkillsController::class, 'create'])->name('skill-create');
Route::post('skill-store', [SkillsController::class, 'store']);
Route::get('skills-edit/{id}', [SkillsController::class, 'edit'])->name('skills-edit');
Route::put('skills-update/{id}', [SkillsController::class, 'update'])->name('skills-update');
Route::delete('skills-destroy/{id}', [SkillsController::class, 'destroy'])->name('skills-destroy');


Route::get('education', [EducationController::class, 'index'])->name('education');
Route::get('education-create', [EducationController::class, 'create'])->name('education-create');
Route::post('education-store',[EducationController::class, 'store']);
Route::get('education-edit/{id}', [EducationController::class, 'edit'])->name('education-edit');
Route::put('education-update/{id}', [EducationController::class, 'update'])->name('education-update');
Route::delete('education-destroy/{id}', [EducationController::class, 'destroy'])->name('education-destroy');


Route::get('reviews', [ReviewsController::class, 'index'])->name('reviews');
Route::get('reviews-create', [ReviewsController::class, 'create'])->name('reviews-create');
Route::post('reviews-store',[ReviewsController::class, 'store'])->name('reviews-store');
Route::get('reviews-edit/{id}', [ReviewsController::class, 'edit'])->name('reviews-edit');
Route::put('reviews-update/{id}', [ReviewsController::class, 'update'])->name('reviews-update');
Route::delete('reviews-destroy/{id}', [ReviewsController::class, 'destroy'])->name('reviews-destroy');


Route::get('queries', [QueriesController::class, 'index'])->name('queries');
Route::get('queries-create', [QueriesController::class, 'create'])->name('queries-create');
Route::post('queries-store',[QueriesController::class, 'store'])->name('queries-store');
Route::get('queries-edit/{id}', [QueriesController::class, 'edit'])->name('queries-edit');
Route::put('queries-update/{id}', [QueriesController::class, 'update'])->name('queries-update');
Route::delete('queries-destroy/{id}', [QueriesController::class, 'destroy'])->name('queries-destroy');


Route::get('/home', [HomeController::class, 'index'])->name('home');
