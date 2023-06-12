<?php 
include('config.php');
$eventid=$_REQUEST['e_id'];
if(isset($_REQUEST['e_id']))
{

mysqli_query($conn,"delete from event where eid='$eventid'");


header('location:eventlist.php');
}
?>

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

