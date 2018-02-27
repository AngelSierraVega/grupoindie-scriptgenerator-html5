<?php

/*
 * Copyright (C) 2016 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIndie\ScriptGenerator\HTML5\Category\Basic;

use \GIndie\ScriptGenerator\HTML5\Node;

/**
 * Defines a title for the document
 * 
 * More info. at <https://www.w3schools.com/tags/tag_title.asp>
 * 
 * @package     HTML5
 * @subpackage  Main
 * @category    API
 * 
 * @copyright   (c) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * @version     GI-HTML5.01
 * @since       2016-12-28
 * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @edit SG-HTML5.00.01 18-01-03
 * - Updated for new DML node
 */
class Title extends Node {

    /**
     * Creates a new Title object
     * 
     * @param       string $title The title of the document
     * 
     * @version     GIG-HTML5.00.02
     */
    function __construct($title) {
        parent::__construct(static::TYPE_DEFAULT, "title",[],$title);
        //parent::__construct("title", false, [], [$title]);
    }

}
