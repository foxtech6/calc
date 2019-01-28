<body>
<section class="table">
    <a href="/">Back</a>
    <h1>Result Table</h1>
    <div class="tbl-header">
        <table cellpadding="0" cellspacing="0" border="0">
            <thead>
            <tr>
                <th>Count</th>
                <th>Base premium (<?= $basePricePolicy * 100 ?>%)</th>
                <th>Commission (<?= $commission * 100 ?>%)</th>
                <th>Tax (<?= $tax ?>%)</th>
                <th>Total cost</th>
            </tr>
            </thead>
        </table>
    </div>
    <div class="tbl-content">
        <table cellpadding="0" cellspacing="0" border="0">
            <tbody>
            <tr>
                <td>Total</td>
            <?php foreach ($total as $item): ?>
                <td><?= $item ?></td>
            <?php endforeach ?>
            </tr>
            <?php foreach ($result as $i => $item): ?>
            <tr>
                <td><?= $i + 1 ?></td>
                <td><?= $item['base'] ?></td>
                <td><?= $item['commission'] ?></td>
                <td><?= $item['tax'] ?></td>
                <td><?= $item['sum'] ?></td>
            </tr>
            <?php endforeach ?>
            </tbody>
        </table>
    </div>
</section>
</body>
