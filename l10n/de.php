<?php
$TRANSLATIONS = array(
"Feed contains invalid XML" => "Feed beinhaltet ungültiges XML",
"Feed not found: either the website does not provide a feed or blocks access. To rule out blocking, try to download the feed on your server's command line using curl: curl http://the-feed.tld" => "Feed nicht gefunden: entweder die Webseite unterstützt keine Feeds oder blockiert den Zugriff. Um das Blockieren auszuschließen, versuche den Feed mittels Serverkonsole runterzuladen: curl http://the-feed.tld",
"Detected feed format is not supported" => "Das Ermitteln des Feedformats wird nicht unterstützt",
"SSL Certificate is invalid" => "SSL-Zertifikat ist ungültig",
"Website not found" => "Webseite nicht gefunden",
"More redirects than allowed, aborting" => "Mehr Weiterleitungen als erlaubt, Abbruch",
"Bigger than maximum allowed size" => "Größer als die maximal erlaubte Größe",
"Request timed out" => "Zeitüberschreitung bei der Anfrage",
"Request failed, network connection unavailable!" => "Anfrage fehlgeschlagen, Netzwerkverbindung nicht verfügbar!",
"Request unauthorized. Are you logged in?" => "Anfrage nicht autorisiert. Bist Du angemeldet?",
"Request forbidden. Are you an admin?" => "Anfrage verboten. Bist Du ein Admin?",
"Token expired or app not enabled! Reload the page!" => "Token abgelaufen oder App nicht aktiviert! Bitte lade die Seite neu!",
"Internal server error! Please check your " => "Interner Serverfehler! Bitte überprüfe Dein",
"Request failed, ownCloud is in currently " => "Anfrage fehlgeschlagen, ownCloud ist derzeit",
"Can not add feed: Exists already" => "Feed konnte nicht hinzugefügt werden:  Existiert bereits",
"Articles without feed" => "Artikel ohne Feed",
"Can not add folder: Exists already" => "Ordner kann nicht hinzgefügt werden: Existiert bereits",
"Use ownCloud cron for updates" => "ownCloud-Cron für Updates nutzen",
"Disable this if you run a custom updater such as the Python updater included in the app" => "Deaktiviere dies, wenn Du einen eigenen Updater wie z.B. den in der App mitgelieferten Python-Updater nutzt",
"Purge interval" => "Aufräum-Intervall",
"Minimum amount of seconds after deleted feeds and folders are removed from the database; values below 60 seconds are ignored" => "Minimum an Sekunden, nachdem gelöschte Feeds und Ordner aus der Datenbank entfernt werden; Werte unter 60 Sekunden werden ignoriert",
"Maximum read count per feed" => "Maximale Anzahl an gelesenen Artikeln pro Feed",
"Defines the maximum amount of articles that can be read per feed which won't be deleted by the cleanup job; if old articles reappear after being read, increase this value; negative values such as -1 will turn this feature off completely" => "Definiert die maximale Anzahl an Artikeln, die pro Feed gelesen und bei einem Aufräumauftrag nicht aus der Datenbank gelöscht werden; wenn ältere Artikel nach dem Lesen erhalten bleiben sollen, erhöhen diesen Wert; negative Werte sowie -1 deaktivieren diese Funktion komplett",
"Maximum redirects" => "Maximale Anzahl der HTTP Redirects",
"How many redirects the feed fetcher should follow" => "Maximale Anzahl der HTTP Redirects, denen der Feed-Updater folgen soll",
"Maximum feed page size" => "Maximale Seitengröße des Feeds",
"Maximum feed size in bytes. If the RSS/Atom page is bigger than this value, the update will be aborted" => "Maximale Feedgröße in Bytes. Wenn die RSS/Atom-Seite größer als dieser Wert ist, wird die Aktualisierung abgebrochen",
"Feed fetcher timeout" => "Feed Updater maximum Timeout",
"Maximum number of seconds to wait for an RSS or Atom feed to load; if it takes longer the update will be aborted" => "Maximale Anzahl an Sekunden zum Laden eines RSS- oder Atom-Feeds; wenn dies länger dauert, wird die Aktualisierung abgebrochen.",
"Explore Service URL" => "Service-URL entdecken",
"If given, this service's URL will be queried for displaying the feeds in the explore feed section. To fall back to the built in explore service, leave this input empty" => "Falls angegeben, wird die URL dieses Dienstes zur Feed-Anzeige innerhalb des Explore-Feed-Bereichs abgefragt. Lasse dieses Feld unausgefüllt, um auf den eingebauten Explore-Dienst zurückzugreifen.",
"Saved" => "Gespeichert",
"Download" => "Herunterladen",
"Close" => "Schließen",
"Ajax or webcron cron mode detected! Your feeds will not be updated correctly. It is recommended to either use the operating system cron or a custom updater." => "Ajax- oder Webcron-Cron-Modus erkannt! Deine Feeds werden nicht korrekt aktualisiert. Es wird empfohlen, entweder den betriebssystemeigenen Cron oder einen benutzerdefinierten Updater zu verwenden.",
"How to set up the operating system cron" => "Wie der systemeigene Cron eingerichtet wird",
"How to set up a custom updater (faster and no possible deadlock) " => "Wie ein benutzerdefinierter Updater eingerichtet wird (zur Beschleunigung und Verhinderung von Blockaden)",
"Subscribe" => "Abonnieren",
"Refresh" => "Aktualisieren",
"No articles available" => "Keine Artikel verfügbar",
"No unread articles available" => "Keine ungelesenen Artikel verfügbar",
"Open website" => "Internetseite öffnen",
"Star article" => "Artikel zu Favoriten hinzufügen",
"Unstar article" => "Artikel aus Favoriten entfernen",
"Keep article unread" => "Artikel als ungelesen behalten",
"Remove keep article unread" => "„Artikel ungelesenen lassen“ entfernen",
"by" => "von",
"from" => "von",
"Play audio" => "Audio wiedergeben",
"Download video" => "Video herunterladen",
"Download audio" => "Audio herunterladen",
"Keyboard shortcut" => "Tastaturkürzel",
"Description" => "Beschreibung",
"right" => "Rechts",
"Jump to next article" => "Zum nächsten Artikel springen",
"left" => "Links",
"Jump to previous article" => "Zum vorherigen Artikel springen",
"Toggle star article" => "Artikel zu Favoriten hinzufügen/aus Favoriten entfernen",
"Star article and jump to next one" => "Artikel zu Favoriten hinzufügen und zum Nächsten springen",
"Toggle keep current article unread" => "Aktiven Artikel als gelesen/ungelesen markieren",
"Open article in new tab" => "Artikel in neuen Tab öffnen",
"Toggle expand article in compact view" => "Artikel in der kompakten Ansicht ausklappen/einklappen",
"Load next feed" => "Nächsten Feed laden",
"Load previous feed" => "Vorherigen Feed laden",
"Load next folder" => "Nächsten Ordner laden",
"Load previous folder" => "Vorherigen Ordner laden",
"Scroll to active navigation entry" => "Zum aktiven Navigationseintrag scrollen",
"Focus search field" => "Suchfeld aktivieren",
"Mark current article's feed/folder read" => "Feed/Ordner dieses Artikels als gelesen markieren",
"Web address" => "Internetadresse",
"Feed exists already!" => "Feed existiert bereits!",
"Folder" => "Ordner",
"No folder" => "Kein Ordner",
"New folder" => "Neuer Ordner",
"Folder name" => "Ordnername",
"Go back" => "Zurück gehen",
"Folder exists already!" => "Ordner existiert bereits!",
"New Folder" => "Neuer Ordner",
"Create" => "Erstellen",
"Explore" => "Entdecken",
"Update failed more than 50 times" => "Das Update ist über 50 mal fehlgeschlagen",
"Deleted feed" => "Feed gelöscht",
"Undo delete feed" => "Gelöschten Feed wieder herstellen",
"Rename" => "Umbenennen",
"Menu" => "Menü",
"Unpin feed from the top" => "Feed von der Spitze entfernen",
"Pin feed to the top" => "Feed an der Spitze anheften",
"No feed ordering" => "Keine Feed-Sortierung",
"Reversed feed ordering" => "Umgekehrte Feed-Sortierung",
"Normal feed ordering" => "Normale Feed-Sortierung",
"Enable full text feed fetching" => "Aktiviere Volltextfeedfetching",
"Disable full text feed fetching" => "Deaktviere Volltextfeedfetching",
"Mark updated articles unread" => "Die ausgewählten Artikel als ungelesen markieren",
"Rename feed" => "Feed umbenennen",
"Delete feed" => "Feed löschen",
"Mark all articles read" => "Alle Artikel als gelesen markieren",
"Dismiss" => "Ausblenden",
"Collapse" => "Zuklappen",
"Deleted folder" => "Ordner gelöscht",
"Undo delete folder" => "Gelöschten Ordner wiederherstellen",
"Rename folder" => "Ordner umbenennen",
"Delete folder" => "Ordner löschen",
"Starred" => "Favoriten",
"Unread articles" => "Ungelesene Artikel",
"All articles" => "Alle Artikel",
"Settings" => "Einstellungen",
"Keyboard shortcuts" => "Tastaturkürzel",
"Disable mark read through scrolling" => "Keine Artikel während des Scrollens als gelesen markieren",
"Compact view" => "Kompakte Ansicht",
"Expand articles on key navigation" => "Artikel bei der Navigation mit Tasten erweitern",
"Show all articles" => "Alle Artikel anzeigen",
"Reverse ordering (oldest on top)" => "Umgekehrte Sortierreihenfolge (älteste oben)",
"Subscriptions (OPML)" => "Abonnements (OPML)",
"Import" => "Importieren",
"Export" => "Exportieren",
"Error when importing: file does not contain valid OPML" => "Fehler beim Importieren: Datei enthält kein gültiges OPML",
"Unread/Starred Articles" => "Ungelese/Markierte Artikel",
"Error when importing: file does not contain valid JSON" => "Fehler beim Importieren: Datei enthält kein gültiges JSON"
);
$PLURAL_FORMS = "nplurals=2; plural=(n != 1);";
