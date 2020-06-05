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
        <form action= "completed-question.php" method="POST">
            <?php

                $db = mysqli_connect('mars.cs.qc.cuny.edu' , 'goch2562' , '23242562' , 'goch2562') or die("could not connect to database" ) ;
              
                if(isset($_POST['complete_assignment'])) {
                    foreach($_POST['assign_list'] as $mylist) {
                        $_SESSION['questionset_id'] = $mylist; 

                        $sql = "Select questionset_id from questionset where title = '$mylist'";
                        $results = $db->query($sql);
                        $results1 = $results->fetch_assoc();
                        $questionset_id = $results1[questionset_id];
                    }
                }

                $sql1 = "Select question_id from questionset_question where questionset_id = '$questionset_id'";
                $results2 = $db->query($sql1);
                

                while( $results3 = $results2->fetch_assoc() ) {
                    $question_id = $results3[question_id];

                    $sql2 = "Select content from question where question_id = '$question_id'";
                    $results4 = $db->query($sql2);

                    $row = $results4->fetch_assoc();
                    echo "$row[content] <br> <input type='text' id='question' name='question[]'/> <br> <br>";
                 
                }

                $db->close();
            ?>
            <button id="submit" type="submit" name="complete_question">Submit</button>
        </form>
    </body>
</html>
