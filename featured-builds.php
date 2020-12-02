<?php

  include "./View/header.php";
  include "./Controller/db_conn.php";
  include "./Controller/build-cards.php";
  include "./Model/query-build.php";
  include "./View/navbar.php";
  include "./View/newsletter.php";

  $database = new Database();
  $db = $database->connect();

  $builds = new FeaturedBuilds($db);

  $buildsGet = $builds->prodRead();

?>

    <!-- Featured Builds Welcome -->
      <div class='featured-welcome-grid'>
        <div class='featured-welcome'>
          <h2 style='color: #ffffff; font-weight: lighter; text-align: center;'>Featured Builds</h2>
          <p style='color: #ffffff; font-weight: lighter; text-align: center;'>A build for every kind of person. All in one place.</p>
        </div>
      </div>
    <!-- Featured Builds Welcome -->

<!-- Displays person and pizza slices eaten -->
<div class='featured-builds-grid' id="featured-builds">
        <!-- Loops though people (db rows) -->


            <!-- Put your people cards here, they can be listed vertically -->


                <?php
                        $colNum = 2;

                        while($row = $buildsGet->fetch(PDO::FETCH_ASSOC)){
                            // Variables
                                $buildType = $row['Type'];
                                $buildDesc = $row['Description'];
                                $buildPrice = $row['Price'];
                                $buildImg = $row['Image'];


                            // Variables

                            makeBuildCard($buildType, $buildDesc, $buildPrice, $buildImg, $colNum);
                            $colNum++;
                        }

                    ?>
                </div>
                
        <!-- Loops though people (db rows) -->
    </div>


    
<?php

  include "./View/footer.php"

?>