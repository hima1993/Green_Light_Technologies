<?php include "includes/adminHeader.php" ?>
<?php include "includes/adminSidebar.php" ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

	<section class="content-header">
            <h1>
                Green Light Technologies
                <br>
                <small><b>Welcome <strong> <?php echo $this->session->userData('loggername')?> </strong>
                				
                			</b></small>
            </h1>

            <ol class="breadcrumb">                       
                <li class="active">Home</li>
            </ol>
        </section>

  

</div>
<!-- /.content-wrapper -->



<?php include "includes/adminFooter.php" ?>

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="<?php echo base_url()?>template/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url()?>template/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>template/dist/js/adminlte.min.js"></script>