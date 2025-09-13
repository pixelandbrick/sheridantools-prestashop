<?php

namespace ContainerUWseNmm;

class ContextBuilderPreparerGhost7d11d8b extends \PrestaShop\PrestaShop\Core\Context\ContextBuilderPreparer implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;
    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'languageContextBuilder' => [parent::class, 'languageContextBuilder', null, 530],
        'languageContextBuilder' => [parent::class, 'languageContextBuilder', null, 530],
    ];
}
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('ContextBuilderPreparerGhost7d11d8b', false)) {
    \class_alias(__NAMESPACE__.'\\ContextBuilderPreparerGhost7d11d8b', 'ContextBuilderPreparerGhost7d11d8b', false);
}
