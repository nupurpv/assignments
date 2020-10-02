<html>
    <body>
        <form action="" method="post">
            
			<table>
    <h1> STUDENT MARKSHEET</h1>
                    <tr>
                        <td>
                            Name of Student*:
                        </td>
                        <td>
                            <input type=text name="name">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Subject 1*:
    
                        </td>
                        <td>
                            <input type=text name="sub1">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Subject 2*:
                        </td>
                        <td>
                            <input type=text name="sub2">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Subject 3*:
                        </td>
                        <td>
                            <input type=text name="sub3">
                        </td>
                    </tr>
					<tr>
                        <td>
                            Subject 4*:
                        </td>
                        <td>
                            <input type=text name="sub4">
                        </td>
                    </tr>
					<tr>
                        <td>
                            Subject 5*:
                        </td>
                        <td>
                            <input type=text name="sub5">
							
                        </td>
						
                    </tr>
					
                </table>
                <br>
                <br>
                <input type=submit name="s" value="Submit">
            <input type=reset value=Reset>
            <?php
if(isset($_POST['s']))
{
    $p=$_POST['name']; 
    $q=$_POST['sub1']; 
    $r=$_POST['sub2']; 
    $s=$_POST['sub3'];	
	$t=$_POST['sub4'];
	$u=$_POST['sub5'];
    $total=$q+$r+$s+$t+$u; 
    $percent= $total/100*100;
    echo "<br>";
    echo "Total Marks Obtained:$total<br>"; 
    echo "Total Marks:100<br>"; 
    echo "Percentage: $percent"; 
}
            ?>
        </form>
    </body>
</html>