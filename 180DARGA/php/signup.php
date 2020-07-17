<?php
include_once 'db.php';
$fname=$_POST["firstname"];
$lname=$_POST["lastname"];
$password=$_POST["password"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$universty=$_POST["universty"];

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$sql = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn, $sql);
$row = mysqli_num_rows($result); 
    
if ($row == 0) 
{    
  $sqql="insert into users (firstname,lastname,email,password,role,number,univirsty) values('$fname','$lname','$email','$password','user','$phone','$universty')";
  

  if (mysqli_query($conn, $sqql)) 
  {
$sql2 = "SELECT * FROM users WHERE email='$email'";
$result2 = mysqli_query($conn, $sql2);
$row2= mysqli_fetch_array($result2 );
             session_start(); 
             $_SESSION['email']=$email;
             $_SESSION['name']=$fname;
             $_SESSION['lname']=$lname;
             $_SESSION['pass']=$password;
             $_SESSION['universty']=$universty;

             $_SESSION['id']=$row2['id'];
             $id=$row2['id'];
             $sqql2="insert into img (userid,imgid) values('$id',0)";
             mysqli_query($conn, $sqql2);

          header('location:../../180DARGA/html/main.php');
           
} 
        
  
  else {
    
    echo "Error: " . $sqql . "<br>" . mysqli_error($conn);
  }
}
else
header("location:../../180DARGA/html/signup2.php?error=this email is signed before ");
exit();

//  echo"this email is here before";

mysqli_close($conn);

?>
