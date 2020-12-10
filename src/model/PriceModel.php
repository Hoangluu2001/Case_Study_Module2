<?php
//
//
//namespace App\model;
//
//
//class PriceModel
//{
//    protected  $database;
//    public function __construct()
//    {
//        $db = new  DBconnection();
//        $this->database = $db->connect();
//    }
//    public  function getAll(){
//        $sql ="SELECT * FROM Price INNER  JOIN  Oto ON Price.idOto = Oto.idOto LIMIT 15   ";
//        $stmt = $this->database->query($sql);
//        return $stmt->fetchAll();
//
//    }
//    public function findPriceById($id){
//        $sql='SELECT * FROM CuaHang WHERE idPrice=:idPrice';
//        $stmt=$this->database->prepare($sql);
//        $stmt->bindParam(":idPrice",$idPrice);
//        $stmt->execute();
//        return $stmt->fetchAll();
//
//    }
//}