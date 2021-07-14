// Get add-person button and store it
var personAddBtn = document.getElementById("personAddBtn");

// Define an array to store the people object (that work like a database)
var personalInfos = [];

//Define person event function
function personAdd() {

    //Store personal Info in an object
    var personalInfo = {
        firstName: document.getElementById("nameShakhsi").value,
        lastName: document.getElementById("LnameShakhsi").value,
        fatherName: document.getElementById("FNameShakhsi").value,
        shenasnameNumber: document.getElementById("shenasnameShakhsi").value,
        melliNumber: document.getElementById("kodMelliShakhsi").value,
    };

    // Validate the inputs
    if (personalInfo.firstName == "" ||
        personalInfo.lastName == "" ||
        personalInfo.fatherName == "" ||
        personalInfo.shenasnameNumber == "" ||
        personalInfo.melliNumber == "") {
        alert(".لطفا همه ی بخش ها را تکمیل کنید")
    } else {

        // Append object to the array
        personalInfos.push(personalInfo);

        // Get the personal info container and store it
        var personInfoContainer = document.getElementById("personInfoContainer");

        // Append person info card into the personal info container
        personInfoContainer.insertAdjacentHTML('beforeend',
            `
        <div class="pt-4 col col-md-4">
        <div class="card shadow rounded" style="width: 18rem;">
        <div class="card-header">
            <span class="material-icons">
                person_outline
            </span>
           <span> ` + personalInfo.firstName + " " + personalInfo.lastName + `</span>
        </div>
        <ul class="list-group list-group-flush">
        <li class="list-group-item">
            <span style="font-weight: bold">
                نام پدر: 
            </span>
            ` + personalInfo.fatherName + `
        </li>
        <li class="list-group-item">
            <span style="font-weight: bold">
                شماره شناسنامه: 
            </span>
            ` + personalInfo.shenasnameNumber + `
        </li>
        <li class="list-group-item">
            <span style="font-weight: bold">
                کد ملی: 
            </span>
            <span>` + personalInfo.melliNumber + `</span>
        </li>
        </ul>
        <button type="button" class="btn btn-danger btn-sm input-radius-custom removePerson"><span class="material-icons">
        delete_sweep
        </span>حذف</button>

        </div>
        </div>`);

        // Clear the inputs
        document.getElementById("nameShakhsi").value = "";
        document.getElementById("LnameShakhsi").value = "";
        document.getElementById("FNameShakhsi").value = "";
        document.getElementById("shenasnameShakhsi").value = "";
        document.getElementById("kodMelliShakhsi").value = "";

        // Get remove person buttons and store these
        var removePersonBtn = document.getElementsByClassName("removePerson");

        // Loop through the remove buttons and add event listeners to them
        for (var i = 0; i < removePersonBtn.length; i++) {
            removePersonBtn[i].addEventListener('click', removePerson);
        }
    }

}

// Define remove person event
function removePerson(ev) {

    // Get the card that is link to the button
    var btn = ev.target;
    var cardBody = btn.parentElement;
    var card = cardBody.parentElement;
    card.parentElement.removeChild(card);

    //Loop through the personal info array
    for (var i = 0; i < personalInfos.length; i++) {

        // Get the melli number of the card whose button has been pressed
        var melli = cardBody.getElementsByTagName('ul')[0].getElementsByTagName('li')[2].lastElementChild.innerText;

        // Remove that item from the array that is specific to the card whose button we pressed
        if (personalInfos[i].melliNumber == melli) {
            personalInfos.splice(i, 1);
        }
    }
}

//Add event listeners
personAddBtn.addEventListener("click", personAdd);










// Get add-person button and store it
var MohtavaAddBtn = document.getElementById("MohtavaAddBtn");

// Define an array to store the people object (that work like a database)
var MohtavaInfos = [];

//Define person event function
function MohtavaAdd() {

    //Store personal Info in an object
    var MohtavaInfo = {
        reshte: document.getElementById("name-reshte-mohtava1").value,
        dars: document.getElementById("name-dars-mohtava1").value,
        maghta: document.getElementById("name-maghta-mohtava1").value,

    };

    // Validate the inputs
    if (MohtavaInfo.reshte == "" ||
        MohtavaInfo.dars == "" ||
        MohtavaInfo.maghta == "" ) {
        alert(".لطفا همه ی بخش ها را تکمیل کنید")
    } else {

        // Append object to the array
        MohtavaInfos.push(MohtavaInfo);

        // Get the personal info container and store it
        var MohtavaInfoContainer = document.getElementById("MohtavaInfoContainer");

        // Append person info card into the personal info container
        MohtavaInfoContainer.insertAdjacentHTML('beforeend',
            `
        <div class="pt-4 col col-md-4">
        <div class="card shadow rounded" style="width: 18rem;">
            
        <ul class="list-group ">
        <li class="list-group-item">
            <span>
                نام رشته: 
            </span>
            ` + MohtavaInfo.reshte + `
        </li>
        <li class="list-group-item">
            <span>
                نام درس: 
            </span>
            ` + MohtavaInfo.dars + `
        </li>
        
        <li class="list-group-item">
            <span ">
                مقطع تحصیلی:
            </span>
            ` + MohtavaInfo.maghta + `
        </li>
     </ul>
        
        <button type="button" class="btn btn-danger btn-sm input-radius-custom removeMohtava"><span class="material-icons">
        delete_sweep
        </span>حذف</button>

        </div>
        </div>`);

        // Clear the inputs
        document.getElementById("name-reshte-mohtava1").value = "";
        document.getElementById("name-dars-mohtava1").value = "";
        document.getElementById("name-maghta-mohtava1").value = "";


        // Get remove person buttons and store these
        var removeMohtavaBtn = document.getElementsByClassName("removeMohtava");

        // Loop through the remove buttons and add event listeners to them
        for (var i = 0; i < removeMohtavaBtn.length; i++) {
            removeMohtavaBtn[i].addEventListener('click', removeMohtava);
        }
    }

}

// Define remove person event
function removeMohtava(ev) {

    // Get the card that is link to the button
    var btn = ev.target;
    var cardBody = btn.parentElement;
    var card = cardBody.parentElement;
    card.parentElement.removeChild(card);

    //Loop through the personal info array
    for (var i = 0; i < MohtavaInfos.length; i++) {

        // Get the melli number of the card whose button has been pressed
        var reshte = cardBody.getElementsByTagName('ul')[0].getElementsByTagName('li')[0].lastElementChild.innerText;
        var dars = cardBody.getElementsByTagName('ul')[0].getElementsByTagName('li')[1].lastElementChild.innerText;
        var maqta = cardBody.getElementsByTagName('ul')[0].getElementsByTagName('li')[2].lastElementChild.innerText;

        // Remove that item from the array that is specific to the card whose button we pressed
        if (MohtavaInfos[i].reshte == reshte && MohtavaInfos[i].dars == dars && MohtavaInfos[i].maghta == maqta) {
            MohtavaInfos.splice(i, 1);
        }
    }
}

//Add event listeners
MohtavaAddBtn.addEventListener("click", MohtavaAdd);





// Get add-person button and store it
var KetabAddBtn = document.getElementById("KetabAddBtn");

// Define an array to store the people object (that work like a database)
var KetabInfos = [];

//Define person event function
function KetabAdd() {

    //Store personal Info in an object
    var KetabInfo = {
        nameKetab: document.getElementById("name-ketab").value,
        noeasar: document.getElementById("noe-asar-ketab").value,
        salenashr: document.getElementById("sale-nashr-ketab").value,
        nasher: document.getElementById("nasher-ketab").value,

    };

    // Validate the inputs
    if (KetabInfo.nameKetab == "" ||
        KetabInfo.noeasar == "" ||
        KetabInfo.salenashr == "" ||
        KetabInfo.nasher == "") {
        alert(".لطفا همه ی بخش ها را تکمیل کنید")
    } else {

        // Append object to the array
        KetabInfos.push(KetabInfo);

        // Get the personal info container and store it
        var KetabInfoContainer = document.getElementById("KetabInfoContainer");

        // Append person info card into the personal info container
       KetabInfoContainer.insertAdjacentHTML('beforeend',
            `
        <div class="pt-4 col col-md-4">
        <div class="card shadow rounded" style="width: 18rem;">
            
        <ul class="list-group ">
        <li class="list-group-item">
            <span>
                نام کتاب: 
            </span>
            ` + KetabInfo.nameKetab + `
        </li>
        
        <li class="list-group-item">
            <span>
                نوع اثر: 
            </span>
           ` + KetabInfo.noeasar + `
        </li>
        <li class="list-group-item">
            <span>
                سال نشر: 
            </span>
            ` + KetabInfo.salenashr + `
        </li>
        
        <li class="list-group-item">
            <span ">
                 ناشر:
            </span>
            ` + KetabInfo.nasher + `
        </li>
     </ul>
        
        <button type="button" class="btn btn-danger btn-sm input-radius-custom removeKetab"><span class="material-icons">
        delete_sweep
        </span>حذف</button>

        </div>
        </div>`);

        // Clear the inputs
        document.getElementById("name-ketab").value = "";
        document.getElementById("noe-asar-ketab").value = "";
        document.getElementById("sale-nashr-ketab").value = "";
        document.getElementById("nasher-ketab").value = "";


        // Get remove person buttons and store these
        var removeKetabBtn = document.getElementsByClassName("removeKetab");

        // Loop through the remove buttons and add event listeners to them
        for (var i = 0; i < removeKetabBtn.length; i++) {
            removeKetabBtn[i].addEventListener('click', removeKetab);
        }
    }

}

// Define remove person event
function removeKetab(ev) {

    // Get the card that is link to the button
    var btn = ev.target;
    var cardBody = btn.parentElement;
    var card = cardBody.parentElement;
    card.parentElement.removeChild(card);

    //Loop through the personal info array
    for (var i = 0; i < KetabInfos.length; i++) {

        // Get the melli number of the card whose button has been pressed
        var nameKetab = cardBody.getElementsByTagName('ul')[0].getElementsByTagName('li')[0].lastElementChild.innerText;
        var noeAsar = cardBody.getElementsByTagName('ul')[0].getElementsByTagName('li')[1].lastElementChild.innerText;
        var saleNashr = cardBody.getElementsByTagName('ul')[0].getElementsByTagName('li')[2].lastElementChild.innerText;
        var nasher = cardBody.getElementsByTagName('ul')[0].getElementsByTagName('li')[3].lastElementChild.innerText;

        // Remove that item from the array that is specific to the card whose button we pressed
        if (KetabInfos[i].nameKetab == nameKetab && KetabInfos[i].noeasar == noeAsar && KetabInfos[i].salenashr === saleNashr && KetabInfos[i].nasher == nasher) {
            KetabInfos.splice(i, 1);
        }
    }
}

//Add event listeners
KetabAddBtn.addEventListener("click", KetabAdd);








var AfradAddBtn = document.getElementById("AfradAddBtn");

// Define an array to store the people object (that work like a database)
var AfradInfos = [];

//Define person event function
function AfradAdd() {

    //Store personal Info in an object
    var AfradInfo = {
        name: document.getElementById("fard-pishnahadi").value,
        takhasos: document.getElementById("takhasos").value,
        heyatElmi: document.getElementById("heyatelmi").value,
        shomareHamrah: document.getElementById("shomareHamrah").value,

    };

    // Validate the inputs
    if (AfradInfo.name == "" ||
        AfradInfo.takhasos == "" ||
        AfradInfo.heyatElmi == "" ||
        AfradInfo.shomareHamrah=="") {
        alert(".لطفا همه ی بخش ها را تکمیل کنید")
    } else {

        // Append object to the array
        AfradInfos.push(AfradInfo);

        // Get the personal info container and store it
        var AfradInfoContainer = document.getElementById("AfradInfoContainer");

        // Append person info card into the personal info container
        AfradInfoContainer.insertAdjacentHTML('beforeend',
            `
        <div class="pt-4 col col-md-4">
        <div class="card shadow rounded" style="width: 18rem;">
            
        <ul class="list-group ">
        <li class="list-group-item">
            <span>
                نام ونام خانوادگی : 
            </span>
            ` + AfradInfo.name + `
        </li>
        <li class="list-group-item">
            <span>
                تخصص : 
            </span>
            ` + AfradInfo.takhasos + `
        </li>
        
        <li class="list-group-item">
            <span>
                هیات علمی دانشکده/دانشگاه:
            </span>
            ` + AfradInfo.heyatElmi + `
        </li>
        
         <li class="list-group-item">
            <span>
                شماره همراه:
            </span>
            ` + AfradInfo.shomareHamrah +`
        </li>
     </ul>
        
        <button type="button" class="btn btn-danger btn-sm input-radius-custom removeAfrad"><span class="material-icons">
        delete_sweep
        </span>حذف</button>

        </div>
        </div>`);

        // Clear the inputs
        document.getElementById("fard-pishnahadi").value = "";
        document.getElementById("takhasos").value = "";
        document.getElementById("heyatelmi").value = "";
        document.getElementById("shomareHamrah").value = "";


        // Get remove person buttons and store these
        var removeAfradBtn = document.getElementsByClassName("removeAfrad");

        // Loop through the remove buttons and add event listeners to them
        for (var i = 0; i < removeAfradBtn.length; i++) {
            removeAfradBtn[i].addEventListener('click', removeAfrad);
        }
    }

}

// Define remove person event
function removeAfrad(ev) {

    // Get the card that is link to the button
    var btn = ev.target;
    var cardBody = btn.parentElement;
    var card = cardBody.parentElement;
    card.parentElement.removeChild(card);

    //Loop through the personal info array
    for (var i = 0; i < AfradInfos.length; i++) {

        // Get the melli number of the card whose button has been pressed
        var shomarehamrah = cardBody.getElementsByTagName('ul')[0].getElementsByTagName('li')[3].lastElementChild.innerText;

        // Remove that item from the array that is specific to the card whose button we pressed
        if (AfradInfos[i].shomareHamrah == shomarehamrah) {
            MohtavaInfos.splice(i, 1);
        }
    }
}

//Add event listeners
AfradAddBtn.addEventListener("click", AfradAdd);









// Get add-person button and store it
var MoshabeAddBtn = document.getElementById("MoshabeAddBtn");

// Define an array to store the people object (that work like a database)
var MoshabeInfos = [];

//Define person event function
function MoshabeAdd() {

    //Store personal Info in an object
    var MoshabeInfo = {
        nameMoshabe: document.getElementById("name-moshabeh-pishnahadat").value,
        nashr: document.getElementById("nasher-moshabe").value,
        saleNashr: document.getElementById("sale-nashr-moshabe").value,

    };

    // Validate the inputs
    if (MoshabeInfo.nameMoshabe == "" ||
        MoshabeInfo.nashr == "" ||
        MoshabeInfo.saleNashr == "" ) {
        alert(".لطفا همه ی بخش ها را تکمیل کنید")
    } else {

        // Append object to the array
        MoshabeInfos.push(MoshabeInfo);

        // Get the personal info container and store it
        var MoshabeInfoContainer = document.getElementById("MoshabehInfoContainer");

        // Append person info card into the personal info container
        MoshabeInfoContainer.insertAdjacentHTML('beforeend',
            `
        <div class="pt-4 col col-md-4">
        <div class="card shadow rounded" style="width: 18rem;">
            
        <ul class="list-group ">
        <li class="list-group-item">
            <span>
                نام کتاب: 
            </span>
            ` + MoshabeInfo.nameMoshabe + `
        </li>
        <li class="list-group-item">
            <span>
                ناشر : 
            </span>
            ` + MoshabeInfo.nashr + `
        </li>
        
        <li class="list-group-item">
            <span ">
                سال نشر:
            </span>
            ` + MoshabeInfo.saleNashr + `
        </li>
     </ul>
        
        <button type="button" class="btn btn-danger btn-sm input-radius-custom removeMoshabe"><span class="material-icons">
        delete_sweep
        </span>حذف</button>

        </div>
        </div>`);

        // Clear the inputs
        document.getElementById("name-moshabeh-pishnahadat").value = "";
        document.getElementById("nasher-moshabe").value = "";
        document.getElementById("sale-nashr-moshabe").value = "";


        // Get remove person buttons and store these
        var removeMoshabeBtn = document.getElementsByClassName("removeMoshabe");

        // Loop through the remove buttons and add event listeners to them
        for (var i = 0; i < removeMoshabeBtn.length; i++) {
            removeMoshabeBtn[i].addEventListener('click', removeMoshabe);
        }
    }

}

// Define remove person event
function removeMoshabe(ev) {

    // Get the card that is link to the button
    var btn = ev.target;
    var cardBody = btn.parentElement;
    var card = cardBody.parentElement;
    card.parentElement.removeChild(card);

    //Loop through the personal info array
    for (var i = 0; i < MoshabeInfos.length; i++) {

        // Get the melli number of the card whose button has been pressed
        var name = cardBody.getElementsByTagName('ul')[0].getElementsByTagName('li')[0].lastElementChild.innerText;
        var nasher = cardBody.getElementsByTagName('ul')[0].getElementsByTagName('li')[1].lastElementChild.innerText;
        var sal = cardBody.getElementsByTagName('ul')[0].getElementsByTagName('li')[2].lastElementChild.innerText;

        // Remove that item from the array that is specific to the card whose button we pressed
        if (MoshabeInfos[i].nameMoshabe == name && MoshabeInfos[i].nashr == nasher && MoshabeInfos[i].saleNashr == sal) {
            MoshabeInfos.splice(i, 1);
        }
    }
}

//Add event listeners
MoshabeAddBtn.addEventListener("click", MoshabeAdd);




































