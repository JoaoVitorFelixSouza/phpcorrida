<?php 

namespace App\persistence;

class ConectionFactory{

    private $_user = "root";
    private $_password = "";
    private $_host = "localhost";
    private $_conn;

    public function getInstance(){

        try{
            if(!isset($this->_conn)){
                $this->_conn = new \PDO("mysql:host=localhost;dbname=chamadaonline","root","");
                return $this->_conn;
            }else{
                return $this->_conn;
            }
        } catch(\PDOException $e){
            $e->getMessage();
        }
    }
}