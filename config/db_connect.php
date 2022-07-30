<?php

//connect to databse
//username:austin  password:Ac123456
$conn = mysqli_connect('localhost','austin','Ac123456','ninja_pizza');
//check connection
if(!$conn){
    echo 'Connection error: ' . mysqli_connect_error();
}
?>