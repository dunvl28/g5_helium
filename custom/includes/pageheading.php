<?php

/**
 * @package   Gantry 5 Theme
 * @author    Thomas Nguyen
 * @copyright ThomasNguyen
 * @license   GNU/GPLv2 and later
 *
 * http://www.gnu.org/licenses/gpl-2.0.html
 */

defined('_JEXEC') or die;

use Joomla\CMS\Factory;

class PageHeading{
    private $menu = null;
    public function __construct(){
        $this->menu = Factory::getApplication()->getMenu()->getActive();
    }

    public function getMenu(){
        return $this->menu;
    }

    public function getPageHeading(){
        $menu = $this->getMenu();
        $title = $menu->title;
        $page_heading = $menu->getParams()->get('page_heading');
        return $page_heading ?? $title;
    }
}
?>