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
use \GIndie\Generator\DML\HTML5\Attribute;

/**
 * Abstract representation of a list.
 * @abstract
 * 
 * @package     HTML5
 * @subpackage  Main
 * @category    API
 * 
 * @since       2017-01-04
 * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @version     GIG-HTML5.00.01
 * 
 */
abstract class _List extends Node {
    
    use Attribute\GlobalAttributes;

    /**
     * Creates an ordered/unodered HTML list element.
     * 
     * @param   boolean $ordered
     * @param   array $elements
     * 
     * @since   GIG-HTML5.00.01
     */
    protected function __construct($ordered = \TRUE, array $elements = []) {
        parent::__construct($ordered ? "ol" : "ul", \FALSE, [], []);
        foreach ($elements as $element) {
            $this->addListElement($element);
        }
    }

    /**
     * Adds an element to the list.
     * 
     * @param   mixed $element The elemen to add
     * @return  \GIndie\Generator\DML\HTML5\Node::addContent()
     * 
     * @since   GIG-HTML5.00.01
     */
    public function addListElement($element) {
        if (\is_a($element, __NAMESPACE__ . "\ListItem")) {
            return $this->addContent($element);
        } else {
            return $this->addContent(new ListItem([], [$element]));
        }
    }

}
