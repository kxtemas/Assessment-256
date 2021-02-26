<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Assessment;

use App\Services\SecurityService;


class AssessmentController extends Controller

{
    private $securityService;
    public function index(Request $request)
    {
        $firstname = $request->get('firstname');
        $lastname = $request->get('lastname');
        $color = $request->get('color');
        $month=$request->get('month');
        
        $assessment = new Assessment($firstname, $lastname, $color, $month);
        $this->secuirtyService= new SecurityService();
        
        //tests data in the model to see if the name matches "CST-256"
        $passed = $this->secuirtyService->checkString($assessment);
        
        //echo above form, the results
        echo "Your name is: " . $firstname . " " . $lastname . " . " . "And
        your favorite color is ". $color . " and you were born in ". $month . ".";   
        
        //echo whether or not the form passed from security service file
      //  echo $passed;
        
        $data = ['firstname' => $firstname, 'lastname' => $lastname, 'color'=> $color, 'month'=>$month, 'passed'=> $passed];
        return view('assessment')->with($data,$passed);
        
    }
    
    
}