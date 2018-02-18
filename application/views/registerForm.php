
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
                    <li class="active">Registration</li>
                </ul>
                <h3> Registration</h3>
                <div class="well">
                    <!--
                    <div class="alert alert-info fade in">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                     </div>
                    <div class="alert fade in">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                     </div>
                     <div class="alert alert-block alert-error fade in">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>Lorem Ipsum is simply</strong> dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                     </div> -->
                    <form class="form-horizontal"  method="post" action="<?php echo base_url()?>index.php/Users/RegCustomer" >
                        <h4>Your personal information</h4>
                        <div class="control-group">
                            <label class="control-label">Title <sup style="color: #F11409; font-size: 15px;">*</sup></label>
                            <div class="controls">
                                <select class="span1" name="Title">
                                    <option value="">-</option>
                                    <option value="Mr">Mr.</option>
                                    <option value="Mrs">Mrs</option>
                                    <option value="Miss">Miss</option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="inputFname1">First name <sup style="color: #F11409; font-size: 15px;">*</sup></label>
                            <div class="controls">
                                <input type="text" id="inputFname1" placeholder="First Name"  name="Fname" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="inputLnam">Last name <sup style="color: #F11409; font-size: 15px;">*</sup></label>
                            <div class="controls">
                                <input type="text" id="inputLnam" placeholder="Last Name"  name="Lname" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="input_email">Email <sup style="color: #F11409; font-size: 15px;">*</sup></label>
                            <div class="controls">
                                <input type="email" id="input_email" placeholder="Email"  name="Email" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="inputPassword1">Password <sup style="color: #F11409; font-size: 15px;">*</sup></label>
                            <div class="controls">
                                <input type="password" id="inputPassword1" placeholder="Password" name="Password" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Date of Birth <sup style="color: #F11409; font-size: 15px;">*</sup></label>
                            <div class="controls">
                                <input type="text" id="datepicker" name="Dob">

                            </div>
                        </div>

                        <h4>Contact Details</h4>
                        <div class="control-group">
                            <label class="control-label" for="inputFname">First name <sup style="color: #F11409; font-size: 15px;">*</sup></label>
                            <div class="controls">
                                <input type="text" id="inputFname" placeholder="First Name">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="inputLname">Last name <sup style="color: #F11409; font-size: 15px;">*</sup></label>
                            <div class="controls">
                                <input type="text" id="inputLname" placeholder="Last Name"/>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="address">Address<sup style="color: #F11409; font-size: 15px;">*</sup></label>
                            <div class="controls">
                                <input type="text" id="address" placeholder="Adress" name="Address1" required/>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="address2">Address (Line 2)<sup style="color: #F11409; font-size: 15px;">*</sup></label>
                            <div class="controls">
                                <input type="text" id="address2" placeholder="Adress line 2" name="Address2" required />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="city">City<sup style="color: #F11409; font-size: 15px;">*</sup></label>
                            <div class="controls">
                                <input type="text" id="city" placeholder="city" name="City" required />
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="postcode">Zip / Postal Code<sup style="color: #F11409; font-size: 15px;">*</sup></label>
                            <div class="controls">
                                <input type="number" id="postcode" placeholder="Zip / Postal Code" name="Zip" required/>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="aditionalInfo">Additional information</label>
                            <div class="controls">
                                <textarea  id="aditionalInfo" cols="26" rows="3" name="textArea">Additional information</textarea>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="phone">Home phone <sup style="color: #F11409; font-size: 15px;">*</sup></label>
                            <div class="controls">
                                <input type="text"  name="phone" id="phone" placeholder="phone" pattern="[0-9]{10}" title="Phone number 10 digit number" name="phone" required />
                            </div>
                        </div>



                        <p><sup style="color: #F11409; font-size: 15px;">*</sup>Required field	</p>

                        <div class="control-group">
                            <table>

                                <tr>
                                    <td>
                                        <input class="btn btn-large btn-success" type="submit" value="Register" style="margin-left:180px;">
                                    </td>

                                    <td>
                                        <input class="btn btn-large " type="submit" value="Clear" style="margin-left:100px; ">
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
