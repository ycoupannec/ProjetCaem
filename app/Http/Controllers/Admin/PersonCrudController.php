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
        $this->crud->setEntityNameStrings('person', 'persons');

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

        $this->crud->addField([
            'name'  => 'family_name', // DB column name (will also be the name of the input)
            'label' => 'Prenom', // the human-readable label for the input
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
            'label' => 'Code postale', // the human-readable label for the input
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
        
        $this->crud->addField(
           
           [  // Select
            'label' => "Cities",
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

        $this->crud->addField(
           
           [  // Select
            'label' => "famillies",
            'type' => 'select',
            'name' => 'familly_id', // the db column for the foreign key
            'entity' => 'familly', // the method that defines the relationship in your Model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'model' => "App\Models\Familly" // foreign key model
            ]);



         // ------ CRUD COLUMNS
        
        $this->crud->setColumnDetails('name',
            [
            'name'  => 'name', // DB column name (will also be the name of the input)
            'label' => 'Nom', // the human-readable label for the input 
           ]
        );
        
        $this->crud->setColumnDetails('family_name',
            [
            'name'  => 'family_name', // DB column name (will also be the name of the input)
            'label' => 'Nom de famille', // the human-readable label for the input 
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

        $this->crud->setColumnDetails('postal_code',
            [
            'name'  => 'postal_code', // DB column name (will also be the name of the input)
            'label' => 'Code postale', // the human-readable label for the input 
           ]
        );

        $this->crud->setColumnDetails('adress',
            [
            'name'  => 'adress', // DB column name (will also be the name of the input)
            'label' => 'Adresse', // the human-readable label for the input 
           ]
        );

        $this->crud->setColumnDetails('birthday',
            [
            'name'  => 'birthday', // DB column name (will also be the name of the input)
            'label' => 'Date de naissance', // the human-readable label for the input 
           ]
        );

        $this->crud->setColumnDetails('observation',
            [
            'name'  => 'observation', // DB column name (will also be the name of the input)
            'label' => 'Observation', // the human-readable label for the input 
           ]
        );

        $this->crud->setColumnsDetails(['city_id'],
            [
            'label' => 'Ville', // Table column heading
            'type' => 'select',
            'name' => 'city_id', // the column that contains the ID of that connected entity;
            'entity' => 'city', // the method that defines the relationship in your Model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'model' => "App\Models\City", // foreign key model
            ]
        );

        $this->crud->setColumnsDetails(['district_id'],
            [
            'label' => 'Quartier', // Table column heading
            'type' => 'select',
            'name' => 'district_id', // the column that contains the ID of that connected entity;
            'entity' => 'district', // the method that defines the relationship in your Model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'model' => "App\Models\district", // foreign key model
            ]
        );

        $this->crud->setColumnsDetails(['familly_id'],
            [
            'label' => 'Famille', // Table column heading
            'type' => 'select',
            'name' => 'familly_id', // the column that contains the ID of that connected entity;
            'entity' => 'familly', // the method that defines the relationship in your Model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'model' => "App\Models\familly", // foreign key model
            ]
        );

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
