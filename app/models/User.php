<?php

namespace App\models;

use App\utils\Debug;

class User extends BaseModel
{
    ////////////////////////////////////////////////////
    public function all()
    {
        return $this->database->sql('SELECT * FROM users');
    }

    ////////////////////////////////////////////////////
    public function create($data)
    {
        $data["password"] = password_hash($data["password"], PASSWORD_DEFAULT);

        if ($this->exists($data["email"])) {
            return false;
        }

        $this->database->sql("INSERT INTO users (email, password) VALUES (" . "'" . $data['email'] . "'" . "," . "'" . $data['password'] . "'" . ")");

        return true;
    }

    ////////////////////////////////////////////////////
    public function exists(string $email)
    {
        $sql = "SELECT email FROM users WHERE email = '$email'";
        if (count($this->database->sql($sql)) > 0) {
            return true;
        } else {
            return false;
        };
    }

    ////////////////////////////////////////////////////
    public function findByEmail(string $email)
    {
        $sql = "SELECT * FROM USERS WHERE email = '$email'";
        return $this->database->sql($sql);

    }
}
