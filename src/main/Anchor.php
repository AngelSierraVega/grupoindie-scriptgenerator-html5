<?php

/*
 * Copyright (C) 2016 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, share, study and 
 * modify it but not distribute it under the terms of the GNU General 
 * Public License as published by the Free Software Foundation, either 
 * version 3 of the License, or (at your option) any later version.
 */

namespace GIndie\DML\HTML5\Anchor;

trait Link {
    public function setLink($link, $text = null) {
        try {
            $this->setAttribute("href", $link);
            if ($text != null) {
                $this->addContent($text);
            }
        } catch (Exception $e) {
            displayError($e);
        }
    }
}

/**
 * Represents a Document object
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 */
class Anchor extends \GIndie\DML\HTML5\Node {

    use Link;
    
    public function __construct($link, $text = null, $target = null) {
        try {
            $_attributes = ["href" => $link];
            if($target != null){
                $_attributes["target"] = $target;
            }
            parent::__construct("a", false, $_attributes, $text != null ? [$text] : []);
        } catch (Exception $e) {
            displayError($e);
        }
    }

    

}
