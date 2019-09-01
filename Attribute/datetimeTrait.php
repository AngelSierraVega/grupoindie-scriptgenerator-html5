<?php

/**
 * @copyright (c) 2018 Angel Sierra Vega. Grupo INDIE.
 * @license file://LICENSE MIT License
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
 * Specifies the date and time when the text was deleted/inserted.
 * https://www.w3schools.com/tags/att_datetime.asp
 * 
 * @author      Liliana Hernández Castañeda <liliana.hercast@gmail.com>
 */
trait datetimeTrait {
    /**
     * [description]
     * @since   GIG-HTML5.00.01
     * 
     */
    public function getDatetime() {
        return $this->getAttribute("datetime");
    }
    /**
     * [description]
     * @since   GIG-HTML5.00.01
     * @return self
     * 
     */      
    public function removeDatetime() {
        $this->unsetAttribute("datetime");
        return $this;
    }
    /**
     * 
     * @param string $value The value of the attribute.
     * @return self
     * 
     * @since GIG-HTML5.00.01
     */
    public function setDatetime($value) {
        $this->setAttribute("datetime", $value);
        return $this;
    }
}
