var Modal = document.getElementById('Modal');
var Back = document.getElementById("Back");

var OpenModal = document.getElementById("myImg");

OpenModal.onclick = function () {
    Modal.style.display = "block";
}

Back.onclick = function () {
    Modal.style.display = "none";
}