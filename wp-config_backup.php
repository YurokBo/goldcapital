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
define( 'DB_NAME', 'goldcapital' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'admin' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'S5Ga(3p2]1' );

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
define( 'AUTH_KEY',         'y4;[=+5p~Mq87OOW:8P`Yxrf*+Tx@cICX2x$U,6Ir><E0,)z5[qa)~txtF*^S94S' );
define( 'SECURE_AUTH_KEY',  '*D.D]O-lXxtr]%?kK*5S66mB|jG2zopNpnSHIrp8e]C ~NY;9.H[}O>8dAyQdavc' );
define( 'LOGGED_IN_KEY',    'vf&97pNmjEn8_Mv@ `SGsQsj:j[!swQZ9?Y5TQegYct``.Wz@aU9NS5)_A5HAgOR' );
define( 'NONCE_KEY',        '-z:+)0YQy}>oZI_PIYtvYAD#81QL{eG{q+%U`Hpwh_k/SH5eHT.^3_acZ9Hgj<ft' );
define( 'AUTH_SALT',        'z<9N&H Ce`/$T9KT&TGMpJI5EO`?[_9se,sK0,^::-H~aC:]I}9hjj?8|POmjzLM' );
define( 'SECURE_AUTH_SALT', '3R0ak)iqhOO.U^+C/Eu;0QIh:=1#S?q{$tF~O Lg10f=#2-?d-z5PjbOMG7H=kO$' );
define( 'LOGGED_IN_SALT',   '=#H U`JH{i>)#Jb*bOJ#d#B8b2Jmw`kkreGn%P5NDR]^-g?m`i~svuS x %/.H!M' );
define( 'NONCE_SALT',       'Dy7FckIE!ziz>>QT6j273DT<[@$F7%9XZ]kw,/ggp!CLYjXZ_Lb<qN9Lie;3R(_-' );

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
