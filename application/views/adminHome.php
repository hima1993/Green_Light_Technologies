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


    <section class="content" style="margin-bottom: auto;">



        <div class="row">
            <div class="col-md-6">
                <!-- LINE CHART -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Customers Hierachy</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>

                    <div class="box-body chart-responsive">
                        <div  id="num_customers" style="height: 300px;"></div>
                    </div>


                </div>

            </div>


            <div class="col-md-6">





                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Item Quantity By Category</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>

                    <div class="box-body chart-responsive">
                        <div  id="items" style="height: 300px;"></div>
                    </div>


                </div>







            </div>


        </div>


        <div class="row">

            <div class="col-md-6">
                <!-- LINE CHART -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Month Wise Sales</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>

                    <div class="box-body chart-responsive">
                        <div  id="bar_chart" style="height: 300px;"></div>
                    </div>


                </div>

            </div>


            <div class="col-md-6">
                <!-- LINE CHART -->

                <iframe src="https://calendar.google.com/calendar/embed?src=en.lk%23holiday%40group.v.calendar.google.com&ctz=Asia%2FColombo" style="border: 0" width="584.44" height="310" frameborder="0" scrolling="no"></iframe>


            </div>


        </div>


</div>






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

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>



<script type="text/javascript">
    // Load the Visualization API and the line package.
    google.charts.load('current', {'packages':['bar']});
    // Set a callback to run when the Google Visualization API is loaded.
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {


        $.ajax({
            type: 'POST',
            url: 'http://localhost/webprj/index.php/ChartController/barchart',

            dataType:'JSON',

            success: function (response) {
                // Create our data table out of JSON data loaded from server.
                var data = new google.visualization.DataTable();


                data.addColumn('string', 'Month');
                data.addColumn('number', 'Sales');









                var jan =0;
                var feb = 0;
                var mar = 0;
                var apr = 0;
                var may = 0;
                var jun = 0;
                var jul = 0;
                var aug = 0;
                var sep = 0;
                var oct =0;
                var nov = 0;
                var dec =0;

                for (i = 0, len =response.data2.custNum1.length, text = ""; i < len; i++) {




                    var month = parseInt(response.data2.custNum1[i]['mon']);



                    switch (month) {

                        case 1:
                            jan = parseInt(response.data2.custNum1[i]['Nocust']);
                            break;

                        case 2:
                            feb = parseInt(response.data2.custNum1[i]['Nocust']);
                            break;

                        case 3:
                            mar = parseInt(response.data2.custNum1[i]['Nocust']);
                            break;

                        case 4:
                            apr = parseInt(response.data2.custNum1[i]['Nocust']);
                            break;

                        case 5:
                            may = parseInt(response.data2.custNum1[i]['Nocust']);
                            break;


                        case 6:
                            jun = parseInt(response.data2.custNum1[i]['Nocust']);
                            break;


                        case 7:
                            jul = parseInt(response.data2.custNum1[i]['Nocust']);
                            break;

                        case 8:
                            aug = parseInt(response.data2.custNum1[i]['Nocust']);
                            break;

                        case 9:
                            sep = parseInt(response.data2.custNum1[i]['Nocust']);
                            break;

                        case 10:
                            oct = parseInt(response.data2.custNum1[i]['Nocust']);
                            break;

                        case 11:
                            nov = parseInt(response.data2.custNum1[i]['Nocust']);
                            break;

                        case 12:
                            dec = parseInt(response.data2.custNum1[i]['Nocust']);
                            break;


                        default:  document.write("Unknown grade<br />");


                    }







                }

                data.addRows([

                    ['JAN',  jan],
                    ['FEB',  feb],
                    ['MAR',  mar],
                    ['APR',  apr],
                    ['MAY',  may],
                    ['JUN',  jun],
                    ['JUL',  jul],
                    ['AUG',  aug],
                    ['SEP',  sep],
                    ['OCT',  oct],
                    ['NOV',  nov],
                    ['DEC',  dec]
                ]);

                var options = {


                    legend: 'none',
                    series: {
                        0: { color: '#e2431e' },


                    }

                };




                var chart = new google.charts.Bar(document.getElementById('bar_chart'));
                chart.draw(data, options);
            }
        });
    }
</script>




<script type="text/javascript">
    google.charts.load('current', {'packages':['line']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {



        $.ajax({
            type: 'POST',
            url: 'http://localhost/webprj/index.php/ChartController/linechart',

            // data: {"outlet":str},

            dataType:'JSON',

            success: function (response) {




                var jan =0;
                var feb = 0;
                var mar = 0;
                var apr = 0;
                var may = 0;
                var jun = 0;
                var jul = 0;
                var aug = 0;
                var sep = 0;
                var oct =0;
                var nov = 0;
                var dec =0;

                for (i = 0, len =response.data2.custNum.length, text = ""; i < len; i++) {




                    var month = parseInt(response.data2.custNum[i]['mon']);



                    switch (month) {

                        case 1:
                            jan = parseInt(response.data2.custNum[i]['Nocust']);
                            break;

                        case 2:
                            feb = parseInt(response.data2.custNum[i]['Nocust']);
                            break;

                        case 3:
                            mar = parseInt(response.data2.custNum[i]['Nocust']);
                            break;

                        case 4:
                            apr = parseInt(response.data2.custNum[i]['Nocust']);
                            break;

                        case 5:
                            may = parseInt(response.data2.custNum[i]['Nocust']);
                            break;


                        case 6:
                            jun = parseInt(response.data2.custNum[i]['Nocust']);
                            break;


                        case 7:
                            jul = parseInt(response.data2.custNum[i]['Nocust']);
                            break;

                        case 8:
                            aug = parseInt(response.data2.custNum[i]['Nocust']);
                            break;

                        case 9:
                            sep = parseInt(response.data2.custNum[i]['Nocust']);
                            break;

                        case 10:
                            oct = parseInt(response.data2.custNum[i]['Nocust']);
                            break;

                        case 11:
                            nov = parseInt(response.data2.custNum[i]['Nocust']);
                            break;

                        case 12:
                            dec = parseInt(response.data2.custNum[i]['Nocust']);
                            break;


                        default:  document.write("Unknown grade<br />");


                    }



                    var data = new google.visualization.DataTable();
                    data.addColumn('string', 'Month');
                    data.addColumn('number', 'Number of Customers');





                }

                data.addRows([

                    ['JAN',  jan],
                    ['FEB',  feb],
                    ['MAR',  mar],
                    ['APR',  apr],
                    ['MAY',  may],
                    ['JUN',  jun],
                    ['JUL',  jul],
                    ['AUG',  aug],
                    ['SEP',  sep],
                    ['OCT',  oct],
                    ['NOV',  nov],
                    ['DEC',  dec]
                ]);

                var options = {


                    legend: 'none',
                    series: {
                        0: { color: '#e2431e' },


                    }

                };

                var chart = new google.charts.Line(document.getElementById('num_customers'));

                chart.draw(data, google.charts.Line.convertOptions(options));

            }
        });
    }
</script>



<script type="text/javascript">





    google.charts.load("current", {packages:["corechart"]});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {


        // var e = document.getElementById("outlet");
        // var str = e.options[e.selectedIndex].text;


        $.ajax({
            type: 'POST',
            url: 'http://localhost/webprj/index.php/ChartController/pieChart',

            // data: {"outlet":str},

            dataType:'JSON',

            success: function (response) {


                var led = response.data.led[0]["count"];
                var carAudio = response.data.carAudio[0]["count"];
                var vehiSec = response.data.vehiSec[0]["count"];
                var cctv = response.data.cctv[0]["count"];


                console.log(led);
                console.log(carAudio);
                console.log(vehiSec);
                console.log(cctv);


                var total = parseInt(led)+parseInt(carAudio)+parseInt(vehiSec)+parseInt(cctv);



                var data = google.visualization.arrayToDataTable([
                    ['Task', 'Percentage'],


                    ['LED SIGN BOARDS', parseInt(led) ],
                    ['CAR AUDIO SYSTEMS',  parseInt(carAudio)],
                    ['VEHICLE SECURITY',  parseInt(vehiSec)],
                    ['CCTV CAMERA', parseInt(cctv)],

                ]);

                var options = {
                    title: 'Daily Sales Summary',
                    pieHole: 0.4,
                };

                var chart = new google.visualization.PieChart(document.getElementById('items'));
                chart.draw(data, options);
            }
        });
    }
</script>

