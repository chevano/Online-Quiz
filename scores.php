<DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title> Student Table</title>

        <link rel="stylesheet" type="text/css" href="css/table-design.css">
    </head>

    <body>
        <?php
            session_start();
            $db = mysqli_connect('mars.cs.qc.cuny.edu' , 'goch2562' , '23242562' , 'goch2562') or die("could not connect to database" ) ;
 
            $html = "";
            $query = "select sum(points), student_id, first_name, last_name 
                      from question q, questionset qs, questionset_question qsq, 
                      appuser appu, student_answers sa
                      where q.question_id = qsq.question_id
                      and sa.question_id = q.question_id
                      and qsq.questionset_id = qs.questionset_id
                      and qsq.questionset_id = sa.questionset_id
                      and sa.answer = q.answer
                      and appu.user_id = sa.student_id;";

            $result5 = $db->query($query);

            //for ($set = array (); $row = $result5->fetch_assoc(); $set[] = $row);
                //print_r($set);
            

            if( mysqli_num_rows($result5) ) {
                $html .= "<table class='content-table'>";
                $html .= "<thead>";
                $html .= "<tr>";
                $html .= "<th>Total Points</th> <th>Student ID</th> <th>First Name</th> <th>Last Name</th>";
                $html .= "</thead>";
                $html .= "<tbody>";

                while($row = $result5->fetch_assoc() ) {
                    $html .= "<tr>";
                    $html .= "<td>" . $row['sum(points)'] . "</td>";
                    $html .= "<td>" . $row[student_id]    . "</td>";
                    $html .= "<td>" . $row[first_name]    . "</td>";
                    $html .= "<td>" . $row[last_name]     . "</td>";
                    $html .= "</tr>";
                }
            }

            $html .= "</tbody>";
            $html .= "</table>";

            echo "$html";
            
            
            $db->close();
        ?>
    </body>
</html>
    
