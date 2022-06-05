<?php

    $content = simplexml_load_string(
        '<content><![CDATA[Hello, world!]]></content>'
    );
    echo (string) $content;

    $foo = simplexml_load_string(
        '<foo><content><![CDATA[Hello, world!]]></content></foo>'
    );
    echo (string) $foo->content;

?>