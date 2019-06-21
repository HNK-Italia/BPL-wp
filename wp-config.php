<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via
 * web, è anche possibile copiare questo file in «wp-config.php» e
 * riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni MySQL
 * * Prefisso Tabella
 * * Chiavi Segrete
 * * ABSPATH
 *
 * È possibile trovare ultetriori informazioni visitando la pagina del Codex:
 *
 * @link https://codex.wordpress.org/it:Modificare_wp-config.php
 *
 * È possibile ottenere le impostazioni per MySQL dal proprio fornitore di hosting.
 *
 * @package WordPress
 */

// ** Impostazioni MySQL - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'bpl-db' );

/** Nome utente del database MySQL */
define( 'DB_USER', 'root' );

/** Password del database MySQL */
define( 'DB_PASSWORD', '' );

/** Hostname MySQL  */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di Collazione del Database. Da non modificare se non si ha idea di cosa sia. */
define('DB_COLLATE', '');

/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ciò forzerà tutti gli utenti ad effettuare nuovamente il login.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ')Pjt6jkZv0B@Dqz$ R*Z.s{Ww%lib5v2jzd/~fA(Z.6$.mn9Ma0@>9dr:u|J/$?n' );
define( 'SECURE_AUTH_KEY',  '72KK vFKVeyBm{O>)mNXn35ofc}xrk.`OJJOKYh5GkI3[ddee/t<x56ibw:g7&Bb' );
define( 'LOGGED_IN_KEY',    '3x~Mi]u3JJ&Y[K_?%`~3BPKGVsm+@M/a` `EkoZWj[*jc-q7jBG<imEi{jy%_G-1' );
define( 'NONCE_KEY',        'Kt*;)Wk>1EWo4~$Yu15KayiwoW+4j`gOPf$UnIB;2m$}-{OVgm=OToizf.jT#nR3' );
define( 'AUTH_SALT',        'QpHs:`Ryx,> _ TA0`0>9U1{*ywU[qT}y A}MDp}hIUB$9usE:3&O0et)}R<KMee' );
define( 'SECURE_AUTH_SALT', 'K=KjAh4mP!V!qobBWY;J:yiPSeT+b$1m~]}hG:R.)6a#m@%BCJE|c?$*/qJ/T0qh' );
define( 'LOGGED_IN_SALT',   '-KR6y@0M)(]`xXM<cr7w:U(h^`!zdJD%)[5G$Jf6YW#~$l*?3[wMAyYK<q4~%S!z' );
define( 'NONCE_SALT',       '?BN6[GlI4=bH>jNJkm=MjVhamS9c~j,5khd@,3[QKIW_}2uhS [ROC2Bh<15[$I)' );

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi
 * durante lo sviluppo.
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 */
define('WP_DEBUG', false);

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta le variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');
