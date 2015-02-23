<?php
class DBWork {
    public $DBHost;
    public $DBUser;
    public $DBPass;
    public $DBName;
    public function __construct($DBName,$DBUser,$DBPass){
        $this->DBHost = 'localhost';
        $this->DBUser = $DBUser;
        $this->DBPass = $DBPass;
        $this->DBName = $DBName;

    }
    public function ADDtoBD($Head,$DateT,$Pass){
        $res =mysql_query('INSERT INTO News(ID, Head, DateT, Pass) VALUES(NULL ,$HEAD,$DateT,$Pass)');
        if(false === $res){
            return false;}

    }
    public function UpdBD($ID,$Head,$DateT,$Pass){
        $res =mysql_query('UPDATE News SET ID =NULL, Head=$HEAD, DateT = $DateT,Pass =$Pass WHERE ID=$ID )');
        if(false === $res){
            return false;

        }}
    public function SelFromBD($cond){
        $res =mysql_query('SELECT * From News WHERE $cond)');
        if(false === $res){
            return false;

        }}

}