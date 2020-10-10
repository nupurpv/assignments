<?php

$conn = mysqli_connect("localhost","root","") or die(mysqli_connect_error());
mysqli_select_db($conn,"results") or die(mysqli_error($conn));

echo "Connected!! <br>";
?>