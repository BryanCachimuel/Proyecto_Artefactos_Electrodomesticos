function mostrarContrasenia(idPassword, idIcono){
    let inputPassword = document.getElementById(idPassword);
    let icono = document.getElementById(idIcono);

    if(inputPassword.type == "password" && icono.classList.contains("fa-eye")){
        inputPassword.type = "text";
        icono.classList.replace("fa-eye","fa-eye-slash");
    }else{
        inputPassword.type = "password";
        icono.classList.replace("fa-eye-slash","fa-eye");
    }
}