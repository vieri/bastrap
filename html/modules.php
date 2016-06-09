<?php  
	
	/**
	* @author      Jordi Sorts
	* @package     Plantilla per Semab
	* @license     http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
	* @copyright   © 2016 www.websdefutbol.com. All rights reserved.
	*/

	defined('_JEXEC') or die;

	function modChrome_block($module, &$params, &$attribs)
		{
 			if (!empty ($module->content)) : ?>
           		<div class="block <?php if ($params->get('moduleclass_sfx')!='') : ?><?php echo $params->get('moduleclass_sfx'); ?><?php endif; ?>">
           			<div class="moduletable">           	
	           			<?php if ($module->showtitle != 0) : ?>
							<div class="module-title">
	                			<h3 class="title"><span class="<?php echo $params->get('header_class'); ?>" ></span> <?php echo $module->title ; ?></h3>
							</div>
	                	<?php endif; ?>
	                	<div class="module-content">
                			<?php echo $module->content; ?>
	                	</div>
              		</div>             	
           		</div>
			<?php endif;
		}
	?>