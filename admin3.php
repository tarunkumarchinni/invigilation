
<html>
<?php
$s=$_GET['stu'];
echo $s;
$d=$_GET['dat'];
echo $d;
$t=$_GET['tim'];
echo $t;
echo "<body>
<link rel='stylesheet' type='text/css' href='login.css'>
<div class='login-page'>
  <div class='form'>
   <form action='admin4.php?fac=".$s."&dat=".$d."&tim=".$t."' method='POST'> 
	<label>examtype</label>
      <input type='text' placeholder='internal/external' name='type'/>
	  <label>examtime</label>
      <input type='text' name='etime' placeholder='9:00'/>
	 <!-- <label>examdate</label>
      <input type='text'  name='edate' placeholder='yyyy-mm-dd'/>-->
	  <label>subject</label>
      <input type='text' name='sub' placeholder='subject'/>
	  <label>department</label>
      <input type='text' name='dept' placeholder='department'/>
	  <label>invigilation room</label>
      <input type='text' name='room' placeholder='invigilation room'/>
	  
      <button type='submit' name='submit' value='done'>done</button>
	  </form>
   
  </div>
</div>
</body>";
?>
</html>




