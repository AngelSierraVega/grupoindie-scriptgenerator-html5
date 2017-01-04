<?php

/*
 * Copyright (C) 2016 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, study and modify it
 * but not distribute it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 */
//require_once '../GI_DML_Node/main/Node.php';
//require_once 'main.php';
require_once __DIR__ . '/main.php';

$document = GIndie\DML\HTML5\Factory::Document("TEST");

//$example = GIndie\DML\HTML5\Factory::Empty_("input") ;
//$document->addContent($example. " || " . "<input />");
//$document->addContent(GIndie\DML\HTML5\Factory::Div([
//            GIndie\DML\HTML5\Factory::Span([
//                GIndie\DML\HTML5\Factory::Anchor("https:\\www.facebook.com", "link", "_blank")
//            ])
//]));

$example = GIndie\DML\HTML5\List_::Ordered(["link1", "link2", "link3"]);
$document->addContent($example);

$example = GIndie\DML\HTML5\List_::Unordered(["link1", "link2", "link3"]);
$document->addContent($example);


echo $document;

function displayError(Exception $e) {
    print($e->getTraceAsString() . "</br>" . $e->getMessage());
}
