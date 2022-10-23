<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

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

Route::get('/listings', function(){
    return view('listings', [
        'heading' => 'Latest listings',
        'listings' => Listing::all()
    ]);
});

Route::get('/listings/{id}', function($id){
    return view('listing', [
        // 'heading' => 'Single listing',
        'listing' => Listing::find($id)
    ]);
});

// Route::get('/hello', function () {
//     return 'Hello world!';
// });

// Route::get('/invoice/{id}', function($id) {
//     return response('Post ' . $id);
// })->where('id', '[0-9]+');

// Route::get('/player', function(Request $request) {
//     // ddd($request);
//     return ($request->name . ' ' . $request->city);
// });