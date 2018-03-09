<?php

namespace GIndie\ScriptGenerator\HTML5;

/**
 * DVLP-SG1-HTML5 - ProjectHandler
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (c) 2018 Angel Sierra Vega. Grupo INDIE.
 *
 * @package ScriptGenerator
 * @subpackage HTML5
 *
 * @version SG-HTML5.00.00 18-02-24 Empty class created.
 * @edit SG-HTML5.00.01
 * - Class extends \GIndie\ProjectHandler
 * - Implemented abstrac methods 
 * @edit SG-HTML5.00.02 18-02-27
 * - Created projectClasses()
 * @edit SG-HTML5.00.03 18-03-09
 * - Deprecated autoloaderFilename()
 */
class ProjectHandler extends \GIndie\ProjectHandler
{

    /**
     * @since SG-HTML5.00.02
     * @return array
     * @todo Unit test for Node\Tag\Attributes
     */
    public static function projectClasses()
    {
        return [HTML5\Category\Basic::class
            , HTML5\Category\Links::class
            , HTML5\Category\Lists::class
            , HTML5\Category\Meta::class
            , HTML5\Category\Programming::class
            , HTML5\Category\StylesSemantics::class
        ];
    }

    /**
     * @return string
     * @since SG-DML.00.01
     * @deprecated since SG-HTML5.00.03
     */
    public static function autoloaderFilenameDPR()
    {
        return "main.php";
    }

    /**
     * @return string
     * @since SG-DML.00.01
     */
    public static function pathToSourceCode()
    {
        return \pathinfo(__FILE__, \PATHINFO_DIRNAME) . \DIRECTORY_SEPARATOR;
    }

    /**
     * @return string
     * @since SG-DML.00.01
     */
    public static function projectName()
    {
        return "HTML5";
    }

    /**
     * @return string
     * @since SG-DML.00.01
     */
    public static function projectNamespace()
    {
        return "ScriptGenerator";
    }

    /**
     * @return string
     * @since SG-DML.00.01
     */
    public static function projectVendor()
    {
        return "GIndie";
    }

}
