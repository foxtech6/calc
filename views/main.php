<body class="main-body">
    <div class="calculate-form">
        <h1>Calculator</h1>
        <form name="calc-form" action="calculate" method="post">
            <input onkeyup="validateEstimated('estimated', 0, 1000000, 100)" type="number" step="0.01" min="100" max="100000" required name="estimated" placeholder="Car Price" />
            <div class="validate"></div>
            <input onkeyup="validateEstimated('tax', 1, 100, 0)" type="number" min="0" max="100" required name="tax" placeholder="Tax percentage" />
            <div class="validate"></div>
            <input onkeyup="validateEstimated('number', 2, 12, 1)" type="number" min="1" max="12" required name="number" placeholder="Number of instalments" />
            <div class="validate"></div>
            <input type="submit" value="Calculate" />
        </form>
    </div>
</body>
