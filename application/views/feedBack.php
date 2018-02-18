
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
                    <li class="active">Feed Back</li>
                </ul>
                <h3>FEEDBACK FORUM</h3>
                <div class="well">

                    <form class="form-horizontal"  method="post" action="<?php echo base_url()?>index.php/Other/submitFeedBack" >
                        <h4>Your personal information</h4>


                        <div class="control-group">
                            <label class="control-label" for="inputLnam">Your Name<sup style="color: #F11409; font-size: 15px;">*</sup></label>
                            <div class="controls">
                                <input type="text" id="inputLnam" placeholder="Your Name"  name="Lname">
                            </div>
                        </div>


                        <div class="control-group">
                            <label class="control-label" for="aditionalInfo">Your FeedBack</label>
                            <div class="controls">
                                <textarea  id="aditionalInfo" cols="26" rows="3" name="textArea" required></textarea>
                            </div>
                        </div>



                        <p><sup style="color: #F11409; font-size: 15px;">*</sup>Required field  </p>

                        <div class="control-group">
                            <table>

                                <tr>
                                    <td>
                                        <input class="btn btn-large btn-success" type="submit" value="Register" style="margin-left:180px;">
                                    </td>




                                </tr>





                            </table>

                    </form>
                </div>

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
