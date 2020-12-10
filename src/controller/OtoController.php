<?php

namespace App\controller;

use App\model\Cuahang;
use App\model\CuahangModel;
use App\model\Oto;
use App\model\OtoModel;

class OtoController
{

    protected $Otocontroller;
    protected $cuahangController;

    public function __construct()
    {
        $this->Otocontroller = new OtoModel();
        $this->cuahangController = new CuahangModel();
    }

    public function show()
    {
        $Oto = $this->Otocontroller->getAll();
        include_once "src/view/list.php";
    }


    public function addOto()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
//            $cuahang = $this->Otocontroller->CuaHangAll();
            include 'src/view/add.php';

        } else {
            $NameOto = $_REQUEST['NameOto'];
            $Type = $_REQUEST['Type'];
            $Automaker = $_REQUEST['Automaker'];
            $Color = $_REQUEST['Color'];
            $Amount = $_REQUEST['Amount'];
            $image = $_FILES['image']['name'];
            $img_tmp = $_FILES['image']['tmp_name'];
            $idXuong = $_REQUEST['idXuong'];
//            $Name = $_REQUEST['Name'];
//            $Address = $_REQUEST['Address'];

            move_uploaded_file($img_tmp, 'img/' . $image);
            $customer = new Oto($NameOto, $Type, $Automaker, $Color, $Amount, $image, $idXuong);
            $this->Otocontroller->addOto($customer);

            // $customer1 = new Cuahang($Name, $Address);
            // $this->cuahangController->addCuaHang($customer);
            header('location: index.php');

        }

    }


    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {

            $id = $_REQUEST['id'];
            $oto = $this->Otocontroller->get($id);
//            $cuahang = $this->Otocontroller->CuaHangAll();
            include 'src/view/edit.php';
        } else {
            $idOto = $_REQUEST['id'];
            $NameOto = $_REQUEST['NameOto'];
            $Type = $_REQUEST['Type'];
            $Automaker = $_REQUEST['Automaker'];
            $Color = $_REQUEST['Color'];
            $Amount = $_REQUEST['Amount'];
            $image = $_FILES['image']['name'];
            $img_tmp = $_FILES['image']['tmp_name'];
            $idXuong = $_REQUEST['idXuong'];
            move_uploaded_file($img_tmp, 'img/' . $image);
            $oto = new Oto($NameOto, $Type, $Automaker, $Color, $Amount, $image, $idXuong);

//            $oto->setIdOto($idOto);

            $this->Otocontroller->update($oto,$idOto);
            header('location: index.php');

        }
    }



    public function delete()
    {

            $id = $_REQUEST['id'];
            $this->Otocontroller->delete($id);
            header('location:index.php');
    }


//    public function delete($id)
//    {
//        if ($_REQUEST['id']){
//            $this->bigs->deleteMobile($id);
//        }
//        header('location: index.php?page=home');
//    }

//    public function delete(){
//        $id = $_REQUEST['id'];
//        $this->Otocontroller->delete($id);
//        header('location:index.php');
//    }



    public function search()
    {
        $search = '%'. $_REQUEST['search'] . '%';
        $Oto = $this->Otocontroller->getSearch($search);
        include "src/view/search.php";
    }

}
