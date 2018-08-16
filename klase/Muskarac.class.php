<?php

require_once 'config.php';

class Muskarac extends Covek {

  protected $brijanje;
  protected $sisanje;

  public function __construct($ime, $prezime, $godine, $opisKose, $visina, $jmbg = '')
  {
    parent::__construct($ime, $prezime, $godine, $opisKose, $visina, 'muskarac', $jmbg);
  }

  public function opisiRazlikuMaleNuzde()
  {
     return "Za razliku od zena, kada si {$this->pol} mozes i da stojis i da sedis dok obavljas ovu operaciju";
  }

  public function srediSe()
  {
    return "
          Lista zadataka za sredjivanje:<br>
          Brica:{$this->podesi('brijanje', 'Brijas do koze, zulufi ravno.')}<br>
          Frizer:{$this->podesi('sisanje', '1 i po sa strane, gore kratko makazama.')}<br>


          ";
  }

  public function predstaviBioloskuRazliku()
  {
    echo "U odnosu na zene razlikujemo se u bioloskom smislu po bradi i adamovoj jabucici.";
  }

  public function jedinstvenaZaKlasu(){
    echo "ja treniram kosarku";
  }

}
