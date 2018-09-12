<?php

require_once 'config.php';

$saska = new Woman('Saska', 'Petrovic', '17', 'long', '171', 1908993683512);
$saska->introduceYourself();echo "<br>";
echo $saska->getDressed();echo "<br>";
echo $saska->explainYourNumberOne();echo "<br>";
$saska->explainBiologicalDifference();echo "<br>";

echo "<br><br>";

$marko = new Man('Marko', 'Nikolic', '23', 'short', '193');
$marko->introduceYourself();echo "<br>";
echo $marko->getDressed();echo "<br>";
echo $marko->explainYourNumberOne();echo "<br>";
$marko->explainBiologicalDifference();echo "<br>";
// saving human in DB
//
// $conn = Connection::make();
// $query = new QueryBilder($conn);
// $query->save('human', [
//  'full_name' => $this->fullName(),
//  'jmbg' => $this->showValue('jmbg'),
//  'age' => $this->checkAge(),
//  'hair' => $this->showValue('hair'),
//  'height' => $this->showValue('height'),
//  'gender' => $this->showValue('gender')
// ]);
//
// For exercise, I will use a method that will only print a string, and recording in the database is above.
//
echo "<br><br>";

$marko->usnimi();
