<?php

Route::get("/", "AdminHomeController@dashboard");

// section routes
	Route::get("/add-section", "ClassSectionController@addSchoolSection")->name("addclasssection"); 
	Route::get("/list-sections", "ClassSectionController@listSchoolSections")->name("listclasssection");
	Route::post("/save-section", "ClassSectionController@saveClassSection")->name('savesection');
     Route::get("/list-sections-data", "ClassSectionController@listAllSections")->name('listallsection');
	Route::get("/add-class", "SchoolClassController@addSchoolClass")->name('addschoolclass');
	 Route::get("/list-classes", "SchoolClassController@listSchoolClasses")->name('listschoolclasses');
     Route::post("/save-class", "SchoolClassController@saveClassData")->name('saveclass');
     Route::get("/list-classes-data", "SchoolClassController@listAllClasses")->name('listallclasses');
     Route::get("/edit-class/{id?}", "SchoolClassController@editClassData")->name("editclassdata");
  

 // faculty routes
    Route::get("/add-faculty-type", "FacultyTypeController@addFacultyType")->name("addfacultyType");
    Route::get("/list-faculty-types", "FacultyTypeController@listFacultyTypes")->name("listfacultytypes");
    Route::get("/add-faculty", "FacultyController@addFaculty")->name("addfaculty");
    Route::get("/list-faculties", "FacultyController@listFaculties")->name("listfaculties");


 // student routes
    Route::get("/add-student", "StudentController@addStudent")->name("addstudent");
    Route::get("/list-students", "StudentController@listStudents")->name("liststudents");   


