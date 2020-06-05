<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Student Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="js/script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>

    <style>
        body {
            background-color: #fcf2d8;
        }

        .navbar-default {
	    background-color: red;
	}

        h1 {
	    text-align: center;
            background-color: white;
            color: red;
	}
    </style>

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">LearnHack</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">

                    <li class="complete-assignement"><a href="complete-assignment.php">Complete Assignment</a></li>
                    
		    <li class="scores"><a href="scores.php">View my own Scores</a></li>

		    <li class="logout"><a href="logout.php">Logout</a></li>

                </ul>
            </div>
        </div>
    </nav>
    <h1>Welcome <?php echo $_SESSION['username']; ?> !</h1> 
</body>

</html>