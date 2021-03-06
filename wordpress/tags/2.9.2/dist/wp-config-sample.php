<?php
/**
 * Baskonfiguration f�r WordPress.
 *
 * Denna fil inneh�ller f�ljande konfigurationer: Inst�llningar f�r MySQL , Tabellprefix,
 * S�kerhetsnycklar, WordPress-spr�k, och ABSPATH. Du kan hitta mer information genom
 * att bes�ka {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php}. Dina MySQL-uppgifter f�r du fr�n ditt webbhotell.
 *
 * Denna fil anv�nds av wp-config.php-genereringsskript under installationen.
 * Du beh�ver inte anv�nda webbplatsen, du kan kopiera denna fil direkt till
 * "wp-config.php" och fylla i v�rdena.
 *
 * @package WordPress
 */

// ** MySQL-inst�llningar - MySQL-uppgifter f�r du fr�n ditt webbhotell ** //
/** Namnet p� databasen du vill anv�nda f�r WordPress */
define('DB_NAME', 'ange-databasnamn');

/** MySQL-databasens anv�ndarnamn */
define('DB_USER', 'ange-databasanvandare');

/** MySQL-databasens l�senord */
define('DB_PASSWORD', 'ange-ditt-databaslosenord');

/** MySQL-server */
define('DB_HOST', 'localhost');

/** Teckenkodning f�r tabellerna i databasen. */
define('DB_CHARSET', 'utf8');

/** Kollationeringstyp f�r databasen. �ndra inte om du �r os�ker. */
define('DB_COLLATE', '');

/**#@+
 * Unika autentiseringsnycklar.
 *
 * �ndra dessa till unika fraser!
 * Du kan generera nycklar med {@link http://api.wordpress.org/secret-key/1.1/ WordPress.org secret-key service}
 * Du kan n�r som helst �ndra dessa nycklar f�r att g�ra aktiva cookies obrukbara, vilket tvingar alla anv�ndare att logga in p� nytt.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'ange en unik fras');
define('SECURE_AUTH_KEY', 'ange en unik fras');
define('LOGGED_IN_KEY', 'ange en unik fras');
define('NONCE_KEY', 'ange en unik fras');
/**#@-*/

/**
 * Tabellprefix f�r WordPress Databasen.
 *
 * Du kan ha flera installationer i samma databas om du ger varje installation ett unikt
 * prefix. Endast siffror, bokst�ver och understreck!
 */
$table_prefix  = 'wp_';

/**
 * WordPress-spr�k, f�rinst�llt f�r svenska.
 *
 * Du kan �ndra detta f�r att �ndra spr�k f�r WordPress.  En motsvarande .mo-fil
 * f�r det valda spr�ket m�ste finnas i wp-content/languages. Exempel, l�gg till
 * sv_SE.mo i wp-content/languages och ange WPLANG till 'sv_SE' f�r att f� sidan
 * p� svenska.
 */
define ('WPLANG', 'sv_SE');

/* Det var allt, sluta redigera h�r! Blogga p�. */

/** Absolut s�kv�g till WordPress-katalogen. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Anger WordPress v�rden och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');