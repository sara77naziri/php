<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <title>مرکز چاپ و نشر دانشگاه گیلان</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="../public/imgs/favicon.ico" rel="shortcut icon"><!--  bootstrap css-->
    <link href="../public/css/bootstrap.css" rel="stylesheet">
    <link href="../public/css/bootstrap-rtl.css" rel="stylesheet">
    <link href="../public/css/bootstrap-reboot.css" rel="stylesheet">
    <link href="../public/css/style.css" rel="stylesheet"><!--bootstrap js-->

    <script src="../public/js/jquery.min.js">
    </script>
    <script src="../public/js/bootstrap.js">
    </script>
    <script src="../public/js/custom.js">
    </script>
    <script defer src="../public/js/app-third.js">
    </script>
</head>
<body>
<!--header start-->
<div class=" mr-auto align-content-stretch d-md-none d-flex justify-content-end">
    <a class=" small text-decoration-none" data-toggle="dropdown" href="">EN/FA<i class="material-icons text-white">language</i></a>
</div>
<header class="container-fluid d-block custom-header text-dark">
    <div class="row align-items-center m-b-1 mx-2">
        <div class="col-12 col-md-2"><img alt="" class="" src="../public/imgs/gu-logo.png"></div>
        <div class="col-12 col-md-8">
            مرکز چاپ و نشر دانشگاه گیلان
        </div>
        <div class="col-12 col-md-2">
            <p class="" id="headerdate"></p>
        </div>
    </div>
</header><!--header end-->
<!--menu start-->
<nav class="navbar navbar-expand-md sticky-top navbar-light p-1 m-1 align-items-center custom-menu d-flex">
    <div class="nabar-nav custom-navbar-brand-profile m-0 p-0 position-relative" style="margin-left: 2em">
        <a aria-expanded="false" aria-haspopup="true" class=" nav-link dropdown-toggle text-decoration-none text-white" data-toggle="dropdown" href="">پروفایل</a>
        <div class="dropdown-menu position-absolute">
            <a class="dropdown-item" href="../user/form-moshakhasat-shakhsi.php">مشخصات شخصی</a> <a class="dropdown-item" href="../user/changePass/change-password.php">تغییر رمزعبور</a>
            <div class="dropdown-divider"></div><a class="dropdown-item" href="../index.php">خروج</a>
        </div>
    </div><button class="navbar-toggler mr-auto border-0" data-target="#menu1" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse text-center" id="menu1">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-white" href="../payamha.php">کارتابل داوری</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="../table-nameha.php">کارتابل نامه ها</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="../table_darkhasthaye_ersalshode.php">درخواست ها</a>
            </li>
        </ul>
    </div>
    <div class=" mr-md-auto align-content-stretch d-none d-md-block">
        <a class=" small text-decoration-none text-white" data-toggle="dropdown" href="">EN/FA<i class="material-icons text-white">language</i></a>
    </div>
</nav>
<script src="./index.js">
</script>
<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>







<?php


if(isset($_POST['sumbit1'])) {

    // var_dump($datatalif);die();
    $config = mysqli_connect('localhost', 'root', '', 'new');
    //mainTable
    $datatarjome= $_POST;

    $judgingTarjome = "INSERT INTO judgingTarjome (
arzyabiElmiRow1, 
arzyabiElmiRow2, 
arzyabiElmiNomre, 
arzyabikeyfiRow1, 
arzyabikeyfiRow2, 
arzyabikeyfiRow3, 
arzyabikeyfiRow4, 
arzyabikeyfiRow5, 
arzyabikeyfiRow6, 
arzyabikeyfiRow7 ,
arzyabikeyfiNomre, 
arzyabieghtesadiRow1,
arzyabiEghtesadiRow2 ,
arzyabiEghtesadiRow3,
arzyabiEghtesadiRow5,
arzyabiEghtesadiNomre ,
pishnahadatRow1 ,
pishnahadatRow2 ,
pishnahadatRow3 
)
VALUES
(
'$datatarjome[arzyabiElmiRow1]', 
'$datatarjome[arzyabiElmiRow2]', 
'$datatarjome[arzyabiElmiNomre]', 
'$datatarjome[arzyabikeyfiRow1]', 
'$datatarjome[arzyabikeyfiRow2]', 
'$datatarjome[arzyabikeyfiRow3]', 
'$datatarjome[arzyabikeyfiRow4]', 
'$datatarjome[arzyabikeyfiRow5]', 
'$datatarjome[arzyabikeyfiRow6]', 
'$datatarjome[arzyabikeyfiRow7]' ,
'$datatarjome[arzyabikeyfiNomre]', 
'$datatarjome[arzyabieghtesadiRow1]',
'$datatarjome[arzyabiEghtesadiRow2]' ,
'$datatarjome[arzyabiEghtesadiRow3]',
'$datatarjome[arzyabiEghtesadiRow5]',
'$datatarjome[arzyabiEghtesadiNomre]' ,
'$datatarjome[pishnahadatRow1]' ,
'$datatarjome[pishnahadatRow2]' ,
'$datatarjome[pishnahadatRow3]'



)";
    $result = mysqli_query($config, $judgingTarjome);
    //  var_dump($result);
    if ( false===$result ) {
        printf($judgingTarjome);
        printf("error: %s\n", mysqli_error($config));
    }


 $id=mysqli_insert_id($config);

//var_dump($id);die();








  //$row=mysqli_fetch_array($result);
   //var_dump($row);
    //use id for other table for foriegn key
  //  $id=$row['id'];



    //table1
    $judgingTarjomeReshte = "INSERT INTO judgingTarjomeReshte (
personID ,
NameReshteRow1 

)
VALUES
(
'$id',
'$datatarjome[NameReshteRow1]'
)";

    $result1 = mysqli_query($config, $judgingTarjomeReshte);
    if ( false===$result1 ) {
        printf($judgingTarjomeReshte);
        printf("error: %s\n", mysqli_error($config));
    }


    //$row1=mysqli_fetch_array($result1);



    //table2

    $judgingTarjomeTatbiqSarfasl = "INSERT INTO judgingTarjomeTatbiqSarfasl (
personID ,
DarsNameRow1,
TedadeVahedRow1	,
MaghtaTahsiliRow1,
DarsadmotabeghatRow1
)
VALUES
(
'$id',
'$datatarjome[DarsNameRow1]',
'$datatarjome[TedadeVahedRow1]',
'$datatarjome[MaghtaTahsiliRow1]',
'$datatarjome[DarsadmotabeghatRow1]'


)";

    $result2 = mysqli_query($config, $judgingTarjomeTatbiqSarfasl);
    if ( false===$result2 ) {
        printf($judgingTarjomeTatbiqSarfasl);
        printf("error: %s\n", mysqli_error($config));
    }


   // $row2=mysqli_fetch_array($result2);










       //table3

    $judgingTarjomeKetabMoshabeh = "INSERT INTO judgingTarjomeKetabMoshabeh (
personID ,
AsarNameRow1motabeghat	,
NasherRow1motabeghat	,
SaleRow1motabeghat	

)
VALUES
(
'$id',
'$datatarjome[AsarNameRow1motabeghat]',
'$datatarjome[NasherRow1motabeghat]',
'$datatarjome[SaleRow1motabeghat]'

)";

    $result3 = mysqli_query($config, $judgingTarjomeKetabMoshabeh);
    if ( false===$result3 ) {
        printf($judgingTarjomeKetabMoshabeh);
        printf("error: %s\n", mysqli_error($config));
    }


  //  $row3=mysqli_fetch_array($result3);





}





?>







