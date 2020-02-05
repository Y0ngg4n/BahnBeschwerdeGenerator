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
    <link rel="stylesheet" href="css/dark-mode-switch.css">
    <script type="application/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="application/javascript" src="js/bootstrap.min.js"></script>

</head>
<body>
<div class="container">

    <?php

    $betreiber = $_POST['betreiber'];

    $message = <<< EOF
Sehr geehrte Damen und Herren,\n
hiermit reiche ich meine Beschwerde über die $betreiber ein.\n
EOF;

    if (isset($_POST['vorname']) && !empty($_POST['vorname']) && isset($_POST['nachname']) && !empty($_POST['nachname'])) {
        $vorname = $_POST['vorname'];
        $nachname = $_POST['nachname'];
    } else {
        echo "<div class='alert alert-danger'>Bitte Vorname und Nachname eintragen</div>";
        $error = true;
    }

    if (isset($_POST['zustiegszeit']) && !empty($_POST['zustiegszeit']) && isset($_POST['ausstiegszeit']) && !empty($_POST['ausstiegszeit'])) {
        $zustiegszeit = $_POST['zustiegszeit'];
        $ausstiegszeit = $_POST['ausstiegszeit'];

        if (isset($_POST['zustiegsbahnhof']) && !empty($_POST)) {
            $zustiegsbahnhhof = " " . $_POST['zustiegsbahnhof'] . " ";
        }

        if (isset($_POST['ausstiegsbahnhof']) && !empty($_POST)) {
            $ausstiegsbahnhhof = " " . $_POST['ausstiegsbahnhof'] . " ";
        }

        $zugtyp = $_POST['zugtyp'];
        if (isset($_POST['zugnummer']) && !empty($_POST['zugnummer']))
            $zugnummer = $_POST['zugnummer'];
        if (isset($_POST['richtung']) && !empty($_POST['richtung']))
            $richtung = $_POST['richtung'];

        $message = $message . " \nAm " . date('d.m.Y', strtotime($zustiegszeit)) . " benutze ich Ihr öffentliches Transportmittel ";

        if ($zugnummer) {
            $message = $message . "mit der Bezeichnung " . $zugtyp . " " . $zugnummer;
            if ($richtung) {
                $message = $message . " Richtung " . $richtung . " ";
            }
        } else {
            echo "<div class='alert alert-danger'>Bitte mindestens Zugtyp, Zugnummer oder Richtung eintragen</div>";
            $error = true;
        }

        $message = $message . "von" . $zustiegsbahnhhof
            . date("H:i", strtotime($zustiegszeit)) . " Uhr bis" . $ausstiegsbahnhhof . "am "
            . date('d.m.Y', strtotime($ausstiegszeit)) . " um " . date("H:i", strtotime($ausstiegszeit)) . " Uhr.";
    } else {
        echo "<div class='alert alert-danger'>Bitte Einstiegs- und Ausstiegszeit eintragen</div>";
        $error = true;
    }


    if (isset($_POST['grund']) && !empty($_POST['grund'])) {
        $grund = $_POST['grund'];
        $message = $message . "\nDas Transportmittel war " . $grund . ".\n";
    } else {
        echo "<div class='alert alert-danger'>Bitte Grund auswählen</div>";
        $error = true;
    }
    //if (isset($_POST['beweis']) && !empty($_POST['beweis'])) {
    //    $beweis = $_POST['beweis'];
    //    "Als Beweis habe ich Ihnen ein Foto angehängt.";
    //}

    $message = $message . <<<EOF

Dies ist leider kein Einzelfall und sorgt immer wieder für vermeidbare Stresssituationen,
welche sowohl physisch als auch psychisch strapazierend sind. 

Ich verweise Sie hiermit auch auf Ihre gesetzlichen Verpflichtungen gegenüber dem zu Befördernden:

https://www.eba.bund.de/DE/RechtRegelwerk/GesetzeVerordnungen/Fahrgastrechte/fahrgastrechte_node.html

Ich bitte Sie dringlich, die miserablen Umstände zu beheben.

Mit freundlichen Grüßen

$vorname $nachname
EOF;

    if (isset($error)) {
        echo "<form action='index.php'>
            <input class='btn btn-warning' type='submit' value='Zurück zum Generator' />
        </form>";
    } else {
        echo <<< EOF

<div class="row">
        <div class="col-lg-10">
            <h1>Generierte Email</h1>
        </div>
        <div class="col-lg-2">
            <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="darkSwitch"/>
                <label class="custom-control-label" for="darkSwitch">Dark Mode</label>
            </div>
            <script type="application/javascript" src="js/dark-mode-switch.min.js"></script>
        </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="form-group text-center">
<!--    <label for="generatedEmail">Generierte Email</label>-->
            <textarea class="form-control" id="generatedEmail" rows="20">$message</textarea>
            <button id="copyButton" class="btn btn-info m-2" onclick="copyText()">Text Kopieren</button>
        </div>
    </div>
</div>
<script>
function copyText() {
  var copyText = document.getElementById("generatedEmail");
  copyText.select();
  copyText.setSelectionRange(0, 99999);
  document.execCommand("copy");
  alert("Text kopiert");
}
</script>

<div class="row">
    <div class="col-lg-4">
        <div class="form-group">
            <label for="dbemail">Deutsche Bahn</label>
            <input type="email" readonly="true" id="dbemail" class="form-control form-text text-muted" value="kundendialog@bahn.de">
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <label for="goaheademail">GoAhead</label>
            <input type="email" readonly="true" id="goaheademail" class="form-control form-text text-muted" value="service@gabw-bahn.de">
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <label for="verkehrsministeriumemail">Verkehrsministerium</label>
            <input type="email" readonly="true" id="verkehrsministeriumemail" class="form-control form-text text-muted" value="Poststelle@vm.bwl.de">
        </div>
    </div>
</div>

<div class="text-center m-5">
EOF;
        $email = "";

        if (strpos($betreiber, "GoAhead") !== false) {
            $email = $email . "service@gabw-bahn.de";
        } else {
            $email = $email . "kundendialog@bahn.de";
        }

        if (isset($_POST['verkehrsministerium']) && !empty($_POST['verkehrsministerium'])) {
            $email = $email . ",Poststelle@vm.bwl.de";
        }
        $message = rawurlencode($message);
        echo "<a href=\"mailto:$email?bcc=goahead@oblivioncoding.pro&subject=Beschwerde $betreiber&body=$message\" target=\"_blank\" class=\"btn btn-primary\">Email versenden!</a>";
    }

    ?>
</div>
</div>
<footer>
    <div class="container modal-footer">
        <a href="https://blog.oblivioncoding.pro/" target="_blank">Blog</a>
        <a href="https://github.com/Y0ngg4n/BahnBeschwerdeGenerator" target="_blank">GitHub</a>
        <a href="https://blog.oblivioncoding.pro/impressum/" target="_blank">Impressum</a>
        <a href="https://blog.oblivioncoding.pro/privacy/" target="_blank">Datenschutzerklärung</a>
    </div>
</footer>
<script type="application/javascript" src="js/main.js"></script>
</body>
</html>