<?php
    session_start();
    $db = mysqli_connect('mars.cs.qc.cuny.edu' , 'goch2562' , '23242562' , 'goch2562') or die("could not connect to database" ) ;

    $qid = $_SESSION["questionset_id"];


    $sql1 = "Select questionset_id from questionset where title = '$qid'";
    $results = $db->query($sql1);
    $results1 = $results->fetch_assoc();
    $questionset_id = $results1[questionset_id];

    if(isset($_POST['select_question'])) {
        foreach($_POST['check_list'] as $selected) {
            $sql = "Select question_id from question where content = '$selected'";
            $result = $db-> query($sql);
            $result1 = $result->fetch_assoc();
            $sql2 = "Insert into questionset_question(questionset_id, question_id, points) values ('$questionset_id', '$result1[question_id]', 1)";
            $results = mysqli_query($db , $sql2) ;
            
        }
    }

    header( 'location: instructor.php' );
  
    $db->close();
?>