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


// end Dashboard
Route::get('//', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');

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

// category start
Route::get('/category', [CategoryController::class, 'index'])->middleware('auth')->name('category');
Route::post('/category', [CategoryController::class, 'store'])->middleware('auth')->name('category.insert');
Route::get('/category/delete/{id}', [CategoryController::class, 'destroy'])->middleware('auth')->name('category.delete');
Route::get('/category/status/{id}', [CategoryController::class, 'status'])->middleware('auth')->name('category.status');
Route::get('/category/update/{id}', [CategoryController::class, 'edit'])->middleware('auth')->name('category.edit');
Route::post('/category/update', [CategoryController::class, 'update'])->middleware('auth')->name('category.update');
// category end

// messages start
Route::get('/messages', [MessagesController::class, 'index'])->middleware('auth')->name('messages');
Route::post('/messages', [MessagesController::class, 'store'])->middleware('auth')->name('messages.insert');
Route::get('/messages/delete/{id}', [MessagesController::class, 'destroy'])->middleware('auth')->name('messages.delete');
Route::get('/messages/status/{id}', [MessagesController::class, 'status'])->middleware('auth')->name('messages.status');
Route::get('/messages/update/{id}', [MessagesController::class, 'edit'])->middleware('auth')->name('messages.edit');
Route::post('/messages/update', [MessagesController::class, 'update'])->middleware('auth')->name('messages.update');
// messages end

// site info start
Route::get('/siteinfo', [SiteInfoController::class, 'index'])->middleware('auth')->name('siteinfo');
Route::post('/siteinfo/update', [SiteInfoController::class, 'update'])->middleware('auth')->name('siteinfo.update');
// site info end

// allusers start
Route::get('/allusers', [AllUsersController::class, 'index'])->middleware('auth')->name('allusers');
Route::post('/allusers', [AllUsersController::class, 'store'])->middleware('auth')->name('allusers.insert');
Route::get('/allusers/delete/{id}', [AllUsersController::class, 'destroy'])->middleware('auth')->name('allusers.delete');
Route::get('/allusers/status/{id}', [AllUsersController::class, 'status'])->middleware('auth')->name('allusers.status');
Route::get('/allusers/update/{id}', [AllUsersController::class, 'edit'])->middleware('auth')->name('allusers.edit');
Route::post('/allusers/update', [AllUsersController::class, 'update'])->middleware('auth')->name('allusers.update');
// allusers end


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


// about start
Route::get('/about', [AboutController::class, 'index'])->middleware('auth')->name('about');
Route::post('/about', [AboutController::class, 'store'])->middleware('auth')->name('about.insert');
Route::get('/about/delete/{id}', [AboutController::class, 'destroy'])->middleware('auth')->name('about.delete');
Route::get('/about/status/{id}', [AboutController::class, 'status'])->middleware('auth')->name('about.status');
Route::get('/about/update/{id}', [AboutController::class, 'edit'])->middleware('auth')->name('about.edit');
Route::post('/about/update', [AboutController::class, 'update'])->middleware('auth')->name('about.update');
// about end

// offering start
Route::get('/offering', [OfferingController::class, 'index'])->middleware('auth')->name('offering');
Route::post('/offering', [OfferingController::class, 'store'])->middleware('auth')->name('offering.insert');
Route::get('/offering/delete/{id}', [OfferingController::class, 'destroy'])->middleware('auth')->name('offering.delete');
Route::get('/offering/status/{id}', [OfferingController::class, 'status'])->middleware('auth')->name('offering.status');
Route::get('/offering/update/{id}', [OfferingController::class, 'edit'])->middleware('auth')->name('offering.edit');
Route::post('/offering/update', [OfferingController::class, 'update'])->middleware('auth')->name('offering.update');
// offering end

// services start
Route::get('/services', [ServiceController::class, 'index'])->middleware('auth')->name('services');
Route::post('/services', [ServiceController::class, 'store'])->middleware('auth')->name('services.insert');
Route::get('/services/delete/{id}', [ServiceController::class, 'destroy'])->middleware('auth')->name('services.delete');
Route::get('/services/status/{id}', [ServiceController::class, 'status'])->middleware('auth')->name('services.status');
Route::get('/services/update/{id}', [ServiceController::class, 'edit'])->middleware('auth')->name('services.edit');
Route::post('/services/update', [ServiceController::class, 'update'])->middleware('auth')->name('services.update');
Route::get('/services/insert', [ServiceController::class, 'insert'])->middleware('auth')->name('services.insert.view');
Route::get('/services/image/delte/{id}', [ServiceController::class, 'imageDelete'])->middleware('auth')->name('services.image.delete');

// services end


// Product start
Route::get('/products', [ProductController::class, 'index'])->middleware('auth')->name('products.product');
Route::post('/products', [ProductController::class, 'store'])->middleware('auth')->name('products.product.insert');
Route::get('/products/delete/{id}', [ProductController::class, 'destroy'])->middleware('auth')->name('products.product.delete');
Route::get('/products/status/{id}', [ProductController::class, 'status'])->middleware('auth')->name('products.product.status');
Route::get('/products/update/{id}', [ProductController::class, 'edit'])->middleware('auth')->name('products.product.edit');
Route::post('/products/update', [ProductController::class, 'update'])->middleware('auth')->name('products.product.update');
Route::get('/products/insert', [ProductController::class, 'insert'])->middleware('auth')->name('products.product.insert.view');
Route::get('/products/image/delte/{id}', [ProductController::class, 'imageDelete'])->middleware('auth')->name('products.product.image.delete');

// Products end

// category start
Route::get('/products/category', [ProductCategoryController::class, 'index'])->middleware('auth')->name('products.category');
Route::post('/products/category', [ProductCategoryController::class, 'store'])->middleware('auth')->name('products.category.insert');
Route::get('/products/category/delete/{id}', [ProductCategoryController::class, 'destroy'])->middleware('auth')->name('products.category.delete');
Route::get('/products/category/status/{id}', [ProductCategoryController::class, 'status'])->middleware('auth')->name('products.category.status');
Route::get('/products/category/update/{id}', [ProductCategoryController::class, 'edit'])->middleware('auth')->name('products.category.edit');
Route::post('/products/category/update', [ProductCategoryController::class, 'update'])->middleware('auth')->name('products.category.update');
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

// Products end


require __DIR__ . '/auth.php';
