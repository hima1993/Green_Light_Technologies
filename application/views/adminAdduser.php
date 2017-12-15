<?php include "includes/adminHeader.php" ?>
<?php include "includes/adminSidebar.php" ?>


<div class="content-wrapper">

<!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Add Customer
            <!--<small><?php echo $outletName ;?></small>-->
        </h1>

        <ol class="breadcrumb">
            <li><a href="<?php echo base_url()?>/index.php/welcome"><i class="fa fa-dashboard"></i> Home</a></li>            
            <li class="active">Add Customer</li>
        </ol>
    </section>

<section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-xs-12 col-lg-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Please Enter User Details</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->

                    <form role="form"  method="post" action="<?php echo base_url()?>index.php/Users/AdminRegCustomer" >
                    
                        <div class="box-body">

                        <div class="col-xs-12 col-lg-12 col-sm-12">

                           <!--  <div class="col-sm-4 col-xs-12">
                              <div class="form-group">
                                    <label for="empId">Employee ID</label>
                                    <input type="text" class="form-control"  name="empId" placeholder="Employee ID" required>
                                </div>
                            </div> -->

                            <div class="col-sm-4 col-xs-12">
                                 <div class="form-group">
                                        <label for="inputTitle" >Title</label>
                                        <select class="form-control" name="Title" required="">
                                            <option value="">-</option>
                                            <option value="Mr">Mr.</option>
                                            <option value="Mrs">Mrs</option>
                                            <option value="Miss">Miss</option>
                                        </select>
                                  </div>
                            </div>

                            <div class="col-sm-4 col-xs-12">
                                 <div class="form-group">
                                        <label for="inputFirstName" >First Name</label>

                                        <input type="text" class="form-control" name="Fname" placeholder="First Name" required="">

                                    </div>

                            </div>

                            <div class="col-sm-4 col-xs-12">
                                <label for="inputLastName" >Last Name</label>

                                        <input type="text" class="form-control" name ="Lname" placeholder="Last Name" required="">
                            </div>

                        </div>

                        <div class="col-xs-12 col-lg-12 col-sm-12">                            

                            <div class="col-sm-4 col-xs-12">
                                <div class="form-group">
                            <label for="inputDateOfBirth">Date of Birth</label>

                            <div class="input-group date">
                              <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                              </div>
                              <input type="text" class="form-control pull-right" id="datepicker" name="Dob" required>
                            </div>
                            <!-- /.input group -->

                             

                        </div>
                            </div>

                            <div class="col-sm-4 col-xs-12">

                             <div class="form-group">
                                    <label>Contact Number</label>

                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <input type="text" class="form-control" required="required" name="phone" data-inputmask='"mask": "(94) 99 9 999999"' data-mask>
                                    </div>
                                    <!-- /.input group -->
                                </div>

                        <!-- /.form group -->
                                
                            </div>

                             <div class="col-sm-4 col-xs-12">
                                <label for="inputEmail" >Postal Code</label>

                                        <input type="text" class="form-control" name ="Zip" placeholder="Postal Code" required="">
                            </div>

                            
                        </div>



                        <div class="col-xs-12 col-lg-12 col-sm-12">                            

                            <div class="col-sm-4 col-xs-12">
                                <label for="inputEmail" >Address Line 1</label>

                                        <input type="text" class="form-control" name ="Address1" placeholder="Home Number" required="">

                            </div>




                            <div class="col-sm-4 col-xs-12">
                                <label for="inputEmail" >Address Line 2</label>

                                        <input type="text" class="form-control" name ="Address2" placeholder="Address Line 2" required="">
                                        <br>
                            </div>

                            

                             <div class="col-sm-4 col-xs-12">
                                <label for="inputEmail" >City</label>

                                        <input type="text" class="form-control" name ="City" placeholder="City" required="">
                                        <br>
                            </div>


                            
                        </div>





                        <div class="col-xs-12 col-lg-12 col-sm-12">                            

                            
                            <div class="col-sm-4 col-xs-12">
                                <label for="inputEmail" >Email</label>

                                        <input type="text" class="form-control" name ="Email" placeholder="Email" required="">
                                        <br>
                            </div>

                            <div class="col-sm-4 col-xs-12">
                                <label for="inputEmail" >Password</label>

                                        <input type="Password" class="form-control" name ="Password" placeholder="Password" required="">
                                        <br>
                            </div>


                           
                            

                            <div class="col-sm-4 col-xs-12">
                                <label for="inputEmail" >Additional Information</label>

                                        <input type="text" class="form-control" name ="textArea" placeholder="Additional Information">
                            </div>
                            

                            
                        </div>

                       


                          <div class="col-xs-12 col-lg-12 col-sm-12">
                            <div class="col-xs-2">
                                <button type="submit" class="btn btn-block btn-success" name="register">Submit</button>
                            </div>

                        </div>

                        </div>

                    </form>


                </div>
            </div>

        </div>

    </section>

</div>

    <?php include "includes/adminFooter.php" ?>

<script src="<?php echo base_url()?>template/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url()?>template/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url()?>template/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>template/dist/js/adminlte.min.js"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo base_url()?>template/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

<script >
    $(function() {
        //Date picker
        $('#datepicker').datepicker({
          autoclose: true
        })
    })

</script>


