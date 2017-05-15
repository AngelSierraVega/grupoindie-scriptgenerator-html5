<?php

/*
 * Copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIgenerator\DML\HTML5\Handlers\Hyperlink;

/**
 * Specifies the URL of the page the link goes to.
 *
 * @package     HTML5
 * @subpackage  Main
 * @category    API
 * 
 * @copyright   (c) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * @version     GI-HTML5.00
 * @since       2017-04-15
 * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
 * 
 */
trait hrefTrait {
    
    public function getHref(){
        return $this->getAttribute("href");
    }
    
    public function removeHref(){
        $this->unsetAttribute("href");
        return $this;
    }

    public function setHref($href) {
        $this->setAttribute("href", $href);
        return $this;
    }
    
}

interface href {
    
    public function getHref();
    
    public function removeHref();

    public function setHref($href);
  
}
