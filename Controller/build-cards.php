<?php

    //setting the column variable as the first column is 2
    $colNum = 2;

    //loop to print each coupon in array
        function makeBuildCard($pizName, $pizSlices, $pizComments, $colNum){
            if ($pizComments != ''){
                $pizComments;
            };
            echo "
                <div class='featured-build-card border-shadow'>
                    <div class='pizza-time-name'>
                        <h2>{$pizName}</h2>
                        <p>{$pizComments}</p>
                    </div>
                    <div class='pizza-time-slices-eaten'>
                        <h2>Slices Eaten: {$pizSlices}</h2>
                    </div>
                </div>

            ";
    }

?>