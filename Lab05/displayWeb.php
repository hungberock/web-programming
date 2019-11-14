<?php
    include "main.php";
    $newPage = new Page("Web programming, ", 2019, ", Copyright by HungNinh*");
    $newPage->addContent("content.php");
    echo $newPage->get();
?>
