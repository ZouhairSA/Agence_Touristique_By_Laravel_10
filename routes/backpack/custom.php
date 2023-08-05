<?php

use Illuminate\Support\Facades\Route;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('user', 'UserCrudController');
    Route::crud('profil', 'ProfilCrudController');
   // Route::crud('contact', 'ContactCrudController');
   // Route::crud('contacte', 'ContacteCrudController');
    Route::crud('partenaire', 'PartenaireCrudController');
    Route::crud('client', 'ClientCrudController');
    Route::crud('ville', 'VilleCrudController');
    //Route::crud('section', 'SectionCrudController');
    Route::get('charts/weekly-users', 'Charts\WeeklyUsersChartController@response')->name('charts.weekly-users.index');
    Route::crud('voyage', 'VoyageCrudController');
    Route::crud('contacte-send', 'ContacteSendCrudController');
    Route::get('charts/conserves', 'Charts\ConservesChartController@response')->name('charts.conserves.index');
    Route::crud('conserve', 'ConserveCrudController');
    Route::crud('page', 'PageCrudController');
    Route::get('charts/trajets', 'Charts\TrajetsChartController@response')->name('charts.trajets.index');
    Route::crud('trajet', 'TrajetCrudController');
}); // this should be the absolute last line of this file