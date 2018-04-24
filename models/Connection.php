<?php
class Connection{
    private $host;
    private $user;
    private $password;
    private $db;
    //private $sql;

    function __construct($host, $user, $password, $db){//}, $sql){
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->db = $db;
       //$this->sql = $sql;
    }

    public function myconnect(){
        return mysqli_connect($this->host, $this->user, $this->password, $this->db);
    }

    public function myquery(){
        return mysqli_query($this->myconnect()); //, $this->sql);
    }

    /*public function myresult(){
        $query = $this->myquery();
        while ($res[] = mysqli_fetch_assoc($query)) {
            $cities = $res;
        }
        return $cities;
    }*/
}