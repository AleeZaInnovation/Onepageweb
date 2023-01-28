<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Homepage;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FaqContorller;

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
    return view('frontend.index_two');
});
Route::get('/homepage',Homepage::Class)->name('homepage');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
//User Management
Route::get('/user-view', 'App\Http\Controllers\UserController@view')->name('user.view');
Route::get('/user-add', 'App\Http\Controllers\UserController@add')->name('user.add');
Route::post('/user-store', 'App\Http\Controllers\UserController@store')->name('user.store');
Route::get('/user-edit/{id}', 'App\Http\Controllers\UserController@edit')->name('user.edit');
Route::post('/user-update/{id}', 'App\Http\Controllers\UserController@update')->name('user.update');
Route::get('/user-delete/{id}', 'App\Http\Controllers\UserController@delete')->name('user.delete');

//Profile Management
Route::get('/profile-view', 'App\Http\Controllers\ProfileController@view')->name('profile.view');
Route::get('/profile-edit', 'App\Http\Controllers\ProfileController@edit')->name('profile.edit');
Route::post('/profile-update', 'App\Http\Controllers\ProfileController@update')->name('profile.update');
Route::get('/password/view', 'App\Http\Controllers\ProfileController@passwordView')->name('password.view');
Route::post('/password/update', 'App\Http\Controllers\ProfileController@passwordUpdate')->name('password.update');

//Blog Management
Route::get('/blog-view', 'App\Http\Controllers\BlogsController@view')->name('blog.view');
Route::get('/blog-add', 'App\Http\Controllers\BlogsController@add')->name('blog.add');
Route::post('/blog-store', 'App\Http\Controllers\BlogsController@store')->name('blog.store');
Route::get('/blog-edit/{id}', 'App\Http\Controllers\BlogsController@edit')->name('blog.edit');
Route::post('/blog-update/{id}', 'App\Http\Controllers\BlogsController@update')->name('blog.update');
Route::get('/blog-delete/{id}', 'App\Http\Controllers\BlogsController@delete')->name('blog.delete');


//Logo Management
Route::get('/logo-view', 'App\Http\Controllers\LogoController@view')->name('logo.view');
Route::get('/logo-add', 'App\Http\Controllers\LogoController@add')->name('logo.add');
Route::post('/logo-store', 'App\Http\Controllers\LogoController@store')->name('logo.store');
Route::get('/logo-edit/{id}', 'App\Http\Controllers\LogoController@edit')->name('logo.edit');
Route::post('/logo-update/{id}', 'App\Http\Controllers\LogoController@update')->name('logo.update');
Route::get('/logo-delete/{id}', 'App\Http\Controllers\LogoController@delete')->name('logo.delete');

//Banner Management
Route::get('/banner-view', 'App\Http\Controllers\BannerController@view')->name('banner.view');
Route::get('/banner-add', 'App\Http\Controllers\BannerController@add')->name('banner.add');
Route::post('/banner-store', 'App\Http\Controllers\BannerController@store')->name('banner.store');
Route::get('/banner-edit/{id}', 'App\Http\Controllers\BannerController@edit')->name('banner.edit');
Route::post('/banner-update/{id}', 'App\Http\Controllers\BannerController@update')->name('banner.update');
Route::get('/banner-delete/{id}', 'App\Http\Controllers\BannerController@delete')->name('banner.delete');

//Contact Management
Route::get('/contact-view', 'App\Http\Controllers\ContactController@view')->name('contact.view');
Route::get('/contact-add', 'App\Http\Controllers\ContactController@add')->name('contact.add');
Route::post('/contact-store', 'App\Http\Controllers\ContactController@store')->name('contact.store');
Route::get('/contact-edit/{id}', 'App\Http\Controllers\ContactController@edit')->name('contact.edit');
Route::post('/contact-update/{id}', 'App\Http\Controllers\ContactController@update')->name('contact.update');
Route::get('/contact-delete/{id}', 'App\Http\Controllers\ContactController@delete')->name('contact.delete');


//Menu Management
Route::get('/menu-view', 'App\Http\Controllers\MenuController@view')->name('menu.view');
Route::get('/menu-add', 'App\Http\Controllers\MenuController@add')->name('menu.add');
Route::post('/menu-store', 'App\Http\Controllers\MenuController@store')->name('menu.store');
Route::get('/menu-edit/{id}', 'App\Http\Controllers\MenuController@edit')->name('menu.edit');
Route::post('/menu-update/{id}', 'App\Http\Controllers\MenuController@update')->name('menu.update');
Route::get('/menu-delete/{id}', 'App\Http\Controllers\MenuController@delete')->name('menu.delete');

//Social Media Management
Route::get('/social-media-view', 'App\Http\Controllers\SocialMediaController@view')->name('social.media.view');
Route::get('/social-media-add', 'App\Http\Controllers\SocialMediaController@add')->name('social.media.add');
Route::post('/social-media-store', 'App\Http\Controllers\SocialMediaController@store')->name('social.media.store');
Route::get('/social-media-edit/{id}', 'App\Http\Controllers\SocialMediaController@edit')->name('social.media.edit');
Route::post('/social-media-update/{id}', 'App\Http\Controllers\SocialMediaController@update')->name('social.media.update');
Route::get('/social-media-delete/{id}', 'App\Http\Controllers\SocialMediaController@delete')->name('social.media.delete');


// customer  email notification
Route::post('/add/customer', [CustomerController::class, 'add_customer'])->name('add.customer');
Route::get('/customer/list', [CustomerController::class, 'customer_list'])->name('customer.list');
Route::post('/multiple/email', [CustomerController::class, 'multiple_email'])->name('multiple.email');
Route::get('/send/email/customer/{id}', [CustomerController::class, 'send_email_customer'])->name('send.email.customer');
Route::get('/delete/email/customer/{id}', [CustomerController::class, 'delete_email_customer'])->name('delete.email.customer');
Route::get('/manage/message', [CustomerController::class, 'manage_message'])->name('manage.message');
Route::get('/delete/email/customer/{id}', [CustomerController::class, 'delete_email_customer'])->name('delete.email.customer');
// Route::get('/manage/msg', [CustomerController::class, 'manage_msg'])->name('manage.msg');
Route::post('/register/msg', [CustomerController::class, 'register_msg'])->name('register.msg');
Route::get('/detele/msg/{id}', [CustomerController::class, 'detele_msg'])->name('detele.msg');


// Faq
Route::get('/faq}', [FaqContorller::class, 'faq'])->name('faq');
Route::get('/addfaq}', [FaqContorller::class, 'addfaq'])->name('addfaq');
Route::post('/store/faq}', [FaqContorller::class, 'store_faq'])->name('store.faq');
Route::get('/stdel/faq/{id}', [FaqContorller::class, 'del_faq'])->name('del.faq');
Route::get('/edit/faq/{id}', [FaqContorller::class, 'edit_faq'])->name('edit.faq');
Route::post('/update/faq/{id}', [FaqContorller::class, 'update_faq'])->name('update.faq');




