<!doctype html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>مرکز چاپ و نشر دانشگاه گیلان</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="shortcut icon" href="../public/imgs/favicon.ico" />

    <!--  bootstrap css-->
    <link rel="stylesheet" href="../public/css/bootstrap.css">
    <link rel="stylesheet" href="../public/css/bootstrap-rtl.css">
    <link rel="stylesheet" href="../public/css/bootstrap-reboot.css">
    <link rel="stylesheet" href="../public/css/style.css">

    <!--bootstrap js-->
    <script src="../public/js/jquery.min.js"></script>
    <script src="../public/js/bootstrap.js"></script>
    <script src="../public/js/custom.js"></script>
    <script src="../public/js/app-second.js" defer></script>

</head>
<body>


<!--header start-->
<div class=" mr-auto align-content-stretch d-md-none d-flex justify-content-end">
    <a href="" class=" small text-decoration-none " data-toggle="dropdown" > EN/FA<i class="material-icons text-white ">language </i></a>
</div>
<header class="container-fluid d-block custom-header text-dark ">

    <div class="row align-items-center m-b-1 mx-2">
        <div class="col-12 col-md-2 "><img src="../public/imgs/gu-logo.png" alt="" class=""></div>
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
            <a href="../user/form-moshakhasat-shakhsi.php" class="dropdown-item">مشخصات شخصی</a>
            <a href="../user/changePass/change-password.php" class="dropdown-item">تغییر رمزعبور</a>
            <div class="dropdown-divider"></div>
            <a href="../index.php" class="dropdown-item">خروج</a>
        </div>
    </ul>

    <button class="navbar-toggler mr-auto border-0" type="button" data-toggle="collapse" data-target="#menu1">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse text-center " id="menu1">
        <ul class="navbar-nav">


            <li class="nav-item">
                <a href="../payamha.php" class="nav-link text-white">کارتابل داوری</a>
            </li>

            <li class="nav-item">
                <a href="../table-nameha.php" class="nav-link text-white">کارتابل نامه ها</a>
            </li>

            <li class="nav-item">
                <a href="../table_darkhasthaye_ersalshode.php" class="nav-link text-white ">درخواست ها</a>
            </li>

        </ul>
    </div>

    <div class="   mr-md-auto align-content-stretch d-none d-md-block">
        <a href="" class="  small text-decoration-none text-white " data-toggle="dropdown" > EN/FA<i class="material-icons text-white ">language </i></a>
    </div>


</nav>
</body>

















<?php

$datatalif=$_POST;

if(isset($_POST['sumbit1'])) {

    // var_dump($datatalif);die();
    $config = mysqli_connect('localhost', 'root', '', 'new');
    $judgingTalif = "INSERT INTO judgingTalif  (
        arzyabiElmiRow1 ,
        arzyabiElmiRow2 ,
        arzyabiElmiRow3 ,
        arzyabiElmiRow4 ,
        arzyabiElmiRow5 ,
        arzyabiNegareshiRow1 ,
        arzyabiNegareshiRow2 ,
        arzyabiNegareshiRow3 ,
        arzyabiNegareshiRow4 ,
        arzyabiNoAvariRow1 ,
        arzyabiNoAvariRow2 ,
        arzyabiEghtesadiRow1 ,
        arzyabiEghtesadiRow2 ,
        arzyabiEghtesadiRow3 ,
        pishnahadatRow1 ,
        pishnahadatRow2 ,
        tozihatPishnahadi 
)
VALUES
(
'$datatalif[arzyabiElmiRow1]',
'$datatalif[arzyabiElmiRow2]',
'$datatalif[arzyabiElmiRow3]',
'$datatalif[arzyabiElmiRow4]',
'$datatalif[arzyabiElmiRow5]',
'$datatalif[arzyabiNegareshiRow1]',
'$datatalif[arzyabiNegareshiRow2]',
'$datatalif[arzyabiNegareshiRow3]',
'$datatalif[arzyabiNegareshiRow4]',
'$datatalif[arzyabiNoAvariRow1]',
'$datatalif[arzyabiNoAvariRow2]',
'$datatalif[arzyabiEghtesadiRow1]',
'$datatalif[arzyabiEghtesadiRow2]',
'$datatalif[arzyabiEghtesadiRow3]',
'$datatalif[pishnahadatRow1]',
'$datatalif[pishnahadatRow2]',
'$datatalif[tozihatPishnahadi]'
)";

    $result = mysqli_query($config, $judgingTalif);
    if ( false===$result ) {
        printf($judgingTalif);
        printf("error: %s\n", mysqli_error($config));
    }


    //use id for other table for foriegn key
    $id=mysqli_insert_id($config);
;



    //table1
    $judgingTalifReshte = "INSERT INTO judgingTalifReshte (
PersonID ,
fieldNameRow1

)
VALUES
(
'$id',
'$datatalif[fieldNameRow1]'
)";

    $result1 = mysqli_query($config, $judgingTalifReshte);
    if ( false===$result ) {
        printf($judgingTalifReshte);
        printf("error: %s\n", mysqli_error($config));
    }





    //table2

    $judgingTalifTatbiqSarfasl = "INSERT INTO judgingTalifTatbiqSarfasl (
PersonID ,
lessonNameRow1matabeghat,
maghtaRow1matabeghat,
tedadRow1motabeghat,
darsadRow1Motabeghat
)
VALUES
(
'$id' ,
'$datatalif[lessonNameRow1matabeghat]',
'$datatalif[maghtaRow1matabeghat]',
'$datatalif[tedadRow1motabeghat]',
'$datatalif[darsadRow1Motabeghat]'
)";

    $result2 = mysqli_query($config, $judgingTalifTatbiqSarfasl);
    if ( false===$result2 ) {
        printf($judgingTalifTatbiqSarfasl);
        printf("error: %s\n", mysqli_error($config));
    }



}


?>
