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
        
        return 'public/' . $suffix;
    }

}