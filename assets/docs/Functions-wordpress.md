# Functions | Wordpress

## !defined('ABSPATH')

- `if (!defined('ABSPATH')) { exit; }`

- `description` Checks if `ABSPATH` is defined to prevent direct file access. Enhances security by ensuring files are executed within the WordPress environment.

- `params` None. `defined()` is a conditional statement rather than a function.

## define()

- `define( 'LWS_CRUD_PLUGIN_PATH', plugin_dir_path(__FILE__) );`

- `description` Sets a named constant, used in WordPress for configuration settings like `WP_DEBUG` or paths like `LWS_CRUD_PLUGIN_PATH`.

- `params`
  - `name` (string): Name of the constant.
  - `value` (mixed): Value of the constant.
  - `case_insensitive` (boolean, optional): Whether the name is case-insensitive. Deprecated and not recommended.

- `example` 
  - define( string $name, mixed $value, bool $case_insensitive = false )
  - `$name (string)` The name of the constant. It is customary to use uppercase letters and underscores for constant names.
  - `$value (mixed)` The value of the constant. This can be any scalar type (integer, float, string, boolean) or an array.
  - `$case_insensitive (bool, optional)` Whether the constant name is case-insensitive. Defaults to false. This parameter is deprecated as of PHP 7.3.0.

## `require_once()`

- `description` Includes and evaluates the specified file only once; if the file has already been included, it will not be included again.

- `params`
-- $filename (string): Path to the file to be included.

## trailingslashit()

- `require_once trailingslashit( LWS_CRUD_PLUGIN_PATH ) . 'includes/menu.php';`

- `description` Ensures a string (path) has a trailing slash (/).

- `params`
-- `$string (string)` The input string to which a trailing slash will be appended, if not present.

## register_activation_hook( __FILE__, 'lws_create_table' );

- `register_activation_hook( __FILE__, 'lws_create_table' );`

## add_option()

- `add_option( 'demo_form_table_version', '0.0.0' );`

## register_uninstall_hook()

- `register_uninstall_hook( __FILE__, 'demo_delete_db_data' );`

## add_action()

- `add_action( 'plugin_loaded', 'lws_crud_plugin_init' );`

## add_filters()

- `add_filters(  );`