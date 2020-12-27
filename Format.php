<?php

/**
 * GI-SG1-HTML5-DVLP - Format
 * 
 * @link <https://www.w3schools.com/tags/ref_byfunc.asp>
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (CC) 2020 Angel Sierra Vega. Grupo INDIE.
 * @license file://LICENSE
 *
 * @package GIndie\ScriptGenerator\HTML5
 *
 * @since 18-05-16
 * @version 00.30
 * @todo DEPRECATE and construct in proper categories (https://www.computerhope.com)
 */

namespace GIndie\ScriptGenerator\HTML5;

/**
 * 
 * @todo
 * <acronym> 	Not supported in HTML5. Use <abbr> instead. Defines an acronym
 * <abbr> 	Defines an abbreviation or an acronym
 * <address> 	Defines contact information for the author/owner of a document/article
 * <bdi> 	Isolates a part of text that might be formatted in a different direction from other text outside it
 * <bdo> 	Overrides the current text direction
 * <big> 	Not supported in HTML5. Use CSS instead. Defines big text
 * <blockquote> 	Defines a section that is quoted from another source
 * <center> 	Not supported in HTML5. Use CSS instead. Defines centered text
 * <cite> 	Defines the title of a work
 * <code> 	Defines a piece of computer code
 * <del> 	Defines text that has been deleted from a document
 * <dfn> 	Represents the defining instance of a term
 * <font> 	Not supported in HTML5. Use CSS instead. Defines font, color, and size for text
 * <i> 	Defines a part of text in an alternate voice or mood
 * <ins> 	Defines a text that has been inserted into a document
 * <kbd> 	Defines keyboard input
 * <mark> 	Defines marked/highlighted text
 * <meter> 	Defines a scalar measurement within a known range (a gauge)
 * <progress> 	Represents the progress of a task
 * <q> 	Defines a short quotation
 * <rp> 	Defines what to show in browsers that do not support ruby annotations
 * <rt> 	Defines an explanation/pronunciation of characters (for East Asian typography)
 * <ruby> 	Defines a ruby annotation (for East Asian typography)
 * <s> 	Defines text that is no longer correct
 * <samp> 	Defines sample output from a computer program
 * <small> 	Defines smaller text
 * <strike> 	Not supported in HTML5. Use <del> or <s> instead. Defines strikethrough text
 * <sub> 	Defines subscripted text
 * <sup> 	Defines superscripted text
 * <template> 	Defines a template
 * <time> 	Defines a date/time
 * <tt> 	Not supported in HTML5. Use CSS instead. Defines teletype text
 * <u> 	Defines text that should be stylistically different from normal text
 * <var> 	Defines a variable
 * <wbr> 	Defines a possible line-break
 */
class Format
{

    /**
     * The <pre> tag defines preformatted text, the text is displayed in a 
     * fixed-width font (usually Courier), and it preserves both spaces and line 
     * breaks.
     * 
     * @link <https://www.w3schools.com/tags/tag_pre.asp>
     * 
     * @param mixed $content The content of the Preformatted node.
     * @return \GIndie\ScriptGenerator\HTML5\Format\Preformatted
     */
    public static function preformatted($content)
    {
        return new Format\Preformatted($content);
    }

    

    /**
     * The bold tag specifies bold text.
     * 
     * According to the HTML 5 specification, the <b> tag should be used as a LAST 
     * resort when no other tag is more appropriate. The HTML 5 specification states 
     * that headings should be denoted with the <h1> to <h6> tags, emphasized text 
     * should be denoted with the <em> tag, important text should be denoted with 
     * the <strong> tag, and marked/highlighted text should use the <mark> tag.
     * 
     * @param mixed $content The content of the Bold node.
     * @return \GIndie\ScriptGenerator\HTML5\Format\Bold
     * @since 18-11-01
     */
    public static function bold($content)
    {
        return new Format\Bold($content);
    }

    

}
