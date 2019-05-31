<?php /*
+---+
| 1 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/
$food = [
    "Sandwich",
    "Pizza",
    "Noodles",
    "Pancakes"
];
/*
Print every array element in a new line.
*/
echo "{$food[0]}<br>";
echo "{$food[1]}<br>";
echo "{$food[2]}<br>";
echo "{$food[3]}<br>";


// task separator

echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Print the array elements from the previous exercise in unordered list.
<ul>
  <li>...</li>
  <li>...</li>
  <li>...</li>
  <li>...</li>
</ul>
*/
echo "<ul>";

    echo "<li>{$food[0]}</li>";
    echo "<li>{$food[1]}</li>";
    echo "<li>{$food[2]}</li>";
    echo "<li>{$food[3]}</li>";

echo "</ul>";



// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Turn the indexed array food from task 1 into associative array named food_assoc. 
Every array element of food becomes the key of food_assoc.
Every key of food_assoc has the value that describes the type of food (salad, main course or dessert).
*/
$food_assoc = [
    "Sandwich" => "breakfast",
    "Pizza"   => "Italian",
    "Noodles" => "Instant_food",
    "Pancakes" => "Dessert"
 ];
/*
Print every food and type in the separate lines so it renders like this:
pizza | main counrse 
cheesesake | desert 
*/

echo "$food[0] " ." | ". $food_assoc["Sandwich"];
echo"<br>";
echo "$food[1] " ." | ". $food_assoc["Pizza"];
echo"<br>";
echo "$food[2] " ." | ". $food_assoc["Noodles"];
echo"<br>";
echo "$food[3] " ." | ". $food_assoc["Pancakes"];



// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Break down the food_assoc from the task 3 to type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)
food_assoc:
  pizza:
    type: main course
    origin: Italy
  cheesesake: 
    type:desert
    origin: Greece
  
So, food_assoc is still going to be an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin
*/
$origin = [
    "breakfast" => "Continental",
    "Italian"   =>"Italy",
    "Instant_food" => "Asia",
    "Dessert" => "North America"
 ];
/*
Print every food, type and origin in the separate lines so it renders like this:
pizza | main counrse | Italy
cheesesake | desert | Greece
*/
echo "$food[0] " ." | ". $food_assoc["Sandwich"] . " | " . $origin["breakfast"];
echo"<br>";
echo "$food[1] " ." | ". $food_assoc["Pizza"] . " | " . $origin["Italian"];
echo"<br>";
echo "$food[2] " ." | ". $food_assoc["Noodles"] . " | " . $origin["Instant_food"];
echo"<br>";
echo "$food[3] " ." | ". $food_assoc["Pancakes"] . " | " . $origin["Dessert"];
echo"<br>";
// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
Print the array from task 4 in html table:
<table>
  <tr>
    <th>food</th>
    <th>type</th>
    <th>origin</th>
  </tr>
  <tr>
    <td>pizza</td>
    <td>main course</td>
    <td>Italy</td>
  </tr>
  <tr>
    <td>cheesecake</td>
    <td>desert</td>
    <td>Greece</td>
  </tr>
</table>
*/
echo "<table cellpadding='10' border='1'>";
    echo "<tr> <th>food</th> <th>type</th> <th>origin</th></tr>";
    echo "<tr><td>{$food[0]}</td> <td>{$food_assoc["$food[0]"]}</td>
    <td>{$origin["breakfast"]} </td></tr>";
    echo "<tr><td>{$food[1]}</td> <td>{$food_assoc["$food[1]"]}</td>
    <td>{$origin["Italian"]} </td></tr>";
    echo "<tr><td>{$food[2]}</td> <td>{$food_assoc["$food[2]"]}</td>
    <td>{$origin["Instant_food"]} </td></tr>";
    echo "<tr><td>{$food[3]}</td> <td>{$food_assoc["$food[3]"]}</td>
    <td>{$origin["Dessert"]} </td></tr>";
echo "</table>";
?>