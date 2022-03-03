function validate() {
    var password = doucment.getElementById("signup_password").value;
    var confirmPassword = doucment.getElementById("confirm_password").value;

    if (password != confirmPassword) {
        confirm_password.setCustomValidity("passwords Don't Match");

    }else if (confirmPassword == "" || password == "") {
        
    }else{
        confirm_password.setCustomValidity("");
    }
}    