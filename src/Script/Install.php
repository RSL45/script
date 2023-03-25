<?php

namespace Miposent\Script;

use Composer\Script\Event;

class Install
{

    public static function pre(Event $event)
    {
        $composer = $event->getComposer();
        var_dump($event->getName());
    }


    public static function post()
    {

    }

    public static function create(Event $event)
    {
        file_put_contents("1.y", "12");
    }
}