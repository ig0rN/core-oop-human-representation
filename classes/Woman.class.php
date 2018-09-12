<?php

require_once 'config.php';

class Woman extends Human {

  protected $manicure;
  protected $pedicure;
  protected $makeup;
  protected $haircut;

  public function __construct($first_name, $last_name, $age, $hair, $height, $jmbg = null)
  {
    parent::__construct($first_name, $last_name, $age, $hair, $height, 'female', $jmbg);
  }

  public function explainYourNumberOne()
  {
     echo "When you're female, you can not stand while doing this operation";
  }

  public function getDressed()
  {
    return "
          List for dressing:<br>
          Hairdresser: {$this->setValue('haircut','2mm at the ends')}<br>
          Makeup: {$this->setValue('makeup', "Make it a little brighter, but not to look like I'm dead")}<br>
          Manicure: {$this->setValue('manicure', 'Basically I like this color of pale peach, let my nails be those colors.')}<br>
          Pedicure: {$this->setValue('pedicure', 'Let them be the same colors like my nails on hands.')}<br>
          ";
  }

  public function explainBiologicalDifference()
  {
      echo "Compared with men, biological difference are the breasts, which can be of different sizes.";
  }

  public function uniqueForClass(){
    echo "I like to go to shopping on weekends";
  }

}
