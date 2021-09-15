<?php

class Post
{
    protected $db = null;

    public function __construct(dbcontroller $db)
    {
        if (!isset($db->con)) return null;

        $this->db = $db;
    }

    public function getTableData($table = 'posts')
    {
        $result = $this->db->con->query("SELECT * FROM {$table} ORDER BY ts DESC");

        $resultarray = array();

        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultarray[] = $item;
        }

        return $resultarray;
    }

    public function getRows($table = 'posts')
    {
        $res = $this->db->con->query("SELECT COUNT(*) FROM {$table}");

        $resarray = array();

        while ($it = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
            $resarray[] = $it;
        }

        return $resarray;
    }
}


?>