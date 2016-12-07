<?php

/*
 * Copyright (C) 2016 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, share, study and 
 * modify it but not distribute it under the terms of the GNU General 
 * Public License as published by the Free Software Foundation, either 
 * version 3 of the License, or (at your option) any later version.
 */

require_once '/../GIGnode/GIGnode.php';

class GIGhtml5_script extends GIGnode {
    
}

class GIGhtml5_javascript extends GIGnode {
    
}

/**
 * Represents a GIGhtml5 object
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 */
class GIGhtml5 extends GIGnode {

    /**
     * @version NEW beta.00.02 Class GIGhtml5 +addScript
     * NEW Adds a 'script' tag as a child of the the html5 object.
     * @param NEW $script. The script or the file path to the script.
     * @param NEW $srcFile [optional]. True if script is a sourced file. 
     * Default false.
     */
    public function addScript($script, $srcFile = false) {
        try {
            $tmpScript = new self("script");
            if ($srcFile) {
                $tmpScript->setAttribute("src", $script);
            } else {
                $tmpScript->addElement($script);
            }
            return $this->addElement($tmpScript);
        } catch (Exception $e) {
            displayErrorPage($e->getMessage());
        }
    }

}

require_once 'GIGhtml5/GIGhtml5_document.php';
