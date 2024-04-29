<?php

class Connection
{
    private $host= "localhost";
    private $username = "root";
    private $password = "";
    private $db ="db_docshare";
    public $connect;

    public function __construct() //construct untuk connect ke database
    {
        $conn = mysqli_connect($this->host, $this->username, $this->password, $this->db);
        if ($conn->connect_error) {
            die($conn->connect_error);
        }
        $this->connect = $conn;
    }

    public function disconnect(){ //method buat discconect ke database
        if ($this->connect !== null) {
            $this->connect->close();
            $this->connect = null;
        }
    }
}
?>
