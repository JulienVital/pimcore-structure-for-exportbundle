<?php

namespace Activepublishing\ExportBundle;

use  Activepublishing\ExportBundle\Service\Installer;
use Pimcore\Extension\Bundle\AbstractPimcoreBundle;

class ExportBundle extends AbstractPimcoreBundle
{
    const COMPOSER_PACKAGE_NAME  = "activepublishing/exportbundle";
    const BUNDLE_ID              = "ExportBundle";
    const BUNDLE_NAME            = "ExportBundle";
    const BUNDLE_DESCRIPTION     = "ExportBundle";
    const BUNDLE_VERSION         = "1.0.0";
    const BUNDLE_REVISION        = 2;
    const PIMCORE_MIN_VERSION    = "10.0.0";

    public function getJsPaths()
    {
        return [
            '/bundles/export/js/startup.js',

        ];
    }

    public function getCssPaths()
    {
        return [
        ];
    }

    /**
     * @return string
     */
    protected function getComposerPackageName(): string
    {
        return self::COMPOSER_PACKAGE_NAME;
    }

    /**
     * @return string
     */
    public function getNiceName()
    {
        return self::BUNDLE_NAME;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return self::BUNDLE_DESCRIPTION;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return self::BUNDLE_VERSION;
    }

}
