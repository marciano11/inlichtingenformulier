<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <head>
      <link href="style.css" rel="stylesheet" type="text/css">
<script>
var previous_onload = window.onload;
window.onload = this_onload;

function this_onload() {
  if (previous_onload != null)
    previous_onload();

  var hasuid = false;
  if (document.location.search)
  {
    var request = new Array();
    var i;
    var vals=document.location.search.substr(1).split("&");
    for (i in vals)
    {
      vals[i] = vals[i].replace(/\+/g, " ").split("=");
      request[unescape(vals[i][0])] = unescape(vals[i][1]);
    }

    if (request["uid"] != null)
    {
      var element = document.getElementById('linktosend');
      if (element) {
        hasuid = true;
        var link;
//@@@ Security: check all input! Check if hackers didn't put something evil behind uid=
        link = "goedkeuring.php?uid="+request["uid"];
        element.innerHTML = link;
        element.href=link;
      }
    }
  }

  if (!hasuid) {
    var element = document.getElementById('link-container');
    if (element) {
      element.innerHTML = "Vul alstublieft eerst <a href='aanvraag.html'>hier</a> een formulier in.";
    }
  }
}
</script>
  </head>
  <body>

  <div class="logo">
      <img src="ma.jpg">
  </div>

<div class="center">
<h1>Aangemeld</h1>
Dank voor je aanmelding! Laat deze link invullen door je decaan of mentor en jezelf:
<div id="link-container">
  <a id='linktosend' href='#'>(nog niet ingevuld)</a>
</div>
</div>
  </body>
</html>
