<?php 

// $host = 'postgres';

// $user = 'devuser';

// $pass = 'devpass';

// $dbName = 'testDB';

$conn = pg_connect("host=postgres port=5432 dbname=devTestDB user=devuser password=devpass") or die("Connection failed: " . $conn->connect_error);

if(!$conn){
    echo "Somethng went wrong.";
}