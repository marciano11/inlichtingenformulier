<html xmlns="http://www.w3.org/1999/html">
  <head>
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
  <center>
    <h1>Aanmeldformulier</h1>
        <form method='post' action='javascript:acceptAanmelding()'>
                <label>Voornaam: </label><input type='text' name='voornaam' required/>
  <p>
                <label>Achternaam: </label><input type='text' name='achternaam' required/>
  <p>
                <label>Geboortedatum: </label><input type='text' name='achternaam' placeholder="In cijfers met streepjes" required/>
  <p>
                <label>Man/Vrouw: </label><input type='text' name='man/vrouw' required/>
  <p>
                <lable>Vooropleiding: </lable><input type='text' name='vooropleiding' required/>
  <p>
                <label>Telefoonnummer: </label><input type='text' name='telefoonnummer' required/>
  <p>
                <label>Email Adres: </label><input type='text' name='email adres' required/>
  <p>
                <label>Waarom voor MA gekozen?: </label><textarea rows="4" cols="50" required></textarea>

  <input type='submit' value='Insturen'/>
  </form>
  </center>
  </body>
</html>
