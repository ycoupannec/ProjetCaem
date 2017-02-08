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

Route::get('/', function () {
    return view('welcome');
});

// Admin Interface Routes
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function()
{
  // Backpack\CRUD: Define the resources for the entities you want to CRUD.
    CRUD::resource('tag', 'Admin\TagCrudController');
    CRUD::resource('city', 'Admin\CityCrudController');
    CRUD::resource('district', 'Admin\DistrictCrudController');
    CRUD::resource('person', 'Admin\PersonCrudController');
    CRUD::resource('person_person', 'Admin\Person_personCrudController');
    CRUD::resource('familly', 'Admin\FamillyCrudController');
    CRUD::resource('formula', 'Admin\FormulaCrudController');
    CRUD::resource('formula_activity', 'Admin\Formula_activityCrudController');
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
    CRUD::resource('payments_detail', 'Admin\Payments_detailCrudController');
    CRUD::resource('people_instrument', 'Admin\People_instrumentCrudController');
  
  
  // [...] other routes
});

// Admin Interface Routes
// Route::group(['prefix' => 'admin', 'middleware' => 'admin', 'namespace' => 'Admin'], function()
// {
//   // Backpack\CRUD: Define the resources for the entities you want to CRUD.
    
//   // [...] other routes
// });