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
use \GIndie\ScriptGenerator\HTML5\Attribute;

/**
 * Abstract representation of a list.
 * 
 * @package GIndie\ScriptGenerator\HTML5\Category\Lists
 * 
 * @version 00.A0
 * @edit 18-11-01
 * - Revised version
 * @todo Rename class for PSR-0 Violation
 * @todo Upgrade DocBlock using https://www.computerhope.com
 * @todo Validate attributes
 * 
 * @since       2017-01-04
 * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @edit SG-HTML5.00.01 18-01-18
 * @edit SG-HTML5.00.02 18-01-20
 * - Updated: addListElement()
 */
abstract class _List extends Node
{

    /**
     * 
     */
    use Attribute\GlobalAttributes;

    /**
     * Creates an ordered/unodered HTML list element.
     * 
     * @param   boolean $ordered
     * @param   array $elements
     * 
     * @since   GIG-HTML5.00.01
     * @edit SG-HTML5.00.01
     */
    protected function __construct($ordered = \TRUE, array $elements = [])
    {
        parent::__construct(static::TYPE_DEFAULT, $ordered ? "ol" : "ul");
        foreach ($elements as $element) {
            $this->addListElement($element);
        }
    }

    /**
     * Adds an element to the list.
     * 
     * @param mixed $element The elemen to add
     * @return \GIndie\ScriptGenerator\HTML5\Category\Lists\_List
     * 
     * @since GIG-HTML5.00.01
     * @edit SG-HTML5.00.02
     * - Return $this instead of function result
     */
    public function addListElement($element)
    {
        if (\is_a($element, __NAMESPACE__ . "\ListItem")) {
            $this->addContent($element);
        } else {
            $this->addContent(new ListItem([], [$element]));
        }
        return $this;
    }

}
