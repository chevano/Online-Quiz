<?php

    $db = mysqli_connect('mars.cs.qc.cuny.edu' , 'goch2562' , '23242562' , 'goch2562') or die("could not connect to database" ) ;
   session_start() ;

    $sql = "Select title from questionset";
    $result = $db->query($sql);

    $html = "";
    if($result->num_rows > 0) {
        while( $row = $result->fetch_assoc() ) {
	    $html .= $row[title] . "&nbsp" . "&nbsp" . "&nbsp" . "<input type=\"button\" onclick=\"window.location.href = 'create-questions.php';\" value=\"Add Question\"/>". "<br>";
        }
    }

    echo $html;

    $db->close();
?>