<?php

class Categorie{
    private $cin;
    private $type; //hotel /client normal /societe
   

    public function __construct($cin,$type)
    {
        $this->cin = $cin;
        $this->type= $type;
      

    }
    public function getcin()
    {
        return $this->cin;
    }
    public function setcin($cin)
    {
        $this->cin= $cin;
    }
    public function gettype()
    {
        return $this->type;
    }
    public function settype($type)
    {
        $this->type = $type;
    }
  

}
?>