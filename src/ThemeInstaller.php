<?php

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