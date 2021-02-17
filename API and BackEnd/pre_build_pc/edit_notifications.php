<?php
include 'db2.php';

$su_id=$_GET['s_id'];
$query1=mysqli_query($con,"SELECT * FROM `notification_db` where notification_id='$su_id'");
$arr=mysqli_fetch_assoc($query1);

if(isset($_POST['submit']))
{
    $su_id=$_GET['s_id'];
    $sname=$_POST['name'];
    $stype=$_POST['surname'];

    $query2=mysqli_query($con,"UPDATE `notification_db` SET `time`='$sname',`content`='$stype' WHERE notification_id ='$su_id'");

if($query2)
{
    echo "<script>alert('update success');</script>";
    header('location: notifications.php');
}
else
{
  echo "<script>alert('update failed');</script>";

}}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Edit Notifications</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.png" type="image/png"> 

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />
     <style type="text/css">    
    #submit {
      margin: auto;
      background-color: var(--background-c, lightgray);
      border-radius: 8px;
      padding: 5px 12px 5px 12px;
      margin-top: 5px;
      font-size: 85%;
    }

    input[type=submit] {
      width: 80px;
      background-color: #4CAF50;
      color: white;
      padding: 10px;
      margin: 4px 0 0 370px;
      border: none;
      border-radius: 10px;
      cursor: pointer;
    }
    input[type=reset] {
      width: 80px;
      background-color: #ff3939;
      color: white;
      padding: 10px;
      margin: 4px 0 0 10px;
      border: none;
      border-radius: 10px;
      cursor: pointer;
    }
    input[type=submit]:hover {
      background-color: #000000;
    }
    input[type=reset]:hover {
      background-color: #000000;
    }
  </style>
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
   <?php
    include 'topbar.php';
    ?>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <?php
         include 'SideBar.php';
         ?>
       
        <!-- #END# Right Sidebar -->
    </section>

   
              <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    Edit Notifications
                    <small>Improving products will improve website</small>
                </h2>
            </div>
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <form id="form_validation" method="POST">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="name" required value="<?php echo $arr['time']; ?>">
                                        <label class="form-label">Time</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="surname" required value="<?php echo $arr['content']; ?>">
                                        <label class="form-label">Content</label>
                                    </div>
                                </div>
                                <input type="submit" value="Update" name="submit"><input type="reset" value="Clear">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Validation -->

        <?php
    include 'Script.php';
    ?>
</body>

</html>
