<?php 

class Rendeles 
{
    public $azonosito;
    public $nev;
    public $tipus;
    public $ar;
    public $datum;

    public function __construct($azonosito, $nev, $tipus, $ar, $datum)
    {
      $this->azonositoü = $azonosito;
      $this->nev = $nev;
      $this->tipus = $tipus;
      $this->ar = $ar;
      $this->datum = $datum;
    }
  
}

?>