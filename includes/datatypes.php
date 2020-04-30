<?php
// Basic assignment.
$myMessage = 'Welcome to my PHP Blog Assignment!';
# This is also a comment!
/*
  Multi-line
      comments

    yay!
 */

/**
 * Data-Types.
 */

 // String.
$myString = 'Hello, World!';

// Integer.
$myInteger = 34;

// Float / Double.
$myFloat = 3.14;

// Boolean.
$myBoolTrue = TRUE;
$myBoolFalse = false;

// Null.
$myNull = NULL;

// Object.
$myObject = new stdClass();

// Array.
$myArray = ['First Item', 2, 'third item'];
$myOtherArray = array(
  $myString,
  $myInteger,
  $myFloat,
  $myBoolTrue,
  $myBoolFalse,
  $myNull,
  $myObject,
  $myArray
);

/**
 * Strings.
 */

$string1 = 'Hello, my name is... ';
$string2 = 'Slim Shady! ';
$string3 = 'What!?! ';
$string4 = 'Who?!? ';
$string5 = ' *deejee scratch* ';
$string6 = 'Stephane';

// We concatenate strings using the "." character. ("+" is reserved for addition.)
$concattedString = $string1 . $string3 . $string1 . $string4 . $string5 . $string2;
// Difference between single and double quotes.
$mySingleQuoteHelloString = 'Hi there! My name is $string6 aka Stephane';
// Double quotes are PARSED. PHP checks for variable names to echo out.
$myDoubleQuoteHelloString = "Howdy there! My name is $string6";
// This is more specific, and would be good if you have overlapping variable names.
$myDoubleQuoteHelloString2 = "Hello! My name is {$string6}";
