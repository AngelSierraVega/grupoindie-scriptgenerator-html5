<?php

/**
 * GI-SG1-HTML5-DVLP - HTML5
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (C) 2019 Angel Sierra Vega. Grupo INDIE.
 *
 * @package GIndie\ScriptGenerator\HTML5\Components
 * @license file://LICENSE MIT License
 *
 * @since 18-02-24
 * @version 00.4E
 */

namespace GIndie\ScriptGenerator\HTML5\Components\ProjectHandler;

/**
 * Project Handler for project GI-SG-HTML5
 * 
 * @edit 18-02-24
 * - Class extends \GIndie\ProjectHandler
 * - Implemented abstrac methods 
 * @edit 18-02-27
 * - Created projectClasses()
 * @edit 18-03-09
 * - Deprecated autoloaderFilename()
 * @edit 18-11-01
 * - Class extends \GIndie\ProjectHandler\AbstractProjectHandler
 */
class HTML5 extends \GIndie\ProjectHandler\AbstractProjectHandler
{

    /**
     * {@inheritdoc}
     * @since 18-11-01
     * @edit 19-02-03
     * @edit 19-08-02
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
         * 00.4D: MRG-HTML5form
         */
        $rtnArray[\hexdec("00.4D")]["code"] = "MRG-HTML5form";
        $rtnArray[\hexdec("00.4D")]["description"] = "Merged with external project HTML5form";
        $rtnArray[\hexdec("00.4D")]["threshold"] = "00.4D";
        
        /**
         * 00.4E: UPDT-ALBE-NOV
         */
        $rtnArray[\hexdec("00.4E")]["code"] = "UPDT-ALBE-NOV";
        $rtnArray[\hexdec("00.4E")]["description"] = "2019-11-04 Update for ALBE";
        $rtnArray[\hexdec("00.4E")]["threshold"] = "00.4E";

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
     * {@inheritdoc}
     * @since 18-02-27
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
     * 
     * {@inheritdoc}
     * @since 18-02-24
     * @edit 19-04-17
     */
    public static function pathToSourceCode()
    {
        return \GIndie\Common\PHP\Directories::getDirectoryFromFile(__FILE__, 2) . \DIRECTORY_SEPARATOR;
    }

    /**
     * {@inheritdoc}
     * @since 18-02-24
     */
    public static function projectName()
    {
        return "HTML5";
    }

    /**
     * {@inheritdoc}
     * @since 18-02-24
     */
    public static function projectNamespace()
    {
        return "ScriptGenerator";
    }

    /**
     * {@inheritdoc}
     * @since 18-02-24
     */
    public static function projectVendor()
    {
        return "GIndie";
    }

}
