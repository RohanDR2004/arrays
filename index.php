<?php

// Function that takes two parameters, multiplies them and displays the result
function mul($a, $b) {
    $result = $a * $b;
    echo "<p class=\"result\">$a &times; $b = $result</p>\n";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop-Based Multiplication Function</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Task 24: Loop-Based Function for Multiplying Parameters and Displaying Outputs</h1>

    <div class="section">
        <h2>PHP Code Used</h2>
        <pre>function mul($a, $b) {
    $result = $a * $b;
    echo "$a x $b = $result";
}

for ($i = 1; $i &lt;= 5; $i++) {
    mul($i, $i + 5);
}</pre>
        <p class="note">The for loop runs <strong>5 times</strong> ($i = 1 to 5).
            On each iteration mul() is called with different values: <code>$i</code> and <code>$i + 5</code>.</p>
    </div>

    <div class="section">
        <h2>Output: 5 Multiplication Results</h2>
        <?php
        for ($i = 1; $i <= 5; $i++) {
            echo "<h3>Iteration $i: mul($i, " . ($i + 5) . ")</h3>\n";
            mul($i, $i + 5);
        }
        ?>
    </div>

    <div class="section">
        <h2>Previous Tasks</h2>
        <ul>
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
