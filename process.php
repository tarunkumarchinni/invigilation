<html>
<body bgcolor="#33FFBD">
<?php
   $usertype=$_POST['se'];
   $id=$_POST['user'];
   $password=$_POST['pass'];
  
	
   $usertype=stripcslashes($usertype);
   $id=stripcslashes($id);
   $password=stripcslashes($password);
 
   
   $usertype=mysql_real_escape_string($usertype);
   $id=mysql_real_escape_string($id);
   $password=mysql_real_escape_string($password);
 
   mysql_connect("localhost","root","");
   mysql_select_db("invigilation");
   
   $result=mysql_query("select * from login where usertype='$usertype' and userid='$id' and password='$password'")or die("failed to query database".mysql_error());
    $row=mysql_fetch_array($result);
	if($row['usertype']==1 && $row['userid']==$id && $row['password']==$password){
      
            echo "<html><marquee><i><h2><font color='BROWN'> welcome".$row['userid']."</font></h2></i></marquee></html><br><br>";
        $re=mysql_query("select * from faculty_details where faculty_id='$id'")or die("failed to query database".mysql_error());	   
        $r=mysql_fetch_array($re);	
			
	   if($r['faculty_id']==$id) {
		   
             echo "<html><link rel='stylesheet' type='text/css' href='login.css'><form class='form' action='timetable1.php?stu=".$id."' method='POST'><font color='#8B0000'><center><p><h3>FACULTY ID :</h3><h4>{$r['faculty_id']} </h4></p></center> <br> ".
           "<center><h3>FIRST NAME :</h3><h4> {$r['fname']}</h4></center> <br>".
           "<center><h3>LAST NAME :</h3> <h4>{$r['lname']}</h4> </center><br>".
		   "<center><h3>DESIGNATION :</h3><h4> {$r['designation']}</h4> </center><br><br> ".
		   "<center><h3>EMAIL : </h3><h4>{$r['email']} </h4></center><br><br> ".
		   "<center><h3>PHONE NO : </h3><h4>{$r['phone']}</h4></center> <br><br></font> ".
         "<center><input type='submit'  value='Next..' /></center></form></html>";

		 }
		 else{
		    echo "failed to login!";
		}
 
		
		 }
		elseif($usertype==2 && $row['userid']==$id && $row['password']==$password){
			 echo "admin entered";
			include("admin1.php");
		 }
		 else{
		
	       echo "<h1><center>failed to login!!!!</center></h1>";
		 }
	
   ?>
   </body>
   </html>