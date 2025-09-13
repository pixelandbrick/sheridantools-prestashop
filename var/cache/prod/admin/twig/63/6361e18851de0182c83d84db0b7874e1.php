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

/* @PrestaShop/Admin/Component/LegacyLayout/shop_list.html.twig */
class __TwigTemplate_b5df33c521df9a9028eaa9374340b44e extends Template
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
        yield "<ul id=\"header-list\" class=\"header-list\">
  <li class=\"shopname\" data-mobile=\"true\" data-from=\"header-list\" data-target=\"menu\">
    ";
        // line 27
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "shopList", [], "any", false, false, false, 27)) {
            // line 28
            yield "    <ul id=\"header_shop\" class=\"shop-state\">
      <li class=\"dropdown\">
        <span>";
            // line 30
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "shopList", [], "any", false, false, false, 30);
            yield "</span>
      </li>
    </ul>
    ";
        } else {
            // line 34
            yield "    <a id=\"header_shopname\" class=\"shop-state\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "baseUrl", [], "any", false, false, false, 34), "html_attr");
            yield "\" target=\"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View my store", [], "Admin.Navigation.Header"), "html", null, true);
            yield "</span>
    </a>
    ";
        }
        // line 39
        yield "  </li>
</ul>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Component/LegacyLayout/shop_list.html.twig";
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
        return array (  71 => 39,  65 => 36,  59 => 34,  52 => 30,  48 => 28,  46 => 27,  42 => 25,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Component/LegacyLayout/shop_list.html.twig", "/home/sheridantools/public_html/src/PrestaShopBundle/Resources/views/Admin/Component/LegacyLayout/shop_list.html.twig");
    }
}
