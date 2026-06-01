/**
 * main.js – Hauptskript
 * Projekt: Andrea Brackemeyer – Alltagsbegleitung
 *
 * Enthält: Navigation (Hamburger), sanftes Scrollen, keine unnötigen Effekte
 */

// Warten bis das DOM vollständig geladen ist
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
    // Für interne Anker-Links (z.B. /pages/leistungen.php#gesellschaft)
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


    // ===== HEADER: SCHATTEN BEI SCROLLEN =====
    // Leichten Schatten hinzufügen wenn nicht ganz oben
    const header = document.querySelector('.site-header');
    if (header) {
        window.addEventListener('scroll', function () {
            if (window.scrollY > 10) {
                header.style.boxShadow = '0 3px 15px rgba(0, 0, 0, 0.18)';
            } else {
                header.style.boxShadow = '0 2px 8px rgba(0, 0, 0, 0.12)';
            }
        }, { passive: true });
    }

});
