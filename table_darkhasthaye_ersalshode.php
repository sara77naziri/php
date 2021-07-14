<?php

session_start();

?>



<!doctype html>
<html lang="fa" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>مرکز چاپ و نشر دانشگاه گیلان</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="shortcut icon" href="public/imgs/favicon.ico" />
    <!--  bootstrap css-->
    <link rel="stylesheet" href="public/css/bootstrap.css">
    <link rel="stylesheet" href="public/css/bootstrap-rtl.css">
    <link rel="stylesheet" href="public/css/bootstrap-reboot.css">
    <link rel="stylesheet" href="public/css/style.css">

    <!--bootstrap js-->
    <script src="public/js/jquery.min.js"></script>
    <script src="public/js/bootstrap.js"></script>
    <script src="public/js/custom.js"></script>
    <script src="public/js/addrow.js"></script>

</head>
<body>


<!--header start-->
<div class=" mr-auto align-content-stretch d-md-none d-flex justify-content-end">
    <a href="" class="  small text-decoration-none " data-toggle="dropdown" > EN/FA<i class="material-icons text-white ">language </i></a>
</div>
<header class="container-fluid d-block custom-header text-dark ">

    <div class="row align-items-center m-b-1 mx-2">
        <div class="col-12 col-md-2 "><img src="public/imgs/gu-logo.png" alt="" class=""></div>
        <div class="col-12 col-md-8">مرکز چاپ و نشر دانشگاه گیلان</div>
        <div class="col-12 col-md-2 "><p id="headerdate" class=""></p></div>
    </div>
</header>
<!--header end-->

<!--menu start-->

<nav class="navbar navbar-expand-md sticky-top navbar-light p-1 m-1 align-items-center custom-menu d-flex">

    <ul class="nabar-nav custom-navbar-brand-profile m-0 p-0 position-relative">
        <a href="" class=" nav-link dropdown-toggle text-decoration-none  text-white" data-toggle="dropdown"aria-haspopup="true" aria-expanded="false"> پروفایل</a>
        <div class="dropdown-menu  position-absolute  ">
            <a href="user/form-moshakhasat-shakhsi.php" class="dropdown-item">مشخصات شخصی</a>
            <a href="user/changePass/change-password.php" class="dropdown-item">تغییر رمزعبور</a>
            <div class="dropdown-divider"></div>
            <a href="index.php" class="dropdown-item">خروج</a>
        </div>
    </ul>

    <button class="navbar-toggler mr-auto border-0" type="button" data-toggle="collapse" data-target="#menu1">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse text-center " id="menu1">
        <ul class="navbar-nav">


            <li class="nav-item">
                <a href="payamha.php" class="nav-link text-white">کارتابل داوری</a>
            </li>

            <li class="nav-item">
                <a href="table-nameha.php" class="nav-link text-white">کارتابل نامه ها</a>
            </li>

            <li class="nav-item">
                <a href="table_darkhasthaye_ersalshode.php" class="nav-link text-white ">درخواست ها</a>
            </li>

        </ul>
    </div>

    <div class="   mr-md-auto align-content-stretch d-none d-md-block">
        <a href="" class="  small text-decoration-none text-white " data-toggle="dropdown" > EN/FA<i class="material-icons text-white ">language </i></a>
    </div>


</nav>
</body>
<div class="container">
    <div class="row">

        <aside class="col-md-4">
            <fieldset class="border  p-3 m-2 py-4 my-4 form-fieldset" >
            <ul class="list-group form-fieldset">
                <li class="list-group-item custom-menu rounded-top rounded-left rounded-right text-center">ایجاد درخواست جدید</li>
                <li class="list-group-item"><a href="chap_Requst/chap-form-req.php" class="nav-link text-black-50">درخواست چاپ و ترجمه کتاب </a></li>
                <li class="list-group-item"><a href="#" class="nav-link text-black-50">درخواست چاپ مجله</a></li>
            </ul>
            </fieldset>
        </aside>

        <div class="col-md-8">

<fieldset class="border  p-3 m-2 py-4 my-4 form-fieldset" >
    <legend class="font-weight-bolder small">درخواست های ارسال شده</legend>
    <div class=" py-3">


<?php
$config2=mysqli_connect("localhost", "root", "","new");
$sqlUser="SELECT * FROM users where username ='$_SESSION[username]' ";
$resultUser=mysqli_query($config2,$sqlUser);
$rowUser=mysqli_fetch_array($resultUser);

$idUser=$rowUser['ID'];
//

$sqlChap="SELECT * FROM chapReq where chapId ='$idUser' ";
$resultChap=mysqli_query($config2,$sqlChap);








?>
        <table class="table table-bordered ">
            <thead>
            <tr>
                <th>ردیف</th>
                <th> کد درخواست</th>
                <th>تاریخ درخواست</th>
                <th style="width: 700px"></th>
                <th></th>
            </tr>
            </thead>
            <?php

            $rowChap=mysqli_fetch_array($resultChap);
            while ( $rowChap!=null){

                ?>


            <tbody>
            <tr>
                <td>1</td>
                <td><?php echo  $rowChap['ID'] ?></td>
                <td><?php echo  $rowChap['createdAt'] ?> </td>
                <td><?php echo  "??" ?></td>
                <td ><a href="#" >
                        بیشتر
                    </a> </td>
            </tr>


            </tbody>
            <?php             $rowChap=mysqli_fetch_array($resultChap); }?>

        </table>

    </div>
</fieldset>
    </div>
</div>

</div>


<body>






<!--footer section-->
<footer class="container-fluid custom-footer">
    <div class="row">
        <div class="col-12 text-center">
            <div class="" > آدرس: رشت - کیلومتر پنج جاده تهران - دانشکاه گیلان</div>
        </div>
    </div>
</footer>

<script>

    headerdate();


</script>
</body>




</html>



























