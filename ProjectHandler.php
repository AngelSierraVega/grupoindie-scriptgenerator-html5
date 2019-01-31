<?php

namespace GIndie\ScriptGenerator\HTML5;

/**
 * DVLP-SG1-HTML5 - ProjectHandler
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (c) 2018 Angel Sierra Vega. Grupo INDIE.
 *
 * @package GIndie\ScriptGenerator\HTML5\Components
 *
 * @version 00.49
 * 
 * @since 18-02-24
 * @edit SG-HTML5.00.01
 * - Class extends \GIndie\ProjectHandler
 * - Implemented abstrac methods 
 * @edit SG-HTML5.00.02 18-02-27
 * - Created projectClasses()
 * @edit SG-HTML5.00.03 18-03-09
 * - Deprecated autoloaderFilename()
 * @edit 18-11-01
 * - Class extends \GIndie\ProjectHandler\AbstractProjectHandler
 */
class ProjectHandler extends \GIndie\ProjectHandler\AbstractProjectHandler
{

    /**
     * 
     * @return array|string
     * @since 18-11-01
     * @edit 19-02-03
     */
    public static function versions()
    {
        $rtnArray = [];
        //AlphaCero
        $rtnArray[\hexdec("00.01")]["code"] = "CERO";
        $rtnArray[\hexdec("00.01")]["description"] = "Cero";
        $rtnArray[\hexdec("00.01")]["threshold"] = "00.01";
        //BetaCero
        $rtnArray[\hexdec("00.44")]["code"] = "RVSD-VRSN";
        $rtnArray[\hexdec("00.44")]["description"] = "Revised project version";
        $rtnArray[\hexdec("00.44")]["threshold"] = "00.44";

        /**
         * 00.46: CMM-UPDT
         */
        $rtnArray[\hexdec("00.46")]["code"] = "CMM-UPDT";
        $rtnArray[\hexdec("00.46")]["description"] = "19-02-03 Common updates";
        $rtnArray[\hexdec("00.46")]["threshold"] = "00.46";
        
        /**
         * 00.49: NEW-FRM-ELMTN
         */
        $rtnArray[\hexdec("00.49")]["code"] = "NEW-FRM-ELMTN";
        $rtnArray[\hexdec("00.49")]["description"] = "NEW FormElement";
        $rtnArray[\hexdec("00.49")]["threshold"] = "00.49";

        /**
         * 00.A0: RLS-ALPHA
         */
        $rtnArray[\hexdec("00.A0")]["code"] = "RLS-ALPHA";
        $rtnArray[\hexdec("00.A0")]["description"] = "Alpha release";
        $rtnArray[\hexdec("00.A0")]["threshold"] = "00.A0";

        //One
        $rtnArray[\hexdec("01.00")]["code"] = "ONE";
        $rtnArray[\hexdec("01.00")]["description"] = "One";
        $rtnArray[\hexdec("01.00")]["threshold"] = "01.00";
        return $rtnArray;
    }

    /**
     * @since SG-HTML5.00.02
     * @return array
     * @todo Unit test for Node\Tag\Attributes
     */
    public static function projectClasses()
    {
        return [];
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
