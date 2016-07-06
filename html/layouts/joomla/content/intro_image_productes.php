<?php
/**
 * @package     Joomla.Site
 * @subpackage  Layout
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('JPATH_BASE') or die;
$params  = $displayData->params;
?>
<?php $images = json_decode($displayData->images); ?>
<?php if (isset($images->image_intro) && !empty($images->image_intro)) : ?>
	<?php $imgfloat = (empty($images->float_intro)) ? $params->get('float_intro') : $images->float_intro; ?>

	<div class="hovereffect"> 
		<?php if ($params->get('link_titles') && $params->get('access-view')) : ?>

			<img
				<?php if ($images->image_intro_caption):
					echo 'class="caption"' . ' title="' . htmlspecialchars($images->image_intro_caption) . '"';
				endif; ?>
				src="<?php echo htmlspecialchars($images->image_intro); ?>" class="img-responsive center-block img-thumbnail" alt="<?php echo htmlspecialchars($images->image_intro_alt); ?>" itemprop="thumbnailUrl"/>
			<div class="overlay">
				<h2><?php echo $this->escape($displayData->title); ?></h2>
				<a class="info" href="<?php echo JRoute::_(ContentHelperRoute::getArticleRoute($displayData->slug, $displayData->catid, $displayData->language)); ?>"><?php echo JText::sprintf('COM_CONTENT_READ_MORE_TITLE'); ?></a>
			</div>
		<?php else : ?><img
			<?php if ($images->image_intro_caption):
				echo 'class="caption"' . ' title="' . htmlspecialchars($images->image_intro_caption) . '"';
			endif; ?>
			src="<?php echo htmlspecialchars($images->image_intro); ?>" class="img-responsive center-block img-thumbnail" alt="<?php echo htmlspecialchars($images->image_intro_alt); ?>" itemprop="thumbnailUrl"/>
		<?php endif; ?> 
	</div>

	<!-- <div class="hovereffect"> 
		<?php if ($params->get('link_titles') && $params->get('access-view')) : ?>
			<a href="<?php echo JRoute::_(ContentHelperRoute::getArticleRoute($displayData->slug, $displayData->catid, $displayData->language)); ?>"><img
				<?php if ($images->image_intro_caption):
					echo 'class="caption"' . ' title="' . htmlspecialchars($images->image_intro_caption) . '"';
				endif; ?>
				src="<?php echo htmlspecialchars($images->image_intro); ?>" class="img-responsive center-block img-thumbnail" alt="<?php echo htmlspecialchars($images->image_intro_alt); ?>" itemprop="thumbnailUrl"/></a>
		<?php else : ?><img
			<?php if ($images->image_intro_caption):
				echo 'class="caption"' . ' title="' . htmlspecialchars($images->image_intro_caption) . '"';
			endif; ?>
			src="<?php echo htmlspecialchars($images->image_intro); ?>" class="img-responsive center-block img-thumbnail" alt="<?php echo htmlspecialchars($images->image_intro_alt); ?>" itemprop="thumbnailUrl"/>
		<?php endif; ?> 
	</div> -->

<?php endif; ?>

<?php if (empty($images->image_intro)) : ?>
	<?php $imgfloat = (empty($images->float_intro)) ? $params->get('float_intro') : $images->float_intro; ?>
	<div class="pull-<?php echo htmlspecialchars($imgfloat); ?> item-image"> 
		<?php if ($params->get('link_titles') && $params->get('access-view')) : ?>
			<a href="<?php echo JRoute::_(ContentHelperRoute::getArticleRoute($displayData->slug, $displayData->catid, $displayData->language)); ?>">
				<img src="./images/sistema/sense-imatge.jpg" class="img-responsive center-block img-thumbnail" alt="<?php echo htmlspecialchars($images->image_intro_alt); ?>" itemprop="thumbnailUrl"/>
			</a>
		<?php else : ?>
			<img src="./images/sistema/sense-imatge.jpg" class="img-responsive center-block img-thumbnail" alt="<?php echo htmlspecialchars($images->image_intro_alt); ?>" itemprop="thumbnailUrl"/>
		<?php endif; ?> 
	</div>
<?php endif; ?>

