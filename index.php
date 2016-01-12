<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bee Hive</title>

    <!-- Bootstrap Core CSS -->
    <link href="startbootstrap-sb-admin/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="startbootstrap-sb-admin/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="startbootstrap-sb-admin/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="startbootstrap-sb-admin/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <div id="wrapper">


        <!-- Page Content -->
        <div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <br>
                        <?php

                        $hiveId = "";
                        $miteCount;
                        $dateCollected = "";
                        $samplePeriod = "";
                        $isValid = true;

                        if(isset($_POST['id'])){
                            $hiveId = $_POST['id'];
                        }else{
                            $isValid = false;
                        }
                        
                        if(isset($_POST['count'])){
                            $miteCount = $_POST['count'];
                        }else{
                            $isValid = false;
                        }

                        if(isset($_POST['date'])){
                            $dateCollected = mysql_escape_string($_POST['date']);
                            //$dateCollected = date('m-d-Y', strtotime($_POST['date']));
                            print  $dateCollected;
                        }else{
                            $isValid = false;
                        }
                        
                        if(isset($_POST['period'])){
                            $samplePeriod = $_POST['period'];
                        }else{
                            $isValid = false;
                        }

                        if($isValid){
                            print "Given data";
                        }
                        
                        print_r($_POST);
                        print"
                        <form role='form' action='register.php' method='post'>
                            <div class='form-group'>
                                <label>Hive Identification</label>
                                <input type='text' class='form-control' name='id' id='id' value=$hiveId>
                                
                            </div>
                            <div class='form-group'>
                                <label>Mite count</label>
                                <input type='number' class='form-control' name='count' id='count' value=$miteCount>
                                
                            </div>
                            <div class='form-group'>
                                <label>Date Collected</label>
                                <input type='date' class='form-control' name='date' id='date' value=$dateCollected>
                                
                            </div>
                            <div class='form-group'>
                                <label>Sample Period</label>
                                <input type='number' class='form-control' name='period' id='period' value=$samplePeriod>
                                
                            </div>
                            <div class='form-group'>
                               <button type='submit' class='btn btn-default'>Submit Button</button>
                                
                            </div>
                        </form>";
                        ?>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
