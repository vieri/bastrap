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
		$linktype = '<img src="'.$item->menu_image.'" alt="'.$item->title.'" />	<span class="image-title">'.$item->title.'</span> ' :
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

	$flink = $item->flink;
	$flink = JFilterOutput::ampReplace(htmlspecialchars($flink));

	switch ($item->browserNav) :
		default:
		case 0:
	?><a <?php echo $class; ?>href="<?php echo $flink; ?>" <?php echo $title; ?>><span><?php echo $linktype; ?></span></a><?php
			break;
		case 1:
			// _blank
	?><a <?php echo $class; ?>href="<?php echo $flink; ?>" target="_blank" <?php echo $title; ?>><span><?php echo $linktype; ?></span></a><?php
			break;
		case 2:
			// window.open
			$options = 'toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes,'.$params->get('window_open');
				?><a <?php echo $class; ?>href="<?php echo $flink; ?>" onclick="window.open(this.href,'targetWindow','<?php echo $options;?>');return false;" <?php echo $title; ?>><span><?php echo $linktype; ?></span></a><?php
			break;
	endswitch;
