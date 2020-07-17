<html>
<head>
        <link rel="stylesheet" type="text/css" href="../../180DARGA/css/cairo.css" >
    </head>
    <body>
        <h1>WorkZone</h1>
        <div class='slider-container'>
        <div class="slide-number" id='slide-number'> </div>
            <?php
            for($i=1;$i<=6;$i++)
            echo "<img  src='../../180DARGA/photos/workzone".$i.".jpg'>";
            ?>
        
        </div>

        <div class="slider-controls">
        <span id='prev'class='prev' > Previous </span>
        <span id='indicators'class='indicators' >  </span>
        <span id='next'class='next' > Next </span>
        </div>
        <div class='writing'>This event is related to our technical part, every time we host this event, we choose a new technology and introduce it to FCI students, this event was hosted
2 times in Helwan university, and 1 time in cairo universty in 2015 was hosted to introduce Virtual reality and robotics and in 2018 was hosted to introduce virtual reality, Augmented reality.

</div>
<button class='back' onclick="location.href='allevents.php'" >Back</button>

<script src ="../../180DARGA/java/cairo.js"> </script>
         
    </body>
</html>