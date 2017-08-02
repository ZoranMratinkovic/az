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
function ispisi()
{
    alert(timestamp);
}
// Set the date we're counting down to
var countDownDate = new Date(timestamp*1000).getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
}, 1000);