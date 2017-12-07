<html>
<body bgcolor="#33FFBD">
<?php
 
  
   $id=$_GET['stu'];
   $s=$_GET['date'];
   echo $id;
   echo $s;
  
   mysql_connect("localhost","root","");
   mysql_select_db("invigilation");
   
  
        $re=mysql_query("select * from invigilation_table where faculty_id='$id'")or die("failed to query database".mysql_error());	   
        //$row=mysql_fetch_array($re);	
		
	//echo "{$r["examdate"]}";
	//if($r['faculty_id']==$id){
 	  
		   
  while($row=mysql_fetch_array($re)){
	  
		    $s=$row['examdate'];
			
echo "<link rel='stylesheet' type='text/css' href='login.css'><form class='form'>".
	"<h3>exam date:</h3><a href='invigilation.php?stu=".$id."&date=".$s."' target='_blank'><h4>{$row['examdate']}</h4></a>".
         "</form>";
		   }
		    echo "<html><link rel='stylesheet' type='text/css' href='login.css'><form class='form' action='end.html' method='POST'>".
			"<center><input type='submit' value='logout'></center></form></html>";
	   
	//}
	//else{
		//echo "failed";
	//}
   ?>
   </body>
   </html>