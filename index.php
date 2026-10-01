<?php

// Student marks
$marks = [
    "Mark 1" => 28,
    "Mark 2" => 67,
    "Mark 3" => 95
];

// Find the category for one mark using if / elseif / else
function getCategory($mark) {
    if ($mark > 90) {
        return "Good";
    } elseif ($mark > 35 && $mark < 70) {
        return "Average";
    } elseif ($mark < 35) {
        return "Fail";
    } else {
        return "No Category";
    }
}

// Show which condition matched, so the trainer can see the logic
function getCondition($mark) {
    if ($mark > 90) {
        return "$mark &gt; 90";
    } elseif ($mark > 35 && $mark < 70) {
        return "$mark &gt; 35 &amp;&amp; $mark &lt; 70";
    } elseif ($mark < 35) {
        return "$mark &lt; 35";
    } else {
        return "No condition matched";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Performance Categories</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Task 18: Using Conditional Statements to Determine Student Performance Categories</h1>

    <div class="section">
        <h2>Conditions Used</h2>
        <table>
            <tr><th>Condition</th><th>Category</th></tr>
            <tr><td><code>if ($mark &gt; 90)</code></td><td>Good</td></tr>
            <tr><td><code>elseif ($mark &gt; 35 &amp;&amp; $mark &lt; 70)</code></td><td>Average</td></tr>
            <tr><td><code>elseif ($mark &lt; 35)</code></td><td>Fail</td></tr>
        </table>
    </div>

    <div class="section">
        <h2>Student Results</h2>
        <table>
            <tr><th>Mark</th><th>Value</th><th>Condition Matched</th><th>Category</th></tr>
            <?php
            foreach ($marks as $label => $mark) {
                $category = getCategory($mark);
                echo "<tr>";
                echo "<td>$label</td>";
                echo "<td>$mark</td>";
                echo "<td><code>" . getCondition($mark) . "</code></td>";
                echo "<td class=\"cat-" . strtolower($category) . "\">$category</td>";
                echo "</tr>\n";
            }
            ?>
        </table>

        <h3>Summary</h3>
        <ul>
            <?php
            foreach ($marks as $label => $mark) {
                echo "<li>$label = $mark &rarr; <strong>" . getCategory($mark) . "</strong></li>\n";
            }
            ?>
        </ul>
    </div>

    <div class="section">
        <h2>Previous Tasks</h2>
        <ul>
            <li><a href="comparison-logical-operators.html">Task 16: Comparison and Logical Operators</a></li>
            <li><a href="multidimensional-arrays.html">Multidimensional Arrays</a></li>
            <li><a href="basic-arrays.html">Basic Arrays</a></li>
        </ul>
    </div>
</div>
</body>
</html>
