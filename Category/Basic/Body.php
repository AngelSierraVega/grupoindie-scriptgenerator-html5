<?php

/*
 * Copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIndie\ScriptGenerator\HTML5\Category\Basic;

use \GIndie\ScriptGenerator\HTML5\Node;
use \GIndie\ScriptGenerator\HTML5\Attribute As Attribute;

/**
 * Defines the document's body
 * 
 * More info. at <https://www.w3schools.com/tags/tag_body.asp>
 * 
 * @package GIndie\ScriptGenerator\HTML5\Category\Basic
 * 
 * @copyright (c) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * @version 00.A8
 * @since 16-12-28
 * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @edit 18-01-03
 * - Updated for new DML node
 * @edit 18-11-01
 * - Revised version
 * @todo Upgrade DocBlock using https://www.computerhope.com
 * @todo Validate attributes
 * @edit 19-04-16
 * - Deprecated use of Attribute\GlobalAttributes
 */
class Body extends Node
{

    /**
     * Creates a new Body object
     * 
     * @since     GI-HTML5.01.01
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     */
    function __construct()
    {
        parent::__construct(static::TYPE_DEFAULT, "body");
    }

}
