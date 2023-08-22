var form = document.getElementById("form");

function validar(e){
    let validarPassword= /(?=.*[a-z])(?=.*[0-9])(?=.*[!@#$-_&%])(?=.{8,})/;

    var idUsuario, nombre, apellidoPa, apellidoMa, departamento, contrasena, contrasenaConfirm, alertError, alertContrasena, 
    alertSuccess, alertCoincidencia;
    idUsuario = document.getElementById("idUsuario").value;
    nombre = document.getElementById("nombre").value;
    apellidoPa = document.getElementById("apellidoPa").value;
    apellidoMa = document.getElementById("apellidoMa").value;
    departamento = document.getElementById("departamento").value;
    contrasena = document.getElementById("contrasena").value;
    contrasenaConfirm = document.getElementById("contrasenaConfirm").value;
    alertError = document.getElementById("alertError");
    alertContrasena = document.getElementById("alertContrasena");
    alertSuccess = document.getElementById("alertSuccess");
    alertCoincidencia = document.getElementById("alertCoincidencia")

    if(idUsuario == 0 || nombre == 0 || apellidoPa == 0 || apellidoMa == 0 || departamento == 0 || contrasena == 0 || contrasenaConfirm == 0){
        e.preventDefault();
        alertError.style.display = "block";
        setTimeout(function(){
            alertError.style.display = "none";
        },3000);
        return false;

    }else if(!validarPassword.test(contrasena)){
        e.preventDefault();
        alertContrasena.style.display = "block";
        setTimeout(function(){
            alertContrasena.style.display = "none";
        },5000);
        return false;
    }else if(contrasena != contrasenaConfirm){
        e.preventDefault();
        alertCoincidencia.style.display = "block";
        setTimeout(function(){
            alertCoincidencia.style.display = "none";
        },3000);
        return false;
    }else{
        e.preventDefault();
        alertSuccess.style.display = "block";
        setTimeout(function(){
            alertSuccess.style.display = "none";
        },2000)
        form.reset();
    }
}

form.addEventListener("submit", validar);
