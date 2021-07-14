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

</head>
<body>


<!--header start-->
<div class=" mr-auto align-content-stretch d-md-none d-flex justify-content-end">
    <a href="" class="  small text-decoration-none " data-toggle="dropdown" > EN/FA<i class="material-icons text-white ">language </i></a>
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


    <button class="navbar-toggler mr-auto border-0" type="button" data-toggle="collapse" data-target="#menu1">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse text-center " id="menu1">
        <ul class="navbar-nav">


            <li class="nav-item">
                <a href="login/loginPage.php" class="nav-link text-white">ورود</a>
            </li>

            <li class="nav-item">
                <a href="../index.php" class="nav-link text-white">صفحه اصلی</a>
            </li>



        </ul>
    </div>

    <div class="   mr-md-auto align-content-stretch d-none d-md-block">
        <a href="" class="  small text-decoration-none text-white " data-toggle="dropdown" > EN/FA<i class="material-icons text-white ">language </i></a>
    </div>


</nav>
</body>
<body>

<div class="container bg-">
    <div class="row justify-content-center">


        <form action="" class="  login-page-body m-2  my-4 ">

            <h5 class=" text-center text-white p-2">فراموشی رمز عبور</h5>
            <div class=" d-flex flex-column px-5 pt-4 pb-4">

                <div class="form-group mb-4 mt-0 ">
                    <label for="email" class="small">ایمیل  <span class="text-danger">*</span> </label>
                    <input type="text" class="form-control form-control-sm input-radius-custom" name="email" id="email"  Required  >
                </div>

                <input type="submit" class="btn btn-sm btn-primary input-radius-custom px-4 my-3 mx-5" name="submit1" value="بازیابی رمز عبور">
            </div>
        </form>



    </div>
</div>
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