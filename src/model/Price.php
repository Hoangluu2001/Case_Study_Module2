<?php


namespace App\model;


class Price
{
    protected $idPrice;
    protected $PriceOto	;



    public function __construct($idPrice,$PriceOto)
    {
        $this->idPrice=$idPrice;
        $this->PriceOto=$PriceOto;
    }

    /**
     * @return mixed
     */
    public function getIdPrice()
    {
        return $this->idPrice;
    }

    /**
     * @param mixed $idPrice
     */
    public function setIdPrice($idPrice): void
    {
        $this->idPrice = $idPrice;
    }

    /**
     * @return mixed
     */
    public function getPriceOto()
    {
        return $this->PriceOto;
    }

    /**
     * @param mixed $PriceOto
     */
    public function setPriceOto($PriceOto): void
    {
        $this->PriceOto = $PriceOto;
    }


}