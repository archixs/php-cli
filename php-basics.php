<?php

echo "This is my first CLI in PHP";


// izveido ciklu lai izvaditu skaitlus no 1-10

$x = 1;
echo("\n");
while ($x <= 10) {
  echo "$x \n";
  $x++;
}

// izveido ciklu lai izvaditu skaitlus no 10-1

$x = 10;

while ($x == 1) {
  echo "$x \n";
  $x--;
}

//asociativs masivs kura ir dati ar 3 personam (vards, vecums)
//ar ciklu izvadit visus datus 
//"Vārds: Jānis, Vecums: 19".

$cilveki = [
    "Vārds"=> "Jānis", "Vecums" => 19,
    "Vārds"=> "Niks", "Vecums" => 2,
    "Vārds"=> "Kristaps", "Vecums" => 5
]
?>