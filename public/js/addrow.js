//add row to table

function myFunction() {
    var table = document.getElementById("myTable");
    var row = table.insertRow(1);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    var cell4 = row.insertCell(3);
    var cell5 = row.insertCell(4);
    cell1.innerHTML = "";
    cell2.innerHTML = "";
    cell3.innerHTML = "";
    cell4.innerHTML = "";
    cell5.innerHTML = "";
}

//read more and read less for table1
function read() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("myBtn");

    if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "بیشتر";
        moreText.style.display = "none";
    } else {
        dots.style.display = "none";
        btnText.innerHTML = "کمتر";
        moreText.style.display = "inline";
    }
}

//read more and read less for table1
function read2() {
    var dots2 = document.getElementById("dots2");
    var moreText2 = document.getElementById("more2");
    var btnText2 = document.getElementById("myBtn2");

    if (dots2.style.display === "none") {
        dots2.style.display = "inline";
        btnText2.innerHTML = "بیشتر";
        moreText2.style.display = "none";
    } else {
        dots2.style.display = "none";
        btnText2.innerHTML = "کمتر";
        moreText2.style.display = "inline";
    }
}