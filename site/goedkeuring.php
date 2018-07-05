<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>

<div class="logo">
    <img src="ma.jpg">
</div>

<div class="center">
<h1>Goedkeuring vragen</h1>
</div>

<form method="post" action="">
    <fieldset>
        <legend>Beoordeling</legend>

        <label for="houding">hoe is de werkhouding?</label><input type="text" name="houding" id="houding" required>
        <br><br>

        <label for="resultaat">Hoe zijn de resultaten?</label><input type="text" name="resultaat" id="resultaat" required>
        <br><br>

        <label for="ervaring">Ervaring met coderen?</label><input type="text" name="ervaring" id="ervaring" required>
        <br><br>

        <label for="gedrag">Hoe is het gedrag?</label><input type="text" name="gedrag" id="gedrag" required>
        <br><br>

        <label for="leergierig">Is de leerling leergierig?</label><input type="text" name="leergierig" id="leergierig" required>
        <br><br>

        <label for="thuis">Hoe is de thuis situatie?</label><input type="text" name="thuis" id="thuis" required>
        <br><br>

        <label for="ma">Wat verwacht je van MA?</label><textarea name="ma" id="ma" cols="50" rows="4" required></textarea>
        <br><br>

        <label for="verbeter">Zijn er verbeter punten voor iets? (toelichting)</label><textarea name="verbeter" id="verbeter" cols="50" rows="4" required></textarea>
    </fieldset>
    <input type='submit' value='Insturen'/>
</form>

</body>
</html>