<?php include('include/Head.php') ?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<link rel="stylesheet" href="<?= base_url()?>assets/admin/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="<?= base_url()?>assets/admin/vendor/font-awesome/css/font-awesome.min.css">

<link rel="stylesheet" href="<?= base_url()?>assets/admin/vendor/chartist/css/chartist.min.css">
<link rel="stylesheet" href="<?= base_url()?>assets/admin/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css">
<link rel="stylesheet" href="<?= base_url()?>assets/admin/vendor/toastr/toastr.min.css">

<link rel="stylesheet" href="<?= base_url()?>assets/admin/vendor/sweetalert/sweetalert.css"/>
<link rel="stylesheet" href="<?= base_url()?>assets/admin/vendor/jquery-datatable/dataTables.bootstrap4.min.css">
<!-- MAIN CSS -->
<link rel="stylesheet" href="<?= base_url()?>assets/admin/css/main.css">
<link rel="stylesheet" href="<?= base_url()?>assets/admin/css/color_skins.css">
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<style type="text/css">
    .my-error-class {
    color:red;
}
  .my-valid-class {
    color:green;
}

* {
  -webkit-box-sizing:border-box;
  -moz-box-sizing:border-box;
  box-sizing:border-box;
}
table#DataTables_Table_0 {
    width: 100% !important;
}
*:before, *:after {
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
}
.aj-add-chang {
    white-space: initial;
}
.clearfix {
  clear:both;
}

.text-center {text-align:center;}

a {
  color: tomato;
  text-decoration: none;
}

a:hover {
  color: #2196f3;
}

pre {
display: block;
padding: 9.5px;
margin: 0 0 10px;
font-size: 13px;
line-height: 1.42857143;
color: #333;
word-break: break-all;
word-wrap: break-word;
background-color: #F5F5F5;
border: 1px solid #CCC;
border-radius: 4px;
}

.header {
  padding:20px 0;
  position:relative;
  margin-bottom:10px;
  
}

.header:after {
  content:"";
  display:block;
  height:1px;
  background:#eee;
  position:absolute; 
  left:30%; right:30%;
}

.header h2 {
  font-size:3em;
  font-weight:300;
  margin-bottom:0.2em;
}

.header p {
  font-size:14px;
}



#a-footer {
  margin: 20px 0;
}

.new-react-version {
  padding: 20px 20px;
  border: 1px solid #eee;
  border-radius: 20px;
  box-shadow: 0 2px 12px 0 rgba(0,0,0,0.1);
  
  text-align: center;
  font-size: 14px;
  line-height: 1.7;
}

.new-react-version .react-svg-logo {
  text-align: center;
  max-width: 60px;
  margin: 20px auto;
  margin-top: 0;
}





.success-box {
  margin:50px 0;
  padding:10px 10px;
  border:1px solid #eee;
  background:#f9f9f9;
}

.success-box img {
  margin-right:10px;
  display:inline-block;
  vertical-align:top;
}

.success-box > div {
  vertical-align:top;
  display:inline-block;
  color:#888;
}



/* Rating Star Widgets Style */
.rating-stars ul {
  list-style-type:none;
  padding:0;
  
  -moz-user-select:none;
  -webkit-user-select:none;
}
.rating-stars ul > li.star {
  display:inline-block;
  
}

/* Idle State of the stars */
.rating-stars ul > li.star > i.fa {
  font-size:2.5em; /* Change the size of the stars */
  color:#ccc; /* Color on idle state */
}

/* Hover state of the stars */
.rating-stars ul > li.star.hover > i.fa {
  color:#FFCC36;
}

/* Selected state of the stars */
.rating-stars ul > li.star.selected > i.fa {
  color:#FF912C;
}
.aj-tebal-td {
    width: 100% !important;
    white-space: initial !important;
}
label .label-text {
    background: cyan;
}
label input.check:checked + .label-text {
    background: lime;
}
.aj-wid-chang {
    display: inline-grid;
    text-align: center;
}
.aj-wid-chang a {
    margin-bottom: 8px;
    width: fit-content;
}
.aj-wid-chang button {
    margin-bottom: 5px;
}

.highcharts-figure, .highcharts-data-table table {
    /* min-width: 310px;  */
    max-width: 100%;
    margin: 1em auto;
}

  #container {
      height: 400px;
  }

.highcharts-data-table table {
	font-family: Verdana, sans-serif;
	border-collapse: collapse;
	border: 1px solid #EBEBEB;
	margin: 10px auto;
	text-align: center;
	width: 100%;
	max-width: 100%;
}
.highcharts-data-table caption {
    padding: 1em 0;
    font-size: 1.2em;
    color: #555;
}
.highcharts-data-table th {
	font-weight: 600;
    padding: 0.5em;
}
.highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
    padding: 0.5em;
}
.highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
    background: #f8f8f8;
}
.highcharts-data-table tr:hover {
    background: #f1f7ff;
}


</style>


</head>
<body class="theme-orange">

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30">
            <img src="http://www.wrraptheme.com/templates/lucid/hr/html/assets/images/logo-icon.svg" width="48" height="48" alt="Lucid">
        </div>
        <p>Please wait...</p>        
    </div>
</div>
<!-- Overlay For Sidebars -->

<div id="wrapper">

        <?php include('include/Header.php');  ?>
        <?php $ses_data = $this->session->userdata('logsess');
       ?>   
  

    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Dashboard</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url().'Adminpanel/index'?>"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ul>
                    </div>            
                    
                </div>
            </div>
            <section class="dashboard">
              <div class="col-lg-12">
                <div class="new-row">
                  <a href="<?= base_url('Trainer_list') ?>" style="color:#5a5a5e">
                  <div class="box-all">
                    <div class="image">
                      <i class="fa fa-user"></i>
                    </div>
                      <div class="content">
                        <h4>Trainers</h4>
                        <h6><?= $trainer; ?></h6>
                      </div>
                  </div>
                  </a>
                  <a href="<?= base_url('Learner_list') ?>" style="color:#5a5a5e">
                  <div class="box-all">
                    <div class="image">
                      <i class="fa fa-users"></i>
                    </div>
                      <div class="content">
                        <h4>User</h4>
                        <h6><?= $users; ?></h6>
                      </div>
                  </div>
                  </a>
                  <a href="<?= base_url('Adminpanel/Adminpanel/Orders') ?>" style="color:#5a5a5e">
                  <div class="box-all">
                    <div class="image">
                      <i class="fa fa-university"></i>
                    </div>
                      <div class="content">
                        <h4>Order</h4>
                        <h6><?= $order; ?></h6>
                      </div>
                  </div>
                  </a>
                  <a href="<?= base_url('news_and_article') ?>" style="color:#5a5a5e">
                  <div class="box-all">
                    <div class="image">
                      <i class="icon-settings"></i>
                    </div>
                      <div class="content">
                        <h4>Blogs</h4>
                        <h6><?= $blog; ?></h6>
                      </div>
                  </div>
                  </a>
                  <a href="<?= base_url('View-course') ?>" style="color:#5a5a5e">
                  <div class="box-all">
                    <div class="image">
                      <i class="icon-grid"></i>
                    </div>
                      <div class="content">
                        <h4>Course</h4>
                        <h6><?= $course; ?></h6>
                      </div>
                  </div>
                  </a>
                  
                </div>
              </div>
            </section>
            <!-- <div class="row clearfix">
              <div class="col-lg-12">
                <div class="card">
                  <div class="header">
                      <h2>Categories Statistics</h2>
                  </div>
                  <div class="body">
                      <div class="col-lg-12">
                        <figure class="highcharts-figure">
                            <div id="containere"></div>
                          
                        </figure>
                      </div>
                  </div>
                </div>
              </div>
            </div>
 -->
            <script src="https://code.highcharts.com/highcharts.js"></script>
            <script src="https://code.highcharts.com/modules/exporting.js"></script>
            <script src="https://code.highcharts.com/modules/export-data.js"></script>
             <div class="row"> 
                <div class="col-lg-12 col-md-12 order-lg-12 order-md-12">
                      <div class="card">
                        <div class="card-body">
                            <span class="card-title" style="font-size: 20px"><i class="fas fa-chart-line"></i> Sales Analytics</span><span style="margin-left:2% !important">
                                <select id="select_sales">
                                    <!-- <option id="Today">Today</option> -->
                                    <option id="Week">Week</option>
                                    <option id="Month" selected="">Month</option>
                                    <option id="Year">Year</option>
                                </select></span>
                            <div id="container121" style="min-width: 360px; height: 360px; margin: 0 auto"></div>
                        </div>
                        
                    </div>
                </div>
            </div> 


            <div class="row clearfix">
              <div class="col-lg-12">
                      <div class="card">
                          <div class="header">
                            <h2>Latest Orders <a href="<?= base_url().'Adminpanel/Adminpanel/Orders' ?>"><button class="btn btn-primary" style="margin-left: 81%;">View All</button></a></h2>
                          </div>
                          <div class="body">
                              <div class="table-responsive">
                                  <table class=" datatable-buttt table table-hover table-bordered  js-basic-example dataTable table-custom m-b-0">
                                    <thead>
                                     <th>S. No.</th>
                                     <th>User Name</th>
                                     <th>Email</th>
                                     <th>Contact</th>
                                     <th>Country</th>
                                     <th>Price</th>
                                     <th>Company</th>
                                     <th>Order Date</th>
                                    </thead>
                                    <tbody>
                                       
                                    </tbody>
                                </table>
                              </div>
                          </div>
                      </div>
                </div>
            </div>
            <!-- <div class="row clearfix">
              <div class="col-lg-5">
                      <div class="card">
                          <div class="header">
                              <h2>Active User </h2>
                          </div>
                          <div class="body">
                              <div class="table-responsive">
                                  <table class="table table-bordered">
                                      <thead>
                                          <tr>
                                              <th>#</th>
                                              <th>Customer</th>
                                              <th>Status</th>
                                              <th>Date Added</th>
                                              <th>Total</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <tr>
                                              <th scope="row">1</th>
                                              <td>Mark</td>
                                              <td>Otto</td>
                                              <td>@mdo</td>
                                              <td>120</td>
                                          </tr>
                                          <tr>
                                              <th scope="row">2</th>
                                              <td>Jacob</td>
                                              <td>Thornton</td>
                                              <td>@fat</td>
                                              <td>120</td>
                                          </tr>
                                          <tr>
                                              <th scope="row">3</th>
                                              <td>Larry</td>
                                              <td>the Bird</td>
                                              <td>@twitter</td>
                                              <td>201</td>
                                          </tr>
                                          <tr>
                                              <th scope="row">4</th>
                                              <td>Larry</td>
                                              <td>Jellybean</td>
                                              <td>@lajelly</td>
                                              <td>120</td>
                                          </tr>
                                          <tr>
                                              <th scope="row">5</th>
                                              <td>Larry</td>
                                              <td>Kikat</td>
                                              <td>@lakitkat</td>
                                              <td>120</td>
                                          </tr>
                                      </tbody>
                                  </table>
                              </div>
                          </div>
                      </div>
                </div>
            </div> -->
        </div>
    </div>
    
</div>










<!-- Javascript -->
<script src="<?= base_url()?>assets/admin/bundles/libscripts.bundle.js"></script>
<script src="<?= base_url()?>assets/admin/bundles/vendorscripts.bundle.js"></script>

<script src="<?= base_url()?>assets/admin/vendor/toastr/toastr.js"></script>
<script src="<?= base_url()?>assets/admin/bundles/chartist.bundle.js"></script>
<script src="<?= base_url()?>assets/admin/bundles/knob.bundle.js"></script> <!-- Jquery Knob-->

<script src="<?= base_url()?>assets/admin/bundles/mainscripts.bundle.js"></script>
<script src="<?= base_url()?>assets/admin/js/index.js"></script>
<script src="<?= base_url()?>assets/admin/bundles/datatablescripts.bundle.js"></script>
<script src="<?= base_url()?>assets/admin/vendor/sweetalert/sweetalert.min.js"></script> <!-- SweetAlert Plugin Js --> 
<script src="<?= base_url()?>assets/admin/js/pages/tables/jquery-datatable.js"></script>
<script src="<?= base_url()?>assets/admin/js/pages/ui/dialogs.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<?php include('include/Footer.php');  ?>
<script type="text/javascript" language="javascript" >  
 $(function(){ 
        var dataTable = $('.datatable-buttt').DataTable({  
             dom: 'Bfrtip',
            buttons: [
                'csv', 'excel', 'pdf'
            ],
           "processing":true,  
           "serverSide":true,  
           "order":[],  
           "ajax":{  
                url:"<?= base_url() . 'DataTable/getOrderList2'; ?>",  
                type:"POST",
                "data":function(data){
                  data.orderFrom = $('input[name="fromDate"]').val();
                  data.orderTo = $('input[name="toDate"]').val();
                },
           },  
           "columnDefs":[  
                {  
                     "targets":[0,7],  
                     "orderable":false,  
                },  
           ],  
      });  
$('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
  
  $(document).on('click','#filter',function(){
    $('.datatable-buttt').DataTable().ajax.reload();
  })

  $(document).on('click','#reset',function(){
    $('input[name="fromDate"]').val('');
    $('input[name="toDate"]').val('');
    $('.datatable-buttt').DataTable().ajax.reload();
  })
});
</script>  
<script>
Highcharts.chart('containere', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Efficiency Optimization by Branch'
    },
    xAxis: {
        categories: [
            'Seattle HQ',
            'San Francisco',
            'Tokyo'
        ]
    },
    yAxis: [{
        min: 0,
        title: {
            text: 'Employees'
        }
    }, {
        title: {
            text: 'Profit (millions)'
        },
        opposite: true
    }],
    legend: {
        shadow: false
    },
    tooltip: {
        shared: true
    },
    plotOptions: {
        column: {
            grouping: false,
            shadow: false,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Employees',
        color: 'rgba(165,170,217,1)',
        data: [150, 73, 20],
        pointPadding: 0.3,
        pointPlacement: -0.2
    }, {
        name: 'Employees Optimized',
        color: 'rgba(126,86,134,.9)',
        data: [140, 90, 40],
        pointPadding: 0.4,
        pointPlacement: -0.2
    }, {
        name: 'Profit',
        color: 'rgba(248,161,63,1)',
        data: [183.6, 178.8, 198.5],
        tooltip: {
            valuePrefix: '$',
            valueSuffix: ' M'
        },
        pointPadding: 0.3,
        pointPlacement: 0.2,
        yAxis: 1
    }, {
        name: 'Profit Optimized',
        color: 'rgba(186,60,61,.9)',
        data: [203.6, 198.8, 208.5],
        tooltip: {
            valuePrefix: '$',
            valueSuffix: ' M'
        },
        pointPadding: 0.4,
        pointPlacement: 0.2,
        yAxis: 1
    }]
});
</script>


<script type="text/javascript">
  $(document).ready(function() {
     $.ajax({
    url: "<?=base_url().'Adminpanel/Adminpanel/get_sales_chart_data'?>",
    type: 'POST',
    async: true,
    dataType: "json",
    data :{type:$('#select_sales').val() },
    success: function (data) {
        // alert(data);
        highchart(data[0],data[1],data[2]);
    }
  });


    $('#select_sales').on('change', function() {
 
   $.ajax({
    url: "<?=base_url().'Adminpanel/Adminpanel/get_sales_chart_data'?>",
    type: 'POST',
    async: true,
    dataType: "json",
    data :{type:this.value},
    success: function (data) {
        // alert(data);

        highchart(data[0],data[1],data[2]);
    }
  });
});

});
function highchart(v1,v2,v3)
{
    Highcharts.chart('container121', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Order & Customers Analytics'
        },
        xAxis: {
            categories: v1
        },
        yAxis: [{
            min: 0,
            title: {
                text: 'Number'
            }
        }, {
            title: {
                text: 'Order & Customers Analytics'
            },
            opposite: true
        }],
        legend: {
            shadow: false

        },
         credits: {
      enabled: false
  },
        tooltip: {
            shared: true
        },
        plotOptions: {
            column: {
                grouping: false,
                shadow: false,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Orders',
            color: 'black',
            data: v2,
            // pointPadding: 0,
            // pointPlacement: 0.2
        }, {
            name: 'Customers',
            color: 'rgb(159,193,237,0.8)',
            data: v3,
            // pointPadding: -0.2,
            // pointPlacement: 0.2
        }
        ]
    });
}
</script>
</body>

</html>