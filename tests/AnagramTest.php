<?php

    require_once "src/Anagram.php";

    class AnagramTest extends PHPUnit_Framework_TestCase
    {

        function test_anagram_oneWord()
        {
            //Arrange
            $test_Anagram = new Anagram;
            $input = "bread";
            $wordsinput = "beard";

            //Act
            $result = $test_Anagram->anagramSort($input, $wordsinput);

            //Assert
            $this->assertEquals("beard", $result);
        }

    }

?>
