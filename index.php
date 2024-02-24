<?php
include("./pages/mymethods.php");
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Dance | Dilse</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="/index.php"><b>Admin</b>Login</a>
      </div><!-- /.login-logo -->

      <div class="">
        <p class="">Sign in admin page</p>
        <form  action="" method="post">

          <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Email Id" name="emailid"/>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>

          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password" name="password"/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>

          <div class="row" style="padding: 15px;">
            <div class="col-xs-8">    
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox"> Remember Me
                </label>
              </div>                        
            </div> <!-- /.col -->

            <div class="col-xs-4">
              <input type="submit" class="btn btn-primary btn-block btn-flat" name="login" id="login" value="log In">
            </div> <!-- /.col -->
          </div>
        </form>
      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <?php
    if(isset($_POST['login']))
    {
        //echo "success";
        $emailid = $_POST['emailid'];   
        $password=$_POST['password'];

        $sql="select *from login where emailid='".$emailid."' AND password='".$password."'";
   
        $conn = dbConnect();      
        $result = mysqli_query($conn,$sql);

        //echo 'Record'.mysqli_num_rows($result);

        if(mysqli_num_rows($result)>0)
        {
          //echo "success";
         header('location:./pages/dashboard.php');   
        }
     
        
    }


    ?>

    
    

    <!-- jQuery 2.1.3 -->
    <script src="../../plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="../../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="../../plugins/iCheck/icheck.min.js" type="text/javascript"></script>


    
  </body>
</html>
