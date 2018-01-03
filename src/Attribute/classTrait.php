<?php

/*
 * Copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIndie\ScriptGenerator\HTML5\Attribute;

/**
 * An abstraction layer for the class related functions of an HTML5 node.
 * @package     HTML5
 * @subpackage  Main
 * @category    API
 * 
 * @copyright   (c) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * @version     GIG-HTML5.01.01
 * @since       2017-03-14
 * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
 * 
 */
trait classTrait {

    /**
     * Adds (a) class(es) to the node
     * 
     * @param       string $classnames The space separated name(s) o the class(es)
     * 
     * @since       GIG-HTML5.01.01
     * 
     * @return      boolean TRUE if added, FALSE otherwise.
     * @throws      NA
     */
    public function addClass($classnames) {
        $class = $this->getAttribute("class");
        if ($class == \FALSE) {
            return parent::setAttribute("class", new Classes($classnames));
        } else {
            if (is_string($class)) {
                parent::setAttribute("class",
                        new Classes($class . " " . $classnames));
                $class = $this->getAttribute("class");
            }
            return $class->addClass($classnames);
        }
    }

    /**
     * Validates if the node has a class.
     * 
     * @param       string $classname The name of the class to validate
     * 
     * @since       GIG-HTML5.01.01
     * 
     * 
     * @return      boolean TRUE if class is defined, FALSE otherwise.
     * @throws      NA
     */
    public function hasClass($classname) {
        $class = $this->getAttribute("class");
        if ($class == false) {
            return false;
        } else {
            return $class->hasClass($classname);
        }
    }

    /**
     * Removes a class.
     * 
     * @param       string $classname The name of the class to remove.
     * 
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     * @since       GIG-HTML5.01.01
     * 
     * @return      boolean TRUE if removed, FALSE otherwise.
     * @throws      NA
     */
    public function removeClass($classname) {
        $class = $this->getAttribute("class");
        if ($class == false) {
            return false;
        } else {
            if (is_string($class)) {
                parent::setAttribute("class", new Classes($class));
                $class = $this->getAttribute("class");
            }
            return $class->removeClass($classname);
        }
    }

}

/**
 * Handles the related behavior of the <b>class</b> attribute of an <b>HTML5 node</b>.
 * 
 * @package     HTML5
 * @subpackage  Main
 * @category    API
 * 
 * @copyright   (c) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * @version     GIG-HTML5.01.01
 * @since       2017-03-14
 * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
 * 
 */
class Classes {
    /*     * q
     * Stores the class names.
     * 
     * @var         array $_classes
     * 
     * @version     GIG-HTML5.01.01
     * @since       2017-03-14
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     * 
     */

    private $_classes;

    /**
     * Creates a Classes object
     * 
     * @param   string $classnames The space separated name(s) o the class(es)
     * 
     * @since       GIG-HTML5.01.01
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     * 
     */
    public function __construct($classnames) {
        $this->_classes = explode(" ", $classnames);
    }

    /**
     * Casts the class names as a string
     * 
     * @return      string The space separated name(s) o the class(es)
     * 
     * @since       GIG-HTML5.01.01
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     */
    public function __toString() {
        return join(" ", $this->_classes);
    }

    /**
     * Adds a class.
     * 
     * @todo        return FALSE on failed attempt to add class.
     * 
     * @param       string $classnames The space separated name(s) o the class(es)
     * @return      boolean TRUE
     * 
     * @since       GIG-HTML5.01.01
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     */
    public function addClass($classnames) {
        foreach (explode(" ", $classnames) as $class) {
            if ($this->hasClass($class) == FALSE) {
                $this->_classes[] = $class;
            }
        }
        return TRUE;
    }

    /**
     * Removes a class.
     * 
     * @param       string $classname The name o the class to remove.
     * @return      boolean TRUE if removed, FALSE otherwize.
     * 
     * @since       GIG-HTML5.01.01
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     */
    public function removeClass($classname) {
        if (($key = array_search($classname, $this->_classes)) !== FALSE) {
            unset($this->_classes[$key]);
            return TRUE;
        }
        return FALSE;
    }

    /**
     * Validates if a class is defined.
     * 
     * @param       string $classname The name o the class to validate.
     * @return      boolean TRUE if defined, FALSE otherwize.
     * 
     * @since       GIG-HTML5.01.01
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     */
    public function hasClass($classname) {
        return isset(array_flip($this->_classes)[$classname]);
    }

}
