<?php
$link =mysqli_connect("localhost","root","");

if($link === false){
    echo "connection failled";
}
echo "connect successfully";

$sql = "CREATE DATABASE demo2";

$querycheck = mysqli_query($link,$sql);

if ($querycheck){
    echo "Database created successfully";
}
else{
    echo "failled";
}

mysqli_close($link);

?>