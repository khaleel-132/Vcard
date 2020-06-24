<?php
$firstnum = 8;
$secondnum = 9;
$operator ="Add";
$result = '';
    switch ($operator) {
        case "Add":
           $result = $firstnum + $secondnum;
           echo $result;
            break;
        case "Sub":
           $result = $firstnum - $secondnum;
           echo $result;
            break;
        case "Mul":
            $result = $firstnum * $secondnum;
            echo $result;
            break;
        case "Div":
            $result = $firstnum / $secondnum;
            echo $result;
    }
?>