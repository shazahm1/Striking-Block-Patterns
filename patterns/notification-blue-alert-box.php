<?php
/**
 *
 *
 * @since 1.0
 *
 * @category   WordPress\Plugin
 * @package    Connections Business Directory
 * @subpackage Connections\
 * @author     Steven A. Zahm
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2023, Steven A. Zahm
 * @link       https://connections-pro.com/
 */

$content = <<<PATTERN
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50","margin":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"style":{"color":{"background":"#e6f6ff"},"spacing":{"blockGap":"0px"},"layout":{"selfStretch":"fill"},"border":{"left":{"color":"var:preset|color|connections-blue","style":"solid","width":"4px"},"radius":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left","verticalAlignment":"top"}} -->
<div class="wp-block-group has-background" style="border-radius:5px;border-left-color:var(--wp--preset--color--connections-blue);border-left-style:solid;border-left-width:4px;background-color:#e6f6ff"><!-- wp:outermost/icon-block {"iconName":"","iconColor":"connections-blue","iconColorValue":"#00adee","hasNoIconFill":false,"width":"24px","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"margin":{"top":"12px","right":"10px","bottom":"10px","left":"10px"}}}} -->
<div class="wp-block-outermost-icon-block" style="margin-bottom:10px;margin-left:10px;margin-right:10px;margin-top:12px"><div class="icon-container has-icon-color has-connections-blue-color" style="color:#00adee;width:24px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><svg width="512pt" height="512pt" version="1.1" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m492.13 420.86-208.38-363.52c-3.6836-6.6289-9.6172-11.723-16.727-14.355-7.1133-2.6328-14.934-2.6328-22.047 0-7.1094 2.6328-13.043 7.7266-16.727 14.355l-208.38 363.52c-6.043 10.527-6.043 23.469 0 33.996 2.7656 4.9219 6.7969 9.0156 11.676 11.859 4.8789 2.8438 10.426 4.3359 16.074 4.3203h416.77c5.6289-0.003906 11.156-1.5039 16.016-4.3438 4.8594-2.8438 8.875-6.9297 11.633-11.836 6.0742-10.508 6.1133-23.449 0.10156-33.996zm-236.13 19.457c-9.5039 0-18.621-3.7773-25.344-10.496-6.7188-6.7227-10.496-15.84-10.496-25.344 0-9.5039 3.7773-18.621 10.496-25.344 6.7227-6.7227 15.84-10.496 25.344-10.496s18.621 3.7734 25.344 10.496c6.7188 6.7227 10.496 15.84 10.496 25.344 0 9.5039-3.7773 18.621-10.496 25.344-6.7227 6.7188-15.84 10.496-25.344 10.496zm35.84-117.76c0 12.805-6.832 24.637-17.918 31.039-11.09 6.4023-24.754 6.4023-35.844 0-11.086-6.4023-17.918-18.234-17.918-31.039v-153.6c0-12.805 6.832-24.637 17.918-31.039 11.09-6.4023 24.754-6.4023 35.844 0 11.086 6.4023 17.918 18.234 17.918 31.039z"></path></svg></div></div>
<!-- /wp:outermost/icon-block -->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px","margin":{"top":"18px","bottom":"18px"},"padding":{"right":"18px"}},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="margin-top:18px;margin-bottom:18px;padding-right:18px"><!-- wp:heading {"level":4,"style":{"typography":{"textTransform":"none","fontSize":"18px"}}} -->
<h4 class="wp-block-heading" style="font-size:18px;text-transform:none">Alert Heading</h4>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Alert message paragraph.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
PATTERN;

return array(
	'title'      => __( 'Red Alert Box', 'easy-themes-striking-block-patterns' ),
	'slug'       => 'red-alert-box',
	'categories' => array( 'notification' ),
	'content'    => $content,
);
