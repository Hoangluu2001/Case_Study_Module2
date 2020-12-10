<?php


namespace App\model;


class Oto
{

    protected $idOto;
    protected $NameOto;
    protected $Type;
    protected $Automaker;
    protected $Color;
    protected  $Amount;
    protected $image;
    protected $idXuong;

    public function __construct($NameOto,$Type,$Automaker,$Color,$Amount,$image,$idXuong)
    {
//        $this->idOto=$idOto;
        $this->NameOto=$NameOto;
        $this->Type=$Type;
        $this->Automaker=$Automaker;
        $this->Color=$Color;
        $this->Amount=$Amount;
        $this->image=$image;
        $this->idXuong=$idXuong;
    }

    /**
     * @return mixed
     */
    public function getIdOto()
    {
        return $this->idOto;
    }

    /**
     * @param mixed $idOto
     */
    public function setIdOto($idOto): void
    {
        $this->idOto = $idOto;
    }

    /**
     * @return mixed
     */
    public function getNameOto()
    {
        return $this->NameOto;
    }

    /**
     * @param mixed $NameOto
     */
    public function setNameOto($NameOto): void
    {
        $this->NameOto = $NameOto;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * @param mixed $Type
     */
    public function setType($Type): void
    {
        $this->Type = $Type;
    }

    /**
     * @return mixed
     */
    public function getAutomaker()
    {
        return $this->Automaker;
    }

    /**
     * @param mixed $Automaker
     */
    public function setAutomarker($Automaker): void
    {
        $this->Automaker = $Automaker;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->Color;
    }

    /**
     * @param mixed $Color
     */
    public function setColor($Color): void
    {
        $this->Color = $Color;
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->Amount;
    }

    /**
     * @param mixed $Amount
     */
    public function setAmount($Amount): void
    {
        $this->Amount = $Amount;
    }

    /**
     * @return mixed
     */
    public function getIdXuong()
    {
        return $this->idXuong;
    }

    /**
     * @param mixed $idXuong
     */
    public function setIdXuong($idXuong): void
    {
        $this->idXuong = $idXuong;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image): void
    {
        $this->image = $image;
    }


}