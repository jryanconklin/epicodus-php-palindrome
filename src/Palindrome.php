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


    }



?>
