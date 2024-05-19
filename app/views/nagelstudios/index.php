<?php require_once APPROOT . '/views/includes/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bling bling master</title>
</head>
<body>
   <form>
    <h1>Bling Bling Nail Studio Chantal</h>
    <h5>Kies 4 basiskleuren voor uw nagels:</h5>
    <input type="color" value="#008000">
    <input type="color" value="#00008B">
    <input type="color" value="#FFC0CB">
    <input type="color" value="#FFFF00">
    <h5>uw telefoonnummer:</h5>
    <input type="text">
    <h5>uw e-mailadres:</h5>
    <input type="text">
    <h5>Afspraak datum:</h5>
    <input type="date">
    <h5>Soort behandeling:</h5>
    <input type="radio" id="nagelbijt" name="behandeling" value="nagelbijt">
    <label for="nagelbijt">Nagelbijt arrangement (termijnbetaling mogelijk) €180</label><br>
    <input type="radio" id="manicure" name="behandeling" value="manicure">
    <label for="manicure">Luxe manicure (massage en handpakking) €30,00</label><br>
    <input type="radio" id="nagelreparatie" name="behandeling" value="nagelreparatie">
    <label for="nagelreparatie">Nagelreparatie per nagel (in eerste week gratis) €5,00</label><br>
    <button>Sla op</button> <button>Reset</button>
</form>
</body>


</html>


<?php require_once APPROOT . '/views/includes/footer.php'; ?>