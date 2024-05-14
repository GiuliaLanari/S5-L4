<?php

include_once __DIR__ . "/MaterialeBibliotecario.php";

class Dvd extends MaterialeBibliotecario{
    protected $registra;
    static public $contatoreDVD;

    public function __construct($titolo, $registra, $annoPubblicazione ){
      parent::__construct($titolo,$annoPubblicazione);
      $this->registra=$registra;
    }

    

    static public function contaDvd() {
        return self::$contatoreDVD;
    }
}