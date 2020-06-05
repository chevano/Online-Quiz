<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>

        <link rel="stylesheet" href="css/registration-layout.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap">

    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset=md-1">
                    <div class="row">
                        <div class="col-md-7 register">
                     
                            <h2>ACCOUNT LOGIN</h2>
                            <div class="register-form">
                                <form action="registration.php" method="POST">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Username" name="username" required>
                                    </div>

                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" name="password" required>
                                    </div>

                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input">
                                        <label class="form-check-label" for="remember-me">Remember Me</label>
                                    </div>

                                    <div class="form-button">
                                        <button type="submit" name="login" class="btn btn-primary">Login</button>
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