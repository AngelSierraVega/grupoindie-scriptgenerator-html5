<?php

/**
 * FormInput
 * 
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (c) 2018 Angel Sierra Vega. Grupo INDIE.
 * 
 * @package GIndie\ScriptGenerator\HTML5\Category\FormInput
 * 
 * @since 17-04-16
 * @version DEPRECATED
 */

namespace GIndie\ScriptGenerator\HTML5\Category;

/**
 * Factory Pattern for the <b>form and input tags</b> of <b>HTML5</b>.
 * 
 * More info. at <https://www.w3schools.com/tags/ref_byfunc.asp>.
 *
 * @edit GIG-HTML5.00.02 17-04-23
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @edit SG-HTML5.00.01 18-01-20
 * @edit SG-HTML5.00.02 18-01-30
 * - Added static function for defined inputs
 * @edit SG-HTML.00.03 18-02-03
 * - Created label()
 */
class FormInput
{

    /**
     * {@see \GIgenerator\DML\HTML5\FormInput\Button}
     * 
     * @return \GIndie\ScriptGenerator\HTML5\Category\FormInput\Button
     * 
     * @edit SG-HTML5.00.01
     * 
     * @ut_str button "<button type="button"></button>"
     */
    public static function button($content = null, $type = "button")
    {
        return new FormInput\Button($content, $type);
    }

    /**
     * {@see \GIgenerator\DML\HTML5\FormInput\Form}
     *
     * @since GIG-HTML5.00.02
     * 
     * @return \GIndie\ScriptGenerator\HTML5\Category\FormInput\Form
     * 
     * @edit SG-HTML5.00.01
     * 
     * @ut_paramsDPR form "test"
     * @ut_str form "<form></form>"
     */
    public static function form()
    {
        return new FormInput\Form();
    }

    /**
     * @since SG-HTML.00.02
     * @return \GIndie\ScriptGenerator\HTML5\Category\FormInput\Input\Button
     * @ut_str inputButton "<input type="button" />"
     */
    public static function inputButton()
    {
        return new FormInput\Input\Button();
    }

    /**
     * @since SG-HTML.00.02
     * @return \GIndie\ScriptGenerator\HTML5\Category\FormInput\Input\Checkbox
     * @ut_str inputCheckbox "<input type="checkbox" />"
     */
    public static function inputCheckbox()
    {
        return new FormInput\Input\Checkbox();
    }

    /**
     * @since SG-HTML.00.02
     * @return \GIndie\ScriptGenerator\HTML5\Category\FormInput\Input\Color
     * @ut_str inputColor "<input type="color" />"
     */
    public static function inputColor()
    {
        return new FormInput\Input\Color();
    }

    /**
     * @since SG-HTML.00.02
     * @return \GIndie\ScriptGenerator\HTML5\Category\FormInput\Input\Date
     * @ut_str inputDate "<input type="date" />"
     */
    public static function inputDate()
    {
        return new FormInput\Input\Date();
    }

    /**
     * @since SG-HTML.00.02
     * @return \GIndie\ScriptGenerator\HTML5\Category\FormInput\Input\DateTimeLocal
     * @ut_str inputDateTimeLocal "<input type="datetime-local" />"
     */
    public static function inputDateTimeLocal()
    {
        return new FormInput\Input\DateTimeLocal();
    }

    /**
     * @since SG-HTML.00.02
     * @return \GIndie\ScriptGenerator\HTML5\Category\FormInput\Input\Email
     * @ut_str inputEmail "<input type="email" />"
     */
    public static function inputEmail()
    {
        return new FormInput\Input\Email();
    }

    /**
     * @since SG-HTML.00.02
     * @return \GIndie\ScriptGenerator\HTML5\Category\FormInput\Input\File
     * @ut_str inputFile "<input type="file" />"
     */
    public static function inputFile()
    {
        return new FormInput\Input\File();
    }

    /**
     * @since SG-HTML.00.02
     * @return \GIndie\ScriptGenerator\HTML5\Category\FormInput\Input\Hidden
     * @ut_str inputHidden "<input type="hidden" />"
     */
    public static function inputHidden()
    {
        return new FormInput\Input\Hidden();
    }

    /**
     * @since SG-HTML.00.02
     * @return \GIndie\ScriptGenerator\HTML5\Category\FormInput\Input\Image
     * @ut_str inputImage "<input type="image" />"
     */
    public static function inputImage()
    {
        return new FormInput\Input\Image();
    }

    /**
     * @since SG-HTML.00.02
     * @return \GIndie\ScriptGenerator\HTML5\Category\FormInput\Input\Month
     * @ut_str inputMonth "<input type="month" />"
     */
    public static function inputMonth()
    {
        return new FormInput\Input\Month();
    }

    /**
     * @since SG-HTML.00.02
     * @return \GIndie\ScriptGenerator\HTML5\Category\FormInput\Input\Number
     * @ut_str inputNumber "<input type="number" />"
     */
    public static function inputNumber()
    {
        return new FormInput\Input\Number();
    }

    /**
     * @since SG-HTML.00.02
     * @return \GIndie\ScriptGenerator\HTML5\Category\FormInput\Input\Password
     * @ut_str inputPassword "<input type="password" />"
     */
    public static function inputPassword()
    {
        return new FormInput\Input\Password();
    }

    /**
     * @since SG-HTML.00.02
     * @return \GIndie\ScriptGenerator\HTML5\Category\FormInput\Input\Radio
     * @ut_str inputRadio "<input type="radio" />"
     */
    public static function inputRadio()
    {
        return new FormInput\Input\Radio();
    }

    /**
     * @since SG-HTML.00.02
     * @return \GIndie\ScriptGenerator\HTML5\Category\FormInput\Input\Range
     * @ut_str inputRange "<input type="range" />"
     */
    public static function inputRange()
    {
        return new FormInput\Input\Range();
    }

    /**
     * @since SG-HTML.00.02
     * @return \GIndie\ScriptGenerator\HTML5\Category\FormInput\Input\Reset
     * @ut_str inputReset "<input type="reset" />"
     */
    public static function inputReset()
    {
        return new FormInput\Input\Reset();
    }

    /**
     * @since SG-HTML.00.02
     * @return \GIndie\ScriptGenerator\HTML5\Category\FormInput\Input\Search
     * @ut_str inputSearch "<input type="search" />"
     */
    public static function inputSearch()
    {
        return new FormInput\Input\Search();
    }

    /**
     * @since SG-HTML.00.02
     * @return \GIndie\ScriptGenerator\HTML5\Category\FormInput\Input\Submit
     * @ut_str inputSubmit "<input type="submit" />"
     */
    public static function inputSubmit()
    {
        return new FormInput\Input\Submit();
    }

    /**
     * @since SG-HTML.00.02
     * @return \GIndie\ScriptGenerator\HTML5\Category\FormInput\Input\Tel
     * @ut_str inputTel "<input type="tel" />"
     */
    public static function inputTel()
    {
        return new FormInput\Input\Tel();
    }

    /**
     * @since SG-HTML.00.02
     * @return \GIndie\ScriptGenerator\HTML5\Category\FormInput\Input\Text
     * @ut_str inputText "<input type="text" />"
     */
    public static function inputText()
    {
        return new FormInput\Input\Text();
    }

    /**
     * @since SG-HTML.00.02
     * @return \GIndie\ScriptGenerator\HTML5\Category\FormInput\Input\Time
     * @ut_str inputTime "<input type="time" />"
     */
    public static function inputTime()
    {
        return new FormInput\Input\Time();
    }

    /**
     * @since SG-HTML.00.02
     * @return \GIndie\ScriptGenerator\HTML5\Category\FormInput\Input\URL
     * @ut_str inputURL "<input type="url" />"
     */
    public static function inputURL()
    {
        return new FormInput\Input\URL();
    }

    /**
     * @since SG-HTML.00.02
     * @return \GIndie\ScriptGenerator\HTML5\Category\FormInput\Input\Week
     * @ut_str inputWeek "<input type="week" />"
     */
    public static function inputWeek()
    {
        return new FormInput\Input\Week();
    }

    /**
     * @since SG-HTML.00.03
     * @param mixed|null $content
     * @return \GIndie\ScriptGenerator\HTML5\Category\FormInput\Label
     */
    public static function label($content = null)
    {
        return new FormInput\Label($content);
    }

}
