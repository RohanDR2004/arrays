<?php

// Helper: turn a boolean into the text TRUE or FALSE
function tf($value) {
    return $value ? "TRUE" : "FALSE";
}

// Helper: print one table row (label, expression, result)
function row($label, $expression, $result) {
    $class = $result ? "true" : "false";
    echo "<tr><td>$label</td><td><code>$expression</code></td><td class=\"$class\">" . tf($result) . "</td></tr>\n";
}

// Helper: show the datatype of $a and $b using gettype() and var_dump()
function showTypes($a, $b) {
    echo "<p><strong>gettype(\$a):</strong> " . gettype($a) . " &nbsp; | &nbsp; <strong>gettype(\$b):</strong> " . gettype($b) . "</p>\n";
    echo "<pre>var_dump(\$a): ";
    var_dump($a);
    echo "var_dump(\$b): ";
    var_dump($b);
    echo "</pre>\n";
}

// Helper: print a table with all 8 comparison operators for $a and $b
function comparisonTable($a, $b) {
    echo "<table>\n<tr><th>Operator</th><th>Expression</th><th>Result</th></tr>\n";
    row("Equal (==)", "\$a == \$b", $a == $b);
    row("Not Equal (!=)", "\$a != \$b", $a != $b);
    row("Identical (===)", "\$a === \$b", $a === $b);
    row("Not Identical (!==)", "\$a !== \$b", $a !== $b);
    row("Greater Than (&gt;)", "\$a &gt; \$b", $a > $b);
    row("Less Than (&lt;)", "\$a &lt; \$b", $a < $b);
    row("Greater Than or Equal (&gt;=)", "\$a &gt;= \$b", $a >= $b);
    row("Less Than or Equal (&lt;=)", "\$a &lt;= \$b", $a <= $b);
    echo "</table>\n";
}

// Helper: print a table with the logical operators for $a and $b
function logicalTable($a, $b) {
    echo "<table>\n<tr><th>Operator</th><th>Expression</th><th>Result</th></tr>\n";
    row("AND (&amp;&amp;)", "(\$a &gt; 0) &amp;&amp; (\$b &gt; 0)", ($a > 0) && ($b > 0));
    row("AND (&amp;&amp;)", "(\$a &lt; \$b) &amp;&amp; (\$b &lt; 100)", ($a < $b) && ($b < 100));
    row("OR (||)", "(\$a &gt; 0) || (\$b &gt; 0)", ($a > 0) || ($b > 0));
    row("OR (||)", "(\$a &gt; 50) || (\$b &gt; 50)", ($a > 50) || ($b > 50));
    row("NOT (!)", "!(\$a &gt; 0)", !($a > 0));
    row("NOT (!)", "!(\$b &gt; 0)", !($b > 0));
    echo "</table>\n";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison and Logical Operators</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Task 16: Applying Comparison and Logical Operators on Variables with Type Verification</h1>

    <!-- ================= PART 1: COMPARISON OPERATORS ================= -->
    <div class="section">
        <h2>Part 1: Comparison Operators</h2>

        <h3>Case 1: $a = "raj"; $b = "raj";</h3>
        <?php
        $a = "raj";
        $b = "raj";
        showTypes($a, $b);
        comparisonTable($a, $b);
        ?>
        <p class="note">Both values are the same string, so == and === are both TRUE. Strings are compared alphabetically for &gt; and &lt;.</p>

        <h3>Case 2: $a = 90; $b = 34;</h3>
        <?php
        $a = 90;
        $b = 34;
        showTypes($a, $b);
        comparisonTable($a, $b);
        ?>
        <p class="note">90 is greater than 34, so &gt;, &gt;=, != and !== are TRUE.</p>

        <h3>Difference between == and === : $a = 90; $b = "90";</h3>
        <?php
        $a = 90;
        $b = "90";
        showTypes($a, $b);
        echo "<table>\n<tr><th>Operator</th><th>Expression</th><th>Result</th></tr>\n";
        row("Equal (==)", "\$a == \$b", $a == $b);
        row("Identical (===)", "\$a === \$b", $a === $b);
        row("Not Equal (!=)", "\$a != \$b", $a != $b);
        row("Not Identical (!==)", "\$a !== \$b", $a !== $b);
        echo "</table>\n";
        ?>
        <p class="note"><strong>==</strong> only checks the value (90 equals "90" → TRUE).
            <strong>===</strong> checks the value AND the datatype (integer is not string → FALSE).</p>
    </div>

    <!-- ================= PART 2: LOGICAL OPERATORS ================= -->
    <div class="section">
        <h2>Part 2: Logical Operators</h2>

        <h3>Case 1: $a = 14; $b = 40;</h3>
        <?php
        $a = 14;
        $b = 40;
        showTypes($a, $b);
        logicalTable($a, $b);
        ?>

        <h3>Case 2: $a = -2; $b = 70;</h3>
        <?php
        $a = -2;
        $b = 70;
        showTypes($a, $b);
        logicalTable($a, $b);
        ?>
        <p class="note"><strong>&amp;&amp;</strong> is TRUE only when both conditions are TRUE.
            <strong>||</strong> is TRUE when at least one condition is TRUE.
            <strong>!</strong> reverses the result.</p>
    </div>
</div>
</body>
</html>
