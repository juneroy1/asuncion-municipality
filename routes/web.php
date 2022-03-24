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
Route::get('/view-head-office/{id}', 'OfficialsAdminController@viewOfficialHead');

// Route::get('/legislative', function () {
//     return view('legislative');
// });

Route::get('/archive', 'ArchiveController@showArchive');
Route::post('/archive-submit', 'ArchiveController@showArchiveSubmit');
Route::post('/archive-submit-department/{name}/{id}', 'OfficesController@goToOfficeSearch');

Route::get('/see-all-offices', 'OfficesController@list')->name('offices-list');

Route::get('/see-all-offices/{name}/{id}', 'OfficesController@goToOffice')->name('offices-name');

Route::get('/see-all-offices-legislative', 'OfficesController@listLegislative')->name('offices-list');
Route::get('/see-all-offices-legislative/{name}', 'OfficesController@goToOfficeLegislative')->name('offices-list');

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
Route::post('/admin-update/{id}', 'AdminController@store')->name('admin_update');
Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/admin-index/{department}', 'AdminController@indexAdmin')->name('indexAdmin');
Route::get('/admin-list', 'AdminController@list')->name('admin-list');
Route::get('/approve-list/{id}/{idPage}', 'AdminController@approve')->name('approve-admin-list');
Route::post('/remove-list/{id}/{idPage}', 'AdminController@remove')->name('remove-admin-list');
Route::get('/admin-remarks/{id}/{idPage}/{model}', 'AdminController@removePage')->name('remarks-admin-list');


// get announcements
Route::get('/admin-announcement', 'AnnouncementController@index')->name('admin-announcement');
Route::get('/admin-announcement-edit/{idPost}', 'AnnouncementController@index')->name('admin-announcement');
Route::post('/admin-announcement-update/{idPost}', 'AnnouncementController@store')->name('admin-announcement');
Route::get('/admin-announcement/{department}', 'AnnouncementController@indexAdmin')->name('admin-announcement');
Route::get('/admin-announcement-rd', 'AnnouncementController@indexAnnouncement')->name('admin-announcement-rd');

Route::post('/announcement', 'AnnouncementController@store')->name('announcement_create');
Route::get('/approve-announcement/{id}', 'AnnouncementController@approve')->name('announcement_create');
Route::post('/remove-announcement/{id}/{idPage}', 'AnnouncementController@remove')->name('announcement_create');
Route::get('/announcement-remarks/{id}', 'AdminController@removePage')->name('remarks-admin-list');

// members

Route::get('/admin-member', 'MemberController@index')->name('members');

Route::get('/admin-member-personnel', 'MemberController@indexPersonnel')->name('members-personnel');
Route::post('/admin-member-personnel', 'MemberController@createPersonnel')->name('createPersonnel');
Route::post('/admin-member-personnel-approve', 'MemberController@approvePersonnel')->name('approvePersonnel');
Route::get('/admin-member-personnel-disapprove-redirect', 'MemberController@disapprovePersonnelPage')->name('disapprovePersonnel');
Route::post('/admin-member-personnel-disapprove', 'MemberController@disapprovePersonnel')->name('disapprovePersonnel');
Route::get('/admin-member-personnel-edit/{id}', 'MemberController@editPersonnel')->name('editPersonnel');
Route::post('/admin-member-personnel-update/{idPost}', 'MemberController@createPersonnel')->name('updatePersonnel');

Route::get('/admin-member/{department}', 'MemberController@indexAdmin')->name('admin-announcement');
Route::post('/member', 'MemberController@store')->name('members_create');
Route::get('/approve-member/{id}', 'MemberController@approve')->name('approve-member');
Route::post('/remove-member/{id}/{idPage}', 'MemberController@remove')->name('remove-member');
Route::post('/update-member/{id}', 'MemberController@store')->name('remove-member');
Route::get('/edit-member/{id}', 'MemberController@editMember')->name('remove-member');


// officials admin
Route::get('/admin-officials', 'OfficialsAdminController@index')->name('members');
Route::post('/officials-admin', 'OfficialsAdminController@store')->name('members_create');
Route::post('/officials-admin-update/{id}', 'OfficialsAdminController@update')->name('members_create');
Route::get('/edit-officials/{id}', 'OfficialsAdminController@edit')->name('approve-member');
Route::get('/approve-officials/{id}', 'OfficialsAdminController@approve')->name('approve-member');
Route::get('/remove-officials/{id}', 'OfficialsAdminController@remove')->name('remove-member');


// officials archive admin
Route::get('/admin-officials-archive', 'ArchiveController@index')->name('officials-archive');
Route::get('/admin-officials-archive-edit/{id}', 'ArchiveController@index')->name('officials-archive');
Route::post('/officials-admin-archive', 'ArchiveController@store')->name('admin-archive_create');
Route::post('/officials-admin-archive-update/{id}', 'ArchiveController@store')->name('admin-archive_create');
Route::get('/admin-officials-archive/{department}', 'ArchiveController@indexOfficialAdmin')->name('department-archive');
Route::get('/approve-officials-archive/{id}', 'ArchiveController@approve')->name('approve-officials-archive');
Route::get('/remove-officials-archive/{id}', 'ArchiveController@remove')->name('remove-officials-archive');


// depatment archive admin
Route::get('/admin-department-archive', 'ArchiveController@indexDepartment')->name('department-archive');
Route::get('/admin-department-archive-edit/{id}', 'ArchiveController@indexDepartment')->name('department-archive');
Route::post('/admin-department-archive-update/{id}', 'ArchiveController@storeDepartment')->name('department-archive');
Route::get('/admin-department-archive/{department}', 'ArchiveController@indexDepartmentAdmin')->name('department-archive');
Route::post('/department-admin-archive', 'ArchiveController@storeDepartment')->name('department-archive_create');
Route::get('/approve-department-archive/{id}', 'ArchiveController@approveDepartment')->name('approve-department-archive');
Route::post('/remove-department-archive/{id}/{idPage}', 'ArchiveController@removeDepartment')->name('remove-department-archive');

// barangay officials admin
Route::get('/admin-barangay-officials', 'BarangayOfficialsController@index')->name('members');
Route::get('/admin-barangay-officials-edit/{idPost}', 'BarangayOfficialsController@index')->name('members');
Route::post('/admin-barangay-officials-update/{idPost}', 'BarangayOfficialsController@store')->name('members');
Route::get('/admin-barangay-officials/{department}', 'BarangayOfficialsController@indexAdmin')->name('members');
Route::post('/admin-barangay-officials-create', 'BarangayOfficialsController@store')->name('members_create');
Route::get('/approve-admin-barangay-officials/{id}', 'BarangayOfficialsController@approve')->name('approve-member');
Route::post('/remove-admin-barangay-officials/{id}/{idPage}', 'BarangayOfficialsController@remove')->name('remove-member');

// baranga list
Route::get('/admin-barangay', 'BarangayController@index')->name('barangay');
Route::get('/admin-barangay-edit/{idPost}', 'BarangayController@index')->name('barangay');
Route::post('/admin-barangay-update/{idPost}', 'BarangayController@store')->name('barangay');
Route::get('/admin-barangay/{department}', 'BarangayController@indexAdmin')->name('barangay');
Route::post('/admin-barangay', 'BarangayController@store')->name('barangay_create');
Route::get('/approve-admin-barangay/{id}', 'BarangayController@approve')->name('approve-barangay');
Route::post('/remove-admin-barangay/{id}/{idPage}', 'BarangayController@remove')->name('remove-barangay');


// contact # office list
Route::get('/contact-number-office', 'ContactNumberOfficeController@index')->name('contact-number-office');
Route::get('/contact-number-office-edit/{idPost}', 'ContactNumberOfficeController@index')->name('contact-number-office');
Route::post('/contact-number-office-update/{idPost}', 'ContactNumberOfficeController@store')->name('contact-number-office');
Route::get('/contact-number-office/{department}', 'ContactNumberOfficeController@indexAdmin')->name('contact-number-office');
Route::post('/contact-number-office-create', 'ContactNumberOfficeController@store')->name('contact-number-office-create');
Route::get('/approve-admin-contact-number/{id}', 'ContactNumberOfficeController@approve')->name('approve-contact-number-office');
Route::post('/remove-admin-contact-number/{id}/{idPage}', 'ContactNumberOfficeController@remove')->name('remove-contact-number-office');


// org chart list
Route::get('/org-chart-office', 'OrganizationalChartController@index')->name('org-chart-office');
Route::get('/org-chart-office-edit/{idPost}', 'OrganizationalChartController@index')->name('org-chart-office');
Route::post('/org-chart-office-update/{idPost}', 'OrganizationalChartController@store')->name('org-chart-office');
Route::get('/org-chart-office/{department}', 'OrganizationalChartController@indexAdmin')->name('org-chart-office');
Route::post('/org-chart-office-create', 'OrganizationalChartController@store')->name('org-chart-office-create');
Route::get('/approve-org-chart-office/{id}', 'OrganizationalChartController@approve')->name('approve-org-chart-office');
Route::post('/remove-org-chart-office/{id}/{idPage}', 'OrganizationalChartController@remove')->name('remove-org-chart-office');


// list of department
Route::get('/department-list', 'DepartmentAdminController@index')->name('department-list');
Route::get('/department-section', 'DepartmentAdminController@section')->name('department-section');
Route::get('/department-edit/{id}', 'DepartmentAdminController@edit')->name('department-list');
Route::post('/department-create', 'DepartmentAdminController@store')->name('org-chart-office-create');
Route::post('/department-update/{id}', 'DepartmentAdminController@update')->name('org-chart-office-create');
Route::get('/approve-department/{id}', 'DepartmentAdminController@approve')->name('approve-department');
Route::get('/remove-department/{id}', 'DepartmentAdminController@remove')->name('remove-department');

// list of national office
Route::get('/national-list', 'NationalOfficeController@index')->name('national-list');
Route::post('/national-create', 'NationalOfficeController@store')->name('national-create');
Route::get('/approve-national/{id}', 'NationalOfficeController@approve')->name('approve-national');
Route::get('/remove-national/{id}', 'NationalOfficeController@remove')->name('remove-national');

// head

Route::get('/admin-functionalities', 'DepartmentFunctionalityController@index')->name('functionalities');
Route::get('/admin-functionalities-edit/{idPost}', 'DepartmentFunctionalityController@index')->name('functionalities');
Route::post('/admin-functionalities-update/{idPost}', 'DepartmentFunctionalityController@store')->name('functionalities');
Route::get('/admin-functionalities/{department}', 'DepartmentFunctionalityController@indexAdmin')->name('functionalities');
Route::post('/functionalities', 'DepartmentFunctionalityController@store')->name('functionalities_create');
Route::get('/approve-functionalities/{id}', 'DepartmentFunctionalityController@approve')->name('approve-functionalities');
Route::post('/remove-functionalities/{id}/{idPage}', 'DepartmentFunctionalityController@remove')->name('remove-functionalities');

// landing images

Route::get('/admin-landingImage', 'LandingImageController@index')->name('landing-image');
Route::get('/admin-landingImage-edit/{id}', 'LandingImageController@index')->name('landing-image');
Route::post('/admin-landingImage-update/{id}', 'LandingImageController@store')->name('landing-image');
Route::get('/admin-landingImage/{department}', 'LandingImageController@indexAdmin')->name('landing-image');
Route::get('/admin-landingImage-rd', 'LandingImageController@indexRd')->name('landing-image-rd');
Route::post('/landingImage', 'LandingImageController@store')->name('landing-image-create');
Route::get('/approve-landingImage/{id}', 'LandingImageController@approve')->name('approve-landingImage');
Route::get('/landingImage-view/{id}', 'LandingImageController@viewLandingImage')->name('view.landingImage');
Route::post('/remove-landingImage/{id}/{idPage}', 'LandingImageController@remove')->name('remove-landingImage');


Route::get('/emergencyHotlines', 'EmergencyHotlineController@index')->name('emergency-Hotlines');
Route::get('/emergencyHotlines-edit/{id}', 'EmergencyHotlineController@index')->name('emergency-Hotlines');
Route::post('/emergencyHotlines-update/{id}', 'EmergencyHotlineController@store')->name('emergency-Hotlines');
Route::get('/emergencyHotlines/{department}', 'EmergencyHotlineController@indexAdmin')->name('emergency-Hotlines');
Route::post('/emergencyHotlines-submit', 'EmergencyHotlineController@store')->name('emergency-Hotlines-create');
Route::get('/approve-emergencyHotlines/{id}', 'EmergencyHotlineController@approve')->name('approve-emergency-Hotlines');
Route::post('/remove-emergencyHotlines/{id}/{idPage}', 'EmergencyHotlineController@remove')->name('remove-emergency-Hotlines');
