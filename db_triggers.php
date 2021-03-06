<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Triggers management.
 *
 * @package PhpMyAdmin
 */

/**
 * Include required files
 */
require_once 'libraries/common.inc.php';
require_once 'libraries/common.lib.php';

/**
 * Include JavaScript libraries
 */
$GLOBALS['js_include'][] = 'rte/common.js';
$GLOBALS['js_include'][] = 'rte/triggers.js';

if ($GLOBALS['cfg']['CodemirrorEnable']) {
    $GLOBALS['js_include'][] = 'codemirror/lib/codemirror.js';
    $GLOBALS['js_include'][] = 'codemirror/mode/mysql/mysql.js';
}

/**
 * Include all other files
 */
require_once 'libraries/rte/rte_triggers.lib.php';

/**
 * Do the magic
 */
$_PMA_RTE = 'TRI';
require_once 'libraries/rte/rte_main.inc.php';

?>
