<?php

// Page 2: start the same session and read the bank details from it
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Details - Read from Session</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Task 28: Creating and Displaying Bank Details with PHP Sessions</h1>

    <div class="section">
        <h2>Page 2: Displaying Bank Details from the Session (bank_details.php)</h2>
        <pre>session_start();

echo $_SESSION["account_holder"];
echo $_SESSION["account_number"];
...</pre>

        <?php if (isset($_SESSION["account_holder"])) { ?>

            <p class="result">Bank details received from the session.</p>
            <p>Session ID: <code><?php echo session_id(); ?></code> (same as Page 1)</p>

            <table>
                <tr><th>Field</th><th>Value</th></tr>
                <tr><td>Account Holder Name</td><td><?php echo $_SESSION["account_holder"]; ?></td></tr>
                <tr><td>Account Number</td><td><?php echo $_SESSION["account_number"]; ?></td></tr>
                <tr><td>Bank Name</td><td><?php echo $_SESSION["bank_name"]; ?></td></tr>
                <tr><td>IFSC Code</td><td><?php echo $_SESSION["ifsc_code"]; ?></td></tr>
                <tr><td>Branch</td><td><?php echo $_SESSION["branch"]; ?></td></tr>
            </table>

            <p class="note">These values were never set on this page. They were stored in $_SESSION on Page 1
                and passed to this page through the session.</p>

        <?php } else { ?>

            <p class="result">No bank details found in the session.</p>
            <p class="note">Open Page 1 first so the details are stored in the session.</p>

        <?php } ?>

        <p><a class="button" href="bank_session.php">&larr; Back to Page 1</a></p>
    </div>
</div>
</body>
</html>
