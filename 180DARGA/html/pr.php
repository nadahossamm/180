<html>
    
<head>
        <link rel="stylesheet" type="text/css" href="../../180DARGA/css/member.css" >
    </head>
    

    <?php
    include_once '../../180DARGA/php/db.php';
 $x='';

if(isset($_POST['PR']))
{
    $x="PR/FR";
   
}
    
else if(isset($_POST['SMM']))
$x='SMM';

else if(isset($_POST['Technical']))
$x='Technical';


else if(isset($_POST['graphic']))
$x='Graphic Design';

else if(isset($_POST['video']))
$x='Video Production';
if($x!="")
{
    
    $sql="SELECT * from members where comittie='$x' ";
    $result = mysqli_query($conn, $sql);

    while($rows = mysqli_fetch_assoc($result))
        {

 echo "<table class='display'>
  <tr><td>  <img class='pic' src='../../180DARGA/photos/".$rows['name'].".jpg'> </td></tr>

    <tr>
    <td><b> ". $rows['name'].' '.$rows['universty'].' '.'Universty'." </td>
    
    </tr>
    </table>";

    
        }
}
?>


</html>
