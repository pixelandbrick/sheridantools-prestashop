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

/* @PrestaShop/Admin/TwigTemplateForm/form_div_layout.html.twig */
class __TwigTemplate_ae2b9d8f902a53411239b021e095a853 extends Template
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
            'form_widget' => [$this, 'block_form_widget'],
            'form_widget_simple' => [$this, 'block_form_widget_simple'],
            'form_widget_compound' => [$this, 'block_form_widget_compound'],
            'collection_widget' => [$this, 'block_collection_widget'],
            'textarea_widget' => [$this, 'block_textarea_widget'],
            'choice_widget' => [$this, 'block_choice_widget'],
            'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
            'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
            'choice_widget_options' => [$this, 'block_choice_widget_options'],
            'checkbox_widget' => [$this, 'block_checkbox_widget'],
            'radio_widget' => [$this, 'block_radio_widget'],
            'datetime_widget' => [$this, 'block_datetime_widget'],
            'date_widget' => [$this, 'block_date_widget'],
            'time_widget' => [$this, 'block_time_widget'],
            'number_widget' => [$this, 'block_number_widget'],
            'integer_widget' => [$this, 'block_integer_widget'],
            'money_widget' => [$this, 'block_money_widget'],
            'url_widget' => [$this, 'block_url_widget'],
            'search_widget' => [$this, 'block_search_widget'],
            'percent_widget' => [$this, 'block_percent_widget'],
            'password_widget' => [$this, 'block_password_widget'],
            'hidden_widget' => [$this, 'block_hidden_widget'],
            'email_widget' => [$this, 'block_email_widget'],
            'button_widget' => [$this, 'block_button_widget'],
            'submit_widget' => [$this, 'block_submit_widget'],
            'reset_widget' => [$this, 'block_reset_widget'],
            'form_label' => [$this, 'block_form_label'],
            'button_label' => [$this, 'block_button_label'],
            'repeated_row' => [$this, 'block_repeated_row'],
            'form_row' => [$this, 'block_form_row'],
            'button_row' => [$this, 'block_button_row'],
            'hidden_row' => [$this, 'block_hidden_row'],
            'form' => [$this, 'block_form'],
            'form_start' => [$this, 'block_form_start'],
            'form_end' => [$this, 'block_form_end'],
            'form_enctype' => [$this, 'block_form_enctype'],
            'form_errors' => [$this, 'block_form_errors'],
            'form_rest' => [$this, 'block_form_rest'],
            'form_rows' => [$this, 'block_form_rows'],
            'widget_attributes' => [$this, 'block_widget_attributes'],
            'widget_container_attributes' => [$this, 'block_widget_container_attributes'],
            'button_attributes' => [$this, 'block_button_attributes'],
            'attributes' => [$this, 'block_attributes'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 27
        yield from $this->unwrap()->yieldBlock('form_widget', $context, $blocks);
        // line 35
        yield from $this->unwrap()->yieldBlock('form_widget_simple', $context, $blocks);
        // line 41
        yield from $this->unwrap()->yieldBlock('form_widget_compound', $context, $blocks);
        // line 51
        yield from $this->unwrap()->yieldBlock('collection_widget', $context, $blocks);
        // line 58
        yield from $this->unwrap()->yieldBlock('textarea_widget', $context, $blocks);
        // line 63
        yield from $this->unwrap()->yieldBlock('choice_widget', $context, $blocks);
        // line 71
        yield from $this->unwrap()->yieldBlock('choice_widget_expanded', $context, $blocks);
        // line 80
        yield from $this->unwrap()->yieldBlock('choice_widget_collapsed', $context, $blocks);
        // line 101
        yield from $this->unwrap()->yieldBlock('choice_widget_options', $context, $blocks);
        // line 114
        yield from $this->unwrap()->yieldBlock('checkbox_widget', $context, $blocks);
        // line 120
        yield from $this->unwrap()->yieldBlock('radio_widget', $context, $blocks);
        // line 126
        yield from $this->unwrap()->yieldBlock('datetime_widget', $context, $blocks);
        // line 139
        yield from $this->unwrap()->yieldBlock('date_widget', $context, $blocks);
        // line 153
        yield from $this->unwrap()->yieldBlock('time_widget', $context, $blocks);
        // line 164
        yield from $this->unwrap()->yieldBlock('number_widget', $context, $blocks);
        // line 170
        yield from $this->unwrap()->yieldBlock('integer_widget', $context, $blocks);
        // line 175
        yield from $this->unwrap()->yieldBlock('money_widget', $context, $blocks);
        // line 179
        yield from $this->unwrap()->yieldBlock('url_widget', $context, $blocks);
        // line 184
        yield from $this->unwrap()->yieldBlock('search_widget', $context, $blocks);
        // line 189
        yield from $this->unwrap()->yieldBlock('percent_widget', $context, $blocks);
        // line 194
        yield from $this->unwrap()->yieldBlock('password_widget', $context, $blocks);
        // line 199
        yield from $this->unwrap()->yieldBlock('hidden_widget', $context, $blocks);
        // line 204
        yield from $this->unwrap()->yieldBlock('email_widget', $context, $blocks);
        // line 209
        yield from $this->unwrap()->yieldBlock('button_widget', $context, $blocks);
        // line 223
        yield from $this->unwrap()->yieldBlock('submit_widget', $context, $blocks);
        // line 228
        yield from $this->unwrap()->yieldBlock('reset_widget', $context, $blocks);
        // line 235
        yield from $this->unwrap()->yieldBlock('form_label', $context, $blocks);
        // line 269
        yield from $this->unwrap()->yieldBlock('button_label', $context, $blocks);
        // line 273
        yield from $this->unwrap()->yieldBlock('repeated_row', $context, $blocks);
        // line 281
        yield from $this->unwrap()->yieldBlock('form_row', $context, $blocks);
        // line 289
        yield from $this->unwrap()->yieldBlock('button_row', $context, $blocks);
        // line 295
        yield from $this->unwrap()->yieldBlock('hidden_row', $context, $blocks);
        // line 301
        yield from $this->unwrap()->yieldBlock('form', $context, $blocks);
        // line 307
        yield from $this->unwrap()->yieldBlock('form_start', $context, $blocks);
        // line 324
        yield from $this->unwrap()->yieldBlock('form_end', $context, $blocks);
        // line 331
        yield from $this->unwrap()->yieldBlock('form_enctype', $context, $blocks);
        // line 335
        yield from $this->unwrap()->yieldBlock('form_errors', $context, $blocks);
        // line 345
        yield from $this->unwrap()->yieldBlock('form_rest', $context, $blocks);
        // line 356
        yield "
";
        // line 359
        yield from $this->unwrap()->yieldBlock('form_rows', $context, $blocks);
        // line 365
        yield from $this->unwrap()->yieldBlock('widget_attributes', $context, $blocks);
        // line 382
        yield from $this->unwrap()->yieldBlock('widget_container_attributes', $context, $blocks);
        // line 396
        yield from $this->unwrap()->yieldBlock('button_attributes', $context, $blocks);
        // line 410
        yield from $this->unwrap()->yieldBlock('attributes', $context, $blocks);
        yield from [];
    }

    // line 27
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 28
        if (($context["compound"] ?? null)) {
            // line 29
            yield from             $this->unwrap()->yieldBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 31
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        }
        yield from [];
    }

    // line 35
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_widget_simple(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 36
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "text")) : ("text"));
        // line 37
        yield "<input type=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["type"] ?? null), "html", null, true);
        yield "\" ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        yield " ";
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["value"] ?? null))) {
            yield "value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
            yield "\" ";
        }
        yield "/>
  ";
        // line 38
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@Twig/form_max_length.html.twig", ["attr" => ($context["attr"] ?? null)]);
        yield from [];
    }

    // line 41
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_widget_compound(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 42
        yield "<div ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield ">";
        // line 43
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 43))) {
            // line 44
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        }
        // line 46
        yield from         $this->unwrap()->yieldBlock("form_rows", $context, $blocks);
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        // line 48
        yield "</div>";
        yield from [];
    }

    // line 51
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_collection_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 52
        if (array_key_exists("prototype", $context)) {
            // line 53
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["prototype"] ?? null), 'row')]);
        }
        // line 55
        yield from         $this->unwrap()->yieldBlock("form_widget", $context, $blocks);
        yield from [];
    }

    // line 58
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_textarea_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 59
        yield "<textarea ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
        yield "</textarea>
  ";
        // line 60
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@Twig/form_max_length.html.twig", ["attr" => ($context["attr"] ?? null)]);
        yield from [];
    }

    // line 63
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 64
        if (($context["expanded"] ?? null)) {
            // line 65
            yield from             $this->unwrap()->yieldBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 67
            yield from             $this->unwrap()->yieldBlock("choice_widget_collapsed", $context, $blocks);
        }
        yield from [];
    }

    // line 71
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_widget_expanded(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 72
        yield "<div ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield ">";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 74
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            // line 75
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label', ["translation_domain" => ($context["choice_translation_domain"] ?? null)]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        yield "</div>";
        yield from [];
    }

    // line 80
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_widget_collapsed(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 81
        if ((((($context["required"] ?? null) && (null === ($context["placeholder"] ?? null))) &&  !($context["placeholder_in_choices"] ?? null)) &&  !($context["multiple"] ?? null))) {
            // line 82
            $context["required"] = false;
        }
        // line 84
        yield "<select ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? null)) {
            yield " multiple=\"multiple\"";
        }
        yield ">";
        // line 85
        if ( !(null === ($context["placeholder"] ?? null))) {
            // line 86
            yield "<option
        value=\"\"";
            // line 87
            if ((($context["required"] ?? null) && Twig\Extension\CoreExtension::testEmpty(($context["value"] ?? null)))) {
                yield " selected=\"selected\"";
            }
            yield ">";
            yield (((($context["placeholder"] ?? null) != "")) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["placeholder"] ?? null), "html", null, true)) : (""));
            yield "</option>";
        }
        // line 89
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["preferred_choices"] ?? null)) > 0)) {
            // line 90
            $context["options"] = ($context["preferred_choices"] ?? null);
            // line 91
            yield from             $this->unwrap()->yieldBlock("choice_widget_options", $context, $blocks);
            // line 92
            if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["choices"] ?? null)) > 0) &&  !(null === ($context["separator"] ?? null)))) {
                // line 93
                yield "<option disabled=\"disabled\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["separator"] ?? null), "html", null, true);
                yield "</option>";
            }
        }
        // line 96
        $context["options"] = ($context["choices"] ?? null);
        // line 97
        yield from         $this->unwrap()->yieldBlock("choice_widget_options", $context, $blocks);
        // line 98
        yield "</select>";
        yield from [];
    }

    // line 101
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_widget_options(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["options"] ?? null));
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
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 103
            if (is_iterable($context["choice"])) {
                // line 104
                yield "<optgroup label=\"";
                yield (((($context["choice_translation_domain"] ?? null) === false)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["group_label"], "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["group_label"], [], ($context["choice_translation_domain"] ?? null)), "html", null, true)));
                yield "\">
                ";
                // line 105
                $context["options"] = $context["choice"];
                // line 106
                yield from                 $this->unwrap()->yieldBlock("choice_widget_options", $context, $blocks);
                // line 107
                yield "</optgroup>";
            } else {
                // line 109
                yield "<option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 109), "html", null, true);
                yield "\"";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "attr", [], "any", false, false, false, 109)) {
                    yield " ";
                    $context["attr"] = CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "attr", [], "any", false, false, false, 109);
                    yield from                     $this->unwrap()->yieldBlock("attributes", $context, $blocks);
                }
                if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], ($context["value"] ?? null))) {
                    yield " selected=\"selected\"";
                }
                yield ">";
                yield (((($context["choice_translation_domain"] ?? null) === false)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 109), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 109), [], ($context["choice_translation_domain"] ?? null)), "html", null, true)));
                yield "</option>";
            }
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
        unset($context['_seq'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    // line 114
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_checkbox_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 115
        $context["switch"] = ((array_key_exists("switch", $context)) ? (Twig\Extension\CoreExtension::default(($context["switch"] ?? null), "")) : (""));
        // line 116
        yield "<input type=\"checkbox\"
         ";
        // line 117
        if (($context["switch"] ?? null)) {
            yield "data-toggle=\"switch\"";
        }
        yield " ";
        if (($context["switch"] ?? null)) {
            yield "class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["switch"] ?? null), "html", null, true);
            yield "\"";
        }
        yield " ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            yield " value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
            yield "\"";
        }
        if (($context["checked"] ?? null)) {
            yield " checked=\"checked\"";
        }
        yield " />
";
        yield from [];
    }

    // line 120
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_radio_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 121
        yield "<input
    type=\"radio\" ";
        // line 122
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            yield " value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
            yield "\"";
        }
        if (($context["checked"] ?? null)) {
            yield " checked=\"checked\"";
        }
        yield " />
  <i class=\"form-check-round\"></i>
";
        yield from [];
    }

    // line 126
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_datetime_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 127
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 128
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 130
            yield "<div ";
            yield from             $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
            yield ">";
            // line 131
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, false, 131), 'errors');
            // line 132
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, false, false, 132), 'errors');
            // line 133
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, false, 133), 'widget');
            // line 134
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, false, false, 134), 'widget');
            // line 135
            yield "</div>";
        }
        yield from [];
    }

    // line 139
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_date_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 140
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 141
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 143
            yield "<div ";
            yield from             $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
            yield ">";
            // line 144
            yield Twig\Extension\CoreExtension::replace(($context["date_pattern"] ?? null), ["{{ year }}" =>             // line 145
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "year", [], "any", false, false, false, 145), 'widget'), "{{ month }}" =>             // line 146
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "month", [], "any", false, false, false, 146), 'widget'), "{{ day }}" =>             // line 147
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "day", [], "any", false, false, false, 147), 'widget')]);
            // line 149
            yield "</div>";
        }
        yield from [];
    }

    // line 153
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_time_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 154
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 155
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 157
            $context["vars"] = (((($context["widget"] ?? null) == "text")) ? (["attr" => ["size" => 1]]) : ([]));
            // line 158
            yield "<div ";
            yield from             $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
            yield ">
      ";
            // line 159
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "hour", [], "any", false, false, false, 159), 'widget', ($context["vars"] ?? null));
            if (($context["with_minutes"] ?? null)) {
                yield ":";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "minute", [], "any", false, false, false, 159), 'widget', ($context["vars"] ?? null));
            }
            if (($context["with_seconds"] ?? null)) {
                yield ":";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "second", [], "any", false, false, false, 159), 'widget', ($context["vars"] ?? null));
            }
            // line 160
            yield "    </div>";
        }
        yield from [];
    }

    // line 164
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_number_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 166
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "text")) : ("text"));
        // line 167
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        yield from [];
    }

    // line 170
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_integer_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 171
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "number")) : ("number"));
        // line 172
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        yield from [];
    }

    // line 175
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_money_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 176
        yield Twig\Extension\CoreExtension::replace(($context["money_pattern"] ?? null), ["{{ widget }}" =>         $this->unwrap()->renderBlock("form_widget_simple", $context, $blocks)]);
        yield from [];
    }

    // line 179
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_url_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 180
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "url")) : ("url"));
        // line 181
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        yield from [];
    }

    // line 184
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_search_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 185
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "search")) : ("search"));
        // line 186
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        yield from [];
    }

    // line 189
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_percent_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 190
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "text")) : ("text"));
        // line 191
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        yield " %";
        yield from [];
    }

    // line 194
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_password_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 195
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "password")) : ("password"));
        // line 196
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        yield from [];
    }

    // line 199
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_hidden_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 200
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "hidden")) : ("hidden"));
        // line 201
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        yield from [];
    }

    // line 204
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_email_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 205
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "email")) : ("email"));
        // line 206
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        yield from [];
    }

    // line 209
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_button_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 210
        if (Twig\Extension\CoreExtension::testEmpty(($context["label"] ?? null))) {
            // line 211
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["label_format"] ?? null))) {
                // line 212
                $context["label"] = Twig\Extension\CoreExtension::replace(($context["label_format"] ?? null), ["%name%" =>                 // line 213
($context["name"] ?? null), "%id%" =>                 // line 214
($context["id"] ?? null)]);
            } else {
                // line 217
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
            }
        }
        // line 220
        yield "<button type=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "button")) : ("button")), "html", null, true);
        yield "\" ";
        yield from         $this->unwrap()->yieldBlock("button_attributes", $context, $blocks);
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["label"] ?? null), "html", null, true);
        yield "</button>";
        yield from [];
    }

    // line 223
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_submit_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 224
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "submit")) : ("submit"));
        // line 225
        yield from         $this->unwrap()->yieldBlock("button_widget", $context, $blocks);
        yield from [];
    }

    // line 228
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_reset_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 229
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "reset")) : ("reset"));
        // line 230
        yield from         $this->unwrap()->yieldBlock("button_widget", $context, $blocks);
        yield from [];
    }

    // line 235
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 236
        if ( !(($context["label"] ?? null) === false)) {
            // line 237
            if ( !($context["compound"] ?? null)) {
                // line 238
                $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["for" => ($context["id"] ?? null)]);
            }
            // line 240
            yield "    ";
            if (($context["required"] ?? null)) {
                // line 241
                $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 241)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 241), "")) : ("")) . " required"))]);
            }
            // line 243
            yield "    ";
            if (Twig\Extension\CoreExtension::testEmpty(($context["label"] ?? null))) {
                // line 244
                if ( !Twig\Extension\CoreExtension::testEmpty(($context["label_format"] ?? null))) {
                    // line 245
                    $context["label"] = Twig\Extension\CoreExtension::replace(($context["label_format"] ?? null), ["%name%" =>                     // line 246
($context["name"] ?? null), "%id%" =>                     // line 247
($context["id"] ?? null)]);
                } else {
                    // line 250
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
                }
            }
            // line 253
            yield "<label";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["label_attr"] ?? null));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrvalue"], "html", null, true);
                yield "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['attrname'], $context['attrvalue'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield ">";
            yield (((($context["translation_domain"] ?? null) === false)) ? (($context["label"] ?? null)) : (($context["label"] ?? null)));
            yield "
      ";
            // line 254
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "tooltip", [], "array", true, true, false, 254)) {
                // line 255
                yield "        ";
                $context["placement"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "tooltip_placement", [], "array", true, true, false, 255)) ? ((($_v0 = ($context["label_attr"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["tooltip_placement"] ?? null) : null)) : ("top"));
                // line 256
                yield "        <i class=\"icon-question\" data-toggle=\"pstooltip\" data-placement=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["placement"] ?? null), "html", null, true);
                yield "\"
           title=\"";
                // line 257
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v1 = ($context["label_attr"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["tooltip"] ?? null) : null), "html", null, true);
                yield "\"></i>
      ";
            }
            // line 259
            yield "
      ";
            // line 260
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "popover", [], "array", true, true, false, 260)) {
                // line 261
                yield "        ";
                $context["placement"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "popover_placement", [], "array", true, true, false, 261)) ? ((($_v2 = ($context["label_attr"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["popover_placement"] ?? null) : null)) : ("top"));
                // line 262
                yield "        ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@Common/HelpBox/helpbox.html.twig", ["placement" => ($context["placement"] ?? null), "content" => (($_v3 = ($context["label_attr"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["popover"] ?? null) : null)]);
                yield "
      ";
            }
            // line 264
            yield "    </label>";
        }
        yield from [];
    }

    // line 269
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_button_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 273
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_repeated_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 278
        yield from         $this->unwrap()->yieldBlock("form_rows", $context, $blocks);
        yield from [];
    }

    // line 281
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 282
        yield "<div>";
        // line 283
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 284
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 285
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 286
        yield "</div>";
        yield from [];
    }

    // line 289
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_button_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 290
        yield "<div>";
        // line 291
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 292
        yield "</div>";
        yield from [];
    }

    // line 295
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_hidden_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 296
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        yield from [];
    }

    // line 301
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 302
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        // line 303
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 304
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield from [];
    }

    // line 307
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_start(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 308
        $context["method"] = Twig\Extension\CoreExtension::upper($this->env->getCharset(), ($context["method"] ?? null));
        // line 309
        if (CoreExtension::inFilter(($context["method"] ?? null), ["GET", "POST"])) {
            // line 310
            $context["form_method"] = ($context["method"] ?? null);
        } else {
            // line 312
            $context["form_method"] = "POST";
        }
        // line 314
        yield "<form name=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
        yield "\"
        method=\"";
        // line 315
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["form_method"] ?? null)), "html", null, true);
        yield "\"
        action=\"";
        // line 316
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["action"] ?? null), "html", null, true);
        yield "\"
        ";
        // line 317
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["attr"] ?? null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
            yield "=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrvalue"], "html", null, true);
            yield "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['attrname'], $context['attrvalue'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 318
        yield "        ";
        if (($context["multipart"] ?? null)) {
            yield " enctype=\"multipart/form-data\"";
        }
        yield ">";
        // line 319
        if ((($context["form_method"] ?? null) != ($context["method"] ?? null))) {
            // line 320
            yield "<input type=\"hidden\" name=\"_method\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["method"] ?? null), "html", null, true);
            yield "\"/>";
        }
        yield from [];
    }

    // line 324
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_end(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 325
        if (( !array_key_exists("render_rest", $context) || ($context["render_rest"] ?? null))) {
            // line 326
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        }
        // line 328
        yield "</form>";
        yield from [];
    }

    // line 331
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_enctype(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 332
        if (($context["multipart"] ?? null)) {
            yield "enctype=\"multipart/form-data\"";
        }
        yield from [];
    }

    // line 335
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_errors(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 336
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["errors"] ?? null)) > 0)) {
            // line 337
            yield "<ul>";
            // line 338
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 339
                yield "<li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 339), "html", null, true);
                yield "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 341
            yield "</ul>";
        }
        yield from [];
    }

    // line 345
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_rest(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 346
        $macros["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/TwigTemplateForm/form_div_layout.html.twig", 346)->unwrap();
        // line 347
        yield "
  ";
        // line 348
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 349
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["child"], "rendered", [], "any", false, false, false, 349)) {
                // line 350
                yield $macros["ps"]->getTemplateForMacro("macro_form_group_row", $context, 350, $this->getSourceContext())->macro_form_group_row(...[$context["child"], ["attr" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 350), "attr", [], "any", false, false, false, 350)], ["label" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 351
$context["child"], "vars", [], "any", false, false, false, 351), "label", [], "any", false, false, false, 351)]]);
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    // line 359
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_rows(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 360
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 361
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    // line 365
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_widget_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 366
        yield "id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
        yield "\" name=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["full_name"] ?? null), "html", null, true);
        yield "\"";
        // line 367
        if ((((array_key_exists("read_only", $context)) ? (Twig\Extension\CoreExtension::default(($context["read_only"] ?? null), false)) : (false)) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "readonly", [], "any", true, true, false, 367))) {
            yield " readonly=\"readonly\"";
        }
        // line 368
        if (($context["disabled"] ?? null)) {
            yield " disabled=\"disabled\"";
        }
        // line 369
        if (($context["required"] ?? null)) {
            yield " required=\"required\"";
        }
        // line 370
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["attr"] ?? null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 371
            yield " ";
            // line 372
            if (CoreExtension::inFilter($context["attrname"], ["placeholder", "title"])) {
                // line 373
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrvalue"], "html", null, true);
                yield "\"";
            } elseif ((            // line 374
$context["attrvalue"] === true)) {
                // line 375
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                yield "\"";
            } elseif ( !(            // line 376
$context["attrvalue"] === false)) {
                // line 377
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrvalue"], "html", null, true);
                yield "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['attrname'], $context['attrvalue'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    // line 382
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_widget_container_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 383
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["id"] ?? null))) {
            yield "id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
            yield "\"";
        }
        // line 384
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["attr"] ?? null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 385
            yield " ";
            // line 386
            if (CoreExtension::inFilter($context["attrname"], ["placeholder", "title"])) {
                // line 387
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrvalue"], "html", null, true);
                yield "\"";
            } elseif ((            // line 388
$context["attrvalue"] === true)) {
                // line 389
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                yield "\"";
            } elseif ( !(            // line 390
$context["attrvalue"] === false)) {
                // line 391
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrvalue"], "html", null, true);
                yield "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['attrname'], $context['attrvalue'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    // line 396
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_button_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 397
        yield "id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
        yield "\" name=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["full_name"] ?? null), "html", null, true);
        yield "\"";
        if (($context["disabled"] ?? null)) {
            yield " disabled=\"disabled\"";
        }
        // line 398
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["attr"] ?? null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 399
            yield " ";
            // line 400
            if (CoreExtension::inFilter($context["attrname"], ["placeholder", "title"])) {
                // line 401
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrvalue"], "html", null, true);
                yield "\"";
            } elseif ((            // line 402
$context["attrvalue"] === true)) {
                // line 403
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                yield "\"";
            } elseif ( !(            // line 404
$context["attrvalue"] === false)) {
                // line 405
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrvalue"], "html", null, true);
                yield "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['attrname'], $context['attrvalue'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    // line 410
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 411
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["attr"] ?? null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 412
            yield " ";
            // line 413
            if (CoreExtension::inFilter($context["attrname"], ["placeholder", "title"])) {
                // line 414
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrvalue"], "html", null, true);
                yield "\"";
            } elseif ((            // line 415
$context["attrvalue"] === true)) {
                // line 416
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                yield "\"";
            } elseif ( !(            // line 417
$context["attrvalue"] === false)) {
                // line 418
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrvalue"], "html", null, true);
                yield "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['attrname'], $context['attrvalue'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/TwigTemplateForm/form_div_layout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  1321 => 418,  1319 => 417,  1314 => 416,  1312 => 415,  1307 => 414,  1305 => 413,  1303 => 412,  1299 => 411,  1292 => 410,  1279 => 405,  1277 => 404,  1272 => 403,  1270 => 402,  1265 => 401,  1263 => 400,  1261 => 399,  1257 => 398,  1248 => 397,  1241 => 396,  1228 => 391,  1226 => 390,  1221 => 389,  1219 => 388,  1214 => 387,  1212 => 386,  1210 => 385,  1206 => 384,  1200 => 383,  1193 => 382,  1180 => 377,  1178 => 376,  1173 => 375,  1171 => 374,  1166 => 373,  1164 => 372,  1162 => 371,  1158 => 370,  1154 => 369,  1150 => 368,  1146 => 367,  1140 => 366,  1133 => 365,  1124 => 361,  1120 => 360,  1113 => 359,  1103 => 351,  1102 => 350,  1100 => 349,  1096 => 348,  1093 => 347,  1091 => 346,  1084 => 345,  1078 => 341,  1070 => 339,  1066 => 338,  1064 => 337,  1062 => 336,  1055 => 335,  1048 => 332,  1041 => 331,  1036 => 328,  1033 => 326,  1031 => 325,  1024 => 324,  1016 => 320,  1014 => 319,  1008 => 318,  995 => 317,  991 => 316,  987 => 315,  982 => 314,  979 => 312,  976 => 310,  974 => 309,  972 => 308,  965 => 307,  960 => 304,  958 => 303,  956 => 302,  949 => 301,  944 => 296,  937 => 295,  932 => 292,  930 => 291,  928 => 290,  921 => 289,  916 => 286,  914 => 285,  912 => 284,  910 => 283,  908 => 282,  901 => 281,  896 => 278,  889 => 273,  879 => 269,  873 => 264,  867 => 262,  864 => 261,  862 => 260,  859 => 259,  854 => 257,  849 => 256,  846 => 255,  844 => 254,  826 => 253,  822 => 250,  819 => 247,  818 => 246,  817 => 245,  815 => 244,  812 => 243,  809 => 241,  806 => 240,  803 => 238,  801 => 237,  799 => 236,  792 => 235,  787 => 230,  785 => 229,  778 => 228,  773 => 225,  771 => 224,  764 => 223,  753 => 220,  749 => 217,  746 => 214,  745 => 213,  744 => 212,  742 => 211,  740 => 210,  733 => 209,  728 => 206,  726 => 205,  719 => 204,  714 => 201,  712 => 200,  705 => 199,  700 => 196,  698 => 195,  691 => 194,  685 => 191,  683 => 190,  676 => 189,  671 => 186,  669 => 185,  662 => 184,  657 => 181,  655 => 180,  648 => 179,  643 => 176,  636 => 175,  631 => 172,  629 => 171,  622 => 170,  617 => 167,  615 => 166,  608 => 164,  602 => 160,  592 => 159,  587 => 158,  585 => 157,  582 => 155,  580 => 154,  573 => 153,  567 => 149,  565 => 147,  564 => 146,  563 => 145,  562 => 144,  558 => 143,  555 => 141,  553 => 140,  546 => 139,  540 => 135,  538 => 134,  536 => 133,  534 => 132,  532 => 131,  528 => 130,  525 => 128,  523 => 127,  516 => 126,  500 => 122,  497 => 121,  490 => 120,  465 => 117,  462 => 116,  460 => 115,  453 => 114,  422 => 109,  419 => 107,  417 => 106,  415 => 105,  410 => 104,  408 => 103,  391 => 102,  384 => 101,  379 => 98,  377 => 97,  375 => 96,  369 => 93,  367 => 92,  365 => 91,  363 => 90,  361 => 89,  353 => 87,  350 => 86,  348 => 85,  341 => 84,  338 => 82,  336 => 81,  329 => 80,  324 => 77,  318 => 75,  316 => 74,  312 => 73,  308 => 72,  301 => 71,  295 => 67,  292 => 65,  290 => 64,  283 => 63,  278 => 60,  271 => 59,  264 => 58,  259 => 55,  256 => 53,  254 => 52,  247 => 51,  242 => 48,  240 => 47,  238 => 46,  235 => 44,  233 => 43,  229 => 42,  222 => 41,  217 => 38,  204 => 37,  202 => 36,  195 => 35,  189 => 31,  186 => 29,  184 => 28,  177 => 27,  172 => 410,  170 => 396,  168 => 382,  166 => 365,  164 => 359,  161 => 356,  159 => 345,  157 => 335,  155 => 331,  153 => 324,  151 => 307,  149 => 301,  147 => 295,  145 => 289,  143 => 281,  141 => 273,  139 => 269,  137 => 235,  135 => 228,  133 => 223,  131 => 209,  129 => 204,  127 => 199,  125 => 194,  123 => 189,  121 => 184,  119 => 179,  117 => 175,  115 => 170,  113 => 164,  111 => 153,  109 => 139,  107 => 126,  105 => 120,  103 => 114,  101 => 101,  99 => 80,  97 => 71,  95 => 63,  93 => 58,  91 => 51,  89 => 41,  87 => 35,  85 => 27,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/TwigTemplateForm/form_div_layout.html.twig", "/home/sheridantools/public_html/src/PrestaShopBundle/Resources/views/Admin/TwigTemplateForm/form_div_layout.html.twig");
    }
}
