<?php

/*
 * Copyright (C) 2017 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIndie\Generator\DML\HTML5\Category\StylesSemantics;

use GIndie\Generator\DML\HTML5\Node;
use \GIndie\Generator\DML\HTML5\Attribute;

/**
 *  The <style> tag is used to define style information for an HTML document.
 * More info. at <https://www.w3schools.com/tags/tag_style.asp>
 * 
 * @version     GIG-HTML5.02
 *
 * @package HTML5
 * @subpackage Main
 * @category API
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @since 2017-05-15
 *
 */
class Style extends Node {

    use Attribute\GlobalAttributes;
    use Attribute\mediaTrait;
    use Attribute\scopedTrait;
    use Attribute\typeTrait;

    /**
     * Creates a new style object.
     *
     * @param       null|mixed type Either the content or an array of the content.
     *
     * @version     GI-HTML5.00.01
     * @since       2017-05-17
     * @author      IZmir Sanchez Juarez <izmirreffi@gmail.com>
     */
    function __construct($media, $scoped, $type) {
        parent::__construct("style", TRUE,
                ["media" => $media, "scoped" => $scoped, "type" => $type]);
    }

}
