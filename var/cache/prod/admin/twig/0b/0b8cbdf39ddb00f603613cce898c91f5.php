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

/* @PrestaShop/Admin/Component/Layout/employee_dropdown.html.twig */
class __TwigTemplate_e9c5a06a9cc7ba1bc9d34d1f299e9c0d extends Template
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
        yield "<div class=\"component\" id=\"header-employee-container\">
  <div class=\"dropdown employee-dropdown\">
      <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
        <i class=\"material-icons\">account_circle</i>
      </div>
      <div class=\"dropdown-menu dropdown-menu-right\">
        <div class=\"employee-wrapper-avatar\">
          <div class=\"employee-top\">
            <span class=\"employee-avatar\">
              <img class=\"avatar rounded-circle\" src=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "employee", [], "any", false, false, false, 34), "imageUrl", [], "any", false, false, false, 34), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "employee", [], "any", false, false, false, 34), "firstName", [], "any", false, false, false, 34), "html", null, true);
        yield "\" />
            </span>
            <span class=\"employee_profile\">
              ";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Welcome back %name%", ["%name%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "employee", [], "any", false, false, false, 37), "firstName", [], "any", false, false, false, 37)], "Admin.Navigation.Header"), "html", null, true);
        yield "
            </span>
          </div>

          <a class=\"dropdown-item employee-link profile-link\" href=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_employees_edit", ["employeeId" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "employee", [], "any", false, false, false, 41), "id", [], "any", false, false, false, 41)]), "html", null, true);
        yield "\">
            <i class=\"material-icons\">edit</i>
            <span>
              ";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your profile", [], "Admin.Navigation.Header"), "html", null, true);
        yield "
            </span>
          </a>
        </div>

        <p class=\"divider\"></p>

        ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["displayBackOfficeEmployeeMenu"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["menuItem"]) {
            // line 52
            yield "          ";
            $context["menuItemProperties"] = CoreExtension::getAttribute($this->env, $this->source, $context["menuItem"], "getProperties", [], "any", false, false, false, 52);
            // line 53
            yield "          <a class=\"dropdown-item ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["menuItem"], "getClass", [], "any", false, false, false, 53), "html", null, true);
            yield "\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["menuItemProperties"] ?? null), "link", [], "any", false, false, false, 53), "html", null, true);
            yield "\" ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["menuItemProperties"] ?? null), "isExternalLink", [], "any", false, false, false, 53)) {
                yield " target=\"_blank\"";
            }
            yield " rel=\"noopener noreferrer nofollow\">
            ";
            // line 54
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["menuItemProperties"] ?? null), "icon", [], "any", true, true, false, 54)) {
                // line 55
                yield "              <i class=\"material-icons\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["menuItemProperties"] ?? null), "icon", [], "any", false, false, false, 55), "html", null, true);
                yield "</i>
            ";
            }
            // line 57
            yield "            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["menuItem"], "getContent", [], "any", false, false, false, 57), "html", null, true);
            yield "
          </a>
          ";
            // line 59
            if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 59)) {
                // line 60
                yield "            <p class=\"divider\"></p>
          ";
            }
            // line 62
            yield "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['menuItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        yield "
        <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"";
        // line 64
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_logout");
        yield "\">
          <i class=\"material-icons d-lg-none\">power_settings_new</i>
          <span>
            ";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sign out", [], "Admin.Navigation.Header"), "html", null, true);
        yield "
          </span>
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
        return "@PrestaShop/Admin/Component/Layout/employee_dropdown.html.twig";
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
        return array (  158 => 67,  152 => 64,  149 => 63,  135 => 62,  131 => 60,  129 => 59,  123 => 57,  117 => 55,  115 => 54,  104 => 53,  101 => 52,  84 => 51,  74 => 44,  68 => 41,  61 => 37,  53 => 34,  42 => 25,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Component/Layout/employee_dropdown.html.twig", "/home/sheridantools/public_html/src/PrestaShopBundle/Resources/views/Admin/Component/Layout/employee_dropdown.html.twig");
    }
}
