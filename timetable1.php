<?php
   $id=$_GET['stu'];
   echo $id;
    mysql_connect("localhost","root","");
    mysql_select_db("invigilation");
   
    $result=mysql_query("select * from ptimetable where faculty_id='$id'")or die("failed to query database".mysql_error());
    $row=mysql_fetch_array($result);
	 echo "sucess";
	  echo "<html><link rel='stylesheet' type='text/css' href='login.css'><center><form class='form1' action='count.php?stu=".$id."' method='POST'>".
		"<center><h1>TIME TABLE</h1></center>".
    "<table border='1'><tr><th>day</th><th>9:00</th><th>9:50</th><th>10:40</th><th>11:30</th><th>12:20</th><th>1:10</th><th>2:00</th><th>2:50</th></tr>";
	if($row['faculty_id']==$id){
		
    
   
	
	
	echo "<tr><h3><th>MON</th></h3><td>{$row['9:00']}</td><td>{$row['9:50']}</td><td>{$row['10:40']}</td><td>{$row['11:30']}</td><td>{$row['12:20']}</td><td>{$row['1:10']}</td><td>{$row['2:00']}</td><td>{$row['2:50']}</td></tr>";
    $r1=mysql_fetch_array($result);
	echo "<tr><h3><th>TUE</th> </h3><td>{$r1['9:00']}</td><td>{$r1['9:50']}</td><td>{$r1['10:40']}</td><td>{$r1['11:30']}</td><td>{$r1['12:20']}</td><td>{$r1['1:10']}</td><td>{$r1['2:00']}</td><td>{$r1['2:50']}</td></tr>";
    $r2=mysql_fetch_array($result);
	echo "<tr><h3> <th>WED</th> </h3><td>{$r2['9:00']}</td><td>{$r2['9:50']}</td><td>{$r2['10:40']}</td><td>{$r2['11:30']}</td><td>{$r2['12:20']}</td><td>{$r2['1:10']}</td><td>{$r2['2:00']}</td><td>{$r2['2:50']}</td></tr>";
    $r3=mysql_fetch_array($result);
	echo "<tr><h3> <th>THU</th> </h3><td>{$r3['9:00']}</td><td>{$r3['9:50']}</td><td>{$r3['10:40']}</td><td>{$r3['11:30']}</td><td>{$r3['12:20']}</td><td>{$r3['1:10']}</td><td>{$r3['2:00']}</td><td>{$r3['2:50']}</td></tr>";
     $r4=mysql_fetch_array($result);
	echo "<tr><h3> <th>FRI</th> </h3><td>{$r4['9:00']}</td><td>{$r4['9:50']}</td><td>{$r4['10:40']}</td><td>{$r4['11:30']}</td><td>{$r4['12:20']}</td><td>{$r4['1:10']}</td><td>{$r4['2:00']}</td><td>{$r4['2:50']}</td></tr>";
    $r5=mysql_fetch_array($result);
	echo "<tr><h3><th>SAT</th> </h3><td>{$r5['9:00']}</td><td>{$r5['9:50']}</td><td>{$r5['10:40']}</td><td>{$r5['11:30']}</td><td>{$r5['12:20']}</td><td>{$r5['1:10']}</td><td>{$r5['2:00']}</td><td>{$r5['2:50']}</td></tr>";




		echo "</table></br><center><button type='submit'>NEXT..</button></center></form></html>";
	
	}
	else
		echo "fail";
	
?>
