<?php

namespace GIndie\ScriptGenerator\HTML5\Category\Phrase;

use \GIndie\ScriptGenerator\HTML5\Node;
use \GIndie\ScriptGenerator\HTML5\Attribute;

/**
 * In HTML, a phrase tag is used to indicate that a block of text has structural 
 * meaning. For example, using the <abbr> tag indicates that the word or phrase 
 * contained within is an abbreviation or acronym.
 * 
 * @link <https://www.computerhope.com/jargon/p/phrase-tag.htm>
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (C) 2018 Angel Sierra Vega. Grupo INDIE.
 *
 * @package GIndie\ScriptGenerator\HTML5\Category\Phrase
 * 
 * @version 00.F0
 * @edit 18-11-01
 * - Revised version
 *
 * @since 18-05-16
 */
abstract class AbstractPhrase extends Node
{

    /**
     * @since 18-05-16
     */
    use Attribute\GlobalAttributes;
}
