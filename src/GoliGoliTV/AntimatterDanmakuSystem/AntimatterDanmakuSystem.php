<?php

namespace GoliGoliTV\AntimatterDanmakuSystem;


use iTXTech\SimpleFramework\Module\Module;
use iTXTech\SimpleFramework\Util\Config;

class AntimatterDanmakuSystem extends Module
{
    private $config;

    public function load()
    {
        @mkdir($this->getDataFolder());
        $this->config = new Config($this->getDataFolder() . "config.json", Config::JSON, [

        ]);
    }

    public function unload()
    {
        // TODO: Implement unload() method.
    }
}