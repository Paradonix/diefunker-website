<?php
    session_start();
?>

<!DOCTYPE html>
<html>

    <head>
        <title>Die Funker</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Bowlby+One&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../css/main.css">
        <link rel="icon" href="../images/icon.ico">
        <script src="../skript/main.js"></script>
    </head>

    <body>
        <div class="wrapper">
            <div class="menu-wrapper" id="menu-expand">
                <a href="../index.php" class="navbar_logo">
                    <img id="logo" src="../images/logo.png">
                    <span class="logo_text">Die Funker</span>
                </a>
                <?php
                    if (!isset($_SESSION['userId'])) {
                        echo '<a href="../login/login"><button type="button" class="submitBtn" id="loginBtn">Login</button></a>';
                    }
                    else if (isset($_SESSION['userId'])) {
                        echo '<form action="../login/includes/logout.inc.php" method="post" class="logoutForm">
                            <button type="submit" name="logout-submit" class="submitBtn" id="logoutBtn">Logout</button>
                        </form>';
                    }
                ?>
                <input type="checkbox" id="menuToggle">
                <label for="menuToggle" onclick="expand()"><span></span></label>
                <nav class="menu">
                    <ol>
                        <?php
                        if (isset($_SESSION['userId'])) {
                            echo '<li class="menu-item"><a href="../aktuelles/aktuelles.admin">Aktuelles</a></li>
                            <li class="menu-item"><a href="../events/events.admin">Events</a></li>
                            <li class="menu-item"><a href="../member/member.admin">Members</a></li>
                            <li class="menu-item"><a href="../termine/termine.admin">Termine</a></li>
                            <li class="menu-item"><a href="../raids/raids.admin">Raids</a></li>
                            <li class="menu-item dropdown">
                                <a href="../guides/guides">Guides</a>
                                <ol class="sub-menu">
                                    <li class="menu-item"><a href="../guides/raid-guides/raid-guides">Raid Guides</a></li>
                                    <li class="menu-item"><a href="../guides/fraktal-guides/fraktal-guides">Fraktal Guides</a></li>
                                    <li class="menu-item"><a href="../guides/anfaenger-guides/anfaenger-guides">Anfänger Guides</a></li>
                                </ol>
                            </li>';
                        }
                        else if (!isset($_SESSION['userId'])) {
                            echo '<li class="menu-item"><a href="../aktuelles/aktuelles">Aktuelles</a></li>
                            <li class="menu-item"><a href="../events/events">Events</a></li>
                            <li class="menu-item"><a href="../member/member">Members</a></li>
                            <li class="menu-item"><a href="../termine/termine">Termine</a></li>
                            <li class="menu-item"><a href="../raids/raids">Raids</a></li>
                            <li class="menu-item dropdown">
                                <a href="../guides/guides">Guides</a>
                                <ol class="sub-menu">
                                    <li class="menu-item"><a href="../guides/raid-guides/raid-guides">Raid Guides</a></li>
                                    <li class="menu-item"><a href="../guides/fraktal-guides/fraktal-guides">Fraktal Guides</a></li>
                                    <li class="menu-item"><a href="../guides/anfaenger-guides/anfaenger-guides">Anfänger Guides</a></li>
                                </ol>
                            </li>';
                        }
                        ?>
                    </ol>
                </nav>
            </div>


            <div class='impressum'>
                <h2>Impressum</h2>
                <p>
                    Angaben gemäß § 5 TMG
                </p>
                <p>
                    <strong>Vertreten durch: </strong>
                    <br>
                    Alex
                    <br>
                </p>
                <p>
                    <strong>Kontakt:</strong>
                    <br>
                    E-Mail: <a href='mailto:diefunker@web.de'>diefunker@web.de</a>
                    <br>
                </p>
                <p>
                    <strong>Haftungsausschluss:</strong>
                    <br>
                    <br>
                    <strong>Haftung für Links</strong>
                    <br>
                    <br>
                    Unser Angebot enthält Links zu externen Webseiten Dritter, auf deren Inhalte wir keinen Einfluss haben. Deshalb können wir für diese fremden Inhalte auch keine Gewähr übernehmen. Für die Inhalte der verlinkten Seiten ist stets der jeweilige Anbieter oder Betreiber der Seiten verantwortlich. Die verlinkten Seiten wurden zum Zeitpunkt der Verlinkung auf mögliche Rechtsverstöße überprüft. Rechtswidrige Inhalte waren zum Zeitpunkt der Verlinkung nicht erkennbar. Eine permanente inhaltliche Kontrolle der verlinkten Seiten ist jedoch ohne konkrete Anhaltspunkte einer Rechtsverletzung nicht zumutbar. Bei Bekanntwerden von Rechtsverletzungen werden wir derartige Links umgehend entfernen.
                    <br>
                    <br>
                    <strong>Urheberrecht</strong>
                    <br>
                    <br>
                    Die durch die Seitenbetreiber erstellten Inhalte und Werke auf diesen Seiten unterliegen dem deutschen Urheberrecht. Die Vervielfältigung, Bearbeitung, Verbreitung und jede Art der Verwertung außerhalb der Grenzen des Urheberrechtes bedürfen der schriftlichen Zustimmung des jeweiligen Autors bzw. Erstellers. Downloads und Kopien dieser Seite sind nur für den privaten, nicht kommerziellen Gebrauch gestattet. Soweit die Inhalte auf dieser Seite nicht vom Betreiber erstellt wurden, werden die Urheberrechte Dritter beachtet. Insbesondere werden Inhalte Dritter als solche gekennzeichnet. Sollten Sie trotzdem auf eine Urheberrechtsverletzung aufmerksam werden, bitten wir um einen entsprechenden Hinweis. Bei Bekanntwerden von Rechtsverletzungen werden wir derartige Inhalte umgehend entfernen.
                    <br>
                    <br>
                    <strong>Datenschutz</strong>
                    <br>
                    <br>
                    Die Nutzung unserer Webseite ist in der Regel ohne Angabe personenbezogener Daten möglich. Soweit auf unseren Seiten personenbezogene Daten (beispielsweise Name, Anschrift oder eMail-Adressen) erhoben werden, erfolgt dies, soweit möglich, stets auf freiwilliger Basis. Diese Daten werden ohne Ihre ausdrückliche Zustimmung nicht an Dritte weitergegeben.
                    <br>
                    Wir weisen darauf hin, dass die Datenübertragung im Internet (z.B. bei der Kommunikation per E-Mail) Sicherheitslücken aufweisen kann. Ein lückenloser Schutz der Daten vor dem Zugriff durch Dritte ist nicht möglich.
                    <br>
                    Der Nutzung von im Rahmen der Impressumspflicht veröffentlichten Kontaktdaten durch Dritte zur Übersendung von nicht ausdrücklich angeforderter Werbung und Informationsmaterialien wird hiermit ausdrücklich widersprochen. Die Betreiber der Seiten behalten sich ausdrücklich rechtliche Schritte im Falle der unverlangten Zusendung von Werbeinformationen, etwa durch Spam-Mails, vor.
                    <br>
                </p>
            </div>
        </div>

        <footer class="footer">
            <div class="footer-content">
                <span class="social-media"><a href="https://www.youtube.com/channel/UClCWSHXPboC9ySNyzgwlZUw" target="_blank" title="Die Funker Youtube Kanal"><img src="../images/youtube.png"></a></span>
                <span class="footer-center">Made by <span class="bold">Alex III.</span> for <span class="bold">Die Funker</span></span>
                <br>
                <span class="footer-right"><a href="">Impressum</a></span>
            </div>
        </footer>
    </body>

</html>
