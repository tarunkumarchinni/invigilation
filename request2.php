<?php
$date=$_GET['dat'];
 $time=$_GET['tim'];
 $id=$_GET['stu'];
 $invigilation=$_GET['invi'];
 $type=$_GET['type'];
 $subject=$_GET['sub'];
 $dept=$_GET['dept'];
 $faculty=$_GET['fac'];
 echo $date;
 echo $time;
 echo $id;
 echo $invigilation;
 echo $type;
 echo $subject;
 echo $dept;
echo $faculty;
  mysql_connect("localhost","root","");
   mysql_select_db("invigilation");
    $result=mysql_query("delete from invigilation_table where examdate='$date' and faculty_id='$id'")or die("failed to query database".mysql_error());
    
	$sql="INSERT INTO invigilation_table(examtype,examtime,subject,dept,invigilation_room,examdate,indexid,faculty_id,refered_fac_id)VALUES('$type','$time','$subject','$dept','$invigilation','$date','NULL','$faculty','$id')";
    $res=mysql_query($sql);

	if(!$res){
		echo "your data not entered correctly..";
	}
	else{
		echo "your data entered successfully..";
		include("end.html");
		
		
	}

?>