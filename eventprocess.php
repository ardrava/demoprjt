<?php
$eid=$_GET['info'];
include('config.php');

$result = mysqli_query($conn,"select * from department ");
    $que=mysqli_query($conn,"select * from event where eid='".$eid."'");
    while($res=mysqli_fetch_array($que))
	                   {
        
        $ename=$res['eName'];
        $edate=$res['eDate'];
         $etime=$res['eTime'];
          $evenue=$res['eVenue'];
    }
    
    
extract($_POST);
if(isset($save))
{
//$que=mysqli_query($con,"select * from department where department_name='$c'");	
//$row=mysqli_num_rows($que);
	//if($row)
	//{
	//$err="<font color='red'>This Data already exists</font>";
	//}
	//else
	//{
    
mysqli_query($conn,"UPDATE `event` SET   `eName`= '".$ename."', `eDate`='".$edate."', `eTime`='".$etime."', `eVenue`='".$evenue."' WHERE eid='".$eid."'");

	$err="<font color='blue'>Updation Completed</font>";
	//}
	
}





include 'header.php';
?>
<div class="right_col" role="main">
          <!-- top tiles -->
          
          <!-- /top tiles -->

          
          <br />

           <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Event</h3>
                        </div>

                        
                    </div>
                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Update Event </h2>
                                    
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <form  novalidate method="POST"  enctype="multipart/form-data">
                                       
                                        <span class="section">Event Info</span>
                                        <?php echo @$err; ?>
                                        
                                        <!--<div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align"> Department Name<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <select class="form-control" data-validate-length-range="6" data-validate-words="1" name="dptname" placeholder="ex. Computer Engineering" required="required" />
                                               
  <?php 
  echo "<option value=".$dname.">".$dname."</option>"; 
while ($row = mysqli_fetch_array($result))
{
     echo "<option value=".$row['deptName'].">".$row['deptName']."</option>";
}
?>  

                                            </select>
                                            </div>
                                        </div>-->
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Event Name<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control"   name="ename"  type="text" required="required" value="<?php echo $ename;?>" /></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Event Date<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" class='date' type="date" name="edate" required="required" value="<?php echo $edate;?>"></div>
                                        </div>
                                        
                                          <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Event Time<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control"   name="etime"  type="text" required="required" value="<?php echo $etime;?>" /></div>
                                        </div>
                                         <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Event Venue<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control"   name="evenue"  type="text" required="required" value="<?php echo $evenue;?>" /></div>
                                        </div>
                                      <div class="ln_solid">
                                            <div class="form-group">
                                                <div class="col-md-6 offset-md-3">
                                                    <button type='submit' class="btn btn-primary" name="save">Update</button>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


          
        </div>
        <!-- /page content -->



<?php 
include 'footer.php';
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="vendors/validator/multifield.js"></script>
    <script src="vendors/validator/validator.js"></script>
    
    <!-- Javascript functions	-->
	

    <script>
        // initialize a validator instance from the "FormValidator" constructor.
        // A "<form>" element is optionally passed as an argument, but is not a must
        var validator = new FormValidator({
            "events": ['blur', 'input', 'change']
        }, document.forms[0]);
        // on form "submit" event
        document.forms[0].onsubmit = function(e) {
            var submit = true,
                validatorResult = validator.checkAll(this);
            console.log(validatorResult);
            return !!validatorResult.valid;
        };
        // on form "reset" event
        document.forms[0].onreset = function(e) {
            validator.reset();
        };
        // stuff related ONLY for this demo page:
        $('.toggleValidationTooltips').change(function() {
            validator.settings.alerts = !this.checked;
            if (this.checked)
                $('form .alert').remove();
        }).prop('checked', false);

    </script>

    <!-- jQuery -->
    
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>
    <!-- validator -->
    <!-- <script src="../vendors/validator/validator.js"></script> -->

    <!-- Custom Theme Scripts -->
   


<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

