<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>login</title>
  </head>
  <body>
    <header>
       <nav>
         <a href ="#">
           <img srs="image/download.png" alt="logo">
         </a>
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="filemanager.php">filemanager</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
           </nav> 
          <div class="header-login">
          <?php
             if(isset($_SESSION['userid'])){
               echo '<form action="includes/logout.inc.php" method = "post">
               <button type="submit" name="logout-submit">Logout<buttkon>
               </form>';
             }
             else{

              echo '<form action="includes/login.inc.php" method = "post">
              <input type="text" name="mailuid" placeholder="Username/email">
              <input type="password" name="pwd" placeholder="password">
              <button type="submit" name="login-submit">Login<button>
              </form>
              <a href="signup.php">Signup</a>';
             }
          ?>
          </div>  
    </header>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>