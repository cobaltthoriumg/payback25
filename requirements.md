# Initiale Beschreibung

Das hier ist eine Laravel App.
Mit dieser App möchte ich eine Schuldenverwaltungssoftware für mehrere Nutzer in Gruppen erstellen.

Diese soll im ersten Schritt ein MVP sein.
Das Layout ist streng Mobile-First.

## Features
- Nutzer können sich mit Name, E-Mail + Passwort registrieren und anmelden.
- Ein Nutzer kann eine Gruppe erstellen
- Je Gruppe wird ein Link generiert und allen Nutzern angezeigt. Wenn dieser Link aufgerufen wird, bekommt ein eingeloggter Nutzer die Möglichkeit, der Gruppe beizutreten
- alle Nutzer eine Gruppe haben volle Rechte und können alle Aktionen auf der Gruppe ausführen
- Aktionen auf einer Gruppe:
    - Nutzer einladen: Jedem Nutzer wird der Link angezeigt. Der Link ist statisch und nicht erratbar (mit Token der neu generiert werden kann)
    - Gruppe löschen: Die Gruppe wird gelöscht
    - Gruppe verlassen: Der Nutzer verlässt die Gruppe; verlässt der letzte Nutzer die Gruppe, wird die Gruppe gelöscht
    - Ausgabe hinzufügen
        - Eine Ausgabe ist ein Kauf, dessen Betrag gleichmäßig zwischen allen Mitgliedern der Gruppe aufgeteilt wird
        - Eine Ausgabe hat folgende Felder
            - Zahlene Person: Auswahl zwischen Gruppenmitgliedern; default ist der angemeldete Nutzer
            - Betrag
            - Währung: Liste aller großen Währungen; Default EUR
            - Text: eine Beschreibung
    - Schulden begleichen: Alle Schulden in der Gruppe werden beglichen
    - Die Aktionen Schulden begleichen, Gruppe löschen und Gruppe verlassen benötigen   - eine Bestätigung
- Angezeigte Informationen je Gruppe:
    - "Alle Gruppen" Link zur Liste der Gruppen
    - Schulden aller Nutzer an den angemeldeten Nutzer, aufgelistet je Währung
    - Liste der Ausgaben
    - Button "Gruppenmitglieder" -> Link zur Liste aller Gruppenmitglieder
    - unten eine Liste der Aktionen
- Ansicht der Gruppenmitglieder
    - Liste der Nutzernamen und E-Mails
    - "Zurück zur Gruppe" Button
- Ansicht nach dem Anmelden:
    - Liste aller Gruppen mit der Möglichkeit, eine Gruppe aufzurufen
    - Button "Gruppe erstellen"
- Gruppen-Einladung-Seite
    - wird nur angemeldeten Nutzern angezeigt
    - Button: "Der Gruppe beitreten"
    - Button: "Liste meiner Gruppen"
- Startseite (nicht angemeldet)
    - "Anmelden" - Link zur Anmeldeseite
    - "Registrieren" - Link zur Registrierungsseite
- Startseite (angemeldet)
    - Das ist die gleiche Seite wie die Liste der Gruppen
- Gruppenseite
    - Liste aller Gruppen des angemeldeten Nutzers
- Registrierungsseite
    - Seite zur Eingabe der Registrierungsdaten
    - Die E-Mail muss unique sein
    - Es gibt keine 2FA, der Nutzer kann sich sofort anmelden
- Anmeldeseite
    - E-Mail, Passwort


