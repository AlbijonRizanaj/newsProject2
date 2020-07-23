<?php include "path.php"; ?>
<?php include(ROOT_PATH . '/controllers/users.php'); ?>
<?php include(ROOT_PATH . '/includes/header.php'); ?>


<div class="auth-content">
  <form action="register.php" method="post">
    <h3 class="form-title">REGISTER</h3>

    <?php include(ROOT_PATH . '/controllers/formErrors.php'); ?>

    <div>
      <label>Username</label>
      <input type="text" class="form-control" id="exampleInputUsername1" value="<?php echo $username; ?>" name="username" class="text-input">
    </div>
    <div>
      <label>Email</label>
      <input type="email" class="form-control" id="exampleInputEmail1" value="<?php echo $email; ?>" name="email" class="text-input">
    </div>
    <div>
      <label>Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" value="<?php echo $password; ?>" name="password" class="text-input">
    </div>
    <div>
      <label>Password Confirmation</label>
      <input type="password" class="form-control" id="exampleInputPassword1" value="<?php echo $passwordConf; ?>" name="passwordConf" class="text-input">
    </div>
    <div>
      <button type="submit" class="btn btn-primary" name="register-btn">Submit</button>
    </div>
    <p class="login-register-btn">Or <a href="<?php echo BASE_URL . '/login.php' ?>">LOGIN</a></p>

  </form>
</div>



<?php include(ROOT_PATH . '/includes/footer.php'); ?>