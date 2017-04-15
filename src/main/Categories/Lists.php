<?php

/*
 * Copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIgenerator\DML\HTML5;

/**
 * Factory Pattern for the <b>Lists</b> of <b>HTML5</b>.
 * 
 * Partial: Not <menu> or <menuitem>
 * 
 * More info. at <https://www.w3schools.com/tags/ref_byfunc.asp>.
 * 
 * @package     HTML5
 * @subpackage  Main
 * @category    API
 * 
 * @copyright   (c) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * @version     GI-HTML5.01
 * @since       2017-04-12
 * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
 * 
 */
class Lists {
    // Partial: Not <menu> or <menuitem>
}


namespace GIgenerator\DML\HTML5\Lists;



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
class List_ extends \GIgenerator\DML\HTML5\Node {

    /**
     * 
     * @param   array $elements
     * @return  \self
     * @since   2017-01-04
     * @author  Angel Sierra Vega <angel.sierra@grupoindie.com>
     * @version beta.00.01
     */
    public static function Ordered(array $elements) {
        try {
            return new self(true, $elements);
        } catch (Exception $e) {
            displayError($e);
        }
    }

    /**
     * 
     * @param array $elements
     * @return \self
     * @since   2017-01-04
     * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
     * @version beta.00.01
     */
    public static function Unordered(array $elements) {
        try {
            return new self(false, $elements);
        } catch (Exception $e) {
            displayError($e);
        }
    }

    use ListBehavior;

    /**
     * 
     * @param $ordered
     * @param array $elements
     * @since   2017-01-04
     * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
     * @version beta.00.01
     */
    protected function __construct($ordered = true, array $elements = array()) {
        try {
            parent::__construct($ordered ? "ol" : "ul", false, [], []);
            foreach ($elements as $element) {
                $this->addListElement($element);
            }
        } catch (Exception $e) {
            displayError($e);
        }
    }

}

//namespace GIndie\DML\HTML5\List_;

/**
 * 
 * @since   2017-01-04
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @version beta.00.01
 */
trait ListBehavior {

    /**
     * 
     * @param $element
     * @return 
     * @since   2017-01-04
     * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
     * @version beta.00.01
     */
    public function addListElement($element) {
        try {
            if (is_a($element, "\GIndie\DML\HTML5\List_\ListElement")) {
                return $this->addContent($element);
            } else {
                return $this->addContent(new ListElement([], [$element]));
            }
        } catch (Exception $e) {
            displayError($e);
        }
    }

}

/**
 * 
 * @param array $attributes
 * @param array $content
 * @since   2017-01-04
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @version beta.00.01
 */
class ListElement extends \GIgenerator\DML\HTML5\Node {

    /**
     * 
     * @param array $attributes
     * @param array $content
     * @since   2017-01-04
     * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
     * @version beta.00.01
     */
    public function __construct(array $attributes = array(), array $content = array()) {
        parent::__construct("li", false, $attributes, $content);
    }

}
