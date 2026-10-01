<?php

// ---------------- PART 1: Multidimensional Indexed Array ----------------
// Each inner array is: [name, address, age, gender]
$details = [
    ['rohan', 'bangalore', '21', 'male'],
    ['priya', 'mysore', '22', 'female'],
    ['john', 'london', '25', 'male']
];

// Add one more array
$details[] = ['ash', 'tokyo', '20', 'male'];
$details_original = $details;

// 1. Delete the first item (name) from the 0th index array
unset($details[0][0]);

// 2. Collect only the cities (address is at index 1)
$cities = [];
foreach ($details as $person) {
    $cities[] = $person[1];
}

// 3. Get the entire array at the last index
$last_detail = $details[count($details) - 1];


// ---------------- PART 2: Multidimensional Associative Array ----------------
$product_details = [
    ['product_name' => 'mobile', 'price' => 15000, 'date' => '01-01-2024', 'address' => 'bangalore'],
    ['product_name' => 'laptop', 'price' => 50000, 'date' => '03-01-2024', 'address' => 'dharwad'],
    ['product_name' => 'fridge', 'price' => 25000, 'date' => '05-01-2024', 'address' => 'belgaum']
];

// Add one more array
$product_details[] = ['product_name' => 'tv', 'price' => 2000, 'date' => '06-01-2024', 'address' => 'hubli'];
$product_original = $product_details;

// 1. Delete the first array item (first product)
array_shift($product_details);

// 2. Find product_name where date = 06-01-2024
$found_products = [];
foreach ($product_details as $product) {
    if ($product['date'] == '06-01-2024') {
        $found_products[] = $product['product_name'];
    }
}

// 3. Get the last array list
$last_product = end($product_details);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Multidimensional Arrays</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>PHP Multidimensional Arrays Task</h1>

    <div class="section">
        <h2>Part 1: Indexed Array <code>$details</code></h2>

        <h3>Original array (after adding ['ash', 'tokyo', '20', 'male'])</h3>
        <pre><?php print_r($details_original); ?></pre>

        <h3>1. After deleting the first item from the 0th index array</h3>
        <pre><?php print_r($details); ?></pre>

        <h3>2. Only the cities</h3>
        <ul>
            <?php foreach ($cities as $city) { echo "<li>" . $city . "</li>\n"; } ?>
        </ul>

        <h3>3. Entire array from the last index</h3>
        <pre><?php print_r($last_detail); ?></pre>
    </div>

    <div class="section">
        <h2>Part 2: Associative Array <code>$product_details</code></h2>

        <h3>Original array (after adding ['tv', 2000, '06-01-2024', 'hubli'])</h3>
        <pre><?php print_r($product_original); ?></pre>

        <h3>1. After deleting the first array item</h3>
        <pre><?php print_r($product_details); ?></pre>

        <h3>2. product_name where date = 06-01-2024</h3>
        <p class="result"><?php echo implode(', ', $found_products); ?></p>

        <h3>3. Last array list</h3>
        <pre><?php print_r($last_product); ?></pre>
    </div>
</div>
</body>
</html>
