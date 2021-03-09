<?php
/*define( 'WP_CONTENT_DIR', '/home/panadericq/www/wp-contenido' ); // Do not remove. Removing this line could break your site. Added by Security > Settings > Change Content Directory.
define( 'WP_CONTENT_URL', 'http://panaderiajesus.com/wp-contenido' ); // Do not remove. Removing this line could break your site. Added by Security > Settings > Change Content Directory.*/
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
define('DB_NAME', 'panadericqdb2gb');
/** Tu nombre de usuario de MySQL */
define('DB_USER', 'panadericqdb2gb');
/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'l4D4rS3n415');
/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'panadericqdb2gb.mysql.db');
/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');
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
define('AUTH_KEY', 'a{+Yx/!9$_Z#@0{VD*v6#,A%,:mLs8MH4e+iT.kgc_6We(]]V:eS#/FR0v+7E#=,');
define('SECURE_AUTH_KEY', '4[9e@ItSF^ypF;Cm:dBKCU4wj[`BN$2D|xm5|I%v.r=j^er/@ZoW/6c.5R%x|$DA');
define('LOGGED_IN_KEY', '<}s? .NG.beCU,@yL-fsn3%${O>g(-fK3mU~)JB^HS%ORs+N$|-!dTX+S6nJ6KH7');
define('NONCE_KEY', '8)qb)K5;Av4t|*`!%rko6-FW45$&$9vG@)d;XrFfuOgW+FU%=yx1}^fQfETLcpA|');
define('AUTH_SALT', '7iwk2RJo!th;/K=QDDQ57-t8$<?b2C_c-YoVa2Ex.$/I$rD!V&GNc^V+BN[34H-y');
define('SECURE_AUTH_SALT', 'F3;2S#,=!Kj[/8@~9?y|J$f8oU>z]7(k2N|q7P=gHyy^!2thw6O%*?P2Rf9cyON4');
define('LOGGED_IN_SALT', '`@}|.s;QE8$M]NR>roFu(+3vj8hW~xtDR*Ufw)AB2j-LumDRcg00H6S:aL@GZs;4');
define('NONCE_SALT', '=[%P4?I:9-]&5LGSTPtZ8@GW (;iB<aaxNE|.<C;-; c->3!SCe9=w7!+a_.| yd');
/**#@-*/
/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'p4n_';
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
/** Cambiar ubicación de la carpeta de plugins */
/**define( 'WP_PLUGIN_DIR', dirname(__FILE__) . '/addons' );*/
/** Subir imágenes a una carpeta fuera de wordpress */
define('UPLOADS', '/imagenes');
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
