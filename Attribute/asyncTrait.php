<?php

/**
 * @copyright (c) 2018 Angel Sierra Vega. Grupo INDIE.
 *
 * @package GIndie\ScriptGenerator\HTML5\Attribute
 * 
 * @since 17-05-16
 * @version 00.F0
 * @edit 18-11-01
 * - Revised version
 * @todo Upgrade DocBlock using https://www.computerhope.com
 */

namespace GIndie\ScriptGenerator\HTML5\Attribute;

/**
 * Specifies that the script will be executed asynchronously as soon as it is available.
 * https://www.w3schools.com/tags/att_async.asp
 * 
 * @author      Liliana Hernández Castañeda <liliana.hercast@gmail.com>
 */
trait asyncTrait
{

    /**
     * 
     */
    public function getAsync()
    {
        return $this->getAttribute("async");
    }

    /**
     * 
     */
    public function removeAsync()
    {
        $this->unsetAttribute("async");
        return $this;
    }

    /**
     * 
     * @param string $value The value of the attribute.
     * @return self
     */
    public function setAsync($value)
    {
        $this->setAttribute("async", $value);
        return $this;
    }

}
