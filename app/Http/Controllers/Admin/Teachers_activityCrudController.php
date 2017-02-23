<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;


use App\Http\Requests\Teachers_activityRequest as StoreRequest;
use App\Http\Requests\Teachers_activityRequest as UpdateRequest;

class Teachers_activityCrudController extends CrudController
{

    public function setUp()
    {


        $this->crud->setModel("App\Models\Teachers_activity");
        $this->crud->setRoute("admin/teachers_activity");
        $this->crud->setEntityNameStrings('activité professeur', 'activités_professeur');



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
