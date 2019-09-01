<?php

/**
 * @copyright (c) 2018 Angel Sierra Vega. Grupo INDIE.
 * @license file://LICENSE MIT License
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
 * Specifies the types of files that the server accepts (that can be submitted through a file upload).
 * https://www.w3schools.com/tags/att_accept.asp
 * 
 * @author      Liliana Hernández Castañeda <liliana.hercast@gmail.com>
 */
trait acceptTrait
{

    /**
     * [description]
     * 
     */
    public function getAccept()
    {
        return $this->getAttribute("accept");
    }

    /**
     * [description]
     * @return self
     * 
     */
    public function removeAccept()
    {
        $this->unsetAttribute("accept");
        return $this;
    }

    /**
     * 
     * @param string $value The value of the attribute.
     * @return self
     */
    public function setAccept($value)
    {
        $this->setAttribute("accept", $value);
        return $this;
    }

}
