// Pet 1
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn1 = document.getElementById("modalBtn1");
var btn2 = document.getElementById("modalBtn2");
var btn3 = document.getElementById("modalBtn3");
var btn4 = document.getElementById("modalBtn4");
var btn5 = document.getElementById("modalBtn5");
var btn6 = document.getElementById("modalBtn6");
var btn7 = document.getElementById("modalBtn7");
var btn8 = document.getElementById("modalBtn8");



// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn1.onclick = function() {
    modal.style.display = "block";
}
btn2.onclick = function() {
    modal.style.display = "block";
}
btn3.onclick = function() {
    modal.style.display = "block";
}
btn4.onclick = function() {
    modal.style.display = "block";
}
btn5.onclick = function() {
    modal.style.display = "block";
}
btn6.onclick = function() {
    modal.style.display = "block";
}
btn7.onclick = function() {
    modal.style.display = "block";
}
btn8.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
function buy() {
    var name = document.getElementById("name").value;
    var category = document.getElementById("category").value;
    var address = document.getElementById("address").value;
    var pincode = document.getElementById("pincode").value;
    var Mno = document.getElementById("Mno").value;
    var Tno = document.getElementById("Tno").value;

    if (name === "" || category === "" || address === "" || pincode === "" || Mno === "" || Tno === "") {
        document.getElementById("errorMessage").style.display = "block";
    } else {
        document.getElementById("errorMessage").style.display = "none";
        alert("I have Received your order for pet, My team contact you within 15min.");
    }
}

// function buy() {
//     alert("");
//  }