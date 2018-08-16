<?php

require_once 'config.php';

class Zena extends Covek {

  protected $manikir;
  protected $pedikir;
  protected $sminka;
  protected $sisanje;

  public function __construct($ime, $prezime, $godine, $opisKose, $visina, $jmbg = '')
  {
    parent::__construct($ime, $prezime, $godine, $opisKose, $visina, 'zena', $jmbg);
  }

  public function opisiRazlikuMaleNuzde()
  {
     echo "Za razliku od muskaraca, kada si {$this->pol} nazalost ne mozes da stojis dok obavljas ovu operaciju";
  }

  public function srediSe()
  {
    return "
          Lista zadataka za sredjivanje:<br>
          Frizer: {$this->podesi('sisanje','2mm po krajevima')}<br>
          Sminkanje: {$this->podesi('sminka', 'Neka bude malo svetlije, ali ne da izgledam kao da sam umrla')}<br>
          Manikir: {$this->podesi('manikir', 'Bas mi se svidja ova boja bleda breskva, neka mi nokti budu te boje.')}<br>
          Pedikir: {$this->podesi('pedikir', 'A kad su mi nokti na tukama te boje, neka budu i na nogama')}<br>
          ";
  }

  public function predstaviBioloskuRazliku()
  {
      echo "U odnosu na muskarce razlikujemo se u bioloskom smislu po grudima koje mogu biti razlicite velicine.";
  }

  public function jedinstvenaZaKlasu(){
    echo "vikendom volim da idem u soping";
  }

}
