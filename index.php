<?php
require "header.php";
?>

<main>
   <div class="wrapper-main">
     <section class="section-default">
     <?php
     if(isset($_SESSION['userid'])){
         echo  '<p class="login-status">You are logged in</p>';
     }
     else{
         echo '<p class="login-status">You are logged out</p>';
     }
     ?>
     </section>
   </div>
   </div>
</main>

<?php
require "footer.php";
?>
