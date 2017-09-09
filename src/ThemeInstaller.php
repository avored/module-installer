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

        $names = $package->getNames();
        if(is_array($names)) {
            $names = $names[0];
        }
        $extra = $package->getExtra();
        if (isset($extra['install-dir'])) {
            return $extra['install-dir'];
        } else {
            list($vendor, $package) = explode('/', $names);

            return 'themes/' . $vendor. "/" .$package;
        }
    }

    public function supports($packageType)
    {
        return 'mage2-theme' === $packageType;
    }
} 