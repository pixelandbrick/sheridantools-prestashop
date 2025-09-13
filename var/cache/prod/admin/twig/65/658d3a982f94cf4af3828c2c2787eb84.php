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

/* @PrestaShop/Admin/Component/Layout/quick_access.html.twig */
class __TwigTemplate_a0d81a70de7a8a5e8e1c3850446cb794 extends Template
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
        yield "<div class=\"component\" id=\"quick-access-container\">
  <div class=\"dropdown quick-accesses\">
    <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
      ";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Quick Access", [], "Admin.Navigation.Header"), "html", null, true);
        yield "
    </button>
    <div class=\"dropdown-menu\">
      ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "quickAccesses", [], "any", false, false, false, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["quickAccess"]) {
            // line 32
            yield "        <a class=\"dropdown-item quick-row-link
          ";
            // line 33
            if (CoreExtension::getAttribute($this->env, $this->source, $context["quickAccess"], "class", [], "any", true, true, false, 33)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["quickAccess"], "class", [], "any", false, false, false, 33), "html", null, true);
            }
            // line 34
            yield "          ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["quickAccess"], "active", [], "any", false, false, false, 34)) {
                yield "active";
            }
            yield "\"
        href=\"";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["quickAccess"], "link", [], "any", false, false, false, 35), "html", null, true);
            yield "\"
        ";
            // line 36
            if (CoreExtension::getAttribute($this->env, $this->source, $context["quickAccess"], "new_window", [], "any", false, false, false, 36)) {
                yield " target=\"_blank\"";
            }
            // line 37
            yield "        data-item=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["quickAccess"], "name", [], "any", false, false, false, 37), "html", null, true);
            yield "\"
        >";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["quickAccess"], "name", [], "any", false, false, false, 38), "html", null, true);
            yield "</a>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['quickAccess'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        yield "      <div class=\"dropdown-divider\"></div>
      ";
        // line 41
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "activeQuickAccess", [], "any", false, false, false, 41)) {
            // line 42
            yield "        <a id=\"quick-remove-link\"
           class=\"dropdown-item js-quick-link\"
           href=\"#\"
           data-method=\"remove\"
           data-quicklink-id=\"";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "activeQuickAccess", [], "any", false, false, false, 46), "id_quick_access", [], "any", false, false, false, 46), "html", null, true);
            yield "\"
           data-rand=\"";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset(), 1, 200), "html", null, true);
            yield "\"
           data-icon=\"";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "currentPageIcon", [], "any", false, false, false, 48), "html", null, true);
            yield "\"
           data-url=\"";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "activeQuickAccess", [], "any", false, false, false, 49), "link", [], "any", false, false, false, 49), "html", null, true);
            yield "\"
           data-post-link=\"";
            // line 50
            yield $this->extensions['PrestaShopBundle\Twig\Extension\PathExtension']->getLegacyPath("AdminQuickAccesses");
            yield "\"
           data-prompt-text=\"";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please name this shortcut:", [], "Admin.Navigation.Header"), "html", null, true);
            yield "\"
           data-link=\"";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "activeQuickAccess", [], "any", false, false, false, 52), "name", [], "any", false, false, false, 52), "html", null, true);
            yield "\"
        >
          <i class=\"material-icons\">remove_circle_outline</i>
          ";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Remove from Quick Access", [], "Admin.Navigation.Header"), "html", null, true);
            yield "
        </a>
      ";
        } else {
            // line 58
            yield "        <a id=\"quick-add-link\"
           class=\"dropdown-item js-quick-link\"
           href=\"#\"
           data-rand=\"";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset(), 1, 200), "html", null, true);
            yield "\"
           data-method=\"add\"
           data-icon=\"";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "currentPageIcon", [], "any", false, false, false, 63), "html", null, true);
            yield "\"
           data-url=\"";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "currentPageQuickAccessLink", [], "any", false, false, false, 64), "html", null, true);
            yield "\"
           data-post-link=\"";
            // line 65
            yield $this->extensions['PrestaShopBundle\Twig\Extension\PathExtension']->getLegacyPath("AdminQuickAccesses");
            yield "\"
           data-prompt-text=\"";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please name this shortcut:", [], "Admin.Navigation.Header"), "html", null, true);
            yield "\"
           data-link=\"";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "currentPageTitle", [], "any", false, false, false, 67), "html", null, true);
            yield "\"
        >
          <i class=\"material-icons\">add_circle</i>
          ";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add current page to Quick Access", [], "Admin.Actions"), "html", null, true);
            yield "
        </a>
      ";
        }
        // line 73
        yield "      <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"";
        yield $this->extensions['PrestaShopBundle\Twig\Extension\PathExtension']->getLegacyPath("AdminQuickAccesses");
        yield "\">
      <i class=\"material-icons\">settings</i>
      ";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Manage your quick accesses", [], "Admin.Navigation.Header"), "html", null, true);
        yield "
      </a>
    </div>
  </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Component/Layout/quick_access.html.twig";
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
        return array (  183 => 75,  177 => 73,  171 => 70,  165 => 67,  161 => 66,  157 => 65,  153 => 64,  149 => 63,  144 => 61,  139 => 58,  133 => 55,  127 => 52,  123 => 51,  119 => 50,  115 => 49,  111 => 48,  107 => 47,  103 => 46,  97 => 42,  95 => 41,  92 => 40,  84 => 38,  79 => 37,  75 => 36,  71 => 35,  64 => 34,  60 => 33,  57 => 32,  53 => 31,  47 => 28,  42 => 25,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Component/Layout/quick_access.html.twig", "/home/sheridantools/public_html/src/PrestaShopBundle/Resources/views/Admin/Component/Layout/quick_access.html.twig");
    }
}
