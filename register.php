<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up</title>

        <link rel="stylesheet" href="css/registration-layout.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap">

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

        <!--This is the javascript to check for password on the server-side -->
        <script>
            window.jQuery || document.write('<script src="http://mysite.com/jquery.min.js"><\/script>')
        </script>

        <script>
            function checkPasswordMatch() 
            {
                var password = $("#password").val();
                var confirmPassword = $("#confirmpassword").val();

                if (password != confirmPassword)
                    $("#divCheckPasswordMatch").html("Passwords do not match!");
                else
                    $("#divCheckPasswordMatch").html("Passwords match.");
            }

            jQuery(document).ready(function () 
            {
                $("#password, #confirmpassword").keyup(checkPasswordMatch);
            });
        </script>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset=md-1">
                    <div class="row">
                        <div class="col-md-7 register">
                     
                            <h2>CREATE ACCOUNT</h2>
                            <div class="register-form">
                                <form action="registration.php" method="POST">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="First Name" name="first_name" required>
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Last Name" name="last_name" required>
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Username" name="username" required>
                                    </div>

                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email" name="email" required>
                                    </div>

                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" name="password" id = "password" required>
                                    </div>

                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password" id = "confirmpassword"  onChange = "checkPasswordMatch();" required>
                                        <div id = "divCheckPasswordMatch" style = "color: white;" > </div>
                                    </div>

                                    <div class="form-button">
                                        <button type="button" name="signup" class="btn btn-primary">Register</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>