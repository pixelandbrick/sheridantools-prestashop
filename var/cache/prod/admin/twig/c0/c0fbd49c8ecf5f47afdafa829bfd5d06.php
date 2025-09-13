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

/* @PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig */
class __TwigTemplate_e71722ab675a1f32a12a2f039e1a4489 extends Template
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
        $_trait_0 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/form_div_layout.html.twig", "@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig", 25);
        if (!$_trait_0->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/form_div_layout.html.twig".'" cannot be used as a trait.', 25, $this->source);
        }
        $_trait_0_blocks = $_trait_0->unwrap()->getBlocks();

        // line 26
        $_trait_1 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/material.html.twig", "@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig", 26);
        if (!$_trait_1->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/material.html.twig".'" cannot be used as a trait.', 26, $this->source);
        }
        $_trait_1_blocks = $_trait_1->unwrap()->getBlocks();

        // line 27
        $_trait_2 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/translatable_choice.html.twig", "@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig", 27);
        if (!$_trait_2->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/translatable_choice.html.twig".'" cannot be used as a trait.', 27, $this->source);
        }
        $_trait_2_blocks = $_trait_2->unwrap()->getBlocks();

        $this->traits = array_merge(
            $_trait_0_blocks,
            $_trait_1_blocks,
            $_trait_2_blocks
        );

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_widget_simple' => [$this, 'block_form_widget_simple'],
                'textarea_widget' => [$this, 'block_textarea_widget'],
                'button_widget' => [$this, 'block_button_widget'],
                'money_widget' => [$this, 'block_money_widget'],
                'percent_widget' => [$this, 'block_percent_widget'],
                'datetime_widget' => [$this, 'block_datetime_widget'],
                'date_widget' => [$this, 'block_date_widget'],
                'time_widget' => [$this, 'block_time_widget'],
                'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
                'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
                'checkbox_widget' => [$this, 'block_checkbox_widget'],
                'radio_widget' => [$this, 'block_radio_widget'],
                'choice_tree_widget' => [$this, 'block_choice_tree_widget'],
                'choice_tree_item_widget' => [$this, 'block_choice_tree_item_widget'],
                'translatefields_widget' => [$this, 'block_translatefields_widget'],
                'translate_fields_widget' => [$this, 'block_translate_fields_widget'],
                'translate_text_widget' => [$this, 'block_translate_text_widget'],
                'translate_textarea_widget' => [$this, 'block_translate_textarea_widget'],
                'date_picker_widget' => [$this, 'block_date_picker_widget'],
                'date_range_widget' => [$this, 'block_date_range_widget'],
                'color_picker_widget' => [$this, 'block_color_picker_widget'],
                'search_and_reset_widget' => [$this, 'block_search_and_reset_widget'],
                'switch_widget' => [$this, 'block_switch_widget'],
                '_form_step6_attachments_widget' => [$this, 'block__form_step6_attachments_widget'],
                'form_label' => [$this, 'block_form_label'],
                'choice_label' => [$this, 'block_choice_label'],
                'checkbox_label' => [$this, 'block_checkbox_label'],
                'radio_label' => [$this, 'block_radio_label'],
                'checkbox_radio_label' => [$this, 'block_checkbox_radio_label'],
                'form_row' => [$this, 'block_form_row'],
                'button_row' => [$this, 'block_button_row'],
                'choice_row' => [$this, 'block_choice_row'],
                'date_row' => [$this, 'block_date_row'],
                'time_row' => [$this, 'block_time_row'],
                'datetime_row' => [$this, 'block_datetime_row'],
                'checkbox_row' => [$this, 'block_checkbox_row'],
                'radio_row' => [$this, 'block_radio_row'],
                'form_errors' => [$this, 'block_form_errors'],
                'material_choice_table_widget' => [$this, 'block_material_choice_table_widget'],
                'material_multiple_choice_table_widget' => [$this, 'block_material_multiple_choice_table_widget'],
                'translatable_widget' => [$this, 'block_translatable_widget'],
                'birthday_widget' => [$this, 'block_birthday_widget'],
                'file_widget' => [$this, 'block_file_widget'],
                'shop_restriction_checkbox_widget' => [$this, 'block_shop_restriction_checkbox_widget'],
                'generatable_text_widget' => [$this, 'block_generatable_text_widget'],
                'text_with_recommended_length_widget' => [$this, 'block_text_with_recommended_length_widget'],
                'integer_min_max_filter_widget' => [$this, 'block_integer_min_max_filter_widget'],
                'number_min_max_filter_widget' => [$this, 'block_number_min_max_filter_widget'],
                'form_help' => [$this, 'block_form_help'],
                'form_hint' => [$this, 'block_form_hint'],
                'custom_content_widget' => [$this, 'block_custom_content_widget'],
                'text_widget' => [$this, 'block_text_widget'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 28
        yield "
";
        // line 30
        yield "
";
        // line 31
        yield from $this->unwrap()->yieldBlock('form_widget_simple', $context, $blocks);
        // line 37
        yield "
";
        // line 38
        yield from $this->unwrap()->yieldBlock('textarea_widget', $context, $blocks);
        // line 42
        yield "
";
        // line 43
        yield from $this->unwrap()->yieldBlock('button_widget', $context, $blocks);
        // line 47
        yield "
";
        // line 48
        yield from $this->unwrap()->yieldBlock('money_widget', $context, $blocks);
        // line 64
        yield "
";
        // line 65
        yield from $this->unwrap()->yieldBlock('percent_widget', $context, $blocks);
        // line 73
        yield "
";
        // line 74
        yield from $this->unwrap()->yieldBlock('datetime_widget', $context, $blocks);
        // line 87
        yield "
";
        // line 88
        yield from $this->unwrap()->yieldBlock('date_widget', $context, $blocks);
        // line 106
        yield "
";
        // line 107
        yield from $this->unwrap()->yieldBlock('time_widget', $context, $blocks);
        // line 121
        yield "
";
        // line 122
        yield from $this->unwrap()->yieldBlock('choice_widget_collapsed', $context, $blocks);
        // line 127
        yield "
";
        // line 128
        yield from $this->unwrap()->yieldBlock('choice_widget_expanded', $context, $blocks);
        // line 149
        yield "
";
        // line 150
        yield from $this->unwrap()->yieldBlock('checkbox_widget', $context, $blocks);
        // line 160
        yield "
";
        // line 161
        yield from $this->unwrap()->yieldBlock('radio_widget', $context, $blocks);
        // line 171
        yield "
";
        // line 172
        yield from $this->unwrap()->yieldBlock('choice_tree_widget', $context, $blocks);
        // line 182
        yield "
";
        // line 183
        yield from $this->unwrap()->yieldBlock('choice_tree_item_widget', $context, $blocks);
        // line 221
        yield "
";
        // line 222
        yield from $this->unwrap()->yieldBlock('translatefields_widget', $context, $blocks);
        // line 248
        yield "
";
        // line 249
        yield from $this->unwrap()->yieldBlock('translate_fields_widget', $context, $blocks);
        // line 255
        yield "
";
        // line 256
        yield from $this->unwrap()->yieldBlock('translate_text_widget', $context, $blocks);
        // line 293
        yield "
";
        // line 294
        yield from $this->unwrap()->yieldBlock('translate_textarea_widget', $context, $blocks);
        // line 335
        yield "
";
        // line 336
        yield from $this->unwrap()->yieldBlock('date_picker_widget', $context, $blocks);
        // line 350
        yield "
";
        // line 351
        yield from $this->unwrap()->yieldBlock('date_range_widget', $context, $blocks);
        // line 359
        yield "
";
        // line 360
        yield from $this->unwrap()->yieldBlock('color_picker_widget', $context, $blocks);
        // line 369
        yield "
";
        // line 370
        yield from $this->unwrap()->yieldBlock('search_and_reset_widget', $context, $blocks);
        // line 395
        yield "
";
        // line 396
        yield from $this->unwrap()->yieldBlock('switch_widget', $context, $blocks);
        // line 416
        yield "
";
        // line 417
        yield from $this->unwrap()->yieldBlock('_form_step6_attachments_widget', $context, $blocks);
        // line 446
        yield "
";
        // line 448
        yield "
";
        // line 449
        yield from $this->unwrap()->yieldBlock('form_label', $context, $blocks);
        // line 452
        yield "
";
        // line 453
        yield from $this->unwrap()->yieldBlock('choice_label', $context, $blocks);
        // line 458
        yield "
";
        // line 459
        yield from $this->unwrap()->yieldBlock('checkbox_label', $context, $blocks);
        // line 462
        yield "
";
        // line 463
        yield from $this->unwrap()->yieldBlock('radio_label', $context, $blocks);
        // line 466
        yield "
";
        // line 467
        yield from $this->unwrap()->yieldBlock('checkbox_radio_label', $context, $blocks);
        // line 496
        yield "
";
        // line 498
        yield "
";
        // line 499
        yield from $this->unwrap()->yieldBlock('form_row', $context, $blocks);
        // line 506
        yield "
";
        // line 507
        yield from $this->unwrap()->yieldBlock('button_row', $context, $blocks);
        // line 513
        yield "
";
        // line 514
        yield from $this->unwrap()->yieldBlock('choice_row', $context, $blocks);
        // line 518
        yield "
";
        // line 519
        yield from $this->unwrap()->yieldBlock('date_row', $context, $blocks);
        // line 523
        yield "
";
        // line 524
        yield from $this->unwrap()->yieldBlock('time_row', $context, $blocks);
        // line 528
        yield "
";
        // line 529
        yield from $this->unwrap()->yieldBlock('datetime_row', $context, $blocks);
        // line 533
        yield "
";
        // line 534
        yield from $this->unwrap()->yieldBlock('checkbox_row', $context, $blocks);
        // line 540
        yield "
";
        // line 541
        yield from $this->unwrap()->yieldBlock('radio_row', $context, $blocks);
        // line 547
        yield "
";
        // line 549
        yield "
";
        // line 550
        yield from $this->unwrap()->yieldBlock('form_errors', $context, $blocks);
        // line 571
        yield "
";
        // line 573
        yield "
";
        // line 574
        yield from $this->unwrap()->yieldBlock('material_choice_table_widget', $context, $blocks);
        // line 610
        yield "
";
        // line 611
        yield from $this->unwrap()->yieldBlock('material_multiple_choice_table_widget', $context, $blocks);
        // line 663
        yield "
";
        // line 664
        yield from $this->unwrap()->yieldBlock('translatable_widget', $context, $blocks);
        // line 700
        yield "
";
        // line 701
        yield from $this->unwrap()->yieldBlock('birthday_widget', $context, $blocks);
        // line 725
        yield "
";
        // line 726
        yield from $this->unwrap()->yieldBlock('file_widget', $context, $blocks);
        // line 753
        yield "
";
        // line 754
        yield from $this->unwrap()->yieldBlock('shop_restriction_checkbox_widget', $context, $blocks);
        // line 770
        yield "
";
        // line 771
        yield from $this->unwrap()->yieldBlock('generatable_text_widget', $context, $blocks);
        // line 785
        yield "
";
        // line 786
        yield from $this->unwrap()->yieldBlock('text_with_recommended_length_widget', $context, $blocks);
        // line 811
        yield "
";
        // line 812
        yield from $this->unwrap()->yieldBlock('integer_min_max_filter_widget', $context, $blocks);
        // line 816
        yield "
";
        // line 817
        yield from $this->unwrap()->yieldBlock('number_min_max_filter_widget', $context, $blocks);
        // line 821
        yield "
";
        // line 822
        yield from $this->unwrap()->yieldBlock('form_help', $context, $blocks);
        // line 827
        yield "
";
        // line 828
        yield from $this->unwrap()->yieldBlock('form_hint', $context, $blocks);
        // line 835
        yield "
";
        // line 836
        yield from $this->unwrap()->yieldBlock('custom_content_widget', $context, $blocks);
        // line 839
        yield "
";
        // line 840
        yield from $this->unwrap()->yieldBlock('text_widget', $context, $blocks);
        yield from [];
    }

    // line 31
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_widget_simple(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 32
        if (( !array_key_exists("type", $context) || ("file" != ($context["type"] ?? null)))) {
            // line 33
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 33)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 33), "")) : ("")) . " form-control"))]);
        }
        // line 35
        yield from $this->yieldParentBlock("form_widget_simple", $context, $blocks);
        yield from [];
    }

    // line 38
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_textarea_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 39
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 39)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 39), "")) : ("")) . " form-control"))]);
        // line 40
        yield from $this->yieldParentBlock("textarea_widget", $context, $blocks);
        yield from [];
    }

    // line 43
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_button_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 44
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 44)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 44), "btn-default")) : ("btn-default")) . " btn"))]);
        // line 45
        yield from $this->yieldParentBlock("button_widget", $context, $blocks);
        yield from [];
    }

    // line 48
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_money_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 49
        yield "<div class=\"input-group money-type\">
        ";
        // line 50
        $context["prepend"] = ("{{" == Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["money_pattern"] ?? null), 0, 2));
        // line 51
        yield "        ";
        if ( !($context["prepend"] ?? null)) {
            // line 52
            yield "            <div class=\"input-group-prepend\">
                <span class=\"input-group-text\">";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(($context["money_pattern"] ?? null), ["{{ widget }}" => ""]), "html", null, true);
            yield "</span>
            </div>
        ";
        }
        // line 56
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        // line 57
        if (($context["prepend"] ?? null)) {
            // line 58
            yield "            <div class=\"input-group-append\">
                <span class=\"input-group-text\">";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(($context["money_pattern"] ?? null), ["{{ widget }}" => ""]), "html", null, true);
            yield "</span>
            </div>
        ";
        }
        // line 62
        yield "    </div>";
        yield from [];
    }

    // line 65
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_percent_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 66
        yield "<div class=\"input-group\">";
        // line 67
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        // line 68
        yield "<div class=\"input-group-append\">
            <span class=\"input-group-text\">%</span>
        </div>
    </div>";
        yield from [];
    }

    // line 74
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_datetime_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 75
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 76
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 78
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 78)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 78), "")) : ("")) . " form-inline"))]);
            // line 79
            yield "<div ";
            yield from             $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
            yield ">";
            // line 80
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, false, 80), 'errors');
            // line 81
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, false, false, 81), 'errors');
            // line 82
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, false, 82), 'widget', ["datetime" => true]);
            // line 83
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, false, false, 83), 'widget', ["datetime" => true]);
            // line 84
            yield "</div>";
        }
        yield from [];
    }

    // line 88
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_date_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 89
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 90
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 92
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 92)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 92), "")) : ("")) . " form-inline"))]);
            // line 93
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 94
                yield "<div ";
                yield from                 $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
                yield ">";
            }
            // line 96
            yield Twig\Extension\CoreExtension::replace(($context["date_pattern"] ?? null), ["{{ year }}" =>             // line 97
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "year", [], "any", false, false, false, 97), 'widget'), "{{ month }}" =>             // line 98
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "month", [], "any", false, false, false, 98), 'widget'), "{{ day }}" =>             // line 99
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "day", [], "any", false, false, false, 99), 'widget')]);
            // line 101
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 102
                yield "</div>";
            }
        }
        yield from [];
    }

    // line 107
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_time_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 108
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 109
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 111
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 111)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 111), "")) : ("")) . " form-inline"))]);
            // line 112
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? null)))) {
                // line 113
                yield "<div ";
                yield from                 $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
                yield ">";
            }
            // line 115
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "hour", [], "any", false, false, false, 115), 'widget');
            yield ":";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "minute", [], "any", false, false, false, 115), 'widget');
            if (($context["with_seconds"] ?? null)) {
                yield ":";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "second", [], "any", false, false, false, 115), 'widget');
            }
            // line 116
            yield "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? null)))) {
                // line 117
                yield "</div>";
            }
        }
        yield from [];
    }

    // line 122
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_widget_collapsed(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 123
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 123)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 123), "")) : ("")) . " custom-select"))]);
        // line 124
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["aria-label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%inputId% input", ["%inputId%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 124), "id", [], "any", false, false, false, 124)], "Admin.Global")]);
        // line 125
        yield from $this->yieldParentBlock("choice_widget_collapsed", $context, $blocks);
        yield from [];
    }

    // line 128
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_widget_expanded(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 129
        if (CoreExtension::inFilter("-inline", ((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 129)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 129), "")) : ("")))) {
            // line 130
            yield "<div class=\"control-group\">";
            // line 131
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 132
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["parent_label_class" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 133
($context["label_attr"] ?? null), "class", [], "any", true, true, false, 133)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 133), "")) : ("")), "translation_domain" =>                 // line 134
($context["choice_translation_domain"] ?? null)]);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 137
            yield "</div>";
        } else {
            // line 139
            yield "<div ";
            yield from             $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
            yield ">";
            // line 140
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 141
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["parent_label_class" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 142
($context["label_attr"] ?? null), "class", [], "any", true, true, false, 142)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 142), "")) : ("")), "translation_domain" =>                 // line 143
($context["choice_translation_domain"] ?? null)]);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 146
            yield "</div>";
        }
        yield from [];
    }

    // line 150
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_checkbox_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 151
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["parent_label_class"] ?? null), "")) : (""));
        // line 152
        if (CoreExtension::inFilter("checkbox-inline", ($context["parent_label_class"] ?? null))) {
            // line 153
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)]);
        } else {
            // line 155
            yield "<div class=\"checkbox\">";
            // line 156
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)]);
            // line 157
            yield "</div>";
        }
        yield from [];
    }

    // line 161
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_radio_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 162
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["parent_label_class"] ?? null), "")) : (""));
        // line 163
        if (CoreExtension::inFilter("radio-inline", ($context["parent_label_class"] ?? null))) {
            // line 164
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("radio_widget", $context, $blocks)]);
        } else {
            // line 166
            yield "<div class=\"radio form-check form-check-radio\">";
            // line 167
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("radio_widget", $context, $blocks)]);
            // line 168
            yield "</div>";
        }
        yield from [];
    }

    // line 172
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_tree_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 173
        yield "<div ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield " class=\"category-tree-overflow\">
        <ul class=\"category-tree\">
            <li class=\"form-control-label text-right main-category\">";
        // line 175
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Main category", [], "Admin.Catalog.Feature"), "html", null, true);
        yield "</li>";
        // line 176
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["choices"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 177
            yield "            ";
            yield from             $this->unwrap()->yieldBlock("choice_tree_item_widget", $context, $blocks);
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
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        yield "</ul>
    </div>";
        yield from [];
    }

    // line 183
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_tree_item_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 184
        yield "<li";
        if ((array_key_exists("defaultHidden", $context) && (($context["defaultHidden"] ?? null) === true))) {
            yield " class=\"more\"";
        }
        yield ">
        ";
        // line 185
        $context["checked"] = (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 185), "submitted_values", [], "any", true, true, false, 185) && CoreExtension::getAttribute($this->env, $this->source, ($context["submitted_values"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["child"] ?? null), "id_category", [], "any", false, false, false, 185), [], "array", true, true, false, 185));
        // line 186
        yield "        ";
        if (($context["multiple"] ?? null)) {
            // line 187
            yield "<div class=\"checkbox\">
                <label>
                    <input type=\"checkbox\" name=\"";
            // line 189
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 189), "full_name", [], "any", false, false, false, 189), "html", null, true);
            yield "[tree][]\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["child"] ?? null), "id_category", [], "any", false, false, false, 189), "html", null, true);
            yield "\"";
            if (($context["checked"] ?? null)) {
                yield " checked=\"checked\"";
            }
            yield " class=\"category\">
                    ";
            // line 190
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["child"] ?? null), "active", [], "any", true, true, false, 190) && (CoreExtension::getAttribute($this->env, $this->source, ($context["child"] ?? null), "active", [], "any", false, false, false, 190) == 0))) {
                // line 191
                yield "                        <i>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["child"] ?? null), "name", [], "any", false, false, false, 191), "html", null, true);
                yield "</i>";
            } else {
                // line 193
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["child"] ?? null), "name", [], "any", false, false, false, 193), "html", null, true);
                yield "
                    ";
            }
            // line 195
            yield "                    ";
            if (array_key_exists("defaultCategory", $context)) {
                // line 196
                yield "                        <input type=\"radio\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["child"] ?? null), "id_category", [], "any", false, false, false, 196), "html", null, true);
                yield "\" name=\"ignore\" class=\"default-category\" />
                    ";
            }
            // line 198
            yield "                </label>
            </div>";
        } else {
            // line 201
            yield "<div class=\"radio\">
              <label>
                <input type=\"radio\" name=\"form[";
            // line 203
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 203), "id", [], "any", false, false, false, 203), "html", null, true);
            yield "][tree]\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["child"] ?? null), "id_category", [], "any", false, false, false, 203), "html", null, true);
            yield "\"";
            if (($context["checked"] ?? null)) {
                yield " checked=\"checked\"";
            }
            yield " class=\"category\"";
            if (($context["required"] ?? null)) {
                yield " required";
            }
            yield ">
                    ";
            // line 204
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["child"] ?? null), "name", [], "any", false, false, false, 204), "html", null, true);
            yield "
                    ";
            // line 205
            if (array_key_exists("defaultCategory", $context)) {
                // line 206
                yield "                        <input type=\"radio\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["child"] ?? null), "id_category", [], "any", false, false, false, 206), "html", null, true);
                yield "\" name=\"ignore\" class=\"default-category\" />
                    ";
            }
            // line 208
            yield "                </label>
            </div>";
        }
        // line 211
        yield "        ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["child"] ?? null), "children", [], "any", true, true, false, 211)) {
            // line 212
            yield "            <ul";
            if ((array_key_exists("defaultHidden", $context) && (($context["defaultHidden"] ?? null) === true))) {
                yield " style=\"display: none;\"";
            }
            yield ">
                ";
            // line 213
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["child"] ?? null), "children", [], "any", false, false, false, 213));
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
                // line 214
                yield "                    ";
                $context["child"] = $context["item"];
                // line 215
                yield "                    ";
                yield from                 $this->unwrap()->yieldBlock("choice_tree_item_widget", $context, $blocks);
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
            // line 217
            yield "</ul>
        ";
        }
        // line 219
        yield "    </li>";
        yield from [];
    }

    // line 222
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_translatefields_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 223
        yield "    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        yield "
    <div class=\"translations tabbable\" id=\"";
        // line 224
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 224), "id", [], "any", false, false, false, 224), "html", null, true);
        yield "\">
        ";
        // line 225
        if (((($context["hideTabs"] ?? null) == false) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["form"] ?? null)) > 1))) {
            // line 226
            yield "        <ul class=\"translationsLocales nav nav-pills\">
            ";
            // line 227
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
                // line 228
                yield "                <li class=\"nav-item\">
                    <a href=\"#\" data-locale=\"";
                // line 229
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 229), "label", [], "any", false, false, false, 229), "html", null, true);
                yield "\" class=\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["defaultLocale"] ?? null), "id_lang", [], "any", false, false, false, 229) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 229), "name", [], "any", false, false, false, 229))) {
                    yield "active";
                }
                yield " nav-link\" data-toggle=\"tab\" data-target=\".translationsFields-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 229), "id", [], "any", false, false, false, 229), "html", null, true);
                yield "\">
                        ";
                // line 230
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 230), "label", [], "any", false, false, false, 230)), "html", null, true);
                yield "
                    </a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['translationsFields'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 234
            yield "        </ul>
        ";
        }
        // line 236
        yield "
        <div class=\"translationsFields tab-content\">
            ";
        // line 238
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
            // line 239
            yield "                <div data-locale=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 239), "label", [], "any", false, false, false, 239), "html", null, true);
            yield "\" class=\"translationsFields-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 239), "id", [], "any", false, false, false, 239), "html", null, true);
            yield " tab-pane translation-field ";
            if (((($context["hideTabs"] ?? null) == false) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["form"] ?? null)) > 1))) {
                yield "panel panel-default";
            }
            yield " ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["defaultLocale"] ?? null), "id_lang", [], "any", false, false, false, 239) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 239), "name", [], "any", false, false, false, 239))) {
                yield "show active";
            }
            yield " ";
            if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 239), "valid", [], "any", false, false, false, 239)) {
                yield "field-error";
            }
            yield " translation-label-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 239), "label", [], "any", false, false, false, 239), "html", null, true);
            yield "\">
                    ";
            // line 240
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translationsFields"], 'errors');
            yield "
                    ";
            // line 241
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translationsFields"], 'widget');
            // line 242
            yield from             $this->unwrap()->yieldBlock("form_help", $context, $blocks);
            // line 243
            yield "</div>
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
        unset($context['_seq'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 245
        yield "        </div>
    </div>
";
        yield from [];
    }

    // line 249
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_translate_fields_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 250
        if (( !array_key_exists("type", $context) || ("file" != ($context["type"] ?? null)))) {
            // line 251
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 251)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 251), "")) : ("")) . " form-control"))]);
        }
        // line 253
        yield from $this->yieldParentBlock("translate_fields_widget", $context, $blocks);
        yield from [];
    }

    // line 256
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_translate_text_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 257
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        yield "
    <div class=\"input-group locale-input-group js-locale-input-group\">
        ";
        // line 259
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["translateField"]) {
            // line 260
            yield "            ";
            $context["classes"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, true, false, 260), "attr", [], "any", false, true, false, 260), "class", [], "any", true, true, false, 260)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 260), "attr", [], "any", false, false, false, 260), "class", [], "any", false, false, false, 260), "")) : ("")) . " js-locale-input");
            // line 261
            yield "            ";
            $context["classes"] = ((($context["classes"] ?? null) . " js-locale-") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 261), "label", [], "any", false, false, false, 261));
            // line 262
            yield "
            ";
            // line 263
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["default_locale"] ?? null), "id_lang", [], "any", false, false, false, 263) != CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 263), "name", [], "any", false, false, false, 263))) {
                // line 264
                yield "                ";
                $context["classes"] = (($context["classes"] ?? null) . " d-none");
                // line 265
                yield "            ";
            }
            // line 266
            yield "
            ";
            // line 267
            $context["attr"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 267), "attr", [], "any", false, false, false, 267);
            // line 268
            yield "
            ";
            // line 269
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translateField"], 'widget', ["attr" => ["class" => Twig\Extension\CoreExtension::trim(($context["classes"] ?? null))]]);
            yield "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['translateField'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 271
        yield "
        ";
        // line 272
        if ( !($context["hide_locales"] ?? null)) {
            // line 273
            yield "        <div class=\"dropdown\">
            <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                    type=\"button\"
                    data-toggle=\"dropdown\"
                    aria-haspopup=\"true\"
                    aria-expanded=\"false\"
                    id=\"";
            // line 279
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 279), "id", [], "any", false, false, false, 279), "html", null, true);
            yield "\"
            >
                ";
            // line 281
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 281), "default_locale", [], "any", false, false, false, 281), "iso_code", [], "any", false, false, false, 281), "html", null, true);
            yield "
            </button>

            <div class=\"dropdown-menu dropdown-menu-right locale-dropdown-menu\" aria-labelledby=\"";
            // line 284
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 284), "id", [], "any", false, false, false, 284), "html", null, true);
            yield "\">
                ";
            // line 285
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["locales"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 286
                yield "                    <span class=\"dropdown-item js-locale-item\" data-locale=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["locale"], "iso_code", [], "any", false, false, false, 286), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["locale"], "name", [], "any", false, false, false, 286), "html", null, true);
                yield "</span>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['locale'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 288
            yield "            </div>
        </div>
        ";
        }
        // line 291
        yield "    </div>";
        yield from [];
    }

    // line 294
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_translate_textarea_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 295
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        yield "
  <div class=\"input-group locale-input-group js-locale-input-group\">
    ";
        // line 297
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["textarea"]) {
            // line 298
            yield "      ";
            $context["classes"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["textarea"], "vars", [], "any", false, true, false, 298), "attr", [], "any", false, true, false, 298), "class", [], "any", true, true, false, 298)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["textarea"], "vars", [], "any", false, false, false, 298), "attr", [], "any", false, false, false, 298), "class", [], "any", false, false, false, 298), "")) : ("")) . " js-locale-input");
            // line 299
            yield "      ";
            $context["classes"] = ((($context["classes"] ?? null) . " js-locale-") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["textarea"], "vars", [], "any", false, false, false, 299), "label", [], "any", false, false, false, 299));
            // line 300
            yield "
      ";
            // line 301
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["default_locale"] ?? null), "id_lang", [], "any", false, false, false, 301) != CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["textarea"], "vars", [], "any", false, false, false, 301), "name", [], "any", false, false, false, 301))) {
                // line 302
                yield "        ";
                $context["classes"] = (($context["classes"] ?? null) . " d-none");
                // line 303
                yield "      ";
            }
            // line 304
            yield "
      <div class=\"";
            // line 305
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["classes"] ?? null), "html", null, true);
            yield "\">
        ";
            // line 306
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["textarea"], 'widget', ["attr" => ["class" => Twig\Extension\CoreExtension::trim(($context["classes"] ?? null))]]);
            yield "
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['textarea'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 309
        yield "
    ";
        // line 310
        if (($context["show_locale_select"] ?? null)) {
            // line 311
            yield "      <div class=\"dropdown\">
        <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                type=\"button\"
                data-toggle=\"dropdown\"
                aria-haspopup=\"true\"
                aria-expanded=\"false\"
                id=\"";
            // line 317
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 317), "id", [], "any", false, false, false, 317), "html", null, true);
            yield "\"
        >
          ";
            // line 319
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 319), "default_locale", [], "any", false, false, false, 319), "iso_code", [], "any", false, false, false, 319), "html", null, true);
            yield "
        </button>

        <div class=\"dropdown-menu dropdown-menu-right locale-dropdown-menu\" aria-labelledby=\"";
            // line 322
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 322), "id", [], "any", false, false, false, 322), "html", null, true);
            yield "\">
          ";
            // line 323
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["locales"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 324
                yield "            <span class=\"dropdown-item js-locale-item\"
                  data-locale=\"";
                // line 325
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["locale"], "iso_code", [], "any", false, false, false, 325), "html", null, true);
                yield "\"
            >
              ";
                // line 327
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["locale"], "name", [], "any", false, false, false, 327), "html", null, true);
                yield "
            </span>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['locale'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 330
            yield "        </div>
      </div>
    ";
        }
        // line 333
        yield "  </div>";
        yield from [];
    }

    // line 336
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_date_picker_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 337
        yield "  ";
        $_v0 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 338
            yield "    ";
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 338)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 338), "")) : ("")) . " datepicker form-control"))]);
            // line 339
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["aria-label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%inputId% input", ["%inputId%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 339), "id", [], "any", false, false, false, 339)], "Admin.Global")]);
            // line 340
            yield "<div class=\"input-group datepicker\">
      <input type=\"text\" data-format=\"";
            // line 341
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["date_format"] ?? null), "html", null, true);
            yield "\" ";
            yield from             $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
            yield " ";
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["value"] ?? null))) {
                yield "value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
                yield "\" ";
            }
            yield "/>
      <div class=\"input-group-append\">
        <div class=\"input-group-text\">
          <i class=\"material-icons\">date_range</i>
        </div>
      </div>
    </div>
  ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 337
        yield Twig\Extension\CoreExtension::spaceless($_v0);
        yield from [];
    }

    // line 351
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_date_range_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 352
        yield "  ";
        $_v1 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 353
            yield "    ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "from", [], "any", false, false, false, 353), 'widget');
            yield "
    ";
            // line 354
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "from", [], "any", false, false, false, 354), 'errors');
            yield "
    ";
            // line 355
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "to", [], "any", false, false, false, 355), 'widget');
            yield "
    ";
            // line 356
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "to", [], "any", false, false, false, 356), 'errors');
            yield "
  ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 352
        yield Twig\Extension\CoreExtension::spaceless($_v1);
        yield from [];
    }

    // line 360
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_color_picker_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 361
        yield "  ";
        $_v2 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 362
            yield "    ";
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 362)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 362), "")) : ("")) . " form-control colorpicker"))]);
            // line 363
            yield "    <div class=\"input-group colorpicker\">
      <input type=\"text\" ";
            // line 364
            yield from             $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
            yield " ";
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["value"] ?? null))) {
                yield "value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
                yield "\" ";
            }
            yield "/>
    </div>";
            // line 366
            yield from             $this->unwrap()->yieldBlock("form_help", $context, $blocks);
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 361
        yield Twig\Extension\CoreExtension::spaceless($_v2);
        yield from [];
    }

    // line 370
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_search_and_reset_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 371
        yield "    ";
        $_v3 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 372
            yield "        <button type=\"submit\"
                class=\"btn btn-primary grid-search-button\"
                title=\"";
            // line 374
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search", [], "Admin.Actions"), "html", null, true);
            yield "\"
                name=\"";
            // line 375
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["full_name"] ?? null), "html", null, true);
            yield "[search]\"
        >
          <i class=\"material-icons\">search</i>
          ";
            // line 378
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search", [], "Admin.Actions"), "html", null, true);
            yield "
        </button>
      ";
            // line 380
            if (($context["show_reset_button"] ?? null)) {
                // line 381
                yield "          <div class=\"js-grid-reset-button\">
            <button type=\"reset\"
                    name=\"";
                // line 383
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["full_name"] ?? null), "html", null, true);
                yield "[reset]\"
                    class=\"btn btn-link js-reset-search btn d-block grid-reset-button\"
                    data-url=\"";
                // line 385
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["reset_url"] ?? null), "html", null, true);
                yield "\"
                    data-redirect=\"";
                // line 386
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["redirect_url"] ?? null), "html", null, true);
                yield "\"
            >
              <i class=\"material-icons\">clear</i>
              ";
                // line 389
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reset", [], "Admin.Actions"), "html", null, true);
                yield "
            </button>
          </div>
      ";
            }
            // line 393
            yield "    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 371
        yield Twig\Extension\CoreExtension::spaceless($_v3);
        yield from [];
    }

    // line 396
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_switch_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 397
        yield "    ";
        $_v4 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 398
            yield "    <span class=\"ps-switch\">
        ";
            // line 399
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["choices"] ?? null));
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
                // line 400
                yield "            ";
                $context["inputId"] = ((($context["id"] ?? null) . "_") . CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 400));
                // line 401
                yield "            <input id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["inputId"] ?? null), "html", null, true);
                yield "\"
                ";
                // line 402
                yield from                 $this->unwrap()->yieldBlock("attributes", $context, $blocks);
                yield "
                name=\"";
                // line 403
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["full_name"] ?? null), "html", null, true);
                yield "\"
                value=\"";
                // line 404
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 404), "html", null, true);
                yield "\"
                ";
                // line 405
                if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], ($context["value"] ?? null))) {
                    yield "checked=\"\"";
                }
                // line 406
                yield "                ";
                if (($context["disabled"] ?? null)) {
                    yield "disabled=\"\"";
                }
                // line 407
                yield "                type=\"radio\"
                aria-label=\"";
                // line 408
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 408), [], ($context["choice_translation_domain"] ?? null)), "html", null, true);
                yield "\"
                >
            <label for=\"";
                // line 410
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["inputId"] ?? null), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 410), [], ($context["choice_translation_domain"] ?? null)), "html", null, true);
                yield "</label>
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
            // line 412
            yield "        <span class=\"slide-button\"></span>
    </span>
    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 397
        yield Twig\Extension\CoreExtension::spaceless($_v4);
        yield from [];
    }

    // line 417
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__form_step6_attachments_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 418
        yield "    <div class=\"js-options-no-attachments ";
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["form"] ?? null)) > 0)) ? ("hide") : (""));
        yield "\">
        <small>";
        // line 419
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("There is no attachment yet.", [], "Admin.Catalog.Notification"), "html", null, true);
        yield "</small>
    </div>
    <div id=\"product-attachments\" class=\"panel panel-default\">
      <div class=\"panel-body js-options-with-attachments ";
        // line 422
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["form"] ?? null)) == 0)) ? ("hide") : (""));
        yield "\">
        <div>
          <table id=\"product-attachment-file\" class=\"table\">
            <thead class=\"thead-default\">
              <tr>
                <th class=\"col-md-3\">";
        // line 427
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Title", [], "Admin.Global"), "html", null, true);
        yield "</th>
                <th class=\"col-md-6\">";
        // line 428
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("File name", [], "Admin.Global"), "html", null, true);
        yield "</th>
                <th class=\"col-md-2\">";
        // line 429
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type", [], "Admin.Catalog.Feature"), "html", null, true);
        yield "</th>
              </tr>
            </thead>
            <tbody>";
        // line 433
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 434
            yield "              <tr>
                <td class=\"col-md-3\">";
            // line 435
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            yield "</td>
                <td class=\"col-md-6 file-name\"><span>";
            // line 436
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v5 = (($_v6 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 436), "attr", [], "any", false, false, false, 436), "data", [], "any", false, false, false, 436)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 436)] ?? null) : null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["file_name"] ?? null) : null), "html", null, true);
            yield "</span></td>
                <td class=\"col-md-2\">";
            // line 437
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v7 = (($_v8 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 437), "attr", [], "any", false, false, false, 437), "data", [], "any", false, false, false, 437)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 437)] ?? null) : null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["mime"] ?? null) : null), "html", null, true);
            yield "</td>
              </tr>
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
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 440
        yield "</tbody>
          </table>
        </div>
      </div>
    </div>
";
        yield from [];
    }

    // line 449
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 450
        yield from $this->yieldParentBlock("form_label", $context, $blocks);
        yield from [];
    }

    // line 453
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 455
        $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::replace(((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 455)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 455), "")) : ("")), ["checkbox-inline" => "", "radio-inline" => ""]))]);
        // line 456
        yield from         $this->unwrap()->yieldBlock("form_label", $context, $blocks);
        yield from [];
    }

    // line 459
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_checkbox_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 460
        yield from         $this->unwrap()->yieldBlock("checkbox_radio_label", $context, $blocks);
        yield from [];
    }

    // line 463
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_radio_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 464
        yield from         $this->unwrap()->yieldBlock("checkbox_radio_label", $context, $blocks);
        yield from [];
    }

    // line 467
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_checkbox_radio_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 468
        yield "    ";
        // line 469
        yield "    ";
        if (array_key_exists("widget", $context)) {
            // line 470
            yield "      ";
            if (($context["required"] ?? null)) {
                // line 471
                yield "        ";
                $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 471)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 471), "")) : ("")) . " required"))]);
                // line 472
                yield "      ";
            }
            // line 473
            yield "      ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 474
                yield "          ";
                $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim(((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 474)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 474), "")) : ("")) . " ") . ($context["parent_label_class"] ?? null)))]);
                // line 475
                yield "      ";
            }
            // line 476
            yield "      ";
            if (( !(($context["label"] ?? null) === false) && Twig\Extension\CoreExtension::testEmpty(($context["label"] ?? null)))) {
                // line 477
                yield "          ";
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
                // line 478
                yield "      ";
            }
            // line 479
            yield "
      ";
            // line 480
            if ((array_key_exists("material_design", $context) || CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "material_design", [], "any", true, true, false, 480))) {
                // line 481
                yield "        <div class=\"md-checkbox md-checkbox-inline\">
          <label";
                // line 482
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
                // line 483
                yield ($context["widget"] ?? null);
                // line 484
                yield "<i class=\"md-checkbox-control\"></i>";
                // line 485
                yield (( !(($context["label"] ?? null) === false)) ? ((((($context["translation_domain"] ?? null) === false)) ? (($context["label"] ?? null)) : (($context["label"] ?? null)))) : (""));
                // line 486
                yield "</label>
        </div>
      ";
            } else {
                // line 489
                yield "      <label";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["label_attr"] ?? null));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                    yield "=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrvalue"], "html", null, true);
                    if (($context["attrname"] === "class")) {
                        yield " form-check-label";
                    }
                    yield "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['attrname'], $context['attrvalue'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["label_attr"] ?? null)) <= 0)) {
                    yield " class=\"form-check-label\"";
                }
                yield ">";
                // line 490
                yield ($context["widget"] ?? null);
                // line 491
                yield (( !(($context["label"] ?? null) === false)) ? ((((($context["translation_domain"] ?? null) === false)) ? (($context["label"] ?? null)) : (($context["label"] ?? null)))) : (""));
                // line 492
                yield "</label>
      ";
            }
            // line 494
            yield "    ";
        }
        yield from [];
    }

    // line 499
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 500
        yield "<div class=\"form-group";
        if ((( !($context["compound"] ?? null) || ((array_key_exists("force_error", $context)) ? (Twig\Extension\CoreExtension::default(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
            yield " has-error";
        }
        yield "\">";
        // line 501
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 502
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 503
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 504
        yield "</div>";
        yield from [];
    }

    // line 507
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_button_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 508
        $context["rowClass"] = ("form-group " . Twig\Extension\CoreExtension::trim(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 508), "row_attr", [], "any", false, true, false, 508), "class", [], "any", true, true, false, 508)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 508), "row_attr", [], "any", false, false, false, 508), "class", [], "any", false, false, false, 508), "")) : (""))));
        // line 509
        yield "    <div class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rowClass"] ?? null), "html", null, true);
        yield "\">";
        // line 510
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 511
        yield "</div>";
        yield from [];
    }

    // line 514
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 515
        $context["force_error"] = true;
        // line 516
        yield from         $this->unwrap()->yieldBlock("form_row", $context, $blocks);
        yield from [];
    }

    // line 519
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_date_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 520
        $context["force_error"] = true;
        // line 521
        yield from         $this->unwrap()->yieldBlock("form_row", $context, $blocks);
        yield from [];
    }

    // line 524
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_time_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 525
        $context["force_error"] = true;
        // line 526
        yield from         $this->unwrap()->yieldBlock("form_row", $context, $blocks);
        yield from [];
    }

    // line 529
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_datetime_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 530
        $context["force_error"] = true;
        // line 531
        yield from         $this->unwrap()->yieldBlock("form_row", $context, $blocks);
        yield from [];
    }

    // line 534
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_checkbox_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 535
        yield "<div class=\"form-group";
        if ( !($context["valid"] ?? null)) {
            yield " has-error";
        }
        yield "\">";
        // line 536
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 537
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 538
        yield "</div>";
        yield from [];
    }

    // line 541
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_radio_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 542
        yield "<div class=\"form-group";
        if ( !($context["valid"] ?? null)) {
            yield " has-error";
        }
        yield "\">";
        // line 543
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 544
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 545
        yield "</div>";
        yield from [];
    }

    // line 550
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_errors(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 551
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["errors"] ?? null)) > 0)) {
            // line 552
            yield "<div class=\"alert alert-danger\">";
            // line 553
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["errors"] ?? null)) > 1)) {
                // line 554
                yield "<ul class=\"alert-text\">";
                // line 555
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["errors"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 556
                    yield "<li> ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "messageTemplate", [], "any", false, false, false, 556), CoreExtension::getAttribute($this->env, $this->source, $context["error"], "messageParameters", [], "any", false, false, false, 556), "form_error"), "html", null, true);
                    yield "
                    </li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 559
                yield "</ul>";
            } else {
                // line 561
                yield "<div class=\"alert-text\">";
                // line 562
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["errors"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 563
                    yield "<p> ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "messageTemplate", [], "any", false, false, false, 563), CoreExtension::getAttribute($this->env, $this->source, $context["error"], "messageParameters", [], "any", false, false, false, 563), "form_error"), "html", null, true);
                    yield "
                </p>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 566
                yield "</div>";
            }
            // line 568
            yield "</div>";
        }
        yield from [];
    }

    // line 574
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_material_choice_table_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 575
        yield "  ";
        $_v9 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 576
            yield "    <div class=\"choice-table\">
      <table class=\"table table-bordered mb-0\">
        <thead>
          <tr>
            <th class=\"checkbox\">
              <div class=\"md-checkbox\">
                <label>
                  <input
                    type=\"checkbox\"
                    class=\"js-choice-table-select-all\"
                    ";
            // line 586
            if (($context["isCheckSelectAll"] ?? null)) {
                // line 587
                yield "                      checked
                    ";
            }
            // line 589
            yield "                  >
                  <i class=\"md-checkbox-control\"></i>
                  ";
            // line 591
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select all", [], "Admin.Actions"), "html", null, true);
            yield " ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 591), "displayTotalItems", [], "any", false, false, false, 591)) {
                yield " (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["form"] ?? null)), "html", null, true);
                yield ") ";
            }
            // line 592
            yield "                </label>
              </div>
            </th>
          </tr>
        </thead>
        <tbody>
        ";
            // line 598
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 599
                yield "          <tr>
            <td>
              ";
                // line 601
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["material_design" => true]);
                yield "
            </td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 605
            yield "        </tbody>
      </table>
    </div>
  ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 575
        yield Twig\Extension\CoreExtension::spaceless($_v9);
        yield from [];
    }

    // line 611
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_material_multiple_choice_table_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 612
        yield "  ";
        $_v10 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 613
            yield "    <div class=\"choice-table";
            if (($context["headers_fixed"] ?? null)) {
                yield "-headers-fixed";
            }
            yield " table-responsive\">
      <table class=\"table\">
        <thead>
          <tr>
            <th>";
            // line 617
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["label"] ?? null), "html", null, true);
            yield "</th>
            ";
            // line 618
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["child_choice"]) {
                // line 619
                yield "              <th class=\"text-center\">
                ";
                // line 620
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child_choice"], "vars", [], "any", false, false, false, 620), "multiple", [], "any", false, false, false, 620) && !CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child_choice"], "vars", [], "any", false, false, false, 620), "name", [], "any", false, false, false, 620), ($context["headers_to_disable"] ?? null)))) {
                    // line 621
                    yield "                  <a href=\"#\"
                     class=\"js-multiple-choice-table-select-column\"
                     data-column-num=\"";
                    // line 623
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 623) + 1), "html", null, true);
                    yield "\"
                     data-column-checked=\"false\"
                  >
                    ";
                    // line 626
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child_choice"], "vars", [], "any", false, false, false, 626), "label", [], "any", false, false, false, 626), "html", null, true);
                    yield "
                  </a>
                ";
                } else {
                    // line 629
                    yield "                  ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child_choice"], "vars", [], "any", false, false, false, 629), "label", [], "any", false, false, false, 629), "html", null, true);
                    yield "
                ";
                }
                // line 631
                yield "              </th>
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
            unset($context['_seq'], $context['_key'], $context['child_choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 633
            yield "          </tr>
        </thead>
        <tbody>
        ";
            // line 636
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["choices"] ?? null));
            foreach ($context['_seq'] as $context["choice_name"] => $context["choice_value"]) {
                // line 637
                yield "          <tr>
            <td>
              ";
                // line 639
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["choice_name"], "html", null, true);
                yield "
            </td>
            ";
                // line 641
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
                foreach ($context['_seq'] as $context["child_choice_name"] => $context["child_choice"]) {
                    // line 642
                    yield "              <td class=\"text-center\">
                ";
                    // line 643
                    if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["child_choice_entry_index_mapping"] ?? null), $context["choice_value"], [], "array", false, true, false, 643), $context["child_choice_name"], [], "array", true, true, false, 643)) {
                        // line 644
                        yield "                  ";
                        $context["entry_index"] = (($_v11 = (($_v12 = ($context["child_choice_entry_index_mapping"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12[$context["choice_value"]] ?? null) : null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11[$context["child_choice_name"]] ?? null) : null);
                        // line 645
                        yield "
                  ";
                        // line 646
                        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child_choice"], "vars", [], "any", false, false, false, 646), "multiple", [], "any", false, false, false, 646)) {
                            // line 647
                            yield "                    ";
                            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($_v13 = $context["child_choice"]) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13[($context["entry_index"] ?? null)] ?? null) : null), 'widget', ["material_design" => true]);
                            yield "
                  ";
                        } else {
                            // line 649
                            yield "                    ";
                            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($_v14 = $context["child_choice"]) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14[($context["entry_index"] ?? null)] ?? null) : null), 'widget');
                            yield "
                  ";
                        }
                        // line 651
                        yield "                ";
                    } else {
                        // line 652
                        yield "                  --
                ";
                    }
                    // line 654
                    yield "              </td>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['child_choice_name'], $context['child_choice'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 656
                yield "          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['choice_name'], $context['choice_value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 658
            yield "        </tbody>
      </table>
    </div>
  ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 612
        yield Twig\Extension\CoreExtension::spaceless($_v10);
        yield from [];
    }

    // line 664
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_translatable_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 665
        $context["formClass"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 665), "attr", [], "any", false, true, false, 665), "class", [], "any", true, true, false, 665)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 665), "attr", [], "any", false, false, false, 665), "class", [], "any", false, false, false, 665), "")) : ("")) . Twig\Extension\CoreExtension::trim(" input-group locale-input-group js-locale-input-group d-flex"));
        // line 666
        yield "  <div class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["formClass"] ?? null), "html", null, true);
        yield "\">
    ";
        // line 667
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["translateField"]) {
            // line 668
            yield "      ";
            $context["classes"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, true, false, 668), "attr", [], "any", false, true, false, 668), "class", [], "any", true, true, false, 668)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 668), "attr", [], "any", false, false, false, 668), "class", [], "any", false, false, false, 668), "")) : ("")) . " js-locale-input");
            // line 669
            yield "      ";
            $context["classes"] = ((($context["classes"] ?? null) . " js-locale-") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 669), "label", [], "any", false, false, false, 669));
            // line 670
            yield "      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["default_locale"] ?? null), "id_lang", [], "any", false, false, false, 670) != CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 670), "name", [], "any", false, false, false, 670))) {
                // line 671
                yield "        ";
                $context["classes"] = (($context["classes"] ?? null) . " d-none");
                // line 672
                yield "      ";
            }
            // line 673
            yield "      <div class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["classes"] ?? null), "html", null, true);
            yield "\" style=\"flex-grow: 1;\">
        ";
            // line 674
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translateField"], 'widget');
            yield "
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['translateField'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 677
        yield "    ";
        if ( !($context["hide_locales"] ?? null)) {
            // line 678
            yield "      <div class=\"dropdown\">
        <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                type=\"button\"
                data-toggle=\"dropdown\"
                ";
            // line 682
            if (array_key_exists("change_form_language_url", $context)) {
                // line 683
                yield "                  data-change-language-url=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 683), "change_form_language_url", [], "any", false, false, false, 683), "html", null, true);
                yield "\"
                ";
            }
            // line 685
            yield "                aria-haspopup=\"true\"
                aria-expanded=\"false\"
                id=\"";
            // line 687
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 687), "id", [], "any", false, false, false, 687), "html", null, true);
            yield "_dropdown\"
        >
          ";
            // line 689
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 689), "default_locale", [], "any", false, false, false, 689), "iso_code", [], "any", false, false, false, 689), "html", null, true);
            yield "
        </button>
        <div class=\"dropdown-menu dropdown-menu-right locale-dropdown-menu\" aria-labelledby=\"";
            // line 691
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 691), "id", [], "any", false, false, false, 691), "html", null, true);
            yield "_dropdown\">
          ";
            // line 692
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["locales"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 693
                yield "            <span class=\"dropdown-item js-locale-item\" data-locale=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["locale"], "iso_code", [], "any", false, false, false, 693), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["locale"], "name", [], "any", false, false, false, 693), "html", null, true);
                yield "</span>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['locale'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 695
            yield "        </div>
      </div>
    ";
        }
        // line 698
        yield "  </div>";
        yield from [];
    }

    // line 701
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_birthday_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 702
        yield "  ";
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 703
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 705
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 705)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 705), "")) : ("")) . " form-inline"))]);
            // line 706
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 707
                yield "<div ";
                yield from                 $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
                yield ">";
            }
            // line 709
            yield "
    ";
            // line 710
            $context["yearWidget"] = (("<div class=\"col pl-0\">" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "year", [], "any", false, false, false, 710), 'widget')) . "</div>");
            // line 711
            yield "    ";
            $context["monthWidget"] = (("<div class=\"col\">" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "month", [], "any", false, false, false, 711), 'widget')) . "</div>");
            // line 712
            yield "    ";
            $context["dayWidget"] = (("<div class=\"col pr-0\">" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "day", [], "any", false, false, false, 712), 'widget')) . "</div>");
            // line 714
            yield Twig\Extension\CoreExtension::replace(($context["date_pattern"] ?? null), ["{{ year }}" =>             // line 715
($context["yearWidget"] ?? null), "{{ month }}" =>             // line 716
($context["monthWidget"] ?? null), "{{ day }}" =>             // line 717
($context["dayWidget"] ?? null)]);
            // line 720
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 721
                yield "</div>";
            }
        }
        yield from [];
    }

    // line 726
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_file_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 727
        yield "  <style>
    .custom-file-label:after {
      content: \"";
        // line 729
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Browse", [], "Admin.Actions"), "html", null, true);
        yield "\";
    }
  </style>
  <div class=\"custom-file\">
    ";
        // line 733
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source,         // line 734
($context["attr"] ?? null), "class", [], "any", true, true, false, 734)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 734), "")) : ("")) . " custom-file-input")), "data-multiple-files-text" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%count% file(s)", [], "Admin.Global"), "data-locale" => $this->extensions['PrestaShopBundle\Twig\ContextIsoCodeProviderExtension']->getIsoCode()]);
        // line 739
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "disabled", [], "any", true, true, false, 739) && CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "disabled", [], "any", false, false, false, 739))) {
            // line 740
            yield "      ";
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => (CoreExtension::getAttribute($this->env, $this->source,             // line 741
($context["attr"] ?? null), "class", [], "any", false, false, false, 741) . " disabled")]);
            // line 743
            yield "    ";
        }
        // line 744
        yield "
    ";
        // line 745
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ["attr" => ($context["attr"] ?? null)]);
        yield "

    <label class=\"custom-file-label\" for=\"";
        // line 747
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 747), "id", [], "any", false, false, false, 747), "html", null, true);
        yield "\">
      ";
        // line 748
        $context["attributes"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 748), "attr", [], "any", false, false, false, 748);
        // line 749
        yield "      ";
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "placeholder", [], "any", true, true, false, 749)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "placeholder", [], "any", false, false, false, 749), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Choose file(s)", [], "Admin.Actions"), "html", null, true)));
        yield "
    </label>
  </div>
";
        yield from [];
    }

    // line 754
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_shop_restriction_checkbox_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 755
        yield "  ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 755), "attr", [], "any", false, false, false, 755), "is_allowed_to_display", [], "any", false, false, false, 755)) {
            // line 756
            yield "    <div class=\"md-checkbox md-checkbox-inline\">
      <label>
        ";
            // line 758
            $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "checkbox")) : ("checkbox"));
            // line 759
            yield "        <input
          class=\"js-multi-store-restriction-checkbox\"
          type=\"";
            // line 761
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["type"] ?? null), "html", null, true);
            yield "\"
          ";
            // line 762
            yield from             $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
            yield "
          value=\"";
            // line 763
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
            yield "\"
        >
        <i class=\"md-checkbox-control\"></i>
      </label>
    </div>
  ";
        }
        yield from [];
    }

    // line 771
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_generatable_text_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 772
        yield "  <div class=\"input-group\">";
        // line 773
        yield from         $this->unwrap()->yieldBlock("form_widget", $context, $blocks);
        // line 774
        yield "<span class=\"input-group-btn ml-1\">
      <button class=\"btn btn-outline-secondary js-generator-btn\"
              type=\"button\"
              data-target-input-id=\"";
        // line 777
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
        yield "\"
              data-generated-value-length=\"";
        // line 778
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["generated_value_length"] ?? null), "html", null, true);
        yield "\"
      >
        ";
        // line 780
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Generate", [], "Admin.Actions"), "html", null, true);
        yield "
      </button>
   </span>
  </div>
";
        yield from [];
    }

    // line 786
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_text_with_recommended_length_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 787
        yield "  ";
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["data-recommended-length-counter" => (("#" .         // line 788
($context["id"] ?? null)) . "_recommended_length_counter"), "class" => "js-recommended-length-input"]);
        // line 792
        if ((($context["input_type"] ?? null) == "textarea")) {
            // line 793
            yield from             $this->unwrap()->yieldBlock("textarea_widget", $context, $blocks);
        } else {
            // line 795
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        }
        // line 797
        yield "
  <small class=\"form-text text-muted text-right\"
         id=\"";
        // line 799
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
        yield "_recommended_length_counter\"
  >
    <em>
      ";
        // line 802
        yield Twig\Extension\CoreExtension::replace($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("[1][/1] of [2][/2] characters used (recommended)", [], "Admin.Catalog.Feature"), ["[1]" => ("<span class=\"js-current-length\">" . Twig\Extension\CoreExtension::length($this->env->getCharset(),         // line 803
($context["value"] ?? null))), "[/1]" => "</span>", "[2]" => ("<span>" .         // line 805
($context["recommended_length"] ?? null)), "[/2]" => "</span>"]);
        // line 807
        yield "
    </em>
  </small>
";
        yield from [];
    }

    // line 812
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_integer_min_max_filter_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 813
        yield "  ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($_v15 = ($context["form"] ?? null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15["min_field"] ?? null) : null), 'widget', ["attr" => ["class" => "min-field"]]);
        yield "
  ";
        // line 814
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($_v16 = ($context["form"] ?? null)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16["max_field"] ?? null) : null), 'widget', ["attr" => ["class" => "max-field"]]);
        yield "
";
        yield from [];
    }

    // line 817
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_number_min_max_filter_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 818
        yield "  ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($_v17 = ($context["form"] ?? null)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17["min_field"] ?? null) : null), 'widget', ["attr" => ["class" => "min-field"]]);
        yield "
  ";
        // line 819
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($_v18 = ($context["form"] ?? null)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18["max_field"] ?? null) : null), 'widget', ["attr" => ["class" => "max-field"]]);
        yield "
";
        yield from [];
    }

    // line 822
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_help(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 823
        yield "  ";
        if (($context["help"] ?? null)) {
            // line 824
            yield "    <small class=\"form-text\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["help"] ?? null), "html", null, true);
            yield "</small>
  ";
        }
        yield from [];
    }

    // line 828
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_hint(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 829
        yield "  ";
        if (($context["hint"] ?? null)) {
            // line 830
            yield "    <div class=\"hint-box\">
      <div class=\"alert alert-info\">";
            // line 831
            yield ($context["hint"] ?? null);
            yield "</div>
    </div>
  ";
        }
        yield from [];
    }

    // line 836
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_custom_content_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 837
        yield "  ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, ($context["template"] ?? null), ($context["data"] ?? null));
        yield "
";
        yield from [];
    }

    // line 840
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_text_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 841
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["aria-label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%inputId% input", ["%inputId%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 841), "id", [], "any", false, false, false, 841)], "Admin.Global")]);
        // line 842
        if ( !(null === ($context["data_list"] ?? null))) {
            // line 843
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["list" => (($context["id"] ?? null) . "_datalist")]);
        }
        // line 845
        yield "
  ";
        // line 846
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ["attr" => ($context["attr"] ?? null)]);
        yield "

  ";
        // line 848
        if ( !(null === ($context["data_list"] ?? null))) {
            // line 849
            yield "    <datalist id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["id"] ?? null) . "_datalist"), "html", null, true);
            yield "\">
      ";
            // line 850
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["data_list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 851
                yield "        <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["item"], "html", null, true);
                yield "\"></option>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 853
            yield "    </datalist>
  ";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  2707 => 853,  2698 => 851,  2694 => 850,  2689 => 849,  2687 => 848,  2682 => 846,  2679 => 845,  2676 => 843,  2674 => 842,  2672 => 841,  2665 => 840,  2657 => 837,  2650 => 836,  2641 => 831,  2638 => 830,  2635 => 829,  2628 => 828,  2619 => 824,  2616 => 823,  2609 => 822,  2602 => 819,  2597 => 818,  2590 => 817,  2583 => 814,  2578 => 813,  2571 => 812,  2563 => 807,  2561 => 805,  2560 => 803,  2559 => 802,  2553 => 799,  2549 => 797,  2546 => 795,  2543 => 793,  2541 => 792,  2539 => 788,  2537 => 787,  2530 => 786,  2520 => 780,  2515 => 778,  2511 => 777,  2506 => 774,  2504 => 773,  2502 => 772,  2495 => 771,  2483 => 763,  2479 => 762,  2475 => 761,  2471 => 759,  2469 => 758,  2465 => 756,  2462 => 755,  2455 => 754,  2445 => 749,  2443 => 748,  2439 => 747,  2434 => 745,  2431 => 744,  2428 => 743,  2426 => 741,  2424 => 740,  2422 => 739,  2420 => 734,  2419 => 733,  2412 => 729,  2408 => 727,  2401 => 726,  2394 => 721,  2392 => 720,  2390 => 717,  2389 => 716,  2388 => 715,  2387 => 714,  2384 => 712,  2381 => 711,  2379 => 710,  2376 => 709,  2371 => 707,  2369 => 706,  2367 => 705,  2364 => 703,  2361 => 702,  2354 => 701,  2349 => 698,  2344 => 695,  2333 => 693,  2329 => 692,  2325 => 691,  2320 => 689,  2315 => 687,  2311 => 685,  2305 => 683,  2303 => 682,  2297 => 678,  2294 => 677,  2285 => 674,  2280 => 673,  2277 => 672,  2274 => 671,  2271 => 670,  2268 => 669,  2265 => 668,  2261 => 667,  2256 => 666,  2254 => 665,  2247 => 664,  2242 => 612,  2235 => 658,  2228 => 656,  2221 => 654,  2217 => 652,  2214 => 651,  2208 => 649,  2202 => 647,  2200 => 646,  2197 => 645,  2194 => 644,  2192 => 643,  2189 => 642,  2185 => 641,  2180 => 639,  2176 => 637,  2172 => 636,  2167 => 633,  2152 => 631,  2146 => 629,  2140 => 626,  2134 => 623,  2130 => 621,  2128 => 620,  2125 => 619,  2108 => 618,  2104 => 617,  2094 => 613,  2091 => 612,  2084 => 611,  2079 => 575,  2072 => 605,  2062 => 601,  2058 => 599,  2054 => 598,  2046 => 592,  2038 => 591,  2034 => 589,  2030 => 587,  2028 => 586,  2016 => 576,  2013 => 575,  2006 => 574,  2000 => 568,  1997 => 566,  1988 => 563,  1984 => 562,  1982 => 561,  1979 => 559,  1970 => 556,  1966 => 555,  1964 => 554,  1962 => 553,  1960 => 552,  1958 => 551,  1951 => 550,  1946 => 545,  1944 => 544,  1942 => 543,  1936 => 542,  1929 => 541,  1924 => 538,  1922 => 537,  1920 => 536,  1914 => 535,  1907 => 534,  1902 => 531,  1900 => 530,  1893 => 529,  1888 => 526,  1886 => 525,  1879 => 524,  1874 => 521,  1872 => 520,  1865 => 519,  1860 => 516,  1858 => 515,  1851 => 514,  1846 => 511,  1844 => 510,  1840 => 509,  1838 => 508,  1831 => 507,  1826 => 504,  1824 => 503,  1822 => 502,  1820 => 501,  1814 => 500,  1807 => 499,  1801 => 494,  1797 => 492,  1795 => 491,  1793 => 490,  1772 => 489,  1767 => 486,  1765 => 485,  1763 => 484,  1761 => 483,  1747 => 482,  1744 => 481,  1742 => 480,  1739 => 479,  1736 => 478,  1733 => 477,  1730 => 476,  1727 => 475,  1724 => 474,  1721 => 473,  1718 => 472,  1715 => 471,  1712 => 470,  1709 => 469,  1707 => 468,  1700 => 467,  1695 => 464,  1688 => 463,  1683 => 460,  1676 => 459,  1671 => 456,  1669 => 455,  1662 => 453,  1657 => 450,  1650 => 449,  1640 => 440,  1623 => 437,  1619 => 436,  1615 => 435,  1612 => 434,  1595 => 433,  1589 => 429,  1585 => 428,  1581 => 427,  1573 => 422,  1567 => 419,  1562 => 418,  1555 => 417,  1550 => 397,  1544 => 412,  1526 => 410,  1521 => 408,  1518 => 407,  1513 => 406,  1509 => 405,  1505 => 404,  1501 => 403,  1497 => 402,  1492 => 401,  1489 => 400,  1472 => 399,  1469 => 398,  1466 => 397,  1459 => 396,  1454 => 371,  1450 => 393,  1443 => 389,  1437 => 386,  1433 => 385,  1428 => 383,  1424 => 381,  1422 => 380,  1417 => 378,  1411 => 375,  1407 => 374,  1403 => 372,  1400 => 371,  1393 => 370,  1388 => 361,  1384 => 366,  1374 => 364,  1371 => 363,  1368 => 362,  1365 => 361,  1358 => 360,  1353 => 352,  1347 => 356,  1343 => 355,  1339 => 354,  1334 => 353,  1331 => 352,  1324 => 351,  1319 => 337,  1299 => 341,  1296 => 340,  1294 => 339,  1291 => 338,  1288 => 337,  1281 => 336,  1276 => 333,  1271 => 330,  1262 => 327,  1257 => 325,  1254 => 324,  1250 => 323,  1246 => 322,  1240 => 319,  1235 => 317,  1227 => 311,  1225 => 310,  1222 => 309,  1213 => 306,  1209 => 305,  1206 => 304,  1203 => 303,  1200 => 302,  1198 => 301,  1195 => 300,  1192 => 299,  1189 => 298,  1185 => 297,  1180 => 295,  1173 => 294,  1168 => 291,  1163 => 288,  1152 => 286,  1148 => 285,  1144 => 284,  1138 => 281,  1133 => 279,  1125 => 273,  1123 => 272,  1120 => 271,  1112 => 269,  1109 => 268,  1107 => 267,  1104 => 266,  1101 => 265,  1098 => 264,  1096 => 263,  1093 => 262,  1090 => 261,  1087 => 260,  1083 => 259,  1078 => 257,  1071 => 256,  1066 => 253,  1063 => 251,  1061 => 250,  1054 => 249,  1047 => 245,  1032 => 243,  1030 => 242,  1028 => 241,  1024 => 240,  1003 => 239,  986 => 238,  982 => 236,  978 => 234,  968 => 230,  958 => 229,  955 => 228,  951 => 227,  948 => 226,  946 => 225,  942 => 224,  937 => 223,  930 => 222,  925 => 219,  921 => 217,  904 => 215,  901 => 214,  884 => 213,  877 => 212,  874 => 211,  870 => 208,  864 => 206,  862 => 205,  858 => 204,  844 => 203,  840 => 201,  836 => 198,  830 => 196,  827 => 195,  822 => 193,  817 => 191,  815 => 190,  805 => 189,  801 => 187,  798 => 186,  796 => 185,  789 => 184,  782 => 183,  776 => 179,  759 => 177,  742 => 176,  739 => 175,  733 => 173,  726 => 172,  720 => 168,  718 => 167,  716 => 166,  713 => 164,  711 => 163,  709 => 162,  702 => 161,  696 => 157,  694 => 156,  692 => 155,  689 => 153,  687 => 152,  685 => 151,  678 => 150,  672 => 146,  666 => 143,  665 => 142,  664 => 141,  660 => 140,  656 => 139,  653 => 137,  647 => 134,  646 => 133,  645 => 132,  641 => 131,  639 => 130,  637 => 129,  630 => 128,  625 => 125,  623 => 124,  621 => 123,  614 => 122,  607 => 117,  604 => 116,  596 => 115,  591 => 113,  589 => 112,  587 => 111,  584 => 109,  582 => 108,  575 => 107,  568 => 102,  566 => 101,  564 => 99,  563 => 98,  562 => 97,  561 => 96,  556 => 94,  554 => 93,  552 => 92,  549 => 90,  547 => 89,  540 => 88,  534 => 84,  532 => 83,  530 => 82,  528 => 81,  526 => 80,  522 => 79,  520 => 78,  517 => 76,  515 => 75,  508 => 74,  500 => 68,  498 => 67,  496 => 66,  489 => 65,  484 => 62,  478 => 59,  475 => 58,  473 => 57,  471 => 56,  465 => 53,  462 => 52,  459 => 51,  457 => 50,  454 => 49,  447 => 48,  442 => 45,  440 => 44,  433 => 43,  428 => 40,  426 => 39,  419 => 38,  414 => 35,  411 => 33,  409 => 32,  402 => 31,  397 => 840,  394 => 839,  392 => 836,  389 => 835,  387 => 828,  384 => 827,  382 => 822,  379 => 821,  377 => 817,  374 => 816,  372 => 812,  369 => 811,  367 => 786,  364 => 785,  362 => 771,  359 => 770,  357 => 754,  354 => 753,  352 => 726,  349 => 725,  347 => 701,  344 => 700,  342 => 664,  339 => 663,  337 => 611,  334 => 610,  332 => 574,  329 => 573,  326 => 571,  324 => 550,  321 => 549,  318 => 547,  316 => 541,  313 => 540,  311 => 534,  308 => 533,  306 => 529,  303 => 528,  301 => 524,  298 => 523,  296 => 519,  293 => 518,  291 => 514,  288 => 513,  286 => 507,  283 => 506,  281 => 499,  278 => 498,  275 => 496,  273 => 467,  270 => 466,  268 => 463,  265 => 462,  263 => 459,  260 => 458,  258 => 453,  255 => 452,  253 => 449,  250 => 448,  247 => 446,  245 => 417,  242 => 416,  240 => 396,  237 => 395,  235 => 370,  232 => 369,  230 => 360,  227 => 359,  225 => 351,  222 => 350,  220 => 336,  217 => 335,  215 => 294,  212 => 293,  210 => 256,  207 => 255,  205 => 249,  202 => 248,  200 => 222,  197 => 221,  195 => 183,  192 => 182,  190 => 172,  187 => 171,  185 => 161,  182 => 160,  180 => 150,  177 => 149,  175 => 128,  172 => 127,  170 => 122,  167 => 121,  165 => 107,  162 => 106,  160 => 88,  157 => 87,  155 => 74,  152 => 73,  150 => 65,  147 => 64,  145 => 48,  142 => 47,  140 => 43,  137 => 42,  135 => 38,  132 => 37,  130 => 31,  127 => 30,  124 => 28,  49 => 27,  42 => 26,  35 => 25,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig", "/home/sheridantools/public_html/src/PrestaShopBundle/Resources/views/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig");
    }
}
