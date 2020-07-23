<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="main.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css" />
  <title>News Project</title>
</head>


<body>
  <header>
    <div class="container">

      <div id="logo">
        <a href="<?php echo BASE_URL . '/news2.php' ?>">NEWS</a>
      </div>

      <div id="links">
        <a href="<?php echo BASE_URL . '/news2.php' ?>">HOME</a>
        <a href="<?php echo BASE_URL . '/science.php' ?>">SCIENCE</a>
        <a href="<?php echo BASE_URL . '/technology.php' ?>">TECH</a>


        <?php if (isset($_SESSION['id'])) : ?>
          <a href="<?php echo BASE_URL . '/register.php' ?>" class="dropdown-toggle" type="link" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-user"></i>
            <?php echo $_SESSION['username']; ?>
          </a>
          <div class="dropdown-menu">
            <a href="<?php echo BASE_URL . '/logout.php' ?>" class="dropdown-item" type="button">LOG OUT</a>
          </div>


        <?php else : ?>
          <a href="<?php echo BASE_URL . '/register.php' ?>" class="dropdown" type="link" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bars"></i>
          </a>
          <div class="dropdown-menu">
            <a href="<?php echo BASE_URL . '/login.php' ?>" class="dropdown-item" type="button">LOG IN</a>
            <a href="<?php echo BASE_URL . '/register.php' ?>" class="dropdown-item" type="button">SING IN</a>
          </div>
          </a>
        <?php endif; ?>
      </div>
    </div>
  </header>