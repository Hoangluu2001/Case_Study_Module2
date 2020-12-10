<?php
namespace App\model;

use PDO;
use PDOException;

class DBconnection
{
    protected $dsn;
    protected $username;
    protected $password;

    public  function __construct(){
        $this->dsn = 'mysql:host=localhost;dbname=case_study';
        $this->username ='root';
        $this->password ='123456@Abc';
    }
    public function connect(){
        try{
            return new PDO($this->dsn,$this->username,$this->password);
        }catch (PDOException $e){
            echo $e->getMessage();
            exit();
        }
    }

}