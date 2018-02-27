<?php

/*
 * Copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIndie\ScriptGenerator\HTML5\Attribute;

/**
 * Specifies a name for the element
 * 
 * https://www.w3schools.com/tags/att_name.asp
 * 
 * @package     HTML5
 * @subpackage  Main
 * @category    API
 * 
 * @copyright   (c) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * @version     GIG-HTML5.00.01
 * @since       2017-08-19
 * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
 * 
 */
trait nameTrait
{

    /**
     * [description]
     * @since   GIG-HTML5.00.01
     * 
     */
    public function getName()
    {
        return $this->getAttribute("name");
    }

    /**
     * [description]
     * @since   GIG-HTML5.00.01
     * 
     */
    public function removeName()
    {
        $this->unsetAttribute("name");
        return $this;
    }

    /**
     * 
     * @param string $value The value of the attribute.
     * @return self
     * 
     * @since GIG-HTML5.00.01
     */
    public function setName($name)
    {
        $this->setAttribute("name", $name);
        return $this;
    }

}
