<?php

    //Instructor Questions
    $db = mysqli_connect('mars.cs.qc.cuny.edu' , 'goch2562' , '23242562' , 'goch2562') or die("could not connect to database" ) ;
    session_start() ;

    $question_type = $_POST['question_type'];
    $title   = $_POST['title'];
    $content = $_POST['content'];
    $answer  = $_POST['answer'];
   
    if( isset($_POST['instructor_question']) )
    {
        $errors = array() ;

        if( empty($question_type) )
        {
            array_push($errors , "The type of question is required" ) ;
        }

        if( empty($title) )
        {
            array_push($errors , "Title is required" ) ;
        }
   
        if( empty($content) )
        {
            array_push($errors , "Content is required" ) ;
        }

        if( empty($answer) )
        {
            array_push($errors , "Answer is required" ) ;
        }

        if( count($errors) == 0 )
        {
            $query_question = "Insert into question(title , question_type , content, answer) values('$title' , '$question_type', '$content', '$answer')" ;
            $results = mysqli_query($db , $query_question) ;

            $_SESSION['question_type'] = $question_type;
	    $_SESSION['title']   = $title;
            $_SESSION['content'] = $content;
            $_SESSION['answer'] = $answer;

            header( 'location: instructor.php' ) ;

        }

    mysqli_close($db);
    }

    else
    {
        $errors = array();

        //Instructor Question Set
        $questionset_title = $_POST['questionset_title'];

        if( empty($questionset_title) )
        {
            array_push($errors , "The title of the Question Set is required" ) ;
        }

        if( count($errors) == 0 )
        {
            $query_questionset = "Insert into questionset(title) values('$questionset_title')" ;
            mysqli_query($db , $query_questionset) ;

            $_SESSION['questionset_title'] = $questionset_title;

            header( 'location: instructor.php' ) ;
        }
        mysqli_close($db);

   
    }

?>
    