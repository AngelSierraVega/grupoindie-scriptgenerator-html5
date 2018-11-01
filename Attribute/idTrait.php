<?php

/**
 * 
 * @copyright (c) 2018 Angel Sierra Vega. Grupo INDIE.
 *
 * @package GIndie\ScriptGenerator\HTML5\Attribute
 * 
 * @since 17-04-15
 * @version 00.A0
 * @edit 18-11-01
 * - Revised version
 * @todo Upgrade DocBlock using https://www.computerhope.com
 * @todo Create removeId()
 */

namespace GIndie\ScriptGenerator\HTML5\Attribute;

/**
 * @edit 18-02-14
 * - Created setId(), getId()
 */
trait idTrait
{

    /**
     * @since SG-HTML5.00.01
     * @param type $id
     * @return $this
     */
    public function setId($id)
    {
        $this->setAttribute("id", $id);
        return $this;
    }

    /**
     * 
     * @return string
     * @since SG-HTML5.00.01
     */
    public function getId()
    {
        return $this->getAttribute("id");
    }

}
