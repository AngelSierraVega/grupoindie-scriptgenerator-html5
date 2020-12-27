<?php

/*
 * Copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIndie\ScriptGenerator\HTML5\Category\Lists;

use \GIndie\ScriptGenerator\HTML5\Node;

/**
 * Tag is used in ordered lists.
 * More info. at <https://www.w3schools.com/tags/tag_li.asp>
 * 
 * @package GIndie\ScriptGenerator\HTML5\Category\Lists
 * @license file://LICENSE
 * 
 * @version 00.AA
 * @edit 18-11-01
 * - Revised version
 * @todo Upgrade DocBlock using https://www.computerhope.com
 * @todo Validate attributes
 * 
 * @since 17-05-18
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @edit 18-01-18
 * @edit 19-01-28
 * - Added classTrait
 */
class ListItem extends Node
{
    
    /**
     * @since 19-01-28
     */
    use \GIndie\ScriptGenerator\HTML5\Attribute\classTrait;

    /**
     * 
     * @param   array $attributes
     * @param   array $content
     * @since   GIG-HTML5.00.02
     * @author  Angel Sierra Vega <angel.sierra@grupoindie.com>
     * @edit 18-01-18
     * @edit 19-02-02
     * - Updated attribute $content
     */
    public function __construct(array $attributes = [], $content = null)
    {
        parent::__construct(static::TYPE_DEFAULT, "li", $attributes, $content);
    }

}
