<?php


namespace App\model;


class CuahangModel
{
    protected  $database;
    public function __construct()
    {
        $db = new  DBconnection();
        $this->database = $db->connect();
    }
    public  function getAll(){
        $sql ="SELECT * FROM CuaHang INNER  JOIN  Oto ON CuaHang.id = Oto.idXuong LIMIT 15   ";
        $stmt = $this->database->query($sql);
        return $stmt->fetchAll();

    }
    public function findCuahangById($id){
        $sql='SELECT * FROM CuaHang WHERE id=:id';
        $stmt=$this->database->prepare($sql);
        $stmt->bindParam(":id",$id);
        $stmt->execute();
        return $stmt->fetchAll();

    }

    public function addCuaHang($CuaHang){
        $sql = "INSERT INTO CuaHang(Name,Address) VALUES (?, ?)";
        $statement = $this->Cuahang->prepare($sql);
        $statement->bindParam(1, $CuaHang->getName());
        $statement->bindParam(2, $CuaHang->getAddress());

        return $statement->execute();
    }


}