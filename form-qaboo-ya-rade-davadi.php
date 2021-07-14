
<?php

session_start();

?>


<!doctype html>
<html lang="fa">
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
    <script src="public/js/app.js" defer></script>

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

    <div class=" mr-md-auto align-content-stretch d-none d-md-block">
        <a href="" class=" small text-decoration-none text-white " data-toggle="dropdown" > EN/FA<i class="material-icons text-white ">language </i></a>
    </div>


</nav>
</body>
<body>

<?php
//$sql="SELECT * FROM chapreq WHERE id=''";
//$row=mysqli_query($config,$sql);
//$result=mysqli_fetch_array($row);


if(isset($_POST['btn1'])){
    header("location:/ProWithPhp/user/form-moshakhasat-shakhsi.php");

}

?>

<div class="container my-4">
    <div class="row">
        <div class="col-12 m-1">

            <fieldset class=" p-3 m-2 my-4 bg-white border rounded" >
                <legend class="">متن نامه</legend>
                <form class="" name="translateReqForm" method="post">
                    <div class="text-justify">
<?php
$config2=mysqli_connect("localhost", "root", "","new");
$sqlUser="SELECT * FROM users where username ='$_SESSION[username]' ";
$resultUser=mysqli_query($config2,$sqlUser);
$rowUser=mysqli_fetch_array($resultUser);







?>
                        <p>با سلام و احترام </p>
                        <h4> جناب آقای دکتر <?php echo "$rowUser[firstName] $rowUser[lastName]"; ?> </h4>
                        <p>با نظر به این که شما عضو هیئت داوری چاپ کتب دانشگاهی می باشید، از همین رو کتابی با مشخصات زیر برای شما ارسال شده است.</p>
                        <p> در صورت تمایل جهت بررسی و داوری کتاب روی دریافت و در غیر این صورت روی انصراف کلیک کنید.</p>

                    </div>


                    <fieldset class="border  p-3 m-2 py-4 my-4 form-fieldset" >
                        <legend class="font-weight-bolder small">خلاصه مشخصات اثر</legend>
                        <div class=" py-3">

                            <fieldset class="border  p-3 m-2 py-4 my-4 form-fieldset">

                                <div class="d-flex flex-md-row flex-wrap  flex-column   justify-content-around ">

                                    <div class="form-group flex-50">
                                        <label for="" class="small">عنوان کتاب(فارسی)  :</label>
                                        <input type="text" class="form-control form-control-sm small input-radius-custom" name="nameShakhsi"  >
                                    </div>

                                    <div class="form-group flex-50">
                                        <label for="" class="small" >عنوان کتاب(انگلیسی) </label>
                                        <input type="text" class="form-control form-control-sm small input-radius-custom" name="LnameShakhsi"  >
                                    </div>


                                </div>
                            </fieldset>



                                    <fieldset class="border  p-3 m-2 py-4 my-4 form-fieldset">

                                        <div class="d-flex flex-md-row flex-wrap  flex-column   justify-content-around ">

                                            <div class="form-group flex-50">
                                                <label for="" class="small">نام و نام خانوادگی</label>
                                                <input type="text" class="form-control form-control-sm small input-radius-custom" name="nameShakhsi" >
                                            </div>

                                            <div class="form-group flex-50">
                                                <label for="" class="small" >گروه آموزشی </label>
                                                <input type="text" class="form-control form-control-sm small input-radius-custom" name="LnameShakhsi" >
                                            </div>


                                        </div>
                                    </fieldset>




                            <fieldset class="border  p-3 m-2 py-4 my-4 form-fieldset">

                                <div class="d-flex flex-md-row flex-wrap  flex-column   justify-content-around ">

                                    <div class="form-group flex-50">
                                        <label for="" class="small">  نوع اثر</label>
                                        <input type="text" class="form-control form-control-sm small input-radius-custom" name="nameShakhsi" >
                                    </div>


                                </div>
                            </fieldset>

                    <fieldset class="border  p-3 m-2 py-4 my-4 form-fieldset"  >
                        <div class="d-sm-flex flex-wrap justify-content-sm-around  py-4 flex-50" >

                            <div class="form-group flex-50">
                                <label for="MarjaName" class="small">نام مرجع(به انگلیسی) </label>
                                <input type="text" name="MarjaName" id="MarjaName" class="form-control form-control-sm small input-radius-custom">
                            </div>


                            <div class="form-group flex-50">
                                <label for="writerName" class="small">نام نویسنده : </label>
                                <input type="text" name="writerName" id="writerName" class="form-control form-control-sm small input-radius-custom">
                            </div>

                            <div class="form-group flex-50">
                                <label for="Mohtava" class="small">نوع محتوای کتاب  : </label>
                                <input type="text" name="Mohtava" id="Mohtava" class="form-control form-control-sm small input-radius-custom">
                            </div>

                            <div class="form-group flex-50">
                                <label for="Chekide" class="small">چکیده کتاب: </label>
                                <input type="text" name="Chekide" id="Chekide" class="form-control form-control-sm small input-radius-custom">
                            </div>


                        </div>
                    </fieldset>
                        </div>
                    </fieldset>


                    <button type="button" class="btn btn-secondary btn-md input-radius-custom bg-danger "  name="btn1"> انصراف</button>
                    <button type="button" class="btn btn-secondary btn-md input-radius-custom bg-success"  name="btn2"> دریافت</button>
                                    <!--                                        وقتی دریافت رو زد اون درخواست میره توی بخش درخواست های قبول شده-->
                </form>
            </fieldset >

        </div>
    </div>
</div>


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