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

/* @PrestaShop/Admin/Component/LegacyLayout/session_alert.html.twig */
class __TwigTemplate_da9e9e6e627530e56833f5c0ee92a868 extends Template
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
        yield "
";
        // line 26
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "confirmationMessage", [], "any", false, false, false, 26))) {
            // line 27
            yield "<div class=\"bootstrap\">
  <div class=\"alert alert-success\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    ";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "confirmationMessage", [], "any", false, false, false, 30), "html", null, true);
            yield "
  </div>
</div>
";
        }
        // line 34
        yield "
";
        // line 35
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "errorMessage", [], "any", false, false, false, 35))) {
            // line 36
            yield "<div class=\"bootstrap\">
  <div class=\"alert alert-danger\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    ";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "errorMessage", [], "any", false, false, false, 39), "html", null, true);
            yield "
  </div>
</div>
";
        }
        // line 43
        yield "
";
        // line 44
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "errors", [], "any", false, false, false, 44))) {
            // line 45
            yield "<div class=\"bootstrap\">
  <div class=\"alert alert-danger\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    ";
            // line 48
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "errors", [], "any", false, false, false, 48)) == 1)) {
                // line 49
                yield "      ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "errors", [], "any", false, false, false, 49)), "html", null, true);
                yield "
    ";
            } else {
                // line 51
                yield "      ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("There are %d errors.", ["%d" => Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "errors", [], "any", false, false, false, 51))], "Admin.Notifications.Error"), "html", null, true);
                yield "
      <br/>
      <ol>
        ";
                // line 54
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "errors", [], "any", false, false, false, 54));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 55
                    yield "        <li>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["error"], "html", null, true);
                    yield "</li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                yield "      </ol>
    ";
            }
            // line 59
            yield "  </div>
</div>
";
        }
        // line 62
        yield "
";
        // line 63
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "informations", [], "any", false, false, false, 63))) {
            // line 64
            yield "<div class=\"bootstrap\">
  <div class=\"alert alert-info\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    <ul id=\"infos_block\" class=\"list-unstyled\">
      ";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "informations", [], "any", false, false, false, 68));
            foreach ($context['_seq'] as $context["_key"] => $context["info"]) {
                // line 69
                yield "      <li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["info"], "html", null, true);
                yield "</li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['info'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            yield "    </ul>
  </div>
</div>
";
        }
        // line 75
        yield "
";
        // line 76
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "confirmations", [], "any", false, false, false, 76))) {
            // line 77
            yield "<div class=\"bootstrap\">
  <div class=\"alert alert-success\" style=\"display:block;\">
    ";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "confirmations", [], "any", false, false, false, 79));
            foreach ($context['_seq'] as $context["_key"] => $context["confirmation"]) {
                // line 80
                yield "    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["confirmation"], "html", null, true);
                yield "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['confirmation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            yield "  </div>
</div>
";
        }
        // line 85
        yield "
";
        // line 86
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "warnings", [], "any", false, false, false, 86))) {
            // line 87
            yield "<div class=\"bootstrap\">
  <div class=\"alert alert-warning\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    ";
            // line 90
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "warnings", [], "any", false, false, false, 90)) > 1)) {
                // line 91
                yield "    <h4>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("There are %d warnings:", ["%d" => Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "warnings", [], "any", false, false, false, 91))]), "html", null, true);
                yield "</h4>
    ";
            }
            // line 93
            yield "    <ul class=\"list-unstyled\">
      ";
            // line 94
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "warnings", [], "any", false, false, false, 94));
            foreach ($context['_seq'] as $context["_key"] => $context["warning"]) {
                // line 95
                yield "      <li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["warning"], "html", null, true);
                yield "</li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['warning'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            yield "    </ul>
  </div>
</div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Component/LegacyLayout/session_alert.html.twig";
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
        return array (  214 => 97,  205 => 95,  201 => 94,  198 => 93,  192 => 91,  190 => 90,  185 => 87,  183 => 86,  180 => 85,  175 => 82,  166 => 80,  162 => 79,  158 => 77,  156 => 76,  153 => 75,  147 => 71,  138 => 69,  134 => 68,  128 => 64,  126 => 63,  123 => 62,  118 => 59,  114 => 57,  105 => 55,  101 => 54,  94 => 51,  88 => 49,  86 => 48,  81 => 45,  79 => 44,  76 => 43,  69 => 39,  64 => 36,  62 => 35,  59 => 34,  52 => 30,  47 => 27,  45 => 26,  42 => 25,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Component/LegacyLayout/session_alert.html.twig", "/home/sheridantools/public_html/src/PrestaShopBundle/Resources/views/Admin/Component/LegacyLayout/session_alert.html.twig");
    }
}
