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
define( 'DB_NAME', 'blagovistplus' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ',18sV?15p,M|9y31, 9YyN=>5?9IZ:[]n74:(.FrS3M>plA=B3}h[)HfI(hI)fcT' );
define( 'SECURE_AUTH_KEY',  'UAjP5[t+vlkx+Kim7t+H@M-/ fZA^tVm!+OGw2L3VSEu.]H$:;)+}TXWOt*|:9sU' );
define( 'LOGGED_IN_KEY',    '&W?d 3T{I3xmPcPZlU%&|jSqeH-^:,?nxjfl}16|EgEQxllD`}>QUR/Fan?%4_?J' );
define( 'NONCE_KEY',        'a7uY;i.V]h0k$0x.Jli|ir]a?#5rENR#W!ud:@c8i/W~^#w_ihl6txpi6<L/cwXz' );
define( 'AUTH_SALT',        '}6IKqdm$@|:D/]BHUEw|HCOw#J@(4z,AKhC;gSax#}WNwBa#Jkd^xk~5c~cI ?PT' );
define( 'SECURE_AUTH_SALT', 'Wc~{Bp~[#xqEoN1@lrMT7x_oD+Q*Xu8;O}2Q8@7BfThI;9rDRiyGUM!p>9oO]<F ' );
define( 'LOGGED_IN_SALT',   '6.nM{`z6;8:h`!1xyu[x%C4W1*CjKwGo1WTanYOO6y)>u2%:sAGC+/4ckN4{^X^M' );
define( 'NONCE_SALT',       '.U~_Z_:/cQsT#Bd`W#W=nba+{Qj5M`;9J|f1_,k|(q/j5gO/Wehx*=pXJ`WU1<WH' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
