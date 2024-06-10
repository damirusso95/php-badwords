<?php
$testo = $_POST["testo"];
// METODO STRLEN PER CONVERTIRE CARATTERI IN NUMERI
$lunghezza = strlen($testo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risultato Testo</title>
</head>
<body>
                <!-- STAMPO IL TESTO RICEVUTO -->
    <!-- <h1><?php echo $testo; ?></h1> -->
        <h1>Il paragrafo inviato è lungo  <?php echo $lunghezza; ?> caratteri</h1>

</body>
</html>
