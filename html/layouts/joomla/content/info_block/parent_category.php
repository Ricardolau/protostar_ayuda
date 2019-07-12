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
			<dd class="parent-category-name">
				<?php $title = $this->escape($displayData['item']->parent_title);
                    $categoria='<span class="icon-folder-close">'.$title.'</span>';

                ?>
				<?php if ($displayData['params']->get('link_parent_category') && !empty($displayData['item']->parent_slug)) : ?>
					<?php $url = '<a href="' . JRoute::_(ContentHelperRoute::getCategoryRoute($displayData['item']->parent_slug)) . '" itemprop="genre">' . $categoria . '</a>'; ?>
					<?php echo JText::sprintf( $url); ?>
				<?php else : ?>
					<?php echo JText::sprintf('<span itemprop="genre">' . $categoria . '</span>'); ?>
				<?php endif; ?>
			</dd>
