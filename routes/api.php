<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::Resource('subjects','SubjectController');
Route::Resource('instructordetails','InstructorDetailController');
Route::Resource('chapters','ChapterController');
Route::resource('LevelOfEducations','LevelOfEducationController');
<<<<<<< HEAD
Route::Resource('learningMaterial','LearningMaterialController');
=======
Route::Resource('learningMaterialType','LearningMaterialTypeController');
Route::Resource('learningMaterials','LearningMaterialController');
Route::Resource('instructorDetails','InstructorDetailController');
>>>>>>> 7969a0057c7fc143345cafde1de58a402b7743fc
