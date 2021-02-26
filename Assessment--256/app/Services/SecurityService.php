<?php
namespace App\Services;

use App\Http\Models\Assessment;


class SecurityService
{

    //no Database layer
    public function __construct()
    {
        
    }
    //checks the input model object to see if any of the fields of the object match "CST-256"
    public function checkString(Assessment $assessment)
    {
        // only check the name field and see if matched 'cst-256'
        if($assessment->getFirstname() == "CST-256")
        {
            //if matched will echo out message in controller by $passed

            return true;
        }
        else 
        {
            //if does not match than will echo out message in controller by using $passed
                    
            return false;
        }
    }
}