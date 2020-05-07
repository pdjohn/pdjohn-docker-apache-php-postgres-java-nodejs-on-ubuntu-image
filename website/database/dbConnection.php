<?php 

// $host = 'postgres';

// $user = 'devuser';

// $pass = 'devpass';

// $dbName = 'testDB';

$conn = pg_connect("host=postgres port=5432 dbname=devTestDB user=devuser password=devpass");

if(!$conn){
    echo "Database connection went wrong.";
}