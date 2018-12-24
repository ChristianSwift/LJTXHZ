<?php
/**
 * WordPress基础配置文件。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以不使用网站，您需要手动复制这个文件，
 * 并重命名为“wp-config.php”，然后填入相关信息。
 *
 * 本文件包含以下配置选项：
 *
 * * MySQL设置
 * * 密钥
 * * 数据库表名前缀
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define('DB_NAME', 'ljtxhz.com');

/** MySQL数据库用户名 */
define('DB_USER', 'ljtxhz.com');

/** MySQL数据库密码 */
define('DB_PASSWORD', 'ljtxhz.com.password');

/** MySQL主机 */
define('DB_HOST', '127.0.0.1');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8mb4');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', '');

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '`O;Gp.t0yg1Kq&;>#{wqXZ6ZKK^5Khmz]`Gh^rrlmb|,43B=$6s{$[k6{1W9/Fk~');
define('SECURE_AUTH_KEY',  'P~pc?JXF-VKeJGsmZMG0(;7gQMT=IU@j;oPEt!:tXZ]YeT_Mu5aKS/5]+kJ2mhSP');
define('LOGGED_IN_KEY',    'Pmo==YbBEbja4 X;s&t-1@iKkqUOaq*[H:j919vl=n-Q~~d)n9ch1$YVK`v&^~e)');
define('NONCE_KEY',        '[%&j.Ph au{%2iJ)C6C,2BpR>6y{p/)d/q(+x+qaO}L+bK5}w1k~qw>/^#/z[3#A');
define('AUTH_SALT',        'NT37[@up}-r;b@CAU{8YX|jn{1Y13;t$EdxM9m&V 3kV9duw0FWnIU]?`c?6$Oj8');
define('SECURE_AUTH_SALT', '_I7dIo,s+*7t^MYNGEH&5c3A*lI_&D?5_&k@j&Y6$pYky/[nU!_?HfB%DP)g)vD@');
define('LOGGED_IN_SALT',   'H?6flw.mouU8^/z:K6wH17&Lz ghY-^?!xlk$mhL|wOPOu-S[vC8!hMbMB>0p$|X');
define('NONCE_SALT',       'w)vKeWyN[cEcz5_L!EVgv&Uyv&8xvMS[k}p~udXXGI*=QxQrs.d0V 4Q()G~Jq2H');

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'lcp_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问Codex。
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** 设置WordPress变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');
