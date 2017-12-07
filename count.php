<?php
 $id=$_GET['stu'];
   echo $id;
mysql_connect("localhost","root","");
   mysql_select_db("invigilation");
      $s=date("y-m-d");
	
	  echo $s;
	  
 // and faculty_id='14331f0506'
        $re=mysql_query("select * from invigilation_table where examdate<='$s' and faculty_id='$id'")or die("failed to query database".mysql_error());	   
        $r=mysql_fetch_array($re);
		$n=mysql_num_rows($re);
        //echo "{$r['examdate']}</br>".
		echo $n;
		 echo "<html><link rel='stylesheet' type='text/css' href='login.css'><center><form class='form1' action='requestreceived.php?stu=".$id."' method='POST'>".
         "<table border='1'><tr><th>faculty id</th><th>invigilations count</th></tr>".
		"<tr><td>".$id."</td><td>".$n."</td></tr></table></br><center><button type='submit'>NEXT..</button></center></form></html>";		
    // $s=Convert(varchar(10),GETDATE(),110);
	// echo $s;
	// echo $s[2];
?>