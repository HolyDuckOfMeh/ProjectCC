<?php

  include "./View/header.php";
  include "./View/navbar.php";

?>

    <!-- Featured Builds Welcome -->
      <div class='featured-welcome-grid'>
        <div class='featured-welcome'>
          <h2 style='color: #ffffff; font-weight: lighter; text-align: center;'>Featured Builds</h2>
          <p style='color: #ffffff; font-weight: lighter; text-align: center;'>A build for every kind of person. All in one place.</p>
        </div>
      </div>
    <!-- Featured Builds Welcome -->


<!-- Displays the builds -->
  <div class='featured-builds-grid' id="featured-grid">
      <!-- Loops though db rows of featured builds -->
        <?php
                $colNum = 2;

                while($row = $pizzaGet->fetch(PDO::FETCH_ASSOC)){
                    // Variables
                        $pizName = $row['name'];
                        $pizSlices = $row['slices_eaten'];
                        $pizComments = $row['comments'];

                    // Variables

                    makePizzaCard($pizName, $pizSlices, $pizComments, $colNum);
                    $colNum++;
                }

            ?>
  </div>


<?php

  include "./View/footer.php"

?>