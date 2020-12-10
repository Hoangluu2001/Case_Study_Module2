<?php


namespace App\model;


class OtoModel
{
    protected $database;

    public function __construct()
    {
        $db = new  DBconnection();
        $this->database = $db->connect();
    }

    public function getAll()
    {
//        $sql ="SELECT * FROM CuaHang LEFT  JOIN  Oto ON CuaHang.id = Oto.idXuong LIMIT 15 ";
        $sql = "SELECT * FROM Oto LIMIT15";

        $stmt = $this->database->query($sql);
        return $stmt->fetchAll();

    }
//    public function CuaHangAll(){
//        $sql = "SELECT * FROM CuaHang";
//        $stmt = $this->database->query($sql);
//        return $stmt->fetchAll();
//    }


    public function findOtoById($idOto)
    {
        $sql = 'SELECT * FROM Oto WHERE IdOto=:id';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":id", $idOto);
        $stmt->execute();
        return $stmt->fetchAll();

    }

    public function addOto($Oto)
    {
        $sql = "INSERT INTO Oto(NameOto, Type , Automaker,Color,Amount,image,IdXuong) VALUES (?, ?, ?,?,?,?,?)";
        $statement = $this->database->prepare($sql);
        $statement->bindParam(1, $Oto->getNameOto());
        $statement->bindParam(2, $Oto->getType());
        $statement->bindParam(3, $Oto->getAutomaker());
        $statement->bindParam(4, $Oto->getColor());
        $statement->bindParam(5, $Oto->getAmount());
        $statement->bindParam(6, $Oto->getImage());
        $statement->bindParam(7, $Oto->getIdXuong());
        return $statement->execute();
    }


    public function update($Oto, $id)
    {
        $sql = "UPDATE Oto SET NameOto = :NameOto, Type = :Type, Automaker = :Automaker, Color = :Color,Amount = :Amount, image = :image ,IdXuong =:idXuong WHERE IdOto = $id";
        $statement = $this->database->prepare($sql);
        $statement->bindParam(':NameOto', $Oto->getNameOto());
        $statement->bindParam(':Type', $Oto->getType());
        $statement->bindParam(':Automaker', $Oto->getAutomaker());
        $statement->bindParam(':Color', $Oto->getColor());
        $statement->bindParam(':Amount', $Oto->getAmount());
        $statement->bindParam(':image', $Oto->getImage());
        $statement->bindParam(':idXuong', $Oto->getIdXuong());
//        $statement->bindParam(':idOto',$Oto->getIdOto());
        return $statement->execute();
    }


    public function get($id)
    {
        $sql = "SELECT * FROM Oto WHERE idOto = :idOto ";
        $statement = $this->database->prepare($sql);
        $statement->bindParam(':idOto', $id);
        $statement->execute();
        return $statement->fetch();
    }

//
//    public function deleteMobile($id)
//    {
//        $sql = "DELETE FROM mobile WHERE id =:id";
//        $stmt = $this->data->prepare($sql);
//        $stmt->bindParam(':id', $id);
//        $stmt->execute();
//    }


    public function delete($id)
    {
        $sql = "DELETE FROM Oto WHERE IdOto =:id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

//        $sql = "DELETE FROM CuaHang WHERE id = ?";
//        $statement = $this->database->prepare($sql);
//        $statement->bindParam(1, $id);
//        $statement->execute();



//    public function delete($id){
//        $sql = 'DELETE FROM student WHERE IdOto =:IdOto';
//        $stmt = $this->database->prepare($sql);
//        $stmt->bindParam(':id',$id);
//        $stmt->execute();
//    }


    public function getSearch($search)
    {
        $sql = "SELECT * FROM Oto inner join CuaHang on Oto.IdXuong = CuaHang.id WHERE `NameOto` LIKE '$search'";
        $stmt = $this->database->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}