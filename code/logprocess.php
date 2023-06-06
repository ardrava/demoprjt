<?php
session_start();
include 'config.php';
if(isset($_POST['submit']))
{
    
   
    
   $mailid=$_POST['mail'];
   $password=$_POST['password'];
   
   
      $sql=mysqli_query($conn," SELECT * FROM admin where mail='".$mailid."' and password='".$password."'");
      $row  = mysqli_fetch_array($sql);
      if(is_array($row))
    {
        $_SESSION["ID"] = $row['id'];
        $_SESSION["Email"]=$row['mail'];
        $_SESSION["First_Name"]=$row['firstname'];
        $_SESSION["Last_Name"]=$row['lastname']; 
        $_SESSION['admin']=$mailid;
        //header("Location: msglist.php"); 
    }
    
     else {
     
  $n=mysqli_query($conn," SELECT * FROM faculty where fmail='".$mailid."' and fpassword='".$password."'");
      $rowww  = mysqli_fetch_array($n);
      if(is_array($rowww))
        {
            
          $_SESSION["ID"] = $rowww['fID'];
          $_SESSION["name"]=$rowww['fName'];
          
          $tt= $rowww['fID'];
          
         header("Location: faculty/facultyProcess.php?info=$tt"); 
        }
 else {
     header("Location: ../index.php");
        
 }
        
     }
   
 }
   
}
?>