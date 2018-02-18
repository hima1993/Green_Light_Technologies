<?php include "includes/header.php" ?>













<!-- Header End====================================================================== -->
<div id="carouselBlk" style="background-color: #D5F2CD;">
    <div id="myCarousel" class="carousel slide">
        <div class="carousel-inner">
            <div class="item active">
                <div class="container">
                    <a href="#"><img style="width:100%" src="<?php echo base_url()?>template/themes/images/carousel/Car-audio.png" alt="special offers"/></a>
                    <div class="carousel-caption">
                        <h4>Second Thumbnail label</h4>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container">
                    <a href="#"><img style="width:100%" src="<?php echo base_url()?>template/themes/images/carousel/cctv.png" alt=""/></a>
                    <div class="carousel-caption">
                        <h4>Second Thumbnail label</h4>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container">
                    <a href="#"><img src="<?php echo base_url()?>template/themes/images/carousel/phones.png" alt=""/></a>
                    <div class="carousel-caption">
                        <h4>Second Thumbnail label</h4>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>

                </div>
            </div>
            <div class="item">
                <div class="container">
                    <a href="#"><img src="<?php echo base_url()?>template/themes/images/carousel/street.png" alt=""/></a>
                    <div class="carousel-caption">
                        <h4>Second Thumbnail label</h4>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>

                </div>
            </div>
            <div class="item">
                <div class="container">
                    <a href="#"><img src="<?php echo base_url()?>template/themes/images/carousel/house-wiring.png" alt=""/></a>
                    <div class="carousel-caption">
                        <h4>Second Thumbnail label</h4>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container">
                    <a href="#"><img src="<?php echo base_url()?>template/themes/images/carousel/phones.png" alt=""/></a>
                    <div class="carousel-caption">
                        <h4>Second Thumbnail label</h4>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div>
</div>
<div id="mainBody" style="background-color: #D5F2CD;">
    <div class="container">
        <div class="row">
            <!-- Sidebar ================================================== -->
            <?php include "includes/sidebar.php" ?>
            <!-- Sidebar end=============================================== -->
            <div class="span9">
                <div class="well well-small">
                    <h4>Featured new_img <small class="pull-right">200+ featured new_img</small></h4>
                    <div class="row-fluid">
                        <div id="featured" class="carousel slide">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <ul class="thumbnails">



                                        <?php


                                        foreach ($itemData as $row) {

                                            $itemid= $row->item_id;


                                            ?>



                                            <li class="span3">
                                                <div class="thumbnail">
                                                    <i class="tag"></i>
                                                    <a href="product_details.html"><img src="<?php echo base_url().'uploads/'.$row->image; ?>" alt=""></a>
                                                    <div class="caption">
                                                        <h5><?php echo $row->service_name;?></h5>
                                                        <h4><button value="<?php echo $itemid; ?>" id="update_customer" onclick="valid(this);"  class="btn  btn-info"  data-toggle="modal" data-target='#mymodal' >VIEW</button> <span class="pull-right"><?php echo $row->price;?></span></h4>
                                                    </div>
                                                </div>
                                            </li>


                                            <?php



                                        }


                                        ?>

                                    </ul>
                                </div>
                                <div class="item">
                                    <ul class="thumbnails">


                                        <?php


                                        foreach ($itemData8 as $row) {




                                            ?>




                                            <li class="span3">
                                                <div class="thumbnail">
                                                    <i class="tag"></i>
                                                    <a href="product_details.html"><img src="<?php echo base_url().'uploads/'.$row->image; ?>" alt=""></a>
                                                    <div class="caption">
                                                        <h5><?php echo $row->service_name;?></h5>
                                                        <h4><button value="<?php echo $itemid; ?>" id="update_customer" onclick="valid(this);"  class="btn  btn-info"  data-toggle="modal" data-target='#mymodal' >VIEW</button> <span class="pull-right"><?php echo $row->price;?></span></h4>
                                                    </div>
                                                </div>
                                            </li>




                                            <?php



                                        }




                                        ?>








                                    </ul>
                                </div>



                                <div class="item">
                                    <ul class="thumbnails">

                                        <?php


                                        foreach($itemData9 as $row) {




                                            ?>


                                            <li class="span3">
                                                <div class="thumbnail">
                                                    <i class="tag"></i>
                                                    <a href="product_details.html"><img src="<?php echo base_url().'uploads/'.$row->image; ?>" alt=""></a>
                                                    <div class="caption">
                                                        <h5><?php echo $row->service_name;?></h5>
                                                        <h4><button value="<?php echo $itemid; ?>" id="update_customer" onclick="valid(this);"  class="btn  btn-info"  data-toggle="modal" data-target='#mymodal' >VIEW</button> <span class="pull-right"><?php echo $row->price;?></span></h4>
                                                    </div>
                                                </div>
                                            </li>

                                            <?php



                                        }




                                        ?>



                                    </ul>
                                </div>

                            </div>
                            <a class="left carousel-control" href="#featured" data-slide="prev">‹</a>
                            <a class="right carousel-control" href="#featured" data-slide="next">›</a>
                        </div>
                    </div>
                </div>








                <h4 style="font-family: Garamond; font-size: 250%; margin-left:310px;">OUR SERVICES </h4>

                <?php
                $loggername = $this->session->userData('loggername');
                if( $loggername == ""){
                    ?>
                    <div class="orb" style="font-size:13px; font-family:fantasy;">


                        <ul class="orbit">
                            <li style=" color:#FCF62B;  background-image:url(template/themes/images/leddd.png);"><a href="<?php echo base_url()?>/index.php/Other/GoDesLed">LED SIGN BOARDS</a>

                                <ul >

                                    <li style="color: #0624FA;">Indoor Color

                                        <ul>
                                            <li>Single Color Module</li>
                                            <li>Dual Color Module</li>
                                            <li>Full Color Module</li>


                                        </ul>
                                    </li>
                                    <li style="color: #0624FA;">Outdoor Color
                                        <ul>
                                            <li>Single Color Module</li>
                                            <li>Dual Color Module</li>
                                            <li>Full Color Module</li>


                                        </ul>
                                    </li>

                                </ul>


                            </li>
                            <li style=" color:#FCF62B;  background-image:url(template/themes/images/ad.jpg);"><a href="<?php echo base_url()?>/index.php/Other/GoDesCar">CAR AUDIO SYSTEM</a>
                                <ul >
                                    <li style="color: #0624FA;">Car Speakers</li>
                                    <li style="color: #0624FA;">Car Amplifiers</li>
                                    <li style="color: #0624FA;">ATV/UTV

                                    </li>

                                </ul>


                            </li>
                            <li style=" color:#FCF62B;  background-image:url(template/themes/images/cam.png);"><a href="<?php echo base_url()?>/index.php/Other/GoDescctv">CCTV SYSTEM</a>
                                <ul >
                                    <li style="color: #0624FA;">DVR</li>
                                    <li style="color: #0624FA;">NVR</li>
                                    <li style="color: #0624FA;">HD Cameras

                                    </li>
                                    <li style="color: #0624FA;">Monitor/TV</li>

                                </ul>


                            </li>
                            <li style=" color:#FCF62B;  background-image:url(template/themes/images/key.jpg);"><a href="<?php echo base_url()?>/index.php/Other/GoDesvehi">VEHICLE SECURITY</a>
                                <ul >
                                    <li style="color: #0624FA;">Impact Sensors</li>
                                    <li style="color: #0624FA;">Anti-hijack</li>
                                    <li style="color: #0624FA;">Central Locking
                                        <ul>
                                            <li>Remote Locking</li>
                                            <li>Manual Locking</li>

                                        </ul>
                                    </li>

                                </ul>
                            </li>
                            <li style=" color:#FCF62B;  background-image:url(template/themes/images/bulbs.jpg);"><a href="<?php echo base_url()?>/index.php/Other/GoDesOther">OTHER ELECTRONICS</a>

                                <ul >
                                    <li style="color: #0624FA;">House Wiring</li>
                                    <li style="color: #0624FA;">LED Bulbs
                                        <ul>
                                            <li>Spotlight</li>
                                            <li>Galf Ball</li>
                                            <li>Reflector</li>

                                        </ul>
                                    </li>

                                </ul>


                            </li>

                        </ul>

                    </div>


                    <?php
                }
                else{
                    ?>


                    <div class="orb" style="font-size:13px; font-family:fantasy;">


                        <ul class="orbit">
                            <li style=" color:#FCF62B;  background-image:url(../../webprj/template/themes/images/leddd.png);">><a href="<?php echo base_url()?>/index.php/Other/GoDesLed">LED SIGN BOARDS</a>

                                <ul >

                                    <li style="color: #0624FA;">Indoor Color

                                        <ul>
                                            <li>Single Color Module</li>
                                            <li>Dual Color Module</li>
                                            <li>Full Color Module</li>


                                        </ul>
                                    </li>
                                    <li style="color: #0624FA;">Outdoor Color
                                        <ul>
                                            <li>Single Color Module</li>
                                            <li>Dual Color Module</li>
                                            <li>Full Color Module</li>


                                        </ul>
                                    </li>

                                </ul>


                            </li>
                            <li style=" color:#FCF62B;  background-image:url(../../webprj/template/themes/images/ad.jpg);"><a href="<?php echo base_url()?>/index.php/Other/GoDesCar">CAR AUDIO SYSTEM</a>
                                <ul >
                                    <li style="color: #0624FA;">Car Speakers</li>
                                    <li style="color: #0624FA;">Car Amplifiers</li>
                                    <li style="color: #0624FA;">ATV/UTV

                                    </li>

                                </ul>


                            </li>
                            <li style=" color:#FCF62B;  background-image:url(../../webprj/template/themes/images/cam.png);"><a href="<?php echo base_url()?>/index.php/Other/GoDescctv">CCTV SYSTEM</a>
                                <ul >
                                    <li style="color: #0624FA;">DVR</li>
                                    <li style="color: #0624FA;">NVR</li>
                                    <li style="color: #0624FA;">HD Cameras

                                    </li>
                                    <li style="color: #0624FA;">Monitor/TV</li>

                                </ul>


                            </li>
                            <li style=" color:#FCF62B;  background-image:url(../../webprj/template/themes/images/key.jpg);"><a href="<?php echo base_url()?>/index.php/Other/GoDesvehi">VEHICLE SECURITY</a>
                                <ul >
                                    <li style="color: #0624FA;">Impact Sensors</li>
                                    <li style="color: #0624FA;">Anti-hijack</li>
                                    <li style="color: #0624FA;">Central Locking
                                        <ul>
                                            <li>Remote Locking</li>
                                            <li>Manual Locking</li>

                                        </ul>
                                    </li>

                                </ul>
                            </li>
                            <li style=" color:#FCF62B;  background-image:url(../../webprj/template/themes/images/bulbs.jpg);"><a href="<?php echo base_url()?>/index.php/Other/GoDesOther">OTHER ELECTRONICS</a>

                                <ul >
                                    <li style="color: #0624FA;">House Wiring</li>
                                    <li style="color: #0624FA;">LED Bulbs
                                        <ul>
                                            <li>Spotlight</li>
                                            <li>Galf Ball</li>
                                            <li>Reflector</li>

                                        </ul>
                                    </li>

                                </ul>


                            </li>

                        </ul>

                    </div>



                    <?php
                } ?>


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






<!-- Footer ================================================================== -->
<?php include "includes/footer.php";?>

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



    function showfeedback(data){




        <?php


        $loggername = $this->session->userData('loggername');


        if($loggername == ""){

        ?>





        $("#login").modal();





        <?php


        }else{





        ?>


        window.location.href = "http://localhost/webprj/index.php/Other/GofeedBack";



        <?php


        }



        ?>












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