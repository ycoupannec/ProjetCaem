<?php



// Website Routes
Route::get('/', 'PagesController@index');
Route::get('parcours', 'PagesController@course');
Route::get('tarifs', 'PagesController@prices');
Route::get('evenements', 'PagesController@events')->name('events');
Route::get('evenement/{event}', 'PagesController@event')->name('event');
Route::get('equipe', 'PagesController@team');
Route::get('association', 'PagesController@association');
Route::get('credits', 'PagesController@credits');
Route::get('mentions_legales', 'PagesController@legacy_mention');
Route::get('contact', 'PagesController@contact');

// Admin Interface Routes
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function()
{
    CRUD::resource('city', 'Admin\CityCrudController');
    CRUD::resource('district', 'Admin\DistrictCrudController');
    CRUD::resource('person', 'Admin\PersonCrudController');
    CRUD::resource('person_person', 'Admin\Person_personCrudController');
    CRUD::resource('familly', 'Admin\FamillyCrudController');
    CRUD::resource('instrument', 'Admin\InstrumentCrudController');
    CRUD::resource('location', 'Admin\LocationCrudController');
    CRUD::resource('membership', 'Admin\MembershipCrudController');
    CRUD::resource('member_activity', 'Admin\Member_activityCrudController');
    CRUD::resource('payment', 'Admin\PaymentCrudController');
    CRUD::resource('payments_person', 'Admin\Payments_personCrudController');
    CRUD::resource('people_types_person', 'Admin\People_types_personCrudController');
    CRUD::resource('plm_activity', 'Admin\Plm_activityCrudController');
    CRUD::resource('plm_activities_person', 'Admin\Plm_activities_personCrudController');
    CRUD::resource('produit', 'Admin\ProduitCrudController');
    CRUD::resource('teachers_activity', 'Admin\Teachers_activityCrudController');
    CRUD::resource('types_activity', 'Admin\Types_activityCrudController');
    CRUD::resource('type_payment', 'Admin\Type_paymentCrudController');
    CRUD::resource('type_person', 'Admin\Type_personCrudController');
    CRUD::resource('activity', 'Admin\ActivityCrudController');
    CRUD::resource('activity_web', 'Admin\Activity_webCrudController');
    CRUD::resource('payments_detail', 'Admin\Payments_detailCrudController');
    CRUD::resource('people_instrument', 'Admin\People_instrumentCrudController');
    CRUD::resource('article', 'Admin\ArticleCrudController');
    CRUD::resource('category', 'Admin\CategoryCrudController');
    CRUD::resource('alert', 'Admin\AlertCrudController');
    CRUD::resource('team', 'Admin\TeamCrudController');
    Route::get('extract', 'Admin\ExtractController@index');
    Route::get('export', 'Admin\ExtractController@export');

});
