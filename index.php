<!DOCTYPE html>
<html>

<head>
    <title>Calculateur de Budget</title>

    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <?php
    include 'database.php';
    include 'calcul.php';
    ?>
    <h2>Calculateur de Budget</h2>
    <form method="post" action="">
        <label for="revenus">Revenus mensuels :</label>
        <input type="number" id="revenus" name="revenus" required><br><br>
        <input type="submit" value="Calculer">
    </form>

    <div id="resultats"></div>
</body>

</html>