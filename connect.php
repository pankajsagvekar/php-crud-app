<?php
$con = new mysqli('localhost', 'root', '', 'crudoperations', '3306');

if(!$con){
    die(mysqli_error($con));
}
?>