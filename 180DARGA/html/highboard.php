<html>
    
<head>
        <link rel="stylesheet" type="text/css" href="../../180DARGA/css/member.css" >
    </head>
</html>
<?php
include_once '../../180DARGA/php/db.php';
  
    $sql="SELECT * from members where type ='presidant' OR type like 'c%' OR type like'%co%' ";
    $result = mysqli_query($conn, $sql);
    while($rows = mysqli_fetch_assoc($result))
        {

 echo "<table class='display'>
  <tr><td>  <img class='pic' src='../../180DARGA/photos/".$rows['name'].".jpg'> </td></tr>

    <tr>
    <td><b> ". $rows['name'].' '.$rows['type'].' '.''." </td>
    
    </tr>
    </table>";

    
        }

?>