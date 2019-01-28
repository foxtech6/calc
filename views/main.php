<body>
<h1><?= $title; ?></h1>

<form action="information" method="post">
    Estimated value of the car:<br>
    <input type="text" name="estimated" value="100">
    <br>
    Tax percentage:<br>
    <input type="text" name="tax" value="30">
    <br>
    Number of instalments:<br>
    <input type="text" name="number" value="10">
    <br>
    <input type="submit" value="Submit">
</form>
</body>
