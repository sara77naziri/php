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
    <script src="../public/js/app.js" defer></script>

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

    <div class=" mr-md-auto align-content-stretch d-none d-md-block">
        <a href="" class="  small text-decoration-none text-white " data-toggle="dropdown"> EN/FA<i class="material-icons text-white ">language </i></a>
    </div>


</nav>
</body>

<body>







<?php
session_start();






if (@isset($_POST['sumbit1'])) {
    $datachap = $_POST;

    $config1 = mysqli_connect('localhost', 'root', '', 'new');
//find userId
    $sqlUser = "SELECT ID FROM users WHERE username ='$_SESSION[username]'";
//var_dump($_SESSION[username]);die();
    $resultUserId = mysqli_query($config1, $sqlUser);
    $rowUser = mysqli_fetch_array($resultUserId);

//var_dump($rowUser['ID']);die();
    $id = $rowUser['ID'];








    $name = $_SESSION['username'] . "chap";

    /*  start-> upload file */
    if (!file_exists("$name")) {
        //sakhtfolder ba name kode meli
        mkdir('uploadfiles/' . $name);

        //path bedim be table doc
        $path = "uploadfiles/" . $name;

        //add kardan filepic shenasname be folder bala
        $filename1 = $_FILES['shenasname']['name'];
        $array1 = explode(".", $filename1);
        $ext1 = end($array1);
        $new_name1 = rand() . "shenasname" . "." . $ext1;
        $from1 = $_FILES['shenasname']['tmp_name'];
        $to1 = 'uploadfiles/' . $name . "/" . $new_name1;
        move_uploaded_file($from1, $to1);


        //add kardan filepic hokmEstekhdam be folder bala
        $filename2 = $_FILES['hokmEstekhdam']['name'];
        $array2 = explode(".", $filename2);
        $ext2 = end($array2);
        $new_name2 = rand() . "hokmEstekhdam" . "." . $ext2;
        $from2 = $_FILES['hokmEstekhdam']['tmp_name'];
        $to2 = "uploadfiles/" . $name . "/" . $new_name2;
        move_uploaded_file($from2, $to2);


        //add kardan filepic safheOnvan be folder bala
        $filename3 = $_FILES['safheOnvan']['name'];
        $array3 = explode(".", $filename3);
        $ext3 = end($array3);
        $new_name3 = rand() . "safheOnvan" . "." . $ext3;
        $from3 = $_FILES['safheOnvan']['tmp_name'];
        $to3 = "uploadfiles/" . $name . "/" . $new_name3;
        move_uploaded_file($from3, $to3);



        //add kardan  wordFile be folder bala
        $filename4 = $_FILES['wordFile']['name'];
        $array4 = explode(".", $filename4);
        $ext4 = end($array4);
        $new_name4 = rand() . "wordFile" . "." . $ext4;
        $from4 = $_FILES['wordFile']['tmp_name'];
        $to4 = "uploadfiles/" . $name . "/" . $new_name4;
        move_uploaded_file($from4, $to4);



        //add kardan pdfFile  be folder bala
        $filename5 = $_FILES['pdfFile']['name'];
        $array5 = explode(".", $filename5);
        $ext5 = end($array5);
        $new_name5 = rand() . "pdfFile" . "." . $ext5;
        $from5 = $_FILES['pdfFile']['tmp_name'];
        $to5 = "uploadfiles/" . $name . "/" . $new_name5;
        move_uploaded_file($from5, $to5);

        //add kardan pdfFile  be folder bala
        $filename6 = $_FILES['pdfFileKetabAsli']['name'];
        $array6 = explode(".", $filename6);
        $ext6 = end($array6);
        $new_name6 = rand() . "pdfFileKetabAsli" . "." . $ext6;
        $from6 = $_FILES['pdfFileKetabAsli']['tmp_name'];
        $to66 = "uploadfiles/" . $name . "/" . $new_name6;
        move_uploaded_file($from6, $to66);


        //add kardan pdfFile  be folder bala
        $filename7 = $_FILES['pdfFileMatnKetabAsli']['name'];
        $array7 = explode(".", $filename7);
        $ext7 = end($array7);
        $new_name7 = rand() . "pdfFileMatnKetabAsli" . "." . $ext7;
        $from7 = $_FILES['pdfFileMatnKetabAsli']['tmp_name'];
        $to7 = "uploadfiles/" . $name . "/" . $new_name7;
        move_uploaded_file($from7, $to7);
    }

    $configt = mysqli_connect('localhost', 'root', '', 'new');

    //insert to chap_req and give id for other table
    $chap_req = "INSERT INTO chapreq(
chapId,
bookType, 
originalBookName,
originalBookWriter,
originalBookPublisher,
originalBookLanguage,
originalBookPublicationYear,
originalBookPublicationRound,
originalBookPageCount,
darsi,
komakDarsi,
profitDescription,
profitExpected,
readerCount,
jashnvareReason
)
Values(
'$id',
'$datachap[bookType]',
'$datachap[originalBookName]',
'$datachap[originalBookWriter]',
'$datachap[originalBookPublisher]',
'$datachap[originalBookLanguage]',
'$datachap[originalBookPublicationYear]',
'$datachap[originalBookPublicationRound]',
'$datachap[originalBookPageCount]',
'".array_key_exists("darsi", $datachap)."',
'".array_key_exists("komakDarsi", $datachap)."',
'$datachap[profitDescription]',
'$datachap[profitExpected]',
'$datachap[readerCount]',
'$datachap[jashnvareReason]'
   
   
) ";

    $resultchap_req = mysqli_query($configt, $chap_req);
    if ( false===$resultchap_req ) {
        printf($resultchap_req);
        printf("error: %s\n", mysqli_error($configt));die();
    }

    $idCh = mysqli_insert_id($configt);



    //use id for other table for foriegn key


    //start insert to table with forign key

    //padidavarandegan
    //table1
    $padidavarandegan = "INSERT INTO chapReqAuthors(
            chapId ,
firstName ,
lastName ,
fatherName ,
melliCode ,
shenasnameCode
                )
Values(
'$idCh',
'$datachap[firstName]',
'$datachap[lastName]',
'$datachap[fatherName]',
'$datachap[melliCode]',
'$datachap[shenasnameCode]'
 
   
) ";
    $resul1 = mysqli_query($configt, $padidavarandegan);




    //mohtavayeAsar
    //table3
    $mohtavayeAsar = "INSERT INTO chapReqUsedInClasses (
chapId ,
reshte,
dars,
maqta
)
Values(
'$idCh',
'$datachap[reshte]',
'$datachap[dars]',
'$datachap[maqta]'
   
) ";

    $resul3 = mysqli_query($configt, $mohtavayeAsar);

    if ( false===$resul3 ) {
        printf($resul3);
        printf("error: %s\n", mysqli_error($configt));die();
    }


    //chapReqAuthorsPublishedBooks
    //table4
    $chapReqAuthorsPublishedBooks = "INSERT INTO chapReqAuthorsPublishedBooks(
              chapId,
montasherName,
montasherType ,
montasherYear ,
montasherPublisher
)
Values(
'$idCh',
'$datachap[montasherName]',
'$datachap[montasherType]',
'$datachap[montasherYear]',
'$datachap[montasherPublisher]'
   
) ";

    $resul4 = mysqli_query($configt, $chapReqAuthorsPublishedBooks);



    //chapReqJudges
    //table5
    $chapReqJudges = "INSERT INTO chapReqJudges(
chapId ,
judgeName ,
judgeTakhasos ,
judgeHeyatElmi ,
judgePhone
)
Values(
'$idCh',
'$datachap[judgeName]',
'$datachap[judgeTakhasos]',
'$datachap[judgeHeyatElmi]',
'$datachap[judgePhone]'
) ";

    $resul5 = mysqli_query($configt, $chapReqJudges);



    //chapReqJudges
    //table7
    $chapReqSimilarBooks = "INSERT INTO chapreqsimilarbooks(
chapId,
similarName,
similarPublisher,
similarYear

)
Values(
'$idCh',
'$datachap[similarName]',
'$datachap[similarPublisher]',
'$datachap[similarYear]'
) ";

    $resul7 = mysqli_query($configt,$chapReqSimilarBooks);
    if ( false===$resul7 ) {
        printf($resul7);
        printf("error: %s\n", mysqli_error($configt));die();
    }






    //upload
    //table8
    $chapReqDocs = "INSERT INTO chapReqDocs(
   chapId,
   shenasname,
hokmEstekhdam,
safheOnvan,
wordFile,
pdfFile,
pdfFileKetabAsli,
pdfFileMatnKetabAsli
)
Values(
'$idCh',
'$to1',
'$to2',
'$to3',
'$to4',
'$to5',
'$to66',
'$to7'
) ";

    $resul8 = mysqli_query($configt, $chapReqDocs);





    if (false === $resultchap_req) {
        printf($resultchap_req);
        printf("error: %s\n", mysqli_error($configt));
    }
}



?>