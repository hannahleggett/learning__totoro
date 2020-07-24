<?php

class db
{


    public $mysqli;
    public $db_user = "portfolioroot";
    public $db_pass = "password";
    public $db_name = "portfolioproject";


    public function __construct()
    {
        $this->connect();
    }


    public function connect()
    {
        $this->mysqli = new mysqli("localhost", $this->db_user, $this->db_pass, $this->db_name);

        if ($this->mysqli->connect_errno) {
            echo "Failed to connect to MySQL: " . $this->mysqli->connect_error;
            exit();
        }
    }



    public function query($id, $table)
    {
        $sql = "SELECT * FROM " . $table . " where id=" . $id;

        $result = $this->mysqli->query($sql);
        return $result->fetch_row();
    }



    public function all($table)
    {
        $sql = "SELECT id, title FROM " . $table;

        return $this->mysqli->query($sql);
   //     return $result->fetch_row();
    }
}
