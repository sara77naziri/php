
// Get add-person button and store it
var FarsiAddBtn = document.getElementById("FarsiAddBtn");

// Define an array to store the people object (that work like a database)
var FarsiInfos = [];

//Define person event function
function FarsiAdd() {

    //Store personal Info in an object
    var FarsiInfo = {
        nameasar: document.getElementById("AsarFarsiNameRow1").value,
        nasher: document.getElementById("NasherFarsiRow1").value,
        salenashr: document.getElementById("NumberFarsiSelector").value,

    };

    // Validate the inputs
    if (FarsiInfo.nameasar == "" ||
        FarsiInfo.nasher == "" ||
        FarsiInfo.salenashr == "" ) {
        alert(".لطفا همه ی بخش ها را تکمیل کنید")
    } else {

        // Append object to the array
        FarsiInfos.push(FarsiInfo);

        // Get the personal info container and store it
        var FarsiInfoContainer = document.getElementById("FarsiInfoContainer");

        // Append person info card into the personal info container
        FarsiInfoContainer.insertAdjacentHTML('beforeend',
            `
        <div class="pt-4 col col-md-4">
        <div class="card shadow rounded" style="width: 18rem;">
            
        <ul class="list-group ">
        <li class="list-group-item">
            <span>
                نام اثر: 
            </span>
            ` + FarsiInfo.nameasar + `
        </li>
        <li class="list-group-item">
            <span>
                 ناشر: 
            </span>
            ` + FarsiInfo.nasher + `
        </li>
        
        <li class="list-group-item">
            <span ">
                سال نشر:
            </span>
            ` + FarsiInfo.salenashr + `
        </li>
     </ul>
        
        <button type="button" class="btn btn-danger btn-sm input-radius-custom removeFarsi"><span class="material-icons">
        delete_sweep
        </span>حذف</button>

        </div>
        </div>`);

        // Clear the inputs
        document.getElementById("AsarFarsiNameRow1").value = "";
        document.getElementById("NasherFarsiRow1").value = "";
        document.getElementById("NumberFarsiSelector").value = "";


        // Get remove person buttons and store these
        var removeFarsiBtn = document.getElementsByClassName("removeFarsi");

        // Loop through the remove buttons and add event listeners to them
        for (var i = 0; i < removeFarsiBtn.length; i++) {
            removeFarsiBtn[i].addEventListener('click', removeFarsi);
        }
    }

}

// Define remove person event
function removeFarsi(ev) {

    // Get the card that is link to the button
    var btn = ev.target;
    var cardBody = btn.parentElement;
    var card = cardBody.parentElement;
    card.parentElement.removeChild(card);

    //Loop through the personal info array
    for (var i = 0; i < FarsiInfos.length; i++) {

        // Get the melli number of the card whose button has been pressed
        var name = cardBody.getElementsByTagName('ul')[0].getElementsByTagName('li')[0].lastElementChild.innerText;
        var nasher = cardBody.getElementsByTagName('ul')[0].getElementsByTagName('li')[1].lastElementChild.innerText;
        var sal = cardBody.getElementsByTagName('ul')[0].getElementsByTagName('li')[2].lastElementChild.innerText;

        // Remove that item from the array that is specific to the card whose button we pressed
        if (FarsiInfos[i].nameasar == name && FarsiInfos[i].nasher == nasher && FarsiInfos[i].salenashr == sal) {
            FarsiInfos.splice(i, 1);
        }
    }
}

//Add event listeners
FarsiAddBtn.addEventListener("click", FarsiAdd);








// Get add-person button and store it
var MotabeqatAddBtn = document.getElementById("MotabeqatAddBtn");

// Define an array to store the people object (that work like a database)
var MotabeqatInfos = [];

//Define person event function
function MotabeqatAdd() {

    //Store personal Info in an object
    var MotabeqatInfo = {
        nameDars: document.getElementById("lessonNameRow1matabeghat").value,
        maghta: document.getElementById("maghtaRow1motabeghat").value,
        tedadeVaded: document.getElementById("tedadeVahedRow1motabeghat").value,
        darsadMotabeqat: document.getElementById("daesadRow1motabeghat").value,

    };

    // Validate the inputs
    if (MotabeqatInfo.nameDars == "" ||
        MotabeqatInfo.maghta == "" ||
        MotabeqatInfo.tedadeVaded == "" ||
        MotabeqatInfo.darsadMotabeqat == "") {
        alert(".لطفا همه ی بخش ها را تکمیل کنید")
    } else {

        // Append object to the array
        MotabeqatInfos.push(MotabeqatInfo);

        // Get the personal info container and store it
        var MotabeqatInfoContainer = document.getElementById("MotabeqatInfoContainer");

        // Append person info card into the personal info container
        MotabeqatInfoContainer.insertAdjacentHTML('beforeend',
            `
        <div class="pt-4 col col-md-4">
        <div class="card shadow rounded" style="width: 18rem;">
            
        <ul class="list-group ">
        <li class="list-group-item">
            <span>
                نام درس: 
            </span>
            ` + MotabeqatInfo.nameDars + `
        </li>
        
          <li class="list-group-item">
            <span>
                تعداد واحد : 
            </span>
            ` + MotabeqatInfo.tedadeVaded + `
        </li>
        
        <li class="list-group-item">
            <span>
                مقطع تحصیلی:
            </span>
           ` + MotabeqatInfo.maghta + `
        </li>
      
        
        <li class="list-group-item">
            <span ">
                 درصد مطابقت:
            </span>
            ` + MotabeqatInfo.darsadMotabeqat + `
        </li>
     </ul>
        
        <button type="button" class="btn btn-danger btn-sm input-radius-custom removeMotabeqat"><span class="material-icons">
        delete_sweep
        </span>حذف</button>

        </div>
        </div>`);

        // Clear the inputs
        document.getElementById("lessonNameRow1matabeghat").value = "";
        document.getElementById("maghtaRow1motabeghat").value = "";
        document.getElementById("tedadeVahedRow1motabeghat").value = "";
        document.getElementById("daesadRow1motabeghat").value = "";


        // Get remove person buttons and store these
        var removeMotabeqatBtn = document.getElementsByClassName("removeMotabeqat");

        // Loop through the remove buttons and add event listeners to them
        for (var i = 0; i < removeMotabeqatBtn.length; i++) {
            removeMotabeqatBtn[i].addEventListener('click', removeMotabeqat);
        }
    }

}

// Define remove person event
function removeMotabeqat(ev) {

    // Get the card that is link to the button
    var btn = ev.target;
    var cardBody = btn.parentElement;
    var card = cardBody.parentElement;
    card.parentElement.removeChild(card);

    //Loop through the personal info array
    for (var i = 0; i < MotabeqatInfos.length; i++) {

        // Get the melli number of the card whose button has been pressed
        var nameDarse = cardBody.getElementsByTagName('ul')[0].getElementsByTagName('li')[0].lastElementChild.innerText;
        var maghta = cardBody.getElementsByTagName('ul')[0].getElementsByTagName('li')[2].lastElementChild.innerText;
        var tedadvahed = cardBody.getElementsByTagName('ul')[0].getElementsByTagName('li')[1].lastElementChild.innerText;
        var darsad = cardBody.getElementsByTagName('ul')[0].getElementsByTagName('li')[3].lastElementChild.innerText;

        // Remove that item from the array that is specific to the card whose button we pressed
        if (MotabeqatInfos[i].nameDars == nameDarse && MotabeqatInfos[i].maghta == maghta && MotabeqatInfos[i].tedadeVaded === tedadvahed && MotabeqatInfos[i].darsadMotabeqat == darsad) {
            MotabeqatInfos.splice(i, 1);
        }
    }
}

//Add event listeners
MotabeqatAddBtn.addEventListener("click", MotabeqatAdd);






var ChoosReshteAddBtn = document.getElementById("ChoosReshteAddBtn");

// Define an array to store the people object (that work like a database)
var  ReshteInfos = [];

//Define person event function
function ReshteAdd() {

    //Store personal Info in an object
    var ReshteInfo = {
        nameReshte: document.getElementById("fieldNameRow1").value,


    };

    // Validate the inputs
    if (ReshteInfo.nameReshte == ""
    ) {
        alert(".لطفا همه ی بخش ها را تکمیل کنید")
    } else {

        // Append object to the array
        ReshteInfos.push(ReshteInfo);

        // Get the personal info container and store it
        var ChoosReshteInfoContainer = document.getElementById("ChoosReshteInfoContainer");

        // Append person info card into the personal info container
        ChoosReshteInfoContainer.insertAdjacentHTML('beforeend',
            `
        <div class="pt-4 col col-md-4">
        <div class="card shadow rounded" style="width: 18rem;">
            
        <ul class="list-group ">
        <li class="list-group-item">
            <span>
                نام رشته: 
            </span>
            ` + ReshteInfo.nameReshte + `
        </li>
        
     </ul>
        
        <button type="button" class="btn btn-danger btn-sm input-radius-custom removeReshte"><span class="material-icons">
        delete_sweep
        </span>حذف</button>

        </div>
        </div>`);

        // Clear the inputs
        document.getElementById("fieldNameRow1").value = "";


        // Get remove person buttons and store these
        var removeReshteBtn = document.getElementsByClassName("removeReshte");

        // Loop through the remove buttons and add event listeners to them
        for (var i = 0; i < removeReshteBtn.length; i++) {
            removeReshteBtn[i].addEventListener('click', removeReshte);
        }
    }

}

// Define remove person event
function removeReshte(ev) {

    // Get the card that is link to the button
    var btn = ev.target;
    var cardBody = btn.parentElement;
    var card = cardBody.parentElement;
    card.parentElement.removeChild(card);

    //Loop through the personal info array
    for (var i = 0; i < ReshteInfos.length; i++) {

        // Get the melli number of the card whose button has been pressed
        var nameReshte = cardBody.getElementsByTagName('ul')[0].getElementsByTagName('li')[0].lastElementChild.innerText;


        // Remove that item from the array that is specific to the card whose button we pressed
        if (ReshteInfos[i].nameReshte == nameReshte) {
            ReshteInfos.splice(i, 1);
        }
    }
}

//Add event listeners
ChoosReshteAddBtn.addEventListener("click", ReshteAdd);










