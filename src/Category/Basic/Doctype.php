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

/**
 * Defines the document type.
 * 
 * More info. at <https://www.w3schools.com/tags/tag_doctype.asp>
 * 
 * @package     HTML5
 * @subpackage  Main
 * @category    API
 * 
 * @copyright   (c) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * @version     GIG-HTML5.01
 * @since       2016-12-28
 * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @edit SG-HTML5.00.01 18-01-03
 * - Updated for new DML node
 */
class Doctype extends Node {

    /**
     * Creates a new Doctype object
     * 
     * @param       string $doctype The document type
     * 
     * @since       GIG-HTML5.01.02
     */
    function __construct($doctype) {
        //parent::__construct("!DOCTYPE", true, [$doctype]);
        parent::__construct(static::TYPE_EMPTY_OPEN, "!DOCTYPE",$doctype);
    }

}
