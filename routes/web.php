<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserCenter;
Route::middleware('web')->group(function(){

  
  
  
  
  Route::get('/', function () {
    return view('welcome');
    });
    
    
    Route::view('/home','home')->name('h');
    Route::view('/main','main')->name('m');
    Route::view('/hh','h')->name('o');
    // Route::view('/Add','AddComplaint')->name('A');
     Route::get('/Add',[UserCenter::class,'add']);
    Route::view('/Event','Event')->name('e');
    Route::view('/Sport','Sport')->name('s');
    Route::view('/Academic','Academic')->name('a');
    Route::view('/Exam','exam')->name('ex');
    // Route::view('/vc','vc')->name('vc');
    Route::get('/vc',[UserCenter::class,'vc']);
    Route::view('/vevent','vevent')->name('ve');
    Route::view('/vsport','vsport')->name('vs');
    Route::view('/vacademic','vacademic')->name('va');
    Route::view('/vexam','vexam')->name('vex');
    
    // controller
    Route::post('/eventadd',[UserCenter::class,'eventadd']);
    Route::post('/sportadd',[UserCenter::class,'sportadd']);
    Route::post('/academic',[UserCenter::class,'academicadd']);
    Route::post('/exama',[UserCenter::class,'examadd']);
    Route::get('/vevent',[UserCenter::class,'showEvent']);
    Route::get('/vsport',[UserCenter::class,'showSport']);
    Route::get('/vacademic',[UserCenter::class,'showAcademic']);
    Route::get('/vexam',[UserCenter::class,'showExam']);
    
    
    Route::post('/search',[UserCenter::class,'search']);
    Route::post('/searchsport',[UserCenter::class,'searchsport']);
    Route::post('/searchacademic',[UserCenter::class,'searchacademic']);
    Route::post('/searchexam',[UserCenter::class,'searchexam']);
    Route::get('/updateevent/{id}',[UserCenter::class,'population']);
    Route::get('/updatesport/{id}',[UserCenter::class,'populationsport']);
    Route::get('/updateacademic/{id}',[UserCenter::class,'populationacademic']);
    Route::get('/updateexam/{id}',[UserCenter::class,'populationexam']);
    Route::get('/deleteevent/{id}',[UserCenter::class,'deleteevent']);
    Route::get('/deletesport/{id}',[UserCenter::class,'deletesport']);
    Route::get('/deleteacademic/{id}',[UserCenter::class,'deleteacademic']);
    Route::get('/deleteexam/{id}',[UserCenter::class,'deleteexam']);
    Route::post('/uevent/{id}',[UserCenter::class,'updateevent']);
    Route::post('/usport/{id}',[UserCenter::class,'updatesport']);
    Route::post('//uacademic/{id}',[UserCenter::class,'uppdateacademic']);
    Route::post('/uexam/{id}',[UserCenter::class,'updateexam']);
    
    Route::view('/about','about');
    
    Route::view('/sig','signup');
    Route::view('/l','login');
    
    Route::post('/signupauthe',[UserCenter::class,'signup']);
    Route::post('/loginauthe',[UserCenter::class,'login']);
    
    // admin side
    // Route::view('/admind','admindashboard');
    Route::view('/avc','avc');
    
   
    Route::get('/showaevent',[UserCenter::class,'showaevent']);
    Route::get('/showasport',[UserCenter::class,'showasport']);
    Route::get('/showaacademic',[UserCenter::class,'showaacademic']);
    Route::get('/showaexam',[UserCenter::class,'showaexam']);
    
    Route::post('/asearch',[UserCenter::class,'asearch']);
    Route::post('/asport',[UserCenter::class,'asport']);
    Route::post('/aaa',[UserCenter::class,'aaa']);
    Route::post('/aexam',[UserCenter::class,'aexam']);
    
    Route::get('/adminevent',[UserCenter::class,'adminevent']);
  
    Route::get('/showsignup',[UserCenter::class,'showsignup']);
    
      Route::post('/check',[UserCenter::class,'check']);
      Route::view('/as','adminsignup');
      Route::view('/al','adminlogin');
      Route::post('/signupadmin',[UserCenter::class,'signupadmin']);
      Route::post('/loginadmin',[UserCenter::class,'loginadmin']);
     Route::get('/dl',[UserCenter::class,'dl']);
     Route::get('/bvc',[UserCenter::class,'bvc']);

     
      Route::get('/h/{lang}',function($lang){
        session()->put('lang',$lang);
        return redirect()->back();
        });
        
        
        
        
        
        
});