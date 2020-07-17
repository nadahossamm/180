<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../../180DARGA/css/main.css" >
    </head>
    <body>
        <div class='navvar'> 
  
            <li><p class="f">180 DARAGA</p></li>   
            <select>
               
                <option  >All Events</option>
                <option  onclick="location.href='newstage.php'"  >Newstage</option>
                <option onclick="location.href='workzone.php'" >Workzone</option>
                <option onclick="location.href=' dotexe.php'" >DOTEXE</option>  
                <option onclick="location.href=' markedia.php'" >Markedia</option>  
                <option onclick="location.href=' shortcut.php'" >Shortcut</option>  

            </select>
            <li> <button class="getdata" >Upcoming Events </button></li> 
            <li><button class="get">Current Events</button> </li>
            <form action="pr.php" method='post'></form>
               <select>
         
                <option  >Members</option>
                <option value='high' onclick="location.href='highboard.php'">Highboard</option>
                <option value='PR' >PR/FR</option>
                <option  >SMM</option>  
                <option  >Technical</option>  
                <option onclick="location.href=' shortcut.php'" >Video Pruduction</option>  
                <option onclick="location.href=' shortcut.php'" >Graphic Design</option>  
             <option> <button name='PR'>ss</button>   </option>
            </select>  
         
           <li><button class="get" onclick="location.href='profile.php'">Profile</button> </li>
            <li><button class="get">Logout</button> </li>
         
          
        
        </div>
  
    </body>
</html>
