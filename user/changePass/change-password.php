<?php

include('helpChangePass.php');



?>














        <form action="" class="  login-page-body m-2  my-4 " method="post">

            <h5 class=" text-center text-white p-2">تغییر رمز عبور</h5>
            <div class=" d-flex flex-column px-5 pt-4 pb-4">
                <div class="form-group  mt-0 ">
                    <label for="password-feli" class="small">رمز عبور فعلی  <span class="text-danger">*</span> </label>
                    <input type="password" class="form-control form-control-sm input-radius-custom  " name="frm[password-feli]" id="password-feli" pattern=".{8,}" required title="پسورد باید حداقل 8 رقم باشد">
                </div>

                <div class="form-group my-3">
                    <label for="password-jadid" class="small">رمز عبور جدید  <span class="text-danger">*</span> </label>
                    <input type="password" class="form-control form-control-sm input-radius-custom" name="frm[passwordJadid]" id="password-jadid" pattern=".{8,}" required title="پسورد باید حداقل 8 رقم باشد">
                </div>

                <div class="form-group my-3">
                    <label for="tekrar-password-jadid" class="small">تکرار رمز عبور جدید  <span class="text-danger">*</span> </label>
                    <input type="password" class="form-control form-control-sm input-radius-custom" name="frm[tekrarPasswordJadid]" id="tekrar-password-jadid" pattern=".{8,}"  Required title="پسورد باید حداقل 8 رقم باشد">
                </div>
                <div class="form-check my-3 mx-5 ">
                    <input type="checkbox" class="form-check-input " name="frm[rememberMe]" id="rememberMe" value="rememberme" >
                    <label for="rememberMe" class="form-check-label  small"> مرا  به خاطر بسپار</label>
                </div>

                <input type="submit" class="btn btn-sm btn-primary   input-radius-custom   px-5 my-3 mx-5" name="submit1" value="تغییر رمز عبور">

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