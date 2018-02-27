<?php

/**
 * DVLP-SG1-HTML5 - srcTrait
 */

namespace GIndie\ScriptGenerator\HTML5\Attribute;

/**
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (c) 2018 Angel Sierra Vega. Grupo INDIE.
 *
 * @package ScriptGenerator
 * @subpackage HTML5
 *
 * @version SG-HTML5.00.00 18-02-04 Empty trait created.
 * @edit SG-HTML5.00.01
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
