<?php include "includes/adminHeader.php" ?>
<?php include "includes/adminSidebar.php" ?>



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">

        <ol class="breadcrumb">
            <li><a href="<?php echo base_url()?>/index.php/welcome"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Manage Users</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-xs-12" style="padding-top: 20px">
                <div class="col-lg-8 col-sm-8 col-xs-12">

                    <h3 class="box-title">
                        <i class="fa fa-th-list"></i>
                        Manage Items
                    </h3>



                </div>

                <div class="col-lg-4 col-sm-4 col-xs-12" no-padding style="padding-top:20px">


                    <div class="modal fade" id="addrow" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">


                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Update Item details</h4>
                                </div>


                                <?php echo form_open_multipart('ItemsController/updateItem'); ?>



                                <div class="modal-body">
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="CustID" class="col-sm-6 control-label">Item ID</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" id="CustID" name="UserID" required readonly>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="CustCode" class="col-sm-6 control-label">Item Name</label>


                                            <div class="col-sm-7">

                                                <input type="text" class="form-control" id="CustCode"  name="title" required>
                                            </div>
                                        </div>
0


                                        <div class="form-group">
                                            <label for="cusName" class="col-sm-6 control-label">Item Category</label>
                                            <div class="col-sm-7">

                                                <input type="text" class="form-control" id="CustName1"  name="Fname" required>
                                            </div>


                                            <div class="col-sm-7">
                                                <label>Choose Category</label>
                                                <select class="form-control" id="ItemCategory" name="ItemCategory" required>
                                                    <option value="LED Sign Boards">LED Sign Boards </option>
                                                    <option value="Car Audio Systems">Car Audio Systems</option>
                                                    <option value="CCTV Camera Systems">CCTV Camera Systems</option>
                                                    <option value="Vehicle Security Systems">Vehicle Security Systems</option>

                                                </select>
                                            </div>


                                        </div>




                                        <div class="form-group">
                                            <label for="file_name11" class="col-sm-6 control-label">Item Image</label>
                                            <div class="col-sm-7">

                                                <input type="file" name ="file_name" >

                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="CustContact" class="col-sm-6 control-label">Item Details</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" id="CustContact"  name="phone" required>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label for="Custsup" class="col-sm-6 control-label">Supplier</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" id="Custsup"  name="supp" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="CustPrice" class="col-sm-6 control-label">Item Price</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" id="CustPrice"  name="price" required>
                                            </div>
                                        </div>



                                    </div>



                                    <div class="modal-footer" >
                                        <button type="submit" class="btn btn-primary btn-success" name="UpdateCust" value="Update">Update</button>
                                        <button type="submit" class="btn btn-primary pull-left" name="ClearCust">clear</button>
                                    </div>

                                    <!-- <div class="col-xs-2">
                                        <button type="submit" class="btn btn-block btn-success" name="register">Submit</button>
                                    </div> -->

                                </div>



                            </div>

                            <?php echo form_close();?>




                        </div>

                    </div>





                </div>
            </div>




            <form method="post" action="<?php echo base_url()?>index.php/itemsController/deleteItem">


                <div class="col-lg-12 col-sm-12 col-xs-12"  style="padding-top:20px">

                    <div class="col-xs-10">

                        <button type="button" id="update_customer" class="btn  btn-info pull-right"  data-toggle="modal" >Update</button>
                    </div>

                    <div class="col-xs-2">
                        <input type="submit" name="delete" value="Delete" class="btn btn-warning pull-left" onclick="return delete_customer()">
                    </div>

                </div>




                <div class="col-xs-12 col-lg-12" style="padding-top: 10px">

                    <!-- general form elements -->
                    <div class="box box-primary" style="padding-top: 0px">
                        <div class="box-header with-border">

                            <div class="box-tools pull-right" style="padding-top: 0px">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            </div>
                        </div>
                        <!-- /.box-header -->

                        <div class="box-body table-responsive">
                            <table id='customer_table' class="table table-striped table-bordered col-lg-12">

                                <thead >

                                <tr>
                                    <th><input name="checkbox[]" id="master" type="checkbox" ></th>

                                    <th><a href="#" data-sort="CustomerID">Item ID</a></th>
                                    <th><a href="#" data-sort="CustomerCode">Item Name</a></th>
                                    <th><a href="#" data-sort="CustomerCode">Item Category</a></th>
                                    <th><a href="#" data-sort="CustomerName"> Item Image</a></th>
                                    <th><a href="#" data-sort="CustomerAddress">Item_details</a></th>
                                    <th><a href="#" data-sort="CustomerContact">Supplier</a></th>
                                    <th><a href="#" data-sort="CustomerRegDate">Price</a></th>

                                </tr>

                                <tr id="w1-filters" class="filters">
                                    <td></td>
                                    <td>&nbsp;</td>
                                    <td>
                                        <input id ="target" type="text" class="form-control" name="EmpSearch[CustomerCode]">
                                    </td>
                                    <td>
                                        <input id ="target_1" type="text" class="form-control" name="EmpSearch[CustomerName]">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" name="EmpSearch[CustomerAddress]">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" name="EmpSearch[CustomerContact]">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" name="EmpSearch[CustomerRegDate]">
                                    </td>


                                </tr>



                                </thead>



                                <?php
                                $count = 1;
                                foreach ($itemData as $row){




                                    ?><tr>
                                    <td><input name="checkbox[]" class="case" type="checkbox" value=<?php echo $row->item_id;?>></td>
                                    <td><?php echo $row->item_id;?></td>

                                    <td><?php echo $row->service_name;?></td>
                                    <td><?php echo $row->Item_Category;?></td>
                                    <td><img src="<?php echo base_url().'uploads/'.$row->image; ?>" height="60" width="100"></td>

                                    <td><?php echo $row->details;?></td>
                                    <td><?php echo $row->supplier_name;?></td>
                                    <td><?php echo $row->price;?></td>

                                    </tr>


                                    <?php

                                    $count = $count+1;

                                }
                                ?>
                            </table>

                        </div>
                    </div>

                </div>
            </form>


        </div>
    </section>

    <!-- /.content -->

</div>
<!-- /.content-wrapper -->



<?php include "includes/adminFooter.php";?>

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
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
    $( ".form-control" ).keyup(function(e) {

        var valueField = $(this).attr('id');
        // Declare variables
        var input, filter, table, tr, td,td1, i,td_test;
        input = document.getElementById(valueField.toString());
        filter = input.value.toUpperCase();
        table = document.getElementById("customer_table");
        tr = table.getElementsByTagName("tr");




        // Loop through all table rows, and hide those who don't match the search query
        for (i = 2; i < tr.length; i++) {
            if(valueField == "target"){
                td = tr[i].getElementsByTagName("td")[2];
            }
            else if(valueField == "target_1"){
                td = tr[i].getElementsByTagName("td")[3];
            }

            if (td) {
                if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }


    });

    $("#update_customer").click(function(){

        var rowCount = 0;
        var array;

        $('#customer_table input:checkbox:checked').each(function() {
            rowCount ++;
            array = $(this).parent().siblings().map(function() {
                return $(this).text().trim();
            }).get();

        });

        if(rowCount ==1){
            $('#CustID').val(array[0]);
            $('#CustCode').val(array[1]);
            $('#CustName1').val(array[2]);



            $('#CustContact').val(array[4]);
            $('#Custsup').val(array[5]);
            $('#CustPrice').val(array[6]);

            $("#addrow").modal();
        }else{

            alert("Error, Select only one row");
        }

    });

    function delete_customer() {



        var rowCount = 0;
        var array;

        $('#customer_table input:checkbox:checked').each(function() {
            rowCount ++;
            array = $(this).parent().siblings().map(function() {
                return $(this).text().trim();
            }).get();

        });

        if(rowCount ==0){


            alert("Select One Row");

            return false;



        }else{

            if(confirm('Are you sure')){

                return true;
            }else{
                return false;
            }

        }

    }


</script>

<script src="<?php echo base_url()?>template/bower_components/newCss/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url()?>template/bower_components/newCss/js/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url()?>template/bower_components/newCss/js/dataTables.checkboxes.min.js"></script>


<script>

    jQuery('#master').on('click', function(e) {
        if($(this).is(':checked',true))
        {
            $(".case").prop('checked', true);
        }
        else
        {
            $(".case").prop('checked',false);
        }
    });
</script>

