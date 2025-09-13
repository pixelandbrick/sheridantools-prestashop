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

/* @PrestaShop/Admin/Component/Layout/toolbar.html.twig */
class __TwigTemplate_dcfc2b5e3f25af3dcd3ea71dd4dfe7e4 extends Template
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
        yield "<div class=\"header-toolbar d-print-none\">
  ";
        // line 26
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("MultistoreHeader");
        yield "
  <div class=\"container-fluid\">

    ";
        // line 29
        yield from $this->unwrap()->yieldBlock('pageBreadcrumb', $context, $blocks);
        // line 50
        yield "
    ";
        // line 51
        $context["persistent_help_btn"] = ((array_key_exists("help_link", $context) &&  !(($context["help_link"] ?? null) === false)) && Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "layoutHeaderToolbarBtn", [], "any", false, false, false, 51)));
        // line 52
        yield "    <div class=\"title-row ";
        if (($context["persistent_help_btn"] ?? null)) {
            yield "flex-nowrap flex-md-wrap";
        }
        yield "\">
      ";
        // line 53
        yield from $this->unwrap()->yieldBlock('pageTitle', $context, $blocks);
        // line 58
        yield "      ";
        yield from $this->unwrap()->yieldBlock('toolbarBox', $context, $blocks);
        // line 138
        yield "      ";
        yield from $this->unwrap()->yieldBlock('pageSubTitle', $context, $blocks);
        // line 145
        yield "    </div>
  </div>

  ";
        // line 148
        if ((array_key_exists("headerTabContent", $context) && ($context["headerTabContent"] ?? null))) {
            // line 149
            yield "    <div class=\"page-head-tabs\" id=\"head_tabs\">
      ";
            // line 150
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["headerTabContent"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["tabContent"]) {
                // line 151
                yield "        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["tabContent"], "html", null, true);
                yield "
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['tabContent'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 153
            yield "    </div>
  ";
        }
        // line 155
        yield "
  ";
        // line 156
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "currentTabLevel", [], "any", false, false, false, 156) >= 3)) {
            // line 157
            yield "    <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
        ";
            // line 159
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "navigationTabs", [], "any", false, false, false, 159));
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 160
                yield "          ";
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "attributes", [], "any", false, false, false, 160), "active", [], "any", false, false, false, 160)) {
                    // line 161
                    yield "            <li class=\"nav-item\">
              <a href=\"";
                    // line 162
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "href", [], "any", false, false, false, 162), "html", null, true);
                    yield "\" id=\"subtab-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "attributes", [], "any", false, false, false, 162), "class_name", [], "any", false, false, false, 162), "html", null, true);
                    yield "\"
                 class=\"nav-link tab ";
                    // line 163
                    if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "attributes", [], "any", false, false, false, 163), "current", [], "any", false, false, false, 163)) {
                        yield "active current";
                    }
                    yield "\"
                 data-submenu=\"";
                    // line 164
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "attributes", [], "any", false, false, false, 164), "id_tab", [], "any", false, false, false, 164), "html", null, true);
                    yield "\">
                ";
                    // line 165
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "name", [], "any", false, false, false, 165), "html", null, true);
                    yield "
                <span class=\"notification-container\">
                <span class=\"notification-counter\"></span>
              </span>
              </a>
            </li>
          ";
                }
                // line 172
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['tab'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 173
            yield "      </ul>
    </div>
  ";
        }
        // line 176
        yield "
  ";
        // line 177
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "layoutHeaderToolbarBtn", [], "any", true, true, false, 177) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "layoutHeaderToolbarBtn", [], "any", false, false, false, 177)))) {
            // line 178
            yield "    <div class=\"btn-floating\">
      <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\"
              aria-expanded=\"false\">
        <i class=\"material-icons\">add</i>
      </button>
      <div class=\"btn-floating-container collapse\">
        <div class=\"btn-floating-menu\">
          ";
            // line 185
            yield $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayDashboardToolbarTopMenu");
            yield "

          ";
            // line 187
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "layoutHeaderToolbarBtn", [], "any", false, false, false, 187));
            foreach ($context['_seq'] as $context["k"] => $context["btn"]) {
                // line 188
                yield "            ";
                if ((($context["k"] != "back") && ($context["k"] != "modules-list"))) {
                    // line 189
                    yield "              <a
                class=\"btn btn-floating-item ";
                    // line 190
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "floating_class", [], "any", true, true, false, 190) && CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "floating_class", [], "any", false, false, false, 190))) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "floating_class", [], "any", false, false, false, 190));
                    }
                    yield " ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "target", [], "any", true, true, false, 190) && CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "target", [], "any", false, false, false, 190))) {
                        yield " _blank";
                    }
                    yield " pointer\"";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "href", [], "any", true, true, false, 190)) {
                        // line 191
                        yield "                id=\"page-header-desc-floating-";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("table", $context)) ? (Twig\Extension\CoreExtension::default(($context["table"] ?? null), "configuration")) : ("configuration")), "html", null, true);
                        yield "-";
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "imgclass", [], "any", true, true, false, 191)) {
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "imgclass", [], "any", false, false, false, 191));
                        } else {
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"], "html", null, true);
                        }
                        yield "\"
              href=\"";
                        // line 192
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "href", [], "any", false, false, false, 192));
                        yield "\"";
                    }
                    // line 193
                    yield "                title=\"";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "help", [], "any", true, true, false, 193)) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "help", [], "any", false, false, false, 193), "html", null, true);
                    } else {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "desc", [], "any", false, false, false, 193));
                    }
                    yield "\"";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "js", [], "any", true, true, false, 193) && CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "js", [], "any", false, false, false, 193))) {
                        // line 194
                        yield "              onclick=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "js", [], "any", false, false, false, 194), "html", null, true);
                        yield "\"";
                    }
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "modal_target", [], "any", true, true, false, 194) && CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "modal_target", [], "any", false, false, false, 194))) {
                        // line 195
                        yield "                data-target=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "modal_target", [], "any", false, false, false, 195), "html", null, true);
                        yield "\"
                data-toggle=\"modal\"";
                    }
                    // line 196
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "help", [], "any", true, true, false, 196)) {
                        // line 197
                        yield "                data-toggle=\"pstooltip\"
                data-placement=\"bottom\"";
                    }
                    // line 199
                    yield "              >
                ";
                    // line 200
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "desc", [], "any", false, false, false, 200));
                    yield "
                ";
                    // line 201
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "icon", [], "any", true, true, false, 201) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "icon", [], "any", false, false, false, 201)))) {
                        yield "<i class=\"material-icons\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "icon", [], "any", false, false, false, 201), "html", null, true);
                        yield "</i>";
                    }
                    // line 202
                    yield "              </a>
            ";
                }
                // line 204
                yield "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['k'], $context['btn'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 205
            yield "
          ";
            // line 206
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "helpLink", [], "any", false, false, false, 206))) {
                // line 207
                yield "            ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "sidebarEnabled", [], "any", false, false, false, 207)) {
                    // line 208
                    yield "              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
                 title=\"";
                    // line 209
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Help", [], "Admin.Global"), "html", null, true);
                    yield "\"
                 data-toggle=\"sidebar\"
                 data-target=\"#right-sidebar\"
                 data-url=\"";
                    // line 212
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "helpLink", [], "any", false, false, false, 212));
                    yield "\"
              >
                ";
                    // line 214
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Help", [], "Admin.Global"), "html", null, true);
                    yield "
              </a>
            ";
                } else {
                    // line 217
                    yield "              <a class=\"btn btn-floating-item btn-help\" href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "helpLink", [], "any", false, false, false, 217));
                    yield "\"
                 title=\"";
                    // line 218
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Help", [], "Admin.Global"), "html", null, true);
                    yield "\">
                ";
                    // line 219
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Help", [], "Admin.Global"), "html", null, true);
                    yield "
              </a>
            ";
                }
                // line 222
                yield "          ";
            }
            // line 223
            yield "        </div>
      </div>
    </div>
  ";
        }
        // line 227
        yield "  ";
        yield $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayDashboardTop");
        yield "
</div>
";
        yield from [];
    }

    // line 29
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pageBreadcrumb(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 30
        yield "      ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, true, false, 30), "container", [], "any", true, true, false, 30) || CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, true, false, 30), "tab", [], "any", true, true, false, 30))) {
            // line 31
            yield "        <nav aria-label=\"Breadcrumb\">
          <ol class=\"breadcrumb\">
            ";
            // line 33
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, true, false, 33), "container", [], "any", true, true, false, 33) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, false, false, 33), "container", [], "any", false, false, false, 33), "name", [], "any", false, false, false, 33) != ""))) {
                // line 34
                yield "              <li class=\"breadcrumb-item\">
                ";
                // line 35
                if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, false, false, 35), "container", [], "any", false, false, false, 35), "icon", [], "any", false, false, false, 35))) {
                    yield "<i class=\"material-icons\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, false, false, 35), "container", [], "any", false, false, false, 35), "icon", [], "any", false, false, false, 35), "html", null, true);
                    yield "</i>";
                }
                // line 36
                yield "                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, false, false, 36), "container", [], "any", false, false, false, 36), "name", [], "any", false, false, false, 36));
                yield "
              </li>
            ";
            }
            // line 39
            yield "
            ";
            // line 40
            if (((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, true, false, 40), "container", [], "any", true, true, false, 40) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, true, false, 40), "tab", [], "any", true, true, false, 40)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, false, false, 40), "tab", [], "any", false, false, false, 40), "name", [], "any", false, false, false, 40) != "")) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, false, false, 40), "container", [], "any", false, false, false, 40), "name", [], "any", false, false, false, 40) != CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, false, false, 40), "tab", [], "any", false, false, false, 40), "name", [], "any", false, false, false, 40))) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, false, false, 40), "tab", [], "any", false, false, false, 40), "href", [], "any", false, false, false, 40) != ""))) {
                // line 41
                yield "              <li class=\"breadcrumb-item active\">
                ";
                // line 42
                if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, false, false, 42), "tab", [], "any", false, false, false, 42), "icon", [], "any", false, false, false, 42))) {
                    yield "<i class=\"material-icons\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, false, false, 42), "tab", [], "any", false, false, false, 42), "icon", [], "any", false, false, false, 42), "html", null, true);
                    yield "</i>";
                }
                // line 43
                yield "                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, false, false, 43), "tab", [], "any", false, false, false, 43), "href", [], "any", false, false, false, 43));
                yield "\" aria-current=\"page\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, false, false, 43), "tab", [], "any", false, false, false, 43), "name", [], "any", false, false, false, 43));
                yield "</a>
              </li>
            ";
            }
            // line 46
            yield "          </ol>
        </nav>
      ";
        }
        // line 49
        yield "    ";
        yield from [];
    }

    // line 53
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pageTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 54
        yield "          <h1 class=\"title\">
            ";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "title", [], "any", false, false, false, 55));
        yield "
          </h1>
      ";
        yield from [];
    }

    // line 58
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_toolbarBox(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 59
        yield "        <div class=\"toolbar-icons";
        if (($context["persistent_help_btn"] ?? null)) {
            yield " toolbar-icons--persistent";
        }
        yield "\">
          <div class=\"wrapper\">
            ";
        // line 61
        yield $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayDashboardToolbarTopMenu");
        yield "
            ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "layoutHeaderToolbarBtn", [], "any", false, false, false, 62));
        foreach ($context['_seq'] as $context["k"] => $context["btn"]) {
            // line 63
            yield "              ";
            if ((($context["k"] != "back") && ($context["k"] != "modules-list"))) {
                // line 64
                yield "                ";
                // line 65
                yield "                <a
                  id=\"page-header-desc-";
                // line 66
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("table", $context)) ? (Twig\Extension\CoreExtension::default(($context["table"] ?? null), "configuration")) : ("configuration")), "html", null, true);
                yield "-";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "imgclass", [], "any", true, true, false, 66)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "imgclass", [], "any", false, false, false, 66));
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"], "html", null, true);
                }
                yield "\"
                  class=\"btn ";
                // line 67
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "class", [], "any", true, true, false, 67) && CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "class", [], "any", false, false, false, 67))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "class", [], "any", false, false, false, 67));
                } else {
                    yield "btn-primary";
                }
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "target", [], "any", true, true, false, 67) && CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "target", [], "any", false, false, false, 67))) {
                    yield " _blank";
                }
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "disabled", [], "any", true, true, false, 67) && CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "disabled", [], "any", false, false, false, 67))) {
                    yield " disabled auto-pointer-events";
                }
                yield " pointer\"
                  ";
                // line 68
                if (CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "href", [], "any", true, true, false, 68)) {
                    // line 69
                    yield "                    href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "href", [], "any", false, false, false, 69));
                    yield "\"
                  ";
                }
                // line 71
                yield "                  title=\"";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "help", [], "any", true, true, false, 71)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "help", [], "any", false, false, false, 71), "html", null, true);
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "desc", [], "any", false, false, false, 71));
                }
                yield "\"
                  ";
                // line 72
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "js", [], "any", true, true, false, 72) && CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "js", [], "any", false, false, false, 72))) {
                    yield "onclick=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "js", [], "any", false, false, false, 72), "html", null, true);
                    yield "\" ";
                }
                // line 73
                yield "                  ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "modal_target", [], "any", true, true, false, 73) && CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "modal_target", [], "any", false, false, false, 73))) {
                    // line 74
                    yield "                    data-target=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "modal_target", [], "any", false, false, false, 74), "html", null, true);
                    yield "\"
                    data-toggle=\"modal\"
                  ";
                }
                // line 77
                yield "                  ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "help", [], "any", true, true, false, 77)) {
                    // line 78
                    yield "                    data-toggle=\"pstooltip\"
                    data-placement=\"bottom\"
                  ";
                }
                // line 81
                yield "                  ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "data_attributes", [], "any", true, true, false, 81) && CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "data_attributes", [], "any", false, false, false, 81))) {
                    // line 82
                    yield "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "data_attributes", [], "any", false, false, false, 82));
                    foreach ($context['_seq'] as $context["attribute_name"] => $context["attribute_value"]) {
                        // line 83
                        yield "                      data-";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attribute_name"], "html", null, true);
                        yield "=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attribute_value"], "html", null, true);
                        yield "\"
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['attribute_name'], $context['attribute_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 85
                    yield "                  ";
                }
                // line 86
                yield "                >
                  ";
                // line 87
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "icon", [], "any", true, true, false, 87) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "icon", [], "any", false, false, false, 87)))) {
                    yield "<i class=\"material-icons\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "icon", [], "any", false, false, false, 87), "html", null, true);
                    yield "</i>";
                }
                // line 88
                yield "                  ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "desc", [], "any", false, false, false, 88));
                yield "
                </a>
              ";
            }
            // line 91
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['k'], $context['btn'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        yield "            ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "layoutHeaderToolbarBtn", [], "any", false, true, false, 92), "modules-list", [], "array", true, true, false, 92)) {
            // line 93
            yield "              ";
            // line 94
            yield "              <a
                class=\"btn btn-outline-secondary ";
            // line 95
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "layoutHeaderToolbarBtn", [], "any", false, true, false, 95), "modules-list", [], "array", false, true, false, 95), "target", [], "any", true, true, false, 95) && CoreExtension::getAttribute($this->env, $this->source, (($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "layoutHeaderToolbarBtn", [], "any", false, false, false, 95)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["modules-list"] ?? null) : null), "target", [], "any", false, false, false, 95))) {
                yield " _blank";
            }
            yield "\"
                id=\"page-header-desc-";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("table", $context)) ? (Twig\Extension\CoreExtension::default(($context["table"] ?? null), "configuration")) : ("configuration")), "html", null, true);
            yield "-";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "layoutHeaderToolbarBtn", [], "any", false, true, false, 96), "modules-list", [], "array", false, true, false, 96), "imgclass", [], "any", true, true, false, 96)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "layoutHeaderToolbarBtn", [], "any", false, false, false, 96)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["modules-list"] ?? null) : null), "imgclass", [], "any", false, false, false, 96), "html", null, true);
            } else {
                yield "modules-list";
            }
            yield "\"
                ";
            // line 97
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "layoutHeaderToolbarBtn", [], "any", false, true, false, 97), "modules-list", [], "array", false, true, false, 97), "href", [], "any", true, true, false, 97)) {
                yield "href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "layoutHeaderToolbarBtn", [], "any", false, false, false, 97)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["modules-list"] ?? null) : null), "href", [], "any", false, false, false, 97), "html", null, true);
                yield "\"";
            }
            // line 98
            yield "                title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (($_v3 = CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "layoutHeaderToolbarBtn", [], "any", false, false, false, 98)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["modules-list"] ?? null) : null), "desc", [], "any", false, false, false, 98), "html", null, true);
            yield "\"
                ";
            // line 99
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "layoutHeaderToolbarBtn", [], "any", false, true, false, 99), "modules-list", [], "array", false, true, false, 99), "js", [], "any", true, true, false, 99) && CoreExtension::getAttribute($this->env, $this->source, (($_v4 = CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "layoutHeaderToolbarBtn", [], "any", false, false, false, 99)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["modules-list"] ?? null) : null), "js", [], "any", false, false, false, 99))) {
                yield "onclick=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (($_v5 = CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "layoutHeaderToolbarBtn", [], "any", false, false, false, 99)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["modules-list"] ?? null) : null), "js", [], "any", false, false, false, 99), "html", null, true);
                yield "\"";
            }
            // line 100
            yield "              >
                ";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (($_v6 = CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "layoutHeaderToolbarBtn", [], "any", false, false, false, 101)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["modules-list"] ?? null) : null), "desc", [], "any", false, false, false, 101), "html", null, true);
            yield "
              </a>
            ";
        }
        // line 104
        yield "
            ";
        // line 105
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "helpLink", [], "any", false, false, false, 105))) {
            // line 106
            yield "              ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "sidebarEnabled", [], "any", false, false, false, 106)) {
                // line 107
                yield "                <a class=\"toolbar-button btn-sidebar d-inline-block d-md-none\" href=\"#\"
                   title=\"";
                // line 108
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Help", [], "Admin.Global"), "html", null, true);
                yield "\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"";
                // line 111
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "helpLink", [], "any", false, false, false, 111));
                yield "\"
                   id=\"product_form_open_help_mobile\"
                >
                  <i class=\"material-icons\">help_outline</i>
                </a>
                <a class=\"btn btn-outline-secondary btn-help btn-sidebar d-none d-md-inline-block\" href=\"#\"
                   title=\"";
                // line 117
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Help", [], "Admin.Global"), "html", null, true);
                yield "\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"";
                // line 120
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "helpLink", [], "any", false, false, false, 120));
                yield "\"
                   id=\"product_form_open_help\"
                >
                  ";
                // line 123
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Help", [], "Admin.Global"), "html", null, true);
                yield "
                </a>
              ";
            } else {
                // line 126
                yield "                <a class=\"toolbar-button d-inline-block d-md-none\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "helpLink", [], "any", false, false, false, 126));
                yield "\"
                   title=\"";
                // line 127
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Help", [], "Admin.Global"), "html", null, true);
                yield "\">
                  <i class=\"material-icons\">help_outline</i>
                </a>
                <a class=\"btn btn-outline-secondary btn-help d-none d-md-inline-block\" href=\"";
                // line 130
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "helpLink", [], "any", false, false, false, 130));
                yield "\"
                   title=\"";
                // line 131
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Help", [], "Admin.Global"), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Help", [], "Admin.Global"), "html", null, true);
                yield "
                </a>
              ";
            }
            // line 134
            yield "            ";
        }
        // line 135
        yield "          </div>
        </div>
      ";
        yield from [];
    }

    // line 138
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pageSubTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 139
        yield "        ";
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "subTitle", [], "any", false, false, false, 139))) {
            // line 140
            yield "          <h4 class=\"page-subtitle\">
            ";
            // line 141
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "subTitle", [], "any", false, false, false, 141), "html", null, true);
            yield "
          </h4>
        ";
        }
        // line 144
        yield "      ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Component/Layout/toolbar.html.twig";
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
        return array (  694 => 144,  688 => 141,  685 => 140,  682 => 139,  675 => 138,  668 => 135,  665 => 134,  657 => 131,  653 => 130,  647 => 127,  642 => 126,  636 => 123,  630 => 120,  624 => 117,  615 => 111,  609 => 108,  606 => 107,  603 => 106,  601 => 105,  598 => 104,  592 => 101,  589 => 100,  583 => 99,  578 => 98,  572 => 97,  562 => 96,  556 => 95,  553 => 94,  551 => 93,  548 => 92,  542 => 91,  535 => 88,  529 => 87,  526 => 86,  523 => 85,  512 => 83,  507 => 82,  504 => 81,  499 => 78,  496 => 77,  489 => 74,  486 => 73,  480 => 72,  471 => 71,  465 => 69,  463 => 68,  449 => 67,  439 => 66,  436 => 65,  434 => 64,  431 => 63,  427 => 62,  423 => 61,  415 => 59,  408 => 58,  400 => 55,  397 => 54,  390 => 53,  385 => 49,  380 => 46,  371 => 43,  365 => 42,  362 => 41,  360 => 40,  357 => 39,  350 => 36,  344 => 35,  341 => 34,  339 => 33,  335 => 31,  332 => 30,  325 => 29,  316 => 227,  310 => 223,  307 => 222,  301 => 219,  297 => 218,  292 => 217,  286 => 214,  281 => 212,  275 => 209,  272 => 208,  269 => 207,  267 => 206,  264 => 205,  258 => 204,  254 => 202,  248 => 201,  244 => 200,  241 => 199,  237 => 197,  235 => 196,  229 => 195,  223 => 194,  214 => 193,  210 => 192,  199 => 191,  189 => 190,  186 => 189,  183 => 188,  179 => 187,  174 => 185,  165 => 178,  163 => 177,  160 => 176,  155 => 173,  149 => 172,  139 => 165,  135 => 164,  129 => 163,  123 => 162,  120 => 161,  117 => 160,  113 => 159,  109 => 157,  107 => 156,  104 => 155,  100 => 153,  91 => 151,  87 => 150,  84 => 149,  82 => 148,  77 => 145,  74 => 138,  71 => 58,  69 => 53,  62 => 52,  60 => 51,  57 => 50,  55 => 29,  49 => 26,  46 => 25,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Component/Layout/toolbar.html.twig", "/home/sheridantools/public_html/src/PrestaShopBundle/Resources/views/Admin/Component/Layout/toolbar.html.twig");
    }
}
