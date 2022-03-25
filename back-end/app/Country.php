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
        $parser = new Parser();
        $data = [];
        foreach($phoneNumbers as $number){
            $data[] = $parser->parse($number);
        }
        return json_encode($data);
    }
}
