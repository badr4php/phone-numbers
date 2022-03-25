<?php

namespace App;

class Config {

    const PATH_TO_SQLITE_FILE = __DIR__.'/../db/sample.db';

    const Countries  = [
        "237" => [
            "country" => "Cameroon",
            "code" => "+237",
            "regex" => "\(237\)\ ?[2368]\d{7,8}$"
            ], 
        "251" => [
            "country" => "Ethiopia",
            "code" => "+251",
            "regex" => "\(251\)\ ?[1-59]\d{8}$"
            ],
        "212" => [
            "country" => "Morocco",
            "code" => "+212",
            "regex" => "\(212\)\ ?[5-9]\d{8}$"
            ],
        "258" => [
            "country" => "Mozambique",
            "code" => "+258",
            "regex" => "\(258\)\ ?[28]\d{7,8}$"
            ], 
        "256" => [
            "country" => "Uganda",
            "code" => "+256",
            "regex" => "\(256\)\ ?\d{9}$"
            ]
    ];

}
