<?php
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
define('DB_NAME', 'jornada');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '@/a8J:C$`pzi$bBk&S3q>`IK@-eeKHx>lMC]1o-]As{gY,[E-gHmZo~Fbvi$OdH$');
define('SECURE_AUTH_KEY',  'Oz2B-N0Y6%bMU.R^UTLbT!!t5<HU[nj/H;?nuIymh@Z2w=]K4+kcxU@L_6K-=qte');
define('LOGGED_IN_KEY',    'w_,8)ocyG/q]|?kNo;]OKcy};@1 =>VLLCqtB)#%`Ow_2&-K&(2CtX3g2Pf,*/ac');
define('NONCE_KEY',        'iPJX6c}hUw7m]X?>?pZr~H6XB$_Sbu-n mRxS{e5:DRjL#gU`q4B+3Vz>vSsN@mL');
define('AUTH_SALT',        'b!91NUX,)`tY,mYVUz##.Mzm6PCm<SForyXqsxhH@|I|7E&0Vm(&p+S*-_ 4dN-/');
define('SECURE_AUTH_SALT', '-Dg6?lg7$JM+(]K+_v!Mhm1_31w_]S6HqgK7&l?i$ >HRM*n;{AHy}L#tWL0d&6^');
define('LOGGED_IN_SALT',   'R.?kqol]jUEo*:S N[L^s>q[*gyMv2om33#j:[Ph^cK#LEC>Qc_%H%=w2$0^^1_O');
define('NONCE_SALT',       '|q-a(N`8L$P<pW3s9JvySWF2LbOR*0*%7b|ABuMbzTouUt;8(4*K<Kk[:LUGAcW&');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente ao
 * idioma escolhido deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define('WPLANG', 'pt_BR');

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
