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

/* @PrestaShop/Admin/Layout/default_layout.html.twig */
class __TwigTemplate_6b1fce217885b3a0e479896bf3395205 extends Template
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
            'core_javascript' => [$this, 'block_core_javascript'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'layout_header' => [$this, 'block_layout_header'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "setupSmarty", [(((array_key_exists("layoutTitle", $context) &&  !(null === $context["layoutTitle"]))) ? ($context["layoutTitle"]) : ("")), ($context["metaTitle"] ?? null), ($context["lightDisplay"] ?? null)], "method", false, false, false, 26), "html", null, true);
        yield "
<!DOCTYPE html>
<html lang=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "isoUser", [], "any", false, false, false, 28), "html", null, true);
        yield "\">
  <head>
    ";
        // line 30
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 40
        yield "  </head>

  <body class=\"lang-";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "isoUser", [], "any", false, false, false, 42), "html", null, true);
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "isRtlLanguage", [], "any", false, false, false, 42)) {
            yield " lang-rtl";
        }
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "controllerName", [], "any", false, false, false, 42))), "html", null, true);
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "menuCollapsed", [], "any", false, false, false, 42)) {
            yield " page-sidebar-closed";
        }
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "multiShop", [], "any", true, true, false, 42)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "multiShop", [], "any", false, false, false, 42), false)) : (false))) {
            yield " multishop-enabled";
        }
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "debugMode", [], "any", true, true, false, 42)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "debugMode", [], "any", false, false, false, 42), false)) : (false))) {
            yield " developer-mode";
        }
        yield " ps-bo-rebrand\"
    ";
        // line 43
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "jsRouterMetadata", [], "any", true, true, false, 43) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "jsRouterMetadata", [], "any", false, true, false, 43), "base_url", [], "any", true, true, false, 43))) {
            yield "data-base-url=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "jsRouterMetadata", [], "any", false, false, false, 43), "base_url", [], "any", false, false, false, 43), "html", null, true);
            yield "\"";
        }
        // line 44
        yield "    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "jsRouterMetadata", [], "any", true, true, false, 44) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "jsRouterMetadata", [], "any", false, true, false, 44), "token", [], "any", true, true, false, 44))) {
            yield "data-token=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "jsRouterMetadata", [], "any", false, false, false, 44), "token", [], "any", false, false, false, 44), "html", null, true);
            yield "\"";
        }
        // line 45
        yield "  >
";
        // line 47
        yield from $this->unwrap()->yieldBlock('layout_header', $context, $blocks);
        // line 138
        yield "
";
        // line 140
        if (($context["showContentHeader"] ?? null)) {
            // line 141
            yield "  ";
            $_v0 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
            $preRendered = $_v0->preRender("Toolbar", Twig\Extension\CoreExtension::toArray(["layoutTitle" => ((            // line 142
array_key_exists("layoutTitle", $context)) ? (Twig\Extension\CoreExtension::default(($context["layoutTitle"] ?? null))) : ("")), "layoutSubTitle" => ((            // line 143
array_key_exists("layoutSubTitle", $context)) ? (Twig\Extension\CoreExtension::default(($context["layoutSubTitle"] ?? null))) : ("")), "helpLink" => ((            // line 144
array_key_exists("help_link", $context)) ? (Twig\Extension\CoreExtension::default(($context["help_link"] ?? null), "")) : ("")), "enableSidebar" => ((            // line 145
array_key_exists("enableSidebar", $context)) ? (Twig\Extension\CoreExtension::default(($context["enableSidebar"] ?? null), false)) : (false)), "layoutHeaderToolbarBtn" => ((            // line 146
array_key_exists("layoutHeaderToolbarBtn", $context)) ? (Twig\Extension\CoreExtension::default(($context["layoutHeaderToolbarBtn"] ?? null), [])) : ([])), "breadcrumbLinks" => ((            // line 147
array_key_exists("breadcrumbLinks", $context)) ? (Twig\Extension\CoreExtension::default(($context["breadcrumbLinks"] ?? null), [])) : ([]))]));
            if (null !== $preRendered) {
                yield $preRendered; 
            } else {
                $preRenderEvent = $_v0->startEmbedComponent("Toolbar", Twig\Extension\CoreExtension::toArray(["layoutTitle" => ((                // line 142
array_key_exists("layoutTitle", $context)) ? (Twig\Extension\CoreExtension::default(($context["layoutTitle"] ?? null))) : ("")), "layoutSubTitle" => ((                // line 143
array_key_exists("layoutSubTitle", $context)) ? (Twig\Extension\CoreExtension::default(($context["layoutSubTitle"] ?? null))) : ("")), "helpLink" => ((                // line 144
array_key_exists("help_link", $context)) ? (Twig\Extension\CoreExtension::default(($context["help_link"] ?? null), "")) : ("")), "enableSidebar" => ((                // line 145
array_key_exists("enableSidebar", $context)) ? (Twig\Extension\CoreExtension::default(($context["enableSidebar"] ?? null), false)) : (false)), "layoutHeaderToolbarBtn" => ((                // line 146
array_key_exists("layoutHeaderToolbarBtn", $context)) ? (Twig\Extension\CoreExtension::default(($context["layoutHeaderToolbarBtn"] ?? null), [])) : ([])), "breadcrumbLinks" => ((                // line 147
array_key_exists("breadcrumbLinks", $context)) ? (Twig\Extension\CoreExtension::default(($context["breadcrumbLinks"] ?? null), [])) : ([]))]), $context, "@PrestaShop/Admin/Layout/default_layout.html.twig", 29266608351);
                $embeddedContext = $preRenderEvent->getVariables();
                $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
                $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
                $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 29266608351);
                $this->loadTemplate("@PrestaShop/Admin/Layout/default_layout.html.twig", "@PrestaShop/Admin/Layout/default_layout.html.twig", 141, "29266608351")->display($embeddedContext, $embeddedBlocks);
                $_v0->finishEmbedComponent();
            }
        }
        // line 152
        yield "
<div id=\"main-div\">
  <div
    class=\"content-div";
        // line 155
        if ((($context["showContentHeader"] ?? null) === false)) {
            yield " -notoolbar";
        }
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "displayedWithTabs", [], "any", false, false, false, 155)) {
            yield " with-tabs";
        }
        yield "\">
    ";
        // line 156
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "installDirExists", [], "any", false, false, false, 156)) {
            // line 157
            yield "      <div class=\"alert alert-warning\">
        ";
            // line 158
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("For security reasons, you must also delete the /install folder.", [], "Admin.Login.Notification"), "html", null, true);
            yield "
      </div>
    ";
        } else {
            // line 161
            yield "      ";
            yield $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayAdminAfterHeader", []);
            yield "

      <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
      <div id=\"content-message-box\"></div>

      ";
            // line 167
            yield "      ";
            yield from $this->unwrap()->yieldBlock('content_header', $context, $blocks);
            // line 168
            yield "      ";
            yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
            // line 169
            yield "      ";
            yield from $this->unwrap()->yieldBlock('content_footer', $context, $blocks);
            // line 170
            yield "      ";
            yield from $this->unwrap()->yieldBlock('sidebar_right', $context, $blocks);
            // line 171
            yield "
      ";
            // line 172
            yield $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayAdminEndContent", []);
            yield "
    ";
        }
        // line 174
        yield "  </div>
</div>

  <div class=\"mobile-layer\"></div>

  ";
        // line 179
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("Footer");
        yield "

  ";
        // line 182
        yield "  ";
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 183
        yield "  ";
        yield from $this->unwrap()->yieldBlock('extra_javascripts', $context, $blocks);
        // line 184
        yield "  ";
        yield from $this->unwrap()->yieldBlock('translate_javascripts', $context, $blocks);
        // line 185
        yield "</body>
</html>
";
        yield from [];
    }

    // line 30
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 31
        yield "      ";
        yield from $this->unwrap()->yieldBlock('core_javascript', $context, $blocks);
        // line 34
        yield "      ";
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("HeadTag", ["metaTitle" => ($context["metaTitle"] ?? null)]);
        yield "
      ";
        // line 35
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 38
        yield "      ";
        yield from $this->unwrap()->yieldBlock('extra_stylesheets', $context, $blocks);
        // line 39
        yield "    ";
        yield from [];
    }

    // line 31
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_core_javascript(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 32
        yield "        ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Layout/core_javascript.html.twig");
        yield "
      ";
        yield from [];
    }

    // line 35
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 36
        yield "        ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Layout/stylesheets.html.twig");
        yield "
      ";
        yield from [];
    }

    // line 38
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_extra_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 47
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 48
        yield "  <header id=\"header\" class=\"d-print-none\">
    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

      ";
        // line 53
        yield "      <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "defaultTabLink", [], "any", false, false, false, 54), "html", null, true);
        yield "\"></a>
      <span id=\"shop_version\">";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "version", [], "any", false, false, false, 55), "html", null, true);
        yield "</span>

      ";
        // line 57
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("QuickAccess");
        yield "

      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            ";
        // line 62
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("SearchForm");
        yield "
            <button class=\"component-search-cancel d-none\">
              ";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        yield "
            </button>
          </div>
          ";
        // line 67
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("MobileQuickAccess");
        yield "
        </div>
        <div class=\"component-search-background d-none\"></div>
      </div>

      ";
        // line 72
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "debugMode", [], "any", true, true, false, 72)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "debugMode", [], "any", false, false, false, 72), false)) : (false))) {
            // line 73
            yield "        <div class=\"component hide-mobile-sm\" id=\"header-debug-mode-container\">
          <a class=\"link shop-state\"
             id=\"debug-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class=&quot;text-left&quot;><strong>";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your shop is in debug mode.", [], "Admin.Navigation.Notification"), "html", null, true);
            yield "</strong></p><p class=&quot;text-left&quot;>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All the PHP errors and messages are displayed. When you no longer need it, [1]turn off[/1] this mode.", ["[1]" => "<strong>", "[/1]" => "</strong>"], "Admin.Navigation.Notification"), "html", null, true);
            yield "</p>\"
             href=\"";
            // line 80
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_performance");
            yield "\"
          >
            <i class=\"material-icons\">bug_report</i>
            <span>";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Debug mode", [], "Admin.Navigation.Header"), "html", null, true);
            yield "</span>
          </a>
        </div>
      ";
        }
        // line 87
        yield "
      ";
        // line 88
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "isMaintenanceEnabled", [], "any", true, true, false, 88)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "isMaintenanceEnabled", [], "any", false, false, false, 88), false)) : (false))) {
            // line 89
            yield "        ";
            $context["maintenanceTitle"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 90
                yield "          <p class=\"text-left text-nowrap\">
            <strong>
              ";
                // line 92
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your store is in maintenance mode.", [], "Admin.Navigation.Notification"), "html", null, true);
                yield "
            </strong>
          </p>
          <p class=\"text-left\">
            ";
                // line 96
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your visitors and customers cannot access your store while in maintenance mode.", [], "Admin.Navigation.Notification"), "html", null, true);
                yield "
          </p>
          <p class=\"text-left\">
            ";
                // line 99
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("To manage the maintenance settings, go to Shop Parameters > Maintenance tab.", [], "Admin.Navigation.Notification"), "html", null, true);
                yield "
          </p>
          ";
                // line 101
                if (((CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "frontOfficeAccessibleForAdmins", [], "any", true, true, false, 101)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "frontOfficeAccessibleForAdmins", [], "any", false, false, false, 101), false)) : (false))) {
                    // line 102
                    yield "            <p class=\"text-left\">
              ";
                    // line 103
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Admins can access the store front office without storing their IP.", [], "Admin.Navigation.Notification"), "html", null, true);
                    yield "
            </p>
          ";
                }
                // line 106
                yield "        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 107
            yield "        <div class=\"component hide-mobile-sm\" id=\"header-maintenance-mode-container\">
          <a class=\"link shop-state\"
             id=\"maintenance-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"";
            // line 113
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["maintenanceTitle"] ?? null), "html");
            yield "\"
             href=\"";
            // line 114
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_maintenance");
            yield "\"
          >
            <i class=\"material-icons\">build</i>
            <span>";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Maintenance mode", [], "Admin.Navigation.Header"), "html", null, true);
            yield "</span>
          </a>
        </div>
      ";
        }
        // line 121
        yield "
      <div class=\"header-right\">
        <div class=\"shop-list\">
          <a class=\"link\" id=\"header_shopname\" href=\"";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "baseUrl", [], "any", false, false, false, 124), "html", null, true);
        yield "\" target= \"_blank\">
            <i class=\"material-icons\">visibility</i>
            <span>";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View my store", [], "Admin.Navigation.Header"), "html", null, true);
        yield "</span>
          </a>
        </div>
        ";
        // line 129
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("NotificationsCenter");
        yield "
        ";
        // line 130
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("EmployeeDropdown");
        yield "
        ";
        // line 131
        yield $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayBackOfficeTop");
        yield "
      </div>
    </nav>
  </header>

  ";
        // line 136
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("NavBar");
        yield "
";
        yield from [];
    }

    // line 167
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 168
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 169
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 170
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar_right(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 182
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 183
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_extra_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 184
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_translate_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Layout/default_layout.html.twig";
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
        return array (  536 => 184,  526 => 183,  516 => 182,  506 => 170,  496 => 169,  486 => 168,  476 => 167,  469 => 136,  461 => 131,  457 => 130,  453 => 129,  447 => 126,  442 => 124,  437 => 121,  430 => 117,  424 => 114,  420 => 113,  412 => 107,  408 => 106,  402 => 103,  399 => 102,  397 => 101,  392 => 99,  386 => 96,  379 => 92,  375 => 90,  372 => 89,  370 => 88,  367 => 87,  360 => 83,  354 => 80,  348 => 79,  340 => 73,  338 => 72,  330 => 67,  324 => 64,  319 => 62,  311 => 57,  306 => 55,  302 => 54,  299 => 53,  293 => 48,  286 => 47,  276 => 38,  268 => 36,  261 => 35,  253 => 32,  246 => 31,  241 => 39,  238 => 38,  236 => 35,  231 => 34,  228 => 31,  221 => 30,  214 => 185,  211 => 184,  208 => 183,  205 => 182,  200 => 179,  193 => 174,  188 => 172,  185 => 171,  182 => 170,  179 => 169,  176 => 168,  173 => 167,  164 => 161,  158 => 158,  155 => 157,  153 => 156,  144 => 155,  139 => 152,  129 => 147,  128 => 146,  127 => 145,  126 => 144,  125 => 143,  124 => 142,  119 => 147,  118 => 146,  117 => 145,  116 => 144,  115 => 143,  114 => 142,  111 => 141,  109 => 140,  106 => 138,  104 => 47,  101 => 45,  94 => 44,  88 => 43,  70 => 42,  66 => 40,  64 => 30,  59 => 28,  54 => 26,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Layout/default_layout.html.twig", "/home/sheridantools/public_html/src/PrestaShopBundle/Resources/views/Admin/Layout/default_layout.html.twig");
    }
}


/* @PrestaShop/Admin/Layout/default_layout.html.twig */
class __TwigTemplate_6b1fce217885b3a0e479896bf3395205___29266608351 extends Template
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

        $this->blocks = [
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'pageTitle' => [$this, 'block_pageTitle'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 141
        return $this->loadTemplate(($context["__parent__"] ?? null), "@PrestaShop/Admin/Layout/default_layout.html.twig", 141);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 149
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pageTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield ((        $this->unwrap()->renderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["outerBlocks"] ?? null), "pageTitle", [], "any", false, false, false, 149), $context, $blocks)) ? (        $this->unwrap()->renderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["outerBlocks"] ?? null), "pageTitle", [], "any", false, false, false, 149), $context, $blocks)) : ($this->renderParentBlock("pageTitle", $context, $blocks)));
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Layout/default_layout.html.twig";
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
        return array (  619 => 149,  600 => 141,  536 => 184,  526 => 183,  516 => 182,  506 => 170,  496 => 169,  486 => 168,  476 => 167,  469 => 136,  461 => 131,  457 => 130,  453 => 129,  447 => 126,  442 => 124,  437 => 121,  430 => 117,  424 => 114,  420 => 113,  412 => 107,  408 => 106,  402 => 103,  399 => 102,  397 => 101,  392 => 99,  386 => 96,  379 => 92,  375 => 90,  372 => 89,  370 => 88,  367 => 87,  360 => 83,  354 => 80,  348 => 79,  340 => 73,  338 => 72,  330 => 67,  324 => 64,  319 => 62,  311 => 57,  306 => 55,  302 => 54,  299 => 53,  293 => 48,  286 => 47,  276 => 38,  268 => 36,  261 => 35,  253 => 32,  246 => 31,  241 => 39,  238 => 38,  236 => 35,  231 => 34,  228 => 31,  221 => 30,  214 => 185,  211 => 184,  208 => 183,  205 => 182,  200 => 179,  193 => 174,  188 => 172,  185 => 171,  182 => 170,  179 => 169,  176 => 168,  173 => 167,  164 => 161,  158 => 158,  155 => 157,  153 => 156,  144 => 155,  139 => 152,  129 => 147,  128 => 146,  127 => 145,  126 => 144,  125 => 143,  124 => 142,  119 => 147,  118 => 146,  117 => 145,  116 => 144,  115 => 143,  114 => 142,  111 => 141,  109 => 140,  106 => 138,  104 => 47,  101 => 45,  94 => 44,  88 => 43,  70 => 42,  66 => 40,  64 => 30,  59 => 28,  54 => 26,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Layout/default_layout.html.twig", "/home/sheridantools/public_html/src/PrestaShopBundle/Resources/views/Admin/Layout/default_layout.html.twig");
    }
}
