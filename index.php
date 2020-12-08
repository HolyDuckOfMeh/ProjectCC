<?php

  include "./View/header.php";
  include "./View/navbar.php";
  include "./View/newsletter.php";

?>

    <!-- Top Half -->
      <div class='welcome-grid'>
        <div class='welcome-background'>
          <!-- Text Left --> 
            <div class='welcome-message'>
              <div class='box-background'>
                <h2>Welcome to Corn-Puter Computers</h2>
                <p>Everything you need in one place</p>
              </div>
            </div>
          <!-- Text Left -->
        </div>
      </div>
    <!-- Top Half -->

    <!-- Home Featured Builds -->
      <div class='home-featured-grid'>
        <div class='home-featured-header'>
          <h2>Featured Builds</h2>
        </div>
        <div class='home-featured-desc'>
          <p>Check out our latest builds with sleek designs.</p>
        </div>
        <a href="http://localhost/FIT-Web-Course/ProjectCC/featured-builds.php" class='btn-home-featured btn btn-success'>Featured Builds</a> 
        <div class='home-featured-img'>
        <img class='home-featured-img' src='./View/Public/Images/PCBuild.jpg'>
        </div>
      </div>
    <!-- Home Featured Builds -->

<?php

  include "./View/footer.php"

?>