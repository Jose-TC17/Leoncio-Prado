const checkbox = document.getElementById("chbx-showPassword");
const password = document.getElementById("input-type-password");

mostrarPassword = () =>{
    if (password.type == 'password'){
        password.type = 'text';
    }else{
        password.type = 'password';
    }
}