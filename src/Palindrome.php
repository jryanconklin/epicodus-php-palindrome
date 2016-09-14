<?php

class Palindrome
    {
        function palindromeCheck($input)
        {
            $input = strval($input);
            $input = strtolower($input);
            $reversed = str_split($input);
            $reversed = array_reverse($reversed);
            // $reversed = strrev($input);


            // $reversed = array();
            // for ($i=strlen($input)-1; $i >= 0 ; $i--) {
            //     array_push($reversed, $input[$i]);
            // }

            $reversed = implode("", $reversed);
            if ($input == $reversed) {
                return true;
            } else {
                return false;
            }

        }

        function palindromeIdentifier($input)
        {
            $matches = array();
            $words = explode(" ", $input);
            foreach ($words as $word) {
                $output = $this->palindromeCheck($word);
                if ($output == true && !in_array($word, $matches)) {
                    array_push($matches, $word);
                }
            }
            return $matches;

        }


    }



?>
