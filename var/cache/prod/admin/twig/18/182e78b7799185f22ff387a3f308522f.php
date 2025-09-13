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

/* @PrestaShop/Admin/Component/LegacyLayout/search_form.html.twig */
class __TwigTemplate_79eccf91d3d2ec50ae6f4c0c47537f9c extends Template
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
        yield "<form id=\"header_search\" class=\"component bo_search_form\" method=\"post\" action=\"";
        yield $this->extensions['PrestaShopBundle\Twig\Extension\PathExtension']->getLegacyPath("AdminSearch");
        yield "\" role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
  ";
        // line 27
        if ((array_key_exists("showClearBtn", $context) && ($context["showClearBtn"] ?? null))) {
            // line 28
            yield "    <a href=\"#\" class=\"clear_search hide\"><i class=\"icon-remove\"></i></a>
  ";
        }
        // line 30
        yield "  <div class=\"form-group\">
    <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" />
    <div class=\"input-group\">
      <div class=\"input-group-btn\">
        <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
          <i id=\"search_type_icon\" class=\"material-icons\">search</i>
        </button>
        <ul id=\"header_search_options\" class=\"dropdown-menu\">
          <li class=\"search-all search-option active\">
            <a href=\"#\" data-value=\"0\" data-placeholder=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("What are you looking for?", [], "Admin.Navigation.Header"), "html", null, true);
        yield "\">
              <i class=\"material-icons\">search</i> ";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Everywhere", [], "Admin.Navigation.Header"), "html", null, true);
        yield "</a>
          </li>
          <li class=\"divider\"></li>
          <li class=\"search-book search-option\">
            <a href=\"#\" data-value=\"1\" data-placeholder=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Product name, SKU, reference...", [], "Admin.Navigation.Header"), "html", null, true);
        yield "\">
              <i class=\"material-icons\">store_mall_directory</i> ";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Catalog", [], "Admin.Navigation.Menu"), "html", null, true);
        yield "
            </a>
          </li>
          <li class=\"search-customers-name search-option\">
            <a href=\"#\" data-value=\"2\" data-placeholder=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email, name...", [], "Admin.Navigation.Header"), "html", null, true);
        yield "\">
              <i class=\"material-icons\">group</i> ";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customers by name", [], "Admin.Navigation.Header"), "html", null, true);
        yield "
            </a>
          </li>
          <li class=\"search-customers-addresses search-option\">
            <a href=\"#\" data-value=\"6\" data-placeholder=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("123.45.67.89", [], "Admin.Navigation.Header"), "html", null, true);
        yield "\" data-icon=\"icon-desktop\">
              <i class=\"material-icons\">desktop_mac</i> ";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customers by IP address", [], "Admin.Navigation.Header"), "html", null, true);
        yield "</a>
          </li>
          <li class=\"search-orders search-option\">
            <a href=\"#\" data-value=\"3\" data-placeholder=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order ID", [], "Admin.Navigation.Header"), "html", null, true);
        yield "\">
              <i class=\"material-icons\">shopping_basket</i> ";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Orders", [], "Admin.Global"), "html", null, true);
        yield "
            </a>
          </li>
          <li class=\"search-invoices search-option\">
            <a href=\"#\" data-value=\"4\" data-placeholder=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Invoice Number", [], "Admin.Navigation.Header"), "html", null, true);
        yield "\">
              <i class=\"material-icons\">book</i> ";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Invoices", [], "Admin.Navigation.Menu"), "html", null, true);
        yield "
            </a>
          </li>
          <li class=\"search-carts search-option\">
            <a href=\"#\" data-value=\"5\" data-placeholder=\"";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cart ID", [], "Admin.Navigation.Header"), "html", null, true);
        yield "\">
              <i class=\"material-icons\">shopping_cart</i> ";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Carts", [], "Admin.Global"), "html", null, true);
        yield "
            </a>
          </li>
          <li class=\"search-modules search-option\">
            <a href=\"#\" data-value=\"7\" data-placeholder=\"";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Module name", [], "Admin.Navigation.Header"), "html", null, true);
        yield "\">
              <i class=\"material-icons\">extension</i> ";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Modules", [], "Admin.Global"), "html", null, true);
        yield "
            </a>
          </li>
        </ul>
      </div>
      ";
        // line 79
        if ((array_key_exists("showClearBtn", $context) && ($context["showClearBtn"] ?? null))) {
            // line 80
            yield "      <a href=\"#\" class=\"clear_search hide\"><i class=\"material-icons\">clear</i></a>
      ";
        }
        // line 82
        yield "      <input id=\"bo_query\" name=\"bo_query\" type=\"text\" class=\"form-control\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["boQuery"] ?? null), "html", null, true);
        yield "\" placeholder=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search", [], "Admin.Actions"), "html", null, true);
        yield "\" aria-label=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search", [], "Admin.Actions"), "html", null, true);
        yield "\" />
    </div>
  </div>
  <script>
    ";
        // line 86
        if ((array_key_exists("searchType", $context) && ($context["searchType"] ?? null))) {
            // line 87
            yield "    \$(function() {
      \$('.search-option a[data-value=' + ";
            // line 88
            yield ((($context["searchType"] ?? null)) ? (1) : (0));
            yield " + ']').click();
    });
    ";
        }
        // line 91
        yield "  </script>
</form>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Component/LegacyLayout/search_form.html.twig";
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
        return array (  182 => 91,  176 => 88,  173 => 87,  171 => 86,  159 => 82,  155 => 80,  153 => 79,  145 => 74,  141 => 73,  134 => 69,  130 => 68,  123 => 64,  119 => 63,  112 => 59,  108 => 58,  102 => 55,  98 => 54,  91 => 50,  87 => 49,  80 => 45,  76 => 44,  69 => 40,  65 => 39,  54 => 30,  50 => 28,  48 => 27,  42 => 25,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Component/LegacyLayout/search_form.html.twig", "/home/sheridantools/public_html/src/PrestaShopBundle/Resources/views/Admin/Component/LegacyLayout/search_form.html.twig");
    }
}
