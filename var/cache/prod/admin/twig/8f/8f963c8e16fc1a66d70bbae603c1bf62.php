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

/* @PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig */
class __TwigTemplate_28c354b7fe0e8063b219507f8979dc38 extends Template
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

        // line 37
        $_trait_0 = $this->loadTemplate("bootstrap_4_horizontal_layout.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig", 37);
        if (!$_trait_0->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_4_horizontal_layout.html.twig".'" cannot be used as a trait.', 37, $this->source);
        }
        $_trait_0_blocks = $_trait_0->unwrap()->getBlocks();

        // line 38
        $_trait_1 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig", 38);
        if (!$_trait_1->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig".'" cannot be used as a trait.', 38, $this->source);
        }
        $_trait_1_blocks = $_trait_1->unwrap()->getBlocks();

        $this->traits = array_merge(
            $_trait_0_blocks,
            $_trait_1_blocks
        );

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_start' => [$this, 'block_form_start'],
                'form_label' => [$this, 'block_form_label'],
                'form_label_class' => [$this, 'block_form_label_class'],
                'form_row' => [$this, 'block_form_row'],
                'form_group_class' => [$this, 'block_form_group_class'],
                'form_row_class' => [$this, 'block_form_row_class'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 25
        yield "
";
        // line 36
        yield "
";
        // line 39
        yield "
";
        // line 41
        yield "
";
        // line 42
        yield from $this->unwrap()->yieldBlock('form_start', $context, $blocks);
        // line 46
        yield "
";
        // line 48
        yield "
";
        // line 49
        yield from $this->unwrap()->yieldBlock('form_label', $context, $blocks);
        // line 61
        yield "
";
        // line 62
        yield from $this->unwrap()->yieldBlock('form_label_class', $context, $blocks);
        // line 65
        yield "
";
        // line 67
        yield "
";
        // line 68
        yield from $this->unwrap()->yieldBlock('form_row', $context, $blocks);
        // line 135
        yield "
";
        // line 136
        yield from $this->unwrap()->yieldBlock('form_group_class', $context, $blocks);
        // line 139
        yield "
";
        // line 140
        yield from $this->unwrap()->yieldBlock('form_row_class', $context, $blocks);
        yield from [];
    }

    // line 42
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_start(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 43
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 43)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 43), "")) : ("")) . " form-horizontal"))]);
        // line 44
        yield from $this->yieldParentBlock("form_start", $context, $blocks);
        yield from [];
    }

    // line 49
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 50
        $_v0 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 51
            yield "    ";
            if ((($context["label"] ?? null) === null)) {
                // line 52
                yield "      <div class=\"";
                yield from                 $this->unwrap()->yieldBlock("form_label_class", $context, $blocks);
                yield "\"></div>
    ";
            } elseif ((            // line 53
($context["label"] ?? null) === false)) {
                // line 54
                yield "      ";
                // line 55
                yield "    ";
            } else {
                // line 56
                yield "      ";
                $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim(((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 56)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 56), "")) : ("")) . " ") .                 $this->unwrap()->renderBlock("form_label_class", $context, $blocks)))]);
                // line 57
                yield from $this->yieldParentBlock("form_label", $context, $blocks);
            }
            // line 59
            yield "  ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 50
        yield Twig\Extension\CoreExtension::spaceless($_v0);
        yield from [];
    }

    // line 62
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_label_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 63
        yield "form-control-label";
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 63), "attr", [], "any", false, true, false, 63), "disabled", [], "any", true, true, false, 63) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 63), "attr", [], "any", false, false, false, 63), "disabled", [], "any", false, false, false, 63)) || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 63), "disabled", [], "any", true, true, false, 63) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 63), "disabled", [], "any", false, false, false, 63)))) {
            yield " disabled";
        }
        yield from [];
    }

    // line 68
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 69
        $_v1 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 70
            yield "    ";
            // line 71
            yield "    ";
            if (array_key_exists("label_tag_name", $context)) {
                // line 72
                yield "      ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
                yield "
    ";
            }
            // line 74
            yield "
    ";
            // line 75
            $macros["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig", 75)->unwrap();
            // line 76
            yield "    ";
            $context["disabledField"] = false;
            // line 77
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 77), "attr", [], "any", false, true, false, 77), "disabled", [], "any", true, true, false, 77) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 77), "attr", [], "any", false, false, false, 77), "disabled", [], "any", false, false, false, 77))) {
                // line 78
                yield "      ";
                $context["disabledField"] = true;
                // line 79
                yield "    ";
            }
            // line 80
            yield "
    ";
            // line 81
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 81), "external_link", [], "any", true, true, false, 81)) {
                // line 82
                yield "        ";
                $context["externalLink"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 82), "external_link", [], "any", false, false, false, 82);
                // line 83
                yield "        ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["externalLink"] ?? null), "position", [], "any", true, true, false, 83)) {
                    // line 84
                    yield "            ";
                    $context["position"] = CoreExtension::getAttribute($this->env, $this->source, ($context["externalLink"] ?? null), "position", [], "any", false, false, false, 84);
                    // line 85
                    yield "        ";
                } else {
                    // line 86
                    yield "            ";
                    $context["position"] = "append";
                    // line 87
                    yield "        ";
                }
                // line 88
                yield "    ";
            } else {
                // line 89
                yield "        ";
                $context["position"] = "append";
                // line 90
                yield "    ";
            }
            // line 91
            yield "
    <div class=\"";
            // line 92
            yield from             $this->unwrap()->yieldBlock("form_row_class", $context, $blocks);
            yield from             $this->unwrap()->yieldBlock("widget_type_class", $context, $blocks);
            if ((( !($context["compound"] ?? null) || ((array_key_exists("force_error", $context)) ? (Twig\Extension\CoreExtension::default(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
                yield " has-error";
            }
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "visible", [], "any", true, true, false, 92) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "visible", [], "any", false, false, false, 92))) {
                yield " d-none";
            }
            yield "\">
      ";
            // line 93
            $context["multistoreCheckboxName"] = (($context["multistore_field_prefix"] ?? null) . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 93), "name", [], "any", false, false, false, 93));
            // line 94
            yield "      ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, true, false, 94), ($context["multistoreCheckboxName"] ?? null), [], "any", true, true, false, 94)) {
                // line 95
                yield "        ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 95), ($context["multistoreCheckboxName"] ?? null), [], "any", false, false, false, 95), 'errors');
                yield "
        ";
                // line 96
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 96), ($context["multistoreCheckboxName"] ?? null), [], "any", false, false, false, 96), 'widget');
                yield "
      ";
            }
            // line 98
            yield "
      ";
            // line 99
            if ((($context["position"] ?? null) == "prepend")) {
                // line 100
                yield "        ";
                if ( !array_key_exists("label_tag_name", $context)) {
                    // line 101
                    yield "        <div class=\"form-control-label flex flex-col items-end\">
            ";
                    // line 102
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
                    // line 103
                    yield from                     $this->unwrap()->yieldBlock("form_external_link", $context, $blocks);
                    // line 104
                    yield "</div>
        ";
                }
                // line 106
                yield "      ";
            } else {
                // line 107
                yield "        ";
                if ( !array_key_exists("label_tag_name", $context)) {
                    // line 108
                    yield "          ";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
                    yield "
        ";
                }
                // line 110
                yield "      ";
            }
            // line 111
            yield "
      <div class=\"";
            // line 112
            yield from             $this->unwrap()->yieldBlock("form_group_class", $context, $blocks);
            if (($context["disabledField"] ?? null)) {
                yield " disabled";
            }
            yield "\">";
            // line 113
            yield from             $this->unwrap()->yieldBlock("form_prepend_alert", $context, $blocks);
            // line 114
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            yield "
        ";
            // line 115
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors', ["attr" => ["fieldError" => true]]);
            // line 116
            yield from             $this->unwrap()->yieldBlock("form_append_alert", $context, $blocks);
            // line 117
            if ((($context["position"] ?? null) == "below")) {
                // line 118
                yield from                 $this->unwrap()->yieldBlock("form_external_link", $context, $blocks);
            }
            // line 120
            yield "      </div>
      ";
            // line 121
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, true, false, 121), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 121), "name", [], "any", false, false, false, 121), [], "any", true, true, false, 121) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 121), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 121), "name", [], "any", false, false, false, 121), [], "any", false, false, false, 121), "vars", [], "any", false, false, false, 121), "multistore_dropdown", [], "any", false, false, false, 121) != false))) {
                // line 122
                yield "        ";
                yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 122), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 122), "name", [], "any", false, false, false, 122), [], "any", false, false, false, 122), "vars", [], "any", false, false, false, 122), "multistore_dropdown", [], "any", false, false, false, 122);
                yield "
      ";
            }
            // line 124
            yield "
      ";
            // line 125
            if ((($context["position"] ?? null) == "append")) {
                // line 126
                yield from                 $this->unwrap()->yieldBlock("form_external_link", $context, $blocks);
            }
            // line 128
            yield "    </div>
  ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 69
        yield Twig\Extension\CoreExtension::spaceless($_v1);
        // line 130
        yield "
  ";
        // line 131
        if (($context["column_breaker"] ?? null)) {
            // line 132
            yield "    <div class=\"form-group form-column-breaker\"></div>
  ";
        }
        yield from [];
    }

    // line 136
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_group_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 137
        yield "col-sm input-container";
        yield from [];
    }

    // line 140
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_row_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 141
        yield "form-group row";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 141)) {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 141), "html", null, true);
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  399 => 141,  392 => 140,  387 => 137,  380 => 136,  373 => 132,  371 => 131,  368 => 130,  366 => 69,  361 => 128,  358 => 126,  356 => 125,  353 => 124,  347 => 122,  345 => 121,  342 => 120,  339 => 118,  337 => 117,  335 => 116,  333 => 115,  329 => 114,  327 => 113,  321 => 112,  318 => 111,  315 => 110,  309 => 108,  306 => 107,  303 => 106,  299 => 104,  297 => 103,  295 => 102,  292 => 101,  289 => 100,  287 => 99,  284 => 98,  279 => 96,  274 => 95,  271 => 94,  269 => 93,  258 => 92,  255 => 91,  252 => 90,  249 => 89,  246 => 88,  243 => 87,  240 => 86,  237 => 85,  234 => 84,  231 => 83,  228 => 82,  226 => 81,  223 => 80,  220 => 79,  217 => 78,  214 => 77,  211 => 76,  209 => 75,  206 => 74,  200 => 72,  197 => 71,  195 => 70,  193 => 69,  186 => 68,  178 => 63,  171 => 62,  166 => 50,  162 => 59,  159 => 57,  156 => 56,  153 => 55,  151 => 54,  149 => 53,  144 => 52,  141 => 51,  139 => 50,  132 => 49,  127 => 44,  125 => 43,  118 => 42,  113 => 140,  110 => 139,  108 => 136,  105 => 135,  103 => 68,  100 => 67,  97 => 65,  95 => 62,  92 => 61,  90 => 49,  87 => 48,  84 => 46,  82 => 42,  79 => 41,  76 => 39,  73 => 36,  70 => 25,  42 => 38,  35 => 37,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig", "/home/sheridantools/public_html/src/PrestaShopBundle/Resources/views/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig");
    }
}
