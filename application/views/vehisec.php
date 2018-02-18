<?php include "includes/header.php" ?>

<div id="mainBody">
    <div class="container">
        <div class="row">
            <!-- Sidebar ================================================== -->
            <?php include "includes/sidebar.php" ?>
            <!-- Sidebar end=============================================== -->
            <div class="span9">
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a> <span class="divider">/</span></li>
                    <li class="active">Delivery</li>
                </ul>
                <h3>LED SIGN BOARDS</h3>

                <h4>Please Select Your Items</h4>



                <div id="myTab" class="pull-right">
                    <a href="#listView" data-toggle="tab"><span class="btn btn-large"><i class="icon-list"></i></span></a>
                    <a href="#blockView" data-toggle="tab"><span class="btn btn-large btn-primary"><i class="icon-th-large"></i></span></a>
                </div>
                <br class="clr"/>
                <div class="tab-content">
                    <div class="tab-pane" id="listView">









                        <?php


                        foreach ($itemData as $row) {

                            $itemid= $row->item_id;


                            ?>

                            <div class="row">
                                <div class="span2">
                                    <img src="<?php echo base_url().'uploads/'.$row->image; ?>" alt="">
                                </div>
                                <div class="span4">
                                    <h3>New | Available</h3>
                                    <hr class="soft"/>
                                    <h5><?php echo $row->service_name;?></h5>

                                    <br class="clr"/>
                                </div>
                                <div class="span3 alignR">

                                    <h3><?php echo "Rs:".$row->price;?></h3>



                                    <button value="<?php echo $itemid; ?>" id="update_customer" onclick="valid(this);"  class="btn btn-large btn-primary"  data-toggle="modal" data-target='#mymodal' >VIEW</button>



                                </div>
                            </div>

                            <hr class="soft"/>

                            <?php



                        }


                        ?>











                    </div>

                    <div class="tab-pane  active" id="blockView">
                        <ul class="thumbnails">



                            <?php


                            foreach ($itemData as $row) {

                                $itemid= $row->item_id;


                                ?>



                                <li class="span3">
                                    <div class="thumbnail">
                                        <a href="#"><img src="<?php echo base_url().'uploads/'.$row->image; ?>" alt=""></a>
                                        <div class="caption">
                                            <h5><?php echo $row->service_name;?></h5>

                                            <h5><?php echo "Rs:".$row->price;?></h5>

                                            <h4 style="text-align:center"><button value="<?php echo $itemid; ?>" id="update_customer" onclick="valid(this);"  class="btn btn-large btn-primary"  data-toggle="modal" data-target='#mymodal' >VIEW</button></h4>
                                        </div>
                                    </div>
                                </li>



                                <?php



                            }


                            ?>







                        </ul>
                        <hr class="soft"/>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>




<div class="modal fade" id="mymodal" role="dialog" >
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">


            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <label><h4> Item No: </h4></label><h4 class="modal-title" id="ItemNo"></h4>
            </div>






            <div class="modal-body" >


                <table >


                    <tr>


                        <td rowspan="3" style="padding-right:30px; ">



                            <img id="image11" src="" alt="" style="width:200px;height:150px;">






                        </td>




                        <td >

                            <label for="CustCode" class="control-label"><b>Product Name  :</b></label>


                        </td>


                        <td>
                            <label id="CustCode" class="control-label"></label>


                        </td>







                    </tr>







                    <tr>




                        <td >


                            <label for="CustAddress" class="control-label"><b>Product Price  :</b></label>


                        </td>


                        <td>


                            <label id="CustAddress" class="control-label"></label>

                        </td>











                    </tr>
                    <tr>





                        <td >



                            <label for="CustAddress" class="control-label"><b>Product Details  :</b></label>


                        </td>


                        <td>


                            <label id="CustContact" class="control-label"></label>

                        </td>














                    </tr>































                </table>











                <div class="modal-footer" >
                    <button type="submit" class="btn btn-primary btn-success" name="UpdateCust" value="Update" onclick="addtocart(this);" >Add to Cart</button>

                </div>

                <!-- <div class="col-xs-2">
                    <button type="submit" class="btn btn-block btn-success" name="register">Submit</button>
                </div> -->



            </div>



        </div>




    </div>

</div>





<?php include "includes/footer.php";?>

<script >
    $(function() {
        //Date picker
        $('#datepicker').datepicker({
            autoclose: true
        })
    })

</script>


<script type="text/javascript">






    function valid(object){


        //var id = document.getElementById("update_customer");



        var id = object.value;

        $.ajax({
            type: "POST",
            url: "http://localhost/webprj/index.php/ItemsController/viewItem",
            data: {"id":id},
            dataType:'JSON',
            success:function(json)
            {

                console.log(json.data.itemdetails[0]["item_id"]);




                document.getElementById("ItemNo").innerHTML = json.data.itemdetails[0]["item_id"];

                document.getElementById("CustCode").innerHTML = json.data.itemdetails[0]["service_name"];

                document.getElementById("CustAddress").innerHTML = json.data.itemdetails[0]["price"];

                document.getElementById("CustContact").innerHTML = json.data.itemdetails[0]["details"];









                document.getElementById("image11").src = "http://localhost/webprj/uploads/"+ json.data.itemdetails[0]["image"]




            },
            error:function()
            {
                alert('Failed');
            }
        });


    }



    function addtocart(data){


        <?php


        $loggername = $this->session->userData('loggername');


        if($loggername == ""){

        ?>


        $("#mymodal").modal('hide');


        $("#login").modal();





        <?php


        }else{





        ?>



        var id = <?php echo $this->session->userData('loggerid'); ?>


        var itemId = document.getElementById("ItemNo").innerHTML;

        $.ajax({
            type: "POST",
            url: "http://localhost/webprj/index.php/ItemsController/addtocart",
            data: {"id":id,"itemId":itemId},
            dataType:'JSON',
            success:function(json)
            {






            },
            error:function()
            {
                alert('Failed');
            }
        });









        <?php
        }


        ?>
























    }





    function showCart(data){



        <?php


        $loggername = $this->session->userData('loggername');


        if($loggername == ""){

        ?>





        $("#login").modal();





        <?php


        }else{


        ?>



        window.location.href = "http://localhost/webprj/index.php/ItemsController/showCart";


        <?php




        }
        ?>




    }
</script>


<script type="text/javascript">

    function ajaxSearch()
    {
        var input_data = $('#search_data').val();

        if (input_data.length === 0)
        {
            $('#suggestions').hide();
        }
        else
        {

            var post_data = {
                'search_data': input_data,
                '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
            };

            $.ajax({
                type: "POST",
                url: "http://localhost/webprj/index.php/ItemsController/searchList",
                data: post_data,
                success: function (data) {
                    // return success
                    if (data.length > 0) {
                        $('#suggestions').show();
                        $('#autoSuggestionsList').addClass('auto_list');
                        $('#autoSuggestionsList').html(data);
                    }
                }
            });

        }
    }
</script>
