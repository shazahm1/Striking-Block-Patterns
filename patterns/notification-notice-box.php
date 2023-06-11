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
<!-- wp:group {"style":{"color":{"background":"#ffdb4f"},"spacing":{"padding":{"top":"1px","right":"1px","bottom":"1px","left":"1px"}}},"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group has-background" style="background-color:#ffdb4f;padding-top:1px;padding-right:1px;padding-bottom:1px;padding-left:1px"><!-- wp:group {"style":{"color":{"background":"#fff9cc","text":"#736b4c"},"border":{"style":"solid","width":"1px"},"spacing":{"blockGap":"var:preset|spacing|50","padding":{"top":"10px","right":"10px","bottom":"10px","left":"10px"}},"elements":{"link":{"color":{"text":"#736b4c"}}}},"borderColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-white-border-color has-text-color has-background has-link-color" style="border-style:solid;border-width:1px;color:#736b4c;background-color:#fff9cc;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px"><!-- wp:paragraph -->
<p>This is a paragraph in an Info Box and&nbsp;<a href="#" class="ek-link">a link</a>.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
PATTERN;

return array(
	'title'      => __( 'Notice Box', 'easy-themes-striking-block-patterns' ),
	'slug'       => 'notice-box',
	'categories' => array( 'notification' ),
	'content'    => $content,
);
