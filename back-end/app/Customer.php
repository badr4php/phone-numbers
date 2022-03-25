<?php

namespace App;

use App\SQLiteConnection;

class Customer
{
    /**
     * PDO instance
     * @var type 
     */
    private $pdo;

    function __construct()
    {
        $this->pdo = (new SQLiteConnection())->connect();
    }

    public function getPhoneNumbers() {
        $statment = $this->pdo->query($this->phoneNumbersQuery());
        $phoneNumbers = [];
        while ($row = $statment->fetch(\PDO::FETCH_ASSOC)) {
            $phoneNumbers[] = $row['phone'];
        }
        return $phoneNumbers;
    }

    private function phoneNumbersQuery(){
        $query = 'SELECT phone FROM customer ';
        if(isset($_GET['country'])){
            $query .= " WHERE phone LIKE '".$_GET['country']."%' ";
        }
        return $query;
    }
}
