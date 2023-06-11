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
<!-- wp:group {"style":{"color":{"background":"#bfe098"},"spacing":{"padding":{"top":"1px","right":"1px","bottom":"1px","left":"1px"},"blockGap":"0px"}},"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group has-background" style="background-color:#bfe098;padding-top:1px;padding-right:1px;padding-bottom:1px;padding-left:1px"><!-- wp:group {"style":{"color":{"background":"#e2f2ce","text":"#466840"},"border":{"style":"solid","width":"1px"},"spacing":{"blockGap":"var:preset|spacing|50","padding":{"top":"10px","right":"10px","bottom":"10px","left":"10px"}},"elements":{"link":{"color":{"text":"#466840"}}}},"borderColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-white-border-color has-text-color has-background has-link-color" style="border-style:solid;border-width:1px;color:#466840;background-color:#e2f2ce;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px"><!-- wp:paragraph -->
<p>This is a paragraph in an Error Box and <a href="#">a link</a>.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"color":{"background":"#f6f8ec","text":"#466840"},"border":{"style":"solid","width":"1px"},"spacing":{"padding":{"top":"20px","right":"20px","bottom":"20px","left":"20px"},"margin":{"top":"1px"}},"elements":{"link":{"color":{"text":"#466840"}}}},"borderColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-white-border-color has-text-color has-background has-link-color" style="border-style:solid;border-width:1px;color:#466840;background-color:#f6f8ec;margin-top:1px;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:list {"ordered":true,"className":""} -->
<ol><!-- wp:list-item -->
<li>Message one.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Message two.</li>
<!-- /wp:list-item --></ol>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
PATTERN;

return array(
	'title'      => __( 'Success Box Message with Heading', 'easy-themes-striking-block-patterns' ),
	'slug'       => 'success-box-with-heading',
	'categories' => array( 'notification' ),
	'content'    => $content,
);
