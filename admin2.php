<?php
 $date=$_POST['edate'];
 $time=$_POST['etime'];
 echo $date;
 echo $time;
  mysql_connect("localhost","root","");
   mysql_select_db("invigilation");
    $result=mysql_query("select * from invigilation_table where examdate!='$date'")or die("failed to query database".mysql_error());
   // $row=mysql_fetch_assoc($result);
	
	/*while($row=mysql_fetch_assoc($result)){
	echo "{$row['faculty_id']}</br>";}*/
	echo "<html><link rel='stylesheet' type='text/css' href='login.css'><form class='form1' action='admin3.php' method='POST'><table border='1'><tr bgcolor='green'><th>faculty id</th><th>first name</th><th>last name</th><th>email</th><th>phone no</th><th>allocate</th></tr>";
	while($row=mysql_fetch_assoc($result)){
		$i=$row['faculty_id'];
	//echo "{$row['faculty_id']}</br>";
      
	 $re=mysql_query("select * from faculty_details where faculty_id='$i'")or die("failed to query database".mysql_error());
      $r=mysql_fetch_assoc($re);
	if($row['faculty_id']==$i){
	echo "<tr><td>{$r['faculty_id']}</td><td>{$r['fname']}</td><td>{$r['lname']}</td><td>{$r['email']}</td><td>{$r['phone']}</td><td><a href='admin3.php?fac=".$r['faculty_id']."'>allocate</a></tr>";
	
   	
	}		
	}
	echo "<table></form></html>";

?>