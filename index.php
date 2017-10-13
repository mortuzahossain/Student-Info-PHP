<?php 

include 'db_connect.php';

/* TODO: 
    1. Adding New Data
    2. Showing Data in Table
    3. Searching in database using name or id
    4. Deleting Data From Database
*/

// 01 
if(isset($_POST['saveme'])){   
    $name       = $_POST['name'];
    $roll       = $_POST['roll'];
    $fname      = $_POST['fname'];
    $mname      = $_POST['mname'];
    $phone      = $_POST['phone'];
    $email      = $_POST['email'];
    $enrollday  = $_POST['enrollday'];

    if (!empty($name)) {
        $sql = "INSERT INTO student_info (name,roll,fathername,mothername,phone,email,enrollday) VALUES ('$name','$roll','$fname','$mname','$phone','$email','$enrollday')";
        if (mysqli_query($con,$sql)) {
        ?>
<script type="text/javascript">
    alert("Data Save Successfully. :)");
</script>
        <?php            
        }
    } else {
        ?>
<script type="text/javascript">
    alert("Please Fill At-least Name");
</script>
        <?php
    }
}

//  02 + 03

    if (isset($_POST['search_me'])) {
        $search_text = $_POST['sname'];
        $sql = "SELECT * FROM student_info WHERE CONCAT( name, roll, fathername, phone, email ) LIKE '%$search_text%'";
    }


?>


<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
        


        <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    </head>
    <body>
    
        <div class="preloader"><img src="img/loading.gif"></div>


        
        <div class="fixed-search-form left">
            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
            Add New Student
            </button>
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Add New Student</h4>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal" method="post" action="">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="name" name="name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">ID</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="id" name="roll">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Father Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="father name" name="fname">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Mother Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="mother name" name="mname">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Phone</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="phone" name="phone">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="email" name="email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Enroll Day</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" placeholder="" name="enrollday">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-10 col-sm-2">
                                        <button name="saveme" type="submit" class="btn btn-default">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="fixed-search-form right">
            <form class="form-inline" action="" method="post">
                <div class="form-group">
                    <input type="text" class="form-control myinput" placeholder="Name Or ID" name="sname">
                </div>
                <button type="submit" name="search_me" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
            </form>
        </div>
        
        <div class="header_logo text-center">
            <div class="col-md-12">
                <div class="row"><a href="index.php"><img class="logo" src="img/baust.png" alt="baustMonogram"></a></div>
            </div>
        </div>
        
        <div class="showing_data">
            <div class="container">
<?php if (isset($_POST['search_me'])) { ?>

                <div class="col-md-12">
<?php
    show_data($sql,$con);
} else {
    ?>
    <div class='col-md-12' id='results'>
    <div id="loader_image" class="text-center"><img class="loader_image" src="img/loader.gif" alt="">Loading...please wait</div>
    <div id="loader_message"></div>   
    <?php
}
?>


                    

                </div>
            </div>
        </div>
        <script src="js/jquery-1.12.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/scrolltop.js"></script>
        <script src="js/preloader.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>