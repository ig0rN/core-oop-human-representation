<?php

class NapraviUpit {

  // klasa koja dobija prilikom instanciranja objekat koji sluzi za konekciju i zatim resava upite.
  
  protected $pdo;

  public function __construct(PDO $pdo)
  {
    $this->pdo = $pdo;
  }

  public function uzmiSve($tabela)
  {
    $upit = $this->pdo->prepare('select * from {$tabela}');

    $upit->execute();

    return $upit->fetchAll(PDO::FETCH_OBJ);
  }

  public function usnimi(string $table, array $podaci)
  {
    $str = "INSERT INTO {$table} SET ";

    foreach($podaci as $key => $podatak) {
      $str .= $key . '='.  $podatak. ', ';
    }
    $str = rtrim($str, ', ');

    $upit = $this->pdo->prepare($str);

    $upit->execute();

    header('location: www.nekaadresa.com');
  }
}
