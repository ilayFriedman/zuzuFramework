<?php
   ob_start();
   session_start();
   if(isset($_SESSION['valid']) && $_SESSION['valid'] == true){
    header('Refresh: 1; URL = index.php');
    die();
   }  
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="font/iconsmind-s/css/iconsminds.css" />
    <link rel="stylesheet" href="font/simple-line-icons/css/simple-line-icons.css" />
    <link rel="stylesheet" href="css/vendor/component-custom-switch.min.css" />
    <link rel="stylesheet" href="css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" href="css/vendor/perfect-scrollbar.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css">    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/jerosoler/Drawflow/dist/drawflow.min.css">
    <link rel="stylesheet" href="css/beautiful.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <script src="https://unpkg.com/micromodal/dist/micromodal.min.js"></script>
  <link rel="stylesheet" href="css/vendor/quill.snow.css" />
    <link rel="stylesheet" href="css/vendor/quill.bubble.css" />
</head>
<body>
 <?php
            $msg = '';
            
            if (isset($_POST['pwd']) && !empty($_POST['pwd'])) {
        
               if ($_POST['pwd'] == '1234') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'Demo';
                  
                 // echo 'You have entered valid use name and password';
                  header('Refresh: 2; URL = index.php');
                  die();
               }else {
                  $msg = 'Wrong username or password';
               }
            }
         ?>
<div class="container" style="text-align: center;margin-top: 100px;">
 <img src="zuzu form logo.jpeg" height="200px" width="200px" >
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    
    <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>

    <div class="form-group" style="text-align: center;">
      <!-- <label for="pwd">Password:</label> -->
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" required="required" style="width: 30%; margin: 25px auto;">
    </div>
    
    <button type="submit" class="btn btn-default" style="background-color: #e8e8e8; order: 2px solid #e7e7e7; text-align: center; margin: 0 auto;">Submit</button>
  </form>
</div>

</body>
</html>
