<body>
    <?php if (isset($errors)) :?>
        <a class="back" href="/"><div class="arrow-box"></div>back to calculator</a>
        <div class="errors-title"><h1>Validation errors</h1></div>
        <div class="errors"><?= implode(', ', $errors) ?></div>
    <?php else :?>
        <a class="back" href="/"><div class="arrow-box"></div>back to calculator</a>
        <section class="table">
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
                    <tr class="total">
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
    <?php endif ?>
</body>
