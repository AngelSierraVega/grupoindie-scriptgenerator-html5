<?php

/**
 * GI-SG1-HTML5-DVLP - Classes
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (CC) 2020 Angel Sierra Vega. Grupo INDIE.
 *
 * @package GIndie\ScriptGenerator\HTML5
 * @license file://LICENSE
 *
 * @since 17-03-14
 * @version 00.80
 * @todo Upgrade vars and DocBlock
 */

namespace GIndie\ScriptGenerator\HTML5\Node;

/**
 * Handles the related behavior of the <b>class</b> attribute of an <b>HTML5 node</b>.
 * 
 * @edit 18-11-01
 * - Revised version
 */
class Classes
{

    /**
     * Stores the class names.
     * 
     * @var         array $_classes
     * 
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
    public function __construct($classnames)
    {
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
    public function __toString()
    {
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
    public function addClass($classnames)
    {
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
    public function removeClass($classname)
    {
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
    public function hasClass($classname)
    {
        return isset(array_flip($this->_classes)[$classname]);
    }

}
