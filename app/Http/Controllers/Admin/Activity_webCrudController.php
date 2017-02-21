<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\Activity_webRequest as StoreRequest;
use App\Http\Requests\Activity_webRequest as UpdateRequest;

class Activity_webCrudController extends CrudController
{

    public function setUp()
    {

        /*
		|--------------------------------------------------------------------------
		| BASIC CRUD INFORMATION
		|--------------------------------------------------------------------------
		*/
        $this->crud->setModel("App\Models\Activity_web");
        $this->crud->setRoute("admin/activity_web");
        $this->crud->setEntityNameStrings('activity_web', 'activity_webs');

        /*
		|--------------------------------------------------------------------------
		| BASIC CRUD INFORMATION
		|--------------------------------------------------------------------------
		*/

         $this->crud->setFromDb();

        // ------ CRUD FIELDS
        $this->crud->addField([
            'name'  => 'name', // DB column name (will also be the name of the input)
            'label' => 'Nom', // the human-readable label for the input
            'type'  => 'text'
            ]);
        
        $this->crud->addField(
           
           [  // Select
            'label' => "Types",
            'type' => 'select',
            'name' => 'type_activity_id', // the db column for the foreign key
            'entity' => 'type_activity', // the method that defines the relationship in your Model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'model' => "App\Models\Types_activity" // foreign key model
            ]);
        
        
        // $this->crud->addFields($array_of_arrays, 'update/create/both');
        // $this->crud->removeField('name', 'update/create/both');
        // $this->crud->removeFields($array_of_names, 'update/create/both');

        // ------ CRUD COLUMNS
        
        $this->crud->setColumnDetails('name',
            [
            'name'  => 'name', // DB column name (will also be the name of the input)
            'label' => 'Nom', // the human-readable label for the input 
           ]
        );
        
        $this->crud->setColumnsDetails(['type_activity_id'],
            [
            'label' => 'Types', // Table column heading
            'type' => 'select',
            'name' => 'type_activity_id', // the column that contains the ID of that connected entity;
            'entity' => 'type_activity', // the method that defines the relationship in your Model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'model' => "App\Models\Types_activity", // foreign key model
            ]
        );


         

        $this->crud->addField([
            'name'  => 'day', // DB column name (will also be the name of the input)
            'label' => 'Jour', // the human-readable label for the input
            'type'  => 'select_from_array',
            'options' => [
                        'Lundi' => 'Lundi',
                        'Mardi' => 'Mardi',
                        'Mercredi' => 'Mercredi',
                        'Jeudi' => 'Jeudi',
                        'Vendredi' => 'Vendredi',
                        'Samedi' => 'Samedi',
                        'Dimanche' => 'Dimanche'
                        ],
            'allows_null' => false,
            ]);

        $this->crud->setColumnDetails('day',
            [
             'name'  => 'day', // DB column name (will also be the name of the input)
            'label' => 'Jour', // the human-readable label for the input
            'type'  => 'select_from_array',
            'options' => [
                        'Lundi' => 'Lundi',
                        'Mardi' => 'Mardi',
                        'Mercredi' => 'Mercredi',
                        'Jeudi' => 'Jeudi',
                        'Vendredi' => 'Vendredi',
                        'Samedi' => 'Samedi',
                        'Dimanche' => 'Dimanche'
                        ],
            'allows_null' => false,
          
           ]
        );

        $this->crud->addField([
            'name'  => 'status', // DB column name (will also be the name of the input)
            'label' => 'Status', // the human-readable label for the input
            'type'  => 'select_from_array',
            'options' => [
                        'Online' => 'Online',
                        'Offline' => 'Offline'
                        ],
            'allows_null' => false,
            ]);

        $this->crud->setColumnDetails('status',
            [
             'name'  => 'status', // DB column name (will also be the name of the input)
            'label' => 'Status', // the human-readable label for the input
            'type'  => 'select_from_array',
            'options' => [
                        'Online' => 'Online',
                        'Offline' => 'Offline'
                        ],
            'allows_null' => false,
          
           ]
        );

        $this->crud->addField([
            'name'  => 'description', // DB column name (will also be the name of the input)
            'label' => 'Description', // the human-readable label for the input
            'type'  => 'textarea'
            ]);

        $this->crud->setColumnDetails('description',
            [
            'name'  => 'description', // DB column name (will also be the name of the input)
            'label' => 'Description', // the human-readable label for the input
            'type'  => 'textarea'
            ]);

        $this->crud->addField([
            'name'  => 'age_min', // DB column name (will also be the name of the input)
            'label' => 'Age min', // the human-readable label for the input
            'type'  => 'number'
            ]);

        $this->crud->setColumnDetails('age_min',
            [
            'name'  => 'age_min', // DB column name (will also be the name of the input)
            'label' => 'Age min', // the human-readable label for the input
            'type'  => 'number'
            ]);

        $this->crud->addField([
            'name'  => 'age_max', // DB column name (will also be the name of the input)
            'label' => 'Age max', // the human-readable label for the input
            'type'  => 'number'
            ]);

        $this->crud->setColumnDetails('age_max',
            [
            'name'  => 'age_max', // DB column name (will also be the name of the input)
            'label' => 'Age max', // the human-readable label for the input
            'type'  => 'number'
            ]);

        $this->crud->addField([
            'name'  => 'picture_1', // DB column name (will also be the name of the input)
            'label' => '1ere image', // the human-readable label for the input
           'type' => 'upload',
            'upload' => true,
            'disk' => 'uploads'
            ]);

        $this->crud->setColumnDetails('picture_1',
            [
            'name'  => 'picture_1', // DB column name (will also be the name of the input)
            'label' => '1ere image', // the human-readable label for the input
            'type'  => 'text'
            ]);

        $this->crud->addField([
            'name'  => 'picture_2', // DB column name (will also be the name of the input)
            'label' => '2eme image', // the human-readable label for the input
           'type' => 'upload',
            'upload' => true,
            'disk' => 'uploads'
            ]);

        $this->crud->setColumnDetails('picture_2',
            [
            'name'  => 'picture_2', // DB column name (will also be the name of the input)
            'label' => '2eme image', // the human-readable label for the input
            'type'  => 'text'
            ]);

        $this->crud->addField([
            'name'  => 'hour_start', // DB column name (will also be the name of the input)
            'label' => 'Heure de début', // the human-readable label for the input
           'type' => 'time',
            
            ]);

        $this->crud->setColumnDetails('hour_start',
            [
            'name'  => 'hour_start', // DB column name (will also be the name of the input)
            'label' => 'Heure de début', // the human-readable label for the input
            'type'  => 'text'
            ]);
        
        $this->crud->addField([
            'name'  => 'hour_end', // DB column name (will also be the name of the input)
            'label' => 'Heure de fin', // the human-readable label for the input
           'type' => 'time',
            
            ]);

        $this->crud->setColumnDetails('hour_end',
            [
            'name'  => 'hour_end', // DB column name (will also be the name of the input)
            'label' => 'Heure de fin', // the human-readable label for the input
            'type'  => 'text'
            ]);

        $this->crud->addField([
            'name'  => 'when', // DB column name (will also be the name of the input)
            'label' => 'Quand', // the human-readable label for the input
           'type' => 'text',
            
            ]);

        $this->crud->setColumnDetails('when',
            [
            'name'  => 'when', // DB column name (will also be the name of the input)
            'label' => 'Quand', // the human-readable label for the input
            'type'  => 'text'
            ]);

        $this->crud->addField([
            'name'  => 'price', // DB column name (will also be the name of the input)
            'label' => 'Tarifs', // the human-readable label for the input
           'type' => 'text',
            
            ]);

        $this->crud->setColumnDetails('price',
            [
            'name'  => 'price', // DB column name (will also be the name of the input)
            'label' => 'Tarifs', // the human-readable label for the input
            'type'  => 'text'
            ]);
        // add a single column, at the end of the stack
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
        // $this->crud->enableDetailsRow();
        // NOTE: you also need to do allow access to the right users: $this->crud->allowAccess('details_row');
        // NOTE: you also need to do overwrite the showDetailsRow($id) method in your EntityCrudController to show whatever you'd like in the details row OR overwrite the views/backpack/crud/details_row.blade.php

        // ------ REVISIONS
        // You also need to use \Venturecraft\Revisionable\RevisionableTrait;
        // Please check out: https://laravel-backpack.readme.io/docs/crud#revisions
        // $this->crud->allowAccess('revisions');

        // ------ AJAX TABLE VIEW
        // Please note the drawbacks of this though:
        // - 1-n and n-n columns are not searchable
        // - date and datetime columns won't be sortable anymore
        // $this->crud->enableAjaxTable();

        // ------ DATATABLE EXPORT BUTTONS
        // Show export to PDF, CSV, XLS and Print buttons on the table view.
        // Does not work well with AJAX datatables.
        // $this->crud->enableExportButtons();

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
}
