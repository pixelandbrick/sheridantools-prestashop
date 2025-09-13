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

/* @PrestaShop/Admin/Login/form_theme.html.twig */
class __TwigTemplate_81b9a0d5fa6973c214ad4ebe36aa2499 extends Template
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

        // line 25
        $_trait_0 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", "@PrestaShop/Admin/Login/form_theme.html.twig", 25);
        if (!$_trait_0->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig".'" cannot be used as a trait.', 25, $this->source);
        }
        $_trait_0_blocks = $_trait_0->unwrap()->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'submit_row' => [$this, 'block_submit_row'],
                'checkbox_row' => [$this, 'block_checkbox_row'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 26
        yield "
";
        // line 28
        yield from $this->unwrap()->yieldBlock('submit_row', $context, $blocks);
        // line 33
        yield "
";
        // line 34
        yield from $this->unwrap()->yieldBlock('checkbox_row', $context, $blocks);
        yield from [];
    }

    // line 28
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_submit_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 29
        yield "<div class=\"form-group";
        yield from         $this->unwrap()->yieldBlock("widget_type_class", $context, $blocks);
        if ((((array_key_exists("force_error", $context)) ? (Twig\Extension\CoreExtension::default(($context["force_error"] ?? null), false)) : (false)) &&  !($context["valid"] ?? null))) {
            yield " has-error";
        }
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 29)) {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 29), "html", null, true);
        }
        yield "\">";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 31
        yield "</div>
";
        yield from [];
    }

    // line 34
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_checkbox_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 35
        yield "  <div class=\"form-group";
        yield from         $this->unwrap()->yieldBlock("widget_type_class", $context, $blocks);
        if ((((array_key_exists("force_error", $context)) ? (Twig\Extension\CoreExtension::default(($context["force_error"] ?? null), false)) : (false)) &&  !($context["valid"] ?? null))) {
            yield " has-error";
        }
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 35)) {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 35), "html", null, true);
        }
        yield "\">";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 37
        yield from         $this->unwrap()->yieldBlock("form_external_link", $context, $blocks);
        // line 38
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Login/form_theme.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  117 => 38,  115 => 37,  113 => 36,  102 => 35,  95 => 34,  89 => 31,  87 => 30,  76 => 29,  69 => 28,  64 => 34,  61 => 33,  59 => 28,  56 => 26,  35 => 25,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Login/form_theme.html.twig", "/home/sheridantools/public_html/src/PrestaShopBundle/Resources/views/Admin/Login/form_theme.html.twig");
    }
}
