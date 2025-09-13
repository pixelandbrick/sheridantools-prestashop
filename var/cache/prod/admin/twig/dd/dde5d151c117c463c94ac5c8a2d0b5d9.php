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

/* @PrestaShop/Admin/Layout/legacy_layout.html.twig */
class __TwigTemplate_bae8bfc6e2a2b09adb62e8190944a15a extends Template
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
            'header' => [$this, 'block_header'],
            'layout_header' => [$this, 'block_layout_header'],
            'content_header' => [$this, 'block_content_header'],
            'session_alert' => [$this, 'block_session_alert'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 25
        yield "<!DOCTYPE html>
<!--[if lt IE 7]> <html class=\"no-js lt-ie9 lt-ie8 lt-ie7 lt-ie6\"> <![endif]-->
<!--[if IE 7]>    <html class=\"no-js lt-ie9 lt-ie8 ie7\"> <![endif]-->
<!--[if IE 8]>    <html class=\"no-js lt-ie9 ie8\"> <![endif]-->
<!--[if gt IE 8]> <html class=\"no-js ie9\"> <![endif]-->
<html lang=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "isoUser", [], "any", false, false, false, 30), "html", null, true);
        yield "\">
<head>
  ";
        // line 32
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 35
        yield "</head>

<body class=\"lang-";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "isoUser", [], "any", false, false, false, 37), "html", null, true);
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "isRtlLanguage", [], "any", false, false, false, 37)) {
            yield " lang-rtl";
        }
        yield " ps_back-office page-sidebar ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "controllerName", [], "any", false, false, false, 37))), "html", null, true);
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "menuCollapsed", [], "any", false, false, false, 37)) {
            yield " page-sidebar-closed";
        }
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "multiShop", [], "any", true, true, false, 37)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "multiShop", [], "any", false, false, false, 37), false)) : (false))) {
            yield " multishop-enabled";
        }
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "debugMode", [], "any", true, true, false, 37)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "debugMode", [], "any", false, false, false, 37), false)) : (false))) {
            yield " developer-mode";
        }
        yield " ps-bo-rebrand\"
  ";
        // line 38
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "jsRouterMetadata", [], "any", true, true, false, 38) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "jsRouterMetadata", [], "any", false, true, false, 38), "base_url", [], "any", true, true, false, 38))) {
            yield "data-base-url=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "jsRouterMetadata", [], "any", false, false, false, 38), "base_url", [], "any", false, false, false, 38), "html", null, true);
            yield "\"";
        }
        // line 39
        yield "  ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "jsRouterMetadata", [], "any", true, true, false, 39) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "jsRouterMetadata", [], "any", false, true, false, 39), "token", [], "any", true, true, false, 39))) {
            yield "data-token=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "jsRouterMetadata", [], "any", false, false, false, 39), "token", [], "any", false, false, false, 39), "html", null, true);
            yield "\"";
        }
        // line 40
        yield ">

";
        // line 43
        yield from $this->unwrap()->yieldBlock('layout_header', $context, $blocks);
        // line 120
        yield "
  <div id=\"main\">
    <div id=\"content\" class=\"bootstrap";
        // line 122
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "displayedWithTabs", [], "any", false, false, false, 122)) {
            yield " with-tabs";
        }
        yield "\">
      ";
        // line 124
        yield "      ";
        if (($context["showContentHeader"] ?? null)) {
            // line 125
            yield "        ";
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("LegacyToolbar", ["layoutTitle" => ((            // line 126
array_key_exists("layoutTitle", $context)) ? (Twig\Extension\CoreExtension::default(($context["layoutTitle"] ?? null))) : ("")), "layoutSubTitle" => ((            // line 127
array_key_exists("layoutSubTitle", $context)) ? (Twig\Extension\CoreExtension::default(($context["layoutSubTitle"] ?? null))) : ("")), "helpLink" => ((            // line 128
array_key_exists("help_link", $context)) ? (Twig\Extension\CoreExtension::default(($context["help_link"] ?? null))) : ("")), "enableSidebar" => ((            // line 129
array_key_exists("enableSidebar", $context)) ? (Twig\Extension\CoreExtension::default(($context["enableSidebar"] ?? null), false)) : (false)), "layoutHeaderToolbarBtn" => ((            // line 130
array_key_exists("layoutHeaderToolbarBtn", $context)) ? (Twig\Extension\CoreExtension::default(($context["layoutHeaderToolbarBtn"] ?? null), [])) : ([])), "breadcrumbLinks" => ((            // line 131
array_key_exists("breadcrumbLinks", $context)) ? (Twig\Extension\CoreExtension::default(($context["breadcrumbLinks"] ?? null), [])) : ([]))]);
            // line 132
            yield "
      ";
        }
        // line 134
        yield "
      ";
        // line 135
        yield from $this->unwrap()->yieldBlock('content_header', $context, $blocks);
        // line 140
        yield "
      ";
        // line 141
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 144
        yield "    </div>
  </div>

  <div id=\"footer\" class=\"bootstrap\">
    <div class=\"col-sm-12\">
      ";
        // line 149
        yield $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayBackOfficeFooter", []);
        yield "
    </div>
  </div>

  ";
        // line 153
        if ((array_key_exists("modals", $context) &&  !Twig\Extension\CoreExtension::testEmpty(($context["modals"] ?? null)))) {
            // line 154
            yield "    <div class=\"bootstrap\">
      ";
            // line 155
            yield ($context["modals"] ?? null);
            yield "
    </div>
  ";
        }
        // line 158
        yield "</body>
</html>
";
        yield from [];
    }

    // line 32
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 33
        yield "    ";
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("LegacyHeadTag", ["metaTitle" => ((array_key_exists("metaTitle", $context)) ? (Twig\Extension\CoreExtension::default(($context["metaTitle"] ?? null))) : (""))]);
        yield "
  ";
        yield from [];
    }

    // line 43
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 44
        yield "  <header id=\"header\" class=\"bootstrap\">
    <nav id=\"header_infos\" role=\"navigation\">
      <i class=\"material-icons js-mobile-menu\">menu</i>

      ";
        // line 49
        yield "      <a id=\"header_logo\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "defaultTabLink", [], "any", false, false, false, 49), "html", null, true);
        yield "\" aria-label=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("PrestaShop logo", [], "Admin.Navigation.Header"), "html", null, true);
        yield "\"></a>
      <span id=\"shop_version\">";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "version", [], "any", false, false, false, 50), "html", null, true);
        yield "</span>

      ";
        // line 52
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("LegacyQuickAccess");
        yield "
      ";
        // line 53
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("LegacySearchForm");
        yield "

      ";
        // line 55
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "debugMode", [], "any", true, true, false, 55)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "debugMode", [], "any", false, false, false, 55), false)) : (false))) {
            // line 56
            yield "        <div class=\"component hide-mobile-sm\">
          <a class=\"shop-state label-tooltip\"
             id=\"debug-mode\"
             data-toggle=\"tooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class=&quot;text-left&quot;><strong>";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your shop is in debug mode.", [], "Admin.Navigation.Notification"), "html", null, true);
            yield "</strong></p><p class=&quot;text-left&quot;>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All the PHP errors and messages are displayed. When you no longer need it, [1]turn off[/1] this mode.", ["[1]" => "<strong>", "[/1]" => "</strong>"], "Admin.Navigation.Notification"), "html", null, true);
            yield "</p>\"
             href=\"";
            // line 63
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_performance");
            yield "\"
          >
            <i class=\"material-icons\">bug_report</i>
            <span>";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Debug mode", [], "Admin.Navigation.Header"), "html", null, true);
            yield "</span>
          </a>
        </div>
      ";
        }
        // line 70
        yield "      ";
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "isMaintenanceEnabled", [], "any", true, true, false, 70)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "isMaintenanceEnabled", [], "any", false, false, false, 70), false)) : (false))) {
            // line 71
            yield "        ";
            $context["maintenanceTitle"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 72
                yield "          <p class=\"text-left\">
            <strong>
              ";
                // line 74
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your store is in maintenance mode.", [], "Admin.Navigation.Notification"), "html", null, true);
                yield "
            </strong>
          </p>
          <p class=\"text-left\">
            ";
                // line 78
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your visitors and customers cannot access your store while in maintenance mode.", [], "Admin.Navigation.Notification"), "html", null, true);
                yield "
          </p>
          <p class=\"text-left\">
            ";
                // line 81
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("To manage the maintenance settings, go to Shop Parameters > Maintenance tab.", [], "Admin.Navigation.Notification"), "html", null, true);
                yield "
          </p>
          ";
                // line 83
                if (((CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "frontOfficeAccessibleForAdmins", [], "any", true, true, false, 83)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "frontOfficeAccessibleForAdmins", [], "any", false, false, false, 83), false)) : (false))) {
                    // line 84
                    yield "            <p class=\"text-left\">
              ";
                    // line 85
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Admins can access the store front office without storing their IP.", [], "Admin.Navigation.Notification"), "html", null, true);
                    yield "
            </p>
          ";
                }
                // line 88
                yield "        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 89
            yield "        <div class=\"component hide-mobile-sm\">
          <a class=\"shop-state label-tooltip\"
             id=\"maintenance-mode\"
             data-toggle=\"tooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["maintenanceTitle"] ?? null), "html");
            yield "\"
             href=\"";
            // line 96
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_maintenance");
            yield "\"
          >
            <i class=\"material-icons\">build</i>
            <span>";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Maintenance mode", [], "Admin.Navigation.Header"), "html", null, true);
            yield "</span>
          </a>
        </div>
      ";
        }
        // line 103
        yield "
      ";
        // line 104
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("LegacyShopList");
        yield "

      ";
        // line 106
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("LegacyNotificationsCenter");
        yield "
      ";
        // line 107
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("LegacyEmployeeDropdown");
        yield "

      ";
        // line 110
        yield "      <span id=\"ajax_running\" class=\"hidden-xs\">
        <i class=\"icon-refresh icon-spin icon-fw\"></i>
      </span>

      ";
        // line 114
        yield $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayBackOfficeTop");
        yield "
    </nav>
  </header>

  ";
        // line 118
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("LegacyNavBar");
        yield "
";
        yield from [];
    }

    // line 135
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 136
        yield "        ";
        yield from $this->unwrap()->yieldBlock('session_alert', $context, $blocks);
        // line 139
        yield "      ";
        yield from [];
    }

    // line 136
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_session_alert(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 137
        yield "          ";
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("LegacySessionAlert");
        yield "
        ";
        yield from [];
    }

    // line 141
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 142
        yield "        ";
        yield ($context["legacyContent"] ?? null);
        yield "
      ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Layout/legacy_layout.html.twig";
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
        return array (  390 => 142,  383 => 141,  375 => 137,  368 => 136,  363 => 139,  360 => 136,  353 => 135,  346 => 118,  339 => 114,  333 => 110,  328 => 107,  324 => 106,  319 => 104,  316 => 103,  309 => 99,  303 => 96,  299 => 95,  291 => 89,  287 => 88,  281 => 85,  278 => 84,  276 => 83,  271 => 81,  265 => 78,  258 => 74,  254 => 72,  251 => 71,  248 => 70,  241 => 66,  235 => 63,  229 => 62,  221 => 56,  219 => 55,  214 => 53,  210 => 52,  205 => 50,  198 => 49,  192 => 44,  185 => 43,  177 => 33,  170 => 32,  163 => 158,  157 => 155,  154 => 154,  152 => 153,  145 => 149,  138 => 144,  136 => 141,  133 => 140,  131 => 135,  128 => 134,  124 => 132,  122 => 131,  121 => 130,  120 => 129,  119 => 128,  118 => 127,  117 => 126,  115 => 125,  112 => 124,  106 => 122,  102 => 120,  100 => 43,  96 => 40,  89 => 39,  83 => 38,  65 => 37,  61 => 35,  59 => 32,  54 => 30,  47 => 25,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Layout/legacy_layout.html.twig", "/home/sheridantools/public_html/src/PrestaShopBundle/Resources/views/Admin/Layout/legacy_layout.html.twig");
    }
}
