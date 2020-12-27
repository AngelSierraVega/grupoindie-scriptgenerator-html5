<?php

/**
 * 
 * @copyright (CC) 2020 Angel Sierra Vega. Grupo INDIE.
 * @license file://LICENSE
 *
 * @package GIndie\ScriptGenerator\HTML5\Attribute
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
 * Specifies the URL of the page the link goes to.
 *
 * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
 * 
 */
trait hrefTrait
{

    public function getHref()
    {
        return $this->getAttribute("href");
    }

    public function removeHref()
    {
        $this->unsetAttribute("href");
        return $this;
    }

    public function setHref($href)
    {
        $this->setAttribute("href", $href);
        return $this;
    }

}

interface href
{

    public function getHref();

    public function removeHref();

    public function setHref($href);
}
