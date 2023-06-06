<?php
  include('config.php');
  if($_POST['register'])
  {
    $a=$_POST['rfullname'];
    $b=$_POST['rmail'];
    $c=$_POST['rpswd'];
    $d=$_POST['rdob'];
    $e=$_POST['rgender'];

    if($a !="" && $b !="" && $c !="" && $d !="" && $e !="" && )
    {
        $query="insert into register values('$rfullname','$rmail','$rpswd','$rdob','$rgender',)";
        $data=mysqli_query($conn,$query);

        if($data)
        {
            echo "Data successfully inserted";
        }
        else
        {
            echo "Failed";
        }
       
    }
  else
   {
        echo "Please fill the form";
   }
  }





