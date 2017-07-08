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
class ModuleInstaller extends LibraryInstaller
{

    public function getPackageBasePath(PackageInterface $package)
    {
        $names = $package->getNames();
        if(is_array($names)) {
            $names = $names[0];
        }
        $extra = $package->getExtra();
        if (isset($extra['install-dir'])) {
            return $extra['install-dir'];
        } else {
            list($vendor, $package) = explode('/', $names);

            return 'modules/' . $package;
        }
    }

    public function supports($packageType)
    {
        return 'mage2-module' === $packageType;
    }
} 