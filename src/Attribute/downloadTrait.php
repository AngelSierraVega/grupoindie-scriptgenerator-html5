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
 * []
 *
 * @package     HTML5
 * @subpackage  Main
 * @category    API
 * 
 * @copyright   (c) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * @version     GIG-HTML5.00.01
 * @since       2017-04-15
 * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
 * 
 */
trait downloadTrait {
    /**
     * [description]
     * 
     * @since GIG-HTML5.00.01
     */
    public function getDownload() {
        return $this->getAttribute("download");
    }
    /**
     * [description]
     * 
     * @since GIG-HTML5.00.01
     */
    public function removeDownload() {
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
    public function setDownload($value) {
        $this->setAttribute("download", $value);
        return $this;
    }

}

interface download {

    public function getDownload();

    public function removeDownload();

    public function setDownload($value);
}