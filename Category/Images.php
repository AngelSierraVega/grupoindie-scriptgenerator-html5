<?php

namespace GIndie\ScriptGenerator\HTML5\Category;

/**
 * DVLP-SG1-HTML5 - Images
 * 
 * @link <https://www.w3schools.com/tags/ref_byfunc.asp>
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (CC) 2020 Angel Sierra Vega. Grupo INDIE.
 *
 * @package GIndie\ScriptGenerator\HTML5\Category\Images
 * @license file://LICENSE
 * 
 * @version 00.30
 * @edit 18-11-01
 * - Revised version
 * @todo Upgrade DocBlock using https://www.computerhope.com
 *
 * @since 18-02-23 
 * - Empty class created.
 * @edit SG-HTML5.00.01 18-02-23 
 * - Created all static functions for class
 * - Abstract class
 * - Funcional method img()
 */
abstract class Images
{

    /**
     * Defines an image
     * 
     * @param type $src
     * @param type $alt
     * 
     * @return \GIndie\ScriptGenerator\HTML5\Category\Images\Img
     * 
     * @since SG-HTML5.00.01
     */
    public static function img($src, $alt)
    {
        return new Images\Img($src, $alt);
    }

    /**
     * Defines a client-side image-map
     * @since SG-HTML5.00.01
     */
    abstract public static function map();

    /**
     * Defines an area inside an image-map
     * @since SG-HTML5.00.01
     */
    abstract public static function area();

    /**
     * Used to draw graphics, on the fly, via scripting (usually JavaScript)
     * @since SG-HTML5.00.01
     */
    abstract public static function canvas();

    /**
     * Defines a caption for a <figure> element
     * @since SG-HTML5.00.01
     */
    abstract public static function figcaption();

    /**
     * Specifies self-contained content
     * @since SG-HTML5.00.01
     */
    abstract public static function figure();

    /**
     * Defines a container for multiple image resources
     * @since SG-HTML5.00.01
     */
    abstract public static function picture();
}
