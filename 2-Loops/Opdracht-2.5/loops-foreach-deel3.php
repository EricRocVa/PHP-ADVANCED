<?php
$students = [
  'voornaam'   =>"Simon",
  'achternaam' =>"sprinter",
  'klas'       =>"1A",
  'Leeftijd'   =>18,
  'Woonplaats' =>"Amsterdam"
];
foreach($students as $key => $value){
    echo $key . ": " . $value . "<br>";
}