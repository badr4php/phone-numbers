<?php

namespace App;

class SQLiteConnection {

    private $pdo;

    /**
     * @return \PDO
     */
    public function connect() {
        if ($this->pdo == null) {
            try {
                $this->pdo = new \PDO("sqlite:" . Config::PATH_TO_SQLITE_FILE);
                //$this->pdo->sqliteCreateFunction('REGEXP', 'preg_match', 2);
                
             } catch (\PDOException $e) {
                /* To Do 
                    handle the exception here
                */
             }
        }
        return $this->pdo;
    }
}
