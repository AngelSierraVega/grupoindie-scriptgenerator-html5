<?php

/**
 * @copyright (c) 2018 Angel Sierra Vega. Grupo INDIE.
 * @license file://LICENSE MIT License
 *
 * @package GIndie\ScriptGenerator\HTML5\Attribute
 * 
 * @since 17-03-14
 * @version 00.F0
 * @edit 18-11-01
 * - Revised version
 * - Moved class from file
 * @todo Upgrade DocBlock using https://www.computerhope.com
 */

namespace GIndie\ScriptGenerator\HTML5\Attribute;

/**
 * An abstraction layer for the class related functions of an HTML5 node.
 * 
 * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
 * 
 */
trait classTrait
{

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
    public function addClass($classnames)
    {
        $class = $this->getAttribute("class");
        if ($class == \FALSE) {
            parent::setAttribute("class", new \GIndie\ScriptGenerator\HTML5\Node\Classes($classnames));
        } else {
            if (is_string($class)) {
                parent::setAttribute("class", new \GIndie\ScriptGenerator\HTML5\Node\Classes($class . " " . $classnames));
                $class = $this->getAttribute("class");
            }
            $class->addClass($classnames);
        }
        return $this;
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
    public function hasClass($classname)
    {
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
    public function removeClass($classname)
    {
        $class = $this->getAttribute("class");
        if ($class == false) {
            return false;
        } else {
            if (is_string($class)) {
                parent::setAttribute("class", new \GIndie\ScriptGenerator\HTML5\Node\Classes($class));
                $class = $this->getAttribute("class");
            }
            return $class->removeClass($classname);
        }
    }

}


