<?php

/*
 * Copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIgenerator\DML\HTML5\Handlers;

trait classFunctions {

    public function addClass($classname) {
        $class = $this->getAttribute("class");
        if ($class == false) {
            return $this->setAttribute("class", $class = new Classes([$classname]));
        } else {
            return $class->addClass($classname);
        }
    }

    public function removeClass($classname) {
        $class = $this->getAttribute("class");
        if ($class == false) {
            return false;
        } else {
            return $class->removeClass($classname);
        }
    }

    public function hasClass($classname) {
        $class = $this->getAttribute("class");
        if ($class == false) {
            return false;
        } else {
            return $class->hasClass($classname);
        }
    }

}

class Classes {

    private $_classes;

    public function __construct(array $classes = []) {
        $this->_classes = $classes;
    }

    public function __toString() {
        return join(" ", $this->_classes);
    }

    public function addClass($classname) {
        if (in_array($classname, $this->_classes) == false) {
            $this->_classes[] = $classname;
        }
        return true;
    }

    public function removeClass($classname) {
        if (($key = array_search($classname, $this->_classes)) !== false) {
            unset($this->_classes[$key]);
            return true;
        }
        return false;
    }

    public function hasClass($classname) {
        return array_search($classname, $this->_classes);
    }

}
