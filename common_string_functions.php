<?php

////substr()
//return portion of a string

echo "Substring: ", substr('Hello', 1, 5), "<br/>";
//1st arg = The string to manipulate
//2nd arg = At which index the string is supposed to start
//3rd arg = At which index the string is supposed to end
//start from the back by providing negative number

////strlen()
//return string length
echo "String length: ", strlen('Hello'), "<br/>";

////strpos()
//finds first occurence of a specified substring
echo "Substring first occurance position: ", strpos('Hello World', 'l'), "<br/>";
//1st arg = The string to manipulate
//2nd arg = Substring to find position of.


////strrpos()
//as above, except it finds LAST occurance
echo "Substring last occurance: ", strrpos('Hello World', 'l'), "<br/>";

////trim()
//trims white space
$to_trim = '         Hello World          ';
echo var_dump($to_trim), "Returns a long string number because it counts all the spaces inside", "<br/>";
$trimmed = trim($to_trim);
echo var_dump($trimmed), 'After trimming white space(trims white space from beginning and end.)', "<br/>";

////strtoupper()
//to upper case
$to_upper_case = 'hello world';
echo strtoupper($to_upper_case), "<br/>";

////strtolower()
//to upper case
$to_lower_case = 'Hello World';
echo strtolower($to_upper_case), "<br/>";

////ucwords()
//capitalizes every string
$to_capitalize = 'hello world a aaa aaa';
echo ucwords($to_capitalize), "<br/>";

////str_replace()
//replace all occurances of a searched string with provided replacement

$to_replace = 'hello world';
echo str_replace('world', 'everyone', $to_replace), "<br/>";
//1st arg = The string to search for
//2nd arg = Replacement string
//3rd arg = String to be searched

////is_string()
//check if string
//returns 1 if the variable is of type string, otherwise it returns false/nothing.
$mystery_value1 = 'String';
$mystery_value2 = 42;

echo is_string($mystery_value1), "<br/>";
echo is_string($mystery_value2), "<br/>";

////gzcompress()
//compress a string
$to_compress = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum neque maxime voluptas dolores consectetur! Expedita debitis repudiandae fugit amet dolores quas sint fuga tenetur iure?';

$compressed = gzcompress($to_compress);
//echo $compressed;
$uncompressed = gzuncompress($compressed);
echo $uncompressed;
