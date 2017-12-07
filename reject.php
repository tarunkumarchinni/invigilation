<?php
$s=$_GET['date'];
 $id=$_GET['stu'];
 echo $s;
 echo $id;
  mysql_connect("localhost","root","");
   mysql_select_db("invigilation");
    $result=mysql_query("delete from invigilation_table where examdate='$s' and faculty_id='$id'")or die("failed to query database".mysql_error());
    
	//$sql="INSERT INTO invigilation_table(examtype,examtime,subject,dept,invigilation_room,examdate,indexid,faculty_id)VALUES('$type','$time','$subject','$dept','$invigilation','$date','NULL','$id')";
    //$res=mysql_query($sql);

	if(!$result){
		echo "your data not rejectted..";
	}
	else{
		echo "your data successfully rejectted..";
		echo "<html><link rel='stylesheet' type='text/css' href='login.css'><form class='form'>".
	"<a href='invigilationdetails.php?stu=".$id."&date=".$s."' target='_blank'><h4>click to move to invigilations list</h4></a>".
         "</form></html>";
		//include("end.html");
		
		
	}


?>