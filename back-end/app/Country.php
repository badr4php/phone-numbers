<?php

namespace App;

use App\Customer;
use App\Parser;

class Country
{
    private $customers;

    function __construct()
    {
        $this->customers = new Customer();
    }

    public function listPhoneNumbers(){
        $phoneNumbers = $this->customers->getPhoneNumbers();
        $data = [];
        foreach($phoneNumbers as $number){
            $data[] = (new Parser($number))->parse();
        }
        return json_encode($data);
    }
}
