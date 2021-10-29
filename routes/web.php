<?php

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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/test', function () {
    return view('admin.layouts.master');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
//super Admin
Route::group(['middleware' => 'App\Http\Middleware\IsSuperAdmin'], function()
{

Route::get('/admin/userwww', [App\Http\Controllers\SupAddUserCon::class, 'add']);

});

Route::group(['middleware' => 'App\Http\Middleware\IsAdmin'], function()
{
Route::get('admin/users', [App\Http\Controllers\AdmUserCon::class, 'index']);
Route::get('admin/users/create', [App\Http\Controllers\AdmUserCon::class, 'create']);
Route::get('admin/users/view', [App\Http\Controllers\AdmUserCon::class, 'view']);
Route::get('admin/users/edit', [App\Http\Controllers\AdmUserCon::class, 'edit']);
Route::get('admin/users/password', [App\Http\Controllers\AdmUserCon::class, 'update_password']);

Route::get('/admin/profile', [App\Http\Controllers\AdmUserCon::class, 'profileView']);
Route::get('/admin/profile/update', [App\Http\Controllers\AdmUserCon::class, 'profileEdit']);
Route::get('/admin/profile/password', [App\Http\Controllers\AdmUserCon::class, 'profilePassword']);

Route::get('/admin/institutes', [App\Http\Controllers\AdmInstiCon::class, 'index']);
Route::get('/admin/institutes/create', [App\Http\Controllers\AdmInstiCon::class, 'create']);
Route::get('/admin/institutes/view', [App\Http\Controllers\AdmInstiCon::class, 'view']);
Route::get('/admin/institutes/edit', [App\Http\Controllers\AdmInstiCon::class, 'edit']);

Route::get('/admin/students', [App\Http\Controllers\AdminStudentCon::class, 'index']);
Route::get('/admin/students/create', [App\Http\Controllers\AdminStudentCon::class, 'create']);
Route::get('/admin/students/view', [App\Http\Controllers\AdminStudentCon::class, 'view']);
Route::get('/admin/students/edit', [App\Http\Controllers\AdminStudentCon::class, 'edit']);

Route::get('/admin/banks', [App\Http\Controllers\AdminBankCon::class, 'create']);
Route::get('/admin/banks/edit', [App\Http\Controllers\AdminBankCon::class, 'edit']);

Route::get('/admin/inqueries', [App\Http\Controllers\AdminInqueryCon::class, 'index']);
Route::get('/admin/inqueries/create', [App\Http\Controllers\AdminInqueryCon::class, 'create']);
Route::get('/admin/inqueries/view', [App\Http\Controllers\AdminInqueryCon::class, 'view']);
Route::get('/admin/inqueries/edit', [App\Http\Controllers\AdminInqueryCon::class, 'edit']);

Route::get('/admin/payments', [App\Http\Controllers\AdminPaymentCon::class, 'index']);
Route::get('/admin/payments/create', [App\Http\Controllers\AdminPaymentCon::class, 'create']);
Route::get('/admin/payments/view', [App\Http\Controllers\AdminPaymentCon::class, 'view']);
Route::get('/admin/payments/old/view', [App\Http\Controllers\AdminPaymentCon::class, 'old_payment']);

Route::get('/admin/applications', [App\Http\Controllers\AdminApplicationCon::class, 'index']);
Route::get('/admin/applications/create', [App\Http\Controllers\AdminApplicationCon::class, 'create']);
Route::get('/admin/applications/view', [App\Http\Controllers\AdminApplicationCon::class, 'view']);
Route::get('/admin/applications/edit', [App\Http\Controllers\AdminApplicationCon::class, 'edit']);

Route::get('/admin/awards/create', [App\Http\Controllers\AdminAwordsCon::class, 'create']);
Route::get('/admin/students/awards/view', [App\Http\Controllers\AdminAwordsCon::class, 'view']);
Route::get('/admin/students/awards/edit', [App\Http\Controllers\AdminAwordsCon::class, 'edit']);

Route::get('/admin/complaints/create', [App\Http\Controllers\AdminComplaintsCon::class, 'create']);
Route::get('/admin/students/complaints/view', [App\Http\Controllers\AdminComplaintsCon::class, 'view']);
Route::get('/admin/students/complaints/edit', [App\Http\Controllers\AdminComplaintsCon::class, 'edit']);

Route::get('/admin/activities_pay', [App\Http\Controllers\AdminActivCon::class, 'index']);
Route::get('/admin/activities_pay/create', [App\Http\Controllers\AdminActivCon::class, 'create']);
Route::get('/admin/activities_pay/view', [App\Http\Controllers\AdminActivCon::class, 'view']);
Route::get('/admin/activities_pay/old/view', [App\Http\Controllers\AdminActivCon::class, 'old_payment']);

Route::get('/admin/activities', [App\Http\Controllers\AdminActiviSetCon::class, 'index']);
Route::get('/admin/activities/create', [App\Http\Controllers\AdminActiviSetCon::class, 'create']);
Route::get('/admin/activities/view', [App\Http\Controllers\AdminActiviSetCon::class, 'view']);
Route::get('/admin/activities/edit', [App\Http\Controllers\AdminActiviSetCon::class, 'edit']);
});
