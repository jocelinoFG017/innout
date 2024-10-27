<?php
ini_set('display_errors', 1);
require_once(dirname(__FILE__, 2) . '/src/config/database.php');

$sql = 'SELECT * from users';
$result = Database::getResultFromQuery($sql);

// Database::getConnection();

while($row = $result->fetch_assoc()){
    print_r($row);
    echo '<br>';
    

}