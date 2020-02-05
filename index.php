<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bahn Beschwerde Email Generator × GoAhead ✓ DB ✓ Verkehrsministerium ✓</title>
    <meta name="description"
          content="Automatischer Bahn Beschwerde Email Generator. Beschwerde Email innerhalb von Sekunden! Beschwerde bei DB, GoAhead und dem Verkehrsministerium möglich.">
    <meta property="og:description"
          content="Automatischer Bahn Beschwerde Email Generator. Beschwerde Email innerhalb von Sekunden! Beschwerde bei DB, GoAhead und dem Verkehrsministerium möglich.">
    <meta name="robots" content="all">
    <meta property="og:title"
          content="Bahn Beschwerde Email Generator: Für GoAhead, die Deutsche Bahn und das Verkehrsministerium">
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://bahn.oblivioncoding.pro/"/>
    <meta property="og:site_name" content="OblivionCoding"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:title"
          content="Bahn Beschwerde Email Generator: Für GoAhead, die Deutsche Bahn und das Verkehrsministerium"/>
    <meta name="twitter:description"
          content="Automatischer Bahn Beschwerde Email Generator. Beschwerde Email innerhalb von Sekunden! Beschwerde bei DB, GoAhead und dem Verkehrsministerium möglich."/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="img/favicon/site.webmanifest">
    <link rel="mask-icon" href="img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome-all.css">
    <link rel="stylesheet" href="css/dark-mode-switch.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css"/>
    <script type="application/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="application/javascript" src="js/moment.min.js"></script>
    <script type="application/javascript" src="js/locale/de.js"></script>
    <script type="application/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/tempusdominus-bootstrap4.min.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-10">
            <h1>Bahn Beschwerde Email Generator</h1>
            <h2>Für GoAhead, die Deutsche Bahn und das Verkehrsministerium</h2>
        </div>
        <div class="col-lg-2">
            <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="darkSwitch"/>
                <label class="custom-control-label" for="darkSwitch">Dark Mode</label>
            </div>
            <script type="application/javascript" src="js/dark-mode-switch.min.js"></script>
        </div>
    </div>

    <form action="generate.php" method="post" enctype="multipart/form-data" class="mt-5">
        <h3>Person</h3>
        <div class="row">
            <div class="col-lg-6">
                <input type="text" id="vorname" class="form-control form-text text-muted"
                       placeholder="Vorname"
                       name="vorname">
            </div>
            <div class="col-lg-6">
                <input type="text" id="nachname" class="form-control form-text text-muted"
                       placeholder="Nachname"
                       name="nachname">
            </div>
        </div>
        <h3>Zugverbindung</h3>
        <div class="row">
            <div class="col-lg-2">
                <select class="form-control custom-select" name="zugtyp">
                    <option>S</option>
                    <option>U</option>
                    <option>RB</option>
                    <option>RE</option>
                    <option>IRE</option>
                    <option>IC</option>
                    <option>ICE</option>
                    <option>EC</option>
                    <option>ECE</option>
                </select>
            </div>
            <div class="col-lg-4">
                <input type="number" id="zugnummer" class="form-control form-text text-muted"
                       placeholder="Zugnummer"
                       name="zugnummer">
            </div>
            <div class="col-lg-6">
                <input type="text" id="richtung" class="form-control form-text text-muted"
                       placeholder="Richtung"
                       name="richtung">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <input type="text" class="form-control datetimepicker-input" id="zustiegszeit"
                       data-toggle="datetimepicker"
                       data-target="#zustiegszeit" placeholder="Zustiegszeit" name="zustiegszeit"/>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control datetimepicker-input" id="ausstiegszeit"
                       data-toggle="datetimepicker"
                       data-target="#ausstiegszeit" placeholder="Ausstiegszeit" name="ausstiegszeit"/>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <input type="text" id="zustiegsbahnhof" class="form-control form-text text-muted"
                       placeholder="Zustiegsbahnhof" name="zustiegsbahnhof">
            </div>
            <div class="col-lg-6">
                <input type="text" id="ausstiegsbahnhof" class="form-control form-text text-muted"
                       placeholder="Ausstiegssbahnhof" name="ausstiegsbahnhof">
            </div>
        </div>
        <h3>Beschwerde</h3>
        <div class="row">
            <div class="col-lg-6">
                <select class="form-control custom-select" name="grund">
                    <option>extrem überfüllt</option>
                    <option>stark verspätet</option>
                    <option>ausgefallen</option>
                </select>
            </div>
            <div class="col-lg-6">
                <select class="form-control custom-select" name="betreiber">
                    <option>GoAhead Verkehrsgesellschaft</option>
                    <option>Deutsche Bahn AG</option>
                </select>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" checked="checked"
                           id="verkehrsministerium"
                           name="verkehrsministerium">
                    <label class="form-check-label" for="verkehrsministerium">Verkehrsministerium</label>
                </div>
            </div>
            <!--            <div class="col-sm-6">-->
            <!--                <div class="custom-file">-->
            <!--                    <input type="file" class="custom-file-input" id="customFile" name="beweis">-->
            <!--                    <label class="custom-file-label" for="customFile">Beweisfoto</label>-->
            <!--                </div>-->
            <!--            </div>-->
        </div>

        <div class="row m-5">
            <div class="col text-center">
                <input class="btn btn-info" type="submit" value="Beschwerde generieren!" name="submit">
            </div>
        </div>
    </form>
    <script type="text/javascript" src="js/main.js"></script>
</div>

<footer>
    <div class="container modal-footer">
        <a href="https://blog.oblivioncoding.pro/" target="_blank">Blog</a>
        <a href="https://github.com/Y0ngg4n/BahnBeschwerdeGenerator" target="_blank">GitHub</a>
        <a href="https://blog.oblivioncoding.pro/impressum/" target="_blank">Impressum</a>
        <a href="https://blog.oblivioncoding.pro/privacy/" target="_blank">Datenschutzerklärung</a>
    </div>
</footer>
</body>
</html>