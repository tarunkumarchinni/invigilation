<?php
   $id=$_GET['stu'];
   echo $id;
    mysql_connect("localhost","root","");
    mysql_select_db("invigilation");
   
    $result=mysql_query("select * from factime_table where fac_id='$id'")or die("failed to query database".mysql_error());
    $row=mysql_fetch_array($result);
	if($row['fac_id']==$id){
	    echo "<html><link rel='stylesheet' type='text/css' href='login.css'><center><form class='form1' action='invigilationdetails.php?stu=".$id."' method='POST'><table border='1'><tr><th>   </th><th>9:00-9:50</th><th>9:51-10:40</th><th>10:41-11:30</th><th>11:31-12:20</th><th>12:21-1:10</th><th>1:11-2:00</th><th>2:01-2:50</th><th>2:51-3:40</th></tr>".
		"<center><h1>TIME TABLE</h1></center>".
		"<tr><th>MON</th><td>{$row['mon1']}</td><td>{$row['mon2']}</td><td>{$row['mon3']}</td><td>{$row['mon4']}</td><td>{$row['mon5']}</td><td>{$row['mon6']}</td><td>{$row['mon7']}</td><td>{$row['mon8']}</td></tr>".
		"<tr><th>TUE</th><td>{$row['tue1']}</td><td>{$row['tue2']}</td><td>{$row['tue3']}</td><td>{$row['tue4']}</td><td>{$row['tue5']}</td><td>{$row['tue6']}</td><td>{$row['tue7']}</td><td>{$row['tue8']}</td></tr>".
		"<tr><th>WED</th><td>{$row['wed1']}</td><td>{$row['wed2']}</td><td>{$row['wed3']}</td><td>{$row['wed4']}</td><td>{$row['wed5']}</td><td>{$row['wed6']}</td><td>{$row['wed7']}</td><td>{$row['wed8']}</td></tr>".
		"<tr><th>THU</th><td>{$row['thu1']}</td><td>{$row['thu2']}</td><td>{$row['thu3']}</td><td>{$row['thu4']}</td><td>{$row['thu5']}</td><td>{$row['thu6']}</td><td>{$row['thu7']}</td><td>{$row['thu8']}</td></tr>".
		"<tr><th>FRI</th><td>{$row['fri1']}</td><td>{$row['fri2']}</td><td>{$row['fri3']}</td><td>{$row['fri4']}</td><td>{$row['fri5']}</td><td>{$row['fri6']}</td><td>{$row['fri7']}</td><td>{$row['fri8']}</td></tr>".
		"<tr><th>SAT</th><td>{$row['sat1']}</td><td>{$row['sat2']}</td><td>{$row['sat3']}</td><td>{$row['sat4']}</td><td>{$row['sat5']}</td><td>{$row['sat6']}</td><td>{$row['sat7']}</td><td>{$row['sat8']}</td></tr>".
		"</table></br><center><button type='submit'>NEXT..</button></center></form></html>";
	
	
	}
	else{
	 echo "failed";
	}
	
	
	
?>