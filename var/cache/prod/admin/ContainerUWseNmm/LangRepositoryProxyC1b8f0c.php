<?php

namespace ContainerUWseNmm;

class LangRepositoryProxyC1b8f0c extends \PrestaShopBundle\Entity\Repository\LangRepository implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyProxyTrait;
    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".'*'."\0".'_class' => [parent::class, '_class', null, 8],
        "\0".'*'."\0".'_em' => [parent::class, '_em', null, 8],
        "\0".'*'."\0".'_entityName' => [parent::class, '_entityName', null, 8],
        "\0".parent::class."\0".'matches' => [parent::class, 'matches', null, 16],
        '_class' => [parent::class, '_class', null, 8],
        '_em' => [parent::class, '_em', null, 8],
        '_entityName' => [parent::class, '_entityName', null, 8],
        'matches' => [parent::class, 'matches', null, 16],
    ];
    public function getMapping(): array
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getMapping(...\func_get_args());
        }
        return parent::getMapping(...\func_get_args());
    }
}
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('LangRepositoryProxyC1b8f0c', false)) {
    \class_alias(__NAMESPACE__.'\\LangRepositoryProxyC1b8f0c', 'LangRepositoryProxyC1b8f0c', false);
}
