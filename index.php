<?php
function calculator($firstnum,$secondnum,$operator){
    switch ($operator) {
        case "Add":
           $result = $firstnum + $secondnum;
           echo 'The Result After Addition Is : ' .$result;
            break;
        case "Sub":
           $result = $firstnum - $secondnum;
           echo 'The Result After Substraction Is : ' .$result;
            break;
        case "Mul":
            $result = $firstnum * $secondnum;
            echo 'The Result After Multiplication Is : ' .$result;
            break;
        case "Div":
            $result = $firstnum / $secondnum;
            echo 'The Result After Division Is : ' .$result;
    }
}
calculator(100,100,'Add');
calculator(100,100,'Sub');
calculator(100,100,'Mul');
calculator(100,100,'Div');
?>