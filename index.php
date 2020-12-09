<?php
$string = 'Hello You';
$int = 30;
$float = 18.25;
$bool = true;
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Exercice 4 Partie 1</title>
</head>

<body>
    <h1>Exercice 4 Partie 1</h1>
    <p><?= ($string . ' ' . $int . ' ' . $float . ' ' . $bool); ?></p>

</body>
</html>