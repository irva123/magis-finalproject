<?php
use App\Http\Controllers\CentrePointController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\SpaceController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\MapLocation;
use App\Http\Controllers\KritikController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GeoheritageController;
use App\Http\Controllers\Geoheritage2Controller;
use App\Http\Controllers\GeodiversityController;
use App\Http\Controllers\Geodiversity2Controller;
use App\Http\Controllers\BiodiversityController;
use App\Http\Controllers\Biodiversity2Controller;
use App\Http\Controllers\CulturaldiversityController;
use App\Http\Controllers\Culturaldiversity2Controller;
use App\Http\Controllers\GeoparkController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\Event2Controller;

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
    return view('homepage');
});
// MENAMBAHKAN ROUTE BARU UNTUK MENAMPILKAN MAP
Route::get('/map1', function () {
    return view('map');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/map',[App\Http\Controllers\MapController::class,'index'])->name('map.index');
Route::get('/map2',[App\Http\Controllers\MapController::class,'index'])->name('map2.index');
Route::get('/map/{slug}',[App\Http\Controllers\MapController::class,'show'])->name('map.show');
Route::get('logout', function ()
{
    auth()->logout();
    Session()->flush();

    return Redirect::to('/homepage');
})->name('logout');

Route::resource('centre-point',(CentrePointController::class));
Route::resource('space',(SpaceController::class));

Route::get('/centrepoint/data',[DataController::class,'centrepoint'])->name('centre-point.data');
Route::get('/spaces/data',[DataController::class,'spaces'])->name('data-space');
Route::get('create-pdf1',[GeodiversityController::class, 'createPDF'])->name('create-pdf1');
Route::get('create-pdf2',[BiodiversityController::class, 'createPDF'])->name('create-pdf2');
Route::get('create-pdf3',[CulturaldiversityController::class, 'createPDF'])->name('create-pdf3');
Route::get('create-pdf4',[EventController::class, 'createPDF'])->name('create-pdf4');
Route::get('create-pdf',[GeoparkController::class, 'createPDF'])->name('create-pdf');
Route::get('create-pdf5',[GeoheritageController::class, 'createPDF'])->name('create-pdf5');

Route::resource('/homepage', HomepageController::class);
Route::resource('/map2', MapController::class);
Route::resource('/kritik', KritikController::class);
Route::resource('/dashboard', DashboardController::class);
Route::resource('/geoheritage', GeoheritageController::class);
Route::resource('/geodiversity', GeodiversityController::class);
Route::resource('/biodiversity', BiodiversityController::class);
Route::resource('/culturaldiversity', CulturaldiversityController::class);
Route::resource('/event', EventController::class);
Route::resource('/geopark', GeoparkController::class);
Route::resource('/geoheritage2', Geoheritage2Controller::class);
Route::resource('/geodiversity2', Geodiversity2Controller::class);
Route::resource('/biodiversity2', Biodiversity2Controller::class);
Route::resource('/culturaldiversity2', Culturaldiversity2Controller::class);
Route::resource('/event2', Event2Controller::class);

// Route::get('/kritik',[App\Http\Controllers\KritikController::class,'create'])->name('kritik.create');
//Route::get('/kritik', function () {
//     return view('kritik&saran.create');
// });