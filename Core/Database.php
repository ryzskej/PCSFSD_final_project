<?php

namespace Core;

use mysqli;

class Database
{
    protected $connection;

    // připojení k databázi, metoda co mi spojuje objekt Database s databází z tablePlus
    public function __construct()
    {
        // $servername = "a059um.forpsi.com";
        // $username = "f178749";
        // $password = "fmfJ3bph";
        // $dbname = "f178749";
        
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "databaze_ovocnych_drevin";

        $connection = new mysqli($servername, $username, $password, $dbname);

        // check connection
        if ($connection->connect_error) {
            die("connection failed:" . $connection->connect_error);
        }

        // propis do protected $connection; kde se připojení drží
        $this->connection = $connection;
    }

    // na spojení volám query, parametr $sql je SQL dotaz (třeba "SELECT * from tree")
    public function sql(string $sql)
    {
        $result = $this->connection->query($sql);

        if (strpos($sql, "SELECT") !== false) {
            // vrať mi výsledek, ve které je nutno vše fetchnout + MYSQLI_ASSOC
            return $result->fetch_all(MYSQLI_ASSOC);
        }
    }
}
