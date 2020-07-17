<html>   
    <body>
    <?php
 //   include_once "180DARGA\php\signup.php";
    ?>
        <div class= "main">
            <h2>Sign Up</h5> 
        <form action="../../180DARGA/php/signup.php" method="post" name="form"onsubmit="return validation()" >
        <label>FirstName</label>
        <input type="text" name="firstname" id="firstname">
        <p id="fn"></p>
        <br>
        <label>LastName</label>
        <input type="text" name="lastname" id="lastname">
        <p id="ln"></p>
        <br>
        <label>E-Mail</label>
        <input type="email" name="email"id="email">
        <p id="e"></p>
        <br>   
        <label>PhoneNumber</label>
        <input type="text" name="phone" id="phone">
        <p id="pn"></p>
        <br>
        <label>Password</label>
        <input type="password" name="password" id="pass" >
        <p id="p"></p>
        <br>
        <label>Confirm password </label>
        <input type="password" name="confirmpass" id="cpass">
        <p id="cp"></p>
        <br>
        <label>Universty </label>
        <input type="text" name="universty" id="uni">
        <p id="un"></p>
        <button>Sign Up</button>
        <script src ="../../180DARGA/java/signup.js"> </script>
        <p id="eror" >  <?php
        if(!empty($_GET['error']))
       { $x=$_GET['error'];
        echo"$x";}
        ?> </p>
        </div>
    </body>
     
</html>