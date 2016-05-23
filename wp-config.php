<?php
/**
 * In dieser Datei werden die Grundeinstellungen für WordPress vorgenommen.
 *
 * Zu diesen Einstellungen gehören: MySQL-Zugangsdaten, Tabellenpräfix,
 * Secret-Keys, Sprache und ABSPATH. Mehr Informationen zur wp-config.php gibt es
 * auf der {@link http://codex.wordpress.org/Editing_wp-config.php wp-config.php editieren}
 * Seite im Codex. Die Informationen für die MySQL-Datenbank bekommst du von deinem Webhoster.
 *
 * Diese Datei wird von der wp-config.php-Erzeugungsroutine verwendet. Sie wird ausgeführt,
 * wenn noch keine wp-config.php (aber eine wp-config-sample.php) vorhanden ist,
 * und die Installationsroutine (/wp-admin/install.php) aufgerufen wird.
 * Man kann aber auch direkt in dieser Datei alle Eingaben vornehmen und sie von
 * wp-config-sample.php in wp-config.php umbenennen und die Installation starten.
 *
 * @package WordPress
 */

/**  MySQL Einstellungen - diese Angaben bekommst du von deinem Webhoster. */
/**  Ersetze database_name_here mit dem Namen der Datenbank, die du verwenden möchtest. */
define('DB_NAME', 'wordpress');

/** Ersetze username_here mit deinem MySQL-Datenbank-Benutzernamen */
define('DB_USER', 'wordpressuser');

/** Ersetze password_here mit deinem MySQL-Passwort */
define('DB_PASSWORD', '250386');

/** Ersetze localhost mit der MySQL-Serveradresse */
define('DB_HOST', 'localhost');

/** Der Datenbankzeichensatz der beim Erstellen der Datenbanktabellen verwendet werden soll */
define('DB_CHARSET', 'utf8');

/** Der collate type sollte nicht geändert werden */
define('DB_COLLATE', '');

/**#@+
 * Sicherheitsschlüssel
 *
 * Ändere jeden KEY in eine beliebige, möglichst einzigartige Phrase.
 * Auf der Seite {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * kannst du dir alle KEYS generieren lassen.
 * Bitte trage für jeden KEY eine eigene Phrase ein. Du kannst die Schlüssel jederzeit wieder ändern,
 * alle angemeldeten Benutzer müssen sich danach erneut anmelden.
 *
 * @seit 2.6.0
 */
define('AUTH_KEY',         '32Q$$[&N^,o.{vw}rFN~pDNibeU`:-!c@&/DA}RDI8nXYOQ@b0G,q1Cj`^,qA*q1');
define('SECURE_AUTH_KEY',  'lwDSz+!S,ZJib+3zxg7=-m5-fiz&#):Tf)iaak!FBb{1Vo{M&w/m(-xe+mM$QA+a');
define('LOGGED_IN_KEY',    'ilX?)M#.x12F-/vh _#lpA-g!{eh:5a?5OwheNt.~&hYSF8$5rQW<gx;%4~#dZ;P');
define('NONCE_KEY',        'HrEBi4&W$TK>dM#tw>vQ4Ln9zH1hIA+v>fEu0/~#4Q.J[h@jAaz3Wocl}6%a<`;A');
define('AUTH_SALT',        'D[,G`_7w9_uJCtCNgw|H,+Wy&=!A%EkJ<k9fSwEqa[-EuB89;*S@uz*c_!T4E)G@');
define('SECURE_AUTH_SALT', 'K)<b4qen{m.}_6}*7&o2F|8@!S9qBgXzEc- ]tl8K+Vg)&8yc3^#8z?msCW|D7:]');
define('LOGGED_IN_SALT',   '~iuxH?c<|tPo]{VgyNn7|a CSL5F|:F7AW9~m#RI50Vs;}N[-OlH[.ot*$,ru83D');
define('NONCE_SALT',       'u7~&2KSP&%c]J>my_Rr2lK-qh4%|2}V0aM3FaWmVD7M:YQZ` 1!n7+ZW{IU$VCRU');

/**#@-*/

/**
 * WordPress Datenbanktabellen-Präfix
 *
 *  Wenn du verschiedene Präfixe benutzt, kannst du innerhalb einer Datenbank
 *  verschiedene WordPress-Installationen betreiben. Nur Zahlen, Buchstaben und Unterstriche bitte!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
