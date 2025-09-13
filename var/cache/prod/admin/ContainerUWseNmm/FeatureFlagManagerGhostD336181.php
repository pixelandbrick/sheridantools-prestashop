<?php

namespace ContainerUWseNmm;

class FeatureFlagManagerGhostD336181 extends \PrestaShop\PrestaShop\Core\FeatureFlag\FeatureFlagManager implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;
    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'featureFlagRepository' => [parent::class, 'featureFlagRepository', null, 530],
        "\0".parent::class."\0".'featureFlagStates' => [parent::class, 'featureFlagStates', null, 16],
        "\0".parent::class."\0".'locator' => [parent::class, 'locator', null, 530],
        'featureFlagRepository' => [parent::class, 'featureFlagRepository', null, 530],
        'featureFlagStates' => [parent::class, 'featureFlagStates', null, 16],
        'locator' => [parent::class, 'locator', null, 530],
    ];
}
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('FeatureFlagManagerGhostD336181', false)) {
    \class_alias(__NAMESPACE__.'\\FeatureFlagManagerGhostD336181', 'FeatureFlagManagerGhostD336181', false);
}
