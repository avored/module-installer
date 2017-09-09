<?php
/*
 * WellCommerce Open-Source E-Commerce Platform
 * 
 * This file is part of the WellCommerce package.
 *
 * (c) Adam Piotrowski <adam@wellcommerce.org>
 * 
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 */
namespace Mage2\Composer;

use Composer\Installer\LibraryInstaller;
use Composer\Package\PackageInterface;

/**
 * Class PluginInstaller
 *
 */
class Mage2Installer extends LibraryInstaller
{
    public $packages = ["mage2-module", "mage2-theme"];

    public function getInstallPath(PackageInterface $package)
    {
        $type = $package->getType();
        $names = $package->getNames();
        if (is_array($names)) {
            $names = $names[0];
        }

        if("mage2-module" == $type) {
            list($vendor, $package) = explode("/", $names);

            return "modules/" . $vendor . "/" . $package;
        }

        if("mage2-theme" == $type) {
            list($vendor, $package) = explode("/", $names);

            return "themes/" . $vendor . "/" . $package;
        }

    }

    public function supports($packageType)
    {
        return in_array($packageType, $this->packages);
    }
} 