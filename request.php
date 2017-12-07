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
 /*echo date("$date.l");
 echo "</br>".$date."</br>".date("l")."";*/
 $week=date('l',strtotime($date));
 echo "</br>".$week;
 if($week=='Monday')
 {
	 $m=1;
	 echo $m;
 }
 else if($week=='Tuesday')
 {
	 $m=2;
	 echo $m;
 }
 else if($week=='Wednesday')
 {
	 $m=3;
	 echo $m;
 }
 else if($week=='Thursday')
 {
	 $m=4;
	 echo $m;
 }
 else if($week=='Friday')
 {
	 $m=5;
	 echo $m;
 }
 else if($week=='Saturday')
 {
	 $m=6;
	 echo $m;
 }
 else{
	 $m=7;
	 echo $m;
 }
 
 //$time='12:20';
 //define("msg","$time");
// echo msg;
 
 
 
  mysql_connect("localhost","root","");
   mysql_select_db("invigilation");
   echo "<html><link rel='stylesheet' type='text/css' href='login.css'><form class='form1' action='admin3.php' method='POST'><table border='1'><tr bgcolor='#6B8E23'><th>faculty id</th><th>first name</th><th>last name</th><th>email</th><th>phone no</th><th>allocate</th></tr>";

  
        $re=mysql_query("select * from ptimetable where day='$m'")or die("failed to query database".mysql_error());	   //#FF8C00
       // $row=mysql_fetch_array($re);
		while($row=mysql_fetch_array($re)){
        if($time=='9:00'){
			//echo "yes..9:00.";
			if($row['9:00']==NULL){
			 	$s1=$row['faculty_id'];
	            $re1=mysql_query("select * from faculty_details where faculty_id='$s1'")or die("failed to query database".mysql_error());
                $r=mysql_fetch_assoc($re1);
	            if($r['faculty_id']==$s1){
					$tar=mysql_query("select * from invigilation_table where faculty_id='$s1' and examdate='$date' ")or die("failed to query database".mysql_error());
	                 $r1=mysql_fetch_assoc($tar);
					 if($r1==0){
				        echo "<tr><td>{$r['faculty_id']}</td><td>{$r['fname']}</td><td>{$r['lname']}</td><td>{$r['email']}</td><td>{$r['phone']}</td><td><a href='request2.php?stu=".$id."&dat=".$date."&tim=".$time."&fac=".$r['faculty_id']."&sub=".$subject."&dept=".$dept."&invi=".$invigilation."&type=".$type."'>request</a></tr>";
	                 }
					 else{}
   	
	            }		
			}
			else{}
		}
		 else if($time=='9:50'){
			//echo "yes..9:50.";
			if($row['9:50']==NULL){
			 	$s1=$row['faculty_id'];
	            $re1=mysql_query("select * from faculty_details where faculty_id='$s1'")or die("failed to query database".mysql_error());
                $r=mysql_fetch_assoc($re1);
	            if($r['faculty_id']==$s1){
	            $tar=mysql_query("select * from invigilation_table where faculty_id='$s1' and examdate='$date' ")or die("failed to query database".mysql_error());
	                 $r1=mysql_fetch_assoc($tar);
					 if($r1==0){
				          echo "<tr><td>{$r['faculty_id']}</td><td>{$r['fname']}</td><td>{$r['lname']}</td><td>{$r['email']}</td><td>{$r['phone']}</td><td><a href='request2.php?stu=".$id."&dat=".$date."&tim=".$time."&fac=".$r['faculty_id']."&sub=".$subject."&dept=".$dept."&invi=".$invigilation."&type=".$type."'>request</a></tr>";
						  }
					 else{}
   	
	            }		
			}
			else{}
		}
		 else if($time=='10:40'){
			//echo "yes..10:40.";
			if($row['10:40']==NULL){
			 	$s1=$row['faculty_id'];
	            $re1=mysql_query("select * from faculty_details where faculty_id='$s1'")or die("failed to query database".mysql_error());
                $r=mysql_fetch_assoc($re1);
	            if($r['faculty_id']==$s1){
	             $tar=mysql_query("select * from invigilation_table where faculty_id='$s1' and examdate='$date' ")or die("failed to query database".mysql_error());
	                 $r1=mysql_fetch_assoc($tar);
					  if($r1==0){
				          echo "<tr><td>{$r['faculty_id']}</td><td>{$r['fname']}</td><td>{$r['lname']}</td><td>{$r['email']}</td><td>{$r['phone']}</td><td><a href='request2.php?stu=".$id."&dat=".$date."&tim=".$time."&fac=".$r['faculty_id']."&sub=".$subject."&dept=".$dept."&invi=".$invigilation."&type=".$type."'>request</a></tr>";
						  }
					 else{}
   	
	            }		
			}
			else{}
		}
		 else if($time=='11:30'){
			//echo "yes..11:30.";
			if($row['11:30']==NULL){
			 	$s1=$row['faculty_id'];
	            $re1=mysql_query("select * from faculty_details where faculty_id='$s1'")or die("failed to query database".mysql_error());
                $r=mysql_fetch_assoc($re1);
	            if($r['faculty_id']==$s1){
	             $tar=mysql_query("select * from invigilation_table where faculty_id='$s1' and examdate='$date' ")or die("failed to query database".mysql_error());
	                 $r1=mysql_fetch_assoc($tar);
					  if($r1==0){
				          echo "<tr><td>{$r['faculty_id']}</td><td>{$r['fname']}</td><td>{$r['lname']}</td><td>{$r['email']}</td><td>{$r['phone']}</td><td><a href='request2.php?stu=".$id."&dat=".$date."&tim=".$time."&fac=".$r['faculty_id']."&sub=".$subject."&dept=".$dept."&invi=".$invigilation."&type=".$type."'>request</a></tr>";
						  }
					 else{}
   	
	            }		
			}
			else{}
		}
		 else if($time=='12:20'){
			//echo "yes..12:20.";
			if($row['12:20']==NULL){
			 	$s1=$row['faculty_id'];
	            $re1=mysql_query("select * from faculty_details where faculty_id='$s1'")or die("failed to query database".mysql_error());
                $r=mysql_fetch_assoc($re1);
	            if($r['faculty_id']==$s1){
	             $tar=mysql_query("select * from invigilation_table where faculty_id='$s1' and examdate='$date' ")or die("failed to query database".mysql_error());
	                 $r1=mysql_fetch_assoc($tar);
					  if($r1==0){
				          echo "<tr><td>{$r['faculty_id']}</td><td>{$r['fname']}</td><td>{$r['lname']}</td><td>{$r['email']}</td><td>{$r['phone']}</td><td><a href='request2.php?stu=".$id."&dat=".$date."&tim=".$time."&fac=".$r['faculty_id']."&sub=".$subject."&dept=".$dept."&invi=".$invigilation."&type=".$type."'>request</a></tr>";
						  }
					 else{}
   	
	            }		
			}
			else{}
		}
		 else if($time=='1:10'){
			//echo "yes..1:10.";
			if($row['1:10']==NULL){
			 	$s1=$row['faculty_id'];
	            $re1=mysql_query("select * from faculty_details where faculty_id='$s1'")or die("failed to query database".mysql_error());
                $r=mysql_fetch_assoc($re1);
	            if($r['faculty_id']==$s1){
	            $tar=mysql_query("select * from invigilation_table where faculty_id='$s1' and examdate='$date' ")or die("failed to query database".mysql_error());
	                 $r1=mysql_fetch_assoc($tar);
					 if($r1==0){
				          echo "<tr><td>{$r['faculty_id']}</td><td>{$r['fname']}</td><td>{$r['lname']}</td><td>{$r['email']}</td><td>{$r['phone']}</td><td><a href='request2.php?stu=".$id."&dat=".$date."&tim=".$time."&fac=".$r['faculty_id']."&sub=".$subject."&dept=".$dept."&invi=".$invigilation."&type=".$type."'>request</a></tr>";
						  }
					 else{}
   	
	            }		
			}
			else{}
		}
		 else if($time=='2:00'){
			//echo "yes..2:00.";
			if($row['2:00']==NULL){
			 	$s1=$row['faculty_id'];
	            $re1=mysql_query("select * from faculty_details where faculty_id='$s1'")or die("failed to query database".mysql_error());
                $r=mysql_fetch_assoc($re1);
	            if($r['faculty_id']==$s1){
	           $tar=mysql_query("select * from invigilation_table where faculty_id='$s1' and examdate='$date' ")or die("failed to query database".mysql_error());
	                 $r1=mysql_fetch_assoc($tar);
					 if($r1==0){
				          echo "<tr><td>{$r['faculty_id']}</td><td>{$r['fname']}</td><td>{$r['lname']}</td><td>{$r['email']}</td><td>{$r['phone']}</td><td><a href='request2.php?stu=".$id."&dat=".$date."&tim=".$time."&fac=".$r['faculty_id']."&sub=".$subject."&dept=".$dept."&invi=".$invigilation."&type=".$type."'>request</a></tr>";
						  }
					 else{}
   	
	            }		
			}
			else{}
		}
		 else if($time=='2:50'){
			//echo "yes..2:50.";
			if($row['2:50']==NULL){
			 	$s1=$row['faculty_id'];
	            $re1=mysql_query("select * from faculty_details where faculty_id='$s1'")or die("failed to query database".mysql_error());
                $r=mysql_fetch_assoc($re1);
	            if($r['faculty_id']==$s1){
	            $tar=mysql_query("select * from invigilation_table where faculty_id='$s1' and examdate='$date' ")or die("failed to query database".mysql_error());
	                 $r1=mysql_fetch_assoc($tar);
					 if($r1==0){
				          echo "<tr><td>{$r['faculty_id']}</td><td>{$r['fname']}</td><td>{$r['lname']}</td><td>{$r['email']}</td><td>{$r['phone']}</td><td><a href='request2.php?stu=".$id."&dat=".$date."&tim=".$time."&fac=".$r['faculty_id']."&sub=".$subject."&dept=".$dept."&invi=".$invigilation."&type=".$type."'>request</a></tr>";
						  }
					 else{}
   	
	            }		
			}
			else{}
		}
		else{echo "NO Faculty is available..";}
		
		//			if($row['12:20']==NULL){
			//echo "</br>{$row['faculty_id']}and{$row['9:00']}";
		 //$s1=$row['faculty_id'];
	/*$re1=mysql_query("select * from faculty_details where faculty_id='$s1'")or die("failed to query database".mysql_error());
      $r=mysql_fetch_assoc($re1);
	if($r['faculty_id']==$s1){
	echo "<tr><td>{$r['faculty_id']}</td><td>{$r['fname']}</td><td>{$r['lname']}</td><td>{$r['email']}</td><td>{$r['phone']}</td><td><a href='request2.php?stu=".$r['faculty_id']."'>request</a></tr>";
	
   	
	}		
			}
		}
		
 //stu=".$r['faculty_id']."&fac=".$id."&date=".$date."&time=".$time."&sub=".$subject."&dept=".$dept."&invi=".$invigilation."&type=".$type."'>request</a></tr>";
	echo "<table></form></html>";
 */
 
 }
 
?>