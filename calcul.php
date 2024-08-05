<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $revenus = $_POST["revenus"];

        if (!is_numeric($revenus) || $revenus <= 0) {
            echo "<p>Veuillez entrer un montant de revenus valide</p>";
        } else {
            $budgetBesoins = $revenus * 0.5;
            $budgetEpargne = $revenus * 0.3;
            $budgetLoisirs = $revenus * 0.2;

            echo "<h3>Résultats :</h3>";
            echo "<p>Budget pour les besoins : $budgetBesoins €</p>";
            echo "<p>Budget pour l'épargne : $budgetEpargne €</p>";
            echo "<p>Budget pour les loisirs : $budgetLoisirs €</p>";
        }
    }
