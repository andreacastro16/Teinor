xhttp = new XMLHttpRequest();
function managebtn() {
    if (document.getElementById("btnshow").value == "show") {
        document.getElementById("form").style.display = "block";
        document.getElementById("btnshow").value = "hide";
        document.getElementById("btnshow").innerHTML = "Ocultar";
    }
    else {
        document.getElementById("form").style.display = "none";
        document.getElementById("btnshow").value = "show";
        document.getElementById("btnshow").innerHTML = "Añadir";
    }
}

function insert() {
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            titulo = document.getElementById("titulo").value;
            anoEstreno = document.getElementById("anoEstreno").value;

            xhttp.open("POST", "PHP/insert.php?titulo=" + titulo + "&anoEstreno=" + anoEstreno, true);
            xhttp.send();
        }
    };

}

function loadInfo() {
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("infoPeliculas").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "PHP/getInfoPeliculas.php", true);
    xhttp.send();
}

function check() {
    var today = new Date();

    if ((document.getElementById('titulo').value.length) == 0) {
        alert("El título de la película no puede estar vacío.");
    }
    else if ((parseInt(document.getElementById('anoEstreno').value, 10) < 1895) ||
        (parseInt(document.getElementById('anoEstreno').value, 10) > today.getFullYear())) {
        alert("El año de estreno tiene que ser válido.");
    }

}
function order(v) {
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("infoPeliculas").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "PHP/orderBy.php?var=" + v + "&fil=" + document.getElementById("input").value, true);
    xhttp.send();
}


function filter(titulo) {
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("infoPeliculas").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "PHP/select.php?var=" + titulo, true);
    xhttp.send();
}
