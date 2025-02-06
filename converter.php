<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency Converter</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #f9f9f9;
        }
        h2 {
            text-align: center;
        }
        label {
            display: block;
            margin-bottom: 8px;
        }
        input[type="number"], select {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .result {
            margin-top: 20px;
            padding: 10px;
            background-color: #e0f7fa;
            border: 1px solid #0097a7;
            border-radius: 5px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Currency Converter</h2>
        <form method="post" action="">
            <label for="amount">Amount:</label>
            <input type="number" id="amount" name="amount" step="0.01" required>

            <label for="currency">Currency:</label>
            <select id="currency" name="currency" required>
                <option value="KSH">Kenya Shillings (KSH)</option>
                <option value="USD">US Dollars (USD)</option>
            </select>

            <input type="submit" name="convert" value="Convert">
        </form>

        <?php
        // PHP logic for currency conversion
        if (isset($_POST['convert'])) {
            $amount = $_POST['amount'];
            $currency = $_POST['currency'];

            // Conversion rate
            $rate = 102; // 1 USD = 102 KSH

            // Perform conversion
            if ($currency == 'KSH') {
                $convertedAmount = $amount / $rate;
                echo "<div class='result'><b>$amount KSH</b> is equivalent to <b>" . number_format($convertedAmount, 2) . " USD</b>.</div>";
            } elseif ($currency == 'USD') {
                $convertedAmount = $amount * $rate;
                echo "<div class='result'><b>$amount USD</b> is equivalent to <b>" . number_format($convertedAmount, 2) . " KSH</b>.</div>";
            }
        }
        ?>
    </div>
</body>
</html>