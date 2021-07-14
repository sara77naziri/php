<?php
include ('helpDavariTarjime.php');
?>









<div class="container my-4">
    <div class="row">
        <div class="col-12 m-1">
            <fieldset class=" p-3 m-2 my-4 bg-white border rounded">
                <legend class="">فرم ترجمه داوری</legend>
                <form class="" id="translateReqForm" name="translateReqForm" method="post">
                    <fieldset class="border p-3 m-2 py-4 my-4 form-fieldset">
                        <legend class="font-weight-bolder small">ارزیابی علمی اثر</legend>
                        <div class=" py-3">
                            <div class="form-group">
                                <label class="small" for="">1) طرح کلی به عنوان یک کتاب دانشگاهی از نظر محتوای آن</label>
                                <div class="form-check flex-50 d-flex flex-row justify-content-around">
                                    <label class="form-check-label small mx-2" for="arzyabiElmiRow1-1"><input class="form-check-input" id="arzyabiElmiRow1-1" name="arzyabiElmiRow1" type="radio" value="عالی"> عالی</label> <label class="form-check-label small mx-2" for="arzyabiElmiRow1-2"><input class="form-check-input" id="arzyabiElmiRow1-2" name="arzyabiElmiRow1" type="radio" value="خوب"> خوب</label> <label class="form-check-label small mx-2" for="arzyabiElmiRow1-3"><input class="form-check-input" id="arzyabiElmiRow1-3" name="arzyabiElmiRow1" type="radio" value="قابل قبول"> قابل قبول</label> <label class="form-check-label small mx-2" for="arzyabiElmiRow1-4"><input class="form-check-input" id="arzyabiElmiRow1-4" name="arzyabiElmiRow1" type="radio" value="ضعیف"> ضعیف</label>
                                </div>
                            </div><label class="small" for="">2)به روز بودن کتاب اصلی</label>
                            <div class="form-check flex-50 d-flex flex-row justify-content-around">
                                <label class="form-check-label small mx-2" for="arzyabiElmiRow2-1"><input class="form-check-input" id="arzyabiElmiRow2-1" name="arzyabiElmiRow2" type="radio" value="عالی"> عالی</label> <label class="form-check-label small mx-2" for="arzyabiElmiRow2-2"><input class="form-check-input" id="arzyabiElmiRow2-2" name="arzyabiElmiRow2" type="radio" value="خوب"> خوب</label> <label class="form-check-label small mx-2" for="arzyabiElmiRow2-3"><input class="form-check-input" id="arzyabiElmiRow2-3" name="arzyabiElmiRow2" type="radio" value="قابل قبول"> قابل قبول</label> <label class="form-check-label small mx-2" for="arzyabiElmiRow2-4"><input class="form-check-input" id="arzyabiElmiRow2-4" name="arzyabiElmiRow2" type="radio" value="ضعیف"> ضعیف</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="small" for="">رتبه شما به این کتاب از نظر علمی؟</label>
                            <div class="form-check flex-50 d-flex flex-row justify-content-around">
                                <label class="form-check-label small mx-2" for="arzyabiElmiNomre"><input class="form-check-input" id="arzyabiElmiNomre" name="arzyabiElmiNomre" type="text"></label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="border p-3 m-2 py-4 my-4 form-fieldset">
                        <legend class="font-weight-bolder small">ارزیابی کیفی اثر</legend>
                        <div class=" py-3">
                            <div class="form-group">
                                <label class="small" for="">1) طرح کلی به عنوان یک کتاب دانشگاهی از نظر محتوای آن</label>
                                <div class="form-check flex-50 d-flex flex-row justify-content-around">
                                    <label class="form-check-label small mx-2" for="arzyabikeyfiRow1-1"><input class="form-check-input" id="arzyabikeyfiRow1-1" name="arzyabikeyfiRow1" type="radio" value="عالی"> عالی</label> <label class="form-check-label small mx-2" for="arzyabikeyfiRow1-2"><input class="form-check-input" id="arzyabikeyfiRow1-2" name="arzyabikeyfiRow1" type="radio" value="خوب"> خوب</label> <label class="form-check-label small mx-2" for="arzyabikeyfiRow1-3"><input class="form-check-input" id="arzyabikeyfiRow1-3" name="arzyabikeyfiRow1" type="radio" value="قابل قبول"> قابل قبول</label> <label class="form-check-label small mx-2" for="arzyabikeyfiRow1-4"><input class="form-check-input" id="arzyabikeyfiRow1-4" name="arzyabikeyfiRow1" type="radio" value="ضعیف"> ضعیف</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="small" for="">2) آیا در ترجمه حفظ امانت و پایبندی به کتاب اصلی شده است؟</label>
                                <div class="form-check flex-50 d-flex flex-row justify-content-around">
                                    <label class="form-check-label small mx-2" for="arzyabikeyfiRow2-1"><input class="form-check-input" id="arzyabikeyfiRow2-1" name="arzyabikeyfiRow2" type="radio" value="بله"> بله</label> <label class="form-check-label small mx-2" for="arzyabikeyfiRow2-2"><input class="form-check-input" id="arzyabikeyfiRow2-2" name="arzyabikeyfiRow2" type="radio" value="تاحدودی"> تا حدودی</label> <label class="form-check-label small mx-2" for="arzyabikeyfiRow2-3"><input class="form-check-input" id="arzyabikeyfiRow2-3" name="arzyabikeyfiRow2" type="radio" value="خیر"> خیر</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="small" for="">3)شیوایی نثر فارسی و سهولت درک مطلب</label>
                                <div class="form-check flex-50 d-flex flex-row justify-content-around">
                                    <label class="form-check-label small mx-2" for="arzyabikeyfiRow3-1"><input class="form-check-input" id="arzyabikeyfiRow3-1" name="arzyabikeyfiRow3" type="radio" value="عالی"> عالی</label> <label class="form-check-label small mx-2" for="arzyabikeyfiRow3-2"><input class="form-check-input" id="arzyabikeyfiRow3-2" name="arzyabikeyfiRow3" type="radio" value="خوب"> خوب</label> <label class="form-check-label small mx-2" for="arzyabikeyfiRow3-3"><input class="form-check-input" id="arzyabikeyfiRow3-3" name="arzyabikeyfiRow3" type="radio" value="قابل قبول"> قابل قبول</label> <label class="form-check-label small mx-2" for="arzyabikeyfiRow3-4"><input class="form-check-input" id="arzyabikeyfiRow3-4" name="arzyabikeyfiRow3" type="radio" value="ضعیف"> ضعیف</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="small" for="">4)دقت در معادل گزینی و رعایت یکنواختی در کل متن</label>
                                <div class="form-check flex-50 d-flex flex-row justify-content-around">
                                    <label class="form-check-label small mx-2" for="arzyabikeyfiRow4-1"><input class="form-check-input" id="arzyabikeyfiRow4-1" name="arzyabikeyfiRow4" type="radio" value="عالی"> عالی</label> <label class="form-check-label small mx-2" for="arzyabikeyfiRow4-2"><input class="form-check-input" id="arzyabikeyfiRow4-2" name="arzyabikeyfiRow4" type="radio" value="خوب"> خوب</label> <label class="form-check-label small mx-2" for="arzyabikeyfiRow4-3"><input class="form-check-input" id="arzyabikeyfiRow4-3" name="arzyabikeyfiRow4" type="radio" value="قابل قبول"> قابل قبول</label> <label class="form-check-label small mx-2" for="arzyabikeyfiRow4-4"><input class="form-check-input" id="arzyabikeyfiRow4-4" name="arzyabikeyfiRow4" type="radio" value="ضعیف"> ضعیف</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="small" for="">5) آیا مترجم مقدمه ای در بیان ویژگی های کتاب، ضرورت ترجمه، هدف آن و معرفی نویسنده نگاشته است؟</label>
                                <div class="form-check flex-50 d-flex flex-row justify-content-around">
                                    <label class="form-check-label small mx-2" for="arzyabikeyfiRow5-1"><input class="form-check-input" id="arzyabikeyfiRow5-1" name="arzyabikeyfiRow5" type="radio" value="بله"> بله</label> <label class="form-check-label small mx-2" for="arzyabikeyfiRow5-3"><input class="form-check-input" id="arzyabikeyfiRow5-3" name="arzyabikeyfiRow5" type="radio" value="خیر"> خیر</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="small" for="">6) آیا این اثر نیاز به ویرایش دارد؟</label>
                                <div class="form-check flex-50 d-flex flex-row justify-content-around">
                                    <label class="form-check-label small mx-2" for="arzyabikeyfiRow6-1"><input class="form-check-input" id="arzyabikeyfiRow6-1" name="arzyabikeyfiRow6" type="radio" value="ندارد"> بله</label> <label class="form-check-label small mx-2" for="arzyabikeyfiRow6-2"><input class="form-check-input" id="arzyabikeyfiRow6-2" name="arzyabikeyfiRow6" type="radio" value="تاحدودی"> تا حدودی</label> <label class="form-check-label small mx-2" for="arzyabikeyfiRow6-3"><input class="form-check-input" id="arzyabikeyfiRow6-3" name="arzyabikeyfiRow6" type="radio" value="زیاد"> خیر</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="small" for="">7) چه نوع ویرایشی پیشنهاد میشود؟</label>
                                <div class="form-check flex-50 d-flex flex-row justify-content-around">
                                    <label class="form-check-label small mx-2" for="arzyabikeyfiRow7-1"><input class="form-check-input" id="arzyabikeyfiRow7-1" name="arzyabikeyfiRow7" type="radio" value="ویرایش علمی"> ویرایش علمی</label> <label class="form-check-label small mx-2" for="arzyabikeyfiRow7-2"><input class="form-check-input" id="arzyabikeyfiRow7-2" name="arzyabikeyfiRow7" type="radio" value="ویرایش ادبی"> ویرایش ادبی</label> <label class="form-check-label small mx-2" for="arzyabikeyfiRow7-3"><input class="form-check-input" id="arzyabikeyfiRow7-3" name="arzyabikeyfiRow7" type="radio" value="هر دو"> هردو</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="small" for="">رتبه شما به این کتاب از نظر علمی؟</label>
                            <div class="form-check flex-50 d-flex flex-row justify-content-around">
                                <label class="form-check-label small mx-2" for="arzyabikeyfiNomre"><input class="form-check-input" id="arzyabikeyfiNomre" name="arzyabikeyfiNomre" type="text"></label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="border p-3 m-2 py-4 my-4 form-fieldset">
                        <legend class="font-weight-bolder small">ارزیابی اقتصادی اثر</legend>
                        <div class=" py-3">
                            <div class="form-group">
                                <label class="small" for="">1) آیا کتاب در این زمینه به فارسی موجود است؟</label>
                                <div class="form-check flex-50 d-flex flex-row justify-content-around">
                                    <label class="form-check-label small mx-2" for="arzyabieghtesadiRow1-1"><input class="form-check-input" id="arzyabieghtesadiRow1-1" name="arzyabieghtesadiRow1" type="radio" value="بله"> بله</label> <label class="form-check-label small mx-2" for="arzyabieghtesadiRow1-2"><input class="form-check-input" id="arzyabieghtesadiRow1-2" name="arzyabieghtesadiRow1" type="radio" value="خیر"> خیر</label>
                                </div>
                            </div>
                            <fieldset class="border p-3 m-2 py-4 my-4 form-fieldset">
                                <div class=" py-3">
                                    <div class="form-group">
                                        <div class="container">
                                            <div class="row form-check flex-50 d-flex flex-row justify-content-around">
                                                <div class="input-group input-group-sm text-center mb-1">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text bg-white border-0"></span>
                                                    </div><input class="form-control-plaintext text-center small" disabled placeholder="نام اثر" type="text"> <input class="form-control-plaintext text-center small" disabled placeholder="ناشر" type="text"> <input class="form-control-plaintext text-center small" disabled placeholder="سال نشر" type="text">
                                                </div>
                                                <div class="input-group input-group-sm mb-1">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">1</span>
                                                    </div><input class="form-control form-control-sm small" id="AsarFarsiNameRow1" name="AsarNameRow1motabeghat" placeholder="" type="text"> <input class="form-control form-control-sm small" id="NasherFarsiRow1" name="NasherRow1motabeghat" placeholder="" type="text"> <select class="form-control form-control-sm small" id="NumberFarsiSelector" name="SaleRow1motabeghat">
                                                    </select>
                                                </div><button class="btn btn-secondary btn-sm input-radius-custom" id="FarsiAddBtn" type="button"><span class="material-icons">playlist_add</span> اضافه کردن فیلد</button>
                                            </div>
                                            <div class="row pl-3" id="FarsiInfoContainer"></div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset><label class="small" for="">2)کاربرد کتاب از نظر آموزشی</label>
                            <div class="form-check flex-50 d-flex flex-row justify-content-around">
                                <label class="form-check-label small mx-2" for="arzyabiEghtesadiRow2-1"><input class="form-check-input" id="arzyabiEghtesadiRow2-1" name="arzyabiEghtesadiRow2" type="radio" value="درسی"> درسی</label> <label class="form-check-label small mx-2" for="arzyabiEghtesadiRow2-2"><input class="form-check-input" id="arzyabiEghtesadiRow2-2" name="arzyabiEghtesadiRow2" type="radio" value="کمک درسی"> کمک درسی</label> <label class="form-check-label small mx-2" for="arzyabiEghtesadiRow2-3"><input class="form-check-input" id="arzyabiEghtesadiRow2-3" name="arzyabiEghtesadiRow2" type="radio" value="عمومی"> عمومی</label> <label class="form-check-label small mx-2" for="arzyabiEghtesadiRow2-4"><input class="form-check-input" id="arzyabiEghtesadiRow2-4" name="arzyabiEghtesadiRow2" type="radio" value="مرجع"> مرجع</label>
                            </div><label class="small" for="">3) کاربرد کتاب از نظر مقطع تحصیلی</label>
                            <div class="form-check flex-50 d-flex flex-row justify-content-around">
                                <label class="form-check-label small mx-2" for="arzyabiEghtesadiRow3-1"><input class="form-check-input" id="arzyabiEghtesadiRow3-1" name="arzyabiEghtesadiRow3" type="radio" value="کارشناسی"> کارشناسی</label> <label class="form-check-label small mx-2" for="arzyabiEghtesadiRow3-2"><input class="form-check-input" id="arzyabiEghtesadiRow3-2" name="arzyabiEghtesadiRow3" type="radio" value="تحصیلات تکمیلی"> تحصیلات تکمیلی</label>
                            </div>
                            <fieldset class="border p-3 m-2 py-4 my-4 form-fieldset">
                                <div class=" py-3">
                                    <div class="form-group">
                                        <div class="container">
                                            <div class="row form-check flex-50 d-flex flex-row justify-content-around">
                                                <div class="input-group input-group-sm text-center mb-1">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text bg-white border-0"></span>
                                                    </div><input class="form-control-plaintext text-center small" disabled placeholder="نام درس" type="text"> <input class="form-control-plaintext text-center small" disabled placeholder="تعداد واحد" type="text"> <input class="form-control-plaintext text-center small" disabled placeholder=" مقطع تحصیلی" type="text"> <input class="form-control-plaintext text-center small" disabled placeholder=" درصد مطابقت" type="text">
                                                </div>
                                                <div class="input-group input-group-sm mb-1">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">1</span>
                                                    </div><input class="form-control form-control-sm small" id="lessonNameRow1matabeghat" name="DarsNameRow1" placeholder="" type="text"> <select class="form-control form-control-sm small" id="tedadeVahedRow1motabeghat" name="TedadeVahedRow1">
                                                    </select> <select class="form-control form-control-sm small" id="maghtaRow1motabeghat" name="MaghtaTahsiliRow1">
                                                        <option class="small" value="کارشناسی">
                                                            کارشناسی
                                                        </option>
                                                        <option class="small" value="کارشناسی ارشد">
                                                            کارشناسی ارشد
                                                        </option>
                                                        <option class="small" value="دکترا">
                                                            دکترا
                                                        </option>
                                                        <option class="small" value="فوق دکترا">
                                                            فوق دکترا
                                                        </option>
                                                    </select> <input class="form-control form-control-sm small" id="daesadRow1motabeghat" name="DarsadmotabeghatRow1" placeholder="" type="text">
                                                </div><button class="btn btn-secondary btn-sm input-radius-custom" id="MotabeqatAddBtn" type="button"><span class="material-icons">playlist_add</span> اضافه کردن فیلد</button>
                                            </div>
                                            <div class="row pl-3" id="MotabeqatInfoContainer"></div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="form-group">
                                <label class="small" for="">5) این کتاب برای چه رشته هایی نیاز است؟</label>
                                <div class="form-check flex-50 d-flex flex-row justify-content-around">
                                    <label class="form-check-label small mx-2" for="arzyabiEghtesadiRow5-1"><input class="form-check-input" id="arzyabiEghtesadiRow5-1" name="arzyabiEghtesadiRow5" type="radio" value="ندارد"> ندارد</label> <label class="form-check-label small mx-2" for="arzyabiEghtesadiRow5-2"><input class="form-check-input" id="arzyabiEghtesadiRow5-2" name="arzyabiEghtesadiRow5" type="radio" value="تاحدودی"> تاحدودی</label> <label class="form-check-label small mx-2" for="arzyabiEghtesadiRow5-3"><input class="form-check-input" id="arzyabiEghtesadiRow5-3" name="arzyabiEghtesadiRow5" type="radio" value="زیاد"> زیاد</label>
                                </div>
                            </div>
                        </div>
                        <fieldset class="border p-3 m-2 py-4 my-4 form-fieldset">
                            <div class=" py-3">
                                <div class="form-group">
                                    <div class="container">
                                        <div class="row form-check flex-50 d-flex flex-row justify-content-around">
                                            <div class="input-group input-group-sm text-center mb-1">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text bg-white border-0"></span>
                                                </div><input class="form-control-plaintext text-center small" disabled placeholder="نام رشته" type="text">
                                            </div>
                                            <div class="input-group input-group-sm mb-1">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">1</span>
                                                </div><input class="form-control form-control-sm small" id="fieldNameRow1" name="NameReshteRow1" placeholder="" type="text">
                                            </div><button class="btn btn-secondary btn-sm input-radius-custom" id="ChoosReshteAddBtn" type="button"><span class="material-icons">playlist_add</span> اضافه کردن فیلد</button>
                                        </div>
                                        <div class="row pl-3" id="ChoosReshteInfoContainer"></div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <div class="form-group">
                            <label class="small" for="">رتبه شما به این کتاب از نظر علمی؟</label>
                            <div class="form-check flex-50 d-flex flex-row justify-content-around">
                                <label class="form-check-label small mx-2" for="arzyabiEghtesadiNomre"><input class="form-check-input" id="arzyabiEghtesadiNomre" name="arzyabiEghtesadiNomre" type="text"></label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="border p-3 m-2 py-4 my-4 form-fieldset">
                        <legend class="font-weight-bolder small">پیشنهادات</legend>
                        <div>
                            <div class="form-group">
                                <label class="small" for="">1)شمارندگان پیشنهادی برای چاپ</label>
                                <div class="form-check flex-50 d-flex flex-row justify-content-around">
                                    <label class="form-check-label small" for="pishnahadatRow1-1"><input class="form-check-input" id="pishnahadatRow1-1" name="pishnahadatRow1" type="radio" value="کمتر از 100 "> کمتر از 100</label> <label class="form-check-label small" for="pishnahadatRow1-2"><input class="form-check-input" id="pishnahadatRow1-2" name="pishnahadatRow1" type="radio" value="بین 100 تا 300"> بین 100 تا 300</label> <label class="form-check-label small" for="pishnahadatRow1-3"><input class="form-check-input" id="pishnahadatRow1-3" name="pishnahadatRow1" type="radio" value="بین 300 تا 1000"> بین 300 تا 1000</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="small" for="">2)این کتاب به صورت فعل</label>
                                <div class="form-check flex-50 d-flex flex-row justify-content-around">
                                    <label class="form-check-label small" for="pishnahadatRow2-1"><input class="form-check-input" id="pishnahadatRow2-1" name="pishnahadatRow2" type="radio" value="قابل چاپ "> قابل چاپ</label> <label class="form-check-label small" for="pishnahadatRow2-2"><input class="form-check-input" id="pishnahadatRow2-2" name="pishnahadatRow2" type="radio" value="غیر قابل چاپ"> غیر قابل چاپ</label> <label class="form-check-label small" for="pishnahadatRow2-3"><input class="form-check-input" id="pishnahadatRow2-3" name="pishnahadatRow2" type="radio" value="پس از اعمال اصلاحات مورد نظر داور قابل چاپ است"> پس از اعمال اصلاحات مورد نظر داور قابل چاپ است</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="small" for="">3)توضیحات پیشنهادی برای ارتقا کیفیت کتاب</label>
                                <div class="form-check flex-50 d-flex flex-row justify-content-around">
                                    <label class="form-check-label small" for="pishnahadatRow3-1">
                                        <textarea class="textarea-form-davari-tarjome form-control form-control-sm small input-radius-custom" cols="80" id="pishnahadatRow3-1" name="pishnahadatRow3" rows="12"></textarea></label>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <p><input class="btn btn-info btn-sm my-4 input-radius-custom d-block mx-auto px-5" id="submit1" name="sumbit1" type="submit" value=" ارسال اطلاعات و ثبت درخواست"></p>
                </form>
            </fieldset>
        </div>
    </div>
</div><!--    برای منوی کشویی-->
<script>

    var select = '';
    for (i=1300;i<=1400;i++){
        select += '<option val=' + i + '>' + i + '<\/option>';
    }
    $('#NumberFarsiSelector').html(select);


    var selectVahed = '';
    for (i=1;i<=5;i++){
        selectVahed += '<option val=' + i + '>' + i + '<\/option>';
    }
    $('#tedadeVahedRow1motabeghat').html(selectVahed);

</script>
<footer class="container-fluid custom-footer">
    <div class="row">
        <div class="col-12 text-center">
            <div class="">
                آدرس: رشت - کیلومتر پنج جاده تهران - دانشکاه گیلان
            </div>
        </div>
    </div>
</footer>
<script>

    headerdate();


</script>
</body>
</html>