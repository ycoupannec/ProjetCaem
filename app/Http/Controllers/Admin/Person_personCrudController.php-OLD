<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;


use App\Http\Requests\Person_personRequest as StoreRequest;
use App\Http\Requests\Person_personRequest as UpdateRequest;

class Person_personCrudController extends CrudController
{

    public function setUp()
    {


        $this->crud->setModel("App\Models\Person_person");
        $this->crud->setRoute("admin/person_person");
        $this->crud->setEntityNameStrings('personne_personne', 'personne_personnes');


        $this->crud->setFromDb();

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
}
