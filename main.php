<?php

/*
 * Copyright (C) 2016 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */

namespace GIndie\DML\HTML5;

require_once __DIR__ .'/../GI_DML_Node/main.php';
require_once __DIR__ .'/main/Node.php';
require_once __DIR__ .'/main/Anchor.php';
require_once __DIR__ .'/main/Document.php';

class Factory extends \GIndie\DML\Node\Factory {

    use \GIndie\DML\HTML5\_protectedAttrs;

    /**
     * Creates an empty DML node.
     * 
     * @param   $tag
     * @param   $attributes
     * 
     * @return  Node An object representation of an empty DML node.
     * 
     * @example Empty node.
     *  <pre>echo GIndie\DML\HTML5\Factory::Empty_("input")</pre> 
     *  <i><pre><input \></pre></i>
     * 
     * @version     beta.00.01
     * @since       2016-12-22
     * @author      Angel Sierra Vega <angel.sierra@grupoindie.com>
     */
    public static function Empty_($tag, array $attributes = []) {
        try {
            return new self($tag, true, $attributes);
        } catch (Exception $e) {
            displayError($e);
        }
    }
    /**
     * 
     * @param type $title
     * @param type $lang
     * @param type $doctype
     * @param type $charset
     */
    public static function Document($title, $lang = "en", $doctype = "html", $charset = "UTF-8") {
        try {
            return new Document($title, $lang, $doctype, $charset);
        } catch (Exception $e) {
            displayError($e);
        }
    }
    
    public static function Anchor($link,$text=null,$target=null) {
        try {
            return new Anchor\Anchor($link, $text, $target);
        } catch (Exception $e) {
            displayError($e);
        }
    }
    
    public static function Div(array $content = null) {
        try {
            return new self("div", false, [],$content);
        } catch (Exception $e) {
            displayError($e);
        }
    }
    
    public static function Span(array $content = null) {
        try {
            return new self("span", false, [],$content);
        } catch (Exception $e) {
            PGIdomBuilder_plataform::AlertError($e);
        }
    }

}







/*
 * @deprecated
 */
//class PGIdomElement_HTML5 extends PGIdomElement {
class PGIdomElement_HTML5 {
    
    
    
    public static function icon($iconClass){
        $rtnIcon = new self("i");
        $rtnIcon->PGIpushClass($iconClass);
        return $rtnIcon;
    }
    
    

    public static function PGIdocumentStructure(PGIinformation_documentStructure $structure, $level = 1) {
        try {
            $rtnDOM = new self(null);
            switch ($level) {
                case 1:
                    $rtnDOM->PGIpushContent(PGIdomElement_HTML5_text::PGIheader1($structure->PGIgetTitle()));
                    if ($structure->PGIgetSubtitle() != NULL) {
                        $rtnDOM->PGIpushContent(PGIdomElement_HTML5_text::PGIheader4($structure->PGIgetSubtitle()));
                    }
                    break;
                case 2:
                    $rtnDOM->PGIpushContent(PGIdomElement_HTML5_text::PGIheader2($structure->PGIgetTitle()));
                    if ($structure->PGIgetSubtitle() != NULL) {
                        $rtnDOM->PGIpushContent(PGIdomElement_HTML5_text::PGIheader5($structure->PGIgetSubtitle()));
                    }
                    break;
                case 3:
                    $rtnDOM->PGIpushContent(PGIdomElement_HTML5_text::PGIheader3($structure->PGIgetTitle()));
                    if ($structure->PGIgetSubtitle() != NULL) {
                        $rtnDOM->PGIpushContent(PGIdomElement_HTML5_text::PGIheader6($structure->PGIgetSubtitle()));
                    }
                    break;
                case 4:
                    $rtnDOM->PGIpushContent(PGIdomElement_HTML5_text::PGIheader4($structure->PGIgetTitle()));
                    if ($structure->PGIgetSubtitle() != NULL) {
                        $rtnDOM->PGIpushContent(PGIdomElement_HTML5_text::PGIheader6($structure->PGIgetSubtitle()));
                    }
                    break;
                case 5:
                    $rtnDOM->PGIpushContent(PGIdomElement_HTML5_text::PGIheader5($structure->PGIgetTitle()));
                    if ($structure->PGIgetSubtitle() != NULL) {
                        $rtnDOM->PGIpushContent(PGIdomElement_HTML5_text::PGIheader6($structure->PGIgetSubtitle()));
                    }
                    break;
                default:
                    $rtnDOM->PGIpushContent(PGIdomElement_HTML5_text::PGIheader6($structure->PGIgetTitle()));
                    break;
            }

            foreach ($structure->PGIgetContent() as $tempContent) {
                if (is_a($tempContent, "PGIdata_table")) {
                    $rtnDOM->PGIpushContent(new PGIdomElement_HTML5_table($tempContent));
                } elseif (is_a($tempContent, "PGIdomElement")) {
                    $rtnDOM->PGIpushContent($tempContent);
                } elseif (is_a($tempContent, "PGIinformation_documentStructure")) {
                    $rtnDOM->PGIpushContent(static::PGIdocumentStructure($tempContent,$level+1));
                }
            }
            
            return $rtnDOM;
        } catch (Exception $e) {
            PGIdomBuilder_plataform::AlertError($e);
        }
    }

    /**
     * Description of PGIspan
     * 
     * @version alpha.03.01
     */
    public static function PGIdocument(PGIinformation_document $document) {
        try {
            $rtnDOM = new self(null);
            //$rtnDOM->PGIsetTag(null);
            $mainStructure = $document->PGIgetMainStructure();
            $rtnDOM->PGIpushContent(static::PGIdocumentStructure($mainStructure));
            /*$rtnDOM->PGIpushContent(PGIdomElement_HTML5_text::PGIheader1($mainStructure->PGIgetTitle()));
            $rtnDOM->PGIpushContent(PGIdomElement_HTML5_text::PGIheader4($mainStructure->PGIgetSubtitle()));
            foreach ($mainStructure->PGIgetContent() as $tempContent) {
                if (is_a($tempContent, "PGIdata_table")) {
                    $rtnDOM->PGIpushContent(new PGIdomElement_HTML5_table($tempContent));
                } elseif (is_a($tempContent, "PGIdomElement")) {
                    $rtnDOM->PGIpushContent($tempContent);
                } elseif (is_a($tempContent, "PGIinformation_documentStructure")) {
                    $rtnDOM->PGIpushContent($tempContent);
                }
            }*/
            return $rtnDOM;
        } catch (Exception $e) {
            PGIdomBuilder_plataform::AlertError($e);
        }
    }



}