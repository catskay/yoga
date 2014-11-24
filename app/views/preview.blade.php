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
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <h2>Document Preview</h2>
        </div>
    </div>

    <div class="col-md-8">
        <div class="panel panel-default">

            <iframe frameborder="0" src="/yoga/public/helloworld" width="100%" height="500"></iframe>

                
            
        </div>
    </div>

    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-body">
                <h1 style="color:#cc0000 ">Font Size</h1>
                {{Form::open()}}
                <button type="submit" name = "small" class="btn btn-default" id="small">Small</button>
                <pMedium>Medium</pMedium>
                <pLarge>Large</pLarge>
                {{Form::close()}}
            </div>
        </div>


        <div class="panel panel-default">
            <div class="panel-body">
                <div class="form-group">
                    <label>Title</label>
                    <input class="form-control">
                    <label>Notes</label>
                    <textarea class="form-control" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-danger btn-lg">Save</button>
            </div>
        </div>

    </div>

</div>



<?php
    if(isset($_POST['small'])) {
    // form submitted, now we can look at the data that came through
    // the value inside the brackets comes from the name attribute of the input field. (just like submit above)
    $font = $_POST['small'];
    print_r($font);
  }
    Fpdf::AddPage('p','letter');
    foreach($arr as $section => $subsections){

        Fpdf::SetFont('Arial','B','14');
        Fpdf::Write(10,html_entity_decode($section));

        foreach($subsections as $subsection => $methods){

            Fpdf::SetFont('Arial','','14');
            
            /* How to set font color: would have to determine which subsection it is and set color one at a time
            if($subsection ==='A. Quiet/Centering'){
                Fpdf::SetTextColor('242','51','95');
            }
            else if ($subsection ==='Physical Relaxation'){
                Fpdf::SetTextColor('119','198','237');
            }*/

            Fpdf::SetTextColor('0','0','0');
            Fpdf::Write(10,html_entity_decode($subsection));

            foreach($methods as $method){

                Fpdf::Write(10,html_entity_decode($method->mname));
                Fpdf::SetFont('Arial','','12');
                Fpdf::SetTextColor('0','0','0');
                Fpdf::Write(10,$method->text);
            }
        }
    }
    Fpdf::Output('helloworld','F');
    exit;

    function setFontSmall(){
        Fpdf::SetFontSize(20);
        Fpdf::Output('helloworld','F');
        exit;
    }
?>


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

<script type="text/javascript" src="js/CollapsibleLists.js"></script>




</body>
</html>
