<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_content
 *
 * @copyright   (C) 2006 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::addIncludePath(JPATH_COMPONENT . '/helpers');

JHtml::_('behavior.caption');

if (!empty($this->intro_items)) : ?>
			<?php
            foreach ($this->intro_items as &$item) : ?>
                <div class="wrapper">
                    <h2><?php echo $item->title; ?></h2>
                    <?php $images = json_decode($item->images); ?>
                    <img src="<?php echo $images->image_intro; ?>"
                         <?php echo $item->introtext; ?>
                </div>
			<?php endforeach; ?>
	<?php endif; ?>

	<?php if (($this->params->def('show_pagination', 1) == 1 || ($this->params->get('show_pagination') == 2))
        && ($this->pagination->get('pages.total') > 1)) : ?>
		<div class="pagination">
			<?php if ($this->params->def('show_pagination_results', 1)) : ?>
				<p class="counter pull-right"> <?php echo $this->pagination->getPagesCounter(); ?> </p>
			<?php endif; ?>
			<?php echo $this->pagination->getPagesLinks(); ?>
        </div>
	<?php endif; ?>
