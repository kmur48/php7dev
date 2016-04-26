<?php
/**
 * Author: Carlos Mourullo (carlosmourullo@gmail.com)
 * Date: 26/04/2016
 */

// Autoload function
spl_autoload_register(function($className) {
    $path = dirname(__FILE__)."/library/$className.php";
    if(file_exists($path)) {
        require_once $path;
    } else {
        throw new Exception('Requested operation is incorrect.', 2);
    }
});

// Create operation examples
$queryOperations[] = array(5, 'Plus', 3);
$queryOperations[] = array(5, 'Minus', 3);
$queryOperations[] = array(2, 'Times', 8);
$queryOperations[] = array(8, 'Divide', 2);

// Create the Operation Handler
$operationHandler = new OperationHandler();

// Obtain the operation result
foreach ($queryOperations as $queryOperation){
    echo '<pre>';
    echo $operationHandler->doOperation($queryOperation);
    echo '</pre>';
}


