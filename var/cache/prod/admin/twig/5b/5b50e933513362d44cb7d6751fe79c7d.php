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

/* @PrestaShop/Admin/Component/LegacyLayout/toolbar.html.twig */
class __TwigTemplate_baa145fca9c6aa5857a35da14eeaf2aa extends Template
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
            'pageBreadcrumb' => [$this, 'block_pageBreadcrumb'],
            'pageTitle' => [$this, 'block_pageTitle'],
            'toolbarBox' => [$this, 'block_toolbarBox'],
            'pageSubTitle' => [$this, 'block_pageSubTitle'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 25
        yield "<div class=\"bootstrap\">
  <div class=\"page-head ";
        // line 26
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "currentTabLevel", [], "any", false, false, false, 26) >= 3)) {
            yield "with-tabs";
        }
        yield "\">
    <div class=\"wrapper clearfix\">
      ";
        // line 28
        yield from $this->unwrap()->yieldBlock('pageBreadcrumb', $context, $blocks);
        // line 49
        yield "
      ";
        // line 50
        yield from $this->unwrap()->yieldBlock('pageTitle', $context, $blocks);
        // line 63
        yield "
      ";
        // line 64
        yield from $this->unwrap()->yieldBlock('toolbarBox', $context, $blocks);
        // line 111
        yield "      ";
        yield from $this->unwrap()->yieldBlock('pageSubTitle', $context, $blocks);
        // line 118
        yield "  </div>

    ";
        // line 120
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "currentTabLevel", [], "any", false, false, false, 120) >= 3)) {
            // line 121
            yield "    <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav\">
        ";
            // line 123
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "navigationTabs", [], "any", false, false, false, 123));
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 124
                yield "          ";
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "attributes", [], "any", false, false, false, 124), "active", [], "any", false, false, false, 124)) {
                    // line 125
                    yield "          <li>
            <a
              href=\"";
                    // line 127
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "href", [], "any", false, false, false, 127), "html", null, true);
                    yield "\"
              id=\"subtab-";
                    // line 128
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "attributes", [], "any", false, false, false, 128), "class_name", [], "any", false, false, false, 128), "html", null, true);
                    yield "\"
              ";
                    // line 129
                    if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "attributes", [], "any", false, false, false, 129), "current", [], "any", false, false, false, 129)) {
                        yield "class=\"current\"";
                    }
                    // line 130
                    yield "              data-submenu=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "attributes", [], "any", false, false, false, 130), "id_tab", [], "any", false, false, false, 130), "html", null, true);
                    yield "\">
              ";
                    // line 131
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "name", [], "any", false, false, false, 131), "html", null, true);
                    yield "
              <span class=\"notification-container\">
                <span class=\"notification-counter\"></span>
              </span>
            </a>
          </li>
          ";
                }
                // line 138
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['tab'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 139
            yield "      </ul>
    </div>
    ";
        }
        // line 142
        yield "  </div>
  ";
        // line 143
        yield $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayDashboardTop");
        yield "
</div>
";
        yield from [];
    }

    // line 28
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pageBreadcrumb(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 29
        yield "      <ul class=\"breadcrumb page-breadcrumb\">
        ";
        // line 31
        yield "        ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, true, false, 31), "container", [], "any", true, true, false, 31) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, false, false, 31), "container", [], "any", false, false, false, 31), "name", [], "any", false, false, false, 31) != ""))) {
            // line 32
            yield "        <li class=\"breadcrumb-container\">
          ";
            // line 33
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, false, false, 33), "container", [], "any", false, false, false, 33), "icon", [], "any", false, false, false, 33))) {
                yield "<i class=\"material-icons\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, false, false, 33), "container", [], "any", false, false, false, 33), "icon", [], "any", false, false, false, 33), "html", null, true);
                yield "</i>";
            }
            // line 34
            yield "          ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, false, false, 34), "container", [], "any", false, false, false, 34), "name", [], "any", false, false, false, 34));
            yield "
        </li>
        ";
        }
        // line 37
        yield "
        ";
        // line 39
        yield "        ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, true, false, 39), "tab", [], "any", true, true, false, 39) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, false, false, 39), "tab", [], "any", false, false, false, 39), "name", [], "any", false, false, false, 39) != ""))) {
            // line 40
            yield "        <li class=\"breadcrumb-current\">
          ";
            // line 41
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, false, false, 41), "tab", [], "any", false, false, false, 41), "icon", [], "any", false, false, false, 41))) {
                yield "<i class=\"material-icons\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, false, false, 41), "tab", [], "any", false, false, false, 41), "icon", [], "any", false, false, false, 41), "html", null, true);
                yield "</i>";
            }
            // line 42
            yield "          ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, false, false, 42), "tab", [], "any", false, false, false, 42), "href", [], "any", false, false, false, 42) != "")) {
                yield "<a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, false, false, 42), "tab", [], "any", false, false, false, 42), "href", [], "any", false, false, false, 42));
                yield "\">";
            }
            // line 43
            yield "            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, false, false, 43), "tab", [], "any", false, false, false, 43), "name", [], "any", false, false, false, 43));
            yield "
          ";
            // line 44
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, false, false, 44), "tab", [], "any", false, false, false, 44), "href", [], "any", false, false, false, 44) != "")) {
                yield "</a>";
            }
            // line 45
            yield "        </li>
        ";
        }
        // line 47
        yield "      </ul>
      ";
        yield from [];
    }

    // line 50
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pageTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 51
        yield "      <h1 class=\"page-title\">
        ";
        // line 52
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "layoutHeaderToolbarBtn", [], "any", false, true, false, 52), "back", [], "any", true, true, false, 52)) {
            // line 53
            yield "          ";
            $context["backButton"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "layoutHeaderToolbarBtn", [], "any", false, false, false, 53), "back", [], "any", false, false, false, 53);
            // line 54
            yield "          <a id=\"page-header-desc-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "table", [], "any", false, false, false, 54), "html", null, true);
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["backButton"] ?? null), "imgclass", [], "any", true, true, false, 54)) {
                yield "-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["backButton"] ?? null), "imgclass", [], "any", false, false, false, 54), "html", null, true);
            }
            yield "\"
             class=\"page-header-toolbar-back";
            // line 55
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["backButton"] ?? null), "target", [], "any", true, true, false, 55) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["backButton"] ?? null), "target", [], "any", false, false, false, 55)))) {
                yield " _blank";
            }
            yield "\"
             ";
            // line 56
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["backButton"] ?? null), "href", [], "any", true, true, false, 56)) {
                yield "href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["backButton"] ?? null), "href", [], "any", false, false, false, 56));
                yield "\"";
            }
            // line 57
            yield "             title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["backButton"] ?? null), "desc", [], "any", false, false, false, 57), "html", null, true);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["backButton"] ?? null), "js", [], "any", true, true, false, 57) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["backButton"] ?? null), "js", [], "any", false, false, false, 57)))) {
                yield " onclick=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["backButton"] ?? null), "js", [], "any", false, false, false, 57), "html", null, true);
                yield "\"";
            }
            yield ">
          </a>
        ";
        }
        // line 60
        yield "        ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "title", [], "any", false, false, false, 60));
        yield "
      </h1>
      ";
        yield from [];
    }

    // line 64
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_toolbarBox(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 65
        yield "      <div class=\"page-bar toolbarBox\">
        <div class=\"btn-toolbar\">
          <a href=\"#\" class=\"toolbar_btn dropdown-toolbar navbar-toggle\" data-toggle=\"collapse\"
             data-target=\"#toolbar-nav\"><i class=\"process-icon-dropdown\"></i>
            <div>";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Menu", [], "Admin.Navigation.Menu"), "html", null, true);
        yield "</div>
          </a>
          <ul id=\"toolbar-nav\" class=\"nav nav-pills pull-right collapse navbar-collapse\">
            ";
        // line 72
        yield $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayDashboardToolbarTopMenu");
        yield "
            ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "layoutHeaderToolbarBtn", [], "any", false, false, false, 73));
        foreach ($context['_seq'] as $context["k"] => $context["btn"]) {
            // line 74
            yield "              ";
            if ((($context["k"] != "back") && ($context["k"] != "modules-list"))) {
                // line 75
                yield "                <li>
                  <a
                    id=\"page-header-desc-";
                // line 77
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "table", [], "any", false, false, false, 77), "html", null, true);
                yield "-";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "imgclass", [], "any", true, true, false, 77)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "imgclass", [], "any", false, false, false, 77));
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"], "html", null, true);
                }
                yield "\"
                    class=\"toolbar_btn";
                // line 78
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "target", [], "any", true, true, false, 78) && CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "target", [], "any", false, false, false, 78))) {
                    yield " _blank";
                }
                yield " pointer\"
                    ";
                // line 79
                if (CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "href", [], "any", true, true, false, 79)) {
                    // line 80
                    yield "                      href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "href", [], "any", false, false, false, 80));
                    yield "\"
                    ";
                }
                // line 82
                yield "                    title=\"";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "help", [], "any", true, true, false, 82)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "help", [], "any", false, false, false, 82), "html", null, true);
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "desc", [], "any", false, false, false, 82));
                }
                yield "\"
                    ";
                // line 83
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "modal_target", [], "any", true, true, false, 83) && CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "modal_target", [], "any", false, false, false, 83))) {
                    // line 84
                    yield "                      data-target=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "modal_target", [], "any", false, false, false, 84), "html", null, true);
                    yield "\"
                      data-toggle=\"modal\"
                    ";
                }
                // line 87
                yield "                    ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "help", [], "any", true, true, false, 87)) {
                    // line 88
                    yield "                      data-toggle=\"pstooltip\"
                      data-placement=\"bottom\"
                    ";
                }
                // line 91
                yield "                    data-role=\"page-header-desc-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "table", [], "any", false, false, false, 91), "html", null, true);
                yield "-link\"
                  >
                    <i class=\"";
                // line 93
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "icon", [], "any", true, true, false, 93) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "icon", [], "any", false, false, false, 93)))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "icon", [], "any", false, false, false, 93));
                } else {
                    yield "process-icon-";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "imgclass", [], "any", true, true, false, 93)) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "imgclass", [], "any", false, false, false, 93));
                    } else {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"], "html", null, true);
                    }
                }
                if (CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "class", [], "any", true, true, false, 93)) {
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "class", [], "any", false, false, false, 93));
                }
                yield "\"></i>
                    <div";
                // line 94
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "force_desc", [], "any", true, true, false, 94) && (CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "force_desc", [], "any", false, false, false, 94) == true))) {
                    yield " class=\"locked\"";
                }
                yield ">
                      ";
                // line 95
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "desc", [], "any", false, false, false, 95));
                yield "
                    </div>
                  </a>
                </li>
              ";
            }
            // line 100
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['k'], $context['btn'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        yield "
            <li>
              <a class=\"toolbar_btn btn-help\" href=\"";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "helpLink", [], "any", false, false, false, 103), "html", null, true);
        yield "\" title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Help", [], "Admin.Global"), "html", null, true);
        yield "\">
                <div>";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Help", [], "Admin.Global"), "html", null, true);
        yield "</div>
              </a>
            </li>
          </ul>
        </div>
      </div>
      ";
        yield from [];
    }

    // line 111
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pageSubTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 112
        yield "        ";
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "subTitle", [], "any", false, false, false, 112))) {
            // line 113
            yield "          <h4 class=\"page-subtitle\">
            ";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "subTitle", [], "any", false, false, false, 114), "html", null, true);
            yield "
          </h4>
        ";
        }
        // line 117
        yield "      ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Component/LegacyLayout/toolbar.html.twig";
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
        return array (  437 => 117,  431 => 114,  428 => 113,  425 => 112,  418 => 111,  406 => 104,  400 => 103,  396 => 101,  390 => 100,  382 => 95,  376 => 94,  359 => 93,  353 => 91,  348 => 88,  345 => 87,  338 => 84,  336 => 83,  327 => 82,  321 => 80,  319 => 79,  313 => 78,  303 => 77,  299 => 75,  296 => 74,  292 => 73,  288 => 72,  282 => 69,  276 => 65,  269 => 64,  260 => 60,  247 => 57,  241 => 56,  235 => 55,  226 => 54,  223 => 53,  221 => 52,  218 => 51,  211 => 50,  205 => 47,  201 => 45,  197 => 44,  192 => 43,  185 => 42,  179 => 41,  176 => 40,  173 => 39,  170 => 37,  163 => 34,  157 => 33,  154 => 32,  151 => 31,  148 => 29,  141 => 28,  133 => 143,  130 => 142,  125 => 139,  119 => 138,  109 => 131,  104 => 130,  100 => 129,  96 => 128,  92 => 127,  88 => 125,  85 => 124,  81 => 123,  77 => 121,  75 => 120,  71 => 118,  68 => 111,  66 => 64,  63 => 63,  61 => 50,  58 => 49,  56 => 28,  49 => 26,  46 => 25,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Component/LegacyLayout/toolbar.html.twig", "/home/sheridantools/public_html/src/PrestaShopBundle/Resources/views/Admin/Component/LegacyLayout/toolbar.html.twig");
    }
}
