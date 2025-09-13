<?php

namespace ContainerUWseNmm;

class EnvLayerGhost688e847 extends \PrestaShop\PrestaShop\Core\FeatureFlag\Layer\EnvLayer implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;
    private const LAZY_OBJECT_PROPERTY_SCOPES = [];
}
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('EnvLayerGhost688e847', false)) {
    \class_alias(__NAMESPACE__.'\\EnvLayerGhost688e847', 'EnvLayerGhost688e847', false);
}
