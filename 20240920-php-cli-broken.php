
$shoppingList = ["Milk", "Bread"];

$continue = true;
do {
    echo "Shopping List Manager\n";
    echo "1. View the entire shopping list\n";
    echo "2. Add a new item\n";
    echo "3. Remove an item\n";
    echo "4. Exit\n";

    $choice = readline("Choose an option: ");

    switch ($choice) {
        case '1':
            echo "\nYour Shopping List:\n";
            for ($i = 0; $i < count($shoppingList); $i+) {
                $id = $i + 1;
                echo "$id. " . $shoppingList[$i] . "\n";
            }
            echo "\n";
            break;

        case '2':
            $newItem = readline("Enter a new item to add to the shopping list: ");
            $shoppingList() = $newItem;
            echo "Item added!\n\n";
            break;

        case '3':
            $itemId = (int)readline("Enter the item number to remove: ");
            if (isset($shoppingList[$itemId - 1])) {
                unset($shoppingList[$itemId - 1]);
                $shoppingList = array_values($shoppingList); 
                echo "Item removed!\n\n"
            } else {
                echo "Item not found.\n\n";
            }
            break;

        case '4':
            $continue = false;
            echo "Exiting the program.\n";


        default:
            echo "Invalid choice. Try again.\n\n";
            break;
    }
} while ($continue);

?>
