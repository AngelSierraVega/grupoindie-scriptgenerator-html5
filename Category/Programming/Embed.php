<?php

/**
 * GI-SG1-HTML5-DVLP - Embed
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (C) 2018 Angel Sierra Vega. Grupo INDIE.
 * @license file://LICENSE MIT License
 *
 * @package GIndie\ScriptGenerator\HTML5\Category\Programming
 *
 * @since 18-11-01
 * @version 00.A0
 */

namespace GIndie\ScriptGenerator\HTML5\Category\Programming;

use \GIndie\ScriptGenerator\HTML5\Node;
use \GIndie\ScriptGenerator\HTML5\Attribute;

/**
 * The <embed> tag defines a container for an external application or interactive content (a plug-in).
 * 
 * @link <https://www.w3schools.com/tags/tag_embed.asp>
 * 
 * @edit 19-11-04
 */
class Embed extends Node
{

    /**
     * @since 19-11-04
     */
    use Attribute\heightTrait; //Specifies the height of the embedded content
    use Attribute\srcTrait; //Specifies the address of the external file to embed
    use Attribute\typeTrait; //Specifies the media type of the embedded content
    use Attribute\widthTrait; //Specifies the width of the embedded content

    /**
     * The <embed> tag defines a container for an external application or interactive content (a plug-in).
     * 
     * @param string $src The address of the external file to embed
     * @since 19-11-04
     */
    protected function __construct($src)
    {
        parent::__construct(static::TYPE_EMPTY_OPEN, "embed");
        $this->setSrc($src);
    }

}
