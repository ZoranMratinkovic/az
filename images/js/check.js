//My code
function login_check()
{
    var email = document.getElementById("email_login").value;
    var pass = document.getElementById("password_login").value;
    var reg_pass = /^[a-zA-Z0-9!@#$%^&*-_]{6,}$/;
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
    alert(id_product);
}

    function kreiraj()
    {
        if (window.XMLHttpRequest){
            request = new XMLHttpRequest();
            return request;
        }
        else
        {
            request = new ActiveXObject("Microsoft.XMLHTTP");
        }
    }

    function updateVino()
    {
        request = kreiraj();

        if(!request)
        {
            alert('Nije napravljen kanal za filtriranje.');
        }

        else
        {
            request.open('GET','update.php?id_productProd='+id_product,true);
            request.onreadystatechange = updateTable;
            request.send(null);1
        }
    }
    function updatePivo()
    {
        request = kreiraj();

        if(!request)
        {
            alert('Nije napravljen kanal za filtriranje.');
        }

        else
        {
            request.open('GET','update.php?id_productProd1='+id_product1,true);
            request.onreadystatechange = updateTable;
            request.send(null);1
        }
    }
    function updatePhone()
    {
        request = kreiraj();

        if(!request)
        {
            alert('Nije napravljen kanal za filtriranje.');
        }

        else
        {
            request.open('GET','update.php?id_productProd2='+id_product2,true);
            request.onreadystatechange = updateTable;
            request.send(null);1
        }
    }
    function updateLaptop()
    {
        request = kreiraj();

        if(!request)
        {
            alert('Nije napravljen kanal za filtriranje.');
        }

        else
        {
            request.open('GET','update.php?id_productProd3='+id_product3,true);
            request.onreadystatechange = updateTable;
            request.send(null);1
        }
    }
    function updateTable()
    {
        if(request.readyState==4 || request.status == 200)
        {
            document.getElementById("demo").innerHTML = "EXPIRED";
        }
        //page not found kada u isto vreme - resi!
    }

    function comment(){
        $comment = document.getElementById('textArea').value;
        $commErr ="";
        $com = new Array();
        if($comment.length == 0){
            $commErr = "";
            document.getElementById('comErr').style.display='block';
            return false;
        }
        else
        {
            return true;
        }

}
