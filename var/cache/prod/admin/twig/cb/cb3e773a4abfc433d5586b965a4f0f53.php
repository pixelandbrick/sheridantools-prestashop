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

/* @PrestaShop/Admin/Component/Layout/search_form.html.twig */
class __TwigTemplate_d275f9adbf81631bd5440c408fdf6891 extends Template
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
        yield "<form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"";
        // line 28
        yield $this->extensions['PrestaShopBundle\Twig\Extension\PathExtension']->getLegacyPath("AdminSearch");
        yield "\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
  ";
        // line 31
        if ((array_key_exists("showClearBtn", $context) && ($context["showClearBtn"] ?? null))) {
            // line 32
            yield "    <a href=\"#\" class=\"clear_search hide\"><i class=\"icon-remove\"></i></a>
  ";
        }
        // line 34
        yield "  <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["boQuery"] ?? null), "html", null, true);
        yield "\" placeholder=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search (e.g.: product reference, customer name…)", [], "Admin.Navigation.Header"), "html", null, true);
        yield "\" aria-label=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Searchbar", [], "Admin.Navigation.Header"), "html", null, true);
        yield "\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        ";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Everywhere", [], "Admin.Navigation.Header"), "html", null, true);
        yield "
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Everywhere", [], "Admin.Navigation.Header"), "html", null, true);
        yield "\" href=\"#\" data-value=\"0\" data-placeholder=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("What are you looking for?", [], "Admin.Navigation.Header"), "html", null, true);
        yield "\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Everywhere", [], "Admin.Navigation.Header"), "html", null, true);
        yield "</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Catalog", [], "Admin.Global"), "html", null, true);
        yield "\" href=\"#\" data-value=\"1\" data-placeholder=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Product name, reference, etc.", [], "Admin.Navigation.Header"), "html", null, true);
        yield "\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Catalog", [], "Admin.Global"), "html", null, true);
        yield "</a>
        <a class=\"dropdown-item\" data-item=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customers", [], "Admin.Navigation.Header"), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("by name"), "html", null, true);
        yield "\" href=\"#\" data-value=\"2\" data-placeholder=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name", [], "Admin.Navigation.Header"), "html", null, true);
        yield "\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customers", [], "Admin.Navigation.Header"), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("by name", [], "Admin.Navigation.Header"), "html", null, true);
        yield " </a>
        <a class=\"dropdown-item\" data-item=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customers", [], "Admin.Navigation.Header"), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("by ip address"), "html", null, true);
        yield "\" href=\"#\" data-value=\"6\" data-placeholder=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("123.45.67.89", [], "Admin.Navigation.Header"), "html", null, true);
        yield "\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customers", [], "Admin.Navigation.Header"), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("by IP address", [], "Admin.Navigation.Header"), "html", null, true);
        yield "</a>
        <a class=\"dropdown-item\" data-item=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Orders", [], "Admin.Global"), "html", null, true);
        yield "\" href=\"#\" data-value=\"3\" data-placeholder=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order ID", [], "Admin.Navigation.Header"), "html", null, true);
        yield "\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Orders", [], "Admin.Global"), "html", null, true);
        yield "</a>
        <a class=\"dropdown-item\" data-item=\"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Invoices", [], "Admin.Global"), "html", null, true);
        yield "\" href=\"#\" data-value=\"4\" data-placeholder=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Invoice number", [], "Admin.Navigation.Header"), "html", null, true);
        yield "\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Invoices", [], "Admin.Global"), "html", null, true);
        yield "</a>
        <a class=\"dropdown-item\" data-item=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Carts", [], "Admin.Global"), "html", null, true);
        yield "\" href=\"#\" data-value=\"5\" data-placeholder=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cart ID", [], "Admin.Navigation.Header"), "html", null, true);
        yield "\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Carts", [], "Admin.Global"), "html", null, true);
        yield "</a>
        <a class=\"dropdown-item\" data-item=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Modules", [], "Admin.Global"), "html", null, true);
        yield "\" href=\"#\" data-value=\"7\" data-placeholder=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Module name", [], "Admin.Navigation.Header"), "html", null, true);
        yield "\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Modules", [], "Admin.Global"), "html", null, true);
        yield "</a>
      </div>
      <button class=\"btn btn-secondary\" type=\"submit\"><span class=\"d-none\">";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("SEARCH", [], "Admin.Navigation.Header"), "html", null, true);
        yield "</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
  \$(function(){
    ";
        // line 58
        if ((array_key_exists("searchType", $context) && ($context["searchType"] ?? null))) {
            // line 59
            yield "      \$('.search-option a[data-value=' + ";
            yield ((($context["searchType"] ?? null)) ? (1) : (0));
            yield " + ']').click();
    ";
        }
        // line 61
        yield "      \$('#bo_query').one('click', function() {
        \$(this).closest('form').removeClass('collapsed');
      });
    });
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Component/Layout/search_form.html.twig";
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
        return array (  170 => 61,  164 => 59,  162 => 58,  152 => 51,  143 => 49,  135 => 48,  127 => 47,  119 => 46,  107 => 45,  95 => 44,  87 => 43,  78 => 41,  72 => 38,  62 => 35,  59 => 34,  55 => 32,  53 => 31,  47 => 28,  42 => 25,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Component/Layout/search_form.html.twig", "/home/sheridantools/public_html/src/PrestaShopBundle/Resources/views/Admin/Component/Layout/search_form.html.twig");
    }
}
