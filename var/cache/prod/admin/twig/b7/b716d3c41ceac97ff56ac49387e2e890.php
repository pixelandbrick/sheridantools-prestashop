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

/* @PrestaShop/Admin/TwigTemplateForm/bootstrap_4_horizontal_layout.html.twig */
class __TwigTemplate_16314fefcef502cf5381c25b6c6f452b extends Template
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
        $_trait_0 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig", "@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_horizontal_layout.html.twig", 25);
        if (!$_trait_0->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig".'" cannot be used as a trait.', 25, $this->source);
        }
        $_trait_0_blocks = $_trait_0->unwrap()->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_start' => [$this, 'block_form_start'],
                'form_label' => [$this, 'block_form_label'],
                'form_label_class' => [$this, 'block_form_label_class'],
                'form_row' => [$this, 'block_form_row'],
                'checkbox_row' => [$this, 'block_checkbox_row'],
                'radio_row' => [$this, 'block_radio_row'],
                'checkbox_radio_row' => [$this, 'block_checkbox_radio_row'],
                'submit_row' => [$this, 'block_submit_row'],
                'form_group_class' => [$this, 'block_form_group_class'],
                'form_row_class' => [$this, 'block_form_row_class'],
                'ip_address_text_widget' => [$this, 'block_ip_address_text_widget'],
                'switch_widget' => [$this, 'block_switch_widget'],
                'text_with_length_counter_widget' => [$this, 'block_text_with_length_counter_widget'],
                'number_widget' => [$this, 'block_number_widget'],
                'integer_widget' => [$this, 'block_integer_widget'],
                'form_unit' => [$this, 'block_form_unit'],
                'form_unit_prepend' => [$this, 'block_form_unit_prepend'],
                'amount_currency_widget' => [$this, 'block_amount_currency_widget'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 26
        yield from $this->unwrap()->yieldBlock('form_start', $context, $blocks);
        // line 30
        yield "
";
        // line 32
        yield "
";
        // line 33
        yield from $this->unwrap()->yieldBlock('form_label', $context, $blocks);
        // line 43
        yield "
";
        // line 44
        yield from $this->unwrap()->yieldBlock('form_label_class', $context, $blocks);
        // line 47
        yield "
";
        // line 49
        yield "
";
        // line 50
        yield from $this->unwrap()->yieldBlock('form_row', $context, $blocks);
        // line 62
        yield "
";
        // line 63
        yield from $this->unwrap()->yieldBlock('checkbox_row', $context, $blocks);
        // line 66
        yield "
";
        // line 67
        yield from $this->unwrap()->yieldBlock('radio_row', $context, $blocks);
        // line 70
        yield "
";
        // line 71
        yield from $this->unwrap()->yieldBlock('checkbox_radio_row', $context, $blocks);
        // line 82
        yield "
";
        // line 83
        yield from $this->unwrap()->yieldBlock('submit_row', $context, $blocks);
        // line 93
        yield "
";
        // line 94
        yield from $this->unwrap()->yieldBlock('form_group_class', $context, $blocks);
        // line 97
        yield "
";
        // line 98
        yield from $this->unwrap()->yieldBlock('form_row_class', $context, $blocks);
        // line 101
        yield "
";
        // line 102
        yield from $this->unwrap()->yieldBlock('ip_address_text_widget', $context, $blocks);
        // line 110
        yield "
";
        // line 111
        yield from $this->unwrap()->yieldBlock('switch_widget', $context, $blocks);
        // line 116
        yield "
";
        // line 117
        yield from $this->unwrap()->yieldBlock('text_with_length_counter_widget', $context, $blocks);
        // line 144
        yield from $this->unwrap()->yieldBlock('number_widget', $context, $blocks);
        // line 154
        yield from $this->unwrap()->yieldBlock('integer_widget', $context, $blocks);
        // line 164
        yield from $this->unwrap()->yieldBlock('form_unit', $context, $blocks);
        // line 171
        yield "
";
        // line 172
        yield from $this->unwrap()->yieldBlock('form_unit_prepend', $context, $blocks);
        // line 179
        yield "
";
        // line 180
        yield from $this->unwrap()->yieldBlock('amount_currency_widget', $context, $blocks);
        yield from [];
    }

    // line 26
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_start(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 27
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 27)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 27), "")) : ("")) . " form-horizontal"))]);
        // line 28
        yield from $this->yieldParentBlock("form_start", $context, $blocks);
        yield from [];
    }

    // line 33
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 34
        $_v0 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 35
            yield "        ";
            if ((($context["label"] ?? null) === false)) {
                // line 36
                yield "            <div class=\"";
                yield from                 $this->unwrap()->yieldBlock("form_label_class", $context, $blocks);
                yield "\"></div>
        ";
            } else {
                // line 38
                yield "            ";
                $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim(((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 38)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 38), "")) : ("")) . " ") .                 $this->unwrap()->renderBlock("form_label_class", $context, $blocks)))]);
                // line 39
                yield from $this->yieldParentBlock("form_label", $context, $blocks);
            }
            // line 41
            yield "    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 34
        yield Twig\Extension\CoreExtension::spaceless($_v0);
        yield from [];
    }

    // line 44
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_label_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 45
        yield "form-control-label";
        yield from [];
    }

    // line 50
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 51
        $_v1 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 52
            yield "        <div class=\"";
            yield from             $this->unwrap()->yieldBlock("form_row_class", $context, $blocks);
            yield " ";
            if ((( !($context["compound"] ?? null) || ((array_key_exists("force_error", $context)) ? (Twig\Extension\CoreExtension::default(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
                yield " has-error";
            }
            yield "\">
            ";
            // line 53
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
            yield "
            <div class=\"";
            // line 54
            yield from             $this->unwrap()->yieldBlock("form_group_class", $context, $blocks);
            yield "\">
                ";
            // line 55
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            yield "
                ";
            // line 56
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            yield "
                ";
            // line 57
            yield from             $this->unwrap()->yieldBlock("form_help", $context, $blocks);
            yield "
            </div>
        </div>
    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 51
        yield Twig\Extension\CoreExtension::spaceless($_v1);
        yield from [];
    }

    // line 63
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_checkbox_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 64
        yield from         $this->unwrap()->yieldBlock("checkbox_radio_row", $context, $blocks);
        yield from [];
    }

    // line 67
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_radio_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 68
        yield from         $this->unwrap()->yieldBlock("checkbox_radio_row", $context, $blocks);
        yield from [];
    }

    // line 71
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_checkbox_radio_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 72
        $_v2 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 73
            yield "        <div class=\"form-group";
            if ( !($context["valid"] ?? null)) {
                yield " has-error";
            }
            yield "\">
            <div class=\"";
            // line 74
            yield from             $this->unwrap()->yieldBlock("form_label_class", $context, $blocks);
            yield "\"></div>
            <div class=\"";
            // line 75
            yield from             $this->unwrap()->yieldBlock("form_group_class", $context, $blocks);
            yield "\">
                ";
            // line 76
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            yield "
                ";
            // line 77
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            yield "
            </div>
        </div>
    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 72
        yield Twig\Extension\CoreExtension::spaceless($_v2);
        yield from [];
    }

    // line 83
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_submit_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 84
        $_v3 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 85
            yield "        <div class=\"form-group\">
            <div class=\"";
            // line 86
            yield from             $this->unwrap()->yieldBlock("form_label_class", $context, $blocks);
            yield "\"></div>
            <div class=\"";
            // line 87
            yield from             $this->unwrap()->yieldBlock("form_group_class", $context, $blocks);
            yield "\">
                ";
            // line 88
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            yield "
            </div>
        </div>
    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 84
        yield Twig\Extension\CoreExtension::spaceless($_v3);
        yield from [];
    }

    // line 94
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_group_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 95
        yield "col-sm";
        yield from [];
    }

    // line 98
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_row_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 99
        yield "form-group row";
        yield from [];
    }

    // line 102
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ip_address_text_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 103
        yield "<div class=\"input-group\">";
        // line 104
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        // line 105
        yield "<button type=\"button\" class=\"btn btn-outline-primary add_ip_button\" data-ip=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["currentIp"] ?? null), "html", null, true);
        yield "\">
        <i class=\"material-icons\">add_circle</i> ";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add my IP", [], "Admin.Actions"), "html", null, true);
        yield "
    </button>
</div>
";
        yield from [];
    }

    // line 111
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_switch_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 112
        yield "<div class=\"input-group\">";
        // line 113
        yield from $this->yieldParentBlock("switch_widget", $context, $blocks);
        // line 114
        yield "</div>
";
        yield from [];
    }

    // line 117
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_text_with_length_counter_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 118
        yield "  <div class=\"input-group js-text-with-length-counter\">
    ";
        // line 119
        $context["current_length"] = (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 119), "max_length", [], "any", false, false, false, 119) - Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 119), "value", [], "any", false, false, false, 119)));
        // line 120
        yield "
    ";
        // line 121
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 121), "position", [], "any", false, false, false, 121) == "before")) {
            // line 122
            yield "      <div class=\"input-group-prepend\">
        <span class=\"input-group-text js-countable-text\">";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["current_length"] ?? null), "html", null, true);
            yield "</span>
      </div>
    ";
        }
        // line 126
        yield "
    ";
        // line 127
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ($context["input_attr"] ?? null));
        // line 128
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["data-max-length" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 128), "max_length", [], "any", false, false, false, 128), "maxlength" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 128), "max_length", [], "any", false, false, false, 128), "class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 128)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 128), "")) : ("")) . " js-countable-input"))]);
        // line 130
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 130), "input", [], "any", false, false, false, 130) == "textarea")) {
            // line 131
            yield from             $this->unwrap()->yieldBlock("textarea_widget", $context, $blocks);
        } else {
            // line 133
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        }
        // line 135
        yield "
    ";
        // line 136
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 136), "position", [], "any", false, false, false, 136) == "after")) {
            // line 137
            yield "      <div class=\"input-group-append\">
        <span class=\"input-group-text js-countable-text\">";
            // line 138
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["current_length"] ?? null), "html", null, true);
            yield "</span>
      </div>
    ";
        }
        // line 141
        yield "  </div>
";
        yield from [];
    }

    // line 144
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_number_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 145
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "text")) : ("text"));
        // line 146
        yield "<div class=\"input-group\">";
        // line 147
        yield from         $this->unwrap()->yieldBlock("form_unit_prepend", $context, $blocks);
        // line 148
        yield "<div class=\"w-100\">";
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        yield "</div>";
        // line 149
        yield from         $this->unwrap()->yieldBlock("form_unit", $context, $blocks);
        // line 150
        yield "</div>
  ";
        // line 151
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        yield from [];
    }

    // line 154
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_integer_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 155
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "number")) : ("number"));
        // line 156
        yield "<div class=\"input-group\">";
        // line 157
        yield from         $this->unwrap()->yieldBlock("form_unit_prepend", $context, $blocks);
        // line 158
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        // line 159
        yield from         $this->unwrap()->yieldBlock("form_unit", $context, $blocks);
        // line 160
        yield "</div>
  ";
        // line 161
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        yield from [];
    }

    // line 164
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_unit(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 165
        yield "  ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 165), "unit", [], "any", true, true, false, 165) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 165), "prepend_unit", [], "any", false, false, false, 165))) {
            // line 166
            yield "    <div class=\"input-group-append\">
      <span class=\"input-group-text\">";
            // line 167
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 167), "unit", [], "any", false, false, false, 167), "html", null, true);
            yield "</span>
    </div>
  ";
        }
        yield from [];
    }

    // line 172
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_unit_prepend(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 173
        yield "  ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 173), "unit", [], "any", true, true, false, 173) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 173), "prepend_unit", [], "any", false, false, false, 173))) {
            // line 174
            yield "    <div class=\"input-group-prepend\">
      <span class=\"input-group-text\">";
            // line 175
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 175), "unit", [], "any", false, false, false, 175), "html", null, true);
            yield "</span>
    </div>
  ";
        }
        yield from [];
    }

    // line 180
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_amount_currency_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 181
        yield "  <div class=\"input-group\">
    <input id=\"";
        // line 182
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "amount", [], "any", false, false, false, 182), "vars", [], "any", false, false, false, 182), "id", [], "any", false, false, false, 182), "html", null, true);
        yield "\" type=\"text\" class=\"form-control\" name=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "amount", [], "any", false, false, false, 182), "vars", [], "any", false, false, false, 182), "full_name", [], "any", false, false, false, 182), "html", null, true);
        yield "\" required>
    <div class=\"input-group-append\">
      ";
        // line 184
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "amount", [], "any", false, true, false, 184), "vars", [], "any", false, true, false, 184), "unit", [], "any", true, true, false, 184)) {
            // line 185
            yield "        <span class=\"input-group-text\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "amount", [], "any", false, false, false, 185), "vars", [], "any", false, false, false, 185), "unit", [], "any", false, false, false, 185), "html", null, true);
            yield "</span>
        ";
            // line 186
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "id_currency", [], "any", false, false, false, 186), 'widget');
            yield "
      ";
        } else {
            // line 188
            yield "        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "id_currency", [], "any", false, false, false, 188), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
      ";
        }
        // line 190
        yield "    </div>
  </div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_horizontal_layout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  621 => 190,  615 => 188,  610 => 186,  605 => 185,  603 => 184,  596 => 182,  593 => 181,  586 => 180,  577 => 175,  574 => 174,  571 => 173,  564 => 172,  555 => 167,  552 => 166,  549 => 165,  542 => 164,  537 => 161,  534 => 160,  532 => 159,  530 => 158,  528 => 157,  526 => 156,  524 => 155,  517 => 154,  512 => 151,  509 => 150,  507 => 149,  503 => 148,  501 => 147,  499 => 146,  497 => 145,  490 => 144,  484 => 141,  478 => 138,  475 => 137,  473 => 136,  470 => 135,  467 => 133,  464 => 131,  462 => 130,  460 => 128,  458 => 127,  455 => 126,  449 => 123,  446 => 122,  444 => 121,  441 => 120,  439 => 119,  436 => 118,  429 => 117,  423 => 114,  421 => 113,  419 => 112,  412 => 111,  403 => 106,  398 => 105,  396 => 104,  394 => 103,  387 => 102,  382 => 99,  375 => 98,  370 => 95,  363 => 94,  358 => 84,  350 => 88,  346 => 87,  342 => 86,  339 => 85,  337 => 84,  330 => 83,  325 => 72,  317 => 77,  313 => 76,  309 => 75,  305 => 74,  298 => 73,  296 => 72,  289 => 71,  284 => 68,  277 => 67,  272 => 64,  265 => 63,  260 => 51,  252 => 57,  248 => 56,  244 => 55,  240 => 54,  236 => 53,  227 => 52,  225 => 51,  218 => 50,  213 => 45,  206 => 44,  201 => 34,  197 => 41,  194 => 39,  191 => 38,  185 => 36,  182 => 35,  180 => 34,  173 => 33,  168 => 28,  166 => 27,  159 => 26,  154 => 180,  151 => 179,  149 => 172,  146 => 171,  144 => 164,  142 => 154,  140 => 144,  138 => 117,  135 => 116,  133 => 111,  130 => 110,  128 => 102,  125 => 101,  123 => 98,  120 => 97,  118 => 94,  115 => 93,  113 => 83,  110 => 82,  108 => 71,  105 => 70,  103 => 67,  100 => 66,  98 => 63,  95 => 62,  93 => 50,  90 => 49,  87 => 47,  85 => 44,  82 => 43,  80 => 33,  77 => 32,  74 => 30,  72 => 26,  35 => 25,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_horizontal_layout.html.twig", "/home/sheridantools/public_html/src/PrestaShopBundle/Resources/views/Admin/TwigTemplateForm/bootstrap_4_horizontal_layout.html.twig");
    }
}
