
<?php include('server1.php') ?>

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
                        <strong>New Password</strong>
                    </h5>
                    <!--Card content-->
                    <div class="card-body px-lg-5 pt-0">
                        <!-- Form -->
                        <form class="text-center" action="resetpassword.php" method="POST">
                        <?php include('errors.php'); ?>
                            <div class="form-row">
                                <div class="col">

                            <!-- Password -->
                            <div class="md-form">
                                <input type="password" name="password" id="password" class="form-control" placeholder="New Password">
                            </div>
                            <!-- Sign up button -->
                            <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0 " type="submit" name="submit">Sign Up</button>
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

