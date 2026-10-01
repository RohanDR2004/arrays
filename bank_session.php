<?php

// Page 1: start the session and store bank details in it
session_start();

$_SESSION["account_holder"] = "Rohan DR";
$_SESSION["account_number"] = "123456789012";
$_SESSION["bank_name"] = "Sample National Bank";
$_SESSION["ifsc_code"] = "SNBK0001234";
$_SESSION["branch"] = "Hubli";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Details - Store in Session</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Task 28: Creating and Displaying Bank Details with PHP Sessions</h1>

    <div class="section">
        <h2>Page 1: Storing Bank Details in the Session (bank_session.php)</h2>
        <pre>session_start();

$_SESSION["account_holder"] = "Rohan DR";
$_SESSION["account_number"] = "123456789012";
$_SESSION["bank_name"] = "Sample National Bank";
$_SESSION["ifsc_code"] = "SNBK0001234";
$_SESSION["branch"] = "Hubli";</pre>

        <p class="result">Bank details stored in the session successfully.</p>
        <p>Session ID: <code><?php echo session_id(); ?></code></p>

        <h3>Values now stored in $_SESSION</h3>
        <table>
            <tr><th>Session Key</th><th>Value</th></tr>
            <?php
            foreach ($_SESSION as $key => $value) {
                echo "<tr><td><code>\$_SESSION[\"$key\"]</code></td><td>$value</td></tr>\n";
            }
            ?>
        </table>

        <p class="note">Now open Page 2. It does not set any values. It only reads them from the session.</p>
        <p><a class="button" href="bank_details.php">Go to Page 2: Display Bank Details &rarr;</a></p>
    </div>

    <div class="section">
        <h2>Previous Tasks</h2>
        <ul>
            <li><a href="include-require.html">Task 26: Include and Require (Student Information)</a></li>
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
