<?php

use App\Http\Controllers\AddController;
use App\Http\Controllers\kobjects;
use App\Http\Controllers\letters;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Verbs;
use App\Http\Middleware\UserCheckMiddleware;
use App\Models\Quiz;
use App\Models\Verb;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    // var_dump(Auth::user());

    return view('frontPage');
})->name('home')->middleware('auth');
// ->middleware(UserCheckMiddleware::class . ':admin@ims.com');

Route::get('/letters',[letters::class,'showData'])->name('letter'); 
    
Route::get('/object',[kobjects::class,'showKobjects'])->name('object');

Route::get('/verb',[Verbs::class,'showVerbs'])->name('verb');

Route::get('/eps', function () {
    return view('wordMeaning');
})->name('eps');

Route::get('/checked', function () {
    return view('checked');
    })->name('checked');

Route::get('/unchecked', function () {
    return view('unchecked');
})->name('unchecked');

Route::get('/quiz', [QuizController::class,'showQuiz'])->name('quiz');
// Route::get('/quiz',Quiz::class);
// Route::post('login/add', [AddController::class,'check']);
Route::resource('add', AddController::class);
Route::resource('checkedController', AddController::class);
Route::get('/login',function(){
    return view('login');
})->name('login');
Route::get('/signup',function(){
    return view('signup');
});
Route::post('/signupUser',[UserController::class,'signup']);
// Route::get('/login/add',function(){
//     return view('add');
// })->name('login.add');
Route::post('/loginCheck',[UserController::class,'checkUser']);
Route::post('/logout',[UserController::class,'logout']);


// Route::put('/add',[])
// Route::get('/eps', function () {

//     return view('eps');
// })->name('eps');

// Route::prefix('same')->group(function(){

// });

// use Illuminate\Support\Facades\Route;
Route::get('/new',function(){
return view('new');
});
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
Route::post('/posts/{post}', [PostController::class, 'index'])->name('posts.index');
Route::any('{new}', function () {
    return view('new');
})->where('new', '1|2');

