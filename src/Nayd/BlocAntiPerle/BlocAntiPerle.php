<?php

namespace Nayd\BlocAntiPerle;

use pocketmine\entity\projectile\EnderPearl;
use pocketmine\event\entity\ProjectileHitBlockEvent;
use pocketmine\event\entity\ProjectileLaunchEvent;
use pocketmine\event\Listener;
use pocketmine\player\Player;
use pocketmine\scheduler\ClosureTask;

class BlocAntiPerle implements Listener {

    private array $lastPerlePos = [];
    private Main $plugin;

    public function __construct(Main $plugin) {
        $this->plugin = $plugin;
    }

    public function onProjectileLaunch(ProjectileLaunchEvent $event): void {
        $player = $event->getEntity()->getOwningEntity();
        $projectile = $event->getEntity();

        if ($player instanceof Player && $projectile instanceof EnderPearl) {
            $this->lastPerlePos[$player->getName()] = $player->getPosition();
        }
    }

    public function onProjectileHitBlock(ProjectileHitBlockEvent $event): void {
        $player = $event->getEntity()->getOwningEntity();
        $block = $event->getBlockHit();
        $projectile = $event->getEntity();

        if ($player instanceof Player && $projectile instanceof EnderPearl) {
            $antiPerleBlocks = $this->plugin->getConfig()->get("anti_perle_blocks", []);
            $antiPerleMessage = $this->plugin->getConfig()->get("anti_perle_message");

            if (in_array($block->getName(), $antiPerleBlocks)) {
                Main::getInstance()->getScheduler()->scheduleDelayedTask(new ClosureTask(function () use ($player): void {
                    if (isset($this->lastPerlePos[$player->getName()])) {
                        $player->teleport($this->lastPerlePos[$player->getName()]);
                    }
                }), 1);

                $player->sendMessage($antiPerleMessage);
            }
        }
    }
}
