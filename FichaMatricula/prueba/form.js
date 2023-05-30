document.getElementById("myForm").addEventListener("submit", function(event) {
    event.preventDefault();
    var name = document.getElementById("name").value;

    // Enviar el nombre al archivo PHP utilizando una solicitud AJAX
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("result").textContent = this.responseText;
        }
    };
    xhttp.open("POST", "archivo.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("name=" + encodeURIComponent(name));
});
