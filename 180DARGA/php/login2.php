<?php
include_once 'db.php';

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  echo "Connected successfully";

if(isset($_POST['email'] ))
{
    
    $password=$_POST["pass"];
    $email=$_POST["email"];
    $sql = "SELECT * FROM users where email='$email'";
    $result = mysqli_query($conn, $sql);
    $row= mysqli_fetch_array($result);
echo $row['univirsty'];
    if($row['password']==$password)
    {
      session_start();
           echo $row['password'];
           $_SESSION['email']=$row['email'];
           $_SESSION['name']=$row['firstname'];
           $_SESSION['lname']=$row['lastname'];
           $_SESSION['pass']=$row['password'];  
           $_SESSION['universty']=$row['univirsty']; 
           $_SESSION['id']=$row['id'];


         header("location:../../180DARGA/html/main.html");
           
   }
   else
        {
          echo '$password';

          
       header("location:../../180DARGA/html/login.php?error=Wrong email or password");
        }

    

        
}

    

mysqli_close($conn);
?>