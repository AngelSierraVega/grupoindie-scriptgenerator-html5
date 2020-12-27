<?php

/**
 * 
 * @copyright (CC) 2020 Angel Sierra Vega. Grupo INDIE.
 *
 * @package GIndie\ScriptGenerator\HTML5\Attribute
 * 
 * @license file://LICENSE
 * 
 * @since 17-04-15
 * @version 00.A0
 * @edit 18-11-01
 * - Revised version
 * @todo Upgrade DocBlock using https://www.computerhope.com
 * @todo validate interface or deprecate
 */

namespace GIndie\ScriptGenerator\HTML5\Attribute;

/**
 * 
 * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
 * 
 */
trait downloadTrait
{

    /**
     * [description]
     * 
     * @since GIG-HTML5.00.01
     */
    public function getDownload()
    {
        return $this->getAttribute("download");
    }

    /**
     * [description]
     * 
     * @since GIG-HTML5.00.01
     */
    public function removeDownload()
    {
        $this->unsetAttribute("download");
        return $this;
    }

    /**
     * 
     * @param string $value The value of the attribute.
     * @return self
     * 
     * @since GIG-HTML5.00.01
     */
    public function setDownload($value)
    {
        $this->setAttribute("download", $value);
        return $this;
    }

}

interface download
{

    public function getDownload();

    public function removeDownload();

    public function setDownload($value);
}
