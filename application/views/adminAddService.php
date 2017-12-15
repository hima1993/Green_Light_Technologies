<?php include "includes/adminHeader.php" ?>
<?php include "includes/adminSidebar.php" ?>


<div class="content-wrapper">

<!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Add Item
            <!--<small><?php echo $outletName ;?></small>-->
        </h1>

        <ol class="breadcrumb">
            <li><a href="<?php echo base_url()?>/index.php/welcome"><i class="fa fa-dashboard"></i> Home</a></li>            
            <li class="active">Add Item</li>
        </ol>
    </section>


<section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-xs-12 col-lg-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Please Enter Items Details</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->

                    <?php echo form_open_multipart('ItemsController/addService'); ?>

                    
                        <div class="box-body">




                        <div class="col-md-12">

                           <!--  <div class="col-sm-4 col-xs-12">
                              <div class="form-group">
                                    <label for="empId">Employee ID</label>
                                    <input type="text" class="form-control"  name="empId" placeholder="Employee ID" required>
                                </div>
                            </div> -->






                          



                            <div class="col-md-4">
                                 <div class="form-group">
                                        <label for="inputItemId" >Service Name</label>
                                        <input type="dropdown" class="form-control" name="itemName" placeholder="Item Name" required="">
                                  </div>
                            </div>



                             <div class="col-md-4">
                                 <div class="form-group">
                                        <label for="inputItemName" >Service Price</label>

                                        <input type="text" class="form-control" name="itemPrice" placeholder="Item Price">

                                    </div>

                            </div>



                            <div class="col-md-4">
                                <label for="inputSupplier" >Service Provider</label>

                                        <input type="textbox" class="form-control" name ="supplier" placeholder="Supplier">
                            </div>


                           

                           
                             
                        

                        </div>
                             

                            

                    

                      

                        <div  class="col-md-12">


                        
                           
                            

                            

                            


                            <div class="col-md-4">
                                <label for="inputAddress(1)" >service Image</label>

                                        <input type="file" class="form-control" name ="file_name" placeholder="Image">
                                        <br>
                            </div>


                            <div class="col-md-4">


                                 <div class="form-group">
                                        <label for="inputItemName" >service Details</label>

                                        <textarea type="textarea" style="height: 90px;" class="form-control" name="servDetails" placeholder="Item Details">
                                        </textarea>

                                    </div>
                            </div>





                            


                            
                        </div>




                        <div class="col-xs-12 col-lg-12 col-sm-12">


                             

                            <div class="col-xs-2">
                                <button type="submit" class="btn btn-block btn-success" name="additem">Submit</button>
                            </div>

                        </div>

                        </div>

                    <?php echo form_close(); ?>


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
