<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' 
    integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
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

</head>
<body>
      <!-- Material form register -->
      <div class="container-fluid">
          <div class="row justify-content-center">
              <div class="col-md-4 mt-3 rounded ">
                <div class="card ">
                    <h5 class="card-header info-color white-text text-center py-4">
                        <strong>Sign up</strong>
                    </h5>
                    <!--Card content-->
                    <div class="card-body px-lg-5 pt-0">
                        <!-- Form -->
                        <form class="text-center" action="register.php" method="POST">
                        <?php include('errors.php'); ?>
                            <div class="form-row">
                                <div class="col">
                                    <!-- First name -->
                                    <div class="md-form">
                                        <input type="text" name="fname" id="fname" class="form-control" placeholder="First name">
                                    </div>
                                </div>
                                <div class="col">
                                    <!-- Last name -->
                                    <div class="md-form">
                                        <input type="text" name="lname" id="lname" class="form-control" placeholder="Last name">
                                    </div>
                                </div>
                            </div>
                            <!-- E-mail -->
                            <div class="md-form mt-0">
                                <input type="email" id="email" name="email" class="form-control"placeholder="E-mail">
                            </div>

                            <!-- Phone number -->
                            <div class="md-form">
                                <input type="tel" name="phone_number" id="phone_number" class="form-control" placeholder="Phone number">
                            </div>

                            <!-- Password -->
                            <div class="md-form">
                                <input type="password" name="password_1" id="password_1" class="form-control" placeholder="Password">
                            </div>

                             <!-- Confirm password-->
                             <div class="md-form">
                                <input type="password" name="password_2" id="password_2" class="form-control" placeholder="Confirm password">
                            </div>

                            <!-- Sign up button -->
                            <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0 " type="submit" name="reg_user">Sign Up</button>
                            <!-- Social register -->
                            <p>or sign up with:</p>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-youtube"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <hr>
                            <!-- Terms of service -->
                            <em>Already have account? <a href="signin.php">Sign in</a></em>
                        </form>
                        <!-- Form -->
                    </div>
                </div>
                <!-- Material form register -->
            </div>
        </div>
    </div>

</body>
</html>

