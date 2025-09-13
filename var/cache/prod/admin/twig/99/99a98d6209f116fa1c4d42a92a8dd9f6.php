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

/* @PrestaShop/Admin/Component/LegacyLayout/employee_dropdown.html.twig */
class __TwigTemplate_5db398295aa753df952185de04092f32 extends Template
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
        yield "<ul id=\"header_employee_box\" class=\"component\">
  <li id=\"employee_infos\" class=\"dropdown\">
    <a href=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_employees_edit", ["employeeId" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "employee", [], "any", false, false, false, 27), "id", [], "any", false, false, false, 27)]), "html", null, true);
        yield "\"
       class=\"employee_name dropdown-toggle\"
       data-toggle=\"dropdown\"
    >
      <i class=\"material-icons\">account_circle</i>
    </a>
    <ul id=\"employee_links\" class=\"dropdown-menu dropdown-menu-right\">
      <li class=\"employee-wrapper-avatar\" data-mobile=\"true\" data-from=\"employee_links\" data-target=\"menu\">
              <span class=\"employee_avatar\">
                <img class=\"imgm img-thumbnail\" alt=\"\" src=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "employee", [], "any", false, false, false, 36), "imageUrl", [], "any", false, false, false, 36), "html", null, true);
        yield "\" width=\"60\" height=\"60\" />
              </span>
      </li>
      <li class=\"text-left text-nowrap username\" data-mobile=\"true\" data-from=\"employee_links\" data-target=\"menu\">";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Welcome back %name%", ["%name%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "employee", [], "any", false, false, false, 39), "firstName", [], "any", false, false, false, 39)], "Admin.Navigation.Header"), "html", null, true);
        yield "</li>
      <li class=\"employee-wrapper-profile\"><a class=\"admin-link\" href=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_employees_edit", ["employeeId" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "employee", [], "any", false, false, false, 40), "id", [], "any", false, false, false, 40)]), "html", null, true);
        yield "\"><i class=\"material-icons\">edit</i> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your profile", [], "Admin.Navigation.Header"), "html", null, true);
        yield "</a></li>
      <li class=\"divider\"></li>

      ";
        // line 43
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
            // line 44
            yield "        ";
            $context["menuItemProperties"] = CoreExtension::getAttribute($this->env, $this->source, $context["menuItem"], "getProperties", [], "any", false, false, false, 44);
            // line 45
            yield "        <li class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["menuItem"], "getClass", [], "any", false, false, false, 45), "html", null, true);
            yield "\">
          <a class=\"dropdown-item\" href=\"";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["menuItemProperties"] ?? null), "link", [], "any", false, false, false, 46), "html", null, true);
            yield "\" ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["menuItemProperties"] ?? null), "isExternalLink", [], "any", false, false, false, 46)) {
                yield " target=\"_blank\"";
            }
            yield " rel=\"noopener noreferrer nofollow\">
            ";
            // line 47
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["menuItemProperties"] ?? null), "icon", [], "any", true, true, false, 47)) {
                // line 48
                yield "              <i class=\"material-icons\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["menuItemProperties"] ?? null), "icon", [], "any", false, false, false, 48), "html", null, true);
                yield "</i>
            ";
            }
            // line 50
            yield "            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["menuItem"], "getContent", [], "any", false, false, false, 50), "html", null, true);
            yield "
          </a>
        </li>
        ";
            // line 53
            if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 53)) {
                // line 54
                yield "          <p class=\"divider\"></p>
        ";
            }
            // line 56
            yield "      ";
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
        // line 57
        yield "
      <li class=\"signout text-center\" data-mobile=\"true\" data-from=\"employee_links\" data-target=\"menu\" data-after=\"true\"><a id=\"header_logout\" href=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_logout");
        yield "\"><i class=\"material-icons visible-xs\">power_settings_new</i> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sign out", [], "Admin.Navigation.Header"), "html", null, true);
        yield "</a></li>
    </ul>
  </li>
</ul>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Component/LegacyLayout/employee_dropdown.html.twig";
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
        return array (  147 => 58,  144 => 57,  130 => 56,  126 => 54,  124 => 53,  117 => 50,  111 => 48,  109 => 47,  101 => 46,  96 => 45,  93 => 44,  76 => 43,  68 => 40,  64 => 39,  58 => 36,  46 => 27,  42 => 25,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Component/LegacyLayout/employee_dropdown.html.twig", "/home/sheridantools/public_html/src/PrestaShopBundle/Resources/views/Admin/Component/LegacyLayout/employee_dropdown.html.twig");
    }
}
