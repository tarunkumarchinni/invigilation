<html>
<body bgcolor="#33FFBD">

<?php
 
  
   $id=$_GET['stu'];
   $s=$_GET['date'];
   echo $s;
   echo $id;
     $i=date("y-m-d");
		   echo $i;
  
   mysql_connect("localhost","root","");
   mysql_select_db("invigilation");
   
  
        $re=mysql_query("select * from invigilation_table where faculty_id='$id' and examdate='$s'")or die("failed to query database".mysql_error());	   
        $r=mysql_fetch_array($re);	
		
	     if($r['faculty_id']==$id and $r['examdate']==$s) {
		       $s1=$r['examtime'];
			   $s2=$r['subject'];
			   $s3=$r['dept'];
			  $s4=$r['invigilation_room'];
			  $s5=$r['examtype'];
             echo "<html><link rel='stylesheet' type='text/css' href='login.css'><form class='form' action='end.html' method='POST'><font color='#8B0000'><center><p><h3>EXAM TYPE :</h3><h4>{$r['examtype']} </h4></p></center> <br> ".
           "<center><h3>EXAM DATE :</h3><h4> {$r['examdate']}</h4></center> <br>".
           "<center><h3>EXAM TIME :</h3> <h4>{$r['examtime']}</h4> </center><br>".
		   "<center><h3>SUBJECT :</h3><h4> {$r['subject']}</h4> </center><br><br> ".
		   "<center><h3>DEPARTMENT : </h3><h4>{$r['dept']} </h4></center><br><br> ".
		   "<center><h3>INVIGILATION ROOM : </h3><h4>{$r['invigilation_room']}</h4></center> <br><br></font> ".
         "<center><input type='submit' value='logout'></center><center><a href='request.php?stu=".$id."&date=".$s."&time=".$s1."&sub=".$s2."&dept=".$s3."&invi=".$s4."&type=".$s5."'>do you want to request another faculty</a></center></br><center><a href='invigilationdetails.php?stu=".$id."&date=".$i."' target='_SELF'>go back</a></center></form></html>";
		 //<center><a href='request.php'>do you want to request another faculty</a></center><center><a href='invigilationdetails.php?stu=".$id."' target='_SELF'>go back</a></center></form></html>";
		 //echo "<a href=\"javascript:history.go(-1)\">go back</a>";
		 }
		 else{
			 echo "failed";
		 }
		   
 
	   
	
   ?>
  
   </body>
   </html>