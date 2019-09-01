<?php

/**
 * Copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIndie\ScriptGenerator\HTML5\Category\Lists;

use GIndie\ScriptGenerator\HTML5\Node;
use GIndie\ScriptGenerator\HTML5\Attribute;
use GIndie\ScriptGenerator\HTML5\Category\Links;

/**
 * Abstract representation of a list.
 * 
 * @license file://LICENSE MIT License
 * 
 * @package GIndie\ScriptGenerator\HTML5\Category\Lists
 * 
 * @version 00.AC
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
 * @edit 19-01-15
 * - Created addListElementHyperlink()
 * @edit 19-04-16
 * - Deprecated use of Attribute\GlobalAttributes
 */
abstract class _List extends Node
{


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
     * @return \GIndie\ScriptGenerator\HTML5\Category\Lists\Unordered|\GIndie\ScriptGenerator\HTML5\Category\Lists\Ordered
     * 
     * @since GIG-HTML5.00.01
     * @edit SG-HTML5.00.02
     * - Return $this instead of function result
     * @edit 19-01-15
     * @edit 19-02-01
     * - Debuged $element as ListItem
     */
    public function addListElement($element)
    {
        switch (true)
        {
            case \is_a($element, ListItem::class):
            case \is_subclass_of($element, ListItem::class, true):
                $this->addContent($element);
                break;
            default:
                $this->addContent(new ListItem([], [$element]));
                break;
        }
        return $this;
    }

    /**
     * 
     * @param string $href
     * @param mixed $label
     * @param string|null $target
     * @return \GIndie\ScriptGenerator\HTML5\Category\Lists\Unordered|\GIndie\ScriptGenerator\HTML5\Category\Lists\Ordered
     * @since 19-01-15
     */
    public function addListElementHyperlink($href, $label, $target = null)
    {
        $this->addListElement(Links::hyperlink($href, $label, $target));
        return $this;
    }

}
