<html xmlns="http://www.w3.org/1999/html">
  <head>
      <link href="style.css" rel="stylesheet" type="text/css">
<script>

function getUid() {
  var request = new Array();
  var i;
  var vals=document.location.search.substr(1).split("&");
  for (i in vals)
  {
    vals[i] = vals[i].replace(/\+/g, " ").split("=");
    request[unescape(vals[i][0])] = unescape(vals[i][1]);
  }
  return request["uid"];
}
function acceptAanmelding() {
  document.location.replace('aangemeld.php?uid='+getUid());

}
</script>
  </head>
  <body>
  <div class="logo">
      <img src="ma.jpg">
  </div>

  <div class="center">
    <h1>Aanmeldformulier</h1>
  </div>
        <form method='post' action='javascript:acceptAanmelding()'>

            <form method="post" action="">
                <fieldset>
                    <legend>Vul je gegevens in</legend>

                    <label for="voornaam">Voornaam</label><input type="text" name="voornaam" id="voornaam" required>
                    <br><br>

                    <label for="anaam">Achternaam</label><input type="text" name="anaam" id="anaam" required>
                    <br><br>

                    <label for="data">Geboorte datum</label><input type="text" name="data" id="data" required>
                    <br><br>

                    <label for="geslacht">Man/Vrouw</label><input type="text" name="geslacht" id="geslacht" required>
                    <br><br>

                    <label for="opleiding">Vooropleiding</label><input type="text" name="opleiding" id="opleiding" required>
                    <br><br>

                    <label for="telefoon">TelefoonNummer</label><input type="text" name="telefoon" id="telefoon" required>
                    <br><br>

                    <label for="adres">Adres</label><input type="text" name="adres" id="adres" required>
                    <br><br>

                    <label for="ma">Waarom MA?</label><textarea name="ma" id="ma" cols="50" rows="4" required></textarea>
                </fieldset>
                <input type='submit' value='Insturen'/>
            </form>


  </form>

  </body>
</html>
