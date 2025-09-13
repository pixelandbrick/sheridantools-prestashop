<?php

namespace ContainerUWseNmm;

class DbLayerGhostC9a0ed3 extends \PrestaShop\PrestaShop\Core\FeatureFlag\Layer\DbLayer implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;
    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".'*'."\0".'featureFlagRepository' => [parent::class, 'featureFlagRepository', parent::class, 522],
        'featureFlagRepository' => [parent::class, 'featureFlagRepository', parent::class, 522],
    ];
}
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('DbLayerGhostC9a0ed3', false)) {
    \class_alias(__NAMESPACE__.'\\DbLayerGhostC9a0ed3', 'DbLayerGhostC9a0ed3', false);
}
