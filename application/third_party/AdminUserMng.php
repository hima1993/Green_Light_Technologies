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

                    
                    <form role="form" action="<?php echo base_url()?>index.php/CustomerController/addCustomer" method="POST">
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
                                        <label for="inputItemId" >Item ID</label>
                                        <input type="dropdown" class="form-control" name="inputItemId" placeholder="Item ID">
                                  </div>
                            </div>

                            <div class="col-sm-4 col-xs-12">
                                 <div class="form-group">
                                        <label for="inputItemName" >Item Name</label>

                                        <input type="text" class="form-control" name="inputItemName" placeholder="Item Name">

                                    </div>

                            </div>

                            <div class="col-sm-4 col-xs-12">
                                <label for="inputItemDetails" >Item Details</label>

                                        <input type="textbox" class="form-control" name ="inputItemDetails" placeholder="Item Details">
                            </div>

                        </div>

                        <div class="col-xs-12 col-lg-12 col-sm-12">                            

                            <div class="col-sm-4 col-xs-12">
                                <label for="inputItemPrice" >Item Price</label>

                                        <input type="textbox" class="form-control" name ="inputItemPrice" placeholder="Item Price">
                            </div>                            

                            <div class="col-sm-4 col-xs-12">
                                <label for="inputSupplier" >Supplier</label>

                                        <input type="textbox" class="form-control" name ="inputSupplier" placeholder="Supplier">
                            </div>

                            <div class="col-sm-4 col-xs-12">
                                <div class="form-group">
                            <label for="inputSuppliedDate">Supplied Date</label>

                            <div class="input-group date">
                              <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                              </div>
                              <input type="text" class="form-control pull-right" id="datepicker" name="inputSuppliedDate" required>
                            </div>
                            <!-- /.input group -->

                             

                        </div>
                            </div>

                            
                        </div>

                       <div class="col-xs-12 col-lg-12 col-sm-12">                            

                            <div class="col-sm-4 col-xs-12">
                                <label for="inputAddress(1)" >Address(line 1)</label>

                                        <input type="text" class="form-control" name ="inputAddress(1)" placeholder="Address(line 1)">
                            </div>  
                            
                        </div>

                          <div>
                            <div class="col-xs-2">
                                <button type="submit" class="btn btn-block btn-success" name="register">Submit</button>
                            </div>

                        </div>

                    </form>


                </div>
            </div>

        </div>

    </section>