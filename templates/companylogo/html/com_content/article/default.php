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
// Create shortcuts to some parameters.
$params  = $this->item->params;
$images = json_decode($this->item->images);
//print_r($this);
?>
    <h2>
        <?php echo $this->item->title; ?>
    </h2>

<?php echo $this->item->afterDisplayTitle; ?>
<?php echo $this->item->beforeDisplayContent; ?>
<?php if (isset($images->image_fulltext) && !empty($images->image_fulltext)) :?>
    <div>
        <img src="<?php echo $images->image_fulltext; ?>"
        <?php if (!empty($images->image_fulltext_alt)) :?>
            alt="<?php echo $images->image_fulltext_alt; ?>"
        <?php endif; ?>
    </div>
<?php endif; ?>
<?php echo $this->item->text; ?>
<?php echo $this->item->afterDisplayContent; ?>