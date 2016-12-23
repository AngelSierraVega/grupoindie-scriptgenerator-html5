<?php

/*
 * Copyright (C) 2016 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIndie\DML\HTML5\Tag;

require_once '/../../../GI_DML_Node/main/Node/Tag.php';

//namespace GIndie\DML\Node\Tag;

class EmptyTag {
    //use TagAttributes;
    use \GIndie\DML\Node\Tag\TagMain;
    
    protected static $OpenSimbol = "<";
    protected static $CloseSimbol = " />";
}

