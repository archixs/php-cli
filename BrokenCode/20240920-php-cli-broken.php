<?php
$person = new Person;
$choise ='';
$message ='';


class Person {
    public function walk(){ 
        echo "******Tralalala**************\n";
    }
}


function generate($from, $to){
    if($from>$to ){
        return;
    }
    for ($i=$from; $i <= $to; $i++) { 
        echo $i . "\n";
    }
}


do {
    echo "Choose your action:\n";
    echo "Let person walk: 1\n";
    echo "Say message: 2\n";
    echo "Generate numbers between n to m: 3\n";
    echo "Type 'Exit' to quit.\n";

    $choice = readline();


    switch ($choice) {
        case '1':
            $person->walk();
            break;
        case '2':
            $message = readline("Enter: "); 
            echo "$message";
            break;
        case '3':
            $from = readline("Enter number which start: ");
            $to = readline("Enter number which end: ");
            generate($from, $to);
            break;
        case 'Exit':
            $choice = 'Exit';
            break;
        default:
            echo "Invalid choice. Please try again.\n";
    }
} while ($choice !== 'Exit');
