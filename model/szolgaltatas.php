<?php 

class Szolgaltatas
{
    public $azonosito;
    public $nev;
    public $tipus;
    public $ar;

    public function __construct($azonosito, $nev, $tipus, $ar)

    {
        $this->azonosito = $azonosito;
        $this->nev = $nev;
        $this->tipus = $tipus;
        $this->ar = $ar;
    }

}

?>