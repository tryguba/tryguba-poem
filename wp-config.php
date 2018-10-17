<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'TRYGUBA');

/** Имя пользователя MySQL */
define('DB_USER', 'administrator');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '1111');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Mitg;0R0T*}6oQ)`]E]$m7{:$|$[8!uf[-VlD>l=#>L$8PuNS]{^1mEL;lOLgaw*');
define('SECURE_AUTH_KEY',  ' wY.p;g1 }N3tGvbrv(zRxA59/#q[~,k9=FfkC!x$s^SRo^@`6-,bhNd84Q y:a(');
define('LOGGED_IN_KEY',    'iz?7UV*T#5uxOb8fj-D>>(C5f;^aVA< f:41y$.*z[Xt]%eg0ML;s<fh1<6p3< @');
define('NONCE_KEY',        'xo=C=YK_&=]PSD0X+#kD6=88MJ$[$!CF)A}|^c.c855e(bA./]F0a`}GUw0W&.a:');
define('AUTH_SALT',        'kE~}.|JTsjyw,+Q<$F(++XU99b-EpfI=ckgv5tFibAz;qdEC}#?]/I|(},NjBCw^');
define('SECURE_AUTH_SALT', 'so=IQt580F5GBgrf40!?R?/kfW2wFK:8W}.zCkMuNVP6:aaCmdbLAI}{JJ$<#W&$');
define('LOGGED_IN_SALT',   'W2sBnMnY`bvE;`-@rugZ~*0+s{<];Q7:Y7=4L5j*Q,QtkVTI*NBl[&7?ECm.(C&W');
define('NONCE_SALT',       'VwEaIETKl}a[Xj)#4[Q=?vV=R:?_E9t,Z^8h>wD$qW1,vhLUA-s>jh~U>%OsRz]C');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
define('FS_METHOD', 'direct');