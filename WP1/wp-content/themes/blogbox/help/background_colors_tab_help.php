<?php
/**
 * Contextual help file for Background Colors tab
 *
 *
 * @package		blogBox WordPress Theme
 * @copyright	Copyright (c) 2012, Kevin Archibald
 * @license		http://www.gnu.org/licenses/quick-guide-gplv3.html  GNU Public License
 * @author		Kevin Archibald <www.kevinsspace.ca/contact/>
 */
 
 $html = '';
 $html .= '<h2>'.__('Background Color Options','blogBox').'</h2>';
 $html .= '<p>'.__('If you feel adventurous blogBox allows you to develop your own color scheme.','blogBox').'</p>'; 
 $html .= '<p>'.__('You can select the cell and then use the color wheel to pick a color.','blogBox').' '; 
 $html .= __('Select the dot on the circle and drag around the circle to get the major color you want.','blogBox').' '; 
 $html .= __('Then drag the dot in the square to set the saturation.','blogBox').'</p>';
 $html .= '<p>'.__('You can also copy in hex color numbers from other cells.','blogBox').' '; 
 $html .= __('When you copy in the hex color, hit your "Enter" key for the box to change color.','blogBox').'</p>';
 $html .= '<p>'.__('It is also possible to put in a light or dark gradient over the background color.','blogBox').' '; 
 $html .= __(' Simply select the gradient you want from the dropdown box.','blogBox').'</p>';
 $html .= '<p>'.__('Make sure you "Save Settings" when you are done.','blogBox').'</p>';
 $html .= '<p>'.__('Note that if the entry is deleted and saved the default will be loaded.','blogBox').'</p>'; 
   
 return $html;
 
?>