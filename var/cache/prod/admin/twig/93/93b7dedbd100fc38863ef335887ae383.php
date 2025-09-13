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

/* @PrestaShop/Admin/TwigTemplateForm/material.html.twig */
class __TwigTemplate_0336a1d30110258e425020ce4f7c5387 extends Template
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
            'material_choice_tree_widget' => [$this, 'block_material_choice_tree_widget'],
            'material_choice_tree_item_widget' => [$this, 'block_material_choice_tree_item_widget'],
            'material_choice_tree_item_checkbox_widget' => [$this, 'block_material_choice_tree_item_checkbox_widget'],
            'material_choice_tree_item_radio_widget' => [$this, 'block_material_choice_tree_item_radio_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 25
        yield "
";
        // line 26
        yield from $this->unwrap()->yieldBlock('material_choice_tree_widget', $context, $blocks);
        // line 50
        yield "
";
        // line 51
        yield from $this->unwrap()->yieldBlock('material_choice_tree_item_widget', $context, $blocks);
        // line 71
        yield "
";
        // line 72
        yield from $this->unwrap()->yieldBlock('material_choice_tree_item_checkbox_widget', $context, $blocks);
        // line 90
        yield "
";
        // line 91
        yield from $this->unwrap()->yieldBlock('material_choice_tree_item_radio_widget', $context, $blocks);
        yield from [];
    }

    // line 26
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_material_choice_tree_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 27
        yield "  <div class=\"material-choice-tree-container js-choice-tree-container";
        if (($context["required"] ?? null)) {
            yield " required";
        }
        yield "\" id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 27), "id", [], "any", false, false, false, 27), "html", null, true);
        yield "\">
    <div class=\"choice-tree-actions\">
      <span class=\"form-control-label js-toggle-choice-tree-action\"
            data-expanded-text=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Expand", [], "Admin.Actions"), "html", null, true);
        yield "\"
            data-expanded-icon=\"expand_more\"
            data-collapsed-text=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Collapse", [], "Admin.Actions"), "html", null, true);
        yield "\"
            data-collapsed-icon=\"expand_less\"
            data-action=\"expand\"
      >
        <i class=\"material-icons\">expand_more</i>
        <span class=\"js-toggle-text\">";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Expand", [], "Admin.Actions"), "html", null, true);
        yield "</span>
      </span>
    </div>

    <ul class=\"choice-tree\">
      ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["choices_tree"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
            // line 43
            yield "        ";
            yield from             $this->unwrap()->yieldBlock("material_choice_tree_item_widget", $context, $blocks);
            yield "
      ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "    </ul>
  </div>";
        // line 48
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        yield from [];
    }

    // line 51
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_material_choice_tree_item_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 52
        yield "  ";
        $context["has_children"] = CoreExtension::getAttribute($this->env, $this->source, ($context["choice"] ?? null), ($context["choice_children"] ?? null), [], "array", true, true, false, 52);
        // line 53
        yield "
  <li class=\"";
        // line 54
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["choice"] ?? null), "has_selected_children", [], "any", false, false, false, 54)) {
            yield "expanded";
        } elseif (($context["has_children"] ?? null)) {
            yield "collapsed";
        }
        yield "\">
    ";
        // line 55
        if (($context["multiple"] ?? null)) {
            // line 56
            yield "      ";
            yield from             $this->unwrap()->yieldBlock("material_choice_tree_item_checkbox_widget", $context, $blocks);
            yield "
    ";
        } else {
            // line 58
            yield "      ";
            yield from             $this->unwrap()->yieldBlock("material_choice_tree_item_radio_widget", $context, $blocks);
            yield "
    ";
        }
        // line 60
        yield "
    ";
        // line 61
        if (($context["has_children"] ?? null)) {
            // line 62
            yield "      <ul>
        ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((($_v0 = ($context["choice"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[($context["choice_children"] ?? null)] ?? null) : null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 64
                yield "          ";
                $context["choice"] = $context["item"];
                // line 65
                yield "          ";
                yield from                 $this->unwrap()->yieldBlock("material_choice_tree_item_widget", $context, $blocks);
                yield "
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            yield "      </ul>
    ";
        }
        // line 69
        yield "  </li>
";
        yield from [];
    }

    // line 72
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_material_choice_tree_item_checkbox_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 73
        yield "  <div class=\"checkbox js-input-wrapper\">
    <div class=\"md-checkbox md-checkbox-inline\">
      <label>
        <input type=\"checkbox\"
         ";
        // line 77
        if ( !(null === (($_v1 = ($context["choice"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[($context["choice_value"] ?? null)] ?? null) : null))) {
            // line 78
            yield "           name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 78), "full_name", [], "any", false, false, false, 78), "html", null, true);
            yield "[]\"
           value=\"";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v2 = ($context["choice"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[($context["choice_value"] ?? null)] ?? null) : null), "html", null, true);
            yield "\"
           ";
            // line 80
            if (CoreExtension::inFilter((($_v3 = ($context["choice"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[($context["choice_value"] ?? null)] ?? null) : null), ($context["selected_values"] ?? null))) {
                yield "checked";
            }
            // line 81
            yield "         ";
        }
        // line 82
        yield "         ";
        if ((($context["disabled"] ?? null) || CoreExtension::inFilter((($_v4 = ($context["choice"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[($context["choice_value"] ?? null)] ?? null) : null), ($context["disabled_values"] ?? null)))) {
            yield "disabled";
        }
        // line 83
        yield "        >
        <i class=\"md-checkbox-control\"></i>
        ";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v5 = ($context["choice"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5[($context["choice_label"] ?? null)] ?? null) : null), "html", null, true);
        yield "
      </label>
    </div>
  </div>
";
        yield from [];
    }

    // line 91
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_material_choice_tree_item_radio_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 92
        yield "  <div class=\"radio js-input-wrapper form-check form-check-radio\">
    <label class=\"form-check-label\">
      <input type=\"radio\"
       name=\"";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 95), "full_name", [], "any", false, false, false, 95), "html", null, true);
        yield "\"
       value=\"";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v6 = ($context["choice"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6[($context["choice_value"] ?? null)] ?? null) : null), "html", null, true);
        yield "\"
       ";
        // line 97
        if (CoreExtension::inFilter((($_v7 = ($context["choice"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7[($context["choice_value"] ?? null)] ?? null) : null), ($context["selected_values"] ?? null))) {
            yield "checked";
        }
        // line 98
        yield "       ";
        if ((($context["disabled"] ?? null) || CoreExtension::inFilter((($_v8 = ($context["choice"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8[($context["choice_value"] ?? null)] ?? null) : null), ($context["disabled_values"] ?? null)))) {
            yield "disabled";
        }
        // line 99
        yield "       ";
        if (($context["required"] ?? null)) {
            yield "required";
        }
        // line 100
        yield "      >
      <i class=\"form-check-round\"></i>
      ";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v9 = ($context["choice"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9[($context["choice_label"] ?? null)] ?? null) : null), "html", null, true);
        yield "
    </label>
  </div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/TwigTemplateForm/material.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  328 => 102,  324 => 100,  319 => 99,  314 => 98,  310 => 97,  306 => 96,  302 => 95,  297 => 92,  290 => 91,  280 => 85,  276 => 83,  271 => 82,  268 => 81,  264 => 80,  260 => 79,  255 => 78,  253 => 77,  247 => 73,  240 => 72,  234 => 69,  230 => 67,  213 => 65,  210 => 64,  193 => 63,  190 => 62,  188 => 61,  185 => 60,  179 => 58,  173 => 56,  171 => 55,  163 => 54,  160 => 53,  157 => 52,  150 => 51,  145 => 48,  142 => 45,  125 => 43,  108 => 42,  100 => 37,  92 => 32,  87 => 30,  76 => 27,  69 => 26,  64 => 91,  61 => 90,  59 => 72,  56 => 71,  54 => 51,  51 => 50,  49 => 26,  46 => 25,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/TwigTemplateForm/material.html.twig", "/home/sheridantools/public_html/src/PrestaShopBundle/Resources/views/Admin/TwigTemplateForm/material.html.twig");
    }
}
