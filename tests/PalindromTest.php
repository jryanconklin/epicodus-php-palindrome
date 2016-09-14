<?php
    require_once "src/Palindrome.php";
    class PalindromeTest extends PHPUnit_Framework_TestCase
    {
        function test_PalindromeCheckTrue()
        {

            $testCheckTrue = new Palindrome;
            $input = "Hello Olleh";
            $output = $testCheckTrue->palindromeCheck($input);
            $this->assertEquals(true, $output);
        }

        function test_PalindromeCheckFalse()
        {

            $testCheckFalse = new Palindrome;
            $input = "dog";
            $output = $testCheckFalse->palindromeCheck($input);
            $this->assertEquals(false, $output);
        }

        function test_PalindromeCheckInt()
        {

            $testCheckFalse = new Palindrome;
            $input = 101;
            $output = $testCheckFalse->palindromeCheck($input);
            $this->assertEquals(true, $output);
        }

        function test_PalindromeIdentifier()
        {

            $testCheckFalse = new Palindrome;
            $input = "Hello Dad 101";
            $output = $testCheckFalse->palindromeIdentifier($input);
            $this->assertEquals(['Dad', '101'], $output);
        }


    }
?>
