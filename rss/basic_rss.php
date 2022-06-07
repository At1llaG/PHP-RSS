<?php

    $foo = simplexml_load_string(
        "<content><![CDATA[Hello world!]]></content>"
    );
    echo (string) $foo;

    $bar = simplexml_load_string(
        "<foo><content><![CDATA[Hello world!]]></content></foo>"
    );
    echo (string) $bar->content;

?>