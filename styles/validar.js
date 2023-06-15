function validar(){
    //var nombres, apellidos, cedula, clave;
    var nombres = document.getElementById("nombres").value;
    var apellidos = document.getElementById("apellidos").value;
    var cedula = document.getElementById("cedula").value;
    var clave = document.getElementById("clave").value;

    if(cedula.length!==10 || isNaN(cedula)){
       alert("La cédula debe tener 10 digitos");
        return false;
    }
    else if(clave.length>20){
        alert("Solo se admiten hasta 20 caracteres");
        return false;
    }
}