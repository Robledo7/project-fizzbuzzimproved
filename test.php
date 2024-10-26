<?php

include_once 'FizzBuzzImproved.php'; 

$newList = new FizzBuzz();
/**$newList->list(15);
/**var_dump($newList->list(15));*/
/**otra forma sería con un FOR */
echo json_encode($newList->list(15));
?>