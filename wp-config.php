<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'mixgigante' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'E7ES%wW9YLBhr/S@p9 :}YOhlVN tMT5FX` >+-p-.(2H[,F~LKv<%Tm4)_2F%hA' );
define( 'SECURE_AUTH_KEY',  'OTN57DJK$()V{rYRQ()9V*TW5f?+O^(QF$PbdF8mF%/,qG-]B<$3!uXclOwO]nDD' );
define( 'LOGGED_IN_KEY',    ':c(55V6llJI<`O4;(RF^rzN_|BZ:msxf0iu !mk_;Y$=2se&mj VLp+F6bp[qqtu' );
define( 'NONCE_KEY',        'a Q!MDl~~GfrlEF]^l(p&daVuu-8{`]#Lj^brLN9g(:TMH;v:qTsgx9ABgH5}~kP' );
define( 'AUTH_SALT',        'i2hCLo1vCSWgDnM]!ER,e=G?/gqM`:#ATW&Tma<-0cXTiultd:bfb,aV8fTeF2~a' );
define( 'SECURE_AUTH_SALT', '&U_>Pn:z?5.n !,?cAsY5;{eM=2q8ec@H/nBhHsHCz[Tv55.tjdcG8gc&7_XMD;t' );
define( 'LOGGED_IN_SALT',   '|Ky,lLtsJ`oiE?Ero`P|+# bt]Eh#9@$Mk#{wHy2-X`chNoz?K^{rQs>zq !]_Rz' );
define( 'NONCE_SALT',       '#r!*Sw9Q(vO[dgP(c)vb?`y3a&v2`cN1OM+9uHvC1/Ug9jC}cTE0JF:2jb;Nrfsy' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
