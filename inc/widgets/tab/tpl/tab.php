<?php
/**
 * Template for displaying default element.
 *
 *
 * @author      ThimPress
 * @package     Thim_Builder/Templates
 * @version     1.0.0
 * @author      Thimpress, tuanta
 */

/**
 * Prevent loading this file directly
 */
defined( 'ABSPATH' ) || exit;

$template_path        = 'tab/tpl/';
$layout = (isset($instance['layout'] ) && !empty( $instance['layout'] )) ? $instance['layout'] : 'base';
?>

<?php thim_builder_get_template( $layout, array(
		'instance' => $instance,
	), $template_path ); ?>
