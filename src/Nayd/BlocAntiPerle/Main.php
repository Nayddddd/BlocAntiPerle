<?php

namespace Nayd\BlocAntiPerle;

use pocketmine\plugin\PluginBase;

class Main extends PluginBase {

    private static ?Main $instance = null;

    public function onEnable(): void {
        self::$instance = $this;
        $this->saveDefaultConfig();
        $this->getServer()->getPluginManager()->registerEvents(new BlocAntiPerle($this), $this);
    }

    public static function getInstance(): ?Main {
        return self::$instance;
    }
}
