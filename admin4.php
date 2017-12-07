<?php
$s=$_GET['fac'];
echo $s;
$date=$_GET['dat'];
 $time=$_POST['etime'];
 
 $invigilation=$_POST['room'];
 $type=$_POST['type'];
 $subject=$_POST['sub'];
 $dept=$_POST['dept'];
 echo $date;
 echo $time;
 
 echo $invigilation;
 echo $type;
 echo $subject;
 echo $dept;
  mysql_connect("localhost","root","");
   mysql_select_db("invigilation");
   if(empty($s) or empty($time)or empty($date) or empty($invigilation) or empty($type) or empty($subject) or empty($dept)){
		echo "your data not entered correctly..";
	}
   else{
	$sql="INSERT INTO invigilation_table(examtype,examtime,subject,dept,invigilation_room,examdate,indexid,faculty_id,refered_fac_id)VALUES('$type','$time','$subject','$dept','$invigilation','$date','NULL','$s','admin')";
    $res=mysql_query($sql);

	if(!$res){
		echo "your data not entered correctly..";
	}
	else{
		echo "your data entered successfully..".
		"<html><link rel='stylesheet' type='text/css' href='login.css'><form class='form' action='end.html' method='POST'><center><a href='admin1.php' target='_SELF'>go back to assighn invigilation</a></center></br><center>or</center></br><center><input type='submit' name='s1' value='logout'/></center></form></html>";
		
		
	}
	}
?>
