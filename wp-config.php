<?php
/**
 * Podstawowa konfiguracja WordPressa.
 *
 * Skrypt wp-config.php uzywa tego pliku podczas instalacji.
 * Nie musisz dokonywac konfiguracji przy pomocy przegladarki internetowej,
 * mozesz tez skopiowac ten plik, nazwac kopie "wp-config.php"
 * i wpisac wartosci recznie.
 *
 * Ten plik zawiera konfiguracje:
 *
 * * ustawien MySQL-a,
 * * tajnych kluczy,
 * * prefiksu nazw tabel w bazie danych,
 * * ABSPATH.
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Ustawienia MySQL-a - mozesz uzyskac je od administratora Twojego serwera ** //
/** Nazwa bazy danych, której uzywac ma WordPress */
define('DB_NAME', 'db_daro2');

/** Nazwa uzytkownika bazy danych MySQL */
define('DB_USER', 'db_daro');
/** Haslo uzytkownika bazy danych MySQL */
define('DB_PASSWORD', 'daro1993');

/** Nazwa hosta serwera MySQL */
define('DB_HOST', 'db0.bluequeen.tk');

/** Kodowanie bazy danych uzywane do stworzenia tabel w bazie danych. */
define('DB_CHARSET', 'utf8mb4');

/** Typ porównan w bazie danych. Nie zmieniaj tego ustawienia, jesli masz jakies watpliwosci. */
define('DB_COLLATE', '');

/**#@+
 * Unikatowe klucze uwierzytelniania i sole.
 *
 * Zmien kazdy klucz tak, aby byl inna, unikatowa fraza!
 * Mozesz wygenerowac klucze przy pomocy {@link https://api.wordpress.org/secret-key/1.1/salt/ serwisu generujacego tajne klucze witryny WordPress.org}
 * Klucze te moga zostac zmienione w dowolnej chwili, aby uczynic niewaznymi wszelkie istniejace ciasteczka. Uczynienie tego zmusi wszystkich uzytkowników do ponownego zalogowania sie.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '~s:):[2wp6)H:,dJ:CoO3OHzvA1m{>?i+9+Mi${cdR+a<oVle_HkS+26^*tja{z!');
define('SECURE_AUTH_KEY',  '&_bNOn1?ct`D$ony(Uh<3F+z*D-OB:y>WW+h+Dg[[kn~GlzFhHC-f&E&anF;5j+R');
define('LOGGED_IN_KEY',    '0T-P/h?_(+#Jnym&@q`Ogi1La.H<8.QdnAxRsn$];eX-2@%D+Dk@J]!.?G.SG+Kn');
define('NONCE_KEY',        'XWbhJu|I[E+@*Q|unX.v)N5s!-VP3VoK]7>+?M<(p*21#Ro+~75bxUhc5o0${!-t');
define('AUTH_SALT',        'I7FQ>.OW@$<TsV[z?lBk4X;u^$!j`@MTX?l*<q_[=;t -oz`O/LjZR-HHXEtA*H-');
define('SECURE_AUTH_SALT', ' GJIxc]]rOyXX]3izhZakLTRwHlCs;mesI55j;2jJy@+|a}c*}hwC432o:]yv]wz');
define('LOGGED_IN_SALT',   '4;rRjGz;SWlDj=d!+sdE*^f3W!_0S@7[U*s9f{ge_F]tn7}Uv;- uM,4R?c7eH-=');
define('NONCE_SALT',       'xe892hQR-ghv(F+T7M[XJghOP7h#nrnbNJtm8!HKWB|9Uf)lz|]x!(|h2#|?_q]E');

/**#@-*/

/**
 * Prefiks tabel WordPressa w bazie danych.
 *
 * Mozesz posiadac kilka instalacji WordPressa w jednej bazie danych,
 * jezeli nadasz kazdej z nich unikalny prefiks.
 * Tylko cyfry, litery i znaki podkreslenia, prosze!
 */
$table_prefix  = 'wp_';

/**
 * Dla programistów: tryb debugowania WordPressa.
 *
 * Zmien wartosc tej stalej na true, aby wlaczyc wyswietlanie
 * ostrzezen podczas modyfikowania kodu WordPressa.
 * Wielce zalecane jest, aby twórcy wtyczek oraz motywów uzywali
 * WP_DEBUG podczas pracy nad nimi.
 *
 * Aby uzyskac informacje o innych stalych, które moga zostac uzyte
 * do debugowania, przejdz na strone Kodeksu WordPressa.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* To wszystko, zakoncz edycje w tym miejscu! Milego blogowania! */

/** Absolutna sciezka do katalogu WordPressa. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Ustawia zmienne WordPressa i dolaczane pliki. */
require_once(ABSPATH . 'wp-settings.php');
