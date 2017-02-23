<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;


use App\Http\Requests\PersonRequest as StoreRequest;
use App\Http\Requests\PersonRequest as UpdateRequest;

class PersonCrudController extends CrudController
{

    public function setUp()
    {

        $this->crud->setModel("App\Models\Person");
        $this->crud->setRoute("admin/person");
        $this->crud->setEntityNameStrings('Personne', 'Personnes');


        $this->crud->setFromDb();


        $this->crud->addField([
            'name'  => 'gender', 
            'label' => 'Civilité', 
            'type'  => 'select_from_array',
            'options' => ['Mr' => 'Mr', 'Mme' => 'Mme'],
            'allows_null' => false,
            ]);

        $this->crud->addField([
            'name'  => 'name', 
            'label' => 'Prénom', 
            'type'  => 'text'
            ]);

        

        $this->crud->addField([
            'name'  => 'family_name',
            'label' => 'Nom de famille', 
            'type'  => 'text'
            ]);

        $this->crud->addField([
            'name'  => 'mail', 
            'label' => 'Email', 
            'type'  => 'email'
            ]);

        $this->crud->addField([
            'name'  => 'tel_fix', 
            'label' => 'Tel. fix', 
            'type'  => 'text'
            ]);

        $this->crud->addField([
            'name'  => 'tel_mob', 
            'label' => 'Tel. mobile', 
            'type'  => 'text'
            ]);

        $this->crud->addField([
            'name'  => 'postal_code', 
            'label' => 'Code postal', 
            'type'  => 'number'
            ]);

        $this->crud->addField([
            'name'  => 'adress', 
            'label' => 'Adresse', 
            'type'  => 'text'
            ]);

        $this->crud->addField([
            'name'  => 'birthday', 
            'label' => 'Date de naissance', 
            'type' => 'datetime_picker',

            'datetime_picker_options' => [
                                            'format' => 'DD/MM/YYYY',
                                            'language' => 'fr']
            ]);

        $this->crud->addField([
            'name'  => 'observation',
            'label' => 'Observation', 
            'type'  => 'textarea'
            ]);

        $this->crud->addField([
            'name'  => 'code_analytique', 
            'label' => 'code_analytique',
            'type'  => 'textarea'
            ]);
        
        $this->crud->addField([
            'name'  => 'image_right',
            'label' => 'Droit à l\'image', 
            'type'  => 'select_from_array',
            'options' => ['Oui' => 'Oui', 'Non' => 'Non'],
            'allows_null' => false,
            ]);


        $this->crud->addField(
           
           [ 
            'label' => "Ville",
            'type' => 'select',
            'name' => 'city_id',
            'entity' => 'city', 
            'attribute' => 'name', 
            'model' => "App\Models\City" 
            ]);


        $this->crud->addField(
           
           [  
            'label' => "Quartier",
            'type' => 'select',
            'name' => 'district_id', 
            'entity' => 'district', 
            'attribute' => 'name', 
            'model' => "App\Models\District" 
            ]);

        $this->crud->addField(
           
           [  
            'label' => "Types",
            'type' => 'select2_multiple',
            'name' => 'type_people', 
            'entity' => 'type_people', 
            'attribute' => 'name', 
            'model' => "App\Models\Type_person", 
            'pivot' => true
            ]);

       
        
        

        $this->crud->addField(
           
           [  
            'label' => "Activités",
            'type' => 'select2_multiple',
            'name' => 'people_activities', 
            'entity' => 'people_activities', 
            'attribute' => 'name', 
            'model' => "App\Models\Activity", 
            'pivot' => true
            ]);

       
        

        $this->crud->addField([
            'name'  => 'code_analytique', 
            'label' => 'Code analytique', 
            'type'  => 'textarea'
            ]);


         $this->crud->addField([
            'name'  => 'status',
            'label' => 'statut', 
            'type'  => 'select_from_array',
            'options' => ['actif' => 'actif', 'inactif' => 'inactif'],
            'allows_null' => false,
            ]);
  
        


         
        $this->crud->setColumnDetails('gender',
            [
             'name'  => 'gender',
            'label' => 'Civilité', 
            'type'  => 'select_from_array',
            'options' => ['Mr' => 'Mr', 'Mme' => 'Mme'],
            'allows_null' => false,
          
           ]
        );

        $this->crud->setColumnDetails('status',
            [
            'name'  => 'status',
            'label' => 'statut', 
            'type'  => 'select_from_array',
            'options' => ['actif' => 'actif', 'inactif' => 'inactif'],
            'allows_null' => false,
           ]
        );


        $this->crud->setColumnDetails('name',
            [
            'name'  => 'name', 
            'label' => 'Prénom', 
           ]
        );
        
        $this->crud->setColumnDetails('family_name',
            [
            'name'  => 'family_name', 
            'label' => 'Nom de famille', 
           ]
        );

        $this->crud->addColumn('rattache');

        $this->crud->setColumnsDetails(['rattache'],
            [
            'label' => 'Responsable légal', 
            'type' => 'select_multiple',
            'name' => 'people_people', 
            'entity' => 'people_people', 
            'attribute' => 'fullname', 
            'model' => "App\Models\Person", 

            ]
        );

        $this->crud->setColumnDetails('mail',
            [
            'name'  => 'mail', 
            'label' => 'Email', 
           ]
        );

        $this->crud->setColumnDetails('tel_fix',
            [
            'name'  => 'tel_fix', 
            'label' => 'Tel. fix',
           ]
        );

        $this->crud->setColumnDetails('tel_mob',
            [
            'name'  => 'tel_mob', 
            'label' => 'Tel. mobile', 
           ]
        );

<<<<<<< HEAD
        // $this->crud->setColumnDetails('postal_code',
        //     [
        //     'name'  => 'postal_code', // DB column name (will also be the name of the input)
        //     'label' => 'Code postal', // the human-readable label for the input
        //    ]
        // );

        // $this->crud->setColumnDetails('adress',
        //     [
        //     'name'  => 'adress', // DB column name (will also be the name of the input)
        //     'label' => 'Adresse', // the human-readable label for the input
        //    ]
        // );

        // $this->crud->setColumnDetails('birthday',
        //     [
        //     'name'  => 'birthday', // DB column name (will also be the name of the input)
        //     'label' => 'Date de naissance', // the human-readable label for the input
        //    ]
        // );

        // $this->crud->setColumnDetails('observation',
        //     [
        //     'name'  => 'observation', // DB column name (will also be the name of the input)
        //     'label' => 'Observation', // the human-readable label for the input
        //    ]
        // );

        // $this->crud->setColumnDetails('code_analytique',
        //     [
        //     'name'  => 'code_analytique', // DB column name (will also be the name of the input)
        //     'label' => 'code_analytique', // the human-readable label for the input
        //    ]
        // );

       // $this->crud->setColumnDetails('image_right',
       //      [
       //       'name'  => 'image_right', // DB column name (will also be the name of the input)
       //      'label' => 'Droit à l\'image', // the human-readable label for the input
       //      'type'  => 'select_from_array',
       //      'options' => ['Oui' => 'Oui', 'Non' => 'Non'],
       //      'allows_null' => false,
          
       //     ]
       //  );


       //  $this->crud->setColumnsDetails(['city_id'],
       //      [
       //      'label' => 'Ville', // Table column heading
       //      'type' => 'select',
       //      'name' => 'city_id', // the column that contains the ID of that connected entity;
       //      'entity' => 'city', // the method that defines the relationship in your Model
       //      'attribute' => 'name', // foreign key attribute that is shown to user
       //      'model' => "App\Models\City", // foreign key model
       //      ]
       //  );

       //  $this->crud->setColumnsDetails(['district_id'],
       //      [
       //      'label' => 'Quartier', // Table column heading
       //      'type' => 'select',
       //      'name' => 'district_id', // the column that contains the ID of that connected entity;
       //      'entity' => 'district', // the method that defines the relationship in your Model
       //      'attribute' => 'name', // foreign key attribute that is shown to user
       //      'model' => "App\Models\district", // foreign key model
       //      ]
       //  );

       


// -------------------------------------------------------------------
=======
    
>>>>>>> bb658f969e1bad3d6c88e8512ecdfdf4d86e8113

        $this->crud->addField(
           
           [  
            'label' => "Responsable légal",
            'type' => 'select2_multiple',
<<<<<<< HEAD
            'name' => 'people_people', // the db column for the foreign key
            'entity' => 'people_people', // the method that defines the relationship in your Model
            'attribute' => 'fullname', // foreign key attribute that is shown to user
            'model' => "App\Models\Person", // foreign key model
            'pivot' => true
            ]);



        $this->crud->addField(
           
           [  // Select
            'label' => "Types",
            'type' => 'select2_multiple',
            'name' => 'type_people', // the db column for the foreign key
            'entity' => 'type_people', // the method that defines the relationship in your Model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'model' => "App\Models\Type_person", // foreign key model
            'pivot' => true
            ]);

        // $this->crud->addColumn('type');

        // $this->crud->setColumnsDetails(['type'],
        //     [
        //     'label' => 'Types', // Table column heading
        //     'type' => 'select_multiple',
        //     'name' => 'type_people', // the column that contains the ID of that connected entity;
        //     'entity' => 'type_people', // the method that defines the relationship in your Model
        //     'attribute' => 'name', // foreign key attribute that is shown to user
        //     'model' => "App\Models\Type_person", // foreign key model

        //     ]
        // );
        
        

            $this->crud->addField(
           
           [  // Select
            'label' => "Activités",
            'type' => 'select2_multiple',
            'name' => 'people_activities', // the db column for the foreign key
            'entity' => 'people_activities', // the method that defines the relationship in your Model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'model' => "App\Models\Activity", // foreign key model
            'pivot' => true
            ]);

        // $this->crud->addColumn('instruments');

        // $this->crud->setColumnsDetails(['instruments'],
        //     [
        //     'label' => 'Instruments', // Table column heading
        //     'type' => 'select_multiple',
        //     'name' => 'people_instruments', // the column that contains the ID of that connected entity;
        //     'entity' => 'people_instruments', // the method that defines the relationship in your Model
        //     'attribute' => 'name', // foreign key attribute that is shown to user
        //     'model' => "App\Models\Instrument", // foreign key model

        //     ]
        // );

        // $this->crud->addColumn('year_old');

        // $this->crud->setColumnsDetails(['year_old'],
        //     [
        //        'name'  => 'year_old',
        //     'label' => 'Age',
        //     'type' => 'model_function',
        //     'function_name' => 'getyearsold',
        // ]
        // );
=======
            'name' => 'people_people', 
            'entity' => 'people_people', 
            'attribute' => 'fullname', 
            'model' => "App\Models\Person", 
            'pivot' => true
            ]);

>>>>>>> bb658f969e1bad3d6c88e8512ecdfdf4d86e8113
        
        $this->crud->setColumnDetails('code_analytique',
            [
<<<<<<< HEAD
            'name'  => 'code_analytique', // DB column name (will also be the name of the input)
            'label' => 'Code analytique', // the human-readable label for the input
=======
            'name'  => 'code_analytique', 
            'label' => 'Code analytique', 
>>>>>>> bb658f969e1bad3d6c88e8512ecdfdf4d86e8113
           ]
        );

        $this->crud->removeColumns(['year_old', 'postal_code','birthday','adress', 'observation', 'city_id', 'district_id', 'image_right', 'code_analytique', 'types']);


      
        $this->crud->enableDetailsRow();
<<<<<<< HEAD
        // NOTE: you also need to do allow access to the right users:
=======

>>>>>>> bb658f969e1bad3d6c88e8512ecdfdf4d86e8113
        $this->crud->allowAccess('details_row');
      
        $this->crud->enableAjaxTable();

        $this->crud->enableExportButtons();
        
    }

	public function store(StoreRequest $request)
	{

        $redirect_location = parent::storeCrud();

        return $redirect_location;
	}

	public function update(UpdateRequest $request)
	{

        $redirect_location = parent::updateCrud();

        return $redirect_location;
	}



     public function showDetailsRow($id)
    {
        $this->crud->hasAccessOrFail('details_row');

        // $this->data['entry'] = $this->crud->getEntry($id);
        // $this->data['crud'] = $this->crud;
           // \DB::connection()->enableQueryLog();

        // $types = \App\Models\People_types_person::with('type_person')->where('person_id','=',$id)->get();
        $data = \App\Models\Person::with('type_people')

                                    ->with('city')
                                    ->with('people_people')
                                    ->with('district')
                                    ->with('membership')
                                    ->with('people_activities')
                                    ->find($id);
        // print_r($data['people_activities']);
        foreach($data['people_activities'] as $key => $value){
            // print_r($value['id']);
            // print_r(\App\Models\Activity::with('teachers_activities')->find($value['id']));
            $teacher = \App\Models\Activity::with('teachers_activities')->find($value['id']);
            //print_r($teacher['teachers_activities']);
             $data['teachers_'.$value['id']]= $teacher['teachers_activities'];

            // exit;
        }
        // print_r($data);

           // dd(\DB::getQueryLog());
        // $instruments = \App\Models\People_instrument::with('people_instruments')->find($id);
        // $city = \App\Models\City::with('person')->find($this->data['entry']->city_id);
        // $district = \App\Models\District::with('person')->find($this->data['entry']->district_id);
        // $activities = \App\Models\Member_activity::with('people_activity')->find($id);

        // print_r($activities);
        // load the view from /resources/views/vendor/backpack/crud/ if it exists, otherwise load the one in the package
   //             return view($this->crud->getDetailsRowView(), $this->data);

        // print_r($instruments['people_instruments']);

        // dd($types->city->name);
        // foreach ($types as $key => $value) {
        //     # code...
        //     print_r($value->type_people);
        // }
         // print_r($types);
        // print_r(['data' => $data]);

        return view('admin/details_row_person', ['data' => $data]);
    }
}
