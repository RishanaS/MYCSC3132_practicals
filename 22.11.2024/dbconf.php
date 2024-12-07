<?php
$dbHost = getenv('DB_HOST');
$dName = getenv('DB_NAME');
$dbUser = getenv('DB_USER');
$dbPass = getenv('DB_PASS');
try{
    $connect = mysqli_connect(SERVERNAME,USERNAME,PASSWORD,DBNAME);
    if(!$connect){
        die("Connection failed".mysqli_connect_error());
    }
    else{
        //echo "Connected successfully";
    }
}
catch(Exception $e){
    die($e->getMessage());
}
?>