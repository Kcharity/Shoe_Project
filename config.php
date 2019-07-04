<?php


$conn = mysqli_connect('localhost', 'root', '', 'Shoes_B' );


if(!$conn){

    die("connection failed".mysqli_connect_error());

}else{

   // echo"connection to the db successful";
}
?>