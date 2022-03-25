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
            $row = $parser->parse($number);
            if($this->filterByState($row)){
                $data[] = $row;
            }
        }
        return json_encode($data);
    }

    private function filterByState($row){
        $isTrue = true;
        if(!empty($_GET['state']) && $_GET['state'] != $row['state']){
            $isTrue =  false;
        }
        return $isTrue;

    }
}
