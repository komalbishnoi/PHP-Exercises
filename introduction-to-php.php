<?php

/*
+---+
| 1 | 
+---+
Print the sentence: Welcome to PHP!*/
$sentence = "Welcome to PHP!";
echo $sentence;



// task separator
echo "<hr style=\"margin 1rem 0\">";


/* 
+---+
| 2 | 
+---+
Print the sentence: PHP stands for "Hypertext Preprocessor"!
*/
$abb = "PHP stands for " . "\"Hypertext preprocessor\"". "!";

echo $abb;

// task separator
echo "<hr style=\"margin 1rem 0\">";

/* 
+---+
| 3 | 
+---+
Print the following sentence as a paragraph: PHP stands for "Hypertext Preprocessor"!
*/
$abb =  "PHP stands for " . "\"Hypertext preprocessor\"". "!";

echo "<p>" . $abb ."</p>";



// task separator
echo "<hr style=\"margin 1rem 0\">";

/* 
+---+
| 4 | 
+---+
Print the following acronyms - every acronym in a new line:

HTML - Stands for Hypertext Markup Language
CSS - Stands for Cascading Stylesheet
JS - Stands for JavaScript
PHP - Stands for Hypertext Preprocessor
SQL - Stands for Structural Query Language
*/
$abb = "HTML - Stands for Hypertext Markup Language" ."<br>" ."CSS - Stands for Cascading Stylesheet" ."<br>" ."JS - Stands for JavaScript" ."<br>" . "PHP - Stands for Hypertext Preprocessor" ."<br>" ."SQL - Stands for Structural Query Language";

echo $abb;
   
   
   
// task separator
echo "<hr style=\"margin 1rem 0\">";

/* 
+---+
| 5 | 
+---+
Print the following acronyms in unordered list - <ul> ... </ul>:

HTML - Stands for Hypertext Markup Language
CSS - Stands for Cascading Stylesheet
JS - Stands for JavaScript
PHP - Stands for Hypertext Preprocessor
SQL - Stands for Structural Query Language
*/
$abb = "<ul>
            <li>HTML - Stands for Hypertext Markup Language</li> <li>CSS - Stands for Cascading Stylesheet</li>
            <li>JS - Stands for JavaScript</li> 
            <li>PHP - Stands for Hypertext Preprocessor</li> <li>SQL - Stands for Structural Query Language</li> 
        </ul>";
echo $abb;
   
?>