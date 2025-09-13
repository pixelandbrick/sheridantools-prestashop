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

/* @PrestaShop/Admin/Layout/login_layout.html.twig */
class __TwigTemplate_c078a1b95761f16218bd8954a2f88be7 extends Template
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
            'javascrips' => [$this, 'block_javascrips'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
  ";
        // line 33
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("LoginHeadTag");
        yield "
  ";
        // line 34
        yield from $this->unwrap()->yieldBlock('javascrips', $context, $blocks);
        // line 35
        yield "  ";
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 36
        yield "</head>

<body class=\"lang-";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "isoUser", [], "any", false, false, false, 38), "html", null, true);
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "isRtlLanguage", [], "any", false, false, false, 38)) {
            yield " lang-rtl";
        }
        yield " ps_back-office bootstrap ps-bo-rebrand\">
  <div id=\"login\">
    <div id=\"content\">
      <div id=\"login-panel\">
        <div id=\"login-header\">
          <h1 class=\"text-center mb-0\">
            <img id=\"logo\" src=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "baseImgUrl", [], "any", false, false, false, 44), "html", null, true);
        yield "prestashop@2x.png\" width=\"128\" height=\"auto\" alt=\"PrestaShop\" />
          </h1>
        </div>

        <div id=\"login-content-card\" class=\"card\">
          <div id=\"shop-img\">
            <img src=\"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "baseImgUrl", [], "any", false, false, false, 50), "html", null, true);
        yield "prestashop@2x.png\" alt=\"{\$shop_name}\" width=\"200\" height=\"22\" />
          </div>

          <div class=\"card-body\">
            ";
        // line 54
        yield from $this->unwrap()->yieldBlock('session_alert', $context, $blocks);
        // line 93
        yield "            ";
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 94
        yield "          </div>
        </div>

        <a class='login-back' href='";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "baseUrl", [], "any", false, false, false, 97), "html", null, true);
        yield "'>
          <i class=\"material-icons rtl-flip\">arrow_back</i>
          <span>";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back to", [], "Admin.Actions"), "html", null, true);
        yield "</span>
          <span class=\"login-back-shop\">";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["shopName"] ?? null), "html", null, true);
        yield "</span>
        </a>

        ";
        // line 103
        yield $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayAdminLogin");
        yield "

        <div id=\"login-footer\">
          <div class=\"login__copy text-center text-muted\">
            <a href=\"https://www.prestashop-project.org\" onclick=\"return !window.open(this.href);\">
              &copy; PrestaShop&#8482; 2007-";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " - All rights reserved
            </a>
          </div>

          <div class=\"login__social text-center\">
            <a class=\"link-social link-twitter _blank\" target=\"_blank\" href=\"https://x.com/PrestaShop\" title=\"X\">
              ";
        // line 114
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ux:icon", ["name" => "bi:twitter-x", "height" => "16", "width" => "16", "aria-hidden" => "true"]);
        yield "
            </a>
            <a class=\"link-social link-facebook _blank\" target=\"_blank\" href=\"https://www.facebook.com/prestashop\" title=\"Facebook\">
              ";
        // line 117
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ux:icon", ["name" => "bi:facebook", "height" => "16", "width" => "16", "aria-hidden" => "true"]);
        yield "
            </a>
            <a class=\"link-social link-github _blank\" target=\"_blank\" href=\"https://github.com/PrestaShop/PrestaShop\" title=\"Github\">
              ";
        // line 120
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ux:icon", ["name" => "bi:github", "height" => "16", "width" => "16", "aria-hidden" => "true"]);
        yield "
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
";
        yield from [];
    }

    // line 34
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascrips(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 35
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 54
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_session_alert(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 55
        yield "              ";
        // line 75
        yield "              ";
        $macros["layout"] = $this;
        // line 76
        yield "
              ";
        // line 77
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 77), "flashbag", [], "any", false, false, false, 77), "peek", ["error"], "method", false, false, false, 77)) > 0)) {
            // line 78
            yield "                ";
            yield $macros["layout"]->getTemplateForMacro("macro_alert", $context, 78, $this->getSourceContext())->macro_alert(...["danger", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 78), "flashbag", [], "any", false, false, false, 78), "get", ["error"], "method", false, false, false, 78)]);
            yield "
              ";
        }
        // line 80
        yield "              ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 80), "flashbag", [], "any", false, false, false, 80), "peek", ["failure"], "method", false, false, false, 80)) > 0)) {
            // line 81
            yield "                ";
            yield $macros["layout"]->getTemplateForMacro("macro_alert", $context, 81, $this->getSourceContext())->macro_alert(...["danger", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 81), "flashbag", [], "any", false, false, false, 81), "get", ["failure"], "method", false, false, false, 81)]);
            yield "
              ";
        }
        // line 83
        yield "              ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 83), "flashbag", [], "any", false, false, false, 83), "peek", ["success"], "method", false, false, false, 83)) > 0)) {
            // line 84
            yield "                ";
            yield $macros["layout"]->getTemplateForMacro("macro_alert", $context, 84, $this->getSourceContext())->macro_alert(...["success", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 84), "flashbag", [], "any", false, false, false, 84), "get", ["success"], "method", false, false, false, 84)]);
            yield "
              ";
        }
        // line 86
        yield "              ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 86), "flashbag", [], "any", false, false, false, 86), "peek", ["warning"], "method", false, false, false, 86)) > 0)) {
            // line 87
            yield "                ";
            yield $macros["layout"]->getTemplateForMacro("macro_alert", $context, 87, $this->getSourceContext())->macro_alert(...["warning", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 87), "flashbag", [], "any", false, false, false, 87), "get", ["warning"], "method", false, false, false, 87)]);
            yield "
              ";
        }
        // line 89
        yield "              ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 89), "flashbag", [], "any", false, false, false, 89), "peek", ["info"], "method", false, false, false, 89)) > 0)) {
            // line 90
            yield "                ";
            yield $macros["layout"]->getTemplateForMacro("macro_alert", $context, 90, $this->getSourceContext())->macro_alert(...["info", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 90), "flashbag", [], "any", false, false, false, 90), "get", ["info"], "method", false, false, false, 90)]);
            yield "
              ";
        }
        // line 92
        yield "            ";
        yield from [];
    }

    // line 93
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 55
    public function macro_alert($type = null, $flashbagContent = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "type" => $type,
            "flashbagContent" => $flashbagContent,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 56
            yield "                <div class=\"alert alert-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["type"] ?? null), "html", null, true);
            yield " d-print-none\" role=\"alert\">
                  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                    <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
                  </button>
                  ";
            // line 60
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["flashbagContent"] ?? null)) > 1)) {
                // line 61
                yield "                    <ul class=\"alert-text\">
                      ";
                // line 62
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["flashbagContent"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                    // line 63
                    yield "                        <li>";
                    yield $context["flashMessage"];
                    yield "</li>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['flashMessage'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 65
                yield "                    </ul>
                  ";
            } else {
                // line 67
                yield "                    <div class=\"alert-text\">
                      ";
                // line 68
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["flashbagContent"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                    // line 69
                    yield "                        <p>";
                    yield $context["flashMessage"];
                    yield "</p>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['flashMessage'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 71
                yield "                    </div>
                  ";
            }
            // line 73
            yield "                </div>
              ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Layout/login_layout.html.twig";
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
        return array (  325 => 73,  321 => 71,  312 => 69,  308 => 68,  305 => 67,  301 => 65,  292 => 63,  288 => 62,  285 => 61,  283 => 60,  275 => 56,  262 => 55,  252 => 93,  247 => 92,  241 => 90,  238 => 89,  232 => 87,  229 => 86,  223 => 84,  220 => 83,  214 => 81,  211 => 80,  205 => 78,  203 => 77,  200 => 76,  197 => 75,  195 => 55,  188 => 54,  178 => 35,  168 => 34,  154 => 120,  148 => 117,  142 => 114,  133 => 108,  125 => 103,  119 => 100,  115 => 99,  110 => 97,  105 => 94,  102 => 93,  100 => 54,  93 => 50,  84 => 44,  72 => 38,  68 => 36,  65 => 35,  63 => 34,  59 => 33,  53 => 30,  46 => 25,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Layout/login_layout.html.twig", "/home/sheridantools/public_html/src/PrestaShopBundle/Resources/views/Admin/Layout/login_layout.html.twig");
    }
}
