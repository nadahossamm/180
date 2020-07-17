function validation()
{
  
    var name = document.getElementById("firstname").value;
    var lname = document.getElementById("lastname").value;
    var phone = document.getElementById("phone").value;
    var pass = document.getElementById("pass").value;
    var cpass = document.getElementById("cpass").value;
    var uni = document.getElementById("uni").value;


    var email = document.getElementById("email").value;
    if(name === "" ){
        document.getElementById("fn").innerHTML="This is invalid name ";
        document.getElementById("firstname").focus();

        return false;
    }
    re = /[a-z]/;  
        if (!re.test(name))
         {
            document.getElementById("fn").innerHTML="Name must be characters";
            document.getElementById("firstname").focus();
            return false;
        }
    else
    {
        document.getElementById("fn").innerHTML="";
    }
    if(lname === "" ){
        document.getElementById("ln").innerHTML="This is invalid name ";
        document.getElementById("lastname").focus();

        return false;
    }
    re = /[a-z]/;  
        if (!re.test(lname))
         {
            document.getElementById("ln").innerHTML="Name must be characters";
            document.getElementById("lastname").focus();
            return false;
        }
    else
    {
        document.getElementById("ln").innerHTML="";
    }
    if(email === "")
    {
        document.getElementById("e").innerHTML="the email can't be empty ";
        document.getElementById("email").focus();

        return false;
    }
    re=/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/;
    if (!re.test(email))
{
   document.getElementById("e").innerHTML="Email must be as nada.hossam@gmail.com";
   document.getElementById("email").focus();
   return false;
}
    else
    {
        document.getElementById("e").innerHTML=" ";
    }
    if(isNaN(phone))
    {
        document.getElementById("pn").innerHTML="Please enter number correctly";
        document.getElementById("phone").focus();

        return false;
    }
    if(phone.length!=11)
    {
        document.getElementById("pn").innerHTML="Phone number must be 11 number ";
        document.getElementById("phone").focus();

        return false;
    }
    else
    {
        document.getElementById("pn").innerHTML=" ";
    }
    if(pass === "")
    {
        document.getElementById("p").innerHTML=" The password can't be empty ";
        document.getElementById("pass").focus();

        return false;
    }
    
  
    if(pass.length<6)
    {
        document.getElementById("p").innerHTML=" The password must be more than or equal 6 elements ";
        document.getElementById("p").focus();

        return false;
    }
    else
    {
        document.getElementById("p").innerHTML=" ";
    }
    if(cpass !== pass)
    {
        document.getElementById("cp").innerHTML="Not same as password";
        document.getElementById("cp").focus();

        return false;
    }
    else
    {
        document.getElementById("cp").innerHTML=" ";
    }
    
    if(uni === "")
    {
        document.getElementById("un").innerHTML=" The universty can't be empty ";
        document.getElementById("uni").focus();

        return false;
    }
    else
    document.getElementById("un").innerHTML=" ";
  
}

