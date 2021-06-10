<?php

class Routing
{

    const CURRENT_DIR = __DIR__;

    static function getPathByParent(string $path, int $level = 1,): string
    {
        return dirname(self::CURRENT_DIR, $level) . '/' . $path;
    }
}
