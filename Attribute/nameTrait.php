<?php

/**
 * 
 * @copyright (CC) 2020 Angel Sierra Vega. Grupo INDIE.
 * @license file://LICENSE
 *
 * @package GIndie\ScriptGenerator\HTML5\Attribute
 * 
 * @since 17-08-19
 * @version 00.F0
 * @edit 18-11-01
 * - Revised version
 * @todo Upgrade DocBlock using https://www.computerhope.com
 */

namespace GIndie\ScriptGenerator\HTML5\Attribute;

/**
 * Specifies a name for the element
 * 
 * https://www.w3schools.com/tags/att_name.asp
 * 
 * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
 * 
 */
trait nameTrait
{

    /**
     * [description]
     * @since   GIG-HTML5.00.01
     * 
     */
    public function getName()
    {
        return $this->getAttribute("name");
    }

    /**
     * [description]
     * @since   GIG-HTML5.00.01
     * 
     */
    public function removeName()
    {
        $this->unsetAttribute("name");
        return $this;
    }

    /**
     * 
     * @param string $value The value of the attribute.
     * @return self
     * 
     * @since GIG-HTML5.00.01
     */
    public function setName($name)
    {
        $this->setAttribute("name", $name);
        return $this;
    }

}
