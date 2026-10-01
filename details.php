<?php

// Multidimensional associative array with name, age and DOB
$students = [
    ["name" => "Rohan", "age" => 22, "DOB" => "15-05-2004"],
    ["name" => "Rahul", "age" => 21, "DOB" => "20-08-2005"],
    ["name" => "Arun", "age" => 23, "DOB" => "02-01-2003"]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include and Require in PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Task 26: Defining and Including PHP Files for Student Information Display</h1>

    <div class="section">
        <h2>Student Information (details.php)</h2>
        <table>
            <tr><th>No.</th><th>Name</th><th>Age</th><th>DOB</th></tr>
            <?php
            foreach ($students as $index => $student) {
                echo "<tr>";
                echo "<td>" . ($index + 1) . "</td>";
                echo "<td>" . $student["name"] . "</td>";
                echo "<td>" . $student["age"] . "</td>";
                echo "<td>" . $student["DOB"] . "</td>";
                echo "</tr>\n";
            }
            ?>
        </table>
    </div>

    <div class="section">
        <h2>Including my_name.php</h2>
        <p>my_name.php contains: <code>echo "My Name: Rohan DR";</code></p>

        <h3>1. include "my_name.php";</h3>
        <?php include "my_name.php"; ?>
        <p class="note">include adds the file every time it is called. If the file is missing, PHP shows a warning and continues.</p>

        <h3>2. require "my_name.php";</h3>
        <?php require "my_name.php"; ?>
        <p class="note">require also adds the file every time. If the file is missing, PHP stops with a fatal error.</p>

        <h3>3. include_once "my_name.php";</h3>
        <?php
        $result = include_once "my_name.php";
        if ($result === true) {
            echo "<p class=\"result\">Not included again: my_name.php was already included above.</p>\n";
        }
        ?>
        <p class="note">include_once adds the file only if it has not been included before. It was already included in steps 1 and 2, so it is skipped.</p>

        <h3>4. require_once "my_name.php";</h3>
        <?php
        $result = require_once "my_name.php";
        if ($result === true) {
            echo "<p class=\"result\">Not included again: my_name.php was already included above.</p>\n";
        }
        ?>
        <p class="note">require_once works like require, but adds the file only once. It is skipped here for the same reason.</p>
    </div>

    <div class="section">
        <h2>Previous Tasks</h2>
        <ul>
            <li><a href="loop-multiplication.html">Task 24: Loop-Based Multiplication Function</a></li>
            <li><a href="global-variable-functions.html">Task 22: Global Variable Add and Subtract Functions</a></li>
            <li><a href="associative-array-loops.html">Task 20: Multidimensional Associative Array Loops</a></li>
            <li><a href="conditional-statements.html">Task 18: Conditional Statements (Student Performance)</a></li>
            <li><a href="comparison-logical-operators.html">Task 16: Comparison and Logical Operators</a></li>
            <li><a href="multidimensional-arrays.html">Multidimensional Arrays</a></li>
            <li><a href="basic-arrays.html">Basic Arrays</a></li>
        </ul>
    </div>
</div>
</body>
</html>
