
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
			  <input type="text" id="inputFname1" placeholder="First Name"  name="Fname">
			</div>
		 </div>
		 <div class="control-group">
			<label class="control-label" for="inputLnam">Last name <sup style="color: #F11409; font-size: 15px;">*</sup></label>
			<div class="controls">
			  <input type="text" id="inputLnam" placeholder="Last Name"  name="Lname">
			</div>
		 </div>
		<div class="control-group">
		<label class="control-label" for="input_email">Email <sup style="color: #F11409; font-size: 15px;">*</sup></label>
		<div class="controls">
		  <input type="text" id="input_email" placeholder="Email"  name="Email">
		</div>
	  </div>	  
	<div class="control-group">
		<label class="control-label" for="inputPassword1">Password <sup style="color: #F11409; font-size: 15px;">*</sup></label>
		<div class="controls">
		  <input type="password" id="inputPassword1" placeholder="Password" name="Password">
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
			  <input type="text" id="address" placeholder="Adress" name="Address1" /> 
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="address2">Address (Line 2)<sup style="color: #F11409; font-size: 15px;">*</sup></label>
			<div class="controls">
			  <input type="text" id="address2" placeholder="Adress line 2" name="Address2" /> 
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="city">City<sup style="color: #F11409; font-size: 15px;">*</sup></label>
			<div class="controls">
			  <input type="text" id="city" placeholder="city" name="City" /> 
			</div>
		</div>
				
		<div class="control-group">
			<label class="control-label" for="postcode">Zip / Postal Code<sup style="color: #F11409; font-size: 15px;">*</sup></label>
			<div class="controls">
			  <input type="text" id="postcode" placeholder="Zip / Postal Code" name="Zip" /> 
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
			  <input type="text"  name="phone" id="phone" placeholder="phone" name="phone" /> 
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
