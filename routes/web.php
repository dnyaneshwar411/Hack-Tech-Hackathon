<?php

use App\Http\Controllers\Pools;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Application/landing');
});

Route::get('/navigation',function(){
    return view('Application/map');
});

Route::get('/trip-planner',function(){
    return view('Application/trip-planner');
});

Route::get('/pools',function(){
    return view('Application/pools');
});

Route::get('/pools/create',function(){
    return view('Application/create-pools');
});

Route::post('/pools/create',[Pools::class,'AddPool']);

Route::get('/pools/join',[Pools::class, 'ListPool']);

Route::post('/pools/join',[Pools::class,'JoinPool']);

Route::get('/pools/requests', [Pools::class,'ShowRequests']);
Route::post('/pools/accept', [Pools::class,'AcceptRequests']);

Route::get('/pools/accepted-requests', [Pools::class,'ShowAcceptedRequests']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
