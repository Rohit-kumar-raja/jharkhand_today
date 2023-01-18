<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AllUsersController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\EdgeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\OfferingController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SiteInfoController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\UserController;


// end Dashboard
Route::get('/', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');
Route::get('dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');

// slider start
Route::get('/slider', [SliderController::class, 'index'])->middleware('auth')->name('slider');
Route::post('/slider', [SliderController::class, 'store'])->middleware('auth')->name('slider.insert');
Route::get('/slider/delete/{id}', [SliderController::class, 'destroy'])->middleware('auth')->name('slider.delete');
Route::get('/slider/status/{id}', [SliderController::class, 'status'])->middleware('auth')->name('slider.status');
Route::get('/slider/update/{id}', [SliderController::class, 'edit'])->middleware('auth')->name('slider.edit');
Route::post('/slider/update', [SliderController::class, 'update'])->middleware('auth')->name('slider.update');
// slider end


// testimonial start
Route::get('/testimonial', [TestimonialController::class, 'index'])->middleware('auth')->name('testimonial');
Route::post('/testimonial', [TestimonialController::class, 'store'])->middleware('auth')->name('testimonial.insert');
Route::get('/testimonial/delete/{id}', [TestimonialController::class, 'destroy'])->middleware('auth')->name('testimonial.delete');
Route::get('/testimonial/status/{id}', [TestimonialController::class, 'status'])->middleware('auth')->name('testimonial.status');
Route::get('/testimonial/update/{id}', [TestimonialController::class, 'edit'])->middleware('auth')->name('testimonial.edit');
Route::post('/testimonial/update', [TestimonialController::class, 'update'])->middleware('auth')->name('testimonial.update');
// testimonial end




// site info start
Route::get('/siteinfo', [SiteInfoController::class, 'index'])->middleware('auth')->name('siteinfo');
Route::post('/siteinfo/update', [SiteInfoController::class, 'update'])->middleware('auth')->name('siteinfo.update');
// site info end




// clients start
Route::get('/clients', [ClientsController::class, 'index'])->middleware('auth')->name('clients');
Route::post('/clients', [ClientsController::class, 'store'])->middleware('auth')->name('clients.insert');
Route::get('/clients/delete/{id}', [ClientsController::class, 'destroy'])->middleware('auth')->name('clients.delete');
Route::get('/clients/status/{id}', [ClientsController::class, 'status'])->middleware('auth')->name('clients.status');
Route::get('/clients/update/{id}', [ClientsController::class, 'edit'])->middleware('auth')->name('clients.edit');
Route::post('/clients/update', [ClientsController::class, 'update'])->middleware('auth')->name('clients.update');
// clients end

// contactus start
Route::get('/contactus', [ContactusController::class, 'index'])->middleware('auth')->name('contactus');
Route::post('/contactus', [ContactusController::class, 'store'])->middleware('auth')->name('contactus.insert');
Route::get('/contactus/delete/{id}', [ContactusController::class, 'destroy'])->middleware('auth')->name('contactus.delete');
Route::get('/contactus/status/{id}', [ContactusController::class, 'status'])->middleware('auth')->name('contactus.status');
Route::get('/contactus/update/{id}', [ContactusController::class, 'edit'])->middleware('auth')->name('contactus.edit');
Route::post('/contactus/update', [ContactusController::class, 'update'])->middleware('auth')->name('contactus.update');
// contactus end
Route::get('/single-news/{category}', [ProductController::class, 'singleCategoryNews'])->middleware('auth')->name('catergory-wise-news');

Route::post('/news/category', [ProductCategoryController::class, 'store'])->middleware('auth')->name('products.category.insert');

// about start
Route::get('/page/setting', [AboutController::class, 'index'])->middleware('auth')->name('about');
Route::post('/page/setting', [AboutController::class, 'store'])->middleware('auth')->name('about.insert');
Route::get('/page/setting/delete/{id}', [AboutController::class, 'destroy'])->middleware('auth')->name('about.delete');
Route::get('/page/setting/status/{id}', [AboutController::class, 'status'])->middleware('auth')->name('about.status');
Route::get('/page/setting/update/{id}', [AboutController::class, 'edit'])->middleware('auth')->name('about.edit');
Route::post('/page/setting/update', [AboutController::class, 'update'])->middleware('auth')->name('about.update');
// about end

// Product start
Route::get('/news', [ProductController::class, 'index'])->middleware('auth')->name('products.product');
Route::post('/news', [ProductController::class, 'store'])->middleware('auth')->name('products.product.insert');
Route::get('/news/delete/{id}', [ProductController::class, 'destroy'])->middleware('auth')->name('products.product.delete');
Route::post('/news/status', [ProductController::class, 'status'])->middleware('auth')->name('products.product.status');
Route::get('/news/update/{id}', [ProductController::class, 'edit'])->middleware('auth')->name('products.product.edit');
Route::post('/news/update', [ProductController::class, 'update'])->middleware('auth')->name('products.product.update');
Route::get('/news/insert', [ProductController::class, 'insert'])->middleware('auth')->name('products.product.insert.view');
Route::get('/news/image/delte/{id}', [ProductController::class, 'imageDelete'])->middleware('auth')->name('products.product.image.delete');

// Products end

// category start
Route::get('/news/category', [ProductCategoryController::class, 'index'])->middleware('auth')->name('products.category');
Route::post('/news/category', [ProductCategoryController::class, 'store'])->middleware('auth')->name('products.category.insert');
Route::get('/news/category/delete/{id}', [ProductCategoryController::class, 'destroy'])->middleware('auth')->name('products.category.delete');
Route::get('/news/category/status/{id}', [ProductCategoryController::class, 'status'])->middleware('auth')->name('products.category.status');
Route::get('/news/category/update/{id}', [ProductCategoryController::class, 'edit'])->middleware('auth')->name('products.category.edit');
Route::post('/news/category/update', [ProductCategoryController::class, 'update'])->middleware('auth')->name('products.category.update');
// category end

// Product start
Route::get('/career', [CareerController::class, 'index'])->middleware('auth')->name('career');
Route::post('/career', [CareerController::class, 'store'])->middleware('auth')->name('career.insert');
Route::get('/career/delete/{id}', [CareerController::class, 'destroy'])->middleware('auth')->name('career.delete');
Route::get('/career/status/{id}', [CareerController::class, 'status'])->middleware('auth')->name('career.status');
Route::get('/career/update/{id}', [CareerController::class, 'edit'])->middleware('auth')->name('career.edit');
Route::post('/career/update', [CareerController::class, 'update'])->middleware('auth')->name('career.update');
Route::get('/career/apply', [CareerController::class, 'apply'])->middleware('auth')->name('career.apply');
Route::get('/career/apply/status/{id}', [CareerController::class, 'apply_status'])->middleware('auth')->name('career.apply.status');
Route::get('/career/apply/delete/{id}', [CareerController::class, 'apply_destroy'])->middleware('auth')->name('career.apply.delete');

//Users
Route::resource('/users', UserController::class)->middleware('auth');
Route::get('/get-users', [UserController::class, 'getUsers'])->middleware('auth');


// Products end
require __DIR__ . '/auth.php';
