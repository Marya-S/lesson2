<?php
class DBWork {
    /*public $DBHost;
    public $DBUser;
    public $DBPass;
    public $DBName;*/
    private $conn = false;
    private $res;
    public function __construct($Host,$DBName,$DBUser,$DBPass){
        $this->conn =mysql_connect($Host,$DBUser,$DBPass);
       mysql_select_db($DBName, $this->conn);
    }
    public function QueryBD($sql){
         if(!$this->conn){
             return false;
         }
        $this->res= mysql_query($sql);
        if($this->res == false){
            return false;
        }
        $rez=[];
        if(is_object($this->res)) {
            while ($row = $this->res->fetch_assoc()) {
                $rez[] = $row;
            }
            return $rez;
        }


    }
}