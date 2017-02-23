<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;


use App\Http\Requests\Member_activityRequest as StoreRequest;
use App\Http\Requests\Member_activityRequest as UpdateRequest;

class Member_activityCrudController extends CrudController
{

    public function setUp()
    {


        $this->crud->setModel("App\Models\Member_activity");
        $this->crud->setRoute("admin/member_activity");
        $this->crud->setEntityNameStrings('activité membre', 'activités membre');



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
