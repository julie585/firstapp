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
return view ('welcome');
});
Route::get('/formulaire',function(){
  return view ('formulaire');
});
Route::post('/validerformulaire','postscontroller@valider')->name('valider');

//dump(DB:: table ('posts')->wheretitleAndBody('juste un titre','juste un contenu')->get()) ;

   
 

Route::get('/services',function(){
  return view('services');
});
 

Route::get('/index',function(){
return view ('index');
});
Route::get('Admin',function(){
  return view('Admin');
});
Route::post('/validerAdmin','postscontroller@Message')->name('Message');

Route::get('Matiere',function(){
  return view('Matiere');
});
Route::get('/afficheMatiere','postscontroller@affichageM');

Route::get('etudiant',function(){
  return view('etudiant');
});
Route::get('/afficheEtudiant','postscontroller@affichageE')->name('affichageE');

  
Route::get('Template',function(){
  return view('Template');
});
Route::get('Professeur',function(){
  return view('Professeur');
});
 Route::get('/afficheProfesseur','postscontroller@afficheP');

 

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
Route::post('/information','informationController@inform');
