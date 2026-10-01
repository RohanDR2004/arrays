<?php

// Start with an empty multidimensional associative array
$students = [];

// 1. Insert 3 students (each student has a name and marks)
$students[] = ["name" => "Rohan", "marks" => 85];
$students[] = ["name" => "Rahul", "marks" => 72];
$students[] = ["name" => "Arun", "marks" => 91];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multidimensional Associative Array Loops</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Task 20: Inserting and Looping Through Elements in a Multidimensional Associative Array</h1>

    <div class="section">
        <h2>1. Inserting 3 Students</h2>
        <pre>$students = [];

$students[] = ["name" =&gt; "Rohan", "marks" =&gt; 85];
$students[] = ["name" =&gt; "Rahul", "marks" =&gt; 72];
$students[] = ["name" =&gt; "Arun", "marks" =&gt; 91];</pre>

        <h3>Array after inserting (print_r)</h3>
        <pre><?php print_r($students); ?></pre>

        <p class="note">Total students inserted: <strong><?php echo count($students); ?></strong></p>
    </div>

    <div class="section">
        <h2>2. Displaying All Elements Using Nested foreach Loops</h2>
        <pre>foreach ($students as $index =&gt; $student) {
    foreach ($student as $key =&gt; $value) {
        echo "$key: $value";
    }
}</pre>

        <h3>Output</h3>
        <?php
        // Outer loop: goes through each student
        foreach ($students as $index => $student) {
            echo "<h4>Student " . ($index + 1) . "</h4>\n";
            echo "<ul>\n";
            // Inner loop: goes through each key (name, marks) of the student
            foreach ($student as $key => $value) {
                echo "<li><strong>$key:</strong> $value</li>\n";
            }
            echo "</ul>\n";
        }
        ?>

        <h3>Same Data in a Table (using a foreach loop)</h3>
        <table>
            <tr><th>No.</th><th>Name</th><th>Marks</th></tr>
            <?php
            foreach ($students as $index => $student) {
                echo "<tr><td>" . ($index + 1) . "</td><td>" . $student["name"] . "</td><td>" . $student["marks"] . "</td></tr>\n";
            }
            ?>
        </table>
    </div>

    <div class="section">
        <h2>Previous Tasks</h2>
        <ul>
            <li><a href="conditional-statements.html">Task 18: Conditional Statements (Student Performance)</a></li>
            <li><a href="comparison-logical-operators.html">Task 16: Comparison and Logical Operators</a></li>
            <li><a href="multidimensional-arrays.html">Multidimensional Arrays</a></li>
            <li><a href="basic-arrays.html">Basic Arrays</a></li>
        </ul>
    </div>
</div>
</body>
</html>
