<html>
        
    

<head>
        <link rel="stylesheet" type="text/css" href="../../180DARGA/css/profile.css" >
    </head>
<body>
    <?Php
    include_once '../../180DARGA/php/db.php';
    session_start(); 
    $id= $_SESSION['id'];
    $sql="SELECT * from img where userid='$id'";
    $result = mysqli_query($conn, $sql);
    $row= mysqli_fetch_array($result);
    if($row['imgid']==0)
    {
        echo " <img class='pic' src='../../180DARGA/uploads/index.png'>";
    }
    else if($row['imgid']==1)
    {
       
    echo "<img class='pic' src='../../180DARGA/uploads/profile".$id.".jpg"."'>";

    }
    
?>

<form action='../../180DARGA/php/uploads.php' method='POST' enctype='multipart/form-data'>
        <input type='file' name='file'>
        <button type='submit' name='submit'>Upload</button>
</form>
       <div class='info'>
       <?php
                echo   $_SESSION['name']. " ". $_SESSION['lname']. "<br>"; 
                echo   $_SESSION['universty'] . " universty";
       ?>
       </div>
</body>
</html>