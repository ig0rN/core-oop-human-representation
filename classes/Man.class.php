<?php

require_once 'config.php';

class Man extends Human {

  protected $shaving;
  protected $haircut;

  public function __construct($first_name, $last_name, $age, $hair, $height, $jmbg = null)
  {
    parent::__construct($first_name, $last_name, $age, $hair, $height, 'male', $jmbg);
  }

  public function explainYourNumberOne()
  {
     return "When you are {$this->gender}, you can stand and sit while doing this operation";
  }

  public function getDressed()
  {
    return "
          List for dressing:<br>
          Brice:{$this->setValue('shaving', 'To skin, zulphs in the spice.')}<br>
          Hairdresser:{$this->setValue('haircut', '1.5 on the side, up short with scissors.')}<br>
          ";
  }

  public function explainBiologicalDifference()
  {
    echo "Compared with woman, biological difference are the beard and adam's apple.";
  }

  public function uniqueForClass(){
    echo "I train basketball.";
  }

}
