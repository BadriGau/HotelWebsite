<?php
session_start();
if (isset($_SESSION['name'])) {
	header('Location: header.php');
	exit();
}

?>
<!DOCTYPE html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"/>
    <title>Login Page</title>
      <link rel="stylesheet" type="text/css" href="css/background.css"/>
  </head>

    <body class="bg-dark">
        <div class="container">
            <div class="row justify-content-center">
            <div class="col-lg-5 bg-light mt-5 px-0">
                <h3 class="text-center text-light bg-danger p-3">Login</h3>
                   <form action="login_process.php" method="post" class="p-4 ">
                     <div class="form-group">
                    <label>Username</label>
                <input type="text" class="form-control"  name ="username"  placeholder="Enter username" required>
             </div>
          <div class="form-group">
          <label>password</label>
           <input type="password" class="form-control"  placeholder ="Enter password"    name="password" required>
           </div>
            <input type="submit" class="form-control btn btn-success" name="submit" value="Submit">
                        <?php
                        if(@$_GET['invalid']==true)
                        {
                            ?>
                        <div class="alert-light text-danger text-center py-3"><?php echo $_GET['invalid']?>
                                <?php
                        }
                        ?>
                        </div>
                  </form>
                </div>
            </div>
        </div>
    </body>
</html>