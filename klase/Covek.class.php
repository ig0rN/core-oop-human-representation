<?php

abstract class Covek {


  protected $ime;
  protected $prezime;
  protected $jmbg;
  protected $pol;
  protected $godine;
  protected $visina;
  protected $opisKose;

  //metode koje se moraju koristiti u klasi koja nasledi ovu
  abstract public function opisiRazlikuMaleNuzde();
  abstract public function srediSe();
  abstract public function predstaviBioloskuRazliku();

  /*
  Ova metoda sluzi samo za nasledjivanje s obzirom da apstraktna klasa ne moze da se instancira
 */
  public function __construct($ime, $prezime, $godine, $opisKose, $visina, $pol, $jmbg)
  {
    $this->ime = $ime;
    $this->prezime = $prezime;
    $this->jmbg = $jmbg;
    $this->godine = $godine;
    $this->opisKose = $opisKose;
    $this->visina = $visina;
    $this->pol = $pol;
  }

  public function predstaviSe()
  {
    echo "
     Vase ime i prezime:<br>
       <input type='text' value='{$this->ime()}' disabled><br>
     Godine:<br>
       <input type='text' value='{$this->proveriGodine()}' disabled><br>
     Pol:<br>
       <input type='text' value='{$this->prikazi('pol')}' disabled><br>
     Kosa:<br>
       <input type='text' value='{$this->prikazi('opisKose')}' disabled><br>
     Visina:<br>
       <input type='text' value='{$this->prikazi('visina', 'cm')}' disabled><br>
     JMBG:<br>
       <input type='text' value='{$this->prikazi('jmbg')}' disabled><br>
    ";
  }

  /*
  Sve metode nadalje sluze da odrade neku proveru i podese ili preuzmu vrednost u tacno odredjenoj formi.
  Svaka metoda ce vratiti poruku "nepoznato" ukoliko vrednost nikad nije postavljena ili ne odgovara uslovima.
  Nadalje cu samo objasnjavati metode koje imaju dodatu logiku osim prostog vracanja vrednosti.
  */

  protected function podesi($polje, $vrednost)
  {
    return $this->$polje = $vrednost;
  }

  protected function prikazi($polje, $dodatna_vrednost = null)
  {
    $vrednost = !is_null($this->$polje) ? $this->$polje : 'nepoznato';
    if($vrednost == '') {
      return "Ne zelim da prikazem {$polje}";
    }
    if ($dodatna_vrednost) {
      $vrednost = $vrednost . ' ' . $dodatna_vrednost;
    }
    return $vrednost;
  }

  // Metoda proverava koje vrednosti postoje i na osnovu toga formira ime i prezime ili obavestava coveka da nije uneo sve parametre.
  private function ime()
  {
    if(!is_null($this->ime) && !is_null($this->prezime)){
      return $this->prikazi('ime') . ' ' . $this->prikazi('prezime');
    }
    return "Nepoznato ime i/ili prezime";
  }

  // Metoda proverava da li osoba ima izmedju 18 i 63 godina i ako ima radi proveru koje je druga cifra da bi znala da li da izbaci "godine" ili "godina".
  private function proveriGodine()
  {
    if (!is_null($this->godine)) {
      if ($this->godine > 18 && $this->godine < 63) {

        $provera = str_split($this->godine);

        return $provera[1] <= 4 ? $this->godine . ' godine' : $this->godine . ' godina';
      }
      return "Nemate odgovarajuci broj godina da ucestvujete u anketi";
    }
    return "nepoznato";
  }

  //funkcija samo za ovu vezbu
  public function usnimi(){
    echo "Uspesno ste usnimili coveka";
  }

}
