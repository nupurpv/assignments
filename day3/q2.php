<?php

require("connecction.php");

$ext= " SELECT * FROM class1 WHERE name='Rohan' ";
$extract=mysqli_query($conn,$ext);

   if($row =mysqli_fetch_assoc($extract))
  { $name=$row['name'];
    $m5=$row['sub5'];
    $total=$row['total obtained'] ;
    $per=$row['percent'];

    $new_e=99;
    $new_total=$total-$m5+$new_e ;
    $new_per=  $new_total/5;
    echo  "Marksheet before updating :<br> Subject 5 = ".$m5."<br>Total Marks obtained : ".$total."<br>Percentage Obtained : ".$per." %<br>";

    $update="UPDATE `class1` SET `sub5`=$new_e, `total obtained`=$new_total, `percent`=$new_per WHERE name='Rohan'";
    if (mysqli_query($conn, $update))
    {
      echo "<br>Update done sucessfully<br><br>";
    }
    else
    {
      echo "error updating record :" .mysqli_error($conn);
    }
 }
 echo  $name." has updated marksheet:<br> Subject 5 = ".$new_e."<br>Total Marks obtained : ".$new_total."<br>Percentage Obtained : ".$new_per." %" ;

 mysqli_close($conn);

?>