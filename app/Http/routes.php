<?php

/*---------------------------DEPARTMENTS-----------------------------------------*/
//Root Directory
Route::get('/','Bubt@login');

//Login
Route::get('/login','Bubt@login');

//Login Verification
Route::post('/login','Bubt@loginVerification');

//Logout
Route::get('/logout','Bubt@logout');

//Dashboard
Route::get('/dashboard','Bubt@dashboard');
/*---------------------------DEPARTMENTS-----------------------------------------*/



/*---------------------------DEPARTMENTS-----------------------------------------*/
//Department
Route::get('/departments','Bubt@departments');

//Department Add
Route::get('/department/add','Bubt@departmentsAdd');
/*---------------------------DEPARTMENTS-----------------------------------------*/




















/*














//See All patients
Route::get('/patients','Bubt@allPatient');
Route::get('/patients/{id}','Bubt@allPatient');



//Search Patient
Route::get('/search-patient','Bubt@searchPatient');
Route::post('/search-patient','Bubt@searchPatientInfo');


//Add patients
Route::get('/create','Bubt@create');
Route::post('/create','Bubt@store');

//Show and delete patient
Route::get('/patient/{id}','Bubt@showPatient');
Route::get('/patient/{id}/delete', 'Bubt@destroy');


//Approve patients
Route::get('/patient/{id}/approve', 'Bubt@approve');

//Request to Administrator for approve
Route::get('/{id}/{userType}/request/{orderType}', 'Bubt@approveOrder');

//Update basic information
Route::post('/update/{id}','Bubt@update');
Route::get('patient/{id}/edit', 'Bubt@edit');



//Update medical-examinations information
Route::post('/update-medical-examinations/{id}','Bubt@updateMedicalExaminations');
Route::get('/{id}/edit-medical-examinations', 'Bubt@editMedicalExaminations');


//Update laboratory investigations information
Route::post('/update-laboratory-investigations/{id}','Bubt@updateLaboratoryInvestigations');
Route::get('/{id}/edit-laboratory-investigations', 'Bubt@editLaboratoryInvestigations');



//Update laboratory investigations information
Route::post('/update-radiology/{id}','Bubt@updateRadiology');
Route::get('/{id}/edit-radiology', 'Bubt@editRadiology');




//Print
Route::get('/{id}/{back}/print','Bubt@printPatient');


//User
Route::get('/user/{id}/', 'Bubt@user');


//Fit/Unfit for search a approve patient and print front and back page
Route::get('/fitUnfit', 'Bubt@fitUnfit');
Route::post('/fitUnfit', 'Bubt@fitUnfitinfo');


//test
Route::get('/test', 'Bubt@test');



Route::get('/miru', 'Bubt@miru');


    