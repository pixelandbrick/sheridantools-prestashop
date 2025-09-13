<?php

namespace ContainerUWseNmm;

class ModuleSelfConfiguratorGhostC8ac64c extends \PrestaShop\PrestaShop\Adapter\Module\Configuration\ModuleSelfConfigurator implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;
    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".'*'."\0".'configFile' => [parent::class, 'configFile', null, 8],
        "\0".'*'."\0".'configs' => [parent::class, 'configs', null, 8],
        "\0".'*'."\0".'configuration' => [parent::class, 'configuration', null, 8],
        "\0".'*'."\0".'connection' => [parent::class, 'connection', null, 8],
        "\0".'*'."\0".'defaultConfigFile' => [parent::class, 'defaultConfigFile', null, 8],
        "\0".'*'."\0".'filesystem' => [parent::class, 'filesystem', null, 8],
        "\0".'*'."\0".'module' => [parent::class, 'module', null, 8],
        "\0".'*'."\0".'moduleRepository' => [parent::class, 'moduleRepository', null, 8],
        'configFile' => [parent::class, 'configFile', null, 8],
        'configs' => [parent::class, 'configs', null, 8],
        'configuration' => [parent::class, 'configuration', null, 8],
        'connection' => [parent::class, 'connection', null, 8],
        'defaultConfigFile' => [parent::class, 'defaultConfigFile', null, 8],
        'filesystem' => [parent::class, 'filesystem', null, 8],
        'module' => [parent::class, 'module', null, 8],
        'moduleRepository' => [parent::class, 'moduleRepository', null, 8],
    ];
}
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('ModuleSelfConfiguratorGhostC8ac64c', false)) {
    \class_alias(__NAMESPACE__.'\\ModuleSelfConfiguratorGhostC8ac64c', 'ModuleSelfConfiguratorGhostC8ac64c', false);
}
