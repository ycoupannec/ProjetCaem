<?php

 namespace App\Http\Controllers\Admin;
 use Backpack\Base\app\Http\Controllers\AdminController;


class TestController extends AdminController
{
 

    public function test()
	{

	return view('test');

	}
}

/*<?php
 namespace App\Http\Controllers\Admin;
  use Backpack\Base\app\Http\Controllers\AdminController;

   class TestController extends AdminController {

    public function test() {
     return view('test');
      }
   }*/