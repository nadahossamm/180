<html>
<head>
        <link rel="stylesheet" type="text/css" href="../../180DARGA/css/cairo.css" >
    </head>
    <body>
        <h1>NewStage</h1>
        <div class='slider-container'>
        <div class="slide-number" id='slide-number'> </div>
            <?php
            for($i=0;$i<=14;$i++)
            echo "<img  src='../../180DARGA/photos/newstage".$i.".jpg'>";
            ?>
        
        </div>

        <div class="slider-controls">
        <span id='prev'class='prev' > Previous </span>
        <span id='indicators'class='indicators' >  </span>
        <span id='next'class='next' > Next </span>
        </div>
        <div class='writing'>
 New Stage is an annual event that is held for new comers
 at the faculty of computers and information
 to help them to overcome the new stage of college.
 It has been held since 2008 for 12 years respectively.
 New stage is 5 days of workshop divided into sessions
 by DRs, TAs and speakers that support new comers
 with technical and soft skills to help them at college.

</div>
<button class='back' onclick="location.href='allevents.php'" >Back</button>

<script src ="../../180DARGA/java/cairo.js"> </script>
         
    </body>
</html>