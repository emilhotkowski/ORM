<?php 
require_once('kontakt.php');

class Adres extends Kontakt
{
    public function __construct($numerDomu, $nazwaUlicy, $kodPocztowy, $miejscowosc) {
        parent::__construct($nazwaUlicy." ".$numerDomu."\n".$miejscowosc." ".$kodPocztowy);
    }

}

?>