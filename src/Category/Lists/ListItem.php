<?php

/*
 * Copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIndie\Generator\DML\HTML5\Category\Lists;

use \GIndie\Generator\DML\HTML5\Node;

/**
 * Tag is used in ordered lists.
 * More info. at <https://www.w3schools.com/tags/tag_li.asp>
 * 
 * @package     HTML5
 * @subpackage  Main
 * @category    API
 * 
 * @copyright   (c) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * @version     GIG-HTML5.00.02
 * @since       2017-05-18
 * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
 * 
 */
class ListItem extends Node {

    /**
     * 
     * @param   array $attributes
     * @param   array $content
     * @since   GIG-HTML5.00.02
     * @author  Angel Sierra Vega <angel.sierra@grupoindie.com>
     * 
     */
    public function __construct(array $attributes = array(),
            array $content = array()) {
        parent::__construct("li", false, $attributes, $content);
    }

}
