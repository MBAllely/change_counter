<?php
    class Coins
    {
        private $input;

        function __construct($input)
        {
            $this->input = $input;
        }

        function getInput()
        {
            return $this->input;
        }

        function coinSort()
        {
            $dollars = 0;
            $quarters = 0;
            $dimes = 0;
            $nickels = 0;
            $pennies = 0;

            while ($this->input >= 1) {
                $this->input -= 1.0;
                $dollars += 1;
            }
            while ($this->input > .24) {
                $this->input -= .25;
                $quarters += 1;
            }
            while ($this->input > 0.09) {
                $this->input -= .10;
                $dimes += 1;
            }
            while ($this->input > .04) {
                $this->input -= .05;
                $nickels += 1;
            }
            while ($this->input > .009) {
                $this->input -= .01;
                $pennies += 1;
            }
            $this->input = 0; //this is here because weird stuff happens without it.  HAUNTED.
            return "dollars:" . $dollars . " \nquarters:" . $quarters . " \ndimes:" . $dimes . " \nnickels:" . $nickels . " \npennies:" . $pennies;


        }
    }

 ?>
