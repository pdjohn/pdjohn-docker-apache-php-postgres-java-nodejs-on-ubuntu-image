
<?php 
// require_once 'database/dbFunctions.php';

// $data = getDbData();

$conn = pg_connect("host=postgres port=5432 dbname=devTestDB user=devuser password=devpass") or die('Db connection failed');
// $conn = pg_connect("host=localhost port=5432 dbname=devTestDB user=devuser password=devpass");
echo 'checking db conncetion....';
var_dump($conn);
if(!$conn){
    echo 'Database connection not established';
}

$result = pg_query($conn, "SELECT * FROM employee");
var_dump($result);
$data = pg_fetch_all($result);

var_dump($data);

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

    // foreach ($data as $d)
    // {
    //     echo "ID: ". $d['id'] ."<br>";
    //     echo "First Name: ". $d['firstname'] ."<br>";
    // }
    
    ?>
    
</body>
</html>