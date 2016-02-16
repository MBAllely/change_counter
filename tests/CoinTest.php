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
            $this->assertEquals(1, $result);
        }

    }

?>
