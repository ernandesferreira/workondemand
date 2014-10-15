<?php
/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

$__hasconfigured = false;
$__configuration_files = array(
	'localhost' => "wp-config-localhost.php",
	'qa' => "wp-config-qa.php",
);
foreach ($__configuration_files as $enviroment => $file) {
	if( file_exists( ABSPATH . $file ) && !$__hasconfigured) {
		require_once( ABSPATH . $file );

		$__hasconfigured = true;

		define('WP_ENV', $enviroment);
	}
}

if( !$__hasconfigured ) { 
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'jobsplace.local.com.br');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'root');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

}
/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '_8sB$f (XlYVm;i|iMvluXCliB2eiD87Za[k=@cF)6%^bJ}/zV.N^A4scnTN{%3o');
define('SECURE_AUTH_KEY',  '!{xRh5eMcX` #|iSWamhTIzArWSu@Dg$O{}*|Oe*_7{xOvP^:(zpbh T-KWG*JLB');
define('LOGGED_IN_KEY',    'FE*^*>D~l{:f)Qk|r0tcVQxK:Rsr5LYc;#U_<.`~F)pfatAybu3V3/Yl><<aorX5');
define('NONCE_KEY',        'FW,nCMcg7i`$UC^mW4-WaM,ZN%40m:8#guo91H;Eg&?0(I~(%L<%|?1ujJvywIz<');
define('AUTH_SALT',        'E1!-yg?^mN:ATy/fAO@Sh_Zq($c)j/P oDMav]u3y~YohUPllx}|mf6?;XK}uLT/');
define('SECURE_AUTH_SALT', '>^6+xvv=OU*1FirP]rFXc5@V=2Rp2:.!oTMgJ,qr}@{H$;fQm`[|{s]YZ0`(SOOj');
define('LOGGED_IN_SALT',   'W]9A$qAHx.pilxEO8Y:K-w;Z-YxX;:w^0TVp+@`QYO1)*|*41fVIV=CQRl.8FBbv');
define('NONCE_SALT',       'sE;J^#zlf=1|Y!o}-WeI]Y=T{vgS|qv-$<{4M3tR?:pB}anO3d<`y2HF^YP#/t=g');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
