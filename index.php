<?php
require_once 'PhpBadWords.php';
require_once 'ObsceneCensorRus.php';
require_once 'mat_array.php';
use \Expalmer\PhpBadWords\PhpBadWords as BadWords;
$badwords = new BadWords;
$ObsceneCensorRus = new Wkhooy\ObsceneCensorRus;
function mat($text){
    $text1=$text;
    $badwords = $GLOBALS['badwords'];
    $class = $GLOBALS['ObsceneCensorRus'];
    $badwords->setDictionaryFromArray($GLOBALS['myDictionary']);
    $badwords->setText($text);
    $class::filterText($text); 
    if($badwords->check() || $text != $text1)
     return true; 
    else 
     return false;
  }