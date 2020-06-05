<!Doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Create Questions</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
        <link rel="stylesheet" type="text/css" href="css/iofrm-style.css">
        <link rel="stylesheet" type="text/css" href="css/iofrm-theme2.css">
        <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="col-md-5" style="height:0px;"></div>
        <div class="col-md-5" style="height:0px;"></div>

        <form action="questions.php" method="POST" name="create-questions">
            <br> <label for="title"><b>Title</b> </label> <br>
            <input class="question-form" type="text" name="title" placeholder="Enter Title" required>

            <br> <br> <label for="content"><b>Content</b> </label> <br>
            <input class="question-form" type="text" name="content" placeholder="Enter Content" required>

            <br> <br> <label for="answer"><b>Answer</b> </label> <br>
            <input class="question-form" type="text" name="answer" placeholder="Enter Answer" required>

            <br> <br> <b>Type of Question</b> <br>
	    <select id="question_type" name="question_type">
	        <option value = "MC">Multiple Choice</option>
	        <option value = "WA">Word Answer</option>
	    </select>
            <br> <br> <button id="submit" type="submit" name="instructor_question">Submit</button>
        </form>
    </body>
<html>