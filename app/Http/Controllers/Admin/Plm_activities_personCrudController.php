<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;


use App\Http\Requests\Plm_activities_personRequest as StoreRequest;
use App\Http\Requests\Plm_activities_personRequest as UpdateRequest;

class Plm_activities_personCrudController extends CrudController
{

    public function setUp()
    {


        $this->crud->setModel("App\Models\Plm_activities_person");
        $this->crud->setRoute("admin/plm_activities_person");
        $this->crud->setEntityNameStrings('planing activités personne', 'planing activités personnes');



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
