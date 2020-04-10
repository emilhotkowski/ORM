<?php 

class Kontakt
{
    private $wartosc;

    public function __construct($wartosc) {
        $this->wartosc = $wartosc;
    }
    
    public function pobierzWartosc() {
        return $this->wartosc;
    }
    
}

?>