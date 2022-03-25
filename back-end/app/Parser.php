<?php

namespace App;

class Parser
{
    private $phone;
    private $code;
    private $countries;
    

    public function __construct()
    {
        $this->countries = Config::Countries;
    }

    private function init($phone){
        $this->code = trim(explode(' ', $phone)[0], '()'); 
        $this->phone = $phone; 
    }

    public function parse($phone)
    {
        $this->init($phone);
        $parsed['country'] = $this->country();
        $parsed['state'] = $this->state();
        $parsed['code'] = $this->code();
        $parsed['phone'] = $this->phone();

        return $parsed;
    }

    /*private function setCode($phone){

    }*/

    private function country()
    {
        return $this->countries[$this->code]['country'];
    }

    private function state()
    {

        return preg_match('/' . $this->countries[$this->code]['regex'] . '/', $this->phone) ? "OK" : "NOK";
            
    }

    private function code()
    {
        return $this->countries[$this->code]['code'];
    }

    private function phone()
    {
        return explode(' ', $this->phone)[1];
    }
}
