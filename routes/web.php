<?php

use App\Http\Controllers\Client_Insert;
use App\Http\Controllers\Contact_form;
use App\Http\Controllers\login_Profil_Controller;
use App\Http\Controllers\page_voyage_reservation;
use App\Http\Controllers\profil_registrement;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Switch_page;
use App\Http\Controllers\user_login;
use PhpParser\Node\Stmt\Switch_;



Route::get('/', [Switch_page::class, "page_Home"]);

Route::get('/props_page', [Switch_page::class, "page_Propos"]);

Route::get('/seminaire_page', [Switch_page::class, "page_Seminaire"])->name('page_Seminaire');

Route::get('/golfique_page', [Switch_page::class, "page_Golfique"])->name('golfique_page');

Route::get('/carte_voyage', [Switch_page::class, "page_voyage_Carte"]);

Route::get('/organise_voyage', [Switch_page::class, "page_voyage_Organise"]);

//)------------------------------------------------------

Route::get('/billeterie_page', [Switch_page::class, "page_Billeterie"])->name('billeterie_page');

Route::post('/validation_conserves', [Switch_page::class, "validation_conserves"])->name('validation_conserves');

//)------------------------------------------------------

Route::post("/Md_Data_profil", [login_Profil_Controller::class, "Modifier_data_profil"])->name("Md_Data_profil");

Route::get("/Md_Data_profil", [login_Profil_Controller::class, "Modifier_data_profil"])->name("Md_Data_profil");


Route::get('/registrement_page', [Switch_page::class, "page_Registrement"])->name('page_Registrement');

Route::get('/contact_page', [Switch_page::class, "page_Contact"])->name('contact_page');

Route::post('/send_data_contact', [Contact_form::class, "send_data_contact"])->name("send_data_contact");

Route::get('/page_chefchaoun', [Switch_page::class, "page_chefchaoun"]);

Route::get('/page_ifrane', [Switch_page::class, "page_ifrane"]);

Route::get('/page_login', [user_login::class, "show_page_login"]);

Route::post('/login_validate', [user_login::class, "validate_client_login"])->name('login_user');

Route::post('/store_data_profil', [profil_registrement::class, "store_Data_profil"])->name('store_data_profil');

// page login ----------------------

Route::get('/show_Page_login', [login_Profil_Controller::class, "show_Page_login"])->name('show_Page_login');

Route::post('/validate_login_profil', [login_Profil_Controller::class, "validate_login_profil"])->name('validate_login_profil');

// Route::post('/Modifier_data_profil', [login_Profil_Controller::class, "Modifier_data_profil"])->name("Modifier_data_profil");

Route::get("/show_page_Voyages", [page_voyage_reservation::class, "show_page_Voyages"])->name("show_page_Voyages");
//  ----------------------------------------------------------------------------------------------------------------------------------------------------------------
// Route::post("/Md_Data_profil", [login_Profil_Controller::class, "Modifier_data_profil"])->name("Md_Data_profil");
//validation  de reservation -------

Route::post('/validation_reservation_voyage', [page_voyage_reservation::class, "validation_reservation_voyage"])->name("validation_reservation_voyage");

Route::get('/_', function () {

    return view('welcome');
});

Route::get('/home1', function () {
    return view('components.home');
});




// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
