<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи, язык WordPress и ABSPATH. Дополнительную информацию можно найти
 * на странице {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется сценарием создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('RELOCATE', true);
define('DB_NAME', 'ucc2');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется снова авторизоваться.
 *
 * @since 2.6.0
 */
/*define('AUTH_KEY',         'впишите сюда уникальную фразу');
define('SECURE_AUTH_KEY',  'впишите сюда уникальную фразу');
define('LOGGED_IN_KEY',    'впишите сюда уникальную фразу');
define('NONCE_KEY',        'впишите сюда уникальную фразу');
define('AUTH_SALT',        'впишите сюда уникальную фразу');
define('SECURE_AUTH_SALT', 'впишите сюда уникальную фразу');
define('LOGGED_IN_SALT',   'впишите сюда уникальную фразу');
define('NONCE_SALT',       'впишите сюда уникальную фразу');*/
define('AUTH_KEY',         'lTqffldr{K^FZjU{j*~qR$b|8xYZyw]|Ys,`:Hu5Rb8,}_}t#OaR-n97L}P>0W%6');
define('SECURE_AUTH_KEY',  '6[70CK y3h4,eR?{]SgAY?e[U-|s/DIGr!%ZG@m5n6}dd&++/TE(;G`iE9xAMi6 ');
define('LOGGED_IN_KEY',    '5mW$q$c)Sl_Ul^83KPC*cs+sL+vj4OT /rjD++aQwjBIH(JBaF,ngpBcyA5Vf)Xp');
define('NONCE_KEY',        ')b<ET]pn+(*=4IlrUwm@rE`/JNY&j-L[Q&n-j?=@&?F3A]0+O~ZIWa+k-S,)O.s+');
define('AUTH_SALT',        '`Zu:Y,+~oOr&)y3[smGPMi1y*u?h^=0H+z<hVn=l`yU+`@,LZy@i!+vde./]L*z-');
define('SECURE_AUTH_SALT', 'aG+rS+-(!j-b4+;/JRY(:9rY-+$#zCbU~ 9u?.?wP+ruFWvi*5M{q~4w*MOF;m.%');
define('LOGGED_IN_SALT',   'G*4-*Aj:e-+P$h{<Kk>o3?lp+*J;Z7N?UR 4HX+7.za>/q2)WFf3&74/O|A4U:wW');
define('NONCE_SALT',       'j1%WQnR.mOv|3hQP6>%0a1i-].o&&+M?dSd5eK~1d0F.ejA-}ks.V[$0AaRbc_$L');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько блогов в одну базу данных, если вы будете использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Язык локализации WordPress, по умолчанию английский.
 *
 * Измените этот параметр, чтобы настроить локализацию. Соответствующий MO-файл
 * для выбранного языка должен быть установлен в wp-content/languages. Например,
 * чтобы включить поддержку русского языка, скопируйте ru_RU.mo в wp-content/languages
 * и присвойте WPLANG значение 'ru_RU'.
 */
define('WPLANG', 'ru_RU');

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Настоятельно рекомендуется, чтобы разработчики плагинов и тем использовали WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
