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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'crud_wp' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         '/&PontBCs~eRl+?n`G-7&H}55>`DE|HWcyM#%C{`9bPpda^Gj/;@(Ll</#?r}hOY' );
define( 'SECURE_AUTH_KEY',  's-BBx@a,c*<ggO~t<]Up!UF|X3J/i&6L>cLxtcGn2c<?]E$vm49^wiCIH[_guM3Y' );
define( 'LOGGED_IN_KEY',    'Tiu:pMkw.C!]B 2/33z)e|VakbGH2*>giK>qRO%hvn,Zz-{aR_Gm!<Hh)Ko@l(RA' );
define( 'NONCE_KEY',        'JHjqN`w]nbmT:H$#]nn.0S_HvV>MXI:tsQ$D`>U}1Ip9)5N7OW>3:0wcShu`-.}a' );
define( 'AUTH_SALT',        'LMPRi,uuh5_xaYGP;p*)3_lL{)TQ>/#U `?;Tug^)=ULvsO{%9/3,C;T+G5X6dW<' );
define( 'SECURE_AUTH_SALT', 'c03.6))Ts0Dk[M^sT6)Z4;*44aK!N@2kbDmpG8w6eha(ei~%9/`6ZvntA${6vm<D' );
define( 'LOGGED_IN_SALT',   'AU1q$8$MjT[)>:.[UlQFl|C34>VkVu_zz!ICj)6swTn -7Ye^rrSm#+hmM$,#xtC' );
define( 'NONCE_SALT',       '~L-0NjD/u7W[9I{X@fD21S/}^<53QbmT6)D?txmFNWn0gwrG*LWS-XDrEMp,&Akr' );

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
