<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/*
|--------------------------------------------------------------------------
| Customer Web Routes
|--------------------------------------------------------------------------
|
| All routes below this are for customer website
|
*/

Route::get('/', function () {
    $data = [
        'title' => 'Welcome to Workshop HME'
    ];

    return view('customer/home', $data);
})->name('home');

Route::get('/projects', function () {
    $data = [
        'title' => 'Projects'
    ];

    return view('customer/projects', $data);
})->name('projects');

Route::get('/catalog', 'CatalogController@index')->name('catalog');

Route::get('/rent', function () {
    $data = [
      'title' => 'Rental'
    ];

    return view('customer/hapus', $data);
})->name('rent');

Route::get('/about', function () {
    $data = [
        'title' => 'About Us'
    ];

    return view('customer/about', $data);
})->name('about');

Route::get('/admin_dashboard', function () {
    $data = [
        'title' => 'Dashboard'
    ];

    return view('admin/dashboard', $data);
})->name('admin_dashboard');

/*
|--------------------------------------------------------------------------
| Admin Web Routes
|--------------------------------------------------------------------------
|
| All routes below this are for admin website
|
*/

Route::get('/dashboard', function () {
    return view('admin/dashboard');
})->name('dashboard');

Route::get('/charts', function () {
    return view('admin/charts');
})->name('charts');

Route::get('/tables', function () {
    return view('admin/tables');
})->name('tables');

Route::get('/navbar', function () {
    return view('admin/navbar');
})->name('navbar');

Route::get('/cards', function () {
    return view('admin/cards');
})->name('cards');

Route::get('/login', function () {
    return view('admin/login');
})->name('login');

Route::get('/register', function () {
    return view('admin/register');
})->name('register');

Route::get('/forgot-password', function () {
    return view('admin/forgot-password');
})->name('forgot-password');

Route::get('/blank', function () {
    return view('admin/blank');
})->name('blank');


