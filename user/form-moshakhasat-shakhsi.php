<?php
session_start();



if (isset($_POST['sumbit1'])) {

    $dataPro=$_POST;
    $conn = mysqli_connect('localhost', 'root', '', 'new');

    // echo("it reached here!");
    $queryUpdate = "UPDATE users SET 
	

	firstName='$dataPro[firstName]',
	lastName='$dataPro[lastName]',
	fatherName='$dataPro[fatherName]',
	melliCode='$dataPro[melliCode]',
	shenasnameCode='$dataPro[shenasnameCode]',
	shenasnameLoc='$dataPro[shenasnameLoc]',
	birthLoc='$dataPro[birthLoc]',
	birthYear='$dataPro[birthYear]',
	gender='$dataPro[gender]',
	pazhooheshiCode='$dataPro[pazhooheshiCode]',
	reshteTakhassosi='$dataPro[reshteTakhassosi]',
	maqtaTahsili='$dataPro[maqtaTahsili]',
	madrakTahsili='$dataPro[madrakTahsili]',
	daneshkadeCode='$dataPro[firstName]',
	goruhAmuzeshiCode='$dataPro[goruhAmuzeshiCode]',
	rotbeElmi='$dataPro[rotbeyeElmi]',
	daneshjuMaqta='$dataPro[daneshjuMaqta]',
	roomPhone='$dataPro[roomPhone]',
	roomNumber='$dataPro[roomNumber]',
	phone='$dataPro[phone]',
	postalCode='$dataPro[postalCode]',
	email='$dataPro[email]',
	address='$dataPro[address1]',
	shomareHesab='$dataPro[shomareHesab]'
	
    WHERE username='$_SESSION[username]'
	
	";


    $rowUpdate = mysqli_query($conn, $queryUpdate);
  // var_dump($rowUpdate);die();
    if ( false===$rowUpdate ) {
        printf($rowUpdate);
        printf("error: %s\n", mysqli_error($conn));die();
    }

    header("location:/proWithPhp2/user/form-moshakhasat-shakhsi.php");
}



$query = "SELECT * FROM users WHERE melliCode='$_SESSION[username]'";
$conn = mysqli_connect('localhost', 'root', '', 'new');
$row1 = mysqli_query($conn, $query);
$result = mysqli_fetch_array($row1);
// var_dump($result);
if (mysqli_num_rows($row1) == 0) {
    goToLogin();
}

?>



<!doctype html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
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
    <a href="" class="  small text-decoration-none " data-toggle="dropdown"> EN/FA<i class="material-icons text-white ">language </i></a>
</div>
<header class="container-fluid d-block custom-header text-dark ">

    <div class="row align-items-center m-b-1 mx-2">
        <div class="col-12 col-md-2 "><img src="../public/imgs/gu-logo.png" alt="" class=""></div>
        <div class="col-12 col-md-8">مرکز چاپ و نشر دانشگاه گیلان</div>
        <div class="col-12 col-md-2 ">
            <p id="headerdate" class=""></p>
        </div>
    </div>
</header>
<!--header end-->

<!--menu start-->

<nav class="navbar navbar-expand-md sticky-top navbar-light p-1 m-1 align-items-center custom-menu d-flex">

    <ul class="nabar-nav custom-navbar-brand-profile m-0 p-0 position-relative">
        <a href="" class=" nav-link dropdown-toggle text-decoration-none  text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> پروفایل</a>
        <div class="dropdown-menu  position-absolute  ">
            <a href="form-moshakhasat-shakhsi.php" class="dropdown-item">مشخصات شخصی</a>
            <a href="changePass/change-password.php" class="dropdown-item">تغییر رمزعبور</a>
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
        <a href="" class="  small text-decoration-none text-white " data-toggle="dropdown"> EN/FA<i class="material-icons text-white ">language </i></a>
    </div>


</nav>
</body>

<body>

<div class="container my-4">
    <div class="row">
        <div class="col-12 m-1">

            <fieldset class=" p-3 m-2 my-4 bg-white border rounded">
                <legend class="">فرم مشخصات شخصی</legend>
                <form class="" name="translateReqForm" method="post">

                    <fieldset class="border  p-3 m-2 py-4 my-4 form-fieldset">

                        <div class=" py-3">

                            <div class="d-flex flex-column flex-md-row flex-wrap    justify-content-around ">

                                <div class="form-group flex-50">
                                    <label for="nameShakhsi" class="small">نام <span class="text-danger">*</span> </label>
                                    <input type="text" class="form-control form-control-sm small input-radius-custom" name="firstName" id="nameShakhsi" required value="<?= $result['firstName'] ?> ">
                                </div>

                                <div class="form-group flex-50">
                                    <label for="LnameShakhsi" class="small"> نام خانوادگی <span class="text-danger">*</span> </label>
                                    <input type="text" class="form-control form-control-sm small input-radius-custom" name="lastName" id="LnameShakhsi" required value="<?= $result['lastName'] ?> ">
                                </div>

                                <div class="form-group flex-50">
                                    <label for="FNameShakhsi" class="small">نام پدر <span class="text-danger">*</span> </label>
                                    <input type="text" class="form-control form-control-sm small input-radius-custom" name="fatherName" id="FNameShakhsi" required value="<?= $result['fatherName'] ?> ">
                                </div>

                                <div class="form-group flex-50">
                                    <label for="kodMelliShakhsi" class="small"> کد ملی <span class="text-danger">*</span> </label>
                                    <input type="text" class="form-control form-control-sm small input-radius-custom" name="melliCode" id="kodMelliShakhsi" required value="<?= $result['melliCode'] ?> ">
                                </div>

                                <div class="form-group flex-50">
                                    <label for="shenasnameShakhsi" class="small">شماره شناسنامه <span class="text-danger">*</span> </label>
                                    <input type="tel" class="form-control form-control-sm small input-radius-custom" name="shenasnameCode" id="shenasnameShakhsi" required value="<?= $result['shenasnameCode'] ?> ">
                                </div>

                                <div class="form-group flex-50">
                                    <label for="mahalsodoorShakhsi" class="small"> محل صدور شناسنامه </label>
                                    <input type="text" class="form-control form-control-sm small input-radius-custom" name="shenasnameLoc" id="mahalsodoorShakhsi" value="<?= $result['shenasnameLoc'] ?> ">
                                </div>

                                <div class="form-group flex-50">
                                    <label for="salTavallodShakhsi" class="small"> سال تولد </label>
                                    <input type="text" class="form-control form-control-sm small input-radius-custom" name="birthYear" id="salTavallodShakhsi" value="<?= $result['birthYear'] ?> ">
                                </div>

                                <div class="form-group flex-50">
                                    <label for="mahalTavallodShakhsi" class="small"> محل تولد </label>
                                    <input type="text" class="form-control form-control-sm small input-radius-custom" name="birthLoc" id="mahalTavallodShakhsi" value="<?= $result['birthLoc'] ?> ">
                                </div>

                                <div class="form-group flex-50">
                                    <label class="small">جنسیت <span class="text-danger">*</span> </label>
                                    <div class="form-check  flex-50 d-flex flex-row justify-content-around">
                                        <label class="form-check-label small  ">
                                            <input type="radio" class="form-check-input" name="gender" value="male" <?= $result['gender'] != "male" ? "" : "checked" ?> required>
                                            مرد
                                        </label>
                                        <label class="form-check-label small  ">
                                            <input type="radio" class="form-check-input" name="gender" value="female" <?= $result['gender'] == "male" ? "" : "checked" ?> required>
                                            زن
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group flex-50">
                                    <label for="kod-pazhoheshi-Shakhsi" class="small"> کد پژوهشی <span class="text-danger">*</span> </label>
                                    <input type="text" class="form-control form-control-sm small input-radius-custom" name="pazhooheshiCode" id="kod-pazhoheshi-Shakhsi" value="<?= $result['pazhooheshiCode'] ?> ">
                                </div>

                                <div class="form-group flex-50">
                                    <label for="reshteTakhasoseShakhsi" class="small"> رشته تخصصی <span class="text-danger">*</span> </label>
                                    <input type="text" class="form-control form-control-sm small input-radius-custom" name="reshteTakhassosi" id="reshteTakhasoseShakhsi" value="<?= $result['reshteTakhassosi'] ?> ">
                                </div>

                                <div class="form-group flex-50">
                                    <label for="maghtaTahsiliShakhsi" class="small"> مقطع تحصیلی <span class="text-danger">*</span> </label>
                                    <input type="text" class="form-control form-control-sm small input-radius-custom" name="maqtaTahsili" id="maghtaTahsiliShakhsi" value="<?= $result['maqtaTahsili'] ?> ">
                                </div>

                                <div class="form-group flex-50">
                                    <label for="madrakTahsiliShakhsi" class="small"> مدرک تحصیلی <span class="text-danger">*</span> </label>
                                    <input type="text" class="form-control form-control-sm small input-radius-custom" name="madrakTahsili" id="madrakTahsiliShakhsi" value="<?= $result['madrakTahsili'] ?> ">
                                </div>

                                <div class="form-group flex-50">
                                    <label for="kodDaneshKade" class="small"> کد دانشکده <span class="text-danger">*</span> </label>
                                    <input type="text" class="form-control form-control-sm small input-radius-custom" name="daneshkadeCode" id="kodDaneshKade" required value="<?= $result['daneshkadeCode'] ?> ">
                                </div>

                                <div class="form-group flex-50">
                                    <label for="kodGoroohAmoozeshi" class="small"> کد گروه آموزشی <span class="text-danger">*</span> </label>
                                    <input type="text" class="form-control form-control-sm small input-radius-custom" name="goruhAmuzeshiCode" id="kodGoroohAmoozeshi" required value="<?= $result['goruhAmuzeshiCode'] ?> ">
                                </div>

                                <div class="form-group flex-50">
                                    <label for="rotbeElmi" class="small"> رتبه ی علمی <span class="text-danger">*</span> </label>
                                    <select type="text" class="form-control form-control-sm small" placeholder="نوع اثر" id="rotbeElmi" name="rotbeyeElmi" value="<?= $result['rotbeyeElmi'] ?> ">
                                        <option value="استاد (Professor)" class="small">استاد (Professor)</option>
                                        <option value="دانشیار(Associate Professor)" class="small">دانشیار(Associate Professor)</option>
                                        <option value="استادیار(Assistant Professor)" class="small">استادیار(Assistant Professor)</option>
                                        <option value="مربی (Instructor)" class="small">مربی (Instructor)</option>
                                    </select>
                                </div>

                                <div class="form-group flex-50">
                                    <label for="daneshjooMaghta" class="form-check-label small">
                                        <div class="form-check"><label class="form-check-label ">دانشجو مقطع <input type="checkbox" class="form-check-input mx-2 mb-1" name="daneshjuMaqtaBool" value=" ">
                                            </label></div>
                                    </label>
                                    <input type="text" class="form-control form-control-sm small input-radius-custom" name="daneshjuMaqta" id="daneshjooMaghta" value="<?= $result['daneshjuMaqta'] ?>">
                                </div>

                                <div class="form-group flex-50">
                                    <label for="tellOtaghShakhsi" class="small"> شماره تلفن اتاق <span class="text-danger">*</span> </label>
                                    <input type="text" class="form-control form-control-sm small input-radius-custom" name="roomPhone" id="tellOtaghShakhsi" value="<?= $result['roomPhone'] ?> ">
                                </div>

                                <div class="form-group flex-50">
                                    <label for="shomareOtagh" class="small"> شماره اتاق <span class="text-danger">*</span> </label>
                                    <input type="text" class="form-control form-control-sm small input-radius-custom" name="roomNumber" id="shomareOtagh" value="<?= $result['roomNumber'] ?> ">
                                </div>

                                <div class="form-group flex-50">
                                    <label for="tellShakhsi" class="small"> شماره تلفن همراه <span class="text-danger">*</span> </label>
                                    <input type="text" class="form-control form-control-sm small input-radius-custom" name="phone" id="tellShakhsi" value="<?= $result['phone'] ?> ">
                                </div>

                                <div class="form-group flex-50">
                                    <label for="kodPostiShakhsi" class="small"> کد پستی </label>
                                    <input type="text" class="form-control form-control-sm small input-radius-custom" name="postalCode" id="kodPostiShakhsi" value="<?= $result['postalCode'] ?> ">
                                </div>

                                <div class="form-group flex-50">
                                    <label for="emailShakhsi" class="small"> پست الکترونیک <span class="text-danger">*</span> </label>
                                    <input type="email" class="form-control form-control-sm small input-radius-custom" name="email" id="emailShakhsi" value="<?= $result['email'] ?>">
                                </div>

                                <div class="form-group  flex-100">
                                    <label for="addressShakhsi" class="small"> آدرس </label>
                                    <textarea class="form-control form-control-sm small input-radius-custom" input-radius-custom id="addressShakhsi" name="address1" ><?=$result['address']?></textarea>
                                </div>

                                <div class="form-group ">
                                    <label for="shomarehesabshakhsi" class="small"> شماره حساب </label>
                                    <input type="text" class="form-control form-control-sm small input-radius-custom" name="shomareHesab" value="<?= $result['shomareHesab'] ?>" id="shomarehesabshakhsi">
                                </div>

                            </div>

                        </div>
                    </fieldset>
                    <input type="submit" class="btn btn-info btn-sm my-4 input-radius-custom d-block mx-auto px-5" id="submit1" name="sumbit1" value=" ثبت اطلاعات">
                </form>
            </fieldset>
        </div>
    </div>
</div>

<footer class="container-fluid custom-footer">
    <div class="row">
        <div class="col-12 text-center">
            <div class=""> آدرس: رشت - کیلومتر پنج جاده تهران - دانشکاه گیلان</div>
        </div>
    </div>
</footer>

<script>
    headerdate();
</script>
</body>

</html>