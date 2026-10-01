<?php

$indexedArray = [225, "Dreams", "Glass", 30, 25, 1, "Globe"];

$associativeArray = [
    "0" => "Couch",
    "Ice" => "India",
    "6" => "Box",
    "Trip" => "Range"
];

$combinedArray = array_merge($indexedArray, $associativeArray);

echo "<h3>Indexed Array:</h3>";
print_r($indexedArray);

echo "<h3>Associative Array:</h3>";
print_r($associativeArray);

echo "<h3>Combined Array:</h3>";
print_r($combinedArray);

echo "<h3>3rd value from Indexed Array: " . $indexedArray[2] . "</h3>";

echo "<h3>Value for key 'Ice': " . $associativeArray["Ice"] . "</h3>";

?>