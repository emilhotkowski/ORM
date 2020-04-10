<?php

class Samochod {

    private $pdo;
    private $marka;
    private $model;
    private $rok;
    private $cena;
    private $waga;
    private $silnik;

    public function __construct($marka, $model, $rok, $cena, $waga, $silnik) {
        $this->marka = $marka;
        $this->model = $model;
        $this->rok = $rok;
        $this->cena = $cena;
        $this->waga = $waga;
        $this->silnik = $silnik;
        $this->pdo = new PDO('mysql:host=localhost;dbname=test', 'root', '');
    }

    public function zapisz() {
        $stmt = $this->pdo->prepare("INSERT INTO samochody (marka, model, rok, cena, waga, silnik) VALUES (:marka, :model, :rok, :cena, :waga, :silnik)");
	    $wynik = $stmt->execute([
            'marka' => $this->marka, 
            'model' => $this->model,
            'rok' => $this->rok,
            'cena' => $this->cena,
            'waga' => $this->waga,
            'silnik' => $this->silnik
        ]);

        return $wynik;
    }

}