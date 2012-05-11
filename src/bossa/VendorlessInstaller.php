<?php

namespace bossa;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class VendorlessInstaller extends LibraryInstaller
{
    /**
     * {@inheritDoc}
     */
    public function getInstallPath(PackageInterface $package)
    {
        $suffix = substr(
            $package->getPrettyName(),
            strpos($package->getPrettyName(), '/')
        );
        
        $extra = $package->getExtra();
var_dump($extra);
        return 'data/templates/'.substr($package->getPrettyName(), 23);
    }

}