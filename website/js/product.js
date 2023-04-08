function loadDoc() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
        document.getElementById("product").innerHTML = this.responseText;
    }
    xhttp.open("GET", "product_process.php", true);
    xhttp.send();
}