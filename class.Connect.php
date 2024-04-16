<?php

class Class_Connect
{
    private $host;
    private $username;
    private $password;
    private $db;
    private $connect;

    public function __construct()
    {
        $this->host = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->db = "db_docshare";
        $this->connect = null;
    }

    public function connect() //method untuk connect ke database
    {
        $this->connect = mysqli_connect($this->host, $this->username, $this->password, $this->db);
        if ($this->connect->connect_error) {
            die($this->connect->connect_error);
        }
        return $this->connect;
    }

    public function disconnect(){ //method buat discconect ke database
        if ($this->connect !== null) {
            $this->connect->close();
            $this->connect = null;
        }
    }
}
?>
