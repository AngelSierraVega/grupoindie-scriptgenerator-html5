<?php

/**
 * GI-SG1-HTML5-DVLP - Phrase
 * 
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (CC) 2020 Angel Sierra Vega. Grupo INDIE.
 *
 * @package GIndie\ScriptGenerator\HTML5\Category\Phrase
 * @license file://LICENSE
 *
 * @since 18-05-16
 * @version 00.70
 */

namespace GIndie\ScriptGenerator\HTML5\Category;

/**
 * In HTML, a phrase tag is used to indicate that a block of text has structural 
 * meaning. For example, using the <abbr> tag indicates that the word or phrase 
 * contained within is an abbreviation or acronym.
 * 
 * @link <https://www.computerhope.com/jargon/p/phrase-tag.htm>
 * 
 * @edit 18-05-16
 * - Added <code>
 * @edit 18-11-01
 * - Added <em><strong>
 * @todo
 * - <abbr><cite><dfn><kbd><samp><var>
 * @todo unit test
 */
class Phrase
{

    /**
     * The HTML <code> tag is an inline HTML element used to designate that a 
     * section of text is computer code (mono-spaced font).
     * 
     * @link <https://www.computerhope.com/jargon/h/html-code-tag.htm>
     * 
     * @param mixed $content
     * @return \GIndie\ScriptGenerator\HTML5\Category\Phrase\Code
     * 
     * @since 18-05-16
     */
    public static function code($content)
    {
        return new Phrase\Code($content);
    }

    /**
     * When writing in HTML, the <strong> tag is an inline element used to 
     * designate a section of text with strong importance; it is usually denoted
     * with bold font.
     * 
     * Note: This element is unique in that it is a phrase tag, which indicates 
     * that a section of text has structural meaning.
     * 
     * @param mixed $content The content of the Strong node.
     * @param array $attributes The attributes of the Strong node.
     * @return \GIndie\ScriptGenerator\HTML5\Phrase\Strong
     * @since 18-11-01
     * @edit 19-02-02
     * - Added param $attributes
     */
    public static function strong($content, $attributes = [])
    {
        return new Phrase\Strong($content, $attributes);
    }

    /**
     * The HTML <em> tag is used in HTML to give emphasis to a certain block of text. 
     * By default, the <em> tag is an inline element that can be nested, and each 
     * level of nesting increases the degree of emphasis.
     * 
     * Note: The <em> tag is a phrase tag, which indicates that a section of text 
     * has structural meaning.
     * 
     * @param mixed $content The content of the Preformatted node.
     * @return \GIndie\ScriptGenerator\HTML5\Phrase\Emphasis
     * @since 18-11-01
     */
    public static function emphasis($content)
    {
        return new Phrase\Emphasis($content);
    }

}
