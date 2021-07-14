<?php

include("helpchapRequst.php");

?>



<div class="container my-4">
    <div class="row">
        <div class="col-12 m-1">

            <fieldset class=" p-3 m-2 my-4 bg-white border rounded">
                <legend class="">فرم ثبت درخواست چاپ کتاب</legend>
                <form class="" name="translateReqForm" method="post" enctype="multipart/form-data">


                    <fieldset class="border  p-3 m-2 py-4 my-4 form-fieldset">
                        <legend class="font-weight-bolder small">مشخصات فردی پدید آورندگان</legend>
                        <div class=" py-3">

                            <fieldset class="border  p-3 m-2 py-4 my-4 form-fieldset">
                                <div class="d-flex flex-md-row flex-wrap  flex-column   justify-content-around ">

                                    <div class="form-group flex-50">
                                        <label for="nameShakhsi" class="small">نام : </label>
                                        <input type="text" class="form-control form-control-sm small input-radius-custom" name="firstName" id="nameShakhsi">
                                    </div>

                                    <div class="form-group flex-50">
                                        <label for="LnameShakhsi" class="small"> نام خانوادگی: </label>
                                        <input type="text" class="form-control form-control-sm small input-radius-custom" name="lastName" id="LnameShakhsi">
                                    </div>

                                    <div class="form-group flex-50">
                                        <label for="FNameShakhsi" class="small">نام پدر: </label>
                                        <input type="text" class="form-control form-control-sm small input-radius-custom" name="fatherName" id="FNameShakhsi">
                                    </div>

                                    <div class="form-group flex-50">
                                        <label for="shenasnameShakhsi" class="small">شماره شناسنامه : </label>
                                        <input type="tel" class="form-control form-control-sm small input-radius-custom" name="melliCode" id="shenasnameShakhsi">
                                    </div>

                                    <div class="form-group flex-50">
                                        <label for="kodMelliShakhsi" class="small"> کد ملی : </label>
                                        <input type="number" class="form-control form-control-sm small input-radius-custom" name="shenasnameCode" id="kodMelliShakhsi">
                                    </div>

                                </div>

                            </fieldset>

                            <button type="button" class="btn btn-secondary btn-sm input-radius-custom" id="personAddBtn" name="add "><span class="material-icons">person_add</span> افزودن شخص پدید آورنده ی جدید</button>

                            <div class="row pl-3" id="personInfoContainer">

                            </div>
                        </div>
                    </fieldset>
                    <!--
                    پایان قسمت مشخصات فردی پدید آورندگان
                    -->


                    <!--
                    شروع قسمت نوع اثر
                    -->

                    <fieldset class="border  p-3 m-2 py-4 my-4 form-fieldset">
                        <legend class="font-weight-bolder small">نوع اثر</legend>
                        <div class="d-flex justify-content-around flex-wrap flex-50">

                            <div class="form-check mx-2 flex-50">
                                <label class="form-check-label small">
                                    <input type="radio" class="form-check-input" name="bookType" value="تصنیف">
                                    تصنیف
                                </label>
                            </div>


                            <div class="form-check mx-2 flex-50">
                                <label class="form-check-label small">
                                    <input type="radio" class="form-check-input" name="bookType" value="تألیف">
                                    تألیف
                                </label>
                            </div>

                            <div class="form-check mx-2 flex-50">
                                <label class="form-check-label small">
                                    <input type="radio" class="form-check-input" name="bookType" value="تدوین(به شیوه گردآوری)">
                                    تدوین(به شیوه گردآوری)
                                </label>
                            </div>

                            <div class="form-check mx-2 flex-50">
                                <label class="form-check-label small">
                                    <input type="radio" class="form-check-input" name="bookType" value="تصحیح انتقادی">
                                    تصحیح انتقادی</label>
                            </div>

                            <div class="form-check mx-2 flex-50">
                                <label class="form-check-label small">
                                    <input type="radio" class="form-check-input" name="bookType" value="ترجمه">
                                    ترجمه
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <!--
                    پایان قسمت نوع اثر
                    -->




                    <!--
                    شروع قسمت مشخصات کتاب زبان اصلی
                    -->

                    <fieldset class="border  p-3 m-2 py-4 my-4 form-fieldset">
                        <legend class="font-weight-bolder small ">مشخصات کتاب زبان اصلی</legend>
                        <div class="d-sm-flex flex-wrap justify-content-sm-around  py-4 flex-50">

                            <div class="form-group flex-100">
                                <label for="marjaName" class="small">نام مرجع اصلی (انگلیسی) :</label>
                                <input type="text" name="originalBookName" id="marjaName" class="form-control form-control-sm small input-radius-custom">
                            </div>

                            <div class="form-group flex-50">
                                <label for="writerName" class="small">نام نویسنده : </label>
                                <input type="text" name="originalBookWriter" id="writerName" class="form-control form-control-sm small input-radius-custom">
                            </div>

                            <div class="form-group flex-50">
                                <label for="publisherName" class="small">نام ناشر : </label>
                                <input type="text" name="originalBookPublisher" id="publisherName" class="form-control form-control-sm small input-radius-custom">
                            </div>

                            <div class="form-group flex-50">
                                <label for="mainLang" class="small">زبان اصلی : </label>
                                <input type="text" name="originalBookLanguage" id="mainLang" class="form-control form-control-sm small input-radius-custom">
                            </div>

                            <div class="form-group flex-50">
                                <label for="printYear" class="small">سال چاپ : </label>
                                <input type="text" name="originalBookPublicationYear" id="printYear" class="form-control form-control-sm small input-radius-custom">
                            </div>

                            <div class="form-group flex-50">
                                <label for="printingPeriod" class="small">دوره چاپ : </label>
                                <input type="text" name="originalBookPublicationRound" id="printingPeriod" class="form-control form-control-sm small input-radius-custom">
                            </div>

                            <div class="form-group flex-50">
                                <label for="mainBookPages" class="small">تعداد صفحات متن اصلی : </label>
                                <input type="text" name="originalBookPageCount" id="mainBookPages" class="form-control form-control-sm small input-radius-custom">
                            </div>
                        </div>
                    </fieldset>
                    <!--
                    پایان قسمت مشخصات کتاب زبان اصلی
                    -->


                    <!-- شروع قسمت محتوای اثر  -->
                    <fieldset class=" p-3 m-2 py-4 my-4 form-fieldset">
                        <legend class="small font-weight-bolder">محتوای اثر</legend>
                        <div class="border p-3 my-2 rounded">

                            <label for="name-reshte-mohtava1" class="small">
                                این اثر به عنوان کتاب <div class="form-check-inline text-primary "> <label for="darsi" class="form-check-label"><input type="checkbox" class="form-check-input mx-1" name="darsi" id="darsi" value="درسی">درسی</label> </div>
                                <div class="form-check-inline text-primary"><label for="komak-darsi" class="form-check-label"><input type="checkbox" class="form-check-input mx-1" name="komakDarsi" id="komak-darsi" value="کمک درسی">کمک درسی</label> </div>
                                طبق سرفصل تدوین شده در شورای عالی برنامه ریزی جهت تدریس دروس ذیل کاربرد دارد:
                            </label>
                            <div class="container">
                                <div class="row  ">
                                    <div class="input-group input-group-sm text-center mb-1">
                                        <div class="input-group-prepend ">
                                            <span class="input-group-text bg-white border-0 "></span>
                                        </div>
                                        <input type="text" class="form-control-plaintext  text-center small" disabled placeholder="نام رشته ">
                                        <input type="text" class="form-control-plaintext text-center small" disabled placeholder="نام درس">
                                        <input type="text" class="form-control-plaintext text-center small" disabled placeholder="مقطع تحصیلی">

                                    </div>
                                    <div class="input-group input-group-sm mb-1 ">
                                        <div class="input-group-prepend ">
                                            <span class="input-group-text ">1</span>
                                        </div>
                                        <input type="text" name="reshte" id="name-reshte-mohtava1" class="form-control form-control-sm small " placeholder="">
                                        <input type="text" name="dars" class="form-control form-control-sm small" id="name-dars-mohtava1" placeholder="">
                                        <input type="text" name="maqta" class="form-control form-control-sm small" id="name-maghta-mohtava1" placeholder="">

                                    </div>
                                    <button type="button" class="btn btn-secondary btn-sm input-radius-custom" id="MohtavaAddBtn"> <span class="material-icons"> playlist_add </span> افزودن سطر جدید </button>


                                </div>
                                <div class="row pl-3" id="MohtavaInfoContainer">

                                </div>
                            </div>


                        </div>
                    </fieldset>
                    <!--
                    پایان قسمت محتوای اثر
                    -->

                    <!--
                    شروع قسمت کتاب های منتشر شده توسط پدید آورندگان
                    -->

                    <fieldset class=" p-3 m-2 py-4 my-4 form-fieldset">
                        <legend class="font-weight-bolder small">کتاب های منتشر شده توسط پدید آورندگان</legend>
                        <div class="border p-3 my-2 ">
                            <div class="container">
                                <div class="row d-flex ">

                                    <div class="input-group input-group-sm text-center mb-1">
                                        <div class="input-group-prepend ">
                                            <span class="input-group-text bg-white border-0 "></span>
                                        </div>
                                        <input type="text" class="form-control-plaintext  text-center form-control-sm small" disabled placeholder="نام کتاب " name="">
                                        <input type="text" class="form-control-plaintext text-center form-control-sm small" disabled placeholder="نوع اثر" name="">
                                        <input type="text" class="form-control-plaintext text-center form-control-sm small" disabled placeholder="سال نشر" name="">
                                        <input type="text" class="form-control-plaintext text-center form-control-sm small" disabled placeholder="ناشر" name="">
                                    </div>

                                    <div class="input-group input-group-sm mb-1">
                                        <div class="input-group-prepend ">
                                            <span class="input-group-text ">1</span>
                                        </div>
                                        <input type="text" name="montasherName" class="form-control form-control-sm small" id="name-ketab" placeholder="">
                                        <select type="text" name="montasherType" id="noe-asar-ketab" class="form-control form-control-sm small" placeholder="نوع اثر">
                                            <option value="تصنیف">تصنیف</option>
                                            <option value="تألیف">تألیف</option>
                                            <option value="تدوین">تدوین</option>
                                            <option value="ترجمه">ترجمه</option>
                                        </select>
                                        <input type="number" name="montasherYear" id="sale-nashr-ketab" class="form-control form-control-sm small" placeholder="">
                                        <input type="text" name="montasherPublisher" id="nasher-ketab" class="form-control form-control-sm small" placeholder="">
                                    </div>

                                    <button type="button" id="KetabAddBtn" class="btn btn-secondary btn-sm input-radius-custom"><span class="material-icons"> playlist_add </span> افزودن کتاب جدید </button>

                                </div>
                                <div class="row pl-3" id="KetabInfoContainer">
                                </div>

                            </div>
                        </div>
                    </fieldset>


                    <!--
                پایان قسمت کتاب های منتشر شده توسط پدید آورندگان
                -->


                    <!--
                شروع قسمت پیشنهادات
                -->

                    <fieldset class=" p-3 m-2 py-4 my-4 form-fieldset">
                        <legend class="">پیشنهادات</legend>
                        <div class="border p-3 my-2 rounded text-justify small">
                            <div class="container">
                                <div class="row  ">

                                    <label for="fard-pishnahadi" class=""> چند نفر از افرادی که می توانند کتاب را نظر سنجی نمایند:(ترجیحا دو نفر داخل دانشگاه و سه نفر خارج دانشگاه)</label>
                                    <div class="input-group input-group-sm mb-1">
                                        <div class="input-group-prepend ">
                                            <span class="input-group-text bg-white border-0 bg-n "></span>
                                        </div>
                                        <input type="text" class="form-control-plaintext  text-center form-control-sm small " disabled placeholder="نام و نام خانوادگی  ">
                                        <input type="text" class="form-control-plaintext text-center form-control-sm small" disabled placeholder="تخصص">
                                        <input type="text" class="form-control-plaintext text-center form-control-sm small" disabled placeholder="هیئت علمیِ دانشکده/دانشگاه">
                                        <input type="text" class="form-control-plaintext text-center form-control-sm small" disabled placeholder="شماره همراه">

                                    </div>

                                    <div class="input-group  input-group-sm mb-1">
                                        <div class="input-group-prepend ">
                                            <span class="input-group-text ">1</span>
                                        </div>
                                        <input type="text" name="judgeName" id="fard-pishnahadi" class="form-control form-control-sm small " placeholder="">
                                        <input type="text" name="judgeTakhasos" id="takhasos" class="form-control form-control-sm small " placeholder="">
                                        <input type="text" name="judgeHeyatElmi" id="heyatelmi" class="form-control form-control-sm small" placeholder="">
                                        <input type="number" name="judgePhone" id="shomareHamrah" class="form-control form-control-sm small" placeholder="">
                                    </div>

                                    <button type="button" id="AfradAddBtn" class="btn btn-secondary btn-sm input-radius-custom"><span class="material-icons"> playlist_add </span> افزودن شخص جدید </button>

                                </div>
                                <div class="row pl-3" id="AfradInfoContainer">
                                </div>

                            </div>

                            <div class="my-4">

                                <label for="bazgashtMali" class="small">شیوه ی بازگشت مالی فروش کتاب را چگونه توصیف می نمایید؟ برای مثال اگر در هر ترم به طور متوسط 200 دانشجو پیش بینی شود،برای تیراژ 200 نسخه فروش کتاب حداقل دو سال به طول می انجامد)</label>
                                <textarea class="form-control small input-radius-custom" name="profitDescription" id="bazgashtMali"></textarea>

                            </div>

                            <div class="my-4">

                                <label for="pishbiniForoosh" class="small">در صورت تبلیغ و معرفی کتاب از سوی پدیدآورندگان در سایر دانشگاه ها ، پیش بینی فروش شما چگونه است؟ </label>
                                <textarea class="form-control input-radius-custom" name="profitExpected" id="pishbiniForoosh"> </textarea>

                            </div>

                            <div class="my-4">

                                <label for="tedadEhtemali" class="small">تعداد احتمالی کسانی که در صورت چاپ این کتاب از آن بهره خواهند گرفت چند نفر در سال خواهد بود؟ </label>
                                <input type="number" class="form-control input-radius-custom" name="readerCount" id="tedadEhtemali">

                            </div>

                            <div class="my-4">

                                <label for="name-moshabeh-pishnahadat" class="small ">کتاب های مشابه این کتاب در بازار را ذکر نمایید </label>

                                <div class="row  ">
                                    <div class="input-group input-group-sm text-center mb-1">
                                        <div class="input-group-prepend ">
                                            <span class="input-group-text bg-transparent border-0 "></span>
                                        </div>
                                        <input type="text"  class="form-control-plaintext  text-center small" disabled placeholder="نام کتاب ">
                                        <input type="text"  class="form-control-plaintext text-center small" disabled placeholder="ناشر">
                                        <input type="text"  class="form-control-plaintext text-center small" disabled placeholder="سال نشر">

                                    </div>
                                    <div class="input-group input-group-sm mb-1">
                                        <div class="input-group-prepend ">
                                            <span class="input-group-text ">1</span>
                                        </div>
                                        <input type="text" name="similarName" id="name-moshabeh-pishnahadat" class="form-control form-control-sm small" placeholder="">
                                        <input type="text" name="similarPublisher" id="nasher-moshabe" class="form-control  form-control-sm small" placeholder="">
                                        <input type="text" name="similarYear" id="sale-nashr-moshabe" class="form-control form-control-sm small" placeholder="">

                                    </div>
                                    <button type="button" id="MoshabeAddBtn" name="vizhegi" class="btn btn-secondary btn-sm input-radius-custom"> <span class="material-icons"> playlist_add </span>افزودن کتاب جدید</button>

                                </div>
                                <div class="row pl-3" id="MoshabehInfoContainer">
                                </div>

                                <div class="my-4">

                                    <label for="vizhegi">ویژگی خاصی که انتشار این اثر را برای شرکت در جشنواره ها ضروری میسازد را بیان نمایید </label>
                                    <textarea class="form-control my-2" input-radius-custom id="vizhegi" name="jashnvareReason"></textarea>

                                </div>
                            </div>
                    </fieldset>

                    <!--شروع قسمت آپلود محتوا-->
                    <fieldset class=" p-3 m-2 py-4 my-4 form-fieldset">
                        <legend class="">آپلود محتوا و مدارک مورد نیاز </legend>
                        <div class="border p-3 my-2 rounded">
                            <div>
                                <div class="custom-file  mb-2 overflow-hidden small ">
                                    <label class="custom-file-label small" for="shenasname">صفحه ی اول شناسنامه : </label>
                                    <input type="file" name="shenasname" id="shenasname" class="custom-file-input  border">
                                </div>

                                <div class="custom-file mb-2 overflow-hidden small">
                                    <label class="custom-file-label small" for="hokmEstekhdam">آخرین حکم استخدامی(آخرین مدرک تحصیلی) </label>
                                    <input type="file" name="hokmEstekhdam" id="hokmEstekhdam" class="custom-file-input border">
                                </div>

                                <div class="custom-file mb-2 overflow-hidden small">
                                    <label class="custom-file-label small" for="safheOnvan">صفحه ی عنوان فارسی کتاب </label>
                                    <input type="file" name="safheOnvan" id="safheOnvan" class="custom-file-input border ">
                                </div>

                                <div class="custom-file mb-2 overflow-hidden small">
                                    <label class="custom-file-label small" for="wordFile">فایل کتاب با فرمت word </label>
                                    <input type="file" name="wordFile" id="wordFile" class="custom-file-input border">
                                </div>

                                <div class="custom-file mb-2 overflow-hidden small center py-1">
                                    <label class="custom-file-label small" for="pdfFile">فایل کتاب با فرمت pdf </label>
                                    <input type="file" name="pdfFile" id="pdfFile" class="custom-file-input border ">
                                    <br>
                                </div>

                                <div class="custom-file mb-2 overflow-hidden small center py-1">
                                    <label class="custom-file-label small" for="pdfFile-ketab-asli">صفحه عنوان و شناسنامه کتاب اصلی </label>
                                    <input type="file" name="pdfFileKetabAsli" id="pdfFile-ketab-asli" class="custom-file-input border " >
                                    <br>
                                </div>

                                <div class="custom-file mb-2 overflow-hidden small center py-1">
                                    <label class="custom-file-label small" for="pdfFile-matn-ketab-asli">متن کتاب اصلی به فرمت pdf </label>
                                    <input type="file" name="pdfFileMatnKetabAsli" id="pdfFile-matn-ketab-asli" class="custom-file-input border " >
                                    <br>
                                </div>

                            </div>
                        </div>
                    </fieldset>
                    <!--پایان قسمت آپلود محتوا-->

                    <!--شروع قسمت ضوابط چاپ کتاب-->
                    <div class="border p-2 m-2 form-fieldset">
                        <button type="button" class="btn btn-block my-5" data-toggle="collapse" data-target="#demo">ضوابط چاپ کتاب <span class="material-icons btn-lg ">expand_more</span> </button>
                        <div id="demo" class="collapse focus small text-justify">

                            <p>1.رعایت دستورالعمل تایپ و صفحه آرایی مطابق با دستورالعمل اداره چاپ و انتشارات دانشگاه و طراحی جلد مطابق استانداردهای این اداره</p>
                            <p>2.تصویب کمیته ی نشر کتاب دانشگاه</p>
                            <p>3.چاپ اثر به چهار صورت در کمیته نشر مبنی بر مشارکت صاحب اثر در هزینه های چاپ در یک دوره چاپ(هزار نسخه)، مبلغ چاپ و طراحی جلد کتاب نقدا توسط صاحب اثر به شرکت چاپ پرداخت میگردد و فاکتور کتاب در اسناد تسویه 40% پژوهانه ی متقاضی ارائه شده که پرداخت این فاکتور منوط به تأمین اعتبار مالی از جانب دانشگاه به معاونت پژوهشی میباشد که پس از آن به هیأت علمی پرداخت میگردد.</p>
                            <p>5.پرداخت حق الزحمه ها مطابق آئین نامه انتشارات دانشگاه صورت میگیرد.</p>
                            <p>6.موارد درخواست جهت انصراف به پیوست آئین نامع موجود است.</p>
                            <p>7. انتخاب شیوه چاپ اثر، پس از مصوبه کمیته نشر دانشگاه غیرقابل تغییر می باشد.</p>
                        </div>


                        <label for="paziresh-ghavanin" class="form-check-label">
                            قوانین را می پذیرم <input type="checkbox" class="form-check-input mx-1" name="paziresh-ghavanin" id="paziresh-ghavanin" value="paziresh-true">

                        </label>

                    </div>

                    <!--پایان قسمت ضوابط چاپ کتاب-->

                    <input type="submit" class="btn btn-info btn-sm my-4 input-radius-custom d-block mx-auto" id="submit1" name="sumbit1" value=" ارسال اطلاعات و ثبت درخواست">

                </form>
            </fieldset>

        </div>
    </div>
</div>


<!--footer section-->
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