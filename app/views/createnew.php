<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS 
    <link href="css/plugins/dataTables.bootstrap.css" rel="stylesheet">-->

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">
    <!--<link href="css/picker.css" rel="stylesheet">-->

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
</head>
<body>
<center><h1>Amrit Yoga</h1></center>
 <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-brand" href="/yoga/public/dashboard" style="float:left"> <h3>Dashboard</h3>  </a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->


        </nav>
</div>    

<div id="page-wrapper">
    <div class="row">
        <div>
            <h3>Methods Available</h3>
        </div>
        <div>
            <select id="optionValues" style="float:left" multiple>
                <option>1. Internalizing Awareness</option>
                <option>2. Induction Techniques Phase 1</option>
                <option>3. Instructions for Yoga Nidra</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div>
            <input type="button" id="btnAdd" class="btn btn-default" style="width: 70px;" value="Add" />
            <input type="button" id="btnDelete" class="btn btn-default" style="width: 70px;" value="Remove" />
        </div>
    </div>
    <div class="row">
        <div>
            <div>
                <h3>Methods Selected</h3>
            </div>
            <select id="selectedValues" multiple></select>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-12">
            <a href="/yoga/public/selector">  <button type="button" class="btn btn-danger" style="float:right">Continue</button> </a>
        </div>
    </div>
</div>



 <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>

    <script type="text/javascript">
    $("#btnAdd").click(function () {
        var selectedItem = $("#optionValues option:selected");
        $("#selectedValues").append(selectedItem);
    });

    $("#btnDelete").click(function () {
        var selectedItem = $("#selectedValues option:selected");
        $("#optionValues").append(selectedItem);
    });

    </script>

</body>
</html>
