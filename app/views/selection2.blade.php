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

    <!-- DataTables CSS -->
    <link href="css/plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

    <link rel=stylesheet type="text/css" href="css/layout.css">
    <link href="css/multi-select.css" media="screen" rel="stylesheet" type="text/css">
    <link href="css/application.css" media="screen" rel="stylesheet" type="text/css">


</head>
<body>
    <table>
        <tr>
            <td>{{ HTML::image('img/amrit-yoga-logo.gif') }}</td>
        </tr>
    </table>                            

    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/yoga/public/dashboard">Dashboard</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a></li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a></li>
                        <li class="divider"></li>
                        <li><a href="login"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
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
            <div class="col-lg-12">
                <h1 class="page-header">Method Selection</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
<<<<<<< HEAD
=======
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a></li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a></li>
                    <li class="divider"></li>
                    <li><a href="login"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
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
        <div class="col-lg-12">
            <h1 class="page-header">Method Selection</h1>
        </div>
    </div>
>>>>>>> FETCH_HEAD

        <div class="row">
            <div class="col-md-7">
                <select id='optgroupp' multiple='multiple'>

                    @foreach($arr as $section => $subsections)

                    @foreach($subsections as $subsection => $methods)
                    <optgroup label={{$subsection}}>
                        @foreach($methods as $method)
                        <option title = {{$section}} value = {{$method->mid}}>{{$method->mname}}</option>
                        @endforeach
                    </optgroup>
                    @endforeach

                    @endforeach
<<<<<<< HEAD
                </select>
            </div>
=======
                
            @endforeach
        </select>
                
>>>>>>> FETCH_HEAD
        </div>

<<<<<<< HEAD
        <p id="test" onclick="printResults()">Hello Friend</p>
=======
>>>>>>> FETCH_HEAD

        <script>

        function printEach(element){
            document.getElementById("test").innerHTML = element;
        }

        function printResults(){

            var arr = $('#optgroupp').val();        
            alert(arr);


            return false;
        }

        $("select").change(printResults);


        </script>

        <div class="row">
            <div class="col-lg-12 col-md-offset-10">
                <a href="/yoga/public/selector">  <button type="button" onclick="getResults()" class="btn btn-danger">Continue</button> </a>
            </div>

        </div>
<<<<<<< HEAD

=======
>>>>>>> FETCH_HEAD
    </div>

    <p id="test">
    </p>
    <script>
    function getResults() {
        var results = $('#optgroupp').val();
        var jsonString = JSON.stringify(results);
        $.ajax({
           type: 'POST',
           url: 'app/controllers/EditingController.php',
           traditional: true,
           dataType: "json",
           data: {data : jsonString},
           success: function (data) {
               alert("success");
           },
           error: function (args) {
               alert("Error on ajax post");
           }
       })

    }

    </script>



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

    <script src="js/jquery.tinysort.js" type="text/javascript"></script>
    <script src="js/jquery.quicksearch.js" type="text/javascript"></script>
    <script src="js/jquery.multi-select.js" type="text/javascript"></script>
    <script src="js/application.js" type="text/javascript"></script>


    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>

</body>
</html>
