<?php
/**
 * @package     Joomla.Site
 * @subpackage  Layout
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('JPATH_BASE') or die;

?>
			<dd class="category-name">
				<?php $title = $this->escape($displayData['item']->category_title); 
                      $categoria='<span class="icon-folder-open">'.$title.'</span>';
                ?>
                <?php if ($displayData['params']->get('link_category') && $displayData['item']->catslug) : ?>
					<?php $url = '<a href="' . JRoute::_(ContentHelperRoute::getCategoryRoute($displayData['item']->catslug)) . '" itemprop="genre">' . $categoria . '</a>'; ?>
					<?php echo JText::sprintf($url); ?>
				<?php else : ?>
					<?php echo JText::sprintf('<span itemprop="genre">' . $categoria . '</span>'); ?>
				<?php endif; ?>
			</dd>
