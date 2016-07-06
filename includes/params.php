<?php 

	/**
  * @author      Jordi Sorts
  * @package     Plantilla per Semab
  * @license     http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
  * @copyright   © 2016 www.websdefutbol.com. All rights reserved.
  */

	defined('_JEXEC') or die;

	// Calcular width columnes del contingut
	$leftcolgrid = 0;
	if($this->countModules('esquerra') == 0)  {
		$leftcolgrid = 0;
	} else {
		$leftcolgrid = 3;
	}

	$rightcolgrid = 0;
	if($this->countModules('dreta') == 0)  {
		$rightcolgrid = 0;
	} else {
		$rightcolgrid = 3;
	}
	// Calcular width columnes del contingut

?>