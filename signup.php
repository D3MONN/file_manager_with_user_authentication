<?php
require "header.php";
?>

<main>
   <div class="wrapper-main">
     <section class="section-default">
        <h1>Signup</h1>
        <form action="includes/signup.inc.php" method="post">
          <input type="text" name="uid" placeholder="Username"></input>
          <input type="text" name="mail" placeholder="Email"></input>
          <input type="password" name="pwd" placeholder="password"></input>
          <input type="password" name="pwd-repeat" placeholder="password"></input>
          <button type="submit" name="signup-submit">Signup</button>
        </form>
     </section>
   </div>
   </div>
</main>

<?php
require "footer.php";
?>
