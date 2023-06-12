
 <script>
	function deleteData(id)
	{
		if(confirm("You want to delete ?"))
		{
		window.location.href="deleteevent.php?e_id="+id;
		}
	
	}
</script>
    <?php 
include('config.php');

include 'header.php';
?>
<div class="right_col" role="main">
          <!-- top tiles -->
          
          <!-- /top tiles -->

          
          <br />
          
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3><small>Event</small></h3>
              </div>

              
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Event List <small></small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>#</th>
                         <th>Event Name</th>
                           <th>Event Date</th>
                            <th>Event Time</th>
                             <th>Event Venue</th>
                          <th>Action</th>
                          
                        </tr>
                      </thead>


                      <tbody>
                          <?php
                          $i=1;
                          $que=mysqli_query($conn,"select *  from event");
	                   while($res=mysqli_fetch_array($que))
	                   { ?>
                        <tr>
                          <td><?php echo $i; ?></td>
                         
                          <td><?php echo " ".$res['eName']."" ?></td>
                           <td><?php echo " ".$res['eDate']."" ?></td>
                            <td><?php echo " ".$res['eTime']."" ?></td>
                             <td><?php echo " ".$res['eVenue']."" ?></td>
                          <td> <a class="btn btn-success btn-sm" href="eventProcess.php?info=<?php echo "".$res['eid'].""; ?>"><i class="fa fa-pencil"></i></a>
                          <a class="btn btn-danger btn-sm" href="javascript:deleteData(<?php echo  "".$res['eid']."";?>)"><i class="fa fa-trash"></i> </a></td>
                          
                        </tr>
                           <?php  $i++; } ?>
                     </tbody>
                    </table>
                  </div>
                  </div>
              </div>
            </div>
                </div>
              </div>

              

              

              

              

              
            </div>
          </div>
          
</div>
<?php 
include 'footer.php';
?>


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

