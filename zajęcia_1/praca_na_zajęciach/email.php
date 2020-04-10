<?php 
require_once('kontakt.php');

class Email extends Kontakt
{
    public function __construct($email) {
        parent::__construct($email);
    }

}

?>