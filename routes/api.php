<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\CourseController;
use App\Http\Controllers\Api\LessonController;
use App\Http\Controllers\Api\ProgressController;
use App\Http\Controllers\Api\QuizController;
use App\Http\Controllers\Api\HomeController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });




  Route::post('/login', [AuthController::class, 'login']);
Route::middleware('auth:sanctum')->group(function () {

  
    Route::put('/change-password',[UserController::class,'changePassword']);
    Route::post('/logout', [AuthController::class, 'logout']);

     // Profile
    Route::get('/profile', [UserController::class, 'profile']);
    Route::put('/profile', [UserController::class, 'update']);

    // Courses
    Route::get('/courses', [CourseController::class, 'index']);
    Route::get('/courses/{slug}', [CourseController::class, 'show']);
    Route::get('/continue-learning', [CourseController::class, 'continueLearning']);
    Route::get('/search', [CourseController::class, 'search']);

    // Lessons
    Route::get('/courses/{id}/lessons', [LessonController::class, 'lessons']);
    Route::get('/lessons/{id}', [LessonController::class, 'show']);

     // Progress
    Route::post('/lesson/complete', [ProgressController::class, 'complete']);
    Route::get('/progress', [ProgressController::class, 'progress']);
    Route::get('/courses/{slug}/lessons', [LessonController::class, 'lessonsBySlug']);

    // Quiz
    Route::get('/lessons/{id}/quiz', [QuizController::class, 'quiz']);
    Route::post('/quiz/submit',[QuizController::class,'submit']);
    

    //Home
    Route::get('/home', [HomeController::class, 'index']);
    

});
