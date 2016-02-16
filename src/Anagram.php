<?php
    class Anagram
    {
        function anagramSort($input, $words_compare)
        {
            $input_split = str_split($input); //splits input
            sort($input_split); //sorts input
            $sorted_input = implode($input_split); //joins sorted input

            $explode_words_compare = explode(", ", $words_compare);
            $compared_array = [];
            foreach ($explode_words_compare as $key => $word) {
                $split_compare_word = str_split($word);
                sort($split_compare_word);
                $joined = implode($split_compare_word);

                if($joined == $sorted_input){
                    array_push($compared_array, $explode_words_compare[$key]);
                }
            }
            $result = implode(", ", $compared_array);
            return $result;
        }
    }

 ?>
