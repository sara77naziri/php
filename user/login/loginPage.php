<?php
        include_once 'loginhelp.php';

?>



<div class="container bg-">
    <div class="row justify-content-center">


            <form action="" class="  login-page-body m-2  my-4 " method="post">

                   <h5 class=" text-center text-white p-2">ورود به سامانه</h5>
                <div class="d-flex flex-column px-5 pt-4 pb-4">
                 <div class="form-group mb-4 mt-0 ">
                    <label for="userName1" class="small">نام کاربری  <span class="text-danger">*</span> </label>
                    <input type="text" class="form-control form-control-sm input-radius-custom" name="frm[userName1]" id="userName1"  Required  >
                </div>

                <div class="form-group my-2">
                    <label for="password1" class="small">رمز عبور  <span class="text-danger">*</span>  </label>
                    <input type="password" class="form-control form-control-sm input-radius-custom" name="frm[password1]" id="password1" Required pattern=".{8,}" title="پسورد باید حداقل 8 رقم باشد">
                </div>

                <div class="form-check my-3">
                    <input type="checkbox" class="form-check-input mx-2 " name="frm[rememberMe]" id="rememberMe" value="rememberme" >
                    <label for="rememberMe" class="form-check-label mx-4 small"> مرا  به خاطر بسپار</label>
                </div>

                <input type="submit" class="btn btn-sm btn-primary  input-radius-custom  mx-5 px-5" name="sumbit1" value="ورود">
                    <a  class="btn btn-sm d-block  mt-2" name="faramooshi" href="../forgot-password.php">فراموشی رمز عبور</a>
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




