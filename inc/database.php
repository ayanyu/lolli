<?php

$conn = mysqli_connect('localhost' , 'ayan1' , '123' , 'sweets');

if(mysqli_connect_errno()) {
  echo "Something went wrong" .mysqli_connect_errno();
}

?>