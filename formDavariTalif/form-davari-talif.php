<?php

include ('helpDavariTalif.php');



?>
<body>


<div class="container my-4">
    <div class="row">
        <div class="col-12 m-1">

            <fieldset class=" p-3 m-2 my-4 bg-white border rounded" >
                <legend class="">فرم ثبت درخواست چاپ کتاب</legend>
                <form class="" name="translateReqForm" method="post">

                    <fieldset class="border  p-3 m-2 py-4 my-4 form-fieldset" >
                        <legend class="font-weight-bolder small">ارزیابی علمی اثر</legend>
                        <div class=" py-3">


                            <div class="form-group ">
                                <label for="" class="small">1) طرح کلی به عنوان یگ کتاب دانشگاهی از نظر محتوای آن </label>
                                <div class="form-check flex-50 d-flex flex-row justify-content-around">


                                    <label for="arzyabiElmiRow1-1" class="form-check-label small mx-2 ">
                                        <input type="radio" class="form-check-input" name="arzyabiElmiRow1" id="arzyabiElmiRow1-1" value="عالی">
                                        عالی
                                    </label>

                                    <label for="arzyabiElmiRow1-2" class="form-check-label small mx-2 ">
                                        <input type="radio" class="form-check-input" name="arzyabiElmiRow1" id="arzyabiElmiRow1-2" value="خوب" >
                                        خوب
                                    </label>

                                    <label for="arzyabiElmiRow1-3" class="form-check-label small mx-2 ">
                                        <input type="radio" class="form-check-input" name="arzyabiElmiRow1" id="arzyabiElmiRow1-3" value="قابل قبول" >
                                        قابل قبول
                                    </label>

                                    <label for="arzyabiElmiRow1-4" class="form-check-label small mx-2 ">
                                        <input type="radio" class="form-check-input" name="arzyabiElmiRow1" id="arzyabiElmiRow1-4" value="ضعیف" >
                                        ضعیف
                                    </label>
                                </div>
                            </div>




                            <div class="form-group ">
                                <label for="" class="small">2) انسجام علمی ، شیوه ارائه مطالب و پرهیز از زیاده نویسی و تکرار مطالب موجود در کتاب</label>


                                <div class="form-check  flex-50 d-flex flex-row justify-content-around">
                                    <label for="arzyabiElmiRow2-1" class="form-check-label small ">
                                        <input type="radio" class="form-check-input" name="arzyabiElmiRow2" id="arzyabiElmiRow2-1" value="عالی">
                                        عالی
                                    </label>

                                    <label for="arzyabiElmiRow2-2" class="form-check-label small ">
                                        <input type="radio" class="form-check-input" name="arzyabiElmiRow2" id="arzyabiElmiRow2-2" value="خوب" >
                                        خوب
                                    </label>

                                    <label for="arzyabiElmiRow2-3" class="form-check-label small ">
                                        <input type="radio" class="form-check-input" name="arzyabiElmiRow2" id="arzyabiElmiRow2-3" value="قابل قبول" >
                                        قابل قبول
                                    </label>

                                    <label for="arzyabiElmiRow2-4" class="form-check-label small ">
                                        <input type="radio" class="form-check-input" name="arzyabiElmiRow2" id="arzyabiElmiRow2-4" value="ضعیف" >
                                        ضعیف
                                    </label>
                                </div>
                            </div>


                            <div class="form-group ">
                                <label for="" class="small">3) وجود مثال ها و تمرین های لازم در کتاب های دانشگاهی الزامیست.در این کتاب چگونه است؟</label>


                                <div class="form-check  flex-50 d-flex flex-row justify-content-around">
                                    <label for="arzyabiElmiRow3-1" class="form-check-label small ">
                                        <input type="radio" class="form-check-input" name="arzyabiElmiRow3" id="arzyabiElmiRow3-1" value="عالی">
                                        عالی
                                    </label>

                                    <label for="arzyabiElmiRow3-2" class="form-check-label small ">
                                        <input type="radio" class="form-check-input" name="arzyabiElmiRow3" id="arzyabiElmiRow3-2" value="خوب" >
                                        خوب
                                    </label>

                                    <label for="arzyabiElmiRow3-3" class="form-check-label small ">
                                        <input type="radio" class="form-check-input" name="arzyabiElmiRow3" id="arzyabiElmiRow3-3" value="قابل قبول" >
                                        قابل قبول
                                    </label>

                                    <label for="arzyabiElmiRow3-4" class="form-check-label small ">
                                        <input type="radio" class="form-check-input" name="arzyabiElmiRow3" id="arzyabiElmiRow3-4" value="ضعیف" >
                                        ضعیف
                                    </label>
                                </div>
                            </div>

                            <div class="form-group ">
                                <label for="" class="small">4) آیا منابع کتاب معتبر،کافی و به روزاست</label>


                                <div class="form-check  flex-50 d-flex flex-row justify-content-around">
                                    <label for="arzyabiElmiRow4-1" class="form-check-label small ">
                                        <input type="radio" class="form-check-input" name="arzyabiElmiRow4" id="arzyabiElmiRow4-1" value="عالی">
                                        عالی
                                    </label>

                                    <label for="arzyabiElmiRow4-2" class="form-check-label small ">
                                        <input type="radio" class="form-check-input" name="arzyabiElmiRow4" id="arzyabiElmiRow4-2" value="خوب" >
                                        خوب
                                    </label>

                                    <label for="arzyabiElmiRow4-3" class="form-check-label small ">
                                        <input type="radio" class="form-check-input" name="arzyabiElmiRow4" id="arzyabiElmiRow4-3" value="قابل قبول" >
                                        قابل قبول
                                    </label>

                                    <label for="arzyabiElmiRow4-4" class="form-check-label small ">
                                        <input type="radio" class="form-check-input" name="arzyabiElmiRow4" id="arzyabiElmiRow4-4" value="ضعیف" >
                                        ضعیف
                                    </label>
                                </div>
                            </div>

                            <div class="form-group ">
                                <label for="" class="small">5) آیا صاحب اثر در حفظ اصالت و امانتداری منابع مورد استفاده ، همچنین در استنادها و نقل قول ها دقت لازم را کرده است؟</label>


                                <div class="form-check  flex-50 d-flex flex-row justify-content-around">
                                    <label for="arzyabiElmiRow5-1" class="form-check-label small ">
                                        <input type="radio" class="form-check-input" name="arzyabiElmiRow5" id="arzyabiElmiRow5-1" value="عالی">
                                        عالی
                                    </label>

                                    <label for="arzyabiElmiRow5-2" class="form-check-label small ">
                                        <input type="radio" class="form-check-input" name="arzyabiElmiRow5" id="arzyabiElmiRow5-2" value="خوب" >
                                        خوب
                                    </label>

                                    <label for="arzyabiElmiRow5-3" class="form-check-label small ">
                                        <input type="radio" class="form-check-input" name="arzyabiElmiRow5" id="arzyabiElmiRow5-3" value="قابل قبول" >
                                        قابل قبول
                                    </label>

                                    <label for="arzyabiElmiRow5-4" class="form-check-label small ">
                                        <input type="radio" class="form-check-input" name="arzyabiElmiRow5" id="arzyabiElmiRow5-4" value="ضعیف" >
                                        ضعیف
                                    </label>
                                </div>
                            </div>
                        </div>
                    </fieldset>






                    <fieldset class="border  p-3 m-2 py-4 my-4 form-fieldset" >
                        <legend class="font-weight-bolder small">2) ارزیابی نگارشی اثر</legend>
                        <div class=" py-3">

                            <div class="form-group ">
                                <label for="" class="small">1) شیوایی نثر(روان و قابل فهم بودن مطالب)  </label>


                                <div class="form-check  flex-50 d-flex flex-row justify-content-around">
                                    <label for="arzyabiNegareshiRow1-1" class="form-check-label small ">
                                        <input type="radio" class="form-check-input" name="arzyabiNegareshiRow1" id="arzyabiNegareshiRow1-1" value="عالی">
                                        عالی
                                    </label>

                                    <label for="arzyabiNegareshiRow1-2" class="form-check-label small ">
                                        <input type="radio" class="form-check-input" name="arzyabiNegareshiRow1" id="arzyabiNegareshiRow1-2" value="خوب" >
                                        خوب
                                    </label>

                                    <label for="arzyabiNegareshiRow1-3" class="form-check-label small ">
                                        <input type="radio" class="form-check-input" name="arzyabiNegareshiRow1" id="arzyabiNegareshiRow1-3" value="قابل قبول" >
                                        قابل قبول
                                    </label>

                                    <label for="arzyabiNegareshiRow1-4" class="form-check-label small ">
                                        <input type="radio" class="form-check-input" name="arzyabiNegareshiRow1" id="arzyabiNegareshiRow1-4" value="ضعیف" >
                                        ضعیف
                                    </label>
                                </div>
                            </div>


                            <div class="form-group ">
                                <label for="" class="small">2) انسجام علمی ، شیوه ارائه مطالب و پرهیز از زیاده نویسی و تکرار مطالب موجود در کتاب </label>


                                <div class="form-check  flex-50 d-flex flex-row justify-content-around">
                                    <label for="arzyabiNegareshiRow2-1" class="form-check-label small ">
                                        <input type="radio" class="form-check-input" name="arzyabiNegareshiRow2" id="arzyabiNegareshiRow2-1" value="آری">
                                        آری
                                    </label>

                                    <label for="arzyabiNegareshiRow2-2" class="form-check-label small ">
                                        <input type="radio" class="form-check-input" name="arzyabiNegareshiRow2" id="arzyabiNegareshiRow2-2" value="تا حدودی" >
                                        تا حدودی
                                    </label>

                                    <label for="arzyabiNegareshiRow2-3" class="form-check-label small ">
                                        <input type="radio" class="form-check-input" name="arzyabiNegareshiRow2" id="arzyabiNegareshiRow2-3" value="خیر" >
                                        خیر
                                    </label>

                                </div>
                            </div>


                            <div class="form-group ">
                                <label for="" class="small">3)آیا این اثر نیاز به ویرایش دارد؟ </label>


                                <div class="form-check  flex-50 d-flex flex-row justify-content-around">
                                    <label for="arzyabiNegareshiRow3-1" class="form-check-label small ">
                                        <input type="radio" class="form-check-input" name="arzyabiNegareshiRow3" id="arzyabiNegareshiRow3-1" value="ندارد">
                                        ندارد
                                    </label>

                                    <label for="arzyabiNegareshiRow3-2" class="form-check-label small ">
                                        <input type="radio" class="form-check-input" name="arzyabiNegareshiRow3" id="arzyabiNegareshiRow3-2" value="تا حدودی" >
                                        تا حدودی
                                    </label>

                                    <label for="arzyabiNegareshiRow3-3" class="form-check-label small ">
                                        <input type="radio" class="form-check-input" name="arzyabiNegareshiRow3" id="arzyabiNegareshiRow3-3" value="زیاد" >
                                        زیاد
                                    </label>

                                </div>
                            </div>

                            <div class="form-group ">
                                <label for="" class="small">4) چه نوع ویرایشی پیشنهاد می شود؟ </label>


                                <div class="form-check  flex-50 d-flex flex-row justify-content-around">
                                    <label for="arzyabiNegareshiRow4-1" class="form-check-label small ">
                                        <input type="radio" class="form-check-input" name="arzyabiNegareshiRow4" id="arzyabiNegareshiRow4-1" value="ویرایش علمی">
                                        ویرایش علمی
                                    </label>

                                    <label for="arzyabiNegareshiRow4-2" class="form-check-label small ">
                                        <input type="radio" class="form-check-input" name="arzyabiNegareshiRow4" id="arzyabiNegareshiRow4-2" value="ویرایش ادبی" >
                                        ویرایش ادبی
                                    </label>

                                    <label for="arzyabiNegareshiRow4-3" class="form-check-label small ">
                                        <input type="radio" class="form-check-input" name="arzyabiNegareshiRow4" id="arzyabiNegareshiRow4-3" value="هر دو" >
                                        هر دو
                                    </label>


                                </div>
                            </div>
                        </div>
                    </fieldset>


                    <fieldset class="border  p-3 m-2 py-4 my-4 form-fieldset" >
                        <legend class="font-weight-bolder small">ارزیابی نوآوری در اثر</legend>
                        <div class=" py-3">

                            <div class="form-group ">
                                <label for="" class="small">1)نوآوری و ابتکار با توجه به کتابهای مشابه چقدر است؟ </label>


                                <div class="form-check  flex-50 d-flex flex-row justify-content-around">
                                    <label for="arzyabiNoAvariRow1-1" class="form-check-label small ">
                                        <input type="radio" class="form-check-input" name="arzyabiNoAvariRow1" id="arzyabiNoAvariRow1-1" value="عالی">
                                        عالی
                                    </label>

                                    <label for="arzyabiNoAvariRow1-2" class="form-check-label small ">
                                        <input type="radio" class="form-check-input" name="arzyabiNoAvariRow1" id="arzyabiNoAvariRow1-2" value="خوب" >
                                        خوب
                                    </label>

                                    <label for="arzyabiNoAvariRow1-3" class="form-check-label small ">
                                        <input type="radio" class="form-check-input" name="arzyabiNoAvariRow1" id="arzyabiNoAvariRow1-3" value="قابل قبول" >
                                        قابل قبول
                                    </label>

                                    <label for="arzyabiNoAvariRow1-4" class="form-check-label small ">
                                        <input type="radio" class="form-check-input" name="arzyabiNoAvariRow1" id="arzyabiNoAvariRow1-4" value="ضعیف" >
                                        ضعیف
                                    </label>
                                </div>
                            </div>

                            <div class="form-group ">
                                <label for="" class="small">2)میزان پژوهش و دقت در گردآوری و ارائه مطالب نو و آمارهای موجود در کتاب </label>


                                <div class="form-check  flex-50 d-flex flex-row justify-content-around">
                                    <label for="arzyabiNoAvariRow2-1" class="form-check-label small ">
                                        <input type="radio" class="form-check-input" name="arzyabiNoAvariRow2" id="arzyabiNoAvariRow2-1" value="عالی">
                                        عالی
                                    </label>

                                    <label for="arzyabiNoAvariRow2-2" class="form-check-label small ">
                                        <input type="radio" class="form-check-input" name="arzyabiNoAvariRow2" id="arzyabiNoAvariRow2-2" value="خوب" >
                                        خوب
                                    </label>

                                    <label for="arzyabiNoAvariRow2-3" class="form-check-label small ">
                                        <input type="radio" class="form-check-input" name="arzyabiNoAvariRow2" id="arzyabiNoAvariRow2-3" value="قابل قبول" >
                                        قابل قبول
                                    </label>

                                    <label for="arzyabiNoAvariRow2-4" class="form-check-label small ">
                                        <input type="radio" class="form-check-input" name="arzyabiNoAvariRow2" id="arzyabiNoAvariRow2-4" value="ضعیف" >
                                        ضعیف
                                    </label>
                                </div>
                            </div>
                        </div>
                    </fieldset>


                    <fieldset class="border  p-3 m-2 py-4 my-4 form-fieldset" >
                        <legend class="font-weight-bolder small">ارزیابی اقتصادی اثر</legend>
                        <div class=" py-3">


                            <div class="form-group ">
                                <label for="" class="small">1) کاربرد کتاب از نظر آموزشی </label>


                                <div class="form-check  flex-50 d-flex flex-row justify-content-around">
                                    <label for="arzyabiEghtesadiRow1-1" class="form-check-label small ">
                                        <input type="radio" class="form-check-input" name="arzyabiEghtesadiRow1" id="arzyabiEghtesadiRow1-1" value="درسی ">
                                        درسی
                                    </label>

                                    <label for="arzyabiEghtesadiRow1-2" class="form-check-label small ">
                                        <input type="radio" class="form-check-input" name="arzyabiEghtesadiRow1" id="arzyabiEghtesadiRow1-2" value="کمک درسی" >
                                        کمک درسی
                                    </label>

                                    <label for="arzyabiEghtesadiRow1-3" class="form-check-label small ">
                                        <input type="radio" class="form-check-input" name="arzyabiEghtesadiRow1" id="arzyabiEghtesadiRow1-3" value="عمومی" >
                                        عمومی
                                    </label>

                                    <label for="arzyaEghtesadiRow1-4" class="form-check-label small ">
                                        <input type="radio" class="form-check-input" name="arzyaEghtesadiRow1" id="arzyaEghtesadiRow1-4" value="مرجع" >
                                        مرجع
                                    </label>
                                </div>
                            </div>



                            <div class="form-group ">
                                <label for="" class="small">2) در صورتی که کتاب مشابه دارد آیا این کتاب نسبت به آن جامع تر، مفیدتر و به روزتر است؟ </label>


                                <div class="form-check  flex-50 d-flex flex-row justify-content-around">
                                    <label for="arzyabiEghtesadiRow2-1" class="form-check-label small ">
                                        <input type="radio" class="form-check-input" name="arzyabiEghtesadiRow2" id="arzyabiEghtesadiRow2-1" value="مشابه ندارد ">
                                        مشابه ندارد
                                    </label>

                                    <label for="arzyabiEghtesadiRow2-2" class="form-check-label small ">
                                        <input type="radio" class="form-check-input" name="arzyabiEghtesadiRow2" id="arzyabiEghtesadiRow2-2" value="بهتر است" >
                                        بهتر است
                                    </label>

                                    <label for="arzyabiEghtesadiRow2-3" class="form-check-label small ">
                                        <input type="radio" class="form-check-input" name="arzyabiEghtesadiRow2" id="arzyabiEghtesadiRow2-3" value="خیر" >
                                        خیر
                                    </label>

                                </div>
                            </div>


                            <div class="form-group ">
                                <label for="" class="small">3) کاربرد کتاب از نظر مقطع تحصیلی </label>

                                <div class="form-check  flex-50 d-flex flex-row justify-content-around">
                                    <label for="arzyabiEghtesadiRow3-1" class="form-check-label small ">
                                        <input type="radio" class="form-check-input" name="arzyabiEghtesadiRow3" id="arzyabiEghtesadiRow3-1" value="کارشناسی ">
                                        کارشناسی
                                    </label>

                                    <label for="arzyabiEghtesadiRow3-2" class="form-check-label small ">
                                        <input type="radio" class="form-check-input" name="arzyabiEghtesadiRow3" id="arzyabiEghtesadiRow3-2" value="تحصیلات تکمیلی" >
                                        تحصیلات تکمیلی
                                    </label>

                                </div>
                            </div>



                            <div class="form-group ">
                                <label for="lessonNameRow1matabeghat" class="small">4) مطابقت کتاب با سرفصل دروس، نام واحد درسی یا گروه درسی  </label>

                                <div class="container">
                                    <div class="row  ">
                                        <div class="input-group input-group-sm text-center mb-1">
                                            <div class="input-group-prepend ">
                                                <span class="input-group-text bg-white border-0 "></span>
                                            </div>
                                            <input type="text" class="form-control-plaintext  text-center small" disabled placeholder="نام درس ">
                                            <input type="text" class="form-control-plaintext text-center small" disabled placeholder="مقطع تحصیلی">
                                            <input type="text" class="form-control-plaintext text-center small" disabled placeholder="تعداد واحد">
                                            <input type="text" class="form-control-plaintext text-center small" disabled placeholder="درصد مطابقت">

                                        </div>
                                        <div class="input-group input-group-sm mb-1 ">
                                            <div class="input-group-prepend ">
                                                <span class="input-group-text ">1</span>
                                            </div>
                                            <input type="text" name="lessonNameRow1matabeghat" id="lessonNameRow1matabeghat" class="form-control form-control-sm small " placeholder="">
                                            <input type="text" name="maghtaRow1matabeghat" id="maghtaRow1motabeghat" class="form-control form-control-sm small" placeholder="">
                                            <input type="text" name="tedadRow1motabeghat" id="tedadeVahedRow1motabeghat" class="form-control form-control-sm small" placeholder="">
                                            <input type="text" name="darsadRow1Motabeghat" id="daesadRow1motabeghat" class="form-control form-control-sm small" placeholder="">
                                        </div>
                                        <button type="button" id="MotabeqatAddBtn" class="btn btn-secondary btn-sm input-radius-custom"> <span class="material-icons">  playlist_add </span>  افزودن سطر جدید  </button>

                                    </div>
                                    <div class="row pl-3" id="MotabeqatInfoContainer">

                                    </div>
                                </div>





                                <div class="form-group ">
                                    <label for="fieldNameRow1" class="small">5) این کتاب برای چه رشته های تحصیلی ای لازم است؟</label>

                                    <div class="container">
                                        <div class="row  ">
                                            <div class="input-group input-group-sm text-center mb-1">
                                                <div class="input-group-prepend ">
                                                    <span class="input-group-text bg-white border-0 "></span>
                                                </div>
                                                <input type="text" class="form-control-plaintext  text-center small" disabled placeholder="نام رشته ">


                                            </div>
                                            <div class="input-group input-group-sm mb-1 ">
                                                <div class="input-group-prepend ">
                                                    <span class="input-group-text ">1</span>
                                                </div>
                                                <input type="text" name="fieldNameRow1" id="fieldNameRow1" class="form-control form-control-sm small " placeholder="">
                                            </div>
                                            <button type="button" id="ChoosReshteAddBtn" class="btn btn-secondary btn-sm input-radius-custom"> <span class="material-icons">  playlist_add </span>  افزودن سطر جدید  </button>

                                        </div>
                                        <div class="row pl-3" id="ChoosReshteInfoContainer">
                                        </div>

                                    </div>


                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset class="border  p-3 m-2 py-4 my-4 form-fieldset" >
                        <legend class="font-weight-bolder small">پیشنهادات</legend>
                        <div>
                            <div class="form-group ">
                                <label for="" class="small">شمارندگان پیشنهادی برای چاپ</label>

                                <div class="form-check  flex-50 d-flex flex-row justify-content-around">
                                    <label for="pishnahadatRow1-1" class="form-check-label small ">
                                        <input type="radio" class="form-check-input" name="pishnahadatRow1" id="pishnahadatRow1-1" value="کمتر از 100 ">
                                        کمتر از 100
                                    </label>

                                    <label for="pishnahadatRow1-2" class="form-check-label small ">
                                        <input type="radio" class="form-check-input" name="pishnahadatRow1" id="pishnahadatRow1-2" value="بین 100 تا 300" >
                                        بین 100 تا 300
                                    </label>

                                    <label for="pishnahadatRow1-3" class="form-check-label small ">
                                        <input type="radio" class="form-check-input" name="pishnahadatRow1" id="pishnahadatRow1-3" value="بین 300 تا 1000" >
                                        بین 300 تا 1000
                                    </label>

                                </div>
                            </div>

                            <div class="form-group ">
                                <label for="" class="small">2)این کتاب به صورت فعل</label>

                                <div class="form-check  flex-50 d-flex flex-row justify-content-around">
                                    <label for="pishnahadatRow2-1" class="form-check-label small ">
                                        <input type="radio" class="form-check-input" name="pishnahadatRow2" id="pishnahadatRow2-1" value="قابل چاپ ">
                                        قابل چاپ
                                    </label>

                                    <label for="pishnahadatRow2-2" class="form-check-label small ">
                                        <input type="radio" class="form-check-input" name="pishnahadatRow2" id="pishnahadatRow2-2" value="غیر قابل چاپ" >
                                        غیر قابل چاپ
                                    </label>

                                    <label for="pishnahadatRow2-2" class="form-check-label small ">
                                        <input type="radio" class="form-check-input" name="pishnahadatRow2" id="pishnahadatRow2-3" value="پس از اعمال اصلاحات مورد نظر داور قابل چاپ است" >
                                        پس از اعمال اصلاحات مورد نظر داور قابل چاپ است
                                    </label>


                                </div>
                            </div>


                            <div class="form-group  flex-100">
                                <label for="tozihatPishnahadi" class="small"> توضیحات پیشنهادی برای ارتقا کیفیت کتاب </label>
                                <textarea  class="form-control form-control-sm small input-radius-custom" input-radius-custom id="tozihatPishnahadi" name="tozihatPishnahadi"></textarea>
                            </div>
                        </div>
                    </fieldset>



                    <input type="submit" class="btn btn-info btn-sm my-4 input-radius-custom d-block mx-auto px-5" id="submit1" name="sumbit1" value=" ارسال اطلاعات و ثبت درخواست">


                </form>
            </fieldset>
        </div>
    </div>


    </fieldset>
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