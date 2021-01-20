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


dump(DB:: table ('posts')->wheretitleAndBody('juste un titre','juste un contenu')->get()) ;

   
 
});
 


Route::get('/about', function () {
    return view('pages.about');
});    

route::get('/help','helpcontroller@help'); 
  

route::get('/events',function(){  
  $events=[
    'Make PHP Great Again',
    'PHP conference',
    'Meetup TDN',
    'laravel conferences'
  ];
 
return view ('events.index',compact('events')); 

}); 
    
Route::get('/ATL','postscontroller@show');
Route::get('/about','postscontroller@join');
Route::post('/help','postscontroller@make');
