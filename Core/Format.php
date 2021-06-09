<?php

class Format
{

    static function n2lbrAndEchapHtml(string $message)
    {
        return Format::echapHTML(nl2br($message));
    }

    static function echapHTML(string $sentence)
    {
        return htmlentities($sentence);
    }
}
