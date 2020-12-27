<?php

/**
 * Copyright (C) 2016 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIndie\ScriptGenerator\HTML5\Category\Meta;

use \GIndie\ScriptGenerator\HTML5\Node;

/**
 * Describes metadata within an HTML document.
 * 
 * @package GIndie\ScriptGenerator\HTML5\Category\Meta
 * 
 * @license file://LICENSE
 * 
 * @version 00.9A
 * @edit 18-11-01
 * - Revised version
 * @todo Upgrade DocBlock using https://www.computerhope.com
 * @todo Validate attributes
 * 
 * @since       2016-12-28
 * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @edit SG-HTML5.00.01 18-01-18
 */
class Meta extends Node
{

    /**
     * Creates a new Meta object
     * 
     * @param Array $attributes An array representing the attributes of the meta tag
     * 
     * @since GIG-HTML5.00.02
     * @edit SG-HTML5.00.01 <angel.sierra@grupoindie.com>
     */
    function __construct(array $attributes)
    {
        parent::__construct(static::TYPE_EMPTY_CLOSED, "meta", $attributes);
    }

}
