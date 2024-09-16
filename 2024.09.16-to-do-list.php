<?php

$taskList = ["izpildit md", "aiziet gulet laicigi"];

$continue = 'y';
do {
    echo "Uzdevumu pārvaldnieks\n";
    echo "Izvadit visu uzdevumu sarakstu => 1\n";
    echo "Ievadīt jaunu uzdevumu => 2\n";
    echo "Apskatīt vienu uzdevumu => 3\n";
    echo "Iziet => 4\n";

    $choice = readline("Izēlies darbību: ");

    switch($choice) {
        case '1':
            // foreach($taskList as $task) {
            //     echo ""
            // }

            echo "\n";
            for($i = 0; $i < count($taskList); $i++) {
                $id = $i + 1;
                echo "$id" . "$taskList[$i] \n";

            }
            echo "\n\n";
            break;
          case '2':
            echo 'To be implemented!\n';
            break;
          case '3':
            echo 'To be implemented!\n';
            break;
          case '4':
              $continue = null;

          default:
            echo 'To be implemented!\n';
            break;
    }
}

while ($continue == 'y')
?>