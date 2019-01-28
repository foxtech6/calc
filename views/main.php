<body class="main-body">
    <div class="calculate-form">
        <h1>Calculator</h1>
        <form action="calculate" method="post">
            <input type="number" step="0.01" min="100" max="100000" required name="estimated" placeholder="Car Price" />
            <input type="number" min="0" max="100" required name="tax" placeholder="Tax percentage" />
            <input type="number" min="1" max="12" required name="number" placeholder="Number of instalments" />
            <input type="submit" value="Calculate" />
        </form>
    </div>
</body>
