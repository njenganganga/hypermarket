<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hypermarket Price Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Hypermarket Price Calculator</h1>
        <form action="calculate.php" method="post">
            <table>
                <tr>
                    <th>Product</th>
                    <th>Buying Price</th>
                    <th>VAT (%)</th>
                    <th>General Expenses (%)</th>
                    <th>Profit Margin (%)</th>
                </tr>
                <?php for ($i = 1; $i <= 10; $i++): ?>
                <tr>
                    <td>Product <?= $i ?></td>
                    <td><input type="number" name="buying_price[]" step="0.01" required></td>
                    <td><input type="number" name="vat[]" step="0.01" required></td>
                    <td><input type="number" name="general_expenses[]" step="0.01" required></td>
                    <td><input type="number" name="profit_margin[]" step="0.01" required></td>
                </tr>
                <?php endfor; ?>
            </table>
            <button type="submit">Calculate</button>
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>
