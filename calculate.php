<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculation Results</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Calculation Results</h1>
        <table>
            <tr>
                <th>Product</th>
                <th>Buying Price</th>
                <th>VAT Amount</th>
                <th>Total General Expenses</th>
                <th>Profit Margin Amount</th>
                <th>Selling Price</th>
            </tr>
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $buying_prices = $_POST['buying_price'];
                $vats = $_POST['vat'];
                $general_expenses = $_POST['general_expenses'];
                $profit_margins = $_POST['profit_margin'];

                for ($i = 0; $i < 10; $i++) {
                    $buying_price = $buying_prices[$i];
                    $vat = $vats[$i];
                    $general_expense = $general_expenses[$i];
                    $profit_margin = $profit_margins[$i];

                    $vat_amount = $buying_price * ($vat / 100);
                    $total_general_expense = $buying_price * ($general_expense / 100);
                    $profit_margin_amount = $buying_price * ($profit_margin / 100);
                    $selling_price = $buying_price + $vat_amount + $total_general_expense + $profit_margin_amount;
                    ?>
                    <tr>
                        <td>Product <?= $i + 1 ?></td>
                        <td><?= number_format($buying_price, 2) ?></td>
                        <td><?= number_format($vat_amount, 2) ?></td>
                        <td><?= number_format($total_general_expense, 2) ?></td>
                        <td><?= number_format($profit_margin_amount, 2) ?></td>
                        <td><?= number_format($selling_price, 2) ?></td>
                    </tr>
                    <?php
                }
            }
            ?>
        </table>
        <button onclick="history.back()">Go Back</button>
    </div>
    <script src="script.js"></script>
</body>
</html>
