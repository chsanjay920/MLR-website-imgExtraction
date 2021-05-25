<html>
 <head>
 <title>display image</title>
 </head>
 <body>
	<?php
    for($x = 7203;$x<=7603;$x++){
        
    $str = (string)$x;
    $link = "https://exams.mlrinstitutions.ac.in/StudentLogin/Student/StudentPhoto.aspx?StudId=".$str."&ColCode=PSS";
	echo "<img src= $link >"; 
    }

	?>  
 </body>
 </html>
