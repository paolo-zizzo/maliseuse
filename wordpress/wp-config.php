<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'maliseuse' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '4aJfVB_QZI@(7*CN;$8{m]Mf7H)#[h8(5/M/-ZWT,tTbIM/]j#?X||8oV~05q;P^' );
define( 'SECURE_AUTH_KEY',  '-ZEMVqI,X=]%l.tCzVJN7zEf$@1u0C5C19b$Z`<kpF>P<Ygld5mPDq1KCD6NgYMb' );
define( 'LOGGED_IN_KEY',    ' oB5+Y6*8ZIp2bzz8NV-Os8&n4i8x>B-*&8?3jYi4%a_x(pQ<|)W2xn}6G- .%tt' );
define( 'NONCE_KEY',        'ZF:_,Qem7i0>r&Pb[*(/dIjt$+@^+_X[u5An~D/u3O*$ELmk`4P{jFn+PZdJ/Z7^' );
define( 'AUTH_SALT',        'pl03Yx;uyVD-Xe+Pa1GMUfltj.pejJJG*L5C;+Ol6Q# -%QXCv=J[p0yY@A6{LGD' );
define( 'SECURE_AUTH_SALT', 'm5y|Z_2Wvg=/$,U0@8htg_:@)}#f6^|${^E?B2v3.MvY1h{?Wq1uo/ARZn<I(EnX' );
define( 'LOGGED_IN_SALT',   '$nCEs-98[S&I[adr|hp_=uBx5}lhkY[sJKIJ]3A-Tll&hIa|Cs@>9M?>F$o&UO4Z' );
define( 'NONCE_SALT',       'tSAg4(|=--_YdbWnzU1Fl<|lQ`n*Q!%./>dbp=XgYlhei2x.pb2u6}B781Jkivyr' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_ALLOW_REPAIR', true);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
