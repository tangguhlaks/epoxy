<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Auth\Events\Login;
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

// Route::get('/', function () {
//     return view('welcome');
// });

//guest
Route::get('/',[UserController::class,'index']);
Route::get('/login',[LoginController::class,'index'])->middleware('guest');
Route::get('/sienna<3tangguh',[LoginController::class,'register']);
Route::post('/register-user',[LoginController::class,'registerUser']);
Route::post('/auth',[LoginController::class,'authenticate']);
Route::post('/logout',[LoginController::class,'logout']);
Route::get('/room',[UserController::class,'room']);
Route::get('/room-detail/{id}',[UserController::class,'roomDetail']);
Route::get('/gallery',[UserController::class,'gallery']);


//books
Route::post('/book-step1',[UserController::class,'bookStep1']);
Route::post('/book-step2',[UserController::class,'bookStep2']);
Route::post('/upload-proof-payment',[UserController::class,'uploadProofPayment']);
Route::get('/book/{id}',[UserController::class,'book']);
Route::get('/print/{id}',[UserController::class,'print']);
Route::get('/mybook',[UserController::class,'mybook']);
Route::get('/sendmail',[UserController::class,'sendMail']);


//paymentdeleteuser
Route::get('/delete-payment-user/{id}',[UserController::class,'deletePayment']);

//rating
Route::post('/add-rating',[UserController::class,'addRating']);

//contact-me
Route::post('/contact-me',[UserController::class,'contactMe']);
Route::get('/contact-us',[UserController::class,'contactUs']);

//admin
Route::group(['middleware'=>'admin'],function(){

    //dashboard
    Route::get('/dashboard',[AdminController::class,'index']);

    //slider
    Route::get('/slider',[AdminController::class,'slider']);
    Route::post('/add-slider',[AdminController::class,'addSlider']);
    Route::get('/delete-slider/{id}',[AdminController::class,'deleteSlider']);

    //about
    Route::get('/about',[AdminController::class,'about']);
    Route::post('/add-about',[AdminController::class,'addAbout']);
    Route::get('/delete-about/{id}',[AdminController::class,'deleteAbout']);
    Route::get('/select-about/{id}',[AdminController::class,'selectAbout']);

    //about
    Route::get('/rating',[AdminController::class,'rating']);
    Route::get('/delete-rating/{id}',[AdminController::class,'deleteRating']);
    Route::get('/select-rating/{id}',[AdminController::class,'selectRating']);

    //admin-room
    Route::get('/admin-room',[AdminController::class,'room']);
    Route::get('/add-room',[AdminController::class,'addRoomPage']);
    Route::post('/add-room',[AdminController::class,'addRoom']);
    Route::get('/edit-room/{id}',[AdminController::class,'editRoomPage']);
    Route::post('/edit-room',[AdminController::class,'editRoom']);
    Route::post('/add-image-room',[AdminController::class,'addImageRoom']);
    Route::get('/delete-room/{id}',[AdminController::class,'deleteRoom']);
    Route::get('/delete-image-room/{id}',[AdminController::class,'deleteImageRoom']);
    Route::get('/select-fav-room/{id}',[AdminController::class,'selectFavRoom']);
    Route::get('/select-image-room/{id}/{idroom}',[AdminController::class,'selectImageRoom']);

    //service
    Route::get('/service',[AdminController::class,'service']);
    Route::post('/add-service',[AdminController::class,'addService']);
    Route::get('/delete-service/{id}',[AdminController::class,'deleteService']);

    //admin-gallery
    Route::get('/admin-gallery',[AdminController::class,'gallery']);
    Route::post('/add-gallery',[AdminController::class,'addGallery']);
    Route::get('/delete-gallery/{id}',[AdminController::class,'deleteGallery']);
    Route::get('/select-gallery/{id}',[AdminController::class,'selectGallery']);

    //payment
    Route::get('/admin-payment',[AdminController::class,'payment']);
    Route::get('/delete-payment/{id}',[AdminController::class,'deletePayment']);
    Route::post('/change-status-payment',[AdminController::class,'changeStatusPayment']);

    //user
    Route::get('/admin-user',[AdminController::class,'user']);
    Route::get('/delete-user/{id}',[AdminController::class,'deleteUser']);

    //message
    Route::get('/admin-message',[AdminController::class,'message']);
    Route::get('/delete-message/{id}',[AdminController::class,'deleteMessage']);


});


