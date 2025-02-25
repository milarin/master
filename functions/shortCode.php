<?php
/**
 * 
 * ショートコード
 * 
 */

/*--------------------------------
 * PHPファイル読み込み
 *--------------------------------*/
function my_php_Include($params = array()) {
 extract(shortcode_atts(array('file' => 'default'), $params));
 ob_start();
 include(STYLESHEETPATH . "/$file.php");
 return ob_get_clean();
}
add_shortcode('myphp', 'my_php_Include');