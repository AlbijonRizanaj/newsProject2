<?php include "path.php"; ?>

<?php include(ROOT_PATH . '/controllers/users.php'); ?>
<?php include(ROOT_PATH . '/includes/header.php'); ?>



<div class="auth-content">
  <form action="login.php" method="post">
    <h3 class="form-title">LOGIN</h3>

    <?php include(ROOT_PATH . '/controllers/formErrors.php'); ?>

    <div>
      <label>Username</label>
      <input type="text" class="form-control" id="exampleInputUsername1" value="<?php echo $username; ?>" name="username" class="text-input">
    </div>
    <div>
      <label>Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" value="<?php echo $password; ?>" name="password" class="text-input">
    </div>
    <div>
      <button type="submit" name="login-btn" class="btn btn-primary">Submit</button>
    </div>
    <p class="login-register-btn">Or <a href="<?php echo BASE_URL . '/register.php' ?>">REGISTER</a></p>

  </form>
</div>

<div class="footer-margin">
</div>


<?php include(ROOT_PATH . '/includes/footer.php'); ?>