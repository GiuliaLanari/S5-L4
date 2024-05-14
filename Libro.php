<?php

include_once __DIR__ . "/MaterialeBibliotecario.php";

class Libro extends MaterialeBibliotecario{
    protected $autore;
    static public $contatoreLibri;
    
    public function __construct($titolo, $autore, $annoPubblicazione ){
        parent::__construct($titolo,$annoPubblicazione);
        $this->autore=$autore;
      }

    static public function contaLibri() {
        return self::$contatoreLibri;
    }
}