<?php

/*
 * Copyright (C) 2016 Angel
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

/**
 * Description of PGIdomElement_HTML5
 *
 * @author Angel
 */
class PGIdomElement_HTML5 extends PGIdomElement {
    
    
    
    public static function icon($iconClass){
        $rtnIcon = new self("i");
        $rtnIcon->PGIpushClass($iconClass);
        return $rtnIcon;
    }
    
    /**
     * Description of PGIanchor
     * 
     * @version alpha.03.01
     */
    public static function PGIanchorBlank($link) {
        try {
            $rtnDOM = new PGIdomElement_HTML5_anchor();
            $rtnDOM->PGIsetLink($link, $link);
            $rtnDOM->PGIsetAttribute("target", "_blank");
            return $rtnDOM;
        } catch (Exception $e) {
            PGIdomBuilder_plataform::AlertError($e);
        }
    }
    
    /**
     * Description of PGIanchor
     * 
     * @version alpha.03.01
     */
    public static function PGIanchor($link,$text=null) {
        try {
            $rtnDOM = new PGIdomElement_HTML5_anchor();
            $rtnDOM->PGIsetLink($link, $text);
            return $rtnDOM;
        } catch (Exception $e) {
            PGIdomBuilder_plataform::AlertError($e);
        }
    }

    /**
     * Description of PGIdiv
     * 
     * @version alpha.03.01
     */
    public static function PGIdiv(PGIdomElement $content = null) {
        try {
            $rtnDOM = new self();
            $rtnDOM->PGIsetTag("div");
            $rtnDOM->PGIpushContent($content);
            return $rtnDOM;
        } catch (Exception $e) {
            PGIdomBuilder_plataform::AlertError($e);
        }
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

    /**
     * Description of PGIspan
     * 
     * @version alpha.03.01
     */
    public static function PGIspan(PGIdomElement $content) {
        try {
            $rtnDOM = new self();
            $rtnDOM->PGIsetTag("span");
            $rtnDOM->PGIpushContent($content);
            return $rtnDOM;
        } catch (Exception $e) {
            PGIdomBuilder_plataform::AlertError($e);
        }
    }

}

include_once 'PGIcommon/PGIdomElement/PGIdomElement_HTML5/PGIdomElement_HTML5_text.php';
include_once 'PGIcommon/PGIdomElement/PGIdomElement_HTML5/PGIdomElement_HTML5_table.php';
include_once 'PGIcommon/PGIdomElement/PGIdomElement_HTML5/PGIdomElement_HTML5_image.php';
include_once 'PGIcommon/PGIdomElement/PGIdomElement_HTML5/PGIdomElement_HTML5_anchor.php';//
include_once 'PGIcommon/PGIdomElement/PGIdomElement_HTML5/PGIdomElement_HTML5_list.php';//
