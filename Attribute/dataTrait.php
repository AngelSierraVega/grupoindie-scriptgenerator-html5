<?php

/**
 * @copyright (c) 2018 Angel Sierra Vega. Grupo INDIE.
 *
 * @package GIndie\ScriptGenerator\HTML5\Attribute
 * 
 * @since 17-05-19
 * @version 00.F0
 * @edit 18-11-01
 * - Revised version
 * @todo Upgrade DocBlock using https://www.computerhope.com
 */

namespace GIndie\ScriptGenerator\HTML5\Attribute;
/**
 * Specifies the URL of the resource to be used by the object.
 * https://www.w3schools.com/tags/att_data.asp
 * 
 * @author      Liliana Hernández Castañeda <liliana.hercast@gmail.com>
 */
trait dataTrait {
    /**
     * [description]
     * @since   GIG-HTML5.00.01
     * 
     */
    public function getData() {
        return $this->getAttribute("data");
    }
    /**
     * [description]
     * @since   GIG-HTML5.00.01
     * @return self
     * 
     */      
    public function removeData() {
        $this->unsetAttribute("data");
        return $this;
    }
    /**
     * 
     * @param string $value The value of the attribute.
     * @return self
     * 
     * @since GIG-HTML5.00.01
     */
    public function setData($value) {
        $this->setAttribute("data", $value);
        return $this;
    }
}
