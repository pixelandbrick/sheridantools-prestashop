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

/* @PrestaShop/Admin/layout.html.twig */
class __TwigTemplate_dcfe2b505b4b17c5a486ad1089a5a166 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
            'content_header' => [$this, 'block_content_header'],
            'session_alert' => [$this, 'block_session_alert'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 30
        return $this->loadTemplate(((($context["lightDisplay"] ?? null)) ? ("@PrestaShop/Admin/Layout/light_layout.html.twig") : ("@PrestaShop/Admin/Layout/default_layout.html.twig")), "@PrestaShop/Admin/layout.html.twig", 30);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 25
        $context["lightDisplay"] = ((array_key_exists("lightDisplay", $context)) ? (($context["lightDisplay"] ?? null)) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 25), "query", [], "any", false, false, false, 25), "get", ["liteDisplaying", false], "method", false, false, false, 25)));
        // line 26
        $context["showContentHeader"] = ((array_key_exists("showContentHeader", $context)) ? (($context["showContentHeader"] ?? null)) : (true));
        // line 27
        $context["layoutHeaderToolbarBtn"] = ((array_key_exists("layoutHeaderToolbarBtn", $context)) ? (($context["layoutHeaderToolbarBtn"] ?? null)) : ([]));
        // line 28
        $context["metaTitle"] = ((array_key_exists("meta_title", $context)) ? (($context["meta_title"] ?? null)) : (((array_key_exists("layoutTitle", $context)) ? (($context["layoutTitle"] ?? null)) : (""))));
        // line 30
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 32
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 33
        yield "  <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/js/bundle/default.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/js/bundle/right-sidebar.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/form_popover_error.bundle.js"), "html", null, true);
        yield "\"></script>
";
        yield from [];
    }

    // line 38
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_translate_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 39
        yield "  <script>
    var translate_javascripts = ";
        // line 40
        yield json_encode(($context["js_translatable"] ?? null));
        yield ";
    var PS_ALLOW_ACCENTED_CHARS_URL = ";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PrestaShopBundle\Twig\DataFormatterExtension']->intCast($this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getConfiguration("PS_ALLOW_ACCENTED_CHARS_URL")), "html", null, true);
        yield ";
  </script>
";
        yield from [];
    }

    // line 45
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 46
        yield "  ";
        yield from         $this->unwrap()->yieldBlock("session_alert", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 49
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_session_alert(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 50
        yield "  ";
        // line 70
        yield "  ";
        $macros["layout"] = $this;
        // line 71
        yield "
  ";
        // line 72
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 72), "flashbag", [], "any", false, false, false, 72), "peek", ["error"], "method", false, false, false, 72)) > 0)) {
            // line 73
            yield "    ";
            yield $macros["layout"]->getTemplateForMacro("macro_alert", $context, 73, $this->getSourceContext())->macro_alert(...["danger", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 73), "flashbag", [], "any", false, false, false, 73), "get", ["error"], "method", false, false, false, 73)]);
            yield "
  ";
        }
        // line 75
        yield "  ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 75), "flashbag", [], "any", false, false, false, 75), "peek", ["failure"], "method", false, false, false, 75)) > 0)) {
            // line 76
            yield "    ";
            yield $macros["layout"]->getTemplateForMacro("macro_alert", $context, 76, $this->getSourceContext())->macro_alert(...["danger", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 76), "flashbag", [], "any", false, false, false, 76), "get", ["failure"], "method", false, false, false, 76)]);
            yield "
  ";
        }
        // line 78
        yield "  ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 78), "flashbag", [], "any", false, false, false, 78), "peek", ["success"], "method", false, false, false, 78)) > 0)) {
            // line 79
            yield "    ";
            yield $macros["layout"]->getTemplateForMacro("macro_alert", $context, 79, $this->getSourceContext())->macro_alert(...["success", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 79), "flashbag", [], "any", false, false, false, 79), "get", ["success"], "method", false, false, false, 79)]);
            yield "
  ";
        }
        // line 81
        yield "  ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 81), "flashbag", [], "any", false, false, false, 81), "peek", ["warning"], "method", false, false, false, 81)) > 0)) {
            // line 82
            yield "    ";
            yield $macros["layout"]->getTemplateForMacro("macro_alert", $context, 82, $this->getSourceContext())->macro_alert(...["warning", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 82), "flashbag", [], "any", false, false, false, 82), "get", ["warning"], "method", false, false, false, 82)]);
            yield "
  ";
        }
        // line 84
        yield "  ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 84), "flashbag", [], "any", false, false, false, 84), "peek", ["info"], "method", false, false, false, 84)) > 0)) {
            // line 85
            yield "    ";
            yield $macros["layout"]->getTemplateForMacro("macro_alert", $context, 85, $this->getSourceContext())->macro_alert(...["info", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 85), "flashbag", [], "any", false, false, false, 85), "get", ["info"], "method", false, false, false, 85)]);
            yield "
  ";
        }
        yield from [];
    }

    // line 89
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar_right(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 90
        yield "  <nav
    id=\"right-sidebar\"
    role=\"navigation\"
    class=\"col-lg-3 sidebar sidebar-right sidebar-animate text-sm-center\"
  >
    <img
      src=\"";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/img/bundle/dashboard_loading.gif"), "html", null, true);
        yield "\"
      style=\"margin-top: 10em;\" alt=\"";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Loading...", [], "Admin.Global"), "html", null, true);
        yield "\"
    />
  </nav>
";
        yield from [];
    }

    // line 50
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
            // line 51
            yield "    <div class=\"alert alert-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["type"] ?? null), "html", null, true);
            yield " d-print-none\" role=\"alert\">
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
        <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
      </button>
      ";
            // line 55
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["flashbagContent"] ?? null)) > 1)) {
                // line 56
                yield "        <ul class=\"alert-text\">
          ";
                // line 57
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["flashbagContent"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                    // line 58
                    yield "            <li>";
                    yield $context["flashMessage"];
                    yield "</li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['flashMessage'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 60
                yield "        </ul>
      ";
            } else {
                // line 62
                yield "        <div class=\"alert-text\">
          ";
                // line 63
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["flashbagContent"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                    // line 64
                    yield "            <p>";
                    yield $context["flashMessage"];
                    yield "</p>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['flashMessage'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 66
                yield "        </div>
      ";
            }
            // line 68
            yield "    </div>
  ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/layout.html.twig";
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
        return array (  276 => 68,  272 => 66,  263 => 64,  259 => 63,  256 => 62,  252 => 60,  243 => 58,  239 => 57,  236 => 56,  234 => 55,  226 => 51,  213 => 50,  204 => 97,  200 => 96,  192 => 90,  185 => 89,  176 => 85,  173 => 84,  167 => 82,  164 => 81,  158 => 79,  155 => 78,  149 => 76,  146 => 75,  140 => 73,  138 => 72,  135 => 71,  132 => 70,  130 => 50,  123 => 49,  115 => 46,  108 => 45,  100 => 41,  96 => 40,  93 => 39,  86 => 38,  79 => 35,  75 => 34,  70 => 33,  63 => 32,  59 => 30,  57 => 28,  55 => 27,  53 => 26,  51 => 25,  44 => 30,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/layout.html.twig", "/home/sheridantools/public_html/src/PrestaShopBundle/Resources/views/Admin/layout.html.twig");
    }
}
