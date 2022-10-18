<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BirthController;
use App\Http\Controllers\MarriageController;
use App\Http\Controllers\CenomarController;
use App\Http\Controllers\FatherDeathController;
use App\Http\Controllers\ScholarshipController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\SuggestionsController;


use App\Http\Controllers\StaffHomeController;
use App\Http\Controllers\RecordBirthController;
use App\Http\Controllers\RecordMarriageController;
use App\Http\Controllers\RecordFatherDeathController;
use App\Http\Controllers\RecordScholarshipController;
use App\Http\Controllers\RecordBusinessController;
use App\Http\Controllers\RecordCenomarController;
use App\Http\Controllers\RecordAppointmentController;
use App\Http\Controllers\RecordSuggestionsController;






// use App\Http\Controllers\StaffHomeController;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\MailController;
use App\Mail\MailNotify;
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

//Routes for all the pages

Route::get('/', function () {
    return view('landing'); //the landing page
});
Route::get('/birthCert', function () {
    return view('birthCert');
});

Route::get('/birthForm', function () {
    return view('birthForm');
});

Route::get('/marriageCert', function () {
    return view('marriageCert');
});

Route::get('/marriageForm', function () {
    return view('marriageForm');
});

Route::get('/cenomar', function () {
    return view('cenomar');
});

Route::get('/cenomarForm', function () {
    return view('cenomarForm');
});

Route::get('/deathCertWho', function () {
    return view('deathCertWho');
});

Route::get('/fatherDeathCert', function () {
    return view('fatherDeathCert');
});

Route::get('/fatherDeathForm', function () {
    return view('fatherDeathForm');
});

Route::get('/motherDeathCert', function () {
    return view('motherDeathCert');
});

Route::get('/motherDeathForm', function () {
    return view('motherDeathForm');
});

Route::get('/scholarship', function () {
    return view('scholarship');
});

Route::get('/permit', function () {
    return view('permit');
});

Route::get('/appointment', function () {
    return view('appointment');
});

Route::get('/suggestion', function () {
    return view('suggestion');
});




Auth::routes();


//Route for database functions //makita sa controller ang method
//for Birth Cert
Route::get('addBirth', [BirthController::class, 'create']);
Route::post('addBirth', [BirthController::class, 'store']); 
//for Marriage Cert
Route::get('addMarriage', [MarriageController::class, 'create']);
Route::post('addMarriage', [MarriageController::class, 'store']); 

//for Cenomar Cert
Route::get('addCenomar', [CenomarController::class, 'create']);
Route::post('addCenomar', [CenomarController::class, 'store']);

//for Father Death Cert
Route::get('addFatherDeath', [FatherDeathController::class, 'create']);
Route::post('addFatherDeath', [FatherDeathController::class, 'store']);

//for Scholarship Cert
Route::get('addScholarship', [ScholarshipController::class, 'create']);
Route::post('addScholarship', [ScholarshipController::class, 'store']);

//for Business Permit
Route::get('addBusiness', [BusinessController::class, 'create']);
Route::post('addBusiness', [BusinessController::class, 'store']);

//for Appointment
Route::get('addAppointment', [AppointmentController::class, 'create']);
Route::post('addAppointment', [AppointmentController::class, 'store']);

//for Suggestions
Route::get('addSuggestions', [SuggestionsController::class, 'create']);
Route::post('addSuggestions', [SuggestionsController::class, 'store']);

// Route for the function after filling out the form // gicall ang index function sa birthcontroller nga birthSucces angv mudisplay
Route::get('birthDetails', [BirthController::class, 'index']); 
Route::get('marriageDetails', [MarriageController::class, 'index']);
Route::get('cenomarDetails', [CenomarController::class, 'index']);
Route::get('fatherDeathDetails', [FatherDeathController::class, 'index']);
Route::get('businessDetails', [BusinessController::class, 'index']);
Route::get('scholarshipDetails', [ScholarshipController::class, 'index']);
Route::get('appointmentDetails', [AppointmentController::class, 'index']);
Route::get('suggestionsDetails', [SuggestionsController::class, 'index']);



//Route for indexes nga adtuan sa staff 
 Route::get('/staffHome', [StaffHomeController::class, 'index'])->name('staffHome'); 
 Route::get('/home', [StaffHomeController::class, 'index'])->name('home'); 
 
 //records from the database
Route::get('/birthRequest', [RecordBirthController::class, 'index'])->name('birthRequest'); 
Route::get('/marriageRequest', [RecordMarriageController::class, 'index'])->name('marriageRequest'); 
Route::get('/cenomarRequest', [RecordCenomarController::class, 'index'])->name('cenomarRequest'); 
Route::get('/fatherDeathRequest', [RecordFatherDeathController::class, 'index'])->name('fatherDeathRequest'); 
Route::get('/scholarshipRequest', [RecordScholarshipController::class, 'index'])->name('scholarshipRequest'); 
Route::get('/businessPermitRequest', [RecordBusinessController::class, 'index'])->name('businessPermitRequest'); 
Route::get('/appointmentRequest', [RecordAppointmentController::class, 'index'])->name('appointmentRequest'); 
Route::get('/suggestionsRequest', [RecordSuggestionsController::class, 'index'])->name('suggestionsRequest'); 



// Route::get('/marriageHome', [RecordController::class, 'marriageHome'])->name('marriageHome'); 



// Route::get('/dashboard', function () {
//     return view('staffHome');
// })->middleware(['auth', 'verified'])->name('staffHome');

// // require __DIR__.'/auth.php';


//for email
Route::get('/send-email', function(){
    $mailData = [
        "name"=> "Good day, we are already processing your request. We will email you as soon as your document is ready for procurement.",
        "regards" => "Respectfully, Cebu City Registration System"
    ];
    Mail::to("julsestorco@testing.com")-> send(new MailNotify($mailData));
 
});