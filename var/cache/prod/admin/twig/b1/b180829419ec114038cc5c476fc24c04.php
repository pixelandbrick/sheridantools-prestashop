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

/* @PrestaShop/Admin/Component/Layout/mobile_quick_access.html.twig */
class __TwigTemplate_393f15c185f1bdea36a634f4ee039f79 extends Template
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
        yield "<div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Quick Access", [], "Admin.Navigation.Header"), "html", null, true);
        yield "</p>
  ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "quickAccesses", [], "any", false, false, false, 27));
        foreach ($context['_seq'] as $context["_key"] => $context["quickAccess"]) {
            // line 28
            yield "    <a class=\"dropdown-item quick-row-link";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["quickAccess"], "active", [], "any", false, false, false, 28)) {
                yield " active";
            }
            yield "\"
      href=\"";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["quickAccess"], "link", [], "any", false, false, false, 29), "html", null, true);
            yield "\"
      ";
            // line 30
            if (CoreExtension::getAttribute($this->env, $this->source, $context["quickAccess"], "new_window", [], "any", false, false, false, 30)) {
                yield " target=\"_blank\"";
            }
            // line 31
            yield "      data-item=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["quickAccess"], "name", [], "any", false, false, false, 31), "html", null, true);
            yield "\"
      >
      ";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["quickAccess"], "name", [], "any", false, false, false, 33), "html", null, true);
            yield "
  </a>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['quickAccess'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        yield "  <div class=\"dropdown-divider\"></div>
  ";
        // line 37
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "activeQuickAccess", [], "any", false, false, false, 37)) {
            // line 38
            yield "    <a id=\"quick-remove-link\"
       class=\"dropdown-item js-quick-link\"
       href=\"#\"
       data-method=\"remove\"
       data-quicklink-id=\"";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "activeQuickAccess", [], "any", false, false, false, 42), "id_quick_access", [], "any", false, false, false, 42), "html", null, true);
            yield "\"
       data-rand=\"";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset(), 1, 200), "html", null, true);
            yield "\"
       data-url=\"";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "activeQuickAccess", [], "any", false, false, false, 44), "link", [], "any", false, false, false, 44), "html", null, true);
            yield "\"
       data-post-link=\"";
            // line 45
            yield $this->extensions['PrestaShopBundle\Twig\Extension\PathExtension']->getLegacyPath("AdminQuickAccesses");
            yield "\"
       data-prompt-text=\"";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please name this shortcut:", [], "Admin.Navigation.Header"), "html", null, true);
            yield "\"
       data-link=\"";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "activeQuickAccess", [], "any", false, false, false, 47), "name", [], "any", false, false, false, 47), "html", null, true);
            yield "\"
    >
      <i class=\"material-icons\">remove_circle_outline</i>
      ";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Remove from Quick Access", [], "Admin.Navigation.Header"), "html", null, true);
            yield "
    </a>
  ";
        } else {
            // line 53
            yield "    <a id=\"quick-add-link\"
       class=\"dropdown-item js-quick-link\"
       href=\"#\"
       data-rand=\"";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset(), 1, 200), "html", null, true);
            yield "\"
       data-method=\"add\"
       data-icon=\"";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "currentPageIcon", [], "any", false, false, false, 58), "html", null, true);
            yield "\"
       data-url=\"";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "currentPageQuickAccessLink", [], "any", false, false, false, 59), "html", null, true);
            yield "\"
       data-post-link=\"";
            // line 60
            yield $this->extensions['PrestaShopBundle\Twig\Extension\PathExtension']->getLegacyPath("AdminQuickAccesses");
            yield "\"
       data-prompt-text=\"";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please name this shortcut:", [], "Admin.Navigation.Header"), "html", null, true);
            yield "\"
       data-link=\"";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "currentPageTitle", [], "any", false, false, false, 62), "html", null, true);
            yield "\"
    >
      <i class=\"material-icons\">add_circle</i>
      ";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add current page to Quick Access", [], "Admin.Actions"), "html", null, true);
            yield "
    </a>
  ";
        }
        // line 68
        yield "  <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"";
        yield $this->extensions['PrestaShopBundle\Twig\Extension\PathExtension']->getLegacyPath("AdminQuickAccesses");
        yield "\">
  <i class=\"material-icons\">settings</i>
    ";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Manage your quick accesses", [], "Admin.Navigation.Header"), "html", null, true);
        yield "
  </a>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Component/Layout/mobile_quick_access.html.twig";
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
        return array (  170 => 70,  164 => 68,  158 => 65,  152 => 62,  148 => 61,  144 => 60,  140 => 59,  136 => 58,  131 => 56,  126 => 53,  120 => 50,  114 => 47,  110 => 46,  106 => 45,  102 => 44,  98 => 43,  94 => 42,  88 => 38,  86 => 37,  83 => 36,  74 => 33,  68 => 31,  64 => 30,  60 => 29,  53 => 28,  49 => 27,  45 => 26,  42 => 25,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Component/Layout/mobile_quick_access.html.twig", "/home/sheridantools/public_html/src/PrestaShopBundle/Resources/views/Admin/Component/Layout/mobile_quick_access.html.twig");
    }
}
