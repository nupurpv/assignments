<html>

<form action ='' method ='post' >
	<input type = 'number' name ='s1'><br>
	<input type = 'number' name ='s2'><br>
	<input type = 'number' name ='s3'><br>
	<input type = 'submit' value ='Enter'>
</form>

</html>

<?php
$a = $_POST['s1'];
$b = $_POST['s2'];
$c = $_POST['s3'];

if($a==$b && $b==$c)
	echo "Equilateral Triangle<br>";
else if(pow($a,2)==pow($b,2)+pow($c,2)||pow($b,2)==pow($a,2)+pow($c,2)||pow($c,2)==pow($a,2)+pow($b,2))
 {
    echo "Right Angled Triangle";
 }
 else{
	if($a==$b||$a==$c||$b==$c)
	{
		echo "Isoceles Triangle<br>";
	}
	else
		echo "Scalene Triangle<br>";
}
?>