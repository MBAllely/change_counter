<?php
    class Coins
    {
        function coinSort($input)
        {
            $quarters = 0;
            $dimes = 0;
            $nickels = 0;
            $pennies = 0;

            while ($input >= 25) {
                $input -= 25;
                $quarters += 1;
            }
            while ($input >= 10) {
                $input -= 10;
                $dimes += 1;
            }
            while ($input >= 5) {
                $input -= 5;
                $nickels += 1;
            }
            while ($input >= 1) {
                $input -= 1;
                $pennies += 1;
            }
            return "quarters:" . $quarters . " \ndimes:" . $dimes . " \nnickels:" . $nickels . " \npennies:" . $pennies;


        }
    }

 ?>
