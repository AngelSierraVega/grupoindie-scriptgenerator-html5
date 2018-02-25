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
 */
class ProjectHandler extends \GIndie\ProjectHandler
{

    /**
     * @return string
     * @since SG-DML.00.01
     * @todo
     * - Deprecate method
     */
    public static function autoloaderFilename()
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
