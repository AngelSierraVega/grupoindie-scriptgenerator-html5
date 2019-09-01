<?php

/**
 * 
 * @copyright (c) 2018 Angel Sierra Vega. Grupo INDIE.
 * @license file://LICENSE MIT License
 *
 * @package GIndie\ScriptGenerator\HTML5\Attribute
 * 
 * @version 00.A0
 * @since 17-04-15
 * 
 * @todo Upgrade dockblock
 * @todo Upgrade project/file structure
 */

namespace GIndie\ScriptGenerator\HTML5\Attribute;

/**
 * 
 * @link <https://www.w3schools.com/tags/att_global_title.asp>
 * 
 * @edit 18-02-27
 * @edit 18-11-01
 * - Revised version
 * @edit 19-02-03
 * - Functional trait
 */
trait titleTrait
{

    /**
     * The title attribute specifies extra information about an element.
     * The information is most often shown as a tooltip text when the mouse moves over the element.
     * 
     * @param mixed $title Specifies extra information about an element. 
     * 
     * @return \Self
     * 
     * @since 19-02-03
     */
    public function setTitle($title)
    {
        $this->setAttribute("title", $title);
        return $this;
    }

    /**
     * The title attribute specifies extra information about an element.
     * The information is most often shown as a tooltip text when the mouse moves over the element.
     * 
     * @return mixed
     * 
     * @since 19-02-03
     */
    public function geTitle()
    {
        return $this->getAttribute("title");
    }

    /**
     * 
     * @return $this
     * 
     * @since 19-02-03
     */
    public function removeTitle()
    {
        $this->unsetAttribute("title");
        return $this;
    }

}
