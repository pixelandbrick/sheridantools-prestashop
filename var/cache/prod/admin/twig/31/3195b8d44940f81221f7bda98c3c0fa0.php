<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @PrestaShop/Admin/Layout/stylesheets.html.twig */
class __TwigTemplate_7271b7b692aaec7d349b32fb14ea5ccb extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 25
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "isRtlLanguage", [], "any", false, false, false, 25)) {
            // line 26
            yield "  <link rel=\"stylesheet\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/theme_rtl.css"), "html", null, true);
            yield "\" media=\"all\">
  <link rel=\"stylesheet\" href=\"";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/rtl.css"), "html", null, true);
            yield "\" media=\"all\">
";
        } else {
            // line 29
            yield "  <link rel=\"stylesheet\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/theme.css"), "html", null, true);
            yield "\" media=\"all\">
";
        }
        // line 31
        yield "<link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("jquery/plugins/fancybox/jquery.fancybox.css", "front_js"), "html", null, true);
        yield "\" media=\"all\">
<link rel=\"stylesheet\" href=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("jquery/plugins/chosen/jquery.chosen.css", "front_js"), "html", null, true);
        yield "\" media=\"all\">
<link rel=\"stylesheet\" href=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/create_product_default_theme.css"), "html", null, true);
        yield "\" media=\"all\">
";
        // line 34
        if (($context["lightDisplay"] ?? null)) {
            // line 35
            yield "  <link rel=\"stylesheet\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/light_theme.css"), "html", null, true);
            yield "\" media=\"all\">
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Layout/stylesheets.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  75 => 35,  73 => 34,  69 => 33,  65 => 32,  60 => 31,  54 => 29,  49 => 27,  44 => 26,  42 => 25,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Layout/stylesheets.html.twig", "/home/sheridantools/public_html/src/PrestaShopBundle/Resources/views/Admin/Layout/stylesheets.html.twig");
    }
}
