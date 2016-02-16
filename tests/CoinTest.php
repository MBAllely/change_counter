<?php

    require_once "src/Coins.php";

    class CoinTest extends PHPUnit_Framework_TestCase
    {

        function test_coins_quarters()
        {
            //Arrange
            $test_Coin = new Coins;
            $input = 30;

            //Act
            $result = $test_Coin->coinSort($input);

            //Assert
            $this->assertEquals("quarters:1 dimes:0 nickels:1", $result);
        }

        function test_coins_dimes()
        {
            //Arrange
            $test_Coin = new Coins;
            $input = 15;

            //Act
            $result = $test_Coin->coinSort($input);

            //Assert
            $this->assertEquals("quarters:0 dimes:1 nickels:1", $result);
        }

        function test_coins_nickels()
        {
            //Arrange
            $test_Coin = new Coins;
            $input = 7;

            //Act
            $result = $test_Coin->coinSort($input);

            //Assert
            $this->assertEquals("quarters:0 dimes:0 nickels:1", $result);
        }



    }

?>
