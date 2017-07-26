//My code
function login_check()
{   
    var email = document.getElementById("email_login").value;
    var pass = document.getElementById("password_login").value;
    var reg_pass = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;
    var erros = new Array();
    if(!reg_pass.test(pass))
    {
        erros.push("Password - invalid format");
        document.getElementById("pass_error").className+=" error_login_class";
        document.getElementById("pass_error").innerHTML="Invalid format! Please try again.<br/>";
        return false;
    }
    else
    {
        return true;
    }
}