<?php
$s=$_GET['date'];
 $id=$_GET['stu'];
 echo $s;
 echo $id;
echo "<link rel='stylesheet' type='text/css' href='login.css'><form class='form' action='invigilationdetails.php?stu=".$id."&date=".$s."' method='POST'>".
	"<button><a href='invigilationdetails.php?stu=".$id."&date=".$s."' target='_blank'>click to move to the invigilation list</a></button>".
         "</br></br><a href='requestreceived.php?stu=".$id."&date=".$s."'>go back to check requests</a></br></br></form>";
		   

?>