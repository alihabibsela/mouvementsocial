<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@Index');
Route::get('/about', 'HomeController@About');
Route::get('/founders', 'HomeController@Founders');
Route::get('/founders-details/{name}', 'HomeController@FoundersDetails');

Route::get('/values', 'HomeController@Mission');
Route::get('/history', 'HomeController@History');
Route::post('/lng', 'HomeController@lng');

Route::get('/careers', 'CareersController@Index');
Route::get('/call-details/{name}', 'CallsController@CallDetails');
Route::get('/career-details/{name}', 'CareersController@CareerDetails');

//data
Route::get('/calls', 'CallsController@Index');
Route::get('/call-data', 'CallsController@Data');
Route::get('/careers-data', 'CareersController@Data');

Route::get('/contact', 'ContactController@Index');
Route::get('/centers', 'ContactController@Centers');
Route::get('/centers/{name}', 'ContactController@CentersDetails');
Route::post('/ContactUs/Submit', 'ContactController@ContactUsSubmit');
Route::post('/newsletter/submit', 'ContactController@NewsletterSubmit');

Route::get('/AnnualReport', 'FinanceController@Index');
Route::get('/team', 'TeamController@Index');
Route::get('/team-details/{name}', 'TeamController@Details');

Route::get('/media', 'NewsController@Index');
Route::get('/news-details/{name}', 'NewsController@Details');

Route::get('/programs/{id}', 'ProgramsController@Index');
Route::get('/programs/data', 'ProgramsController@programsData');
Route::get('/programs-details/{name}', 'ProgramsController@Details');
Route::get('/programs-details-Home/{name}', 'ProgramsController@DetailsHome');

Route::get('/publications', 'PublicationsController@landing');
Route::get('/publications/{id}', 'PublicationsController@Index');
Route::get('/publication-details/{name}', 'PublicationsController@Details');

Route::get('/testimonials', 'TestimonialsController@Index');

Route::get('/volunteer', 'VolunteerController@Index');
Route::post('/Volunteer/Submit', 'VolunteerController@VolunteerSubmit');

Route::get('/donate', 'DonateController@Index');

