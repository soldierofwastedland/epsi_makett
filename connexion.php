<?php
require('app/Autoload.php');
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
<!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="bouftou.jpg" id="icon" alt="User Icon" />
    </div>

    <?php if(isset($_POST['login']) && isset($error)) { echo $error; }?>
    <!-- Login Form -->
    <form name="connexion" method="POST" action="">
      <input type="text" id="login" class="fadeIn second" name="identifiant" placeholder="login">
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="password" >
      <input type="submit" name="login" class="fadeIn fourth" value="Log In">
    </form>

  </div>
</div>