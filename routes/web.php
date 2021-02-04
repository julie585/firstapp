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
Route::get('/Récuperation','postscontroller@recupere');
Route::post('/updateAdmin','postscontroller@ajoutA')->name('ajoutadmin');

    
Route::post('/validerAdmin','postscontroller@validationAdmin')->name('validationAdmin');

Route::get('Matiere',function(){
  return view('Matiere');
});
Route::get('/afficheMatiere','postscontroller@affichageM')->name('affichageM');

Route::get('etudiant',function(){
  return view('etudiant');
});
Route::get('/afficheEtudiant','postscontroller@affichageE')->name('affichageE');

  
Route::get('Template',function(){
  return view('Template');
});
Route::get('Prof_Mat',function(){
  return view('Prof_Mat');
});

Route::get('Prof_Mat','ProfMathsController@index')->name('AFFICHEpro');


Route::post('/validerP_M','ProfMathsController@validerPM')->name('addprofesseurmatiere');



Route::get('Etudiant_Matiere','EtudMathController@index1')->name('afficheEtudmat');
Route::post('/validerE_M','EtudMathController@validerEM')->name('addetudiantmatiere');

Route::get('CreateEtudiant','ProfMathsController@create')->name('creation');
Route::post('/afficheEtudiant','postscontroller@affichageE')->name('affichageE');
  
 
Route::post('/validerEtudiant','postscontroller@validerE')->name('validerE');


Route::get('CreateMatiere','ProfMathsController@createM')->name('creationM');
Route::post('/afficheMatiere','postscontroller@affichageM')->name('affichageM');

Route::post('/validerMatiere','postscontroller@validerM')->name('validerM');




Route::get('CreateProfesseur','ProfMathsController@createP')->name('creationP');
Route::post('/afficheProfesseur','postscontroller@afficheP')->name('afficheP');
Route::post('/validerProfesseur','postscontroller@validerP')->name('validerP');



Route::get('Professeur',function(){
  return view('Professeur');
});
 Route::get('/afficheProfesseur','postscontroller@afficheP')->name('afficheP');

 

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
