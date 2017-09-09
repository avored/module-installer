<?php

namespace Mage2\Composer;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

/**
 * Class Mage2 E commerce Module installer
 *
 * @author Purvesh Patel <ind.purvesh@gmail.com>
 */
class Mage2Module implements PluginInterface
{
    public function activate(Composer $composer, IOInterface $io)
    {
        $mage2Installer = new Mage2Installer($io, $composer);
        $composer->getInstallationManager()->addInstaller($mage2Installer);

    }

} 
