<?php 
require_once 'database/dbFunctions.php';

$data = getDbData();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test-ubuntu-php-pgsql</title>
</head>
<body>
    <h1>Its Working php ubuntu</h1>

    <?php

    foreach ($data as $d)
    {
        echo "ID: ". $d['id'] ."<br>";
        echo "First Name: ". $d['firstname'] ."<br>";
    }
    
    ?>
    
</body>
</html>