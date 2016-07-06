<?php

	/**
	* @author      Jordi Sorts
	* @package     Plantilla Joomla Bootstrap FutBootstrap
	* @license     http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
	* @copyright   © 2016 www.websdefutbol.com. All rights reserved.
	*/

	defined('_JEXEC') or die;

	// Note. It is important to remove spaces between elements.
	$class = $item->anchor_css ? 'class="'.$item->anchor_css.'" ' : '';
	$title = $item->anchor_title ? 'title="'.$item->anchor_title.'" ' : '';

	if ($item->menu_image) {
		$item->params->get('menu_text', 1) ?
		$linktype = '<img src="'.$item->menu_image.'" alt="'.$item->title.'" /><div class="image-title">'.$item->title.'</div> ' :
		$linktype = '<img src="'.$item->menu_image.'" alt="'.$item->title.'" />';

		if ($item->deeper) {
			$class = 'class="'.$item->anchor_css.' dropdown-toggle" data-toggle="dropdown" ';
			$item->flink = '#';
		}
	} elseif ($item->deeper) { 
		$linktype = $item->title. '<b class="caret"></b>' ;
		if ($item->level < 2) {
			$class = 'class="'.$item->anchor_css.' dropdown-toggle" data-toggle="dropdown" ';
			$item->flink = '#';
		} else {
			$linktype = $item->title;
		}
	} else {
		$linktype = $item->title;
	}

	switch ($item->browserNav) :
		default:
		case 0:
	?><a href="<?php echo $item->flink; ?>" <?php echo $title; ?>><span <?php echo $class; ?>></span> <?php echo $linktype; ?></a><?php
			break;

		case 1:
			// _blank
	?><a <?php echo $class; ?>href="<?php echo $item->flink; ?>" target="_blank" <?php echo $title; ?>><span><?php echo $linktype; ?></span></a><?php
			break;

		case 2:
		// window.open

	?><a <?php echo $class; ?>href="<?php echo $item->flink; ?>" onclick="window.open(this.href,'targetWindow','toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes');return false;" <?php echo $title; ?>><span><?php echo $linktype; ?></span></a>
	<?php
			break;

	endswitch;

