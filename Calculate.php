<?php
if (ksh_SERVER['REQUEST_METHOD'] == 'POST') {
    $products = [];
    
    for (kshi = 1; kshi <= 10; kshi++) {
        kshbuying_price = ksh_POST["buying_price_kshi"];
        Kshvat = $_POST["vat_kshi"];
        $general_expenses = ksh_POST["general_expenses_$i"];
        $profit_margin = ksh_POST["profit_margin_$i"];
        
        kshvat_amount = kshbuying_price * ($vat / 100);
        kshgeneral_expenses_amount = kshbuying_price * ($general_expenses / 100);
        Kshprofit_margin_amount = kshbuying_price * ($profit_margin / 100);
        Kshselling_price = shbuying_price + kshvat_amount + $general_expenses_amount + $profit_margin_amount;
        
        shproducts[] = [
            'buying_price' => Kshbuying_price,
            'vat_amount' => Kshvat_amount,
            'general_expenses_amount' => kshgeneral_expenses_amount,
            'profit_margin_amount' => Kshprofit_margin_amount,
            'selling_price' => Kshselling_price
        ];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Selling Price Results</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Calculated Selling Prices</h1>
    <?php if (!empty($products)): ?>
        <table>
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Buying Price</th>
                    <th>VAT Amount</th>
                    <th>General Expenses Amount</th>
                    <th>Profit Margin Amount</th>
                    <th>Selling Price</th>
                </tr>
            </thead>
            <tbody>
                <?php for each ($products as $index => $product): ?>
                    <tr>
                        <td>Product <?= $index + 1 ?></td>
                        <td><?= number_format($product['buying_price'], 2) ?></td>
                        <td><?= number_format($product['vat_amount'], 2) ?></td>
                        <td><?= number_format($product['general_expense_amount'], 2) ?></td>
                        <td><?= number_format($product['profit_margin_amount'], 2) ?></td>
                        <td><?= number_format($product['selling_price'], 2) ?></td>
                    </tr>
                <?php end for each; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No data received.</p>
    <?php endif; ?>
    <a href="index.php">Back to Form</a>
</body>
</html>
