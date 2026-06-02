/**
 * main.js – Hauptskript
 * Projekt: Andrea Brackemeyer – Alltagsbegleitung
 *
 * Enthält: Navigation (Hamburger), sanftes Scrollen, Header-Scroll-Effekt,
 *          dezente Scroll-Animationen via IntersectionObserver
 */

document.addEventListener('DOMContentLoaded', function () {

    // ===== HAMBURGER-NAVIGATION =====
    const navToggle = document.getElementById('nav-toggle');
    const hauptnavigation = document.getElementById('hauptnavigation');

    if (navToggle && hauptnavigation) {
        navToggle.addEventListener('click', function () {
            const istOffen = hauptnavigation.classList.toggle('ist-offen');

            // Barrierefreiheit: aria-expanded aktualisieren
            navToggle.setAttribute('aria-expanded', istOffen ? 'true' : 'false');
            navToggle.setAttribute('aria-label', istOffen ? 'Navigation schließen' : 'Navigation öffnen');
        });

        // Navigation schließen wenn außerhalb geklickt wird
        document.addEventListener('click', function (ereignis) {
            const klickAusserhalb = !navToggle.contains(ereignis.target) && !hauptnavigation.contains(ereignis.target);
            if (klickAusserhalb && hauptnavigation.classList.contains('ist-offen')) {
                hauptnavigation.classList.remove('ist-offen');
                navToggle.setAttribute('aria-expanded', 'false');
                navToggle.setAttribute('aria-label', 'Navigation öffnen');
            }
        });

        // Navigation schließen bei Fenstergröße-Änderung (Desktop-Wechsel)
        window.addEventListener('resize', function () {
            if (window.innerWidth >= 900) {
                // Desktop: aria-Status zurücksetzen, CSS übernimmt Sichtbarkeit
                navToggle.setAttribute('aria-expanded', 'false');
            }
        });
    }


    // ===== SANFTES SCROLLEN ZU ANKER-LINKS =====
    document.querySelectorAll('a[href^="#"]').forEach(function (link) {
        link.addEventListener('click', function (ereignis) {
            const zielId = this.getAttribute('href').substring(1);
            const zielElement = document.getElementById(zielId);

            if (zielElement) {
                ereignis.preventDefault();
                // Header-Höhe berücksichtigen
                const headerHoehe = document.querySelector('.site-header')?.offsetHeight || 70;
                const zielPosition = zielElement.getBoundingClientRect().top + window.scrollY - headerHoehe - 20;

                window.scrollTo({ top: zielPosition, behavior: 'smooth' });
            }
        });
    });


    // ===== HEADER: KLASSE BEIM SCROLLEN =====
    // Hysterese-Schwellwerte verhindern schnelles Hin-und-Her-Schalten (Springen)
    // Das Logo benutzt transform statt height – kein Layout-Reflow, kein Springen
    const header = document.querySelector('.site-header');
    if (header) {
        const SCROLL_EIN = 50;   // Klasse hinzufügen wenn > 50px gescrollt
        const SCROLL_AUS = 25;   // Klasse entfernen wenn < 25px gescrollt

        window.addEventListener('scroll', function () {
            const pos = window.scrollY;
            const istGescrollt = header.classList.contains('ist-gescrollt');

            if (!istGescrollt && pos > SCROLL_EIN) {
                header.classList.add('ist-gescrollt');
            } else if (istGescrollt && pos < SCROLL_AUS) {
                header.classList.remove('ist-gescrollt');
            }
        }, { passive: true });
    }


    // ===== SCROLL-ANIMATIONEN (dezentes Fade-In beim Scrollen) =====
    const bewegungReduziert = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    if ('IntersectionObserver' in window && !bewegungReduziert) {

        // Elemente, die beim Scrollen eingeblendet werden sollen
        const selektoren = [
            '.abschnitt-kopf',
            '.kernwert',
            '.leistungs-karte',
            '.leistung-detail-inner',
            '.vertrauen-bild-wrapper',
            '.ansatz-karte',
            '.weg-karte',
            '.fakten-karte',
            '.ablauf-schritt',
            '.kontakt-karte',
            '.kontakt-formular-wrapper',
            '.about-bild-wrapper',
            '.logo-sprueche-logo-wrapper',
            '.sprueche-container'
        ].join(', ');

        const elemente = document.querySelectorAll(selektoren);

        // Nur Elemente unterhalb des initialen Sichtbereichs animieren –
        // bereits sichtbare Elemente beim Laden nicht verstecken
        elemente.forEach(function (el) {
            const rect = el.getBoundingClientRect();
            if (rect.top >= window.innerHeight - 60) {
                el.classList.add('scroll-rein');
            }
        });

        // Gestaffelte Verzögerung für Karten innerhalb von Raster-Gruppen
        const rasterGruppen = document.querySelectorAll(
            '.karten-raster, .ansatz-karten, .wege-raster, .fakten-liste, .ablauf-schritte, .kernwerte-inner'
        );
        rasterGruppen.forEach(function (gruppe) {
            gruppe.querySelectorAll('.scroll-rein').forEach(function (kind, i) {
                kind.style.transitionDelay = (i * 0.1) + 's';
            });
        });

        // IntersectionObserver: Klasse hinzufügen sobald Element sichtbar wird
        const beobachter = new IntersectionObserver(function (eintraege) {
            eintraege.forEach(function (eintrag) {
                if (eintrag.isIntersecting) {
                    eintrag.target.classList.add('scroll-sichtbar');
                    beobachter.unobserve(eintrag.target); // Einmal animieren genügt
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -30px 0px'
        });

        // Nur vorbereitete Elemente beobachten
        document.querySelectorAll('.scroll-rein').forEach(function (el) {
            beobachter.observe(el);
        });
    }

});
