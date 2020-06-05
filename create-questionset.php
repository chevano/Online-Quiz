<!Doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Create Questionset</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
        <link rel="stylesheet" type="text/css" href="css/iofrm-style.css">
        <link rel="stylesheet" type="text/css" href="css/iofrm-theme2.css">
        <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="col-md-5" style="height:0px;"></div>
        <div class="col-md-5" style="height:0px;"></div>

        <form action="questions.php" method="POST" name="instructor_questionset">
            <br> <label for="questionset_title"><b>Title</b> </label> <br>
            <input class="questionset-form" type="text" name="questionset_title" placeholder="Enter Title" required>
            <br> <br> <button id="submit" type="submit" name="instructor_questionset">Submit</button>
        </form>
    </body>
<html>