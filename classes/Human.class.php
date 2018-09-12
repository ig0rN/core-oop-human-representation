<?php

abstract class Human {


  protected $first_name;
  protected $last_name;
  protected $jmbg;
  protected $gender;
  protected $age;
  protected $height;
  protected $hair;

  //method that you must implement in extended class
  abstract public function explainYourNumberOne();
  abstract public function getDressed();
  abstract public function explainBiologicalDifference();

  /*
  This method has purpose for extended class because abstract class cannot be instanced
  */
  public function __construct($first_name, $last_name, $age, $hair, $height, $gender, $jmbg)
  {
    $this->first_name = $first_name;
    $this->last_name = $last_name;
    $this->jmbg = $jmbg;
    $this->age = $age;
    $this->hair = $hair;
    $this->height = $height;
    $this->gender = $gender;
  }

  public function introduceYourself()
  {
    echo "
     My name is:<br>
       <input type='text' value='{$this->fullName()}' disabled><br>
     Age:<br>
       <input type='text' value='{$this->checkAge()}' disabled><br>
     Gender:<br>
       <input type='text' value='{$this->showValue('gender')}' disabled><br>
     Hair:<br>
       <input type='text' value='{$this->showValue('hair')}' disabled><br>
     Height:<br>
       <input type='text' value='{$this->showValue('height', 'cm')}' disabled><br>
     JMBG:<br>
       <input type='text' value='{$this->showValue('jmbg')}' disabled><br>
    ";
  }

  /*
  All methods further serve to perform a check, set or take the value in a precisely defined form.
  Each method will return the message "unknown" if the value is never set or does not meet the conditions.
  Further, I will only explain the methods that have added logic besides simple return of values.
  */

  protected function setValue(string $field, string $value)
  {
    return $this->$field = $value;
  }

  protected function showValue($field, $additional_value = null)
  {
    $value = !is_null($this->$field) ? $this->$field : 'unknown';
    if($value == '') {
      return "I dont't want to show {$field}";
    }
    if ($additional_value) {
      $value = $value . ' ' . $additional_value;
    }
    return $value;
  }

  // The method checks which values ​​exist and on the basis of that it forms full name or informs the man that he hasn't entered all the parameters.
  private function fullName()
  {
    if(!is_null($this->first_name) && !is_null($this->last_name)){
      return $this->showValue('first_name') . ' ' . $this->showValue('last_name');
    }
    return "Unknown first name and/or last name";
  }

  // The method checks whether a person is between 18 and 63 years old, and if he has, it check second digit to know whether to throw out a "godina or "godiner".
  // This make sience just on Serbian language
  private function checkAge()
  {
    if (!is_null($this->age)) {
      if ($this->age > 18 && $this->age < 63) {

        $check = str_split($this->age);

        return $check[1] <= 4 ? $this->age . ' godine' : $this->age . ' godina';
      }
      return "You do not have enough years to participate in the survey";
    }
    return "unknown";
  }

  //method for exercise
  public function usnimi(){
    echo "Uspesno ste usnimili coveka";
  }

}
