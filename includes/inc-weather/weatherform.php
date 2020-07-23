<?php include 'path.php'; ?>
<?php include(ROOT_PATH . '/jsCode.php'); ?>

<section>
  <div class="container">

    <div id="weather-div">
      <img id="weather-img" src="images/weather.png" alt="weather image">

      <form method="GET" action="news2.php" id="weather-search">
        <p id="weather-text">WEATHER</p>
        <div class="form-group">
          <label for="city">Enter the name of a city</label>
          <input type="text" name="city" class="form-control" id="city" placeholder="Search for a city">
        </div>
        <button class="btn btn-primary">Search</button>

        <div id="weather">
          <?php
          if ($weather) {
            echo '<div class="alert alert-success" role="alert">' . $weather . '</div>';
          } else if ($error) {
            echo '<div class="alert alert-danger" role="alert">' . $error . '</div>';
          }

          ?>
        </div>
      </form>

    </div>

  </div>
</section>