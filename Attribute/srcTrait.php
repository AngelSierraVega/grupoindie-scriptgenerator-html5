<?php

/**
 * 
 * 
 * @copyright (c) 2018 Angel Sierra Vega. Grupo INDIE.
 * @license file://LICENSE MIT License
 *
 * @package GIndie\ScriptGenerator\HTML5\Attribute
 * 
 * @since 18-02-04
 * @version 00.F0
 * @edit 18-11-01
 * - Revised version
 * @todo Upgrade DocBlock using https://www.computerhope.com
 */

namespace GIndie\ScriptGenerator\HTML5\Attribute;

/**
 *
 * @edit 18-02-04
 * - Added code from nameTrait
 */
trait srcTrait
{

    /**
     * @since SG-HTML5.00.01
     */
    public function getSrc()
    {
        return $this->getAttribute("src");
    }

    /**
     * @since SG-HTML5.00.01
     * @return self
     */
    public function removeSrc()
    {
        $this->unsetAttribute("src");
        return $this;
    }

    /**
     * @since SG-HTML5.00.01
     * 
     * @param string $src
     * @return self
     */
    public function setSrc($src)
    {
        $this->setAttribute("src", $src);
        return $this;
    }

}
