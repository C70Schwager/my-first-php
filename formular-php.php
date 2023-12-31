<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="../css/style.css">

    <title>PHP Intro | Templates</title>
  </head>





<body>


<!-- Fügen Sie für jedes Feld Eingaben (mit passender Beschriftung) hinzu und umschließen Sie jede Beschriftung und Eingabe mit einem <div>-Element,
  um mit CSS eine bestimmte Breite festzulegen: -->

      <div class="container">
        <div class="row">
          <div class="col"></div>
          <div class="col"></div>
          <div class="col"></div>
        </div>

        <div class="row">
          <form action="confirmation.html"
            onsubmit="return validateForm();">

        <div class="row">
          <div class="col-25">
            <label for="gender">Anrede</label>
          </div>
          <div class="col-75">
            <select id="gender" name="gen">
              <option value="choose">Bitte wählem</option>
              <option value="female">Frau</option>
              <option value="male">Herr</option>
            </select>
          </div>
        </div>

        <div class="row">
          <div class="col-25">
            <label for="first name">Vorname</label>
          </div>
          <div class="col-75">
            <input type="text" id="first name" name="first name" placeholder="Ihr Vorname...">
          </div>
        </div>

        <div class="row">
          <div class="col-25">
            <label for="name">Nachname</label>
          </div>
          <div class="col-75">
            <input type="text" id="name" name="name" placeholder="Ihr Nachname...">
          </div>
        </div>

        <div class="row">
          <div class="col-25">
            <label for="domicil">Strasse / Nr.</label>
          </div>
          <div class="col-75">
            <input type="text" id="domicil" name="domicil" placeholder="Ihre Strasse / Nr...">
          </div>
        </div>

        <div class="row">
          <div class="col-25">
            <label for="city">Wohnort</label>
          </div>
          <div class="col-75">
            <input type="text" id="city" name="city" placeholder="Ihr Wohnort...">
          </div>
        </div>

        <div class="row">
          <div class="col-25">
            <label for="code postal">Postleitzahl</label>
          </div>
          <div class="col-75">
            <input type="text" id="code postal" name="code postal" placeholder="PLZ">
          </div>
        </div>

        <div class="row">
          <div class="col-25">
            <label for="comment">Bemerkungen</label>
          </div>
          <div class="col-75">
            <textarea class="form-control" id="comment" name="text" placeholder="Comment goes here"></textarea>
            <label for="comment">Comments</label>
          </div>
        </div>

        <div class="row">
          <button onclick="validateForm();" title="click me">Click ME</button>
          <p id="message-1">Bitte Feld ausfüllen!</p>


        </div>

    </div>
















    <script src="script.js"></script>


  </body>


</html>