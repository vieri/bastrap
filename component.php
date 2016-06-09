<?php 
	
	/**
	* @author      Jordi Sorts
	* @package     Plantilla per Semab
	* @license     http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
	* @copyright   © 2016 www.websdefutbol.com. All rights reserved.
	*/
	
	defined('_JEXEC') or die;

	$app   = JFactory::getApplication();
	$doc   = JFactory::getDocument();

	$doc->addStyleSheet('templates/'.$this->template.'/css/template.css');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
	<head>
		<jdoc:include type="head" />
		<!--[if lt IE 9]>
			<script src="<?php echo $this->baseurl ?>/media/jui/js/html5.js"></script>
		<![endif]-->
	</head>
	<body id="print">
  		<div id="overall">
    		<jdoc:include type="message" />
    		<jdoc:include type="component" />
  		</div>
	</body>
</html>