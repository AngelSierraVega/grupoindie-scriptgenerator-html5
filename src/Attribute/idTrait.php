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
 * @edit SG-HTML5.00.01 18-02-14
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
