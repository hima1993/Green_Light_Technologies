
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
                <h3>Delivery</h3>

                <h4>Please Select Your Delivery Items</h4>


                <div class="box box-primary" style="padding-top: 0px">
                    <div class="box-body table-responsive">
                        <table id='customer_table' class="table table-striped table-bordered col-lg-12">

                            <thead>
                            <tr>

                                <th>Cart No</th>
                                <th>Item No</th>
                                <th>Item Name</th>
                                <th>Item View</th>
                                <th>Price</th>

                                <th>#</th>



                            </tr>


                            <?php

                            $total = 0;



                            foreach ($cartData as $row) {


                                $total += $row["price"];

                                $id = $row["item_id"];









                                ?>
                                <tr  data-id=<?php echo $row["cart_id"];?>>

                                    <td><?php echo $row["item_id"]; ?></td>
                                    <td><?php echo $row["service_name"]; ?></td>
                                    <td><img src="<?php echo base_url().'uploads/'.$row["image"]; ?>" height="60" width="100"></td>
                                    <td  data-id=<?php echo $row["price"];?>><?php echo $row["price"]; ?></td>

                                    <td><button value="<?php echo $row["item_id"]; ?>" onclick="deleteItem(this);" class="btn btn-danger" >Remove Item</button></td>

                                </tr>







                                <?php

                            }


                            ?>








                            </thead>

                        </table>
                    </div>

                </div>
                <form method="POST" action="<?php echo base_url()?>index.php/ItemsController/buy" >

                    <label> Total</label>
                    <input type="text" name="total" id="total" value="0">
                    <button type="submit" class="btn btn-primary btn-success" >Purchased</button>

                </form>


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



    function codeAddress() {


        var tot = <?php echo $total; ?>

            document.getElementById("total").value = tot;









    }
    window.onload = codeAddress;


</script>


<script type="text/javascript">



    function deleteItem(object){



        var itemId = object.value;


        //console.log(itemId);

        var cartId = $(event.target).closest('tr').data('id');






        $.ajax({
            type: "POST",
            url: "http://localhost/webprj/index.php/ItemsController/deleteItemfromCart",
            data: {"itemId":itemId,"cartId":cartId},
            dataType:'JSON',
            success:function(json)
            {



                location.reload();

            },
            error:function()
            {
                alert('Failed');
            }
        });



    }

</script>
