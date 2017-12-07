
<html>
<body bgcolor="#33FFBD">
<?php
 
  
   $id=$_GET['stu'];
   echo $id;
  
  mysql_connect("localhost","root","");
   mysql_select_db("invigilation");
   
  
        $re=mysql_query("select * from invigilation_table where faculty_id='$id' and refered_fac_id!='admin'")or die("failed to query database".mysql_error());	   
      // $row=mysql_fetch_array($re);	
		
	//echo "{$r["examdate"]}";
	//if($r['faculty_id']==$id){
    
		   
  while($row=mysql_fetch_array($re)){
	 
		    $s=$row['examdate'];
			echo $s;
			
         echo "<link rel='stylesheet' type='text/css' href='login.css'><form class='form'>".
	"<h3>exam date:</h3><a href='invigilation.php?stu=".$id."&date=".$s."' target='_blank'><h4>{$row['examdate']}</h4></a>".
         "<p><span><a href='accept.php?stu=".$id."&date=".$s."' alighn='right'>accept</a></span><span class='align-right'></br></br><span><a href='reject.php?stu=".$id."&date=".$s."' alighn='left'>reject click on date</a></span></p></form>";
		   }
		   $i=date("y-m-d");
		   echo $i;
      echo "<html><link rel='stylesheet' type='text/css' href='login.css'><form class='form'>".
	"<a href='invigilationdetails.php?stu=".$id."&date=".$i."' target='_blank'><h4>click to move to invigilations list</h4></a>".
         "</form></html>";
 /* else{
			   echo "<link rel='stylesheet' type='text/css' href='login.css'><form class='form'>".
	"<button><a href='invigilation.php?stu=".$id."' target='_blank'>move to the invigilation list</a></button>".
         "</form>";
		   }*/
  
	//}
	//else{
		//echo "failed";
	//}  action='invigilation.php?stu=".$id."&date=".$s."' method='POST'
   ?>
   </body>
   </html>



