<?php
$server="localhost:3306";
$con=mysqli_connect($server,"root","","userdb");
if(mysqli_connect_errno())
{
    echo "Failed to connect to MYSQL: ". mysqli_connect_error();
}
?>