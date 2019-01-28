<body>
<?php
foreach ($result as $item) {
    echo $item['base'] . ',';
    echo $item['commission'] . ',';
    echo $item['tax'] . ',';
    echo $item['sum'] . '<br>';
}

foreach ($total as $item) {
    echo $item . ',';
}
?>
</body>