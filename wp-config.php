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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'dbdesafio1' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'H3x%oDX7uw&;_[R&mzJyr@bLmi(i(-<=g8{kGMA;cgF5Wiz%2o&xk`T-&TL(|!Gv' );
define( 'SECURE_AUTH_KEY',  '4s &^icDasU$u<uB+hB|ljt$7h#s_TNtNd)O2+d[|UpV|aF6uT^Y1:&#a@@h~S)4' );
define( 'LOGGED_IN_KEY',    '/1~[z+iF~=#i:EF+c<W35#k6k3vhngFgQS!,>L}!ei5O0,9h6fo:{)+`$tC]v;Dd' );
define( 'NONCE_KEY',        'Q+0}K<dJC?V8TkN)pP71exXwR>?C%F$%r3jl4aGcm7r7vxRFCwjl7dc&[tkj5xVD' );
define( 'AUTH_SALT',        'g{it^LO^^8<>=iBGt@U)!~9:ZYiv]ACU#Bm4HmpO.}y)tXF9K`u(J<2HAYC{syH7' );
define( 'SECURE_AUTH_SALT', 'D}V? cei>4}tlT~e`#l8LH]=!`^lk#V640AoI|~zNTH[Al_C[S[sSHtwhzmml}0V' );
define( 'LOGGED_IN_SALT',   '@d|OO;j?>iKI/U5 MPs#FqKUxAQm<gggm5sIz| pLGpAwjQ(JQQzai4+^]Z[9sDX' );
define( 'NONCE_SALT',       'x,?#^klRoo[dF>-bqh2~uq||vgCMWGj%1#x_LM1ojV}/EN$}}&uB8o{}p,H<ImB%' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
