
function validation()
{
    var pass = document.getElementById("pass").value;
    var email = document.getElementById("email").value;
    if (email=="")
    {
        document.getElementById("e").innerHTML="Email cannot be empty";
        return false;
    }
    else
    document.getElementById("e").innerHTML="";

    if (pass=="")
    {
        document.getElementById("p").innerHTML="Email cannot be empty";
        return false;
    }
    document.getElementById("p").innerHTML="";
    
}