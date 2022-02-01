<?php

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


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/admin', function () {
//     return view('admin.index');  
// });

// Route::get('/admin/list', function () {
//     return view('admin.list');
// });
Route::get('/', 'OfficesController@welcome')->name('welcome');
Route::get('/officials-view', 'OfficialsAdminController@showAllOfficials');
Route::get('/legislative', 'OfficialsAdminController@showAllLegislative');
Route::get('/view-official/{type}/{id}', 'OfficialsAdminController@viewOfficial');

// Route::get('/legislative', function () {
//     return view('legislative');
// });

Route::get('/archive', 'ArchiveController@showArchive');
Route::post('/archive-submit', 'ArchiveController@showArchiveSubmit');
Route::post('/archive-submit-department/{name}', 'OfficesController@goToOfficeSearch');

Route::get('/see-all-offices', 'OfficesController@list')->name('offices-list');
Route::get('/see-all-offices/{name}', 'OfficesController@goToOffice')->name('offices-name');

// Route::get('/see-all-offices', function () {
//     return view('offices.seeAllOffices');
// });

// Route::get('/see-all-projects', function () {
//     return view('projects.seeAllProjects');
// });

Route::get('/see-all-projects', 'OfficesController@seeProjects')->name('offices-list');

Route::get('/vision', function () {
    return view('vision');
});

Route::get('/historical', function () {
    return view('historical');
});

Route::get('/executive', function () {
    return view('executive');
});

Route::get('/mission', function () {
    return view('mission');
});

Route::get('/mayorsOffice', function () {
    return view('offices.mayorsOffices');
});



Route::get('/mado', function () {
    return view('offices.mado.mado');
});


Route::get('/MHRMO', function () {
    return view('offices.MHRMO.mhrmo');
});


Route::get('/OIC-MPDC', function () {
    return view('offices.OIC-MPDC.mpdc');
});


Route::get('/LDRRMO', function () {
    return view('offices.LDRRMO.ldrrmo');
});

Route::get('/mgso', function () {
    return view('offices.MGSO.mgso');
});


Route::get('/MBO', function () {
    return view('offices.MBO.mbo');
});

Route::get('/macco', function () {
    return view('offices.MACCO.macco');
});

Route::get('/mtof', function () {
    return view('offices.MTOF.mtof');
});

Route::get('/mswdo', function () {
    return view('offices.MSWDO.mswdo');
});


Route::get('/mao', function () {
    return view('offices.MAO.mao');
});

Route::get('/meo', function () {
    return view('offices.MEO.meo');
});

Route::get('/mcr', function () {
    return view('offices.MCR.mcr');
});

Route::get('/masso', function () {
    return view('offices.MASSO.masso');
});

Route::get('/meedmo', function () {
    return view('offices.MEEDMO.meedmo');
});

Route::get('/peso', function () {
    return view('offices.PESO.peso');
});

Route::get('/ABE-FAP', function () {
    return view('offices.ABE-FAP.abe_fap');
});

Route::get('/mnao', function () {
    return view('offices.MNAO.mnao');
});

Route::get('/meppio', function () {
    return view('offices.MEPPIO.meppio');
});

Route::get('/AMUNTRICO', function () {
    return view('offices.AMUNTRICO.amuntrico');
});


Route::get('/tourism', function () {
    return view('offices.TOURISM.tourism');
});


Route::get('/pcic', function () {
    return view('offices.PCIC.pcic');
});

Route::get('/healthOffice', function () {
    return view('offices.OIC MHO.healthOffice');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/admin', 'AdminController@store')->name('admin_create');
Route::get('/admin-edit/{id}', 'AdminController@edit')->name('admin_edit');
Route::post('/admin-update/{id}', 'AdminController@update')->name('admin_update');
Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/admin-list', 'AdminController@list')->name('admin-list');
Route::get('/approve-list/{id}', 'AdminController@approve')->name('approve-admin-list');
Route::post('/remove-list/{id}', 'AdminController@remove')->name('remove-admin-list');
Route::get('/admin-remarks/{id}', 'AdminController@removePage')->name('remarks-admin-list');


// get announcements
Route::get('/admin-announcement', 'AnnouncementController@index')->name('admin-announcement');
Route::post('/announcement', 'AnnouncementController@store')->name('announcement_create');
Route::get('/approve-announcement/{id}', 'AnnouncementController@approve')->name('announcement_create');
Route::get('/remove-announcement/{id}', 'AnnouncementController@remove')->name('announcement_create');
Route::get('/announcement-remarks/{id}', 'AdminController@removePage')->name('remarks-admin-list');

// members

Route::get('/admin-member', 'MemberController@index')->name('members');
Route::post('/member', 'MemberController@store')->name('members_create');
Route::get('/approve-member/{id}', 'MemberController@approve')->name('approve-member');
Route::get('/remove-member/{id}', 'MemberController@remove')->name('remove-member');


// officials admin
Route::get('/admin-officials', 'OfficialsAdminController@index')->name('members');
Route::post('/officials-admin', 'OfficialsAdminController@store')->name('members_create');
Route::get('/approve-officials/{id}', 'OfficialsAdminController@approve')->name('approve-member');
Route::get('/remove-officials/{id}', 'OfficialsAdminController@remove')->name('remove-member');


// officials archive admin
Route::get('/admin-officials-archive', 'ArchiveController@index')->name('officials-archive');
Route::post('/officials-admin-archive', 'ArchiveController@store')->name('admin-archive_create');
Route::get('/approve-officials-archive/{id}', 'ArchiveController@approve')->name('approve-officials-archive');
Route::get('/remove-officials-archive/{id}', 'ArchiveController@remove')->name('remove-officials-archive');


// depatment archive admin
Route::get('/admin-department-archive', 'ArchiveController@indexDepartment')->name('department-archive');
Route::post('/department-admin-archive', 'ArchiveController@storeDepartment')->name('department-archive_create');
Route::get('/approve-department-archive/{id}', 'ArchiveController@approveDepartment')->name('approve-department-archive');
Route::get('/remove-department-archive/{id}', 'ArchiveController@removeDepartment')->name('remove-department-archive');

// barangay officials admin
Route::get('/admin-barangay-officials', 'BarangayOfficialsController@index')->name('members');
Route::post('/admin-barangay-officials-create', 'BarangayOfficialsController@store')->name('members_create');
Route::get('/approve-admin-barangay-officials/{id}', 'BarangayOfficialsController@approve')->name('approve-member');
Route::get('/remove-admin-barangay-officials/{id}', 'BarangayOfficialsController@remove')->name('remove-member');

// baranga list
Route::get('/admin-barangay', 'BarangayController@index')->name('barangay');
Route::post('/admin-barangay', 'BarangayController@store')->name('barangay_create');
Route::get('/approve-admin-barangay/{id}', 'BarangayController@approve')->name('approve-barangay');
Route::get('/remove-admin-barangay/{id}', 'BarangayController@remove')->name('remove-barangay');


// contact # office list
Route::get('/contact-number-office', 'ContactNumberOfficeController@index')->name('contact-number-office');
Route::post('/contact-number-office-create', 'ContactNumberOfficeController@store')->name('contact-number-office-create');
Route::get('/approve-admin-barangay/{id}', 'ContactNumberOfficeController@approve')->name('approve-contact-number-office');
Route::get('/remove-admin-barangay/{id}', 'ContactNumberOfficeController@remove')->name('remove-contact-number-office');


// org chart list
Route::get('/org-chart-office', 'OrganizationalChartController@index')->name('org-chart-office');
Route::post('/org-chart-office-create', 'OrganizationalChartController@store')->name('org-chart-office-create');
Route::get('/approve-org-chart-office/{id}', 'OrganizationalChartController@approve')->name('approve-org-chart-office');
Route::get('/remove-org-chart-office/{id}', 'OrganizationalChartController@remove')->name('remove-org-chart-office');


// list of department
Route::get('/department-list', 'DepartmentAdminController@index')->name('department-list');
Route::post('/department-create', 'DepartmentAdminController@store')->name('org-chart-office-create');
Route::get('/approve-department/{id}', 'DepartmentAdminController@approve')->name('approve-department');
Route::get('/remove-department/{id}', 'DepartmentAdminController@remove')->name('remove-department');

// list of national office
Route::get('/national-list', 'NationalOfficeController@index')->name('national-list');
Route::post('/national-create', 'NationalOfficeController@store')->name('national-create');
Route::get('/approve-national/{id}', 'NationalOfficeController@approve')->name('approve-national');
Route::get('/remove-national/{id}', 'NationalOfficeController@remove')->name('remove-national');

// head

Route::get('/admin-functionalities', 'DepartmentFunctionalityController@index')->name('functionalities');
Route::post('/functionalities', 'DepartmentFunctionalityController@store')->name('functionalities_create');
Route::get('/approve-functionalities/{id}', 'DepartmentFunctionalityController@approve')->name('approve-functionalities');
Route::get('/remove-functionalities/{id}', 'DepartmentFunctionalityController@remove')->name('remove-functionalities');

// landing images

Route::get('/admin-landingImage', 'LandingImageController@index')->name('landing-image');
Route::post('/landingImage', 'LandingImageController@store')->name('landing-image-create');
Route::get('/approve-landingImage/{id}', 'LandingImageController@approve')->name('approve-landingImage');
Route::get('/remove-landingImage/{id}', 'LandingImageController@remove')->name('remove-landingImage');


Route::get('/emergencyHotlines', 'EmergencyHotlineController@index')->name('emergency-Hotlines');
Route::post('/emergencyHotlines-submit', 'EmergencyHotlineController@store')->name('emergency-Hotlines-create');
Route::get('/approve-emergencyHotlines/{id}', 'EmergencyHotlineController@approve')->name('approve-emergency-Hotlines');
Route::get('/remove-emergencyHotlines/{id}', 'EmergencyHotlineController@remove')->name('remove-emergency-Hotlines');