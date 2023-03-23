<?php

namespace Activepublishing\ExportBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

/**
 * This is the class that loads and manages your bundle configuration.
 *
 * @link http://symfony.com/doc/current/cookbook/bundles/extension.html
 */
class ExportExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        // create a YamlFileLoader - this could also be a XmlFileLoader if you want to load XML 
        $loader = new YamlFileLoader(
            $container,
            // looks in src/MyBundle/Resources/config
            new FileLocator(__DIR__ . '/../Resources/config')
        );

        // load services.yaml
        $loader->load('services.yml');
        
        // more load() calls as needed...
    }
}
