<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
        <link rel="stylesheet" type="text/css" href="css/iofrm-style.css">
        <link rel="stylesheet" type="text/css" href="css/iofrm-theme2.css">
        <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    </head>

    <body>
        <form action= "select-question.php" method="POST">
            <?php

                $db = mysqli_connect('mars.cs.qc.cuny.edu' , 'goch2562' , '23242562' , 'goch2562') or die("could not connect to database" ) ;
                $_SESSION["x"] = "title";
                $y = $_SESSION["x"];

                $sql = "Select $y, questionset_id from questionset";
                $result = $db->query($sql);

                 if($result->num_rows > 0) {
                     while( $row = $result->fetch_assoc() ) {
                         echo "<input type='checkbox' name= 'assignment_list[]' value='$row[title]'> $row[title] <br> <br>";
                     }
                 }      

		 $str_id = $result->fetch_assoc();
                 $_SESSION["questionset_id"] = $str_id[questionset_id];
                 $db->close();
            ?>
            <button id="submit" type="submit" name="assignment_question">Submit</button>
        </form>
    </body>
</html>
