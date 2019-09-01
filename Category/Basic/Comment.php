<?php

/**
 * Copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIndie\ScriptGenerator\HTML5\Category\Basic;

use \GIndie\ScriptGenerator\HTML5\Node;
use \GIndie\ScriptGenerator\HTML5\Attribute;

/**
 * Defines a comment.
 * 
 * More info. at <https://www.w3schools.com/tags/tag_comment.asp>
 * 
 * @package GIndie\ScriptGenerator\HTML5\Category\Basic
 * 
 * @copyright (c) 2017 Angel Sierra Vega. Grupo INDIE.
 * @license file://LICENSE MIT License
 *
 * @version 00.A0
 * @since       2017-04-14
 * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @edit SG-HTML5.00.01 18-01-03
 * - Updated for new DML node
 * @edit 18-11-01
 * - Revised version
 * @todo Upgrade DocBlock using https://www.computerhope.com
 * @todo Validate attributes
 */
class Comment extends Node
{

    use Attribute\acceptTrait;

    /**
     * Creates a new BreakLine object
     * 
     * @param       string $comment The content of the comment
     * 
     * @since       GIG-HTML5.00.01
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     */
    public function __construct($comment)
    {
        parent::__construct(static::TYPE_EMPTY_OPEN, "!--{$comment}--");
    }

}
