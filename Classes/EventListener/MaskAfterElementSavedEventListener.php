<?php

namespace Friendsoftypo3\HeadlessMask\EventListener;

use MASK\Mask\Event\MaskAfterElementSavedEvent;
use Symfony\Component\Process\Process;
use TYPO3\CMS\Core\Core\Environment;

class MaskAfterElementSavedEventListener
{
    public function __invoke(MaskAfterElementSavedEvent $event): void
    {
        // List of commands to execute
        $commands = [
            ['vendor/bin/typo3', 'cache:flush'],
            ['vendor/bin/typo3', 'headlessmask:generate'],
            ['vendor/bin/typo3', 'cache:warmup'],
        ];
        foreach ($commands as $command) {
            $process = new Process($command);
            $process->setWorkingDirectory(Environment::getProjectPath());
            $process->run();
        }
    }
}
