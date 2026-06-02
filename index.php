<?php
/**
 * Startseite – index.php
 * Inhalt: Hero, Leistungsübersicht, Vertrauensbereich, Kontakt-CTA
 */

// Seitentitel und Beschreibung für den Header
$seiten_titel = 'Alltagsbegleitung für Senioren';
$seiten_beschreibung = 'Andrea Brackemeyer – Alltagsbegleitung für Senioren in Ihrer Nähe. Über 20 Jahre Erfahrung. Gespräche, Begleitung, Unterstützung im Alltag. Jetzt Kontakt aufnehmen.';

// Header einbinden
include 'includes/header.php';
?>

<!-- ===== HAUPTINHALT DER STARTSEITE ===== -->
<main id="hauptinhalt">

    <!-- ===== HERO-BEREICH ===== -->
    <!-- Großer Willkommensbereich mit Bild, Motto und Handlungsaufforderung -->
    <section class="hero" aria-label="Willkommen">
        <div class="hero-bild-wrapper">
            <!-- Platzhalterbild – wird durch echtes Foto von Andrea ersetzt -->
            <img
                src="/images/alltagsbegleitung_brackemeyer_bsp.png"
                alt="Freundliche Alltagsbegleiterin mit Seniorin im Gespräch"
                class="hero-bild"
                width="1400"
                height="600"
                fetchpriority="high"
            >
            <div class="hero-overlay"></div>
        </div>

        <div class="container hero-inhalt">
            <div class="hero-text">
                <p class="hero-vortitel">Herzlich willkommen</p>
                <h1 class="hero-titel">
                    Andrea – <span class="akzent">Alltag mit Herz</span>
                </h1>
                <p class="hero-slogan">
                    Ich nehme mir Zeit für Sie –<br>
                    mit Herz, Respekt und Verlässlichkeit.
                </p>
                <div class="hero-buttons">
                    <a href="/pages/kontakt.php" class="btn btn-primaer btn-gross">
                        Jetzt Kontakt aufnehmen
                    </a>
                    <a href="/pages/leistungen.php" class="btn btn-sekundaer btn-gross">
                        Meine Leistungen
                    </a>
                </div>
                <!-- Telefonnummer direkt im Hero – wichtig für ältere Besucher -->
                <p class="hero-telefon">
                    Oder rufen Sie mich an:
                    <a href="tel:015161657136"><strong>0151 61 65 71 36</strong></a>
                </p>
            </div>
        </div>
    </section>
    <!-- ===== ENDE HERO ===== -->


    <!-- ===== KERNWERTE-STREIFEN ===== -->
    <!-- Drei Kernwerte als visueller Anker direkt nach dem Hero -->
    <section class="kernwerte-streifen" aria-label="Unsere Werte">
        <div class="container kernwerte-inner">
            <div class="kernwert">
                <h2 class="kernwert-titel">ZEIT</h2>
                <p>Ich nehme mir echte Zeit für Sie – ohne Hektik und ohne Eile.</p>
            </div>
            <div class="kernwert">
                <h2 class="kernwert-titel">NÄHE</h2>
                <p>Als echtes Dorfkind kenne ich die Menschen und Wege vor Ort.</p>
            </div>
            <div class="kernwert">
                <h2 class="kernwert-titel">UNTERSTÜTZUNG</h2>
                <p>Individuell, verlässlich und genau so, wie Sie es brauchen.</p>
            </div>
        </div>
    </section>
    <!-- ===== ENDE KERNWERTE ===== -->


    <!-- ===== LEISTUNGSÜBERSICHT ===== -->
    <section class="leistungen-uebersicht" aria-labelledby="leistungen-ueberschrift">
        <div class="container">

            <div class="abschnitt-kopf">
                <h2 id="leistungen-ueberschrift" class="abschnitt-titel">Was ich für Sie tue</h2>
                <p class="abschnitt-untertitel">
                    Ich unterstütze Sie im Alltag – immer angepasst an Ihre Wünsche und Bedürfnisse.
                    <strong>Keine Pflegeleistungen</strong>, aber echte menschliche Begleitung.
                </p>
            </div>

            <!-- Leistungskarten -->
            <div class="karten-raster">

                <!-- Karte 1: Zeit & Gesellschaft -->
                <article class="leistungs-karte">
                    <h3 class="karte-titel">Zeit & Gesellschaft</h3>
                    <p class="karte-text">
                        Gespräche führen, zuhören, vorlesen und gemeinsame Aktivitäten erleben –
                        weil Einsamkeit nicht sein muss.
                    </p>
                    <a href="/pages/leistungen.php#gesellschaft" class="karte-link">Mehr erfahren →</a>
                </article>

                <!-- Karte 2: Aktiv Bleiben -->
                <article class="leistungs-karte">
                    <h3 class="karte-titel">Aktiv Bleiben</h3>
                    <p class="karte-text">
                        Spiele, Gedächtnistraining, kreative Tätigkeiten, Musik und
                        gemeinsame Spaziergänge für Körper und Geist.
                    </p>
                    <a href="/pages/leistungen.php#aktiv" class="karte-link">Mehr erfahren →</a>
                </article>

                <!-- Karte 3: Begleitung -->
                <article class="leistungs-karte">
                    <h3 class="karte-titel">Begleitung</h3>
                    <p class="karte-text">
                        Ich begleite Sie zum Arzt, zur Apotheke, zum Friedhof, in die Kirche,
                        zum Einkaufen und zu Behörden.
                    </p>
                    <a href="/pages/leistungen.php#begleitung" class="karte-link">Mehr erfahren →</a>
                </article>

                <!-- Karte 4: Unterstützung im Alltag -->
                <article class="leistungs-karte">
                    <h3 class="karte-titel">Alltags&shy;unterstützung</h3>
                    <p class="karte-text">
                        Flexible Hilfe im Alltag – individuell abgestimmt und
                        persönlich vor Ort besprochen.
                    </p>
                    <a href="/pages/leistungen.php#alltag" class="karte-link">Mehr erfahren →</a>
                </article>

            </div>

            <div class="leistungen-cta">
                <a href="/pages/leistungen.php" class="btn btn-primaer">Alle Leistungen im Überblick</a>
            </div>

        </div>
    </section>
    <!-- ===== ENDE LEISTUNGSÜBERSICHT ===== -->


    <!-- ===== LOGO & SPRÜCHE ===== -->
    <?php include 'includes/logo_sprueche.php'; ?>
    <!-- ===== ENDE LOGO & SPRÜCHE ===== -->


    <!-- ===== VERTRAUENSBEREICH ===== -->
    <!-- Erfahrung und Qualifikationen – wichtig für Vertrauensaufbau -->
    <section class="vertrauen" aria-labelledby="vertrauen-ueberschrift">
        <div class="container vertrauen-inner">

            <!-- Foto von Andrea (Platzhalter) -->
            <div class="vertrauen-bild-wrapper">
                <img
                    src="https://picsum.photos/seed/andrea-portrait2/500/600"
                    alt="Andrea Brackemeyer – Ihre Alltagsbegleiterin"
                    class="vertrauen-bild"
                    width="500"
                    height="600"
                    loading="lazy"
                >
            </div>

            <!-- Text und Vertrauenssignale -->
            <div class="vertrauen-text">
                <p class="vertrauen-vortitel">Über mich</p>
                <h2 id="vertrauen-ueberschrift" class="abschnitt-titel">
                    Verlässlichkeit aus Überzeugung
                </h2>
                <p class="vertrauen-intro">
                    Ich bin Andrea Brackemeyer – ein echtes Dorfkind, das die Menschen
                    und Wege in der Region kennt und liebt. Meine Arbeit ist nicht nur ein Beruf,
                    sie ist meine Berufung.
                </p>

                <!-- Vertrauenssignale als Liste -->
                <ul class="vertrauens-liste">
                    <li>
                        <span class="check-icon" aria-hidden="true">✓</span>
                        <span><strong>Über 20 Jahre</strong> Berufserfahrung mit Senioren</span>
                    </li>
                    <li>
                        <span class="check-icon" aria-hidden="true">✓</span>
                        <span><strong>Staatlich examinierte</strong> Altenpflegerin</span>
                    </li>
                    <li>
                        <span class="check-icon" aria-hidden="true">✓</span>
                        <span>Erfahrung als <strong>Pflegedienstleitung</strong></span>
                    </li>
                    <li>
                        <span class="check-icon" aria-hidden="true">✓</span>
                        <span>Abrechnung über <strong>Pflegekasse möglich</strong> (§45b SGB XI)</span>
                    </li>
                    <li>
                        <span class="check-icon" aria-hidden="true">✓</span>
                        <span>Ortskenntnis und gewachsenes <strong>Netzwerk vor Ort</strong></span>
                    </li>
                </ul>

                <a href="/pages/about.php" class="btn btn-primaer">Mehr über mich</a>
            </div>

        </div>
    </section>
    <!-- ===== ENDE VERTRAUENSBEREICH ===== -->


    <!-- ===== ABRECHNUNG HINWEIS ===== -->
    <!-- Kurzer Hinweis auf Kostenübernahme – senkt die Hemmschwelle zur Kontaktaufnahme -->
    <section class="abrechnung-hinweis" aria-labelledby="abrechnung-hinweis-titel">
        <div class="container abrechnung-hinweis-inner">
            <div class="abrechnung-text">
                <h2 id="abrechnung-hinweis-titel">Über Pflegekasse abrechenbar</h2>
                <p>
                    Meine Leistungen können über den <strong>Entlastungsbetrag §45b SGB XI</strong>
                    mit der Pflegekasse abgerechnet werden – bis zu <strong>125 € monatlich</strong>
                    übernimmt die Kasse. Auch Selbstzahler sind herzlich willkommen.
                </p>
                <a href="/pages/abrechnung.php" class="btn btn-outline">Zur Abrechnung & Kosten</a>
            </div>
        </div>
    </section>
    <!-- ===== ENDE ABRECHNUNG HINWEIS ===== -->


    <!-- ===== KONTAKT-CTA ===== -->
    <!-- Abschließende Handlungsaufforderung -->
    <section class="kontakt-cta" aria-labelledby="kontakt-cta-titel">
        <div class="container kontakt-cta-inner">
            <h2 id="kontakt-cta-titel">Lassen Sie uns ins Gespräch kommen</h2>
            <p>
                Ich freue mich auf Ihren Anruf oder Ihre Nachricht.
                Gemeinsam finden wir heraus, wie ich Ihnen helfen kann.
            </p>
            <div class="cta-buttons">
                <a href="tel:015161657136" class="btn btn-primaer btn-gross">
                    0151 61 65 71 36
                </a>
                <a href="/pages/kontakt.php" class="btn btn-sekundaer btn-gross">
                    Nachricht schreiben
                </a>
            </div>
        </div>
    </section>
    <!-- ===== ENDE KONTAKT-CTA ===== -->

</main>
<!-- ===== ENDE HAUPTINHALT ===== -->

<?php
// Footer einbinden
include 'includes/footer.php';
?>
