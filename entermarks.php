<HTML>

</BODY>

<?php
  // include('dbconfig.php');
  
 session_start();
 
  if(!isset($_SESSION['username']))
 
   {
   
    header("location:login.php");
   
  }
elseif (time() - $_SESSION['timeout'] > 60) 
     
         {
         
      // session timed out, last request is longer than 1 minutes ago
               
 $_SESSION = array();
  
            session_destroy();
        
      echo "Sorry, your session has expired.... ";
    
          echo  "Click here to <a href = 'login.php' tite = Login>Login"; 
            
             }

        
 else 
{
   
   $usr= $_SESSION['username'];
   
  $_SESSION['timeout']=time();
   
    echo "Welcome $usr<br><Br>";
  
     echo  "Enter Marks";


   
}

 ?>

<form action="submitmarks.php" method="post">
<p>
Year : <select name="year">
<option value="1">First</option>

<option value="2">Second</option>
<option value="3">Third</option>

<option value="4">Fourth</option>


</select></p>


<p> Sem: <select name="sem">

<option value="1">One</option>

<option value="2">Two</option>

</select></p>

 <p>Sub1 marks : <input type="text" name="sub1" /></p>

 <p>Sub2 marks: <input type="text" name="sub2" /></p>

 <p>Sub3 marks: <input type="text" name="sub3" /></p>

 
<p><input type="submit" name="submarks" /></p>

</form>
<a href = 'logout.php' tite = Logout> Logout</a>

</BODY>

</HTML> 
