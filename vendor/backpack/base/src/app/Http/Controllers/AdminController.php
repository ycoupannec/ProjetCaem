<?php

namespace Backpack\Base\app\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

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
        
    {    $usersActif = DB::table('people')
                            ->where('status', 1)
                            ->count();
        $this->data['title'] = trans('backpack::base.dashboard'); // set the page title    

         $personnes=DB::table('people')
              ->where('status', 1)
              ->get();

        foreach ($personnes as $key) {
            $born = Carbon::parse($key->birthday);
            $age=$born->diff(Carbon::now())->format('%y');
            $agearray[]=$age;
        }


    $agedix=0;
    $agevingt=0;
    $agetrente=0;
    $agequarante=0;
    $agecinquante=0;
    $agesoixante=0;
    $agesoixantedix=0;
    $agequatrevingt=0;

    for($i=0;$i<count($agearray);$i++){
        if ($agearray[$i]<=10){
           $agedix++;
        }
        if ($agearray[$i]>10 && $agearray[$i]<=20){
           $agevingt++;
        }

        if ($agearray[$i]>20 && $agearray[$i]<=30){
            $agetrente++;
        }

        if ($agearray[$i]>30 && $agearray[$i]<=40){
            $agequarante++;
        }

        if ($agearray[$i]>40 && $agearray[$i]<=50){
            $agecinquante++;
        }

        if ($agearray[$i]>50 && $agearray[$i]<=60){
            $agesoixante++;
        }

        if ($agearray[$i]>60 && $agearray[$i]<=70){
            $agesoixantedix++;
        }
        if ($agearray[$i]>70 && $agearray[$i]<=90){
           $agequatrevingt++;
        }

    }



   $agepersonne = array(    $agedix,
                            $agevingt , 
                            $agetrente, 
                            $agequarante, 
                            $agecinquante , 
                            $agesoixante, 
                            $agesoixantedix, 
                            $agequatrevingt , 
 );



        $this->data['agepersonne']=json_encode( $agepersonne);

            
        $this->data['userActif'] =$usersActif;

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


