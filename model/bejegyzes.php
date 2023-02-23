<?php

class Bejegyzes
{
  public $id;
  public $nev;
  public $tartalom;
  public $datum;

  public function __construct($id, $nev, $tartalom, $datum)

  {
      $this->id = $id;
      $this->nev = $nev;
      $this->tartalom = $tartalom;
      $this->datum = $datum;

  }
}

?>
