<?php

/*
 * Copyright (C) 2016 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIndie\Generator\DML\HTML5\Category\Meta;

use \GIndie\Generator\DML\HTML5\Node;

/**
 * Describes metadata within an HTML document.
 * 
 * @package     HTML5
 * @subpackage  Main
 * @category    API
 * 
 * @copyright   (c) 2017 Angel Sierra Vega. Grupo INDIE.
 * 
 * @version     GIG-HTML5.00.01
 * @since       2016-12-28
 * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
 */
class Meta extends Node {

    /**
     * Creates a new Meta object
     * 
     * @param Array $attributes An array representing the attributes of the meta tag
     * 
     * @since GIG-HTML5.00.01
     */
    function __construct(array $attributes) {
        parent::__construct("meta", "closed", $attributes);
    }

}
