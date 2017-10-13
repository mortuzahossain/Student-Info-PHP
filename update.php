<?php 
include 'db_connect.php';


$id = $_GET['id'];
$sql = "SELECT * FROM student_info WHERE id = $id";
$result = mysqli_query($con,$sql)->fetch_assoc();
//print_r($result);

// TODO : Calculation for Average

$l1t1 = $result['l1t1'];
$l1t2 = $result['l1t2'];
$l2t1 = $result['l2t1'];
$l2t2 = $result['l2t2'];
$l3t1 = $result['l3t1'];
$l3t2 = $result['l3t2'];
$l4t1 = $result['l4t1'];
$l4t2 = $result['l4t2'];

$avg = 0;


if ( !empty($l1t1) && !empty($l1t2) 
    &&  !empty($l2t1) && ! empty($l2t2)
    &&  !empty($l3t1) && ! empty($l3t2)
    &&  !empty($l4t1) && ! empty($l4t2) ) {
    
    $avg = ($l1t1 + $l1t2 + $l2t1 + $l2t2 + $l3t1 + $l3t2 + $l4t1 + $l4t2 ) / 8;
}


if ( !empty($l1t1) && !empty($l1t2) 
    &&  !empty($l2t1) && ! empty($l2t2)
    &&  !empty($l3t1) && ! empty($l3t2)
    &&  !empty($l4t1) ) {    
    $avg = ($l1t1 + $l1t2 + $l2t1 + $l2t2 + $l3t1 + $l3t2 + $l4t1) / 7;
}

if ( !empty($l1t1) && !empty($l1t2) 
    &&  !empty($l2t1) && ! empty($l2t2)
    &&  !empty($l3t1) && ! empty($l3t2) ) {
    
    $avg = ($l1t1 + $l1t2 + $l2t1 + $l2t2 + $l3t1 + $l3t2 ) / 6;
}

if ( !empty($l1t1) && !empty($l1t2) 
    &&  !empty($l2t1) && ! empty($l2t2)
    &&  !empty($l3t1) ) {
    
    $avg = ($l1t1 + $l1t2 + $l2t1 + $l2t2 + $l3t1 ) / 5;
}

if ( !empty($l1t1) && !empty($l1t2) 
    &&  !empty($l2t1) && ! empty($l2t2)) {
    
    $avg = ($l1t1 + $l1t2 + $l2t1 + $l2t2 ) / 4;
}

if ( !empty($l1t1) && !empty($l1t2) 
    &&  !empty($l2t1) ) {
    
    $avg = ($l1t1 + $l1t2 + $l2t1 ) / 3;
}

if (!empty($l1t1) &&! empty($l1t2) ) {
    
    $avg = ($l1t1 + $l1t2 ) / 2;
}

if (!empty($l1t1) ) {
    
    $avg = $l1t1;
}


//echo $avg;


?>


<!doctype html>
<html class="no-js" lang="">
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
        
        <div class="header_logo updateheader text-center">
            <div class="col-md-12">
                <div class="row"><a href="index.php"><img src="img/baust.png" alt="baustMonogram"></a></div>
            </div>
        </div>
        <div class="showing_data">
            <div class="container">
                <div class="row">
                    <h2 class="text-center"><?php echo $result['name']; ?>'s Profile</h2>

<?php

//  For Update Database 

if (isset($_POST['updateme'])) {
    $name = $_POST['name'];
    $roll = $_POST['roll'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $enrollday = $_POST['enrollday'];
    
    $l1t1 = $_POST['l1t1'];
    $l1t2 = $_POST['l1t2'];
    $l2t1 = $_POST['l2t1'];
    $l2t2 = $_POST['l2t2'];
    $l3t1 = $_POST['l3t1'];
    $l3t2 = $_POST['l3t2'];
    $l4t1 = $_POST['l4t1'];
    $l4t2 = $_POST['l4t2'];

    $sql = "UPDATE student_info SET name = '$name', roll = '$roll', fathername = '$fname', mothername = '$mname', phone = '$phone', email = '$email' , enrollday = '$enrollday' , l1t1 = '$l1t1' , l1t2 = '$l1t2', l2t1 = '$l2t1', l2t2 = '$l2t2', l3t1 = '$l3t1', l3t2 = '$l3t2', l4t1 = '$l4t1', l4t2 = '$l4t2' WHERE id = $id";

    if (mysqli_query($con,$sql)) {
        echo "<p class='bg-primary text-center padding-12'>Information Update Successfully.</p>";
    } else {
        echo "<p class='bg-danger text-center padding-12'>Something Went Wrong Please try Again.</p>";
    }

}
?>
                    <hr>
                    <div class="col-md-8 col-md-offset-2">
                        
                        <form action="" method="post">
                            <table class="table table-bordered">
                                <tr>
                                    <td>Name</td>
                                    <td><input type="text" name="name" class="form-control myinput" placeholder="Name" value="<?php echo $result['name']; ?>" ></td>
                                </tr>
                                <tr>
                                    <td>ID</td>
                                    <td><input type="text" name="roll" class="form-control myinput" placeholder="ID" value="<?php echo $result['roll']; ?>"></td>
                                </tr>
                                <tr>
                                    <td>Father Name</td>
                                    <td><input type="text" name="fname" class="form-control myinput" placeholder="father namename" value="<?php echo $result['fathername']; ?>"></td>
                                </tr>
                                <tr>
                                    <td>Mother Name</td>
                                    <td><input type="text" name="mname" class="form-control myinput" placeholder="father namename" value="<?php echo $result['mothername']; ?>"></td>
                                </tr>
                                <tr>
                                    <td>Phone</td>
                                    <td><input type="text" name="phone" class="form-control myinput" placeholder="phone" value="<?php echo $result['phone']; ?>"></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><input type="text" name="email" class="form-control myinput" placeholder="email" value="<?php echo $result['email']; ?>"></td>
                                </tr>
                                <tr>
                                    <td>Enrole Day</td>
                                    <td><input type="date" name="enrollday" class="form-control myinput" placeholder="enroll day" value="<?php echo $result['enrollday']; ?>"></td>
                                </tr>
                            </table>
                            <h3 class="text-center">Result</h3><span class="right-avg">Average :<?php echo $avg; ?></span>
                            <table class="table table-bordered">
                                <tr>
                                    <td>L1/T1</td>
                                    <td><input type="text" class="form-control myinput" name="l1t1" placeholder="" value="<?php echo $result['l1t1']; ?>"></td>
                                </tr>
                                <tr>
                                    <td>L1/T2</td>
                                    <td><input type="text" class="form-control myinput"  name="l1t2" placeholder="" value="<?php echo $result['l1t2']; ?>"></td>
                                </tr>
                                <tr>
                                    <td>L2/T1</td>
                                    <td><input type="text" class="form-control myinput" name="l2t1" placeholder="" value="<?php echo $result['l2t1']; ?>"></td>
                                </tr>
                                <tr>
                                    <td>L2/T2</td>
                                    <td><input type="text" class="form-control myinput" name="l2t2" placeholder="" value="<?php echo $result['l2t2']; ?>"></td>
                                </tr>
                                <tr>
                                    <td>L3/T1</td>
                                    <td><input type="text" class="form-control myinput" name="l3t1" placeholder="" value="<?php echo $result['l3t1']; ?>"></td>
                                </tr>
                                <tr>
                                    <td>L3/T2</td>
                                    <td><input type="text" class="form-control myinput" name="l3t2" placeholder="" value="<?php echo $result['l3t2']; ?>"></td>
                                </tr>
                                <tr>
                                    <td>L4/T1</td>
                                    <td><input type="text" class="form-control myinput" name="l4t1" placeholder="" value="<?php echo $result['l4t1']; ?>"></td>
                                </tr>
                                <tr>
                                    <td>L4/T2</td>
                                    <td><input type="text" class="form-control myinput" name="l4t2" placeholder="" value="<?php echo $result['l4t2']; ?>"></td>
                                </tr>
                            </table>

                            <button type="submit" name="updateme" class="btn btn-primary mybtn">Update</button>

                            

                        </form>
                            
                        </div>
                    </div><hr>
                </div>
            </div>
            
            <script src="js/jquery-1.12.0.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/main.js"></script>
        </body>
    </html>