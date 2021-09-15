<?php

class dbcontroller {
    protected $db = "blog_website";
    protected $host = "localhost";
    protected $user = "root";
    protected $pass = "";

    public $con = null;

    public function __construct()
    {
        $this->con = new mysqli($this->host,$this->user,$this->pass,$this->db);

        if ($this->con->connect_error) {
            echo "Connention Failed".$this->con->connect_error;
        }
    }

    protected function closeconnection()
    {
        if ($this->con != null) {
            $this->con->close();
            $this->con = null;
        }
    }

    public function __destruct()
    {

        $this->closeconnection();

    }
}

?>