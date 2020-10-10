<?php
require_once('wordphp.php');
$rt = new WordPHP(false);
$text = $rt->readDocument('sample.docx');
echo $text;
?>