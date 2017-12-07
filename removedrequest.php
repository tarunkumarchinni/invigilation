<?php
 $date=$_GET['date'];
 $time=$_GET['time'];
 $id=$_GET['stu'];
 $invigilation=$_GET['invi'];
 $type=$_GET['type'];
 $subject=$_GET['sub'];
 $dept=$_GET['dept'];
 echo $date;
 echo $time;
 echo $id;
 echo $invigilation;
 echo $type;
 echo $subject;
 echo $dept;
  mysql_connect("localhost","root","");
   mysql_select_db("invigilation");
    $result=mysql_query("select * from invigilation_table where examdate!='$date'")or die("failed to query database".mysql_error());
    $row=mysql_fetch_assoc($result);
	//while($row=mysql_fetch_assoc($result)){
	//echo "{$row['faculty_id']}</br>";//}
	echo "<html><link rel='stylesheet' type='text/css' href='login.css'><form class='form1' action='admin3.php' method='POST'><table border='1'><tr bgcolor='green'><th>faculty id</th><th>first name</th><th>last name</th><th>email</th><th>phone no</th><th>allocate</th></tr>";
	while($row=mysql_fetch_array($result)){
	//echo "{$row['faculty_id']}</br>";
      $i=$row['faculty_id'];
	  if($row['faculty_id']!=$id){
	  $re=mysql_query("select * from faculty_details where faculty_id='$i'")or die("failed to query database".mysql_error());
      $r=mysql_fetch_assoc($re);
	if($row['faculty_id']==$i){
	echo "<tr><td>{$r['faculty_id']}</td><td>{$r['fname']}</td><td>{$r['lname']}</td><td>{$r['email']}</td><td>{$r['phone']}</td><td><a href='request2.php?stu=".$r['faculty_id']."&fac=".$id."&date=".$date."&time=".$time."&sub=".$subject."&dept=".$dept."&invi=".$invigilation."&type=".$type."'>request</a></tr>";
	
   	
	}		
	}
	}
	echo "<table></form></html>";

?>