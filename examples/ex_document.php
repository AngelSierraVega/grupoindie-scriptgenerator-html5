<?php

/*
 * Copyright (C) 2016 Angel Sierra Vega. Grupo INDIE.
 *
 * This software is protected under GNU: you can use, share, study and 
 * modify it but not distribute it under the terms of the GNU General 
 * Public License as published by the Free Software Foundation, either 
 * version 3 of the License, or (at your option) any later version.
 */
require_once '../GIGhtml5.php';
$ex = new GIGhtml5_document("1: Simple Document (GIGhtml5_document)");
$ex->addElement("Hello World!");
echo $ex;
