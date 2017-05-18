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
/**
 * 
 * @category    CodeGenerator
 * @package     DescripriveMarkupLanguaje
 * @subpackage  HTML
 * @since       2017-01-04
 * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @version     beta.00.01
 * 
 */
abstract class _List extends Node {

    /**
     * 
     * @param $ordered
     * @param array $elements
     * @since   2017-01-04
     * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
     * @version beta.00.01
     */
    protected function __construct($ordered = true, array $elements = array()) {
        parent::__construct($ordered ? "ol" : "ul", false, [], []);
        foreach ($elements as $element) {
            $this->addListElement($element);
        }
    }

    /**
     * 
     * @param $element
     * @return 
     * @since   2017-01-04
     * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
     * @version beta.00.01
     */
    public function addListElement($element) {
        if (is_a($element,__NAMESPACE__. "\ListItem")) {
            return $this->addContent($element);
        } else {
            return $this->addContent(new ListItem([], [$element]));
        }
    }

}
