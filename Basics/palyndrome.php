<?php
$word = strtolower(readline('Enter a word: '));
$reverse = strrev($word);
if($word === $reverse) {
    echo "$word is a palindrome";
} else {
    echo "$word is not a palindrome";
}
?>
