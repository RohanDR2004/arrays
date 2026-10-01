<?php

// Global variable
$number = 90;

// Function 1: add 10 to the global variable
function add() {
    global $number;
    $old = $number;
    $number = $number + 10;
    echo "<p class=\"result\">Inside add(): $old + 10 = $number</p>\n";
}

// Function 2: subtract 50 from the global variable
function sub() {
    global $number;
    $old = $number;
    $number = $number - 50;
    echo "<p class=\"result\">Inside sub(): $old - 50 = $number</p>\n";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Variable Functions</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Task 22: Displaying Updated Global Variable Using Add and Subtract Functions</h1>

    <div class="section">
        <h2>PHP Code Used</h2>
        <pre>$number = 90;

function add() {
    global $number;
    $number = $number + 10;
    echo $number;
}

function sub() {
    global $number;
    $number = $number - 50;
    echo $number;
}

add();
sub();</pre>
    </div>

    <div class="section">
        <h2>Output</h2>

        <h3>Initial global value</h3>
        <p class="result">$number = <?php echo $number; $initial = $number; ?></p>

        <h3>Calling add()</h3>
        <?php add(); ?>
        <p>Global <code>$number</code> after add(): <strong><?php echo $number; $after_add = $number; ?></strong></p>

        <h3>Calling sub()</h3>
        <?php sub(); ?>
        <p>Global <code>$number</code> after sub(): <strong><?php echo $number; $after_sub = $number; ?></strong></p>

        <p class="note">The <strong>global</strong> keyword lets each function change the same <code>$number</code> variable.
            So sub() starts from 100 (the value left by add()), not from 90.</p>

        <h3>Summary</h3>
        <table>
            <tr><th>Step</th><th>Value of $number</th></tr>
            <tr><td>Initial global value</td><td><?php echo $initial; ?></td></tr>
            <tr><td>After add()</td><td><?php echo $after_add; ?></td></tr>
            <tr><td>After sub()</td><td><?php echo $after_sub; ?></td></tr>
        </table>
    </div>

    <div class="section">
        <h2>Previous Tasks</h2>
        <ul>
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
