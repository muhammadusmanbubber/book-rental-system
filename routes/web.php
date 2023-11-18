<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
Use App\Http\Controllers\BookController;
Use App\Http\Controllers\RentedController;
use App\Models\User;
use App\Models\Admin;
use App\Models\Book;
use App\Models\RentedBook;
use App\Http\Controllers\RentalController;

Route::get('/rentals/book/{book_id}', [RentalController::class, 'store'])->name('rentals.book');

Route::controller(UserController::class)->group(function () {

    Route::get('/', 'index');          
    Route::get('user_login', 'user_login');     
    Route::post('signup','signup');     
    Route::post('user_login_qry', 'user_login_qry');
    Route::get('home', 'home');
    Route::get('rented', 'rented');
    Route::get('order/{id}','order_book');
    Route::get('profile', 'profile');
    Route::get('edit/{id}', 'edit_profile');
    Route::post('update/{id}', 'update');
    Route::get('logout', 'logout');
});

Route::controller(AdminController::class)->group(function (){
    Route::get('admin_login', 'admin_login');
    Route::post('admin_login_qry', 'admin_login_qry');
    Route::get('admin_home', 'admin_home');
    Route::get('adminData', 'adminData');
    Route::post('search', 'search');
    Route::get('delete/{id}', 'delete');
    Route::get('updateProfile/{id}', 'edit');
    Route::get('updatebookpage/{id}', 'update_book_page');
    Route::post('update_book_data/{id}', 'update_book');
    Route::get('logout1', 'logout1'); 
    Route::post('update_by_admin/{id}', 'update');
    Route::get('trash', 'trash');
    Route::get('trash_data', 'trash');
    Route::get('forceDelete/{id}', 'forceDelete');
    Route::get('restore/{id}', 'restore');
    Route::get('all_books','all_books');
    Route::get('rented_books','rented_books');

});

Route::controller(BookController::class)->group(function (){
    Route::get('add_book', 'add_book');
    Route::post('add_book_data', 'add_book_data');
    Route::get('book_details/{id}', 'book_details');
    Route::get('order/{id}', 'order_details');
    Route::post('rented_book/{id}','order_book_rent');
    // Route::post('rented_book/{id}','order_book_rent');

});

Route::controller(RentedController::class)->group(function (){

});