<?php

namespace App\models;

use App\utils\Debug;

class User extends BaseModel
{
    public function all()
    {
        return $this->database->sql('SELECT * FROM users');
    }

    public function create($data)
    {
        // zaheshování hesla
        $data["password"] = password_hash($data["password"], PASSWORD_DEFAULT);

        if($this->exists($data["email"])){
            return header("location: /PCSFSD_final_project/registration?error=email_taken");
        }

        $this->database->sql("INSERT INTO users (email, password) VALUES (" . "'" . $data['email'] . "'" . "," . "'" . $data['password'] . "'" . ")");

        header("location: /PCSFSD_final_project/admin");
    }

    public function exists(string $email)
    {
        $sql = "SELECT email FROM users WHERE email = '$email'";
        if (count($this->database->sql($sql)) > 0){
            return true;
        } else {
            return false;
        };
    }
}
