<?php

include_once __DIR__ . "/Prestito.php";

abstract class MaterialeBibliotecario implements Prestito{
    static public $contatoreMateriali =0;
    protected $annoPubblicazione;
    protected $titolo;

    public function __construct($titolo, $annoPubblicazione)
    {
        $this->titolo= $titolo;
        $this->annoPubblicazione= $annoPubblicazione;
        
    }


    function presta(){
        self::$contatoreMateriali--;

    }

    function restituisci(){
        self::$contatoreMateriali++;
    }


}