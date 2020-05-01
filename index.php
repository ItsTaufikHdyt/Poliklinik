<html>
  <head>
    <title>Poliklinik | Login</title>
    <link href="css/style.css" rel="stylesheet" media="screen">
    <link href="asset/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link  href="asset/css/bootstrap-responsive.min.css"  rel ="stylesheet"> 
    <link rel="shoutcut icon" href="logo.png">
    <link href="asset/css/style.css" rel="stylesheet" media="screen">

  </head>
  <body>
    <div class="topbar"></div>
    <div class="col-md-3 col-md-offset-4 form-login">
        <div class="outter-form-login">
        <div class="logo-login">
            <em class="glyphicon glyphicon-user"></em>
        </div>
            <form action="ceklog.php" class="inner-login" method="post">
            <h3 class="text-center title-login">Login Member</h3>
                <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="Username">
                </div>

                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                
                <input type="submit" class="btn btn-block btn-primary" value="LOGIN" />
                
                <div class="text-center forget">
                </div>
            </form>
        </div>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
