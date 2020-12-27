<?php

/**
 * 
 * @copyright (CC) 2020 Angel Sierra Vega. Grupo INDIE.
 * @license file://LICENSE
 *
 * @package GIndie\ScriptGenerator\HTML5\Attribute
 * 
 * @since 17-04-15
 * @version 00.90
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
     * @since 18-02-14
     * @param type $id
     */
    public function setId($id)
    {
        $this->setAttribute("id", $id);
        return $this;
    }

    /**
     * 
     * @return string
     * @since 18-02-14
     */
    public function getId()
    {
        return $this->getAttribute("id");
    }

}
