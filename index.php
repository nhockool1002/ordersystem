<?php
ob_start();
session_start();
include ("config/config.php");
include ROOT."/include/functions.php";
spl_autoload_register("loadClass");
$db= new Db();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">  
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="library/particles.css">
    <link rel="stylesheet" href="library/style.css" />
</head>
<body <?php if(!isset($_GET['page'])){ echo 'onload="viewData()"';}?>>
    <!-- MENU SECTION -->
    <section class="menu-zone">
    <?php require_once ROOT."/include/menu.php"; ?>
    </section>
    <!-- END MENU SECTION -->
    <section class="container-zone">
    <div class="col-sm-12">
        <div class="row">
            <div class="col-sm-2 nopadding">
            <section class="sidebar-zone">
            <?php require_once ROOT."/include/sidebar.php"; ?>
            </section>
            </div>
            <div class="col-sm-10 <?php if(isset($_GET['page']) && $_GET['page'] == 'login'){ echo "nopadding";}?>">
            <section class="content-primary">
            <?php require_once ROOT."/include/content.php"; ?>
            </section>
            </div>
        </div>
    </div>
    </section>
    <section class="footer-zone">
       <div class="footer-div-zone">
           <p>Developer KangCode</p>
           <p>ORDERSYSTEM V1.0 - Reserved (C) 2019 -2020 by KangCode
        </div>
    </setion>
    <section class="script-zone">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="http://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
        <script src="library/jquery.tabledit.js"></script>
        <script src="library/particles.js"></script>
        <?php
        if(!isset($_GET['page'])){
            echo '<script src="library/showtable.js"></script>';
        }
        ?>
        <script src="library/script.js"></script>
    </section>
</body>
</html>
