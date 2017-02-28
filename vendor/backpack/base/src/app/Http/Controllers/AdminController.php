<?php

namespace Backpack\Base\app\Http\Controllers;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    protected $data = []; // the information we send to the view

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Show the admin dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {    
        
        // number user online
        $usersActif = DB::table('people')
                        ->where('status', 1)
                        ->count();                      
        $this->data['userActif'] = $usersActif;

        // districts list
        $districts = DB::table('districts')->get();
     
        $districtsArray = array();
        
        //$colors = tableau avec des couleurs 
        
        foreach ($districts as $district) {
       
            // number people on district
            $person = DB::table('people')
                        ->where('district_id', $district->id)
                        ->get();
            
            // to js chart
            $districtsArray[] = $person->count();
            $districtsLabelsArray[] = $district->name;
            $districtsColorsArray[] = '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
            
            // tableau districtsColorsArray qui prend alétaoirement dans le tableau $colors (php array_rand)

        
        }
      
        $this->data['district'] = json_encode($districtsArray);
        $this->data['district_colors'] = json_encode($districtsColorsArray);
        $this->data['district_labels'] = json_encode($districtsLabelsArray);

     
        $this->data['title'] = trans('backpack::base.dashboard'); // set the page title

        return view('backpack::dashboard', $this->data);
        
    }
  
    /**
     * Redirect to the dashboard.
     *
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function redirect()
    {
        // The '/admin' route is not to be used as a page, because it breaks the menu's active state.
        return redirect(config('backpack.base.route_prefix').'/dashboard');
    }
}