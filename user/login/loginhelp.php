<!doctype html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>مرکز چاپ و نشر دانشگاه گیلان</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="shortcut icon" href="../../public/imgs/favicon.ico" />
    <!--  bootstrap css-->
    <link rel="stylesheet" href="../../public/css/bootstrap.css">
    <link rel="stylesheet" href="../../public/css/bootstrap-rtl.css">
    <link rel="stylesheet" href="../../public/css/bootstrap-reboot.css">
    <link rel="stylesheet" href="../../public/css/style.css">

    <!--bootstrap js-->
    <script src="../../public/js/jquery.min.js"></script>
    <script src="../../public/js/bootstrap.js"></script>
    <script src="../../public/js/custom.js"></script>

</head>
<body>


<!--header start-->
<div class=" mr-auto align-content-stretch d-md-none d-flex justify-content-end">
    <a href="" class="  small text-decoration-none " data-toggle="dropdown" > EN/FA<i class="material-icons text-white ">language </i></a>
</div>
<header class="container-fluid d-block custom-header text-dark ">

    <div class="row align-items-center m-b-1 mx-2">
        <div class="col-12 col-md-2 "><img src="../../public/imgs/gu-logo.png" alt="" class=""></div>
        <div class="col-12 col-md-8">مرکز چاپ و نشر دانشگاه گیلان</div>
        <div class="col-12 col-md-2 "><p id="headerdate" class=""></p></div>
    </div>
</header>
<!--header end-->

<!--menu start-->

<nav class="navbar navbar-expand-md sticky-top navbar-light p-1 m-1 align-items-center custom-menu d-flex">



    <button class="navbar-toggler mr-auto border-0" type="button" data-toggle="collapse" data-target="#menu1">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse text-center " id="menu1">
        <ul class="navbar-nav">


            <li class="nav-item">
                <a href="loginPage.php" class="nav-link text-white">ورود</a>
            </li>

            <li class="nav-item">
                <a href="../../index.php" class="nav-link text-white">صفحه اصلی</a>
            </li>



        </ul>
    </div>

    <div class="   mr-md-auto align-content-stretch d-none d-md-block">
        <a href="" class="  small text-decoration-none text-white " data-toggle="dropdown" > EN/FA<i class="material-icons text-white ">language </i></a>
    </div>


</nav>
</body>
<body>





<?php
session_start();
$message = "";
$config=mysqli_connect("localhost", "root", "","new");
//for cookies
if(@$_COOKIE['user_rem'] && @$_COOKIE['password_rem']){
    $sql1="SELECT * FROM users WHERE username='$_COOKIE[user_rem]'" ;
    $row1=mysqli_query($config,$sql1);
    $res1=mysqli_fetch_array($row1);

    if(mysqli_num_rows($row1) != 0 && $res1['Password']==($_COOKIE['password_rem'])){
        $_SESSION['username']=$res1['username'];
        header("location:index.php");
    }else{
        unset($_COOKIE['username_rem']);
        setcookie('username_rem', '', time() - 3600);
        unset($_COOKIE['password_rem']);
        setcookie('password_rem', '', time() - 3600);
    }
}
if(isset($_POST['sumbit1']))
{
    $data=$_POST['frm'];
    $username=$data['userName1'];
    $password=$data['password1'];
    if(isset($data['rememberMe'])){
        //cookies set for about 1 month;
        setcookie('user_rem',$username ,time()+60*60*24*7*4);
        setcookie('password_rem',$password,time()+60*60*24*7*4);}
    else{
        //  echo "C";
    }

    $sql="SELECT * FROM users WHERE username='$username'";
    $row=mysqli_query($config,$sql);
    $result=mysqli_fetch_array($row);

    //sha1 bezari vase pass


    if($result['password']==( $password)){


        $_SESSION['username']=$result['username'];



      //  die( $_SESSION['username']);
       header("location:/ProWithPhp2/user/form-moshakhasat-shakhsi.php");

    }

}

else if(isset($_POST['faramooshi'])){
    header("location:/user/forgot-passsword.php");

}

?>
