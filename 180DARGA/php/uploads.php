<?php
include_once 'db.php';
session_start();
$id= $_SESSION['id'];
if(isset( $_POST['submit']))
{
   
    $file=$_FILES['file'];
    $filename=$file['name'];
    $filetmpname=$file['tmp_name'];
    $filesize=$file['size'];
    $fileerror=$file['error'];
    $filetype=$file['type'];
    $fileExt=explode('.',$filename);
    $fileactualext=strtolower(end($fileExt));
    $allwed=array('jpg','jpeg','png');
    $_SESSION['ext']=$fileactualext;
    if(in_array($fileactualext,$allwed))
    { 
        if ($fileerror===0)
        {
                $filenamenew="profile".$id.'.'.$fileactualext;
                $filedestination="../../180DARGA/uploads/".$filenamenew;
                move_uploaded_file($filetmpname,$filedestination);
                $sql="UPDATE img SET imgid=1 where userid='$id' ";

            $result=mysqli_query($conn,$sql);
              
                header('location:../../180DARGA/html/profile.php');
              
           
        }
    
        else
        {
            echo "there is error while uploading file";
        }
       
    }
    else
    {
        echo 'You cannot add this file';
    }
}

?>
