<html>
  <head>
      <link href="style.css" rel="stylesheet" type="text/css">
<script>
function getUniqueRequest()
{
  /*@@@ Hier moet een unique id worden gemaakt.
  */
  var uid = "student-"+Math.floor(100000*Math.random());
  document.location.replace('aanmeldformulier.php?uid='+uid)
}
</script>
  </head>
  <body>

  <div class="logo">
      <img src="ma.jpg">
  </div>

  <center>
<h1>Aanmelden</h1>
<!--Click <a href='javascript:getUniqueRequest()'>hier</a> om u aan te melden.-->
      <a href='javascript:getUniqueRequest() '><button type="submit">Aanmeld formulier</button></a>
  </center>
  </body>
</html>
