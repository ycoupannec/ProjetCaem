<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\PersonRequest as StoreRequest;
use App\Http\Requests\PersonRequest as UpdateRequest;

class PersonCrudController extends CrudController
{

    public function setUp()
    {

        /*
		|--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel("App\Models\Person");
        $this->crud->setRoute("admin/person");
        $this->crud->setEntityNameStrings('Personne', 'Personnes');


        


        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */

        $this->crud->setFromDb();

        // ------ CRUD FIELDS
        $this->crud->addField([
            'name'  => 'gender', // DB column name (will also be the name of the input)
            'label' => 'Civilité', // the human-readable label for the input
            'type'  => 'select_from_array',
            'options' => ['Mr' => 'Mr', 'Mme' => 'Mme'],
            'allows_null' => false,
            ]);

        $this->crud->addField([
            'name'  => 'name', // DB column name (will also be the name of the input)
            'label' => 'Prénom', // the human-readable label for the input
            'type'  => 'text'
            ]);

        

        $this->crud->addField([
            'name'  => 'family_name', // DB column name (will also be the name of the input)
            'label' => 'Nom de famille', // the human-readable label for the input
            'type'  => 'text'
            ]);

        $this->crud->addField([
            'name'  => 'mail', // DB column name (will also be the name of the input)
            'label' => 'Email', // the human-readable label for the input
            'type'  => 'email'
            ]);

        $this->crud->addField([
            'name'  => 'tel_fix', // DB column name (will also be the name of the input)
            'label' => 'Tel. fix', // the human-readable label for the input
            'type'  => 'text'
            ]);

        $this->crud->addField([
            'name'  => 'tel_mob', // DB column name (will also be the name of the input)
            'label' => 'Tel. mobile', // the human-readable label for the input
            'type'  => 'text'
            ]);

        $this->crud->addField([
            'name'  => 'postal_code', // DB column name (will also be the name of the input)
            'label' => 'Code postal', // the human-readable label for the input
            'type'  => 'number'
            ]);

        $this->crud->addField([
            'name'  => 'adress', // DB column name (will also be the name of the input)
            'label' => 'Adresse', // the human-readable label for the input
            'type'  => 'text'
            ]);

        $this->crud->addField([
            'name'  => 'birthday', // DB column name (will also be the name of the input)
            'label' => 'Date de naissance', // the human-readable label for the input
            'type' => 'datetime_picker',

            'datetime_picker_options' => [
                                            'format' => 'DD/MM/YYYY',
                                            'language' => 'fr']
            ]);

        $this->crud->addField([
            'name'  => 'observation', // DB column name (will also be the name of the input)
            'label' => 'Observation', // the human-readable label for the input
            'type'  => 'textarea'
            ]);

        $this->crud->addField([
            'name'  => 'code_analytique', // DB column name (will also be the name of the input)
            'label' => 'code_analytique', // the human-readable label for the input
            'type'  => 'textarea'
            ]);
        
        $this->crud->addField([
            'name'  => 'image_right', // DB column name (will also be the name of the input)
            'label' => 'Droit à l\'image', // the human-readable label for the input
            'type'  => 'select_from_array',
            'options' => ['Oui' => 'Oui', 'Non' => 'Non'],
            'allows_null' => false,
            ]);


        $this->crud->addField(
           
           [  // Select
            'label' => "Ville",
            'type' => 'select',
            'name' => 'city_id', // the db column for the foreign key
            'entity' => 'city', // the method that defines the relationship in your Model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'model' => "App\Models\City" // foreign key model
            ]);


        $this->crud->addField(
           
           [  // Select
            'label' => "Quartier",
            'type' => 'select',
            'name' => 'district_id', // the db column for the foreign key
            'entity' => 'district', // the method that defines the relationship in your Model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'model' => "App\Models\District" // foreign key model
            ]);

  
        


         // ------ CRUD COLUMNS
         $this->crud->setColumnDetails('gender',
            [
             'name'  => 'gender', // DB column name (will also be the name of the input)
            'label' => 'Civilité', // the human-readable label for the input
            'type'  => 'select_from_array',
            'options' => ['Mr' => 'Mr', 'Mme' => 'Mme'],
            'allows_null' => false,
          
           ]
        );


        $this->crud->setColumnDetails('name',
            [
            'name'  => 'name', // DB column name (will also be the name of the input)
            'label' => 'Prénom', // the human-readable label for the input 
           ]
        );
        
        $this->crud->setColumnDetails('family_name',
            [
            'name'  => 'family_name', // DB column name (will also be the name of the input)
            'label' => 'Nom de famille', // the human-readable label for the input 
           ]
        );

        $this->crud->addColumn('rattache');

        $this->crud->setColumnsDetails(['rattache'],
            [
            'label' => 'Responsable légal', // Table column heading
            'type' => 'select_multiple',
            'name' => 'people_people', // the column that contains the ID of that connected entity;
            'entity' => 'people_people', // the method that defines the relationship in your Model
            'attribute' => 'fullname', // foreign key attribute that is shown to user
            'model' => "App\Models\Person", // foreign key model

            ]
        );

        $this->crud->setColumnDetails('mail',
            [
            'name'  => 'mail', // DB column name (will also be the name of the input)
            'label' => 'Email', // the human-readable label for the input 
           ]
        );

        $this->crud->setColumnDetails('tel_fix',
            [
            'name'  => 'tel_fix', // DB column name (will also be the name of the input)
            'label' => 'Tel. fix', // the human-readable label for the input 
           ]
        );

        $this->crud->setColumnDetails('tel_mob',
            [
            'name'  => 'tel_mob', // DB column name (will also be the name of the input)
            'label' => 'Tel. mobile', // the human-readable label for the input 
           ]
        );

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

        $this->crud->addField(
           
           [  // Select
            'label' => "Responsable légal",
            'type' => 'select2_multiple',
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
        

        $this->crud->addField([
            'name'  => 'code_analytique', // DB column name (will also be the name of the input)
            'label' => 'Code analytique', // the human-readable label for the input
            'type'  => 'textarea'
            ]);

        $this->crud->setColumnDetails('code_analytique',
            [
            'name'  => 'code_analytique', // DB column name (will also be the name of the input)
            'label' => 'Code analytique', // the human-readable label for the input 
           ]
        );
/**/
        $this->crud->removeColumns(['year_old', 'postal_code','birthday','adress', 'observation', 'city_id', 'district_id', 'image_right', 'code_analytique', 'types']);


        // ------ CRUD FIELDS
        // $this->crud->addField($options, 'update/create/both');
        // $this->crud->addFields($array_of_arrays, 'update/create/both');
        // $this->crud->removeField('name', 'update/create/both');
        // $this->crud->removeFields($array_of_names, 'update/create/both');

        // ------ CRUD COLUMNS
        // $this->crud->addColumn(); // add a single column, at the end of the stack
        // $this->crud->addColumns(); // add multiple columns, at the end of the stack
        // $this->crud->removeColumn('column_name'); // remove a column from the stack
        // $this->crud->removeColumns(['column_name_1', 'column_name_2']); // remove an array of columns from the stack
        // $this->crud->setColumnDetails('column_name', ['attribute' => 'value']); // adjusts the properties of the passed in column (by name)
        // $this->crud->setColumnsDetails(['column_1', 'column_2'], ['attribute' => 'value']);

        // ------ CRUD BUTTONS
        // possible positions: 'beginning' and 'end'; defaults to 'beginning' for the 'line' stack, 'end' for the others;
        // $this->crud->addButton($stack, $name, $type, $content, $position); // add a button; possible types are: view, model_function
        // $this->crud->addButtonFromModelFunction($stack, $name, $model_function_name, $position); // add a button whose HTML is returned by a method in the CRUD model
        // $this->crud->addButtonFromView($stack, $name, $view, $position); // add a button whose HTML is in a view placed at resources\views\vendor\backpack\crud\buttons
        // $this->crud->removeButton($name);
        // $this->crud->removeButtonFromStack($name, $stack);

        // ------ CRUD ACCESS
        // $this->crud->allowAccess(['list', 'create', 'update', 'reorder', 'delete']);
        // $this->crud->denyAccess(['list', 'create', 'update', 'reorder', 'delete']);

        // ------ CRUD REORDER
        // $this->crud->enableReorder('label_name', MAX_TREE_LEVEL);
        // NOTE: you also need to do allow access to the right users: $this->crud->allowAccess('reorder');

        // ------ CRUD DETAILS ROW
        $this->crud->enableDetailsRow();
        // NOTE: you also need to do allow access to the right users: 
        $this->crud->allowAccess('details_row');
        // NOTE: you also need to do overwrite the showDetailsRow($id) method in your EntityCrudController to show whatever you'd like in the details row OR overwrite the views/backpack/crud/details_row.blade.php

        // ------ REVISIONS
        // You also need to use \Venturecraft\Revisionable\RevisionableTrait;
        // Please check out: https://laravel-backpack.readme.io/docs/crud#revisions
        // $this->crud->allowAccess('revisions');

        // ------ AJAX TABLE VIEW
        // Please note the drawbacks of this though:
        // - 1-n and n-n columns are not searchable
        // - date and datetime columns won't be sortable anymore
         $this->crud->enableAjaxTable();

        // ------ DATATABLE EXPORT BUTTONS
        // Show export to PDF, CSV, XLS and Print buttons on the table view.
        // Does not work well with AJAX datatables.
         $this->crud->enableExportButtons();

        // ------ ADVANCED QUERIES
        // $this->crud->addClause('active');
        // $this->crud->addClause('type', 'car');
        // $this->crud->addClause('where', 'name', '==', 'car');
        // $this->crud->addClause('whereName', 'car');
        // $this->crud->addClause('whereHas', 'posts', function($query) {
        //     $query->activePosts();
        // });
        // $this->crud->with(); // eager load relationships
        // $this->crud->orderBy();
        // $this->crud->groupBy();
        // $this->crud->limit();
    }

	public function store(StoreRequest $request)
	{
		// your additional operations before save here
        $redirect_location = parent::storeCrud();
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
	}

	public function update(UpdateRequest $request)
	{
		// your additional operations before save here
        $redirect_location = parent::updateCrud();
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
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