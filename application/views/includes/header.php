<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Green Light Technologies</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

   		
        <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url()?>template/themes/bootshop/orbitcore.css" media='all' type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url()?>template/themes/bootshop/date-pick.css" media='all' type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url()?>template/themes/bootshop/orbitnew.css" media='all' type="text/css" />
        
<!--Less styles -->
   <!-- Other Less css file //different less files has different color scheam
	<link rel="stylesheet/less" type="text/css" href="themes/less/simplex.less">
	<link rel="stylesheet/less" type="text/css" href="themes/less/classified.less">
	<link rel="stylesheet/less" type="text/css" href="themes/less/amelia.less">  MOVE DOWN TO activate
	-->
	<!--<link rel="stylesheet/less" type="text/css" href="themes/less/bootshop.less">
	<script src="themes/js/less.js" type="text/javascript"></script> -->
	
<!-- Bootstrap style --> 

	
    <link id="callCss" rel="stylesheet" href="<?php echo base_url()?>template/themes/bootshop/bootstrap.min.css" media="screen"/>

    <link href="<?php echo base_url()?>template/themes/css/base.css" rel="stylesheet" media="screen"/>
<!-- Bootstrap style responsive -->	
	<link href="<?php echo base_url()?>template/themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
	<link href="<?php echo base_url()?>template/themes/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css" rel="stylesheet"/>
	<link href="<?php echo base_url()?>template/themes/css/font-awesome.css" rel="stylesheet" type="text/css">
	
	
  
<!-- Google-code-prettify -->

<link href="<?php echo base_url()?>template/themes/bootstrap-daterangepicker/daterangepicker.css
" rel="stylesheet"/>	
	<link href="<?php echo base_url()?>template/themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>
	<link href="themes/css/style.css" rel="stylesheet"/>
<!-- fav and touch icons -->
    <link rel="shortcut icon" href="<?php echo base_url()?>template/themes/images/ico/greenLight.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url()?>template/themes/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url()?>template/themes/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url()?>template/themes/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url()?>template/themes/images/ico/apple-touch-icon-57-precomposed.png">
	<style type="text/css" id="enject">


#autoSuggestionsList > li {
    background: none repeat scroll 0 0 #F3F3F3;
    border-bottom: 1px solid #E3E3E3;
    list-style: none outside none;
    padding: 3px 15px 3px 15px;
    text-align: left;
}

#autoSuggestionsList > li a { color: #800000; }

.auto_list {
    border: 1px solid #E3E3E3;
    border-radius: 5px 5px 5px 5px;
    position: absolute;
}
		

	</style>
  </head>
<body >
<div id="header" style="background-color: #D5F2CD;">
<div class="container">
<div id="welcomeLine" class="row">
	<div class="span6">Welcome!<strong> <?php echo $this->session->userData('loggername')?> </strong>
	</div>
	<div class="span6">
	<div class="pull-right">
		
		<a href="#"><span onclick="showCart(this);" class="btn btn-mini btn-primary"><i class="icon-shopping-cart icon-white"></i> Itemes in your cart </span> </a> 
	</div>
	</div>
</div>
<!-- Navbar ================================================== -->
<div id="logoArea" class="navbar" >
<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</a>
  <div class="navbar-inner" >
    <a class="brand" href="<?php echo base_url()?>index.php"><img src="<?php echo base_url()?>template/themes/images/gee.png" alt="Bootsshop"/></a>
		<form  class="form-inline navbar-search" method="post" action="<?php echo base_url()?>index.php/ItemsController/searchGo" >

		<div style="position: relative;">
		<input name="search_data" id="search_data" type="text" onkeyup="ajaxSearch();" placeholder="Search For anything.."  type="text" />

		<div id="suggestions"  >
	         <div id="autoSuggestionsList" style="position:absolute;z-index:201;"></div>
	     </div>

	 </div>




		  <select name="items" class="srchTxt">
			
			<option value="LED SIGN BOARDS">LED SIGN BOARDS</option>
			<option value="CAR AUDIO SYSTEMS">CAR AUDIO SYSTEMS </option>
			<option value="CCTV CAMERA SYSTEMS">CCTV CAMERA SYSTEMS </option>
			<option value="VEHICLE SECURITY SYSTEMS">VEHICLE SECURITY SYSTEMS </option>
			

		</select> 
		  <button type="submit" id="submitButton" class="btn btn-primary">Go</button>
    </form>




		
    <ul id="topMenu" class="nav pull-right">
	 <li class=""><a href="<?php echo base_url()?>index.php/ItemsController/Gospecial">Specials Offer</a>

	
	 </li>
	 <li  onclick="showfeedback(this);" class=""><a >FeedBack</a></li>
	 <li class=""><a href="<?php echo base_url()?>index.php/Other/GoAbout">About Us</a></li>
	 <li class="">
	 <?php 
	 $loggername = $this->session->userData('loggername');
	  if( $loggername == ""){
	 ?>
	 <a href="#login" role="button" data-toggle="modal" style="padding-right:0"><span class="btn btn-large btn-success">Login</span></a>
	 <div id="login" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="false" >

	 
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<table>

			<tr>

			<td>
			<div class="modal-header">
			<h3>Have An Account?</h3>
		  	</div>
			
		  </td>
		  <td>
		  	<div class="modal-header">
			<h3>Not yet?</h3>
		  	</div>
		  </td>
		</tr>
		<tr>
		  	<td>
		  <div class="modal-body">
			<form class="form-horizontal loginFrm" method="post" action="<?php echo base_url() ?>index.php/Users/loginchk">
			  <div class="control-group">								
				<input type="text" id="inputEmail" name="email" placeholder="Email">
			  </div>
			  <div class="control-group">
				<input type="password" id="inputPassword" name ="password"
				placeholder="Password">
			  </div>
			  <div class="control-group">
				<label class="checkbox">
				<input type="checkbox"> Remember me
				</label>
			 


			<button type="submit" class="btn btn-success" style="margin-left: 20px;">Sign in</button>
			
			<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>

			 </div>
			</form>
			 </div>
		</td>



		<td>


			
		    <div class="modal-body">

		    	<form class="form-horizontal loginFrm" method="post" action="<?php echo base_url() ?>index.php/Users/GoReg">
			  
			  <div class="control-group">
				
			  

			  <button type="submit" class="btn" style="width:180px; height: 180px;">Register</button>
				</div>
			</form>
		    </div>
		</td>
			</tr>
			</table>
	
	<?php 
	 }
	 else{
	?>

	<form  method="post" action="<?php echo base_url() ?>index.php/Users/signout">
 
	<button class="btn btn-large btn-success" style="margin-top: 15px;">Logout</button>


	</form>
	<?php
	} ?>


	
	
	 
		  

			
		 
	</div>
	</li>
    </ul>
  </div>
</div>


</div>
</div>


