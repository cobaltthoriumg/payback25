# Payback25 - Schuldenverwaltung für Gruppen

## Überblick

Payback25 ist eine Schuldenverwaltungssoftware für mehrere Nutzer in Gruppen. Die Anwendung ermöglicht es Nutzern, Schulden in Gruppen zu verwalten und zu begleichen.

## Features

### Nutzerverwaltung
- Nutzer können sich mit Name, E-Mail + Passwort registrieren und anmelden.
- Die E-Mail muss unique sein.
- Es gibt keine 2FA, der Nutzer kann sich sofort anmelden.
- Passwort-Reset-Funktion: Nicht im MVP enthalten.
- E-Mail-Verifizierung: Nicht im MVP enthalten.

### Gruppenverwaltung
- Ein Nutzer kann eine Gruppe erstellen.
- Je Gruppe wird ein Link generiert und allen Nutzern angezeigt. Wenn dieser Link aufgerufen wird, bekommt ein eingeloggter Nutzer die Möglichkeit, der Gruppe beizutreten.
- Alle Nutzer einer Gruppe haben volle Rechte und können alle Aktionen auf der Gruppe ausführen.
- Gruppenlink: Wird als Hash aus dem Gruppennamen und dem Datum + Uhrzeit der Generierung erstellt. Es gibt keine Gültigkeitsdauer. Sobald der Link neu generiert wird, werden alte Links ungültig.

### Aktionen auf einer Gruppe
- **Nutzer einladen**: Jedem Nutzer wird der Link angezeigt. Der Link ist statisch und nicht erratbar (mit Token der neu generiert werden kann).
- **Gruppe löschen**: Die Gruppe wird gelöscht.
- **Gruppe verlassen**: Der Nutzer verlässt die Gruppe; verlässt der letzte Nutzer die Gruppe, wird die Gruppe gelöscht.
- **Ausgabe hinzufügen**:
  - Eine Ausgabe ist ein Kauf, dessen Betrag gleichmäßig zwischen allen Mitgliedern der Gruppe aufgeteilt wird.
  - Eine Ausgabe hat folgende Felder:
    - Zahlende Person: Auswahl zwischen Gruppenmitgliedern; default ist der angemeldete Nutzer.
    - Betrag.
    - Währung: Liste aller großen Währungen; Default EUR.
    - Text: eine Beschreibung.
- **Ausgaben bearbeiten oder löschen**: Ja, dies soll möglich sein.
- **Schulden begleichen**: Alle Schulden in der Gruppe werden beglichen. Die Schulden werden stets neu berechnet, wenn die Gruppe aufgerufen wird. Die Beträge, die einzelne Nutzer einzelnen anderen Nutzern schulden, werden nicht persistiert.
- Die Aktionen Schulden begleichen, Gruppe löschen und Gruppe verlassen benötigen eine Bestätigung.

### Angezeigte Informationen je Gruppe
- "Alle Gruppen" Link zur Liste der Gruppen.
- Schulden aller Nutzer an den angemeldeten Nutzer, aufgelistet je Währung.
- Liste der Ausgaben.
- Button "Gruppenmitglieder" -> Link zur Liste aller Gruppenmitglieder.
- Unten eine Liste der Aktionen.

### Ansicht der Gruppenmitglieder
- Liste der Nutzernamen und E-Mails.
- "Zurück zur Gruppe" Button.

### Ansicht nach dem Anmelden
- Liste aller Gruppen mit der Möglichkeit, eine Gruppe aufzurufen.
- Button "Gruppe erstellen".

### Gruppen-Einladung-Seite
- Wird nur angemeldeten Nutzern angezeigt.
- Button: "Der Gruppe beitreten".
- Button: "Liste meiner Gruppen".

### Startseite (nicht angemeldet)
- "Anmelden" - Link zur Anmeldeseite.
- "Registrieren" - Link zur Registrierungsseite.

### Startseite (angemeldet)
- Das ist die gleiche Seite wie die Liste der Gruppen.

### Gruppenseite
- Liste aller Gruppen des angemeldeten Nutzers.

### Registrierungsseite
- Seite zur Eingabe der Registrierungsdaten.

### Anmeldeseite
- E-Mail, Passwort.

## Technische Basis
- **Backend**: Laravel
- **Frontend**: Vue.js
- **Authentifizierung**: Laravel Breeze
- **Datenbank**: MariaDB
- **Build-Tool**: Vite
- **Styling**: Tailwind CSS

## Technische Anforderungen
- Datenbank: MariaDB.
- API für zukünftige Erweiterungen: REST-API (optional für zukünftige Erweiterungen).
