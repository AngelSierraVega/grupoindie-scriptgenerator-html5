<?php

/*
 * Copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIgenerator\DML\HTML5\Handlers;

/**
 * An abstraction layer for the class related functions of an HTML5 node.
 * 
 * @package     HTML5
 * @subpackage  Main
 * @category    API
 * 
 * @copyright   (c) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * @version     GI-DML.01
 * @since       2017-03-14
 * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
 * 
 */
trait classHandler {

    /**
     * Adds (a) class(es) to the node
     * 
     * @param       string $classnames The space separated name(s) o the class(es)
     * 
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     * @since       2017-03-14
     * 
     * @version     GI-DML.01.01
     * 
     * @return      boolean TRUE if added, FALSE otherwise.
     * @throws      NA
     */
    public function addClass($classnames) {
        $class = $this->getAttribute("class");
        if ($class == false) {
            return parent::setAttribute("class", $class = new Classes($classnames));
        } else {
            return $class->addClass($classnames);
        }
    }

    /**
     * Validates if the node has a class.
     * 
     * @param       string $classname The name of the class to validate
     * 
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     * @since       2017-03-14
     * 
     * @version     GI-DML.01.01
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
     * @since       2017-03-14
     * 
     * @version     GI-DML.01.01
     * 
     * @return      boolean TRUE if removed, FALSE otherwise.
     * @throws      NA
     */
    public function removeClass($classname) {
        $class = $this->getAttribute("class");
        if ($class == false) {
            return false;
        } else {
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
 * @version     GI-DML.01
 * @since       2017-03-14
 * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
 * 
 */
class Classes {

    /**
     * Stores the class names.
     * 
     * @var         array $_classes
     * 
     * @version     GI-DML.01
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
     * @version     GI-DML.01
     * @since       2017-03-14
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
     * @version     GI-DML.01
     * @since       2017-03-14
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
     * @version     GI-DML.01
     * @since       2017-03-14
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
     * @version     GI-DML.01
     * @since       2017-03-14
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
     * @version     GI-DML.01
     * @since       2017-03-14
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     */
    public function hasClass($classname) {
        return isset(array_flip($this->_classes)[$classname]);
    }

}
