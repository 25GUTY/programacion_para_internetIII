function validarLogin(){

    let email=document.getElementById("email").value.trim();
    let password=document.getElementById("password").value.trim();

    if(email==""){
        alert("Ingrese el correo");
        return false;
    }

    if(password==""){
        alert("Ingrese la contraseña");
        return false;
    }

    return true;
}