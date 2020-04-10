<?php 
require_once('kontakt.php');
class Osoba
{
    private $kontakty = array();
    private $imie;
    private $nazwisko;
    public function __construct($imie, $nazwisko)
    {
        $this->ustawImie($imie);
        $this->ustawNazwisko($nazwisko);
    }

    public function pobierzImie()
    {
        return $this->imie;
    }
    public function pobierzNazwisko()
    {
        return $this->nazwisko;
    }
        
    public function ustawPlec($plec)
    {
        $this->plec = $plec;
    }
    public function ustawImie($imie)
    {
        $this->imie = $imie;
    }
    public function ustawNazwisko($nazwisko)
    {
        $this->nazwisko = $nazwisko;
    }

    public function dodajKontakt($kontakt) {
        array_push($this->kontakty, $kontakt);
    }

    public function drukuj(){
        echo ("<p>".$this->pobierzImie()." ".$this->pobierzNazwisko()."</p>");
        echo ("<table>");
        foreach($this->kontakty as $kontakt) {
            echo ("<tr><td>".$kontakt->pobierzWartosc()."</td></tr>");
        }
        echo ("</table>");
    }
}
?>