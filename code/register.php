<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>KidKinder - Kindergarten Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    
<div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">GET IN TOUCH</span></p>
                <h1 class="mb-4">Register Here</h1>
            </div>
            <div class="row">
                <div class="col-lg-7 mb-5">
                    <div class="contact-form">
                        <div id="success"></div>
                        <form name="sentMessage" id="contactForm" novalidate="novalidate">
                       
                        <span class="section">Personal Info</span>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Faculty ID<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" type="text"  name="fid" disabled="" required="required"  value="FACGWPTK00<?php echo $fidd+1; ?>"/>
                                                <input class="form-control" type="text"  hidden="" name="fuser"  required="required"  value="FACGWPTK00<?php echo $fidd+1; ?>"/>
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Name<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" data-validate-length-range="6"  name="name" placeholder="ex. John f. Kennedy" required="required" />
                                            </div>
                                        </div>
                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Gender</label>
											<div class="col-md-6 col-sm-6 ">
												<div id="gender" class="btn-group" data-toggle="buttons">
													<label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                                                                            <input type="radio" name="gender" value="Male" required="" class="join-btn"> &nbsp; Male &nbsp;
													</label>
													<label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
														<input type="radio" name="gender" value="Female" class="join-btn"> Female
													</label>
												</div>
											</div>
										</div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Qualification<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" class='optional' name="qualification" data-validate-length-range="5,15" type="text" /></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">email<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" name="email" class='email' required="required" type="email" /></div>
                                        </div>
                                       <!-- <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Department<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
<select class="form-control"  data-validate-length-range="6" data-validate-words="1" name="dptname" placeholder="ex. Computer Engineering" required="required" />
                                              <?php 
while ($row = mysqli_fetch_array($result))
{
     echo "<option value=".$row['deptName'].">".$row['deptName']."</option>";
}
?>  

                                            </select>                                            </div>
                                        </div>-->
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Course<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <select class="form-control"  data-validate-length-range="6" data-validate-words="1" name="cname" placeholder="ex. Computer Engineering" required="required" />
                                              <?php 
                                              $semm=0;
while ($row = mysqli_fetch_array($resultt))
{
     echo "<option value=".$row['cid'].">".$row['cName']."</option>";
     $semm=$row['sem'];
}
?>   </select>
                                            </div>
                                        </div>
                                       <!-- <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Semester<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                 <select class="form-control"  data-validate-length-range="6" data-validate-words="1" name="dptname" placeholder="ex. Computer Engineering" required="required" />
                                                   <option disabled selected >Select Semester</option>
                                                   <?php
                                                   for($i=1; $i<=$semm; $i++)
                                                   {
                                                       echo "<option value=".$i.">$i</option>";
                                                   }?>
                                            </select>
                                                </div>
                                        </div>-->
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Contact Number <span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" type="number" class='number' name="number"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"   maxlength = "10"  minlength="10" required='required'></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Date of Join<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" class='date' type="date" name="doj" required='required'></div>
                                        </div>
                                        
                                        
                                        <div class="field item form-group">
											<label class="col-form-label col-md-3 col-sm-3  label-align">Password<span class="required">*</span></label>
											<div class="col-md-6 col-sm-6">
                                                                                            <input class="form-control" type="password" id="password1" name="password1"   placeholder="Auto Generate By Clicking" required onClick="randomPassword(6);" />
												
												<span style="position: absolute;right:15px;top:7px;" onclick="hideshow()" >
													<i id="slash" class="fa fa-eye-slash"></i>
													<i id="eye" class="fa fa-eye"></i>
												</span>
											</div>
										</div>
                                         <div class="field item form-group">
                                             <label class="col-form-label col-md-3 col-sm-3  label-align">Image<span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6">
                                             <input type="file"  name="uploadfile"  value="" class="form-control" /> 
                                             </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Address<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <textarea required="required" name='address' class="form-control"></textarea></div>
                                        </div>
                                        <div class="ln_solid">
                                            <div class="form-group">
                                                <div class="col-md-6 offset-md-3">
                                                    <button type='submit' class="btn btn-primary" name="save">Submit</button>
                                                    <button type='reset' class="btn btn-success">Reset</button>
                                                </div>
                                            </div>
                                        </div>
                                       
                        </form>
                    </div>
                </div>
</body>
</html>