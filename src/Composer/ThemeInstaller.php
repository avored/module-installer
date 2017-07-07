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
 * Class ThemeInstaller
 *
 */
class ThemeInstaller extends LibraryInstaller
{

    public function getPackageBasePath(PackageInterface $package)
    {
        list($vendor, $package) = explode('/', $package->getPrettyName());

        return 'themes/' . $package;
    }

    public function supports($packageType)
    {
        return 'mage2-theme' === $packageType;
    }
} 