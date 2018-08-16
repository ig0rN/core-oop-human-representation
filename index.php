<?php

require_once 'config.php';

$saska = new Zena('Saska', 'Petrovic', '17', 'dugacka', '171', '1908993683512');
$saska->predstaviSe();
echo $saska->srediSe();
echo $saska->opisiRazlikuMaleNuzde();
$saska->predstaviBioloskuRazliku();

echo "<br><br>";

$marko = new Muskarac('Marko', 'Nikolic', '23', 'kratka', '193', null);
$marko->predstaviSe();
echo $marko->srediSe();
echo $marko->predstaviBioloskuRazliku("bradi", "adamovoj jabucici");
$marko->predstaviBioloskuRazliku('bradi', 'adamovoj jabucici');
// snimanje coveka u bazu
//
// $konekcija = Konekcija::napravi();
// $upit = new NapraviUpit($konekcija);
// $upis->usnimi([
//  'ime_prezime' => $this->ime(),
//  'jmbg' => $this->prikazi('jmbg'),
//  'godine' => $this->prikazi('godine'),
//  'kosa' => $this->prikazi('opisKose'),
//  'visina' => $this->prikazi('visina'),
//  'pol' => $this->prikazi('pol')
// ]);
//
// za vezbu cu da koristim funkciju koja ce samo ispisati string, a produkciono snimanje u bazu se nalazi iznad.
//
echo "<br><br>";

$marko->usnimi();
