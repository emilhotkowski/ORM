<?php 
require_once('kontakt.php');

class Telefon extends Kontakt
{
    public function __construct($numerTelefonu) {
        parent::__construct($numerTelefonu);
    }

}

?>