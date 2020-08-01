<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' 
    integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/form-doc.css">
    <link href='https://fonts.googleapis.com/css?family=Bayon|Francois+One' rel='stylesheet' type='text/css'>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/style.min.css" rel="stylesheet">

    <script type="text/javascript"> 
        window.history.forward(); 
        function noBack() { 
            window.history.forward(); 
        } 
    </script>

</head>
<body>

    <!-- Material form login -->
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-4 mt-5 rounded">
                <div class="card">
                    <h5 class="card-header info-color white-text text-center py-4">
                    <strong>Sign in</strong>
                    </h5>
                    <!--Card content-->
                    <div class="card-body px-lg-5 pt-0">
                    <!-- Form -->
                    <form class="text-center"action="signin.php" method="POST">
                    <?php include('errors.php'); ?>
                        <!-- Email -->
                        <div class="md-form">
                            <input type="email"name="email" id="email" class="form-control" placeholder="E-mail">
                        </div>
                        <!-- Password -->
                        <div class="md-form">
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                        </div> 
                        <div class="d-flex justify-content-around">
                        <div>
                            <!-- Remember me -->
                            <div class="form-check">
                            <input type="checkbox" name="checkbox" class="form-check-input" id="checkbox" required>
                            <label class="form-check-label" for="checkbox">Remember me</label>
                            </div>
                        </div>
                        <div>
                            <!-- Forgot password -->
                            <a href="forgotpass.php">Forgot password?</a>
                        </div>
                        </div>
                        <!-- Sign in button -->
                        <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit" name="login_user">Sign in</button>
                        <!-- Register -->
                        <p>Not a member?
                        <a href="register.php">Register</a>
                        </p>
                        <!-- Social login -->
                        <p>or sign in with:</p>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-youtube"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </form>
                    <!-- Form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>








