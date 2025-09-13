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

/* @PrestaShop/Admin/Component/LoginLayout/head_tag.html.twig */
class __TwigTemplate_782a65c74e0c421334ba0cf9c94961c2 extends Template
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
            'headJavascripts' => [$this, 'block_headJavascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 25
        yield "<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "imgDir", [], "any", false, false, false, 30), "html", null, true);
        yield "favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "imgDir", [], "any", false, false, false, 31), "html", null, true);
        yield "app_icon.png\" />
<title>";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "shopName", [], "any", false, false, false, 32), "html", null, true);
        yield "</title>

";
        // line 34
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@AdminNewTheme/public/preload.html.twig");
        yield "

";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "cssFiles", [], "any", false, false, false, 36));
        foreach ($context['_seq'] as $context["css_uri"] => $context["css_media"]) {
            // line 37
            yield "  <link href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["css_uri"], "html", null, true);
            yield "\" rel=\"stylesheet\" type=\"text/css\" media=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["css_media"], "html", null, true);
            yield "\"/>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['css_uri'], $context['css_media'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        yield "
";
        // line 40
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "jsDef", [], "any", false, false, false, 40)) {
            // line 41
            yield "  <script type=\"text/javascript\">
    ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "jsDef", [], "any", false, false, false, 42));
            foreach ($context['_seq'] as $context["k"] => $context["def"]) {
                // line 43
                yield "    var ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"], "html", null, true);
                yield " = ";
                yield json_encode($context["def"]);
                yield ";
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['k'], $context['def'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            yield "  </script>
";
        }
        // line 47
        yield "
";
        // line 48
        yield from $this->unwrap()->yieldBlock('headJavascripts', $context, $blocks);
        // line 49
        yield "
";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "jsFiles", [], "any", false, false, false, 50));
        foreach ($context['_seq'] as $context["_key"] => $context["js_uri"]) {
            // line 51
            yield "  <script type=\"text/javascript\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["js_uri"], "html", null, true);
            yield "\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['js_uri'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        yield "
";
        // line 54
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "isRtlLanguage", [], "any", false, false, false, 54)) {
            // line 55
            yield "  <link rel=\"stylesheet\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/theme_rtl.css"), "html", null, true);
            yield "\" media=\"all\">
  <link rel=\"stylesheet\" href=\"";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/rtl.css"), "html", null, true);
            yield "\" media=\"all\">
";
        } else {
            // line 58
            yield "  <link rel=\"stylesheet\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/theme.css"), "html", null, true);
            yield "\" media=\"all\">
";
        }
        // line 60
        yield "<link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/login.css"), "html", null, true);
        yield "\" media=\"all\">
<script src=\"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/login_form.bundle.js"), "html", null, true);
        yield "\"></script>
";
        yield from [];
    }

    // line 48
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headJavascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Component/LoginLayout/head_tag.html.twig";
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
        return array (  164 => 48,  157 => 61,  152 => 60,  146 => 58,  141 => 56,  136 => 55,  134 => 54,  131 => 53,  122 => 51,  118 => 50,  115 => 49,  113 => 48,  110 => 47,  106 => 45,  95 => 43,  91 => 42,  88 => 41,  86 => 40,  83 => 39,  72 => 37,  68 => 36,  63 => 34,  58 => 32,  54 => 31,  50 => 30,  43 => 25,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Component/LoginLayout/head_tag.html.twig", "/home/sheridantools/public_html/src/PrestaShopBundle/Resources/views/Admin/Component/LoginLayout/head_tag.html.twig");
    }
}
