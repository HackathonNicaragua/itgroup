<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'plagueofcrops');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'MX}m8KCdD:_uctday{J1):k|j5/slY-y&`FHIf?2vAe/N2t<F6=Sg;HQR:]mw}pa');
define('SECURE_AUTH_KEY', 'Y$m%H;&X@,H_@^s:5OvQNr[]g;2b^!G&t/w6[O]q0[%<*4 HLqu3?3d3>ZK13?xr');
define('LOGGED_IN_KEY', '?4@*I1<&FW@,M1c*dM;8.Q.z)8dPk4QI7h[rj/</%Vz+f`P2eRd`{.+x>F%29Mu%');
define('NONCE_KEY', '*T*&3oIn8OZxbZ/l#t5ZU Xq.1$R?270c>OpMh+%(9n wdZ>YgN1M@j[/%E(,_re');
define('AUTH_SALT', '9dJ*r5g2F5xD5IS!%LG<D-,&J>4?#<JwOP}QCut$GD,YMh$K8uva.R!I|Lo3j%P2');
define('SECURE_AUTH_SALT', '9rF7K0.pX3|RG|P9Dq9M tzUP(XRZh&K*qI:y8hhln+SQS PXsC}F?)FsESJ~>>C');
define('LOGGED_IN_SALT', '0w%_{30J?2b|99b~I)rb7-=j^^to;nguJF?7,9#{v0pNtfdigu=HgYs:-_b!-W#t');
define('NONCE_SALT', '#o8cM%;k516k]K#[_*r`L~F/eh?eAWy6rw:Z6Rca*s0.{VgeC57(D>&K(&wImSn&');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

