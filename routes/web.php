<?php

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

Route::get('/', 'MainController@homepage');
Route::get('/about', 'MainController@aboutPage');
Route::get('/pricing', 'MainController@pricingPage');
Route::get('/contact', 'ContactController@getForm')->name('contact_form');
Route::post('/contact', 'ContactController@submitForm')->name('contact_form');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Auth::routes();

Route::get('/package/{package}', 'PackageController@getPackage');

Route::get('/invoice/{invoice}', 'InvoiceController@showInvoice')->name('show_invoice');
Route::get('/invoice/{invoice}/paid', 'InvoiceController@showReceipt')->name('show_receipt');

// Paystack Routes
Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');
Route::get('/payment/callback', 'PaymentController@handleGatewayCallback');

Route::middleware('auth')->prefix('dashboard')->group(function(){
	Route::get('/', 'DashboardController@index')->name('home');
	Route::get('/invoices', 'InvoiceController@invoices')->name('invoices');
	Route::get('/subscriptions', 'SubscriptionController@showSubscriptions')->name('subscriptions');
	Route::get('/subscriptions/add', 'SubscriptionController@add')->name('add_subscription');
	Route::post('/subscriptions/add', 'SubscriptionController@submit')->name('add_subscription');

	// Support Routes
	Route::get('/contact', 'SupportController@contact')->name('admin_contact');
	Route::post('/contact', 'SupportController@submitContact')->name('admin_contact');
	Route::get('/faq', 'SupportController@faq')->name('admin_faq');

	Route::prefix('/profile')->group(function(){
		Route::get('/edit', 'ProfileController@edit')->name('edit_profile');
		Route::post('/edit', 'ProfileController@submitEdit')->name('edit_profile');
	});

	Route::middleware(['auth', 'admin'])->prefix('admin')->group(function(){
		Route::get('/subscriptions', 'AdminController@subscriptions')->name('subscriptions_admin');
		Route::get('/invoices', 'AdminController@invoices')->name('invoices_admin');
		Route::get('/faq', 'FaqController@faqAdmin')->name('faq_admin');
		Route::post('/faq', 'FaqController@submitFAQ')->name('faq_admin');
		Route::post('/invoice/{invoice}/approve', 'PaymentController@approveInvoice');
	});
});