<?php

require_once 'dbConnection.php';

function getDbData(){

    global $conn;
    
    $result = pg_query($conn, "SELECT * FROM employee");
    $res = pg_fetch_all($result);
    
    return $res;
}
