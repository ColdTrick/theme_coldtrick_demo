<?php

	/**
	 * Elgg header contents
	 * This file holds the header output that a user will see
	 * 
	 * @package Elgg
	 * @subpackage Core
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Curverider Ltd
	 * @copyright Curverider Ltd 2009
	 * @link http://elgg.org/
	 **/
	 
?>

<div id="page_container">
<div id="page_wrapper">

<div id="layout_header">
<div id="wrapper_header">
	<!-- display the page title -->
	<h1><a href="<?php echo $vars['url']; ?>"><?php echo $vars['config']->sitename; ?></a><br /><font class='subtitle'><?php echo elgg_echo("theme:subtitle");?></font></h1>
	
	<img src="<?php echo $vars['url']; ?>mod/theme_coldtrick_demo/_graphics/logo.png">
</div><!-- /#wrapper_header -->
</div><!-- /#layout_header -->
