<?php
require_once('kontakt.php');
require_once('osoba.php');
require_once('email.php');
require_once('telefon.php');
require_once('adres.php');

    $telefon = new Telefon("504140222");
    $email = new Email("emil.hotkowski@gmail.com");
    $adres = new Adres("5", "Ulica", "Kod-pocztowy", "Warszawa");
    $osoba = new Osoba("Emil", "Hotkowski");

    $osoba->dodajKontakt($telefon);
    $osoba->dodajKontakt($email);
    $osoba->dodajKontakt($adres);

    $osoba->drukuj();
?>