
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
           <link rel="stylesheet" type="text/css" href="../../180DARGA/css/login.css" >

</head>



    <body>

        <div class="login">
        <h2 class="log">Log In</h2>
        <form action="../../180DARGA/php/login2.php" method="post" onsubmit="return validation()" >
        <label>E-Mail</label>
        <input type= "text" name="email" placeholder="E-Mail" id="email" > 
        <p id='e' class="s"></p>
        <label>Password</label>
        <input type= "Password" name="pass" placeholder="Password" id="pass" >  
         <br>
         <p id='p' class="s"></p>
        <br>
    <button  > Log In </button>
    <p  class="s"><?php  if(!empty($_GET['error']))
                    echo $_GET['error'];?>
        <p>New ? <a href="signup2.php">Sign up</a> now.</p>

    </div>
    <script src="login.js"></script>   
</form>
    
    </body>

</html>