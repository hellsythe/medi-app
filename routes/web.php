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
    return view('welcome');
});

Route::namespace('\App\Http\Controllers\Admin')
->middleware(['verified'])
->prefix('admin')->group(function () {
    Route::SdkResource('organization', OrganizationController::class);
    Route::SdkResource('clinic', ClinicController::class);
    Route::SdkResource('coctor-office', DoctorOffice::class);
    Route::SdkResource('patient', PatientController::class);
    Route::SdkResource('consultation', ConsultationController::class);
});
