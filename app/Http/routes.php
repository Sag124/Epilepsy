<?php

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::group(['middleware' => 'web'], function () {
	Route::get('analytics', 'AnalyticsController@analytics')->name('analytics');
	Route::get('data', 'AnalyticsController@data')->name('data');
	Route::resource('screen1','DataController');
	Route::resource('screen2','DataController1');
	Route::resource('screen3','TreatmentController');
	Route::resource('screen4','ExerciseController');
	Route::resource('screen5','NutritionController');
	Route::resource('screen6','LivingController');
	Route::resource('screen7','FAQController');
});

Route::group(['prefix' => 'api/v1', 'middleware' => 'api'], function() {
	Route::post('epi_analytics', 'AnalyticsController@count');
	Route::post('auth/register', 'AnalyticsController@register');
	Route::get('what-is-epi', 'LessonController@screen1')->name('screen1_api');
	Route::get('signs-of-epi', 'LessonController@screen2')->name('screen2_api');
	Route::get('treatment','LessonController@treatment')->name('screen3_api');
	Route::get('exercise-in-epilepsy','LessonController@exercise')->name('screen4_api');
	Route::get('nutrition','LessonController@nutrition')->name('screen5_api');
	Route::get('living-with-epilepsy','LessonController@living')->name('screen6_api');
	Route::get('faq','LessonController@faq')->name('screen7_api');
});