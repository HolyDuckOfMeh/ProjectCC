<?php

    //setting the column variable as the first column is 2
    $colNum = 2;

    //loop to print each coupon in array
        function makePizzaCard($pizName, $pizSlices, $pizComments, $colNum){
            if ($pizComments != ''){
                $pizComments = "\"".$pizComments."\"";
            };
            echo "
                <div class='pizza-time-person border-shadow'>
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