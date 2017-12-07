<html>
<?php
echo "<body>
<link rel='stylesheet' type='text/css' href='login.css'>
<div class='login-page'>
  <div class='form'>
   <form action='normal.php' method='POST'> 
	<!--<label>examtype</label>
      <input type='text' placeholder='examtype'/>-->
	  <label>examdate</label>
      <input type='text'  name='edate' placeholder='yyyy-mm-dd'/>
	  <label>examtime</label>
      <input type='text' name='etime' placeholder='EX: 9:00'/>
      <button type='submit' name='submit' value='getfaculty'>get faculty</button>
	  </form>
   
  </div>
</div>
</body>";
?>
</html>
