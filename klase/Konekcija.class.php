<?php

class Konekcija {

  //Singlton paretn koj instancira konekciju.

  private static  $server = "mysql:host=localhost;dbname=neka_baza";
  private static  $user = "root";
  private static  $pass = "";
  private static  $konekcija = null;

  private function __construct(){}

  public static function napravi() {
      if(!self::$konekcija){
        try{

            self::$konekcija = new PDO(self::$server, self::$user, self::$pass);

          } catch (PDOExeption $e){

            die($e->getMessage());

          }
      }
      return self::$konekcija;
  }

}
