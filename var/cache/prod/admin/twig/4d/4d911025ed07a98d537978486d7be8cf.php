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

/* @PrestaShop/Admin/Component/Layout/nav_bar.html.twig */
class __TwigTemplate_0ac48e1b7edf200e9911f8025c29deab extends Template
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
        yield "<nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"";
        // line 26
        yield $this->extensions['PrestaShopBundle\Twig\Extension\PathExtension']->getLegacyPath("AdminEmployees", ["action" => "toggleMenu"]);
        yield "\">
    <i class=\"material-icons rtl-flip\">first_page</i>
  </span>

  <div class=\"nav-bar-overflow\">
    <div class=\"logo-container\">
      <div class=\"logo-container__header\">
        <a id=\"header_logo\" class=\"logo float-left\" href=\"";
        // line 33
        yield $this->extensions['PrestaShopBundle\Twig\Extension\PathExtension']->getLegacyPath(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "defaultTab", [], "any", false, false, false, 33));
        yield "\"></a>
        <span id=\"shop_version\" class=\"header-version\">";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "psVersion", [], "any", false, false, false, 34), "html", null, true);
        yield "</span>
      </div>
      <div class=\"logo-container__close js-mobile-menu\">
        <i class=\"material-icons close-btn\">close</i>
      </div>
    </div>

    <ul class=\"main-menu";
        // line 41
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "menuCollapsed", [], "any", false, false, false, 41)) {
            yield " sidebar-closed";
        }
        yield "\">
      ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "tabs", [], "any", false, false, false, 42));
        foreach ($context['_seq'] as $context["_key"] => $context["level1"]) {
            // line 43
            yield "        ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["level1"], "active", [], "any", false, false, false, 43)) {
                // line 44
                yield "
        ";
                // line 45
                $context["level1Href"] = CoreExtension::getAttribute($this->env, $this->source, $context["level1"], "href", [], "any", false, false, false, 45);
                // line 46
                yield "        ";
                if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["level1"], "sub_tabs", [], "any", false, false, false, 46)) > 0) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["level1"], "sub_tabs", [], "any", false, true, false, 46), 0, [], "array", false, true, false, 46), "href", [], "any", true, true, false, 46))) {
                    // line 47
                    yield "          ";
                    $context["level1Href"] = CoreExtension::getAttribute($this->env, $this->source, (($_v0 = CoreExtension::getAttribute($this->env, $this->source, $context["level1"], "sub_tabs", [], "any", false, false, false, 47)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[0] ?? null) : null), "href", [], "any", false, false, false, 47);
                    // line 48
                    yield "        ";
                }
                // line 49
                yield "
        ";
                // line 50
                $context["level1Name"] = CoreExtension::getAttribute($this->env, $this->source, $context["level1"], "name", [], "any", false, false, false, 50);
                // line 51
                yield "        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["level1"], "name", [], "any", false, false, false, 51) === "")) {
                    // line 52
                    yield "          ";
                    $context["level1Name"] = CoreExtension::getAttribute($this->env, $this->source, $context["level1"], "class_name", [], "any", false, false, false, 52);
                    // line 53
                    yield "        ";
                }
                // line 54
                yield "
        ";
                // line 55
                if ( !(CoreExtension::getAttribute($this->env, $this->source, $context["level1"], "icon", [], "any", false, false, false, 55) === "")) {
                    // line 56
                    yield "
          <li class=\"link-levelone";
                    // line 57
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["level1"], "current", [], "any", false, false, false, 57)) {
                        yield " link-levelone-active";
                    }
                    yield "\" data-submenu=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["level1"], "id_tab", [], "any", false, false, false, 57), "html", null, true);
                    yield "\" id=\"tab-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["level1"], "class_name", [], "any", false, false, false, 57), "html", null, true);
                    yield "\">
            <a href=\"";
                    // line 58
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["level1Href"] ?? null), "html", null, true);
                    yield "\" class=\"link\" >
              <i class=\"material-icons\">";
                    // line 59
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["level1"], "icon", [], "any", false, false, false, 59), "html", null, true);
                    yield "</i> <span>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["level1Name"] ?? null), "html", null, true);
                    yield "</span>
            </a>
          </li>

        ";
                } else {
                    // line 64
                    yield "
        <li class=\"category-title";
                    // line 65
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["level1"], "current", [], "any", false, false, false, 65)) {
                        yield " link-active";
                    }
                    yield "\" data-submenu=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["level1"], "id_tab", [], "any", false, false, false, 65), "html", null, true);
                    yield "\" id=\"tab-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["level1"], "class_name", [], "any", false, false, false, 65), "html", null, true);
                    yield "\">
          <span class=\"title\">";
                    // line 66
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["level1Name"] ?? null), "html", null, true);
                    yield "</span>
        </li>

        ";
                    // line 69
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["level1"], "sub_tabs", [], "any", false, false, false, 69));
                    foreach ($context['_seq'] as $context["_key"] => $context["level2"]) {
                        // line 70
                        yield "        ";
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["level2"], "active", [], "any", false, false, false, 70)) {
                            // line 71
                            yield "
        ";
                            // line 72
                            $context["level2Href"] = CoreExtension::getAttribute($this->env, $this->source, $context["level2"], "href", [], "any", false, false, false, 72);
                            // line 73
                            yield "
        ";
                            // line 74
                            $context["level2Name"] = CoreExtension::getAttribute($this->env, $this->source, $context["level2"], "name", [], "any", false, false, false, 74);
                            // line 75
                            yield "        ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["level2"], "name", [], "any", false, false, false, 75) === "")) {
                                // line 76
                                yield "          ";
                                $context["level2Name"] = CoreExtension::getAttribute($this->env, $this->source, $context["level2"], "class_name", [], "any", false, false, false, 76);
                                // line 77
                                yield "        ";
                            }
                            // line 78
                            yield "        ";
                            $context["levelOneClass"] = "";
                            // line 79
                            yield "
        ";
                            // line 80
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["level2"], "current", [], "any", false, false, false, 80) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "menuCollapsed", [], "any", false, false, false, 80))) {
                                // line 81
                                yield "          ";
                                $context["levelOneClass"] = " link-active open ul-open";
                                // line 82
                                yield "        ";
                            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["level2"], "current", [], "any", false, false, false, 82) && CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "menuCollapsed", [], "any", false, false, false, 82))) {
                                // line 83
                                yield "          ";
                                $context["levelOneClass"] = " link-active";
                                // line 84
                                yield "        ";
                            }
                            // line 85
                            yield "
        <li class=\"link-levelone";
                            // line 86
                            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["level2"], "sub_tabs", [], "any", false, false, false, 86)) > 0)) {
                                yield " has_submenu";
                            }
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["levelOneClass"] ?? null), "html", null, true);
                            yield "\" data-submenu=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["level2"], "id_tab", [], "any", false, false, false, 86), "html", null, true);
                            yield "\" id=\"subtab-";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["level2"], "class_name", [], "any", false, false, false, 86), "html", null, true);
                            yield "\">
          <a href=\"";
                            // line 87
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["level2Href"] ?? null), "html", null, true);
                            yield "\" class=\"link\">
            <i class=\"material-icons mi-";
                            // line 88
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["level2"], "icon", [], "any", false, false, false, 88), "html", null, true);
                            yield "\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["level2"], "icon", [], "any", false, false, false, 88), "html", null, true);
                            yield "</i>
            <span>";
                            // line 89
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["level2Name"] ?? null), "html", null, true);
                            yield "</span>
            ";
                            // line 90
                            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["level1"], "sub_tabs", [], "any", false, false, false, 90)) > 0)) {
                                // line 91
                                yield "              <i class=\"material-icons sub-tabs-arrow\">
                ";
                                // line 92
                                if (CoreExtension::getAttribute($this->env, $this->source, $context["level2"], "current", [], "any", false, false, false, 92)) {
                                    // line 93
                                    yield "                  keyboard_arrow_up
                ";
                                } else {
                                    // line 95
                                    yield "                  keyboard_arrow_down
                ";
                                }
                                // line 97
                                yield "              </i>
            ";
                            }
                            // line 99
                            yield "          </a>
          ";
                            // line 100
                            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["level2"], "sub_tabs", [], "any", false, false, false, 100)) > 0)) {
                                // line 101
                                yield "            <ul id=\"collapse-";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["level2"], "id_tab", [], "any", false, false, false, 101), "html", null, true);
                                yield "\" class=\"submenu panel-collapse\">
              ";
                                // line 102
                                $context['_parent'] = $context;
                                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["level2"], "sub_tabs", [], "any", false, false, false, 102));
                                foreach ($context['_seq'] as $context["_key"] => $context["level3"]) {
                                    // line 103
                                    yield "              ";
                                    if (CoreExtension::getAttribute($this->env, $this->source, $context["level3"], "active", [], "any", false, false, false, 103)) {
                                        // line 104
                                        yield "
              ";
                                        // line 105
                                        $context["level3Href"] = CoreExtension::getAttribute($this->env, $this->source, $context["level3"], "href", [], "any", false, false, false, 105);
                                        // line 106
                                        yield "
              ";
                                        // line 107
                                        $context["level3Name"] = CoreExtension::getAttribute($this->env, $this->source, $context["level3"], "name", [], "any", false, false, false, 107);
                                        // line 108
                                        yield "              ";
                                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["level3"], "name", [], "any", false, false, false, 108) === "")) {
                                            // line 109
                                            yield "                ";
                                            $context["level3Name"] = CoreExtension::getAttribute($this->env, $this->source, $context["level3"], "class_name", [], "any", false, false, false, 109);
                                            // line 110
                                            yield "              ";
                                        }
                                        // line 111
                                        yield "
              <li class=\"link-leveltwo";
                                        // line 112
                                        if (CoreExtension::getAttribute($this->env, $this->source, $context["level3"], "current", [], "any", false, false, false, 112)) {
                                            yield " link-active";
                                        }
                                        yield "\" data-submenu=\"";
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["level3"], "id_tab", [], "any", false, false, false, 112), "html", null, true);
                                        yield "\" id=\"subtab-";
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["level3"], "class_name", [], "any", false, false, false, 112), "html", null, true);
                                        yield "\">
                <a href=\"";
                                        // line 113
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["level3Href"] ?? null), "html", null, true);
                                        yield "\" class=\"link\"> ";
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["level3Name"] ?? null), "html", null, true);
                                        yield "</a>
              </li>

              ";
                                    }
                                    // line 117
                                    yield "              ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_key'], $context['level3'], $context['_parent']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 118
                                yield "            </ul>
          ";
                            }
                            // line 120
                            yield "        </li>
        ";
                        }
                        // line 122
                        yield "        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['level2'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 123
                    yield "
        ";
                }
                // line 125
                yield "
        ";
            }
            // line 127
            yield "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['level1'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        yield "    </ul>
  </div>
  ";
        // line 130
        yield $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayAdminNavBarBeforeEnd");
        yield "
</nav>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Component/Layout/nav_bar.html.twig";
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
        return array (  350 => 130,  346 => 128,  340 => 127,  336 => 125,  332 => 123,  326 => 122,  322 => 120,  318 => 118,  312 => 117,  303 => 113,  293 => 112,  290 => 111,  287 => 110,  284 => 109,  281 => 108,  279 => 107,  276 => 106,  274 => 105,  271 => 104,  268 => 103,  264 => 102,  259 => 101,  257 => 100,  254 => 99,  250 => 97,  246 => 95,  242 => 93,  240 => 92,  237 => 91,  235 => 90,  231 => 89,  225 => 88,  221 => 87,  210 => 86,  207 => 85,  204 => 84,  201 => 83,  198 => 82,  195 => 81,  193 => 80,  190 => 79,  187 => 78,  184 => 77,  181 => 76,  178 => 75,  176 => 74,  173 => 73,  171 => 72,  168 => 71,  165 => 70,  161 => 69,  155 => 66,  145 => 65,  142 => 64,  132 => 59,  128 => 58,  118 => 57,  115 => 56,  113 => 55,  110 => 54,  107 => 53,  104 => 52,  101 => 51,  99 => 50,  96 => 49,  93 => 48,  90 => 47,  87 => 46,  85 => 45,  82 => 44,  79 => 43,  75 => 42,  69 => 41,  59 => 34,  55 => 33,  45 => 26,  42 => 25,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Component/Layout/nav_bar.html.twig", "/home/sheridantools/public_html/src/PrestaShopBundle/Resources/views/Admin/Component/Layout/nav_bar.html.twig");
    }
}
