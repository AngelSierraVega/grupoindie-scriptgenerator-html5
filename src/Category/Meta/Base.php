<?php

/*
 * Copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIndie\Generator\DML\HTML5\Category\Meta;

use GIndie\Generator\DML\HTML5\Attribute;
use \GIndie\Generator\DML\HTML5\Node;

/**
 * Specify a default URL and a default target for all links on a page.
 *
 * More info. at <https://www.w3schools.com/tags/tag_base.asp>.
 *
 * @version GIG-HTML5.00.01
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @since  2017-05-15
 */
class Base extends Node {

    use Attribute\hrefTrait;
    use Attribute\targetTrait;
    use Attribute\GlobalAttributes;

    /**
     * Creates a new tag base object
     * @since GIG-HTML5.00.01
     * @author Izmir Sanchez Juarez <izmirreffi@gmail.com>
     * @param $href   [Specifies the base URL for all relative URLs in the page]
     * @param $target [Specifies the default target for all hyperlinks and forms in the page]
     */
    function __construct($href, $target) {
        parent::__construct($tag = "base", $emptyNode = true,
                ["href" => $href, "target" => $target]);
    }

}
