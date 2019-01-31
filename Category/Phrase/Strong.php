<?php

/**
 * GI-SG1-HTML5-DVLP - Strong
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (C) 2018 Angel Sierra Vega. Grupo INDIE.
 *
 * @package GIndie\ScriptGenerator\HTML5\Category\Phrase
 *
 * @since 18-11-01
 * @version 01.30
 */

namespace GIndie\ScriptGenerator\HTML5\Category\Phrase;

/**
 * When writing in HTML, the <strong> tag is an inline element used to 
 * designate a section of text with strong importance; it is usually denoted
 * with bold font.
 * 
 * Note: This element is unique in that it is a phrase tag, which indicates 
 * that a section of text has structural meaning.
 * 
 * While the <strong> tag does not have any unique attributes, it does utilize 
 * all of the standard attributes.
 *
 * @link <https://www.computerhope.com/jargon/h/html-strong-tag.htm>
 * 
 */
class Strong extends AbstractPhrase
{

    /**
     * Creates a new Strong node.
     * 
     * @param mixed $content The content of the Strong node.
     * @param array $attributes The attributes of the node.
     *
     * @since 18-11-01
     * 
     * @edit 19-02-02
     * - Added param $attributes
     */
    public function __construct($content, $attributes = [])
    {
        parent::__construct(static::TYPE_DEFAULT, "strong", $attributes, $content);
    }

}
