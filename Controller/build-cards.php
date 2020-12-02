<?php

    //setting the column variable as the first column is 2
    $colNum = 2;

    //loop to print each coupon in array
        function makeBuildCard($buildType, $buildDesc, $buildPrice, $buildImg, $colNum){
            if ($buildDesc != ''){
                $buildDesc;
            };
            echo "
                <div class='featured-builds-card'>
                    <div class='featured-builds-info'>
                        <h2 style='color: #ffffff'>{$buildType}</h2>
                        <p style='color: #ffffff'>{$buildDesc}</p>
                        <button class='featured-builds-btn btn btn-success'>\${$buildPrice}</button>
                    </div>
                    <div class='featured-builds-image'>
                        <img style='width: 500px; height: 500px;' src='./View/Public/Images/Featured-Builds/{$buildImg}'>
                    </div>
                </div>

            ";
    }

?>