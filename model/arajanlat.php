<?php 

class Arajanlat 
{
    public $id;
    public $nev;
    public $tipus;
    public $datum;

    public function __construct($id, $nev, $tipus, $datum)
    {
      $this->id = $id;
      $this->nev = $nev;
      $this->tipus = $tipus;
      $this->datum = $datum;
    }
  
}

?>
