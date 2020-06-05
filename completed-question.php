<?php
    session_start();
    $db = mysqli_connect('mars.cs.qc.cuny.edu' , 'goch2562' , '23242562' , 'goch2562') or die("could not connect to database" ) ;

    
    $student_id = $_SESSION['username'];

    if(isset($_POST['complete_assignment'])) {
        foreach($_POST['assign_list'] as $mylist) {
            $_SESSION['questionset_id'] = $mylist; 

            $sql = "Select questionset_id from questionset where title = '$mylist'";
            $results = $db->query($sql);
            $results1 = $results->fetch_assoc();
            $questionset_id = $results1[questionset_id];
        }
    }

    $sql1 = "Select question_id from questi-onset_question where questionset_id = '$questionset_id'";
    $results2 = $db->query($sql1);
                
    echo "before while <br> <br>";
    while( $results3 = $results2->fetch_assoc() ) {
        $question_id = $results3[question_id];

        $sql2 = "Select content from question where question_id = '$question_id'";
        $results4 = $db->query($sql2);

        $row = $results4->fetch_assoc();
        echo" after row";
        if( isset($_POST['complete_question']) ) {
            echo"checks if <br> <br>";
            foreach( $_POST['question'] as $mylist1) {
                echo "checks foreach <br> <br>";
                $sql3 = "insert into student_answers(student_id, questionset_id, question_id, answer) values( '$student_id', '$questionset_id', '$question_id', '$mylist1')";
            }
        }        
    }

    $db->close();

?>