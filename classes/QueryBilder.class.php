<?php

class QueryBilder {

  // klasa koja dobija prilikom instanciranja objekat koji sluzi za konekciju i zatim resava upite.

  protected $pdo;

  public function __construct(PDO $pdo)
  {
    $this->pdo = $pdo;
  }

  public function fetchAll($table)
  {
    $query = $this->pdo->prepare("select * from {$table}");

    $query->execute();

    return $query->fetchAll(PDO::FETCH_OBJ);
  }

  public function save(string $table, array $podaci)
  {
    $str = "INSERT INTO {$table} SET ";

    foreach($podaci as $key => $podatak) {
      $str .= $key . '='.  $podatak. ', ';
    }
    $str = rtrim($str, ', ');

    $query = $this->pdo->prepare($str);

    $query->execute();

    header('location: www.someadress.com');
  }
}
