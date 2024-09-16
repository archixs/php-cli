<?php

$stackList = ["first task", "second task"];

function showAllTasks($inputTasks) {
    foreach($inputTasks as $task) {
      echo $task . "\n"
    }
}

$name = readline("Ievadiet vardu!\n");
echo "Your name is $name";

// PIRMAIS IZDEVUMS 
// DO WHILE CIKLS

do {
    echo "Number: $x \n";
    $x++;
  } while ($x <= 5);


// DO WHILE CIKLS KURU APSTADINA IEVADOT "NNNNNNNNNNN"

do {
    echo "Uzdevumu pārvaldnieks\n";
    echo "Ievadīt jaunu uzdevumu => 1\n";
    echo "Apskatit uzdevumu => 2\n";
    echo "Apskatīt uzdevumu => 3\n"

    $choice = readline("Izēlies darbību");
    

    switch ($choice) {
        case '1':
          echo showAllTasks
          break;
        case '2':
          echo 'To be implemented!\n';
          break;
        case '3':
          echo 'To be implemented!\n';
          break;
        default:
          echo 'To be implemented!\n';
      }
      
      
  } while ($continue != "N");

?>