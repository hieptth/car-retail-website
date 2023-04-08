function loadContent() {
    const xhttp = new XMLHttpRequest();
    let x = document.getElementById()
    xhttp.onload = function () {
        document.getElementById("masterbody").innerHTML = this.responseText;
    }
    xhttp.open("GET", "login.php", true);
    xhttp.send();
}