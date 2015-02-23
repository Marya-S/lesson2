<?php
class DBWork {
    public function __construct(){
        $this->conn =mysql_connect('localhost','root','');
       mysql_select_db('News');
    }
    protected function QueryBD($sql){

        $res= mysql_query($sql);
        if($res == false){
            return false;
        }
        $rez=[];
        if(is_object($this->res)) {
            while ($row = mysql_fetch_assoc($res)) {
                $rez[] = $row;
            }
            return $rez;
        }
    }

    public  function Sel($table){
        $sql = 'SELECT * FROM ' . $table;
        return $this->query($sql);
    }
    public function ADDtoBD($table,$head,$pass){
        $dtime = date('d.m.y H:i');
        $sql = 'INSERT INTO' . $table . '(ID,Head,DateT,Pass) VALUES(NULL,' . $head . ',' . $dtime . ',' . $pass . ')';

    }

}

