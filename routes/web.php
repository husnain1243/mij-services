<?php

use App\Http\Controllers\admin\projectController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\admin\testimonialController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminHomeController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('index');

// Route::get('/', function () {
//     return view('index', ['home'=>'active']);
// });

Route::get('/services', [HomeController::class, 'services'])->name('services');


// Route::get('/services', function () {
//     return view('pagesdetails.services', ['services'=>'active']);
// });

Route::get('/about-us', function () {
    return view('pagesdetails.about-us', ['about'=>'active']);
});


// Route::get('/tetimonials', function () {
//     return view('pagesdetails.testimonials', ['tetimonials'=>'active']);
// });
Route::get('/tetimonials', [HomeController::class, 'testimonials'])->name('testimonials');



Route::get('/contact-us', function () {
    return view('pagesdetails.contact-us', ['contact'=>'active']);
});

Route::get('/projects', function () {
    return view('pagesdetails.projects', ['projects'=>'active']);
});

Route::middleware('auth')->group(function(){

    Route::get('/admin/dashboard', function () {
    return view('admin.pages.dashboard.index');
});

//services
Route::get('/admin/services', [serviceController::class, 'index'])->name('service.index');
Route::get('/admin/service/create', [ServiceController::class, 'create'])->name('service.create');
Route::post('/admin/service/store', [ServiceController::class, 'store'])->name('service.store');
Route::get('/admin/service/{id}/edit', [ServiceController::class, 'edit'])->name('service.edit');
Route::put('/admin/service/update', [ServiceController::class, 'update'])->name('service.update');
Route::get('/admin/service/{id}/delete', [ServiceController::class, "destroy"])->name("service.delete");

//projects
Route::get('/admin/project', [projectController::class, 'index'])->name('project.index');
Route::get('/admin/project/create', [projectController::class, 'create'])->name('project.create');
Route::post('/admin/project/store', [projectController::class, 'store'])->name('project.store');
Route::get('/admin/project/{id}/edit', [projectController::class, 'edit'])->name('project.edit');
Route::put('/admin/project/update', [projectController::class, 'update'])->name('project.update');
Route::get('/admin/project/{id}/delete', [projectController::class, "destroy"])->name("project.delete");

//testimonial
Route::get('/admin/testimonial', [testimonialController::class, 'index'])->name('testimonial.index');
Route::get('/admin/testimonial/create', [testimonialController::class, 'create'])->name('testimonial.create');
Route::post('/admin/testimonial/store', [testimonialController::class, 'store'])->name('testimonial.store');
Route::get('/admin/testimonial/{id}/edit', [testimonialController::class, 'edit'])->name('testimonial.edit');
Route::put('/admin/testimonial/update', [testimonialController::class, 'update'])->name('testimonial.update');
Route::get('/admin/testimonial/{id}/delete', [testimonialController::class, "destroy"])->name("testimonial.delete");

});

Auth::routes();

Route::get('/home', [AdminHomeController::class, 'index'])->name('home');
Route::get('/logout', [AdminHomeController::class, 'logout']);