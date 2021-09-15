<?php 
    class addPost
    {
        protected $db = null;
    
        public function __construct(dbcontroller $db)
        {
            if (!isset($db->con)) return null;
    
            $this->db = $db;
        }
    
        public function insertTableData($date,$name,$post)
        {
            $this->db->con->query("INSERT INTO posts VALUES('$date','$name','$post');");
        }
    }
?>