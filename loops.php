<?php 

/*
+---+
| 1 |
+---+
Use while-loop to print the numbers 1 to 10.
*/
$i = 0;
while ( $i <= 10) {
	echo "$i<br>";
	$i++;
}

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Use the PHP function range(start, end, step) 
to create array of numbers 5 to 100 with the step 5 
(example: 5, 10, 15, ...)
*/
$num = range(5, 100, 5);

/*
Use for-loop and if-statement to print all odd numbers.

How to check if a number is odd or even? 
Divide it by 2, and if there is a remainder, the number is odd. 
Use modulus operator (outputs the remainder after division), 
for example: 
1 % 2 = 1 -> odd number
2 % 2 = 0 -> even number
3 % 2 = 1 -> odd number
4 % 2 = 0 -> even number
*/
for ($i=0; $i <sizeof($num) ; $i++) { 
	$div = $num[$i] % 2;
	//print_r($div);
	if ($div !== 0) {
		echo "$num[$i]<br>";
	}
}

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/
$favFoods = [
	"sandwich",
	"toast",
	"pancakes",
	"omellette"

];
/*
Use while-loop to print array elements (every food in a new row).
*/
$i = 0;
while ( $i < sizeof($favFoods)) {

		echo "$favFoods[$i]<br>";
		$i++;
}
/*
Use for-loop to print array elements (every food in a new row).
*/
for ($i=0; $i < sizeof($favFoods); $i++) { 
	
	echo "$favFoods[$i]<br>";
}
/*
Use foreach-loop to print array elements (every food in a new row).
*/
foreach ($favFoods as $key => $value) {
	echo "$favFoods[$key]<br>";
}

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Print the array from task 3 as unordered list. Printing has to be done inside the for-loop.

Before looping, you need to print the opening list-tag <ul>
After looping, you need to print the closing list-tag </ul>
*/
echo "<ul>";

for ($i=0; $i <sizeof($favFoods) ; $i++) { 
	
	echo "<li> $favFoods[$i]</li>";
}

echo "<ul>";


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
The array from task 3 is turned into associative array. 
The meal courses are broken down based on the type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)

$food_assoc = [
  "pizza" => [
    "type" => "main course",
    "origin" => "Italy"
  ],
  "cheesesake" => [
    "type" => "desert",
    "origin" => "Greece"
  ]
]

So, food_assoc is an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin.
*/
$favFoods = [
	"sandwich" => ["type" => "breakfast","origin" => "America"],
	"toast" => [
		"type" => "brunch",
		"origin" => "Canada"
	],
	"pancakes" => [
		"type" => "dessert",
		"origin" => "Italy"
	],
	"omellette" => [
		"type" => "fast-food",
		"origin" => "Egypt"
	]

];
/*
Loop through $food_assoc and use print_r() to print the entire meal course 
(entire array that includes type and origin).
*/
for ($i=0; $i < sizeof($favFoods) ; $i++) { 
	print_r($favFoods);
}
/*
Loop through $food_assoc and print the meal names (keys of $food_assoc)
as unordered list-items. Loop through the current meal (inner loop through sub-array) 
and print the type and origin as nested list items (see the example below).
*/
echo "<ul>";

foreach ($favFoods as $key => $value) {
	echo "<li>$key</li>";
	//print_r($value);
	echo "<ul>";
	foreach ($value as $k => $v) {
		echo "<li>$k:$v</li>";
	}

	echo "</ul>";
}

echo "</ul>";


?>