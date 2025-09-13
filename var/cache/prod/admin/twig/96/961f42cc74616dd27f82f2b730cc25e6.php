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

/* @PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig */
class __TwigTemplate_fd12c9c50a026efcee00411e74d1cfe4 extends Template
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

        // line 45
        $_trait_0 = $this->loadTemplate("bootstrap_base_layout.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 45);
        if (!$_trait_0->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.', 45, $this->source);
        }
        $_trait_0_blocks = $_trait_0->unwrap()->getBlocks();

        if (!isset($_trait_0_blocks["radio_widget"])) {
            throw new RuntimeError('Block "radio_widget" is not defined in trait "bootstrap_base_layout.html.twig".', 45, $this->source);
        }

        $_trait_0_blocks["base_radio_widget"] = $_trait_0_blocks["radio_widget"]; unset($_trait_0_blocks["radio_widget"]); $this->traitAliases["base_radio_widget"] = "radio_widget";

        if (!isset($_trait_0_blocks["checkbox_widget"])) {
            throw new RuntimeError('Block "checkbox_widget" is not defined in trait "bootstrap_base_layout.html.twig".', 45, $this->source);
        }

        $_trait_0_blocks["base_checkbox_widget"] = $_trait_0_blocks["checkbox_widget"]; unset($_trait_0_blocks["checkbox_widget"]); $this->traitAliases["base_checkbox_widget"] = "checkbox_widget";

        // line 48
        $_trait_1 = $this->loadTemplate("bootstrap_4_layout.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 48);
        if (!$_trait_1->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_4_layout.html.twig".'" cannot be used as a trait.', 48, $this->source);
        }
        $_trait_1_blocks = $_trait_1->unwrap()->getBlocks();

        // line 49
        $_trait_2 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/entity_search_input.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 49);
        if (!$_trait_2->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/entity_search_input.html.twig".'" cannot be used as a trait.', 49, $this->source);
        }
        $_trait_2_blocks = $_trait_2->unwrap()->getBlocks();

        // line 50
        $_trait_3 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/material.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 50);
        if (!$_trait_3->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/material.html.twig".'" cannot be used as a trait.', 50, $this->source);
        }
        $_trait_3_blocks = $_trait_3->unwrap()->getBlocks();

        // line 51
        $_trait_4 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/multishop.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 51);
        if (!$_trait_4->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/multishop.html.twig".'" cannot be used as a trait.', 51, $this->source);
        }
        $_trait_4_blocks = $_trait_4->unwrap()->getBlocks();

        $this->traits = array_merge(
            $_trait_0_blocks,
            $_trait_1_blocks,
            $_trait_2_blocks,
            $_trait_3_blocks,
            $_trait_4_blocks
        );

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_start' => [$this, 'block_form_start'],
                'form_widget' => [$this, 'block_form_widget'],
                'form_widget_simple' => [$this, 'block_form_widget_simple'],
                'ip_address_text_widget' => [$this, 'block_ip_address_text_widget'],
                'password_widget' => [$this, 'block_password_widget'],
                'form_row' => [$this, 'block_form_row'],
                'form_modify_all_shops' => [$this, 'block_form_modify_all_shops'],
                'form_disabling_switch' => [$this, 'block_form_disabling_switch'],
                'widget_type_class' => [$this, 'block_widget_type_class'],
                'form_label' => [$this, 'block_form_label'],
                'textarea_widget' => [$this, 'block_textarea_widget'],
                'money_widget' => [$this, 'block_money_widget'],
                'percent_widget' => [$this, 'block_percent_widget'],
                'datetime_widget' => [$this, 'block_datetime_widget'],
                'url_widget' => [$this, 'block_url_widget'],
                'date_widget' => [$this, 'block_date_widget'],
                'time_widget' => [$this, 'block_time_widget'],
                'email_widget' => [$this, 'block_email_widget'],
                'button_widget' => [$this, 'block_button_widget'],
                'icon_button_widget' => [$this, 'block_icon_button_widget'],
                'choice_widget' => [$this, 'block_choice_widget'],
                'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
                'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
                'choice_tree_widget' => [$this, 'block_choice_tree_widget'],
                'choice_tree_item_widget' => [$this, 'block_choice_tree_item_widget'],
                'translatefields_widget' => [$this, 'block_translatefields_widget'],
                'translate_fields_widget' => [$this, 'block_translate_fields_widget'],
                'translate_text_widget' => [$this, 'block_translate_text_widget'],
                'translate_textarea_widget' => [$this, 'block_translate_textarea_widget'],
                'date_picker_widget' => [$this, 'block_date_picker_widget'],
                'date_range_widget' => [$this, 'block_date_range_widget'],
                'search_and_reset_widget' => [$this, 'block_search_and_reset_widget'],
                'switch_widget' => [$this, 'block_switch_widget'],
                'row_attributes' => [$this, 'block_row_attributes'],
                '_form_step6_attachments_widget' => [$this, 'block__form_step6_attachments_widget'],
                'choice_label' => [$this, 'block_choice_label'],
                'checkbox_label' => [$this, 'block_checkbox_label'],
                'radio_label' => [$this, 'block_radio_label'],
                'checkbox_radio_label' => [$this, 'block_checkbox_radio_label'],
                'radio_widget' => [$this, 'block_radio_widget'],
                'checkbox_widget' => [$this, 'block_checkbox_widget'],
                'form_errors' => [$this, 'block_form_errors'],
                'form_errors_field' => [$this, 'block_form_errors_field'],
                'form_errors_other' => [$this, 'block_form_errors_other'],
                'material_choice_table_widget' => [$this, 'block_material_choice_table_widget'],
                'material_multiple_choice_table_widget' => [$this, 'block_material_multiple_choice_table_widget'],
                'translatable_fields_with_tabs' => [$this, 'block_translatable_fields_with_tabs'],
                'translatable_fields_with_dropdown' => [$this, 'block_translatable_fields_with_dropdown'],
                'translatable_widget' => [$this, 'block_translatable_widget'],
                'birthday_widget' => [$this, 'block_birthday_widget'],
                'file_widget' => [$this, 'block_file_widget'],
                'shop_restriction_checkbox_widget' => [$this, 'block_shop_restriction_checkbox_widget'],
                'generatable_text_widget' => [$this, 'block_generatable_text_widget'],
                'text_with_recommended_length_widget' => [$this, 'block_text_with_recommended_length_widget'],
                'text_with_length_counter_widget' => [$this, 'block_text_with_length_counter_widget'],
                'integer_min_max_filter_widget' => [$this, 'block_integer_min_max_filter_widget'],
                'number_min_max_filter_widget' => [$this, 'block_number_min_max_filter_widget'],
                'number_widget' => [$this, 'block_number_widget'],
                'integer_widget' => [$this, 'block_integer_widget'],
                'form_unit' => [$this, 'block_form_unit'],
                'form_unit_prepend' => [$this, 'block_form_unit_prepend'],
                'form_help' => [$this, 'block_form_help'],
                'form_prepend_external_link' => [$this, 'block_form_prepend_external_link'],
                'form_append_external_link' => [$this, 'block_form_append_external_link'],
                'form_external_link' => [$this, 'block_form_external_link'],
                'form_external_link_attributes' => [$this, 'block_form_external_link_attributes'],
                'custom_content_widget' => [$this, 'block_custom_content_widget'],
                'text_widget' => [$this, 'block_text_widget'],
                'form_prepend_alert' => [$this, 'block_form_prepend_alert'],
                'form_append_alert' => [$this, 'block_form_append_alert'],
                'form_alert' => [$this, 'block_form_alert'],
                'unavailable_widget' => [$this, 'block_unavailable_widget'],
                'text_preview_widget' => [$this, 'block_text_preview_widget'],
                'link_preview_widget' => [$this, 'block_link_preview_widget'],
                'image_preview_widget' => [$this, 'block_image_preview_widget'],
                'delta_quantity_widget' => [$this, 'block_delta_quantity_widget'],
                'delta_quantity_quantity_widget' => [$this, 'block_delta_quantity_quantity_widget'],
                'delta_quantity_delta_row' => [$this, 'block_delta_quantity_delta_row'],
                'delta_quantity_delta_widget' => [$this, 'block_delta_quantity_delta_widget'],
                'submittable_input_widget' => [$this, 'block_submittable_input_widget'],
                'submittable_input_button_widget' => [$this, 'block_submittable_input_button_widget'],
                'submittable_delta_quantity_delta_widget' => [$this, 'block_submittable_delta_quantity_delta_widget'],
                'navigation_tab_widget' => [$this, 'block_navigation_tab_widget'],
                'accordion_widget' => [$this, 'block_accordion_widget'],
                'button_collection_widget' => [$this, 'block_button_collection_widget'],
                'avatar_url_row' => [$this, 'block_avatar_url_row'],
                'change_password_row' => [$this, 'block_change_password_row'],
                'price_reduction_widget' => [$this, 'block_price_reduction_widget'],
                'image_with_preview_widget' => [$this, 'block_image_with_preview_widget'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 25
        yield "
";
        // line 34
        yield "
";
        // line 46
        yield "
";
        // line 52
        yield "
";
        // line 54
        yield "
";
        // line 56
        yield "
";
        // line 57
        yield from $this->unwrap()->yieldBlock('form_start', $context, $blocks);
        // line 67
        yield from $this->unwrap()->yieldBlock('form_widget', $context, $blocks);
        // line 75
        yield from $this->unwrap()->yieldBlock('form_widget_simple', $context, $blocks);
        // line 80
        yield from $this->unwrap()->yieldBlock('ip_address_text_widget', $context, $blocks);
        // line 90
        yield from $this->unwrap()->yieldBlock('password_widget', $context, $blocks);
        // line 97
        yield "
";
        // line 98
        yield from $this->unwrap()->yieldBlock('form_row', $context, $blocks);
        // line 116
        yield "
";
        // line 121
        yield from $this->unwrap()->yieldBlock('form_modify_all_shops', $context, $blocks);
        // line 128
        yield "
";
        // line 129
        yield from $this->unwrap()->yieldBlock('form_disabling_switch', $context, $blocks);
        // line 136
        yield "
";
        // line 137
        yield from $this->unwrap()->yieldBlock('widget_type_class', $context, $blocks);
        // line 156
        yield "
";
        // line 159
        yield from $this->unwrap()->yieldBlock('form_label', $context, $blocks);
        // line 204
        yield "
";
        // line 205
        yield from $this->unwrap()->yieldBlock('textarea_widget', $context, $blocks);
        // line 211
        yield "
";
        // line 212
        yield from $this->unwrap()->yieldBlock('money_widget', $context, $blocks);
        // line 230
        yield "
";
        // line 231
        yield from $this->unwrap()->yieldBlock('percent_widget', $context, $blocks);
        // line 239
        yield "
";
        // line 240
        yield from $this->unwrap()->yieldBlock('datetime_widget', $context, $blocks);
        // line 254
        yield from $this->unwrap()->yieldBlock('url_widget', $context, $blocks);
        // line 260
        yield from $this->unwrap()->yieldBlock('date_widget', $context, $blocks);
        // line 278
        yield "
";
        // line 279
        yield from $this->unwrap()->yieldBlock('time_widget', $context, $blocks);
        // line 294
        yield from $this->unwrap()->yieldBlock('email_widget', $context, $blocks);
        // line 300
        yield from $this->unwrap()->yieldBlock('button_widget', $context, $blocks);
        // line 304
        yield "
";
        // line 305
        yield from $this->unwrap()->yieldBlock('icon_button_widget', $context, $blocks);
        // line 323
        yield "
";
        // line 324
        yield from $this->unwrap()->yieldBlock('choice_widget', $context, $blocks);
        // line 328
        yield "
";
        // line 329
        yield from $this->unwrap()->yieldBlock('choice_widget_collapsed', $context, $blocks);
        // line 333
        yield "
";
        // line 334
        yield from $this->unwrap()->yieldBlock('choice_widget_expanded', $context, $blocks);
        // line 357
        yield "
";
        // line 358
        yield from $this->unwrap()->yieldBlock('choice_tree_widget', $context, $blocks);
        // line 368
        yield "
";
        // line 369
        yield from $this->unwrap()->yieldBlock('choice_tree_item_widget', $context, $blocks);
        // line 407
        yield "
";
        // line 408
        yield from $this->unwrap()->yieldBlock('translatefields_widget', $context, $blocks);
        // line 433
        yield "
";
        // line 434
        yield from $this->unwrap()->yieldBlock('translate_fields_widget', $context, $blocks);
        // line 440
        yield "
";
        // line 441
        yield from $this->unwrap()->yieldBlock('translate_text_widget', $context, $blocks);
        // line 477
        yield "
";
        // line 478
        yield from $this->unwrap()->yieldBlock('translate_textarea_widget', $context, $blocks);
        // line 519
        yield "
";
        // line 520
        yield from $this->unwrap()->yieldBlock('date_picker_widget', $context, $blocks);
        // line 534
        yield "
";
        // line 535
        yield from $this->unwrap()->yieldBlock('date_range_widget', $context, $blocks);
        // line 551
        yield "
";
        // line 552
        yield from $this->unwrap()->yieldBlock('search_and_reset_widget', $context, $blocks);
        // line 577
        yield "
";
        // line 578
        yield from $this->unwrap()->yieldBlock('switch_widget', $context, $blocks);
        // line 602
        yield from $this->unwrap()->yieldBlock('row_attributes', $context, $blocks);
        // line 610
        yield from $this->unwrap()->yieldBlock('_form_step6_attachments_widget', $context, $blocks);
        // line 639
        yield "
";
        // line 641
        yield "
";
        // line 642
        yield from $this->unwrap()->yieldBlock('choice_label', $context, $blocks);
        // line 647
        yield "
";
        // line 648
        yield from $this->unwrap()->yieldBlock('checkbox_label', $context, $blocks);
        // line 651
        yield "
";
        // line 652
        yield from $this->unwrap()->yieldBlock('radio_label', $context, $blocks);
        // line 655
        yield "
";
        // line 656
        yield from $this->unwrap()->yieldBlock('checkbox_radio_label', $context, $blocks);
        // line 688
        yield "
";
        // line 689
        yield from $this->unwrap()->yieldBlock('radio_widget', $context, $blocks);
        // line 703
        yield "
";
        // line 704
        yield from $this->unwrap()->yieldBlock('checkbox_widget', $context, $blocks);
        // line 711
        yield "
";
        // line 713
        yield "
";
        // line 714
        yield from $this->unwrap()->yieldBlock('form_errors', $context, $blocks);
        // line 721
        yield "
";
        // line 722
        yield from $this->unwrap()->yieldBlock('form_errors_field', $context, $blocks);
        // line 780
        yield "
";
        // line 781
        yield from $this->unwrap()->yieldBlock('form_errors_other', $context, $blocks);
        // line 796
        yield "
";
        // line 798
        yield "
";
        // line 799
        yield from $this->unwrap()->yieldBlock('material_choice_table_widget', $context, $blocks);
        // line 836
        yield "
";
        // line 837
        yield from $this->unwrap()->yieldBlock('material_multiple_choice_table_widget', $context, $blocks);
        // line 889
        yield "
";
        // line 891
        yield from $this->unwrap()->yieldBlock('translatable_fields_with_tabs', $context, $blocks);
        // line 914
        yield "
";
        // line 915
        yield from $this->unwrap()->yieldBlock('translatable_fields_with_dropdown', $context, $blocks);
        // line 951
        yield "
";
        // line 952
        yield from $this->unwrap()->yieldBlock('translatable_widget', $context, $blocks);
        // line 960
        yield "
";
        // line 961
        yield from $this->unwrap()->yieldBlock('birthday_widget', $context, $blocks);
        // line 985
        yield "
";
        // line 986
        yield from $this->unwrap()->yieldBlock('file_widget', $context, $blocks);
        // line 1018
        yield "
";
        // line 1019
        yield from $this->unwrap()->yieldBlock('shop_restriction_checkbox_widget', $context, $blocks);
        // line 1035
        yield "
";
        // line 1036
        yield from $this->unwrap()->yieldBlock('generatable_text_widget', $context, $blocks);
        // line 1055
        yield "
";
        // line 1056
        yield from $this->unwrap()->yieldBlock('text_with_recommended_length_widget', $context, $blocks);
        // line 1081
        yield "
";
        // line 1082
        yield from $this->unwrap()->yieldBlock('text_with_length_counter_widget', $context, $blocks);
        // line 1110
        yield "
";
        // line 1111
        yield from $this->unwrap()->yieldBlock('integer_min_max_filter_widget', $context, $blocks);
        // line 1115
        yield "
";
        // line 1116
        yield from $this->unwrap()->yieldBlock('number_min_max_filter_widget', $context, $blocks);
        // line 1121
        yield from $this->unwrap()->yieldBlock('number_widget', $context, $blocks);
        // line 1131
        yield from $this->unwrap()->yieldBlock('integer_widget', $context, $blocks);
        // line 1141
        yield from $this->unwrap()->yieldBlock('form_unit', $context, $blocks);
        // line 1148
        yield "
";
        // line 1149
        yield from $this->unwrap()->yieldBlock('form_unit_prepend', $context, $blocks);
        // line 1156
        yield "
";
        // line 1157
        yield from $this->unwrap()->yieldBlock('form_help', $context, $blocks);
        // line 1166
        yield "
";
        // line 1167
        yield from $this->unwrap()->yieldBlock('form_prepend_external_link', $context, $blocks);
        // line 1172
        yield "
";
        // line 1173
        yield from $this->unwrap()->yieldBlock('form_append_external_link', $context, $blocks);
        // line 1178
        yield "
";
        // line 1179
        yield from $this->unwrap()->yieldBlock('form_external_link', $context, $blocks);
        // line 1197
        yield from $this->unwrap()->yieldBlock('form_external_link_attributes', $context, $blocks);
        // line 1211
        yield from $this->unwrap()->yieldBlock('custom_content_widget', $context, $blocks);
        // line 1214
        yield "
";
        // line 1215
        yield from $this->unwrap()->yieldBlock('text_widget', $context, $blocks);
        // line 1232
        yield from $this->unwrap()->yieldBlock('form_prepend_alert', $context, $blocks);
        // line 1238
        yield from $this->unwrap()->yieldBlock('form_append_alert', $context, $blocks);
        // line 1244
        yield from $this->unwrap()->yieldBlock('form_alert', $context, $blocks);
        // line 1285
        yield from $this->unwrap()->yieldBlock('unavailable_widget', $context, $blocks);
        // line 1292
        yield "
";
        // line 1293
        yield from $this->unwrap()->yieldBlock('text_preview_widget', $context, $blocks);
        // line 1323
        yield "
";
        // line 1324
        yield from $this->unwrap()->yieldBlock('link_preview_widget', $context, $blocks);
        // line 1331
        yield "
";
        // line 1332
        yield from $this->unwrap()->yieldBlock('image_preview_widget', $context, $blocks);
        // line 1341
        yield "
";
        // line 1342
        yield from $this->unwrap()->yieldBlock('delta_quantity_widget', $context, $blocks);
        // line 1355
        yield "
";
        // line 1356
        yield from $this->unwrap()->yieldBlock('delta_quantity_quantity_widget', $context, $blocks);
        // line 1368
        yield "
";
        // line 1369
        yield from $this->unwrap()->yieldBlock('delta_quantity_delta_row', $context, $blocks);
        // line 1385
        yield "
";
        // line 1386
        yield from $this->unwrap()->yieldBlock('delta_quantity_delta_widget', $context, $blocks);
        // line 1391
        yield "
";
        // line 1392
        yield from $this->unwrap()->yieldBlock('submittable_input_widget', $context, $blocks);
        // line 1405
        yield "
";
        // line 1406
        yield from $this->unwrap()->yieldBlock('submittable_input_button_widget', $context, $blocks);
        // line 1411
        yield "
";
        // line 1412
        yield from $this->unwrap()->yieldBlock('submittable_delta_quantity_delta_widget', $context, $blocks);
        // line 1426
        yield from $this->unwrap()->yieldBlock('navigation_tab_widget', $context, $blocks);
        // line 1484
        yield from $this->unwrap()->yieldBlock('accordion_widget', $context, $blocks);
        // line 1530
        yield from $this->unwrap()->yieldBlock('button_collection_widget', $context, $blocks);
        // line 1576
        yield "
";
        // line 1577
        yield from $this->unwrap()->yieldBlock('avatar_url_row', $context, $blocks);
        // line 1587
        yield "
";
        // line 1588
        yield from $this->unwrap()->yieldBlock('change_password_row', $context, $blocks);
        // line 1628
        yield from $this->unwrap()->yieldBlock('price_reduction_widget', $context, $blocks);
        // line 1642
        yield from $this->unwrap()->yieldBlock('image_with_preview_widget', $context, $blocks);
        yield from [];
    }

    // line 57
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_start(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 58
        yield "  ";
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["data-alerts-success" => Twig\Extension\CoreExtension::length($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 58), "alerts", [], "any", false, true, false, 58), "success", [], "any", true, true, false, 58)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 58), "alerts", [], "any", false, false, false, 58), "success", [], "any", false, false, false, 58), [])) : ([])))]);
        // line 59
        yield "  ";
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["data-alerts-info" => Twig\Extension\CoreExtension::length($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 59), "alerts", [], "any", false, true, false, 59), "info", [], "any", true, true, false, 59)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 59), "alerts", [], "any", false, false, false, 59), "info", [], "any", false, false, false, 59), [])) : ([])))]);
        // line 60
        yield "  ";
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["data-alerts-warning" => Twig\Extension\CoreExtension::length($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 60), "alerts", [], "any", false, true, false, 60), "warning", [], "any", true, true, false, 60)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 60), "alerts", [], "any", false, false, false, 60), "warning", [], "any", false, false, false, 60), [])) : ([])))]);
        // line 61
        yield "  ";
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["data-alerts-error" => Twig\Extension\CoreExtension::length($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 61), "alerts", [], "any", false, true, false, 61), "error", [], "any", true, true, false, 61)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 61), "alerts", [], "any", false, false, false, 61), "error", [], "any", false, false, false, 61), [])) : ([])))]);
        // line 62
        yield "  ";
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["data-form-submitted" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 62), "submitted", [], "any", false, false, false, 62)) ? (1) : (0))]);
        // line 63
        yield "  ";
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["data-form-valid" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 63), "valid", [], "any", false, false, false, 63)) ? (1) : (0))]);
        // line 64
        yield "  ";
        yield from $this->yieldParentBlock("form_start", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 67
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 68
        if (array_key_exists("columns_number", $context)) {
            // line 69
            yield "    ";
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim(((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 69)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 69), "")) : ("")) . " form-columns-") . ($context["columns_number"] ?? null)))]);
            // line 70
            yield "  ";
        }
        // line 71
        yield "  ";
        yield from $this->yieldParentBlock("form_widget", $context, $blocks);
        // line 72
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        yield from [];
    }

    // line 75
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_widget_simple(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 76
        yield from $this->yieldParentBlock("form_widget_simple", $context, $blocks);
        yield "
  ";
        // line 77
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/TwigTemplateForm/form_max_length.html.twig", ["attr" => ($context["attr"] ?? null)]);
        yield from [];
    }

    // line 80
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ip_address_text_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 81
        yield "  <div class=\"input-group\">";
        // line 82
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        // line 83
        yield "<button type=\"button\" class=\"btn btn-outline-primary add_ip_button\" data-ip=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["currentIp"] ?? null), "html", null, true);
        yield "\">
      <i class=\"material-icons\">add_circle</i> ";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add my IP", [], "Admin.Actions"), "html", null, true);
        yield "
    </button>
  </div>
  ";
        // line 87
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 90
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_password_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 91
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "password")) : ("password"));
        // line 92
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        yield "
  ";
        // line 93
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        yield from [];
    }

    // line 98
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 99
        yield "<div class=\"form-group";
        yield from         $this->unwrap()->yieldBlock("widget_type_class", $context, $blocks);
        if ((( !($context["compound"] ?? null) || ((array_key_exists("force_error", $context)) ? (Twig\Extension\CoreExtension::default(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
            yield " has-error";
        }
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 99)) {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 99), "html", null, true);
        }
        yield "\">";
        // line 100
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 101
        yield from         $this->unwrap()->yieldBlock("form_prepend_alert", $context, $blocks);
        // line 102
        yield from         $this->unwrap()->yieldBlock("form_prepend_external_link", $context, $blocks);
        // line 104
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 105
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 106
        yield from         $this->unwrap()->yieldBlock("form_modify_all_shops", $context, $blocks);
        // line 108
        yield from         $this->unwrap()->yieldBlock("form_append_alert", $context, $blocks);
        // line 109
        yield from         $this->unwrap()->yieldBlock("form_append_external_link", $context, $blocks);
        // line 110
        yield "</div>

  ";
        // line 112
        if (($context["column_breaker"] ?? null)) {
            // line 113
            yield "  <div class=\"form-group form-column-breaker\"></div>
  ";
        }
        yield from [];
    }

    // line 121
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_modify_all_shops(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 122
        yield "  ";
        $context["overrideCheckboxName"] = (($context["modify_all_shops_prefix"] ?? null) . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 122), "name", [], "any", false, false, false, 122));
        // line 123
        yield "  ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, true, false, 123), ($context["overrideCheckboxName"] ?? null), [], "any", true, true, false, 123)) {
            // line 124
            yield "    ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 124), ($context["overrideCheckboxName"] ?? null), [], "any", false, false, false, 124), 'errors');
            yield "
    ";
            // line 125
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 125), ($context["overrideCheckboxName"] ?? null), [], "any", false, false, false, 125), 'widget');
            yield "
  ";
        }
        yield from [];
    }

    // line 129
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_disabling_switch(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 130
        yield "  ";
        $context["disablingSwitchName"] = (($context["disabling_switch_prefix"] ?? null) . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 130), "name", [], "any", false, false, false, 130));
        // line 131
        yield "  ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, true, false, 131), ($context["disablingSwitchName"] ?? null), [], "any", true, true, false, 131)) {
            // line 132
            yield "    ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 132), ($context["disablingSwitchName"] ?? null), [], "any", false, false, false, 132), 'errors');
            yield "
    ";
            // line 133
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 133), ($context["disablingSwitchName"] ?? null), [], "any", false, false, false, 133), 'widget');
            yield "
  ";
        }
        yield from [];
    }

    // line 137
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_widget_type_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 138
        if (( !((array_key_exists("compound", $context)) ? (Twig\Extension\CoreExtension::default(($context["compound"] ?? null), false)) : (false)) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 138), "block_prefixes", [], "any", false, false, false, 138)) > 2))) {
            // line 139
            yield " ";
            $_v0 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 140
                yield "
    ";
                // line 141
                $context["index"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 141), "block_prefixes", [], "any", false, false, false, 141)) - 2);
                // line 142
                yield "    ";
                $context["widgetType"] = (($_v1 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 142), "block_prefixes", [], "any", false, false, false, 142)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[($context["index"] ?? null)] ?? null) : null);
                // line 143
                yield "    ";
                if ((($context["widgetType"] ?? null) == "choice")) {
                    // line 144
                    yield "      ";
                    if ( !($context["expanded"] ?? null)) {
                        // line 145
                        yield "        ";
                        $context["widgetType"] = "select";
                        // line 146
                        yield "      ";
                    } elseif (($context["multiple"] ?? null)) {
                        // line 147
                        yield "        ";
                        $context["widgetType"] = "checboxes";
                        // line 148
                        yield "      ";
                    } else {
                        // line 149
                        yield "        ";
                        $context["widgetType"] = "radio";
                        // line 150
                        yield "      ";
                    }
                    // line 151
                    yield "    ";
                }
                // line 152
                yield "    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["widgetType"] ?? null), "html", null, true);
                yield "-widget
";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 139
            yield Twig\Extension\CoreExtension::spaceless($_v0);
        }
        yield from [];
    }

    // line 159
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 160
        if ( !(($context["label"] ?? null) === false)) {
            // line 161
            if ( !($context["compound"] ?? null)) {
                // line 162
                $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["for" => ($context["id"] ?? null)]);
            }
            // line 164
            yield "    ";
            if (($context["required"] ?? null)) {
                // line 165
                $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 165)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 165), "")) : ("")) . " required"))]);
            }
            // line 167
            yield "    ";
            if (Twig\Extension\CoreExtension::testEmpty(($context["label"] ?? null))) {
                // line 168
                if ( !Twig\Extension\CoreExtension::testEmpty(($context["label_format"] ?? null))) {
                    // line 169
                    $context["label"] = Twig\Extension\CoreExtension::replace(($context["label_format"] ?? null), ["%name%" =>                     // line 170
($context["name"] ?? null), "%id%" =>                     // line 171
($context["id"] ?? null)]);
                } else {
                    // line 174
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
                }
            }
            // line 178
            $context["labelTag"] = ((array_key_exists("label_tag_name", $context)) ? (Twig\Extension\CoreExtension::default(($context["label_tag_name"] ?? null), "label")) : ("label"));
            // line 179
            yield "    <";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["labelTag"] ?? null), "html", null, true);
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
            yield ">
    ";
            // line 180
            if (($context["required"] ?? null)) {
                // line 181
                yield "      <span class=\"text-danger\">*</span>
    ";
            }
            // line 183
            yield "    ";
            yield (((($context["translation_domain"] ?? null) === false)) ? (($context["label"] ?? null)) : (($context["label"] ?? null)));
            yield "
    ";
            // line 184
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "tooltip", [], "array", true, true, false, 184)) {
                // line 185
                yield "      ";
                $context["placement"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "tooltip_placement", [], "array", true, true, false, 185)) ? ((($_v2 = ($context["label_attr"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["tooltip_placement"] ?? null) : null)) : ("top"));
                // line 186
                yield "      <i class=\"icon-question\" data-toggle=\"pstooltip\" data-placement=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["placement"] ?? null), "html", null, true);
                yield "\"
         title=\"";
                // line 187
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v3 = ($context["label_attr"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["tooltip"] ?? null) : null), "html", null, true);
                yield "\"></i>
    ";
            }
            // line 189
            yield "
    ";
            // line 190
            if ((array_key_exists("label_help_box", $context) || CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "popover", [], "array", true, true, false, 190))) {
                // line 191
                yield "      ";
                $context["content"] = ((array_key_exists("label_help_box", $context)) ? (($context["label_help_box"] ?? null)) : ((($_v4 = ($context["label_attr"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["popover"] ?? null) : null)));
                // line 192
                yield "      ";
                $context["placement"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "popover_placement", [], "array", true, true, false, 192)) ? ((($_v5 = ($context["label_attr"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["popover_placement"] ?? null) : null)) : ("top"));
                // line 193
                yield "      ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@Common/HelpBox/helpbox.html.twig", ["placement" => ($context["placement"] ?? null), "content" => ($context["content"] ?? null)]);
                yield "
    ";
            }
            // line 195
            yield from             $this->unwrap()->yieldBlock("form_disabling_switch", $context, $blocks);
            // line 196
            yield "</";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["labelTag"] ?? null), "html", null, true);
            yield ">";
        }
        // line 198
        if (array_key_exists("label_subtitle", $context)) {
            // line 199
            yield "    <p class=\"subtitle\">";
            yield ($context["label_subtitle"] ?? null);
            yield "</p>
  ";
        }
        yield from [];
    }

    // line 205
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_textarea_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 206
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 206)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 206), "")) : ("")) . " form-control"))]);
        // line 207
        yield from $this->yieldParentBlock("textarea_widget", $context, $blocks);
        // line 208
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/TwigTemplateForm/form_max_length.html.twig", ["attr" => ($context["attr"] ?? null)]);
        yield "
  ";
        // line 209
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        yield from [];
    }

    // line 212
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_money_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 213
        yield "<div class=\"input-group money-type\">
    ";
        // line 214
        $context["prepend"] = ("{{" == Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["money_pattern"] ?? null), 0, 2));
        // line 215
        yield "    ";
        if ( !($context["prepend"] ?? null)) {
            // line 216
            yield "      <div class=\"input-group-prepend\">
        <span class=\"input-group-text\">";
            // line 217
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(($context["money_pattern"] ?? null), ["{{ widget }}" => ""]), "html", null, true);
            yield "</span>
      </div>
    ";
        }
        // line 220
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        // line 221
        if (($context["prepend"] ?? null)) {
            // line 222
            yield "      <div class=\"input-group-append\">
        <span class=\"input-group-text\">";
            // line 223
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(($context["money_pattern"] ?? null), ["{{ widget }}" => ""]), "html", null, true);
            yield "</span>
      </div>
    ";
        }
        // line 226
        yield "  </div>

  ";
        // line 228
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        yield from [];
    }

    // line 231
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_percent_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 232
        yield "<div class=\"input-group\">";
        // line 233
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        // line 234
        yield "<div class=\"input-group-append\">
      <span class=\"input-group-text\">%</span>
    </div>
  </div>";
        yield from [];
    }

    // line 240
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_datetime_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 241
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 242
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 244
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 244)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 244), "")) : ("")) . " form-inline"))]);
            // line 245
            yield "<div ";
            yield from             $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
            yield ">";
            // line 246
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, false, 246), 'errors');
            // line 247
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, false, false, 247), 'errors');
            // line 248
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, false, 248), 'widget', ["datetime" => true]);
            // line 249
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, false, false, 249), 'widget', ["datetime" => true]);
            // line 250
            yield "</div>";
        }
        yield from [];
    }

    // line 254
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_url_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 255
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "url")) : ("url"));
        // line 256
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        yield "
  ";
        // line 257
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        yield from [];
    }

    // line 260
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_date_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 261
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 262
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 264
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 264)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 264), "")) : ("")) . " form-inline"))]);
            // line 265
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 266
                yield "<div ";
                yield from                 $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
                yield ">";
            }
            // line 268
            yield Twig\Extension\CoreExtension::replace(($context["date_pattern"] ?? null), ["{{ year }}" =>             // line 269
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "year", [], "any", false, false, false, 269), 'widget'), "{{ month }}" =>             // line 270
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "month", [], "any", false, false, false, 270), 'widget'), "{{ day }}" =>             // line 271
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "day", [], "any", false, false, false, 271), 'widget')]);
            // line 273
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 274
                yield "</div>";
            }
        }
        yield from [];
    }

    // line 279
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_time_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 280
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 281
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 283
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 283)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 283), "")) : ("")) . " form-inline"))]);
            // line 284
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? null)))) {
                // line 285
                yield "<div ";
                yield from                 $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
                yield ">";
            }
            // line 287
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "hour", [], "any", false, false, false, 287), 'widget');
            yield ":";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "minute", [], "any", false, false, false, 287), 'widget');
            if (($context["with_seconds"] ?? null)) {
                yield ":";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "second", [], "any", false, false, false, 287), 'widget');
            }
            // line 288
            yield "    ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? null)))) {
                // line 289
                yield "</div>";
            }
        }
        yield from [];
    }

    // line 294
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_email_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 295
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "email")) : ("email"));
        // line 296
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        yield "
  ";
        // line 297
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        yield from [];
    }

    // line 300
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_button_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 301
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 301)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 301), "btn-default")) : ("btn-default")) . " btn"))]);
        // line 302
        yield from $this->yieldParentBlock("button_widget", $context, $blocks);
        yield from [];
    }

    // line 305
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_icon_button_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 306
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 306)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 306), "btn-default")) : ("btn-default")) . " btn"))]);
        // line 307
        yield "  ";
        if ((($context["button_type"] ?? null) == "link")) {
            // line 308
            yield "    ";
            $context["buttonTag"] = "a";
            // line 309
            yield "    ";
            // line 310
            yield "    ";
            if (((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "disabled", [], "any", true, true, false, 310)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "disabled", [], "any", false, false, false, 310), false)) : (false))) {
                // line 311
                yield "      ";
                $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 311) . " disabled"))]);
                // line 312
                yield "    ";
            }
            // line 313
            yield "  ";
        } else {
            // line 314
            yield "    ";
            $context["buttonTag"] = "button";
            // line 315
            yield "    ";
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["type" => "button"]);
            // line 316
            yield "  ";
        }
        // line 317
        yield "
  <";
        // line 318
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["buttonTag"] ?? null), "html", null, true);
        yield " ";
        yield from         $this->unwrap()->yieldBlock("button_attributes", $context, $blocks);
        yield ">
    <i class=\"material-icons\">";
        // line 319
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_icon"] ?? null), "html", null, true);
        yield "</i>
    <span class=\"btn-label\">";
        // line 320
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["label"] ?? null), "html", null, true);
        yield "</span>
  </";
        // line 321
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["buttonTag"] ?? null), "html", null, true);
        yield ">";
        yield from [];
    }

    // line 324
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 325
        yield from $this->yieldParentBlock("choice_widget", $context, $blocks);
        // line 326
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 329
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_widget_collapsed(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 330
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 330)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 330), "")) : ("")) . " custom-select"))]);
        // line 331
        yield from $this->yieldParentBlock("choice_widget_collapsed", $context, $blocks);
        yield from [];
    }

    // line 334
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_widget_expanded(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 335
        if (CoreExtension::inFilter("-inline", ((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 335)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 335), "")) : ("")))) {
            // line 336
            yield "<div class=\"control-group\">";
            // line 337
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 338
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["parent_label_class" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 339
($context["label_attr"] ?? null), "class", [], "any", true, true, false, 339)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 339), "")) : ("")), "translation_domain" =>                 // line 340
($context["choice_translation_domain"] ?? null), "valid" =>                 // line 341
($context["valid"] ?? null)]);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 344
            yield "</div>";
        } else {
            // line 346
            yield "<div ";
            yield from             $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
            yield ">";
            // line 347
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 348
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["parent_label_class" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 349
($context["label_attr"] ?? null), "class", [], "any", true, true, false, 349)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 349), "")) : ("")), "translation_domain" =>                 // line 350
($context["choice_translation_domain"] ?? null), "valid" =>                 // line 351
($context["valid"] ?? null)]);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 354
            yield "</div>";
        }
        yield from [];
    }

    // line 358
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_tree_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 359
        yield "<div ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield " class=\"category-tree-overflow\">
    <ul class=\"category-tree\">
      <li class=\"form-control-label text-right main-category\">";
        // line 361
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Main category", [], "Admin.Catalog.Feature"), "html", null, true);
        yield "</li>";
        // line 362
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
            // line 363
            yield "        ";
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
        // line 365
        yield "</ul>
  </div>";
        yield from [];
    }

    // line 369
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_tree_item_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 370
        yield "<li>
    ";
        // line 371
        $context["checked"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 371), "submitted_values", [], "any", true, true, false, 371) && CoreExtension::getAttribute($this->env, $this->source, ($context["submitted_values"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["child"] ?? null), "id_category", [], "any", false, false, false, 371), [], "array", true, true, false, 371))) ? ("checked=\"checked\"") : (""));
        // line 372
        yield "    ";
        if (($context["multiple"] ?? null)) {
            // line 373
            yield "<div class=\"checkbox\">
        <label>
          <input type=\"checkbox\" name=\"";
            // line 375
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 375), "full_name", [], "any", false, false, false, 375), "html", null, true);
            yield "[tree][]\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["child"] ?? null), "id_category", [], "any", false, false, false, 375), "html", null, true);
            yield "\" class=\"category\" ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["checked"] ?? null), "html", null, true);
            yield ">
          ";
            // line 376
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["child"] ?? null), "active", [], "any", true, true, false, 376) && (CoreExtension::getAttribute($this->env, $this->source, ($context["child"] ?? null), "active", [], "any", false, false, false, 376) == 0))) {
                // line 377
                yield "            <i>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["child"] ?? null), "name", [], "any", false, false, false, 377), "html", null, true);
                yield "</i>";
            } else {
                // line 379
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["child"] ?? null), "name", [], "any", false, false, false, 379), "html", null, true);
                yield "
          ";
            }
            // line 381
            yield "          ";
            if (array_key_exists("defaultCategory", $context)) {
                // line 382
                yield "            <input type=\"radio\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["child"] ?? null), "id_category", [], "any", false, false, false, 382), "html", null, true);
                yield "\" name=\"ignore\" class=\"default-category\" />
          ";
            }
            // line 384
            yield "        </label>
      </div>";
        } else {
            // line 387
            yield "<div class=\"radio\">
        <label>
          <input type=\"radio\" name=\"form[";
            // line 389
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 389), "id", [], "any", false, false, false, 389), "html", null, true);
            yield "][tree]\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["child"] ?? null), "id_category", [], "any", false, false, false, 389), "html", null, true);
            yield "\" ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["checked"] ?? null), "html", null, true);
            yield " class=\"category\">
          ";
            // line 390
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["child"] ?? null), "name", [], "any", false, false, false, 390), "html", null, true);
            yield "
          ";
            // line 391
            if (array_key_exists("defaultCategory", $context)) {
                // line 392
                yield "            <input type=\"radio\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["child"] ?? null), "id_category", [], "any", false, false, false, 392), "html", null, true);
                yield "\" name=\"ignore\" class=\"default-category\" />
          ";
            }
            // line 394
            yield "        </label>
      </div>";
        }
        // line 397
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["child"] ?? null), "children", [], "any", true, true, false, 397)) {
            // line 398
            yield "      <ul>
        ";
            // line 399
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["child"] ?? null), "children", [], "any", false, false, false, 399));
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
                // line 400
                yield "          ";
                $context["child"] = $context["item"];
                // line 401
                yield "          ";
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
            // line 403
            yield "</ul>
    ";
        }
        // line 405
        yield "  </li>";
        yield from [];
    }

    // line 408
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_translatefields_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 409
        yield "  ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        yield "
  <div class=\"translations tabbable\" id=\"";
        // line 410
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 410), "id", [], "any", false, false, false, 410), "html", null, true);
        yield "\" tabindex=\"1\">
    ";
        // line 411
        if (((($context["hideTabs"] ?? null) == false) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["form"] ?? null)) > 1))) {
            // line 412
            yield "      <ul class=\"translationsLocales nav nav-pills\">
        ";
            // line 413
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
                // line 414
                yield "          <li class=\"nav-item\">
            <a href=\"#\" data-locale=\"";
                // line 415
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 415), "label", [], "any", false, false, false, 415), "html", null, true);
                yield "\" class=\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["defaultLocale"] ?? null), "id_lang", [], "any", false, false, false, 415) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 415), "name", [], "any", false, false, false, 415))) {
                    yield "active";
                }
                yield " nav-link\" data-toggle=\"tab\" data-target=\".translationsFields-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 415), "id", [], "any", false, false, false, 415), "html", null, true);
                yield "\">
              ";
                // line 416
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 416), "label", [], "any", false, false, false, 416)), "html", null, true);
                yield "
            </a>
          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['translationsFields'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 420
            yield "      </ul>
    ";
        }
        // line 422
        yield "
    <div class=\"translationsFields tab-content\">
      ";
        // line 424
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
            // line 425
            yield "        <div data-locale=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 425), "label", [], "any", false, false, false, 425), "html", null, true);
            yield "\" class=\"translationsFields-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 425), "id", [], "any", false, false, false, 425), "html", null, true);
            yield " tab-pane translation-field ";
            if (((($context["hideTabs"] ?? null) == false) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["form"] ?? null)) > 1))) {
                yield "panel panel-default";
            }
            yield " ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["defaultLocale"] ?? null), "id_lang", [], "any", false, false, false, 425) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 425), "name", [], "any", false, false, false, 425))) {
                yield "show active";
            }
            yield " ";
            if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 425), "valid", [], "any", false, false, false, 425)) {
                yield "field-error";
            }
            yield " translation-label-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 425), "label", [], "any", false, false, false, 425), "html", null, true);
            yield "\">
          ";
            // line 426
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translationsFields"], 'errors');
            yield "
          ";
            // line 427
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translationsFields"], 'widget');
            yield "
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['translationsFields'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 430
        yield "    </div>
  </div>
";
        yield from [];
    }

    // line 434
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_translate_fields_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 435
        if (( !array_key_exists("type", $context) || ("file" != ($context["type"] ?? null)))) {
            // line 436
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 436)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 436), "")) : ("")) . " form-control"))]);
        }
        // line 438
        yield from $this->yieldParentBlock("translate_fields_widget", $context, $blocks);
        yield from [];
    }

    // line 441
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_translate_text_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 442
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        yield "
  <div class=\"input-group locale-input-group js-locale-input-group\">
    ";
        // line 444
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
        foreach ($context['_seq'] as $context["_key"] => $context["translateField"]) {
            // line 445
            yield "      ";
            $context["classes"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, true, false, 445), "attr", [], "any", false, true, false, 445), "class", [], "any", true, true, false, 445)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 445), "attr", [], "any", false, false, false, 445), "class", [], "any", false, false, false, 445), "")) : ("")) . " js-locale-input");
            // line 446
            yield "      ";
            $context["classes"] = ((($context["classes"] ?? null) . " js-locale-") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 446), "label", [], "any", false, false, false, 446));
            // line 447
            yield "
      ";
            // line 448
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["default_locale"] ?? null), "id_lang", [], "any", false, false, false, 448) != CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 448), "name", [], "any", false, false, false, 448))) {
                // line 449
                yield "        ";
                $context["classes"] = (($context["classes"] ?? null) . " d-none");
                // line 450
                yield "      ";
            }
            // line 452
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim(($context["classes"] ?? null))]);
            // line 453
            yield from             $this->unwrap()->yieldBlock("form_widget", $context, $blocks);
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
        unset($context['_seq'], $context['_key'], $context['translateField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 455
        yield "
    ";
        // line 456
        if ( !($context["hide_locales"] ?? null)) {
            // line 457
            yield "      <div class=\"dropdown\">
        <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                type=\"button\"
                data-toggle=\"dropdown\"
                aria-haspopup=\"true\"
                aria-expanded=\"false\"
                id=\"";
            // line 463
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 463), "id", [], "any", false, false, false, 463), "html", null, true);
            yield "\"
        >
          ";
            // line 465
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 465), "default_locale", [], "any", false, false, false, 465), "iso_code", [], "any", false, false, false, 465)), "html", null, true);
            yield "
        </button>

        <div class=\"dropdown-menu dropdown-menu-right locale-dropdown-menu\" aria-labelledby=\"";
            // line 468
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 468), "id", [], "any", false, false, false, 468), "html", null, true);
            yield "\">
          ";
            // line 469
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["locales"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 470
                yield "            <span class=\"dropdown-item js-locale-item\" data-locale=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["locale"], "iso_code", [], "any", false, false, false, 470), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["locale"], "name", [], "any", false, false, false, 470), "html", null, true);
                yield "</span>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['locale'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 472
            yield "        </div>
      </div>
    ";
        }
        // line 475
        yield "  </div>";
        yield from [];
    }

    // line 478
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_translate_textarea_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 479
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        yield "
  <div class=\"input-group locale-input-group js-locale-input-group\">
    ";
        // line 481
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["textarea"]) {
            // line 482
            yield "      ";
            $context["classes"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["textarea"], "vars", [], "any", false, true, false, 482), "attr", [], "any", false, true, false, 482), "class", [], "any", true, true, false, 482)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["textarea"], "vars", [], "any", false, false, false, 482), "attr", [], "any", false, false, false, 482), "class", [], "any", false, false, false, 482), "")) : ("")) . " js-locale-input");
            // line 483
            yield "      ";
            $context["classes"] = ((($context["classes"] ?? null) . " js-locale-") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["textarea"], "vars", [], "any", false, false, false, 483), "label", [], "any", false, false, false, 483));
            // line 484
            yield "
      ";
            // line 485
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["default_locale"] ?? null), "id_lang", [], "any", false, false, false, 485) != CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["textarea"], "vars", [], "any", false, false, false, 485), "name", [], "any", false, false, false, 485))) {
                // line 486
                yield "        ";
                $context["classes"] = (($context["classes"] ?? null) . " d-none");
                // line 487
                yield "      ";
            }
            // line 488
            yield "
      <div class=\"";
            // line 489
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["classes"] ?? null), "html", null, true);
            yield "\">
        ";
            // line 490
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["textarea"], 'widget', ["attr" => ["class" => Twig\Extension\CoreExtension::trim(($context["classes"] ?? null))]]);
            yield "
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['textarea'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 493
        yield "
    ";
        // line 494
        if (($context["show_locale_select"] ?? null)) {
            // line 495
            yield "      <div class=\"dropdown\">
        <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                type=\"button\"
                data-toggle=\"dropdown\"
                aria-haspopup=\"true\"
                aria-expanded=\"false\"
                id=\"";
            // line 501
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 501), "id", [], "any", false, false, false, 501), "html", null, true);
            yield "\"
        >
          ";
            // line 503
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 503), "default_locale", [], "any", false, false, false, 503), "iso_code", [], "any", false, false, false, 503)), "html", null, true);
            yield "
        </button>

        <div class=\"dropdown-menu dropdown-menu-right locale-dropdown-menu\" aria-labelledby=\"";
            // line 506
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 506), "id", [], "any", false, false, false, 506), "html", null, true);
            yield "\">
          ";
            // line 507
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["locales"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 508
                yield "            <span class=\"dropdown-item js-locale-item\"
                  data-locale=\"";
                // line 509
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["locale"], "iso_code", [], "any", false, false, false, 509), "html", null, true);
                yield "\"
            >
              ";
                // line 511
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["locale"], "name", [], "any", false, false, false, 511), "html", null, true);
                yield "
            </span>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['locale'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 514
            yield "        </div>
      </div>
    ";
        }
        // line 517
        yield "  </div>";
        yield from [];
    }

    // line 520
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_date_picker_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 521
        yield "  ";
        $_v6 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 522
            yield "    ";
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 522)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 522), "")) : ("")) . " form-control datepicker"))]);
            // line 523
            yield "    <div class=\"input-group datepicker\">
      <input type=\"text\" data-format=\"";
            // line 524
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
            // line 531
            yield from             $this->unwrap()->yieldBlock("form_help", $context, $blocks);
            yield "
  ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 521
        yield Twig\Extension\CoreExtension::spaceless($_v6);
        yield from [];
    }

    // line 535
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_date_range_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 536
        yield "  ";
        $_v7 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 537
            yield "    <div class=\"input-group date-range row\">
      <div class=\"col col-md-4\">
        ";
            // line 539
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "from", [], "any", false, false, false, 539), 'row');
            yield "
      </div>
      <div class=\"col col-md-4\">
        ";
            // line 542
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "to", [], "any", false, false, false, 542), 'row');
            yield "
        ";
            // line 543
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "unlimited", [], "any", true, true, false, 543)) {
                // line 544
                yield "          ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "unlimited", [], "any", false, false, false, 544), 'widget');
                yield "
          ";
                // line 545
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "unlimited", [], "any", false, false, false, 545), 'errors');
                yield "
        ";
            }
            // line 547
            yield "      </div>
    </div>
  ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 536
        yield Twig\Extension\CoreExtension::spaceless($_v7);
        yield from [];
    }

    // line 552
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_search_and_reset_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 553
        yield "  ";
        $_v8 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 554
            yield "    <button type=\"submit\"
            class=\"btn btn-primary grid-search-button\"
            title=\"";
            // line 556
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search", [], "Admin.Actions"), "html", null, true);
            yield "\"
            name=\"";
            // line 557
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["full_name"] ?? null), "html", null, true);
            yield "[search]\"
    >
      <i class=\"material-icons\">search</i>
      ";
            // line 560
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search", [], "Admin.Actions"), "html", null, true);
            yield "
    </button>
    ";
            // line 562
            if (($context["show_reset_button"] ?? null)) {
                // line 563
                yield "      <div class=\"js-grid-reset-button\">
        <button type=\"reset\"
                name=\"";
                // line 565
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["full_name"] ?? null), "html", null, true);
                yield "[reset]\"
                class=\"btn btn-link js-reset-search btn d-block grid-reset-button\"
                data-url=\"";
                // line 567
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["reset_url"] ?? null), "html", null, true);
                yield "\"
                data-redirect=\"";
                // line 568
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["redirect_url"] ?? null), "html", null, true);
                yield "\"
        >
          <i class=\"material-icons\">clear</i>
          ";
                // line 571
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reset", [], "Admin.Actions"), "html", null, true);
                yield "
        </button>
      </div>
    ";
            }
            // line 575
            yield "  ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 553
        yield Twig\Extension\CoreExtension::spaceless($_v8);
        yield from [];
    }

    // line 578
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_switch_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 579
        yield "  ";
        $_v9 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 580
            yield "  ";
            $context["rowAttributes"] = ((array_key_exists("row_attr", $context)) ? (Twig\Extension\CoreExtension::default(($context["row_attr"] ?? null), [])) : ([]));
            // line 581
            yield "  <div class=\"input-group ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["rowAttributes"] ?? null), "class", [], "any", true, true, false, 581)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["rowAttributes"] ?? null), "class", [], "any", false, false, false, 581), "")) : ("")), "html", null, true);
            yield "\" ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["rowAttributes"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["rowAttr"]) {
                yield " ";
                if (($context["key"] != "class")) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                    yield "=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["rowAttr"], "html", null, true);
                    yield "\"";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['rowAttr'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield ">
    <span class=\"ps-switch\" id=\"";
            // line 582
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 582), "id", [], "any", false, false, false, 582), "html", null, true);
            yield "\">
        ";
            // line 583
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
                // line 584
                yield "          ";
                $context["inputId"] = ((($context["id"] ?? null) . "_") . CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 584));
                // line 585
                yield "          <input id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["inputId"] ?? null), "html", null, true);
                yield "\"
            ";
                // line 586
                yield from                 $this->unwrap()->yieldBlock("attributes", $context, $blocks);
                yield "
            name=\"";
                // line 587
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["full_name"] ?? null), "html", null, true);
                yield "\"
            value=\"";
                // line 588
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 588), "html", null, true);
                yield "\"
            ";
                // line 589
                if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], ($context["value"] ?? null))) {
                    yield "checked=\"\"";
                }
                // line 590
                yield "            ";
                if (($context["disabled"] ?? null)) {
                    yield "disabled=\"\"";
                }
                // line 591
                yield "            type=\"radio\"
          >
          ";
                // line 593
                if (($context["show_choices"] ?? null)) {
                    yield "<label for=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["inputId"] ?? null), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 593), [], ($context["choice_translation_domain"] ?? null)), "html", null, true);
                    yield "</label>";
                }
                // line 594
                yield "        ";
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
            // line 595
            yield "        <span class=\"slide-button\"></span>
    </span>
  </div>
  ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 579
        yield Twig\Extension\CoreExtension::spaceless($_v9);
        // line 599
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        yield from [];
    }

    // line 602
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_row_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 603
        $context["rowAttributes"] = ((array_key_exists("row_attr", $context)) ? (Twig\Extension\CoreExtension::default(($context["row_attr"] ?? null), [])) : ([]));
        // line 604
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["rowAttributes"] ?? null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 605
            yield " ";
            // line 606
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
            yield "=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrvalue"], "html", null, true);
            yield "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['attrname'], $context['attrvalue'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    // line 610
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__form_step6_attachments_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 611
        yield "  <div class=\"js-options-no-attachments ";
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["form"] ?? null)) > 0)) ? ("hide") : (""));
        yield "\">
    <small>";
        // line 612
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("There is no attachment yet.", [], "Admin.Catalog.Notification"), "html", null, true);
        yield "</small>
  </div>
  <div id=\"product-attachments\" class=\"panel panel-default\">
    <div class=\"panel-body js-options-with-attachments ";
        // line 615
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["form"] ?? null)) == 0)) ? ("hide") : (""));
        yield "\">
      <div>
        <table id=\"product-attachment-file\" class=\"table\">
          <thead class=\"thead-default\">
          <tr>
            <th class=\"col-md-3\">";
        // line 620
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Title", [], "Admin.Global"), "html", null, true);
        yield "</th>
            <th class=\"col-md-6\">";
        // line 621
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("File name", [], "Admin.Global"), "html", null, true);
        yield "</th>
            <th class=\"col-md-2\">";
        // line 622
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type", [], "Admin.Catalog.Feature"), "html", null, true);
        yield "</th>
          </tr>
          </thead>
          <tbody>";
        // line 626
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
            // line 627
            yield "            <tr>
              <td class=\"col-md-3\">";
            // line 628
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            yield "</td>
              <td class=\"col-md-6 file-name\"><span>";
            // line 629
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v10 = (($_v11 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 629), "attr", [], "any", false, false, false, 629), "data", [], "any", false, false, false, 629)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 629)] ?? null) : null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["file_name"] ?? null) : null), "html", null, true);
            yield "</span></td>
              <td class=\"col-md-2\">";
            // line 630
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v12 = (($_v13 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 630), "attr", [], "any", false, false, false, 630), "data", [], "any", false, false, false, 630)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 630)] ?? null) : null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["mime"] ?? null) : null), "html", null, true);
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
        // line 633
        yield "</tbody>
        </table>
      </div>
    </div>
  </div>
";
        yield from [];
    }

    // line 642
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 644
        $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::replace(((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 644)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 644), "")) : ("")), ["checkbox-inline" => "", "radio-inline" => ""]))]);
        // line 645
        yield from         $this->unwrap()->yieldBlock("form_label", $context, $blocks);
        yield from [];
    }

    // line 648
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_checkbox_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 649
        yield from         $this->unwrap()->yieldBlock("checkbox_radio_label", $context, $blocks);
        yield from [];
    }

    // line 652
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_radio_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 653
        yield from         $this->unwrap()->yieldBlock("checkbox_radio_label", $context, $blocks);
        yield from [];
    }

    // line 656
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_checkbox_radio_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 657
        yield "  ";
        // line 658
        yield "  ";
        if (array_key_exists("widget", $context)) {
            // line 659
            yield "    ";
            if (($context["required"] ?? null)) {
                // line 660
                yield "      ";
                $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 660)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 660), "")) : ("")) . " required"))]);
                // line 661
                yield "    ";
            }
            // line 662
            yield "    ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 663
                yield "      ";
                $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim(((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 663)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 663), "")) : ("")) . " ") . ($context["parent_label_class"] ?? null)))]);
                // line 664
                yield "    ";
            }
            // line 665
            yield "    ";
            if (( !(($context["label"] ?? null) === false) && Twig\Extension\CoreExtension::testEmpty(($context["label"] ?? null)))) {
                // line 666
                yield "      ";
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
                // line 667
                yield "    ";
            }
            // line 668
            yield "
    ";
            // line 669
            if (((($_v14 = ($context["block_prefixes"] ?? null)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14[2] ?? null) : null) == "radio")) {
                // line 670
                yield "      <label class=\"form-check-label\"";
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
                // line 671
                yield ($context["widget"] ?? null);
                // line 673
                yield "<i class=\"form-check-round\"></i>";
                // line 675
                yield (( !(($context["label"] ?? null) === false)) ? ((((($context["translation_domain"] ?? null) === false)) ? (($context["label"] ?? null)) : (($context["label"] ?? null)))) : (""));
                // line 676
                yield "</label>
    ";
            } else {
                // line 678
                yield "      <div class=\"md-checkbox md-checkbox-inline\">
        <label";
                // line 679
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
                // line 680
                yield ($context["widget"] ?? null);
                // line 681
                yield "<i class=\"md-checkbox-control\"></i>";
                // line 682
                yield (( !(($context["label"] ?? null) === false)) ? ((((($context["translation_domain"] ?? null) === false)) ? (($context["label"] ?? null)) : (($context["label"] ?? null)))) : (""));
                // line 683
                yield "</label>
      </div>
    ";
            }
            // line 686
            yield "  ";
        }
        yield from [];
    }

    // line 689
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_radio_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 690
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["parent_label_class"] ?? null), ((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 690)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 690), "")) : ("")))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 690)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 690), "")) : (""))));
        // line 691
        if (CoreExtension::inFilter("radio-custom", ($context["parent_label_class"] ?? null))) {
            // line 692
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 692)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 692), "")) : ("")) . " custom-control-input"))]);
            // line 693
            yield "<div class=\"custom-control custom-radio";
            yield ((CoreExtension::inFilter("radio-inline", ($context["parent_label_class"] ?? null))) ? (" custom-control-inline") : (""));
            yield "\">";
            // line 694
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" =>             $this->unwrap()->renderBlock("base_radio_widget", $context, $blocks)]);
            // line 695
            yield "</div>";
        } else {
            // line 697
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 697)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 697), "")) : ("")) . " form-check-input"))]);
            // line 698
            yield "<div class=\"form-check form-check-radio form-radio";
            yield ((CoreExtension::inFilter("radio-inline", ($context["parent_label_class"] ?? null))) ? (" form-check-inline") : (""));
            yield "\">";
            // line 699
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" =>             $this->unwrap()->renderBlock("base_radio_widget", $context, $blocks)]);
            // line 700
            yield "</div>";
        }
        yield from [];
    }

    // line 704
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_checkbox_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 705
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["parent_label_class"] ?? null), ((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 705)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 705), "")) : ("")))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 705)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 705), "")) : (""))));
        // line 706
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 706)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 706), "")) : ("")) . " form-check-input"))]);
        // line 707
        yield "<div class=\"form-check form-check-radio form-checkbox";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "container_class", [], "any", true, true, false, 707)) {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "container_class", [], "any", false, false, false, 707), "html", null, true);
        }
        yield "\">";
        // line 708
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" =>         $this->unwrap()->renderBlock("base_checkbox_widget", $context, $blocks)]);
        // line 709
        yield "</div>";
        yield from [];
    }

    // line 714
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_errors(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 715
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "fieldError", [], "array", true, true, false, 715) && ((($_v15 = ($context["attr"] ?? null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15["fieldError"] ?? null) : null) == true))) {
            // line 716
            yield "    ";
            yield from             $this->unwrap()->yieldBlock("form_errors_field", $context, $blocks);
            yield "
  ";
        } else {
            // line 718
            yield "    ";
            yield from             $this->unwrap()->yieldBlock("form_errors_other", $context, $blocks);
            yield "
  ";
        }
        yield from [];
    }

    // line 722
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_errors_field(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 723
        yield "  ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["errors"] ?? null)) > 0)) {
            // line 725
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["errors"] ?? null)) > 1)) {
                // line 727
                $context["popoverContainer"] = ("popover-error-container-" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 727), "id", [], "any", false, false, false, 727));
                // line 728
                yield "      <div class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["popoverContainer"] ?? null), "html", null, true);
                yield "\"></div>

      ";
                // line 730
                $context["popoverErrorContent"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 731
                    yield "        <div class=\"popover-error-list\">
          <ul>";
                    // line 733
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["errors"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                        // line 734
                        yield "<li class=\"text-danger\"> ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "messageTemplate", [], "any", false, false, false, 734), CoreExtension::getAttribute($this->env, $this->source, $context["error"], "messageParameters", [], "any", false, false, false, 734), "form_error"), "html", null, true);
                        yield "
              </li>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 737
                    yield "          </ul>
        </div>
      ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 740
                yield "
      <template class=\"js-popover-error-content\" data-id=\"";
                // line 741
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 741), "id", [], "any", false, false, false, 741), "html", null, true);
                yield "\">
        ";
                // line 742
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["popoverErrorContent"] ?? null), "html", null, true);
                yield "
      </template>

      ";
                // line 745
                $context["errorPopover"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 746
                    yield "        <span
          data-toggle=\"form-popover-error\"
          data-id=\"";
                    // line 748
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 748), "id", [], "any", false, false, false, 748), "html", null, true);
                    yield "\"
          data-placement=\"bottom\"
          data-template='<div class=\"popover form-popover-error\" role=\"tooltip\"><h3 class=\"popover-header\"></h3><div class=\"popover-body\"></div></div>'
          data-trigger=\"hover\"
          data-container=\".";
                    // line 752
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["popoverContainer"] ?? null), "html", null, true);
                    yield "\"
        >
          <i class=\"material-icons form-error-icon\">error_outline</i> <u> ";
                    // line 754
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%count% errors", ["%count%" => Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["errors"] ?? null))], "Admin.Global"), "html", null, true);
                    yield "</u>
        </span>
      ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 757
                yield "
      <div class=\"invalid-feedback-container\">
        <div class=\"text-danger\">
          ";
                // line 760
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["errorPopover"] ?? null), "html", null, true);
                yield "
        </div>
      </div>

      ";
            } else {
                // line 766
                yield "<div class=\"d-inline-block text-danger align-top\">
        <i class=\"material-icons form-error-icon\">error_outline</i>
      </div>
      <div class=\"d-inline-block\">
        ";
                // line 770
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["errors"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 771
                    yield "          <div class=\"text-danger\">
            <p> ";
                    // line 772
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "messageTemplate", [], "any", false, false, false, 772), CoreExtension::getAttribute($this->env, $this->source, $context["error"], "messageParameters", [], "any", false, false, false, 772), "form_error"), "html", null, true);
                    yield "
            </p>
          </div>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 776
                yield "</div>";
            }
        }
        yield from [];
    }

    // line 781
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_errors_other(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 782
        yield "  ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["errors"] ?? null)) > 0)) {
            // line 783
            yield "<div class=\"alert alert-danger d-print-none\" role=\"alert\">
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
        <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
      </button>
      <div class=\"alert-text\">
        ";
            // line 788
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 789
                yield "            <p> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "messageTemplate", [], "any", false, false, false, 789), CoreExtension::getAttribute($this->env, $this->source, $context["error"], "messageParameters", [], "any", false, false, false, 789), "form_error"), "html", null, true);
                yield "
            </p>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 792
            yield "</div>
    </div>
  ";
        }
        yield from [];
    }

    // line 799
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_material_choice_table_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 800
        yield "  ";
        $_v16 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 801
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
            // line 811
            if (($context["isCheckSelectAll"] ?? null)) {
                // line 812
                yield "                    checked
                  ";
            }
            // line 814
            yield "                >
                <i class=\"md-checkbox-control\"></i>
                ";
            // line 816
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select all", [], "Admin.Actions"), "html", null, true);
            yield " ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 816), "displayTotalItems", [], "any", false, false, false, 816)) {
                yield " (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["form"] ?? null)), "html", null, true);
                yield ") ";
            }
            // line 817
            yield "              </label>
            </div>
          </th>
        </tr>
        </thead>
        <tbody>
        ";
            // line 823
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 824
                yield "          <tr>
            <td>
              ";
                // line 826
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["material_design" => true]);
                yield "
            </td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 830
            yield "        </tbody>
      </table>
    </div>
  ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 800
        yield Twig\Extension\CoreExtension::spaceless($_v16);
        // line 834
        yield "  ";
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 837
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_material_multiple_choice_table_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 838
        yield "  ";
        $_v17 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 839
            yield "    <div class=\"choice-table";
            if (($context["headers_fixed"] ?? null)) {
                yield "-headers-fixed";
            }
            yield " table-responsive\">
      <table class=\"table\">
        <thead>
        <tr>
          <th>";
            // line 843
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["table_label"] ?? null), "html", null, true);
            yield "</th>
          ";
            // line 844
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
                // line 845
                yield "            <th class=\"text-center\">
              ";
                // line 846
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child_choice"], "vars", [], "any", false, false, false, 846), "multiple", [], "any", false, false, false, 846) && !CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child_choice"], "vars", [], "any", false, false, false, 846), "name", [], "any", false, false, false, 846), ($context["headers_to_disable"] ?? null)))) {
                    // line 847
                    yield "                <a href=\"#\"
                   class=\"js-multiple-choice-table-select-column\"
                   data-column-num=\"";
                    // line 849
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 849) + 1), "html", null, true);
                    yield "\"
                   data-column-checked=\"false\"
                >
                  ";
                    // line 852
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child_choice"], "vars", [], "any", false, false, false, 852), "label", [], "any", false, false, false, 852), "html", null, true);
                    yield "
                </a>
              ";
                } else {
                    // line 855
                    yield "                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child_choice"], "vars", [], "any", false, false, false, 855), "label", [], "any", false, false, false, 855), "html", null, true);
                    yield "
              ";
                }
                // line 857
                yield "            </th>
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
            // line 859
            yield "        </tr>
        </thead>
        <tbody>
        ";
            // line 862
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["choices"] ?? null));
            foreach ($context['_seq'] as $context["choice_name"] => $context["choice_value"]) {
                // line 863
                yield "          <tr>
            <td>
              ";
                // line 865
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["choice_name"], "html", null, true);
                yield "
            </td>
            ";
                // line 867
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
                foreach ($context['_seq'] as $context["child_choice_name"] => $context["child_choice"]) {
                    // line 868
                    yield "              <td class=\"text-center\">
                ";
                    // line 869
                    if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["child_choice_entry_index_mapping"] ?? null), $context["choice_value"], [], "array", false, true, false, 869), $context["child_choice_name"], [], "array", true, true, false, 869)) {
                        // line 870
                        yield "                  ";
                        $context["entry_index"] = (($_v18 = (($_v19 = ($context["child_choice_entry_index_mapping"] ?? null)) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19[$context["choice_value"]] ?? null) : null)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18[$context["child_choice_name"]] ?? null) : null);
                        // line 871
                        yield "
                  ";
                        // line 872
                        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child_choice"], "vars", [], "any", false, false, false, 872), "multiple", [], "any", false, false, false, 872)) {
                            // line 873
                            yield "                    ";
                            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($_v20 = $context["child_choice"]) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20[($context["entry_index"] ?? null)] ?? null) : null), 'widget', ["material_design" => true]);
                            yield "
                  ";
                        } else {
                            // line 875
                            yield "                    ";
                            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($_v21 = $context["child_choice"]) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21[($context["entry_index"] ?? null)] ?? null) : null), 'widget');
                            yield "
                  ";
                        }
                        // line 877
                        yield "                ";
                    } else {
                        // line 878
                        yield "                  --
                ";
                    }
                    // line 880
                    yield "              </td>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['child_choice_name'], $context['child_choice'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 882
                yield "          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['choice_name'], $context['choice_value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 884
            yield "        </tbody>
      </table>
    </div>
  ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 838
        yield Twig\Extension\CoreExtension::spaceless($_v17);
        yield from [];
    }

    // line 891
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_translatable_fields_with_tabs(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 892
        yield "  <div class=\"translations tabbable\" id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 892), "id", [], "any", false, false, false, 892), "html", null, true);
        yield "\" tabindex=\"1\">
    ";
        // line 893
        if (((($context["hide_locales"] ?? null) == false) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["form"] ?? null)) > 1))) {
            // line 894
            yield "      <ul class=\"translationsLocales nav nav-pills\">
        ";
            // line 895
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
                // line 896
                yield "          <li class=\"nav-item\">
            <a href=\"#\" data-locale=\"";
                // line 897
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 897), "label", [], "any", false, false, false, 897), "html", null, true);
                yield "\" class=\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["default_locale"] ?? null), "id_lang", [], "any", false, false, false, 897) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 897), "name", [], "any", false, false, false, 897))) {
                    yield "active";
                }
                yield " nav-link\" data-toggle=\"tab\" data-target=\".translationsFields-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 897), "id", [], "any", false, false, false, 897), "html", null, true);
                yield "\">
              ";
                // line 898
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 898), "label", [], "any", false, false, false, 898)), "html", null, true);
                yield "
            </a>
          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['translationsFields'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 902
            yield "      </ul>
    ";
        }
        // line 904
        yield "
    <div class=\"translationsFields tab-content\">
      ";
        // line 906
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
            // line 907
            yield "        <div data-locale=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 907), "label", [], "any", false, false, false, 907), "html", null, true);
            yield "\" class=\"translationsFields-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 907), "id", [], "any", false, false, false, 907), "html", null, true);
            yield " tab-pane translation-field ";
            if (((($context["hide_locales"] ?? null) == false) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["form"] ?? null)) > 1))) {
                yield "panel panel-default";
            }
            yield " ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["default_locale"] ?? null), "id_lang", [], "any", false, false, false, 907) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 907), "name", [], "any", false, false, false, 907))) {
                yield "show active";
            }
            yield " ";
            if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 907), "valid", [], "any", false, false, false, 907)) {
                yield "field-error";
            }
            yield " translation-label-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 907), "label", [], "any", false, false, false, 907), "html", null, true);
            yield "\">
          ";
            // line 908
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translationsFields"], 'widget');
            yield "
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['translationsFields'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 911
        yield "    </div>
  </div>
";
        yield from [];
    }

    // line 915
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_translatable_fields_with_dropdown(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 916
        $context["formClass"] = Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 916), "attr", [], "any", false, true, false, 916), "class", [], "any", true, true, false, 916)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 916), "attr", [], "any", false, false, false, 916), "class", [], "any", false, false, false, 916), "")) : ("")) . " input-group locale-input-group js-locale-input-group d-flex"));
        // line 917
        yield "    <div class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["formClass"] ?? null), "html", null, true);
        yield "\" id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 917), "id", [], "any", false, false, false, 917), "html", null, true);
        yield "\" tabindex=\"1\">
      ";
        // line 918
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["translateField"]) {
            // line 919
            yield "        ";
            $context["classes"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, true, false, 919), "attr", [], "any", false, true, false, 919), "class", [], "any", true, true, false, 919)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 919), "attr", [], "any", false, false, false, 919), "class", [], "any", false, false, false, 919), "")) : ("")) . " js-locale-input");
            // line 920
            yield "        ";
            $context["classes"] = ((($context["classes"] ?? null) . " js-locale-") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 920), "label", [], "any", false, false, false, 920));
            // line 921
            yield "        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["default_locale"] ?? null), "id_lang", [], "any", false, false, false, 921) != CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 921), "name", [], "any", false, false, false, 921))) {
                // line 922
                yield "          ";
                $context["classes"] = (($context["classes"] ?? null) . " d-none");
                // line 923
                yield "        ";
            }
            // line 924
            yield "        <div data-lang-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 924), "name", [], "any", false, false, false, 924), "html", null, true);
            yield "\" class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["classes"] ?? null), "html", null, true);
            yield "\" style=\"flex-grow: 1;\">
          ";
            // line 925
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translateField"], 'widget');
            yield "
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['translateField'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 928
        yield "      ";
        if ( !($context["hide_locales"] ?? null)) {
            // line 929
            yield "        <div class=\"dropdown\">
          <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                  type=\"button\"
                  data-toggle=\"dropdown\"
            ";
            // line 933
            if (array_key_exists("change_form_language_url", $context)) {
                // line 934
                yield "              data-change-language-url=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 934), "change_form_language_url", [], "any", false, false, false, 934), "html", null, true);
                yield "\"
            ";
            }
            // line 936
            yield "                  aria-haspopup=\"true\"
                  aria-expanded=\"false\"
                  id=\"";
            // line 938
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 938), "id", [], "any", false, false, false, 938), "html", null, true);
            yield "_dropdown\"
          >
            ";
            // line 940
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 940), "default_locale", [], "any", false, false, false, 940), "iso_code", [], "any", false, false, false, 940)), "html", null, true);
            yield "
          </button>
          <div class=\"dropdown-menu dropdown-menu-right locale-dropdown-menu\" aria-labelledby=\"";
            // line 942
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 942), "id", [], "any", false, false, false, 942), "html", null, true);
            yield "_dropdown\">
            ";
            // line 943
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["locales"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 944
                yield "              <span class=\"dropdown-item js-locale-item\" data-locale=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["locale"], "iso_code", [], "any", false, false, false, 944), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["locale"], "name", [], "any", false, false, false, 944), "html", null, true);
                yield "</span>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['locale'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 946
            yield "          </div>
        </div>
      ";
        }
        // line 949
        yield "    </div>";
        yield from [];
    }

    // line 952
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_translatable_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 953
        if (($context["use_tabs"] ?? null)) {
            // line 954
            yield "    ";
            yield from             $this->unwrap()->yieldBlock("translatable_fields_with_tabs", $context, $blocks);
            yield "
  ";
        } else {
            // line 956
            yield "    ";
            yield from             $this->unwrap()->yieldBlock("translatable_fields_with_dropdown", $context, $blocks);
            yield "
  ";
        }
        // line 958
        yield "  ";
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        yield from [];
    }

    // line 961
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_birthday_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 962
        yield "  ";
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 963
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 965
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 965)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 965), "")) : ("")) . " form-inline"))]);
            // line 966
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 967
                yield "<div ";
                yield from                 $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
                yield ">";
            }
            // line 969
            yield "
    ";
            // line 970
            $context["yearWidget"] = (("<div class=\"col pl-0 birthday-select-container\">" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "year", [], "any", false, false, false, 970), 'widget')) . "</div>");
            // line 971
            yield "    ";
            $context["monthWidget"] = (("<div class=\"col birthday-select-container\">" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "month", [], "any", false, false, false, 971), 'widget')) . "</div>");
            // line 972
            yield "    ";
            $context["dayWidget"] = (("<div class=\"col pr-0 birthday-select-container\">" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "day", [], "any", false, false, false, 972), 'widget')) . "</div>");
            // line 974
            yield Twig\Extension\CoreExtension::replace(($context["date_pattern"] ?? null), ["{{ year }}" =>             // line 975
($context["yearWidget"] ?? null), "{{ month }}" =>             // line 976
($context["monthWidget"] ?? null), "{{ day }}" =>             // line 977
($context["dayWidget"] ?? null)]);
            // line 980
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 981
                yield "</div>";
            }
        }
        yield from [];
    }

    // line 986
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_file_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 987
        yield "  <style>
    .custom-file-label:after {
      content: \"";
        // line 989
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Browse", [], "Admin.Actions"), "html", null, true);
        yield "\";
    }
  </style>
  <div class=\"custom-file\">
    ";
        // line 993
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source,         // line 994
($context["attr"] ?? null), "class", [], "any", true, true, false, 994)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 994), "")) : ("")) . " custom-file-input")), "data-multiple-files-text" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%count% file(s)", [], "Admin.Global"), "data-locale" => $this->extensions['PrestaShopBundle\Twig\ContextIsoCodeProviderExtension']->getIsoCode()]);
        // line 999
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "disabled", [], "any", true, true, false, 999) && CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "disabled", [], "any", false, false, false, 999))) {
            // line 1000
            yield "      ";
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => (CoreExtension::getAttribute($this->env, $this->source,             // line 1001
($context["attr"] ?? null), "class", [], "any", false, false, false, 1001) . " disabled")]);
            // line 1003
            yield "    ";
        }
        // line 1004
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        // line 1006
        yield "<label class=\"custom-file-label\" for=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1006), "id", [], "any", false, false, false, 1006), "html", null, true);
        yield "\">
      ";
        // line 1007
        $context["attributes"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1007), "attr", [], "any", false, false, false, 1007);
        // line 1008
        yield "      ";
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "placeholder", [], "any", true, true, false, 1008)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "placeholder", [], "any", false, false, false, 1008), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Choose file(s)", [], "Admin.Actions"), "html", null, true)));
        yield "
    </label>
  </div>";
        // line 1011
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        // line 1012
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1012), "download_url", [], "any", false, false, false, 1012)) {
            // line 1013
            yield "    <a target=\"_blank\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1013), "download_url", [], "any", false, false, false, 1013), "html", null, true);
            yield "\">
      ";
            // line 1014
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Download file", [], "Admin.Actions"), "html", null, true);
            yield "
    </a>
  ";
        }
        yield from [];
    }

    // line 1019
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_shop_restriction_checkbox_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1020
        yield "  ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1020), "attr", [], "any", false, false, false, 1020), "is_allowed_to_display", [], "any", false, false, false, 1020)) {
            // line 1021
            yield "    <div class=\"md-checkbox md-checkbox-inline\">
      <label>
        ";
            // line 1023
            $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "checkbox")) : ("checkbox"));
            // line 1024
            yield "        <input
          class=\"js-multi-store-restriction-checkbox\"
          type=\"";
            // line 1026
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["type"] ?? null), "html", null, true);
            yield "\"
          ";
            // line 1027
            yield from             $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
            yield "
          value=\"";
            // line 1028
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

    // line 1036
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_generatable_text_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1037
        yield "  <div class=\"input-group\">
    ";
        // line 1038
        if (($context["compound"] ?? null)) {
            // line 1039
            yield from             $this->unwrap()->yieldBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 1041
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        }
        // line 1043
        yield "    <span class=\"input-group-btn ml-1\">
      <button class=\"btn btn-outline-secondary js-generator-btn\"
              type=\"button\"
              data-target-input-id=\"";
        // line 1046
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
        yield "\"
              data-generated-value-length=\"";
        // line 1047
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["generated_value_length"] ?? null), "html", null, true);
        yield "\"
      >
        ";
        // line 1049
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Generate", [], "Admin.Actions"), "html", null, true);
        yield "
      </button>
   </span>
  </div>
  ";
        // line 1053
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 1056
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_text_with_recommended_length_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1057
        yield "  ";
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["data-recommended-length-counter" => (("#" .         // line 1058
($context["id"] ?? null)) . "_recommended_length_counter"), "class" => "js-recommended-length-input"]);
        // line 1062
        if ((($context["input_type"] ?? null) == "textarea")) {
            // line 1063
            yield from             $this->unwrap()->yieldBlock("textarea_widget", $context, $blocks);
        } else {
            // line 1065
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        }
        // line 1067
        yield "
  <small class=\"form-text text-muted text-right\"
         id=\"";
        // line 1069
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
        yield "_recommended_length_counter\"
  >
    <em>
      ";
        // line 1072
        yield Twig\Extension\CoreExtension::replace($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("[1][/1] of [2][/2] characters used (recommended)", [], "Admin.Catalog.Feature"), ["[1]" => ("<span class=\"js-current-length\">" . Twig\Extension\CoreExtension::length($this->env->getCharset(),         // line 1073
($context["value"] ?? null))), "[/1]" => "</span>", "[2]" => ("<span>" .         // line 1075
($context["recommended_length"] ?? null)), "[/2]" => "</span>"]);
        // line 1077
        yield "
    </em>
  </small>
";
        yield from [];
    }

    // line 1082
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_text_with_length_counter_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1083
        yield "  <div class=\"input-group js-text-with-length-counter\">
    ";
        // line 1084
        $context["current_length"] = (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1084), "max_length", [], "any", false, false, false, 1084) - Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["value"] ?? null)));
        // line 1085
        yield "
    ";
        // line 1086
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1086), "position", [], "any", false, false, false, 1086) == "before")) {
            // line 1087
            yield "      <div class=\"input-group-prepend\">
        <span class=\"input-group-text js-countable-text\">";
            // line 1088
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["current_length"] ?? null), "html", null, true);
            yield "</span>
      </div>
    ";
        }
        // line 1091
        yield "
    ";
        // line 1092
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ($context["input_attr"] ?? null));
        // line 1093
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["data-max-length" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1093), "max_length", [], "any", false, false, false, 1093), "maxlength" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1093), "max_length", [], "any", false, false, false, 1093), "class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1093)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1093), "")) : ("")) . " js-countable-input"))]);
        // line 1095
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1095), "input", [], "any", false, false, false, 1095) == "input")) {
            // line 1096
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 1097
($context["form"] ?? null), "vars", [], "any", false, false, false, 1097), "input", [], "any", false, false, false, 1097) == "textarea")) {
            // line 1098
            yield from             $this->unwrap()->yieldBlock("textarea_widget", $context, $blocks);
        } else {
            // line 1100
            yield from             $this->unwrap()->yieldBlock("form_widget", $context, $blocks);
        }
        // line 1102
        yield "
    ";
        // line 1103
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1103), "position", [], "any", false, false, false, 1103) == "after")) {
            // line 1104
            yield "      <div class=\"input-group-append\">
        <span class=\"input-group-text js-countable-text\">";
            // line 1105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["current_length"] ?? null), "html", null, true);
            yield "</span>
      </div>
    ";
        }
        // line 1108
        yield "  </div>
";
        yield from [];
    }

    // line 1111
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_integer_min_max_filter_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1112
        yield "  ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($_v22 = ($context["form"] ?? null)) && is_array($_v22) || $_v22 instanceof ArrayAccess ? ($_v22["min_field"] ?? null) : null), 'widget', ["attr" => ["class" => "min-field"]]);
        yield "
  ";
        // line 1113
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($_v23 = ($context["form"] ?? null)) && is_array($_v23) || $_v23 instanceof ArrayAccess ? ($_v23["max_field"] ?? null) : null), 'widget', ["attr" => ["class" => "max-field"]]);
        yield "
";
        yield from [];
    }

    // line 1116
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_number_min_max_filter_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1117
        yield "  ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($_v24 = ($context["form"] ?? null)) && is_array($_v24) || $_v24 instanceof ArrayAccess ? ($_v24["min_field"] ?? null) : null), 'widget', ["attr" => ["class" => "min-field"]]);
        yield "
  ";
        // line 1118
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($_v25 = ($context["form"] ?? null)) && is_array($_v25) || $_v25 instanceof ArrayAccess ? ($_v25["max_field"] ?? null) : null), 'widget', ["attr" => ["class" => "max-field"]]);
        yield "
";
        yield from [];
    }

    // line 1121
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_number_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1122
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "text")) : ("text"));
        // line 1123
        yield "<div class=\"input-group\">";
        // line 1124
        yield from         $this->unwrap()->yieldBlock("form_unit_prepend", $context, $blocks);
        // line 1125
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        // line 1126
        yield from         $this->unwrap()->yieldBlock("form_unit", $context, $blocks);
        // line 1127
        yield "</div>
  ";
        // line 1128
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        yield from [];
    }

    // line 1131
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_integer_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1132
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "number")) : ("number"));
        // line 1133
        yield "<div class=\"input-group\">";
        // line 1134
        yield from         $this->unwrap()->yieldBlock("form_unit_prepend", $context, $blocks);
        // line 1135
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        // line 1136
        yield from         $this->unwrap()->yieldBlock("form_unit", $context, $blocks);
        // line 1137
        yield "</div>
  ";
        // line 1138
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        yield from [];
    }

    // line 1141
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_unit(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1142
        yield "  ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 1142), "unit", [], "any", true, true, false, 1142) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1142), "prepend_unit", [], "any", false, false, false, 1142))) {
            // line 1143
            yield "    <div class=\"input-group-append\">
      <span class=\"input-group-text\">";
            // line 1144
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1144), "unit", [], "any", false, false, false, 1144), "html", null, true);
            yield "</span>
    </div>
  ";
        }
        yield from [];
    }

    // line 1149
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_unit_prepend(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1150
        yield "  ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 1150), "unit", [], "any", true, true, false, 1150) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1150), "prepend_unit", [], "any", false, false, false, 1150))) {
            // line 1151
            yield "    <div class=\"input-group-prepend\">
      <span class=\"input-group-text\">";
            // line 1152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1152), "unit", [], "any", false, false, false, 1152), "html", null, true);
            yield "</span>
    </div>
  ";
        }
        yield from [];
    }

    // line 1157
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_help(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1158
        yield "  ";
        if ( !(null === ($context["help"] ?? null))) {
            // line 1159
            $context["help_attr"] = Twig\Extension\CoreExtension::merge(($context["help_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", true, true, false, 1159)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", false, false, false, 1159), "")) : ("")) . " form-text"))]);
            // line 1160
            yield "<small id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
            yield "_help\"";
            $_v26 = $context;
            $_v27 = ["attr" => ($context["help_attr"] ?? null)];
            if (!is_iterable($_v27)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 1160, $this->getSourceContext());
            }
            $_v27 = CoreExtension::toArray($_v27);
            $context = $_v27 + $context + $this->env->getGlobals();
            yield from             $this->unwrap()->yieldBlock("attributes", $context, $blocks);
            $context = $_v26;
            yield ">";
            yield ($context["help"] ?? null);
            yield "</small>
  ";
        }
        // line 1162
        yield "  ";
        if (array_key_exists("warning", $context)) {
            // line 1163
            yield "    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["warning"] ?? null), "html", null, true);
            yield "
  ";
        }
        yield from [];
    }

    // line 1167
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_prepend_external_link(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1168
        yield "  ";
        if ((array_key_exists("external_link", $context) && (CoreExtension::getAttribute($this->env, $this->source, ($context["external_link"] ?? null), "position", [], "any", false, false, false, 1168) == "prepend"))) {
            // line 1169
            yield from             $this->unwrap()->yieldBlock("form_external_link", $context, $blocks);
        }
        yield from [];
    }

    // line 1173
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_append_external_link(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1174
        yield "  ";
        if ((array_key_exists("external_link", $context) && (CoreExtension::getAttribute($this->env, $this->source, ($context["external_link"] ?? null), "position", [], "any", false, false, false, 1174) == "append"))) {
            // line 1175
            yield from             $this->unwrap()->yieldBlock("form_external_link", $context, $blocks);
        }
        yield from [];
    }

    // line 1179
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_external_link(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1180
        yield "  ";
        if (array_key_exists("external_link", $context)) {
            // line 1181
            $context["openingTag"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 1182
                yield "<a ";
                yield from                 $this->unwrap()->yieldBlock("form_external_link_attributes", $context, $blocks);
                yield ">
        ";
                // line 1183
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["external_link"] ?? null), "open_in_new_tab", [], "any", false, false, false, 1183)) {
                    yield "<i class=\"material-icons\">open_in_new</i>";
                }
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1186
            yield "<div class=\"small font-secondary form-external-link";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["external_link"] ?? null), "align", [], "any", false, false, false, 1186) === "right")) {
                yield " text-right";
            }
            yield "\">
      ";
            // line 1188
            yield "      ";
            if ((CoreExtension::inFilter("[1]", CoreExtension::getAttribute($this->env, $this->source, ($context["external_link"] ?? null), "text", [], "any", false, false, false, 1188)) && CoreExtension::inFilter("[/1]", CoreExtension::getAttribute($this->env, $this->source, ($context["external_link"] ?? null), "text", [], "any", false, false, false, 1188)))) {
                // line 1189
                yield "        ";
                yield Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, ($context["external_link"] ?? null), "text", [], "any", false, false, false, 1189), ["[1]" => ($context["openingTag"] ?? null), "[/1]" => "</a>"]);
                yield "
      ";
            } else {
                // line 1191
                yield "        ";
                yield Twig\Extension\CoreExtension::replace((("[1]" . CoreExtension::getAttribute($this->env, $this->source, ($context["external_link"] ?? null), "text", [], "any", false, false, false, 1191)) . "[/1]"), ["[1]" => ($context["openingTag"] ?? null), "[/1]" => "</a>"]);
                yield "
      ";
            }
            // line 1193
            yield "    </div>
  ";
        }
        yield from [];
    }

    // line 1197
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_external_link_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1198
        $context["external_link_attr"] = Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, ($context["external_link"] ?? null), "attr", [], "any", false, false, false, 1198), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["external_link"] ?? null), "attr", [], "any", false, true, false, 1198), "class", [], "any", true, true, false, 1198)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["external_link"] ?? null), "attr", [], "any", false, false, false, 1198), "class", [], "any", false, false, false, 1198), "")) : ("")) . " btn btn-link px-0 align-right"))]);
        // line 1199
        yield "
  ";
        // line 1200
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["external_link_attr"] ?? null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 1201
            yield "    ";
            if (!CoreExtension::inFilter($context["attrname"], ["href", "class"])) {
                // line 1202
                yield "      ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrvalue"], "html", null, true);
                yield "\"
    ";
            }
            // line 1204
            yield "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['attrname'], $context['attrvalue'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1205
        yield "
  ";
        // line 1206
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["external_link"] ?? null), "open_in_new_tab", [], "any", false, false, false, 1206)) {
            yield "target=\"_blank\"";
        }
        // line 1207
        yield "  href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["external_link"] ?? null), "href", [], "any", false, false, false, 1207), "html", null, true);
        yield "\"
  class=\"";
        // line 1208
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["external_link_attr"] ?? null), "class", [], "any", false, false, false, 1208), "html", null, true);
        yield "\"";
        yield from [];
    }

    // line 1211
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_custom_content_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1212
        yield "  ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, ($context["template"] ?? null), ($context["data"] ?? null));
        yield "
";
        yield from [];
    }

    // line 1215
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_text_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1216
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["aria-label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%inputId% input", ["%inputId%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1216), "id", [], "any", false, false, false, 1216)], "Admin.Global")]);
        // line 1217
        if ( !(null === ($context["data_list"] ?? null))) {
            // line 1218
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["list" => (($context["id"] ?? null) . "_datalist")]);
        }
        // line 1220
        yield "
  ";
        // line 1221
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ["attr" => ($context["attr"] ?? null)]);
        yield "

  ";
        // line 1223
        if ( !(null === ($context["data_list"] ?? null))) {
            // line 1224
            yield "    <datalist id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["id"] ?? null) . "_datalist"), "html", null, true);
            yield "\">
      ";
            // line 1225
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["data_list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 1226
                yield "        <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["item"], "html", null, true);
                yield "\"></option>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1228
            yield "    </datalist>
  ";
        }
        yield from [];
    }

    // line 1232
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_prepend_alert(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1233
        if ((array_key_exists("alert_position", $context) && (($context["alert_position"] ?? null) == "prepend"))) {
            // line 1234
            yield from             $this->unwrap()->yieldBlock("form_alert", $context, $blocks);
        }
        yield from [];
    }

    // line 1238
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_append_alert(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1239
        if ((array_key_exists("alert_position", $context) && (($context["alert_position"] ?? null) == "append"))) {
            // line 1240
            yield from             $this->unwrap()->yieldBlock("form_alert", $context, $blocks);
        }
        yield from [];
    }

    // line 1244
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_alert(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1245
        if (array_key_exists("alert_message", $context)) {
            // line 1246
            yield "    <div class=\"alert alert-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["alert_type"] ?? null), "html", null, true);
            if (array_key_exists("alert_title", $context)) {
                yield " expandable-alert";
            }
            yield "\" role=\"alert\">
    ";
            // line 1247
            if (array_key_exists("alert_title", $context)) {
                // line 1248
                yield "      <p class=\"alert-text\">
        ";
                // line 1249
                yield ($context["alert_title"] ?? null);
                yield "
      </p>
    ";
            } else {
                // line 1252
                yield "      ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["alert_message"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 1253
                    yield "        <p class=\"alert-text\">
          ";
                    // line 1254
                    yield $context["message"];
                    yield "
        </p>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1257
                yield "    ";
            }
            // line 1258
            yield "
    ";
            // line 1259
            if (array_key_exists("alert_title", $context)) {
                // line 1260
                yield "      <div class=\"alert-more collapse\" id=\"expandable_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1260), "id", [], "any", false, false, false, 1260), "html", null, true);
                yield "\" style=\"\">
        ";
                // line 1261
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["alert_message"] ?? null)) > 1)) {
                    // line 1262
                    yield "          <ul class=\"p-0\">
            ";
                    // line 1263
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["alert_message"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                        // line 1264
                        yield "              <li>";
                        yield $context["message"];
                        yield "</li>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1266
                    yield "          </ul>
        ";
                } else {
                    // line 1268
                    yield "          ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["alert_message"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                        // line 1269
                        yield "            <p>
              ";
                        // line 1270
                        yield $context["message"];
                        yield "
            </p>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1273
                    yield "        ";
                }
                // line 1274
                yield "      </div>
      <div class=\"read-more-container\">
         <button type=\"button\" class=\"read-more btn-link\" data-toggle=\"collapse\" data-target=\"#expandable_";
                // line 1276
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1276), "id", [], "any", false, false, false, 1276), "html", null, true);
                yield "\" aria-expanded=\"true\" aria-controls=\"collapseDanger\">
            ";
                // line 1277
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Read more", [], "Admin.Actions"), "html", null, true);
                yield "
          </button>
       </div>
    ";
            }
            // line 1281
            yield "  </div>
  ";
        }
        yield from [];
    }

    // line 1285
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_unavailable_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1286
        yield "  <div class=\"alert alert-unavailable\" role=\"alert\">
    <p class=\"alert-text\">
      ";
        // line 1288
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not available yet.", [], "Admin.Catalog.Feature"), "html", null, true);
        yield "
    </p>
  </div>
";
        yield from [];
    }

    // line 1293
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_text_preview_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1294
        yield "  ";
        // line 1295
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        // line 1296
        yield "<span class=\"label text-preview ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["preview_class"] ?? null), "html", null, true);
        yield "\">
    ";
        // line 1298
        yield "    ";
        if (array_key_exists("prefix", $context)) {
            // line 1299
            yield "    <span class=\"text-preview-prefix\">
      ";
            // line 1300
            yield ($context["prefix"] ?? null);
            yield "
    </span>
    ";
        }
        // line 1303
        yield "
    <span class=\"text-preview-value\">
      ";
        // line 1305
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1305), "allow_html", [], "any", false, false, false, 1305)) {
            // line 1306
            yield "        ";
            // line 1307
            yield "        ";
            yield ($context["value"] ?? null);
            yield "
      ";
        } else {
            // line 1309
            yield "        ";
            // line 1310
            yield "        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html");
            yield "
      ";
        }
        // line 1312
        yield "    </span>

    ";
        // line 1315
        yield "    ";
        if (array_key_exists("suffix", $context)) {
            // line 1316
            yield "    <span class=\"text-preview-suffix\">
      ";
            // line 1317
            yield ($context["suffix"] ?? null);
            yield "
    </span>
    ";
        }
        // line 1320
        yield "  </span>";
        // line 1321
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        yield from [];
    }

    // line 1324
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_link_preview_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1325
        yield "  ";
        // line 1326
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        // line 1327
        yield "<a href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1327), "value", [], "any", false, false, false, 1327), "html", null, true);
        yield "\" class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1327)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1327), "")) : ("")), "html", null, true);
        yield "\">
    ";
        // line 1328
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1328), "button_label", [], "any", false, false, false, 1328), "html", null, true);
        yield "
  </a>
";
        yield from [];
    }

    // line 1332
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_image_preview_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1333
        yield "  ";
        // line 1334
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        // line 1335
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["value"] ?? null))) {
            // line 1336
            yield "    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::trim(("Image preview for " . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1336), "name", [], "any", false, false, false, 1336))), "html", null, true);
            yield "\" class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1336), "image_class", [], "any", false, false, false, 1336), "html", null, true);
            yield "\" />
  ";
        } else {
            // line 1338
            yield "    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No picture", [], "Admin.Global"), "html", null, true);
            yield "
  ";
        }
        yield from [];
    }

    // line 1342
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_delta_quantity_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1343
        yield "  ";
        $context["quantity"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["value"] ?? null), "quantity", [], "any", true, true, false, 1343)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["value"] ?? null), "quantity", [], "any", false, false, false, 1343), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "quantity", [], "any", false, false, false, 1343), "vars", [], "any", false, false, false, 1343), "value", [], "any", false, false, false, 1343))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "quantity", [], "any", false, false, false, 1343), "vars", [], "any", false, false, false, 1343), "value", [], "any", false, false, false, 1343)));
        // line 1344
        yield "  ";
        // line 1345
        yield "  ";
        if ((null === ($context["initialQuantity"] ?? null))) {
            // line 1346
            yield "    ";
            $context["initialQuantity"] = ($context["quantity"] ?? null);
            // line 1347
            yield "  ";
        }
        // line 1348
        yield "  ";
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1348)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1348), "")) : ("")) . " delta-quantity")), "data-initial-quantity" => ($context["initialQuantity"] ?? null)]);
        // line 1349
        yield "  <div ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield ">
    ";
        // line 1350
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "initial_quantity", [], "any", false, false, false, 1350), 'widget', ["value" => ($context["initialQuantity"] ?? null)]);
        yield "
    ";
        // line 1351
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "quantity", [], "any", false, false, false, 1351), 'widget', ["initialQuantity" => ($context["initialQuantity"] ?? null), "deltaQuantity" => ($context["deltaQuantity"] ?? null), "value" => ($context["quantity"] ?? null)]);
        yield "
    ";
        // line 1352
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "delta", [], "any", false, false, false, 1352), 'row');
        yield "
  </div>
";
        yield from [];
    }

    // line 1356
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_delta_quantity_quantity_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1357
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1357)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1357), "")) : ("")) . " delta-quantity-quantity"))]);
        // line 1358
        yield "<div ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield ">";
        // line 1359
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        // line 1360
        yield "<span class=\"initial-quantity\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["initialQuantity"] ?? null), "html", null, true);
        yield "</span>
    <span class=\"quantity-update";
        // line 1361
        if ((($context["deltaQuantity"] ?? null) != 0)) {
            yield " quantity-modified";
        }
        yield "\">
      <i class=\"material-icons\">trending_flat</i>
      <span class=\"new-quantity\">";
        // line 1363
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
        yield "</span>
    </span>
    ";
        // line 1365
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        yield "
  </div>
";
        yield from [];
    }

    // line 1369
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_delta_quantity_delta_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1370
        yield "  <div class=\"form-group";
        yield from         $this->unwrap()->yieldBlock("widget_type_class", $context, $blocks);
        if ((( !($context["compound"] ?? null) || ((array_key_exists("force_error", $context)) ? (Twig\Extension\CoreExtension::default(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
            yield " has-error";
        }
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 1370)) {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 1370), "html", null, true);
        }
        yield "\">
    <div class=\"delta-quantity-delta-container\">";
        // line 1372
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 1373
        yield from         $this->unwrap()->yieldBlock("form_prepend_alert", $context, $blocks);
        // line 1374
        yield from         $this->unwrap()->yieldBlock("form_prepend_external_link", $context, $blocks);
        // line 1376
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 1378
        yield from         $this->unwrap()->yieldBlock("form_append_alert", $context, $blocks);
        // line 1379
        yield from         $this->unwrap()->yieldBlock("form_append_external_link", $context, $blocks);
        // line 1380
        yield "</div>";
        // line 1381
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 1382
        yield from         $this->unwrap()->yieldBlock("form_modify_all_shops", $context, $blocks);
        // line 1383
        yield "</div>
";
        yield from [];
    }

    // line 1386
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_delta_quantity_delta_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1387
        $context["type"] = "number";
        // line 1388
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1388)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1388), "")) : ("")) . " delta-quantity-delta"))]);
        // line 1389
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        yield from [];
    }

    // line 1392
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_submittable_input_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1393
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1393)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1393), "")) : ("")) . " ps-submittable-input-wrapper"))]);
        // line 1394
        yield "<div ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        yield ">";
        // line 1395
        $context["typeAttr"] = Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1395), "type_attr", [], "any", false, false, false, 1395), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 1396
($context["form"] ?? null), "vars", [], "any", false, true, false, 1396), "type_attr", [], "any", false, true, false, 1396), "class", [], "any", true, true, false, 1396)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1396), "type_attr", [], "any", false, false, false, 1396), "class", [], "any", false, false, false, 1396), "")) : ("")) . " submittable-input")), "data-initial-value" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 1397
($context["form"] ?? null), "value", [], "any", false, false, false, 1397), "vars", [], "any", false, false, false, 1397), "value", [], "any", false, false, false, 1397), "value" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 1398
($context["form"] ?? null), "value", [], "any", false, false, false, 1398), "vars", [], "any", false, false, false, 1398), "value", [], "any", false, false, false, 1398)]);
        // line 1401
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "value", [], "any", false, false, false, 1401), 'widget', ["attr" => ($context["typeAttr"] ?? null)]);
        // line 1402
        yield from         $this->unwrap()->yieldBlock("submittable_input_button_widget", $context, $blocks);
        // line 1403
        yield "</div>
";
        yield from [];
    }

    // line 1406
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_submittable_input_button_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1407
        yield "  <button type=\"button\" class=\"check-button d-none\">
    <i class=\"material-icons\">check</i>
  </button>
";
        yield from [];
    }

    // line 1412
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_submittable_delta_quantity_delta_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1413
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1413)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1413), "")) : ("")) . " delta-quantity-delta ps-submittable-input-wrapper"))]);
        // line 1414
        yield "<div ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        yield ">";
        // line 1415
        $context["attr"] = Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1415), "attr", [], "any", false, false, false, 1415), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 1416
($context["form"] ?? null), "vars", [], "any", false, true, false, 1416), "attr", [], "any", false, true, false, 1416), "class", [], "any", true, true, false, 1416)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1416), "attr", [], "any", false, false, false, 1416), "class", [], "any", false, false, false, 1416), "")) : ("")) . " submittable-input")), "data-initial-value" =>         // line 1417
($context["value"] ?? null), "value" =>         // line 1418
($context["value"] ?? null)]);
        // line 1421
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ["attr" => ($context["attr"] ?? null)]);
        // line 1422
        yield from         $this->unwrap()->yieldBlock("submittable_input_button_widget", $context, $blocks);
        // line 1423
        yield "</div>
";
        yield from [];
    }

    // line 1426
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navigation_tab_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1427
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1427)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1427), "")) : ("")) . " navigation-tab-widget"))]);
        // line 1428
        yield "<div ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield ">
  <div id=\"";
        // line 1429
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1429), "id", [], "any", false, false, false, 1429), "html", null, true);
        yield "-tabs\" class=\"tabs js-tabs\">
    <div class=\"arrow d-xl-none js-arrow left-arrow float-left\">
      <i class=\"material-icons rtl-flip hide\">chevron_left</i>
    </div>

    <ul class=\"nav nav-tabs js-nav-tabs\" id=\"form-nav\" role=\"tablist\">
    ";
        // line 1435
        $context["firstRenderedChild"] = true;
        // line 1436
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 1436));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 1437
            yield "      ";
            if (((( !CoreExtension::getAttribute($this->env, $this->source, $context["child"], "rendered", [], "any", false, false, false, 1437) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1437), "name", [], "any", false, false, false, 1437) != "_toolbar_buttons")) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1437), "name", [], "any", false, false, false, 1437) != "_footer_buttons")) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1437), "name", [], "any", false, false, false, 1437) != "_token"))) {
                // line 1438
                yield "      <li id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1438), "id", [], "any", false, false, false, 1438), "html", null, true);
                yield "-tab-nav\" class=\"nav-item";
                if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1438), "valid", [], "any", false, false, false, 1438)) {
                    yield " has-error";
                }
                yield "\">
        <a href=\"#";
                // line 1439
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1439), "id", [], "any", false, false, false, 1439), "html", null, true);
                yield "-tab\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link";
                if (($context["firstRenderedChild"] ?? null)) {
                    yield " active";
                }
                yield "\">
          ";
                // line 1440
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1440), "label", [], "any", false, false, false, 1440), "html", null, true);
                yield "
        </a>
      </li>
      ";
                // line 1443
                $context["firstRenderedChild"] = false;
                // line 1444
                yield "      ";
            }
            // line 1445
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1446
        yield "    </ul>

    <div class=\"arrow d-xl-none js-arrow right-arrow visible float-right\">
      <i class=\"material-icons rtl-flip hide\">chevron_right</i>
    </div>

    ";
        // line 1452
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "offsetExists", ["_toolbar_buttons"], "method", false, false, false, 1452)) {
            // line 1453
            yield "    <div class=\"navigation-tab-widget-toolbar toolbar text-md-right\">
      ";
            // line 1454
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "_toolbar_buttons", [], "any", false, false, false, 1454), 'widget');
            yield "
    </div>
    ";
        }
        // line 1457
        yield "  </div>

  <div id=\"";
        // line 1459
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1459), "id", [], "any", false, false, false, 1459), "html", null, true);
        yield "-tabs-content\" class=\"tab-content\">
    ";
        // line 1460
        $context["firstRenderedChild"] = true;
        // line 1461
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 1461));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 1462
            yield "      ";
            if ((( !CoreExtension::getAttribute($this->env, $this->source, $context["child"], "rendered", [], "any", false, false, false, 1462) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1462), "name", [], "any", false, false, false, 1462) != "_footer_buttons")) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1462), "name", [], "any", false, false, false, 1462) != "_token"))) {
                // line 1463
                yield "      <div role=\"tabpanel\" class=\"form-contenttab tab-pane container-fluid";
                if (($context["firstRenderedChild"] ?? null)) {
                    yield " active";
                }
                yield "\" id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1463), "id", [], "any", false, false, false, 1463), "html", null, true);
                yield "-tab\">
        ";
                // line 1464
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, true, false, 1464), "label_tab", [], "any", true, true, false, 1464)) {
                    // line 1465
                    yield "          ";
                    // line 1466
                    yield "          ";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label', ["required" => false] + (CoreExtension::testEmpty($_label_ = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1466), "label_tab", [], "any", false, false, false, 1466)) ? [] : ["label" => $_label_]));
                    yield "
        ";
                }
                // line 1468
                yield "        ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'errors');
                yield "
        ";
                // line 1469
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
                yield "
      </div>
      ";
                // line 1471
                $context["firstRenderedChild"] = false;
                // line 1472
                yield "      ";
            }
            // line 1473
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1474
        yield "  </div>

  ";
        // line 1476
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "offsetExists", ["_footer_buttons"], "method", false, false, false, 1476)) {
            // line 1477
            yield "    <div class=\"navigation-tab-widget-footer\">
      ";
            // line 1478
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "_footer_buttons", [], "any", false, false, false, 1478), 'widget');
            yield "
    </div>
  ";
        }
        // line 1481
        yield "</div>
";
        yield from [];
    }

    // line 1484
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_accordion_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1485
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source,         // line 1486
($context["attr"] ?? null), "class", [], "any", true, true, false, 1486)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1486), "")) : ("")) . " accordion accordion-form"))]);
        // line 1488
        yield "<div ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        yield ">
    ";
        // line 1489
        $context["firstChild"] = true;
        // line 1490
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 1491
            yield "      ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1491), "compound", [], "any", false, false, false, 1491)) {
                // line 1492
                yield "      ";
                $context["hasError"] = (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1492), "valid", [], "any", false, false, false, 1492) != true);
                // line 1493
                yield "      ";
                $context["isExpanded"] = (((($context["firstChild"] ?? null) && ($context["expand_first"] ?? null)) || (($context["hasError"] ?? null) && ($context["expand_on_error"] ?? null))) || ($context["expand_all"] ?? null));
                // line 1494
                yield "      <div class=\"card\">
        <div class=\"card-header\" id=\"";
                // line 1495
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1495), "id", [], "any", false, false, false, 1495), "html", null, true);
                yield "_accordion_header\">
          <h2 class=\"mb-0\">
            <button
              class=\"accordion-form-button ";
                // line 1498
                if (($context["hasError"] ?? null)) {
                    yield " has-error ";
                }
                yield " btn btn-block text-left";
                if ( !($context["isExpanded"] ?? null)) {
                    yield " collapsed";
                }
                yield "\"
              type=\"button\"
              data-toggle=\"collapse\"
              data-target=\"#";
                // line 1501
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1501), "id", [], "any", false, false, false, 1501), "html", null, true);
                yield "_accordion\"
              aria-expanded=\"";
                // line 1502
                if (($context["isExpanded"] ?? null)) {
                    yield "true";
                } else {
                    yield "false";
                }
                yield "\"
              aria-controls=\"";
                // line 1503
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1503), "id", [], "any", false, false, false, 1503), "html", null, true);
                yield "_accordion\">
              <span class=\"accordion-form-button-label\">";
                // line 1504
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1504), "label", [], "any", false, false, false, 1504), "html", null, true);
                yield "</span>
              ";
                // line 1505
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, true, false, 1505), "label_subtitle", [], "any", true, true, false, 1505)) {
                    // line 1506
                    yield "                <span class=\"accordion-form-button-sub-label\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1506), "label_subtitle", [], "any", false, false, false, 1506), "html", null, true);
                    yield "</span>
              ";
                }
                // line 1508
                yield "              <i class=\"material-icons\"></i>
            </button>
          </h2>
        </div>

        <div id=\"";
                // line 1513
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1513), "id", [], "any", false, false, false, 1513), "html", null, true);
                yield "_accordion\" class=\"collapse";
                if (($context["isExpanded"] ?? null)) {
                    yield " show";
                }
                yield "\" aria-labelledby=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1513), "id", [], "any", false, false, false, 1513), "html", null, true);
                yield "_accordion_header\" ";
                if (($context["display_one"] ?? null)) {
                    yield "data-parent=\"#";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1513), "id", [], "any", false, false, false, 1513), "html", null, true);
                    yield "\"";
                }
                yield ">
          <div class=\"card-body\">
            ";
                // line 1515
                $context["childAttr"] = ["class" => "accordion-sub-form"];
                // line 1516
                yield "            ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["attr" => ($context["childAttr"] ?? null)]);
                yield "
            ";
                // line 1517
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'errors');
                yield "
          </div>
        </div>
      </div>
      ";
                // line 1521
                $context["firstChild"] = false;
                // line 1522
                yield "      ";
            }
            // line 1523
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1524
        yield "
    ";
        // line 1526
        yield "    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        yield "
  </div>";
        yield from [];
    }

    // line 1530
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_button_collection_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1531
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source,         // line 1532
($context["attr"] ?? null), "class", [], "any", true, true, false, 1532)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1532), "")) : ("")) . " form-group btn-collection btn-toolbar")), "role" => "group", "style" => ("justify-content: " .         // line 1534
($context["justify_content"] ?? null))]);
        // line 1536
        yield "<div ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        yield ">
    ";
        // line 1537
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["button_groups"] ?? null));
        foreach ($context['_seq'] as $context["group"] => $context["buttons"]) {
            // line 1538
            yield "      <div class=\"";
            if (($context["use_button_groups"] ?? null)) {
                yield "btn-group ";
            }
            yield "group-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["group"], "html", null, true);
            yield "\">
        ";
            // line 1540
            yield "        ";
            $context["inlineButtonsLimit"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1540), "inline_buttons_limit", [], "any", false, false, false, 1540);
            // line 1541
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["buttons"]);
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
            foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                // line 1542
                yield "          ";
                $context["action"] = CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), $context["button"], [], "any", false, false, false, 1542);
                // line 1543
                yield "          ";
                if (((($context["inlineButtonsLimit"] ?? null) === null) || (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 1543) <= ($context["inlineButtonsLimit"] ?? null)))) {
                    // line 1544
                    yield "            ";
                    // line 1545
                    yield "            ";
                    if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1545), "use_inline_labels", [], "any", false, false, false, 1545)) {
                        // line 1546
                        yield "              ";
                        $context["actionLabel"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "vars", [], "any", false, false, false, 1546), "label", [], "any", false, false, false, 1546);
                        // line 1547
                        yield "            ";
                    } else {
                        // line 1548
                        yield "              ";
                        $context["actionLabel"] = "";
                        // line 1549
                        yield "            ";
                    }
                    // line 1550
                    yield "            ";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["action"] ?? null), 'widget', ["label" => ($context["actionLabel"] ?? null)]);
                    yield "
          ";
                }
                // line 1552
                yield "        ";
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
            unset($context['_seq'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1553
            yield "
        ";
            // line 1555
            yield "        ";
            if (( !(($context["inlineButtonsLimit"] ?? null) === null) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), $context["buttons"]) > ($context["inlineButtonsLimit"] ?? null)))) {
                // line 1556
                yield "          <a id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1556), "id", [], "any", false, false, false, 1556), "html", null, true);
                yield "_dropdown\" class=\"btn btn-link dropdown-toggle dropdown-toggle-dots dropdown-toggle-split no-rotate\"
             data-toggle=\"dropdown\"
             aria-haspopup=\"true\"
             aria-expanded=\"false\"
          >
          </a>
          <div class=\"dropdown-menu\">
            ";
                // line 1563
                $context["remainingButtons"] = Twig\Extension\CoreExtension::slice($this->env->getCharset(), $context["buttons"], ($context["inlineButtonsLimit"] ?? null));
                // line 1564
                yield "            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["remainingButtons"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                    // line 1565
                    yield "              ";
                    $context["action"] = CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), $context["button"], [], "any", false, false, false, 1565);
                    // line 1566
                    yield "              ";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["action"] ?? null), 'widget', ["attr" => ["class" => ("dropdown-item " . Twig\Extension\CoreExtension::trim(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 1567
($context["action"] ?? null), "vars", [], "any", false, true, false, 1567), "attr", [], "any", false, true, false, 1567), "class", [], "any", true, true, false, 1567)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "vars", [], "any", false, false, false, 1567), "attr", [], "any", false, false, false, 1567), "class", [], "any", false, false, false, 1567), "")) : (""))))]]);
                    // line 1568
                    yield "
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['button'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1570
                yield "          </div>
        ";
            }
            // line 1572
            yield "      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['group'], $context['buttons'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1574
        yield "  </div>
";
        yield from [];
    }

    // line 1577
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_avatar_url_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1578
        yield "  ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'row', ["attr" => ($context["attr"] ?? null)]);
        yield "

  <div class=\"form-group row\">
    <label class=\"form-control-label\"></label>
    <div class=\"col-sm\">
      <img class=\"img-thumbnail clickable-avatar\" src=\"";
        // line 1583
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 1583), "vars", [], "any", false, false, false, 1583), "value", [], "any", false, false, false, 1583), "avatar_url", [], "any", false, false, false, 1583), "html", null, true);
        yield "\" alt=\"\">
    </div>
  </div>
";
        yield from [];
    }

    // line 1588
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_change_password_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1589
        yield "  <div class=\"form-group row\">
    <label class=\"form-control-label\">
      ";
        // line 1591
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Password", [], "Admin.Global"), "html", null, true);
        yield "
    </label>
    <div class=\"col-sm\">
      ";
        // line 1595
        yield "      ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 1595), "change_password_button", [], "any", false, false, false, 1595), 'row');
        yield "

      <div class=\"card card-body js-change-password-block d-none\">
        ";
        // line 1599
        yield "        ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 1599), "old_password", [], "any", false, false, false, 1599), 'row');
        yield "

        ";
        // line 1602
        yield "        ";
        // line 1603
        yield "        ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 1603), "new_password", [], "any", false, false, false, 1603), 'row');
        yield "

        <div class=\"form-group row\">
          <label class=\"form-control-label\"></label>
          <div class=\"col-sm\">
            ";
        // line 1608
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 1608), "generated_password", [], "any", false, false, false, 1608), 'widget');
        yield "
          </div>
          <div class=\"col-sm\">
            ";
        // line 1611
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 1611), "generate_password_button", [], "any", false, false, false, 1611), 'widget');
        yield "
          </div>
        </div>
        ";
        // line 1614
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 1614), "cancel_button", [], "any", false, false, false, 1614), 'row');
        yield "

        ";
        // line 1617
        yield "        <div class=\"js-password-strength-feedback d-none\">
          <span class=\"strength-low\">";
        // line 1618
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Invalid", [], "Admin.Advparameters.Help"), "html", null, true);
        yield "</span>
          <span class=\"strength-medium\">";
        // line 1619
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Okay", [], "Admin.Advparameters.Help"), "html", null, true);
        yield "</span>
          <span class=\"strength-high\">";
        // line 1620
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Good", [], "Admin.Advparameters.Help"), "html", null, true);
        yield "</span>
          <span class=\"strength-extreme\">";
        // line 1621
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Fabulous", [], "Admin.Advparameters.Help"), "html", null, true);
        yield "</span>
        </div>
      </div>
    </div>
  </div>
";
        yield from [];
    }

    // line 1628
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_price_reduction_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1629
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1629)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1629), "")) : ("")) . " reduction-widget row"))]);
        // line 1630
        yield "  <div ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        yield ">
    ";
        // line 1631
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 1631));
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
            // line 1632
            yield "      ";
            $_v28 = $context;
            $_v29 = ["row_attr" => Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1632), "row_attr", [], "any", false, false, false, 1632), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, true, false, 1632), "row_attr", [], "any", false, true, false, 1632), "class", [], "any", true, true, false, 1632)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1632), "row_attr", [], "any", false, false, false, 1632), "class", [], "any", false, false, false, 1632), "")) : ("")) . " col col-md-3"))])];
            if (!is_iterable($_v29)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 1632, $this->getSourceContext());
            }
            $_v29 = CoreExtension::toArray($_v29);
            $context = $_v29 + $context + $this->env->getGlobals();
            // line 1633
            yield "      <div ";
            yield from             $this->unwrap()->yieldBlock("row_attributes", $context, $blocks);
            yield ">
      ";
            $context = $_v28;
            // line 1635
            yield "        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            yield "
        ";
            // line 1636
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'errors');
            yield "
      </div>
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
        // line 1639
        yield "</div>";
        yield from [];
    }

    // line 1642
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_image_with_preview_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1643
        yield "  ";
        if ((array_key_exists("data", $context) &&  !Twig\Extension\CoreExtension::testEmpty(($context["data"] ?? null)))) {
            // line 1644
            yield "    <div>
      ";
            // line 1645
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["data"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["preview_image"]) {
                // line 1648
                yield "        ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["preview_image"], "image_path", [], "any", true, true, false, 1648)) {
                    // line 1649
                    yield "          ";
                    if (($context["can_be_deleted"] ?? null)) {
                        // line 1650
                        yield "            <figure class=\"figure\">
              <img src=\"";
                        // line 1651
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["preview_image"], "image_path", [], "any", false, false, false, 1651), "html", null, true);
                        yield "\" class=\"figure-img img-fluid img-thumbnail\">
              <figcaption class=\"figure-caption\">
                ";
                        // line 1653
                        if (($context["show_size"] ?? null)) {
                            // line 1654
                            yield "                  <p>";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("File size", [], "Admin.Advparameters.Feature"), "html", null, true);
                            yield " ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["preview_image"], "size", [], "any", false, false, false, 1654), "html", null, true);
                            yield "</p>
                ";
                        }
                        // line 1656
                        yield "                <button class=\"btn btn-outline-danger btn-sm js-form-submit-btn\"
                        data-form-submit-url=\"";
                        // line 1657
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["preview_image"], "delete_path", [], "any", false, false, false, 1657), "html", null, true);
                        yield "\"
                >
                  <i class=\"material-icons\">
                    delete_forever
                  </i>
                  ";
                        // line 1662
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete", [], "Admin.Actions"), "html", null, true);
                        yield "
                </button>
              </figcaption>
            </figure>
          ";
                    } else {
                        // line 1667
                        yield "            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(($context["data"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["preview_image"]) {
                            // line 1668
                            yield "              <figure class=\"figure\">
                <img src=\"";
                            // line 1669
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["preview_image"], "image_path", [], "any", false, false, false, 1669), "html", null, true);
                            yield "\" class=\"figure-img img-fluid img-thumbnail\">
                ";
                            // line 1670
                            if (($context["show_size"] ?? null)) {
                                // line 1671
                                yield "                  <figcaption class=\"figure-caption\">";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("File size", [], "Admin.Advparameters.Feature"), "html", null, true);
                                yield " ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["preview_image"], "size", [], "any", false, false, false, 1671), "html", null, true);
                                yield "</figcaption>
                ";
                            }
                            // line 1673
                            yield "              </figure>
            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['preview_image'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 1675
                        yield "          ";
                    }
                    // line 1676
                    yield "      ";
                }
                // line 1677
                yield "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['preview_image'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1678
            yield "    </div>
  ";
        }
        // line 1680
        yield "  ";
        yield from         $this->unwrap()->yieldBlock("file_widget", $context, $blocks);
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  5096 => 1680,  5092 => 1678,  5086 => 1677,  5083 => 1676,  5080 => 1675,  5073 => 1673,  5065 => 1671,  5063 => 1670,  5059 => 1669,  5056 => 1668,  5051 => 1667,  5043 => 1662,  5035 => 1657,  5032 => 1656,  5024 => 1654,  5022 => 1653,  5017 => 1651,  5014 => 1650,  5011 => 1649,  5008 => 1648,  5004 => 1645,  5001 => 1644,  4998 => 1643,  4991 => 1642,  4986 => 1639,  4969 => 1636,  4964 => 1635,  4958 => 1633,  4949 => 1632,  4932 => 1631,  4927 => 1630,  4925 => 1629,  4918 => 1628,  4907 => 1621,  4903 => 1620,  4899 => 1619,  4895 => 1618,  4892 => 1617,  4887 => 1614,  4881 => 1611,  4875 => 1608,  4866 => 1603,  4864 => 1602,  4858 => 1599,  4851 => 1595,  4845 => 1591,  4841 => 1589,  4834 => 1588,  4825 => 1583,  4816 => 1578,  4809 => 1577,  4803 => 1574,  4796 => 1572,  4792 => 1570,  4785 => 1568,  4783 => 1567,  4781 => 1566,  4778 => 1565,  4773 => 1564,  4771 => 1563,  4760 => 1556,  4757 => 1555,  4754 => 1553,  4740 => 1552,  4734 => 1550,  4731 => 1549,  4728 => 1548,  4725 => 1547,  4722 => 1546,  4719 => 1545,  4717 => 1544,  4714 => 1543,  4711 => 1542,  4693 => 1541,  4690 => 1540,  4681 => 1538,  4677 => 1537,  4672 => 1536,  4670 => 1534,  4669 => 1532,  4668 => 1531,  4661 => 1530,  4653 => 1526,  4650 => 1524,  4644 => 1523,  4641 => 1522,  4639 => 1521,  4632 => 1517,  4627 => 1516,  4625 => 1515,  4608 => 1513,  4601 => 1508,  4595 => 1506,  4593 => 1505,  4589 => 1504,  4585 => 1503,  4577 => 1502,  4573 => 1501,  4561 => 1498,  4555 => 1495,  4552 => 1494,  4549 => 1493,  4546 => 1492,  4543 => 1491,  4538 => 1490,  4536 => 1489,  4531 => 1488,  4529 => 1486,  4528 => 1485,  4521 => 1484,  4515 => 1481,  4509 => 1478,  4506 => 1477,  4504 => 1476,  4500 => 1474,  4494 => 1473,  4491 => 1472,  4489 => 1471,  4484 => 1469,  4479 => 1468,  4473 => 1466,  4471 => 1465,  4469 => 1464,  4460 => 1463,  4457 => 1462,  4452 => 1461,  4450 => 1460,  4446 => 1459,  4442 => 1457,  4436 => 1454,  4433 => 1453,  4431 => 1452,  4423 => 1446,  4417 => 1445,  4414 => 1444,  4412 => 1443,  4406 => 1440,  4398 => 1439,  4389 => 1438,  4386 => 1437,  4381 => 1436,  4379 => 1435,  4370 => 1429,  4365 => 1428,  4363 => 1427,  4356 => 1426,  4350 => 1423,  4348 => 1422,  4346 => 1421,  4344 => 1418,  4343 => 1417,  4342 => 1416,  4341 => 1415,  4337 => 1414,  4335 => 1413,  4328 => 1412,  4320 => 1407,  4313 => 1406,  4307 => 1403,  4305 => 1402,  4303 => 1401,  4301 => 1398,  4300 => 1397,  4299 => 1396,  4298 => 1395,  4294 => 1394,  4292 => 1393,  4285 => 1392,  4280 => 1389,  4278 => 1388,  4276 => 1387,  4269 => 1386,  4263 => 1383,  4261 => 1382,  4259 => 1381,  4257 => 1380,  4255 => 1379,  4253 => 1378,  4251 => 1376,  4249 => 1374,  4247 => 1373,  4245 => 1372,  4233 => 1370,  4226 => 1369,  4218 => 1365,  4213 => 1363,  4206 => 1361,  4201 => 1360,  4199 => 1359,  4195 => 1358,  4193 => 1357,  4186 => 1356,  4178 => 1352,  4174 => 1351,  4170 => 1350,  4165 => 1349,  4162 => 1348,  4159 => 1347,  4156 => 1346,  4153 => 1345,  4151 => 1344,  4148 => 1343,  4141 => 1342,  4132 => 1338,  4122 => 1336,  4120 => 1335,  4118 => 1334,  4116 => 1333,  4109 => 1332,  4101 => 1328,  4094 => 1327,  4092 => 1326,  4090 => 1325,  4083 => 1324,  4078 => 1321,  4076 => 1320,  4070 => 1317,  4067 => 1316,  4064 => 1315,  4060 => 1312,  4054 => 1310,  4052 => 1309,  4046 => 1307,  4044 => 1306,  4042 => 1305,  4038 => 1303,  4032 => 1300,  4029 => 1299,  4026 => 1298,  4021 => 1296,  4019 => 1295,  4017 => 1294,  4010 => 1293,  4001 => 1288,  3997 => 1286,  3990 => 1285,  3983 => 1281,  3976 => 1277,  3972 => 1276,  3968 => 1274,  3965 => 1273,  3956 => 1270,  3953 => 1269,  3948 => 1268,  3944 => 1266,  3935 => 1264,  3931 => 1263,  3928 => 1262,  3926 => 1261,  3921 => 1260,  3919 => 1259,  3916 => 1258,  3913 => 1257,  3904 => 1254,  3901 => 1253,  3896 => 1252,  3890 => 1249,  3887 => 1248,  3885 => 1247,  3877 => 1246,  3875 => 1245,  3868 => 1244,  3862 => 1240,  3860 => 1239,  3853 => 1238,  3847 => 1234,  3845 => 1233,  3838 => 1232,  3831 => 1228,  3822 => 1226,  3818 => 1225,  3813 => 1224,  3811 => 1223,  3806 => 1221,  3803 => 1220,  3800 => 1218,  3798 => 1217,  3796 => 1216,  3789 => 1215,  3781 => 1212,  3774 => 1211,  3768 => 1208,  3763 => 1207,  3759 => 1206,  3756 => 1205,  3750 => 1204,  3742 => 1202,  3739 => 1201,  3735 => 1200,  3732 => 1199,  3730 => 1198,  3723 => 1197,  3716 => 1193,  3710 => 1191,  3704 => 1189,  3701 => 1188,  3694 => 1186,  3688 => 1183,  3683 => 1182,  3681 => 1181,  3678 => 1180,  3671 => 1179,  3665 => 1175,  3662 => 1174,  3655 => 1173,  3649 => 1169,  3646 => 1168,  3639 => 1167,  3630 => 1163,  3627 => 1162,  3609 => 1160,  3607 => 1159,  3604 => 1158,  3597 => 1157,  3588 => 1152,  3585 => 1151,  3582 => 1150,  3575 => 1149,  3566 => 1144,  3563 => 1143,  3560 => 1142,  3553 => 1141,  3548 => 1138,  3545 => 1137,  3543 => 1136,  3541 => 1135,  3539 => 1134,  3537 => 1133,  3535 => 1132,  3528 => 1131,  3523 => 1128,  3520 => 1127,  3518 => 1126,  3516 => 1125,  3514 => 1124,  3512 => 1123,  3510 => 1122,  3503 => 1121,  3496 => 1118,  3491 => 1117,  3484 => 1116,  3477 => 1113,  3472 => 1112,  3465 => 1111,  3459 => 1108,  3453 => 1105,  3450 => 1104,  3448 => 1103,  3445 => 1102,  3442 => 1100,  3439 => 1098,  3437 => 1097,  3435 => 1096,  3433 => 1095,  3431 => 1093,  3429 => 1092,  3426 => 1091,  3420 => 1088,  3417 => 1087,  3415 => 1086,  3412 => 1085,  3410 => 1084,  3407 => 1083,  3400 => 1082,  3392 => 1077,  3390 => 1075,  3389 => 1073,  3388 => 1072,  3382 => 1069,  3378 => 1067,  3375 => 1065,  3372 => 1063,  3370 => 1062,  3368 => 1058,  3366 => 1057,  3359 => 1056,  3352 => 1053,  3345 => 1049,  3340 => 1047,  3336 => 1046,  3331 => 1043,  3328 => 1041,  3325 => 1039,  3323 => 1038,  3320 => 1037,  3313 => 1036,  3301 => 1028,  3297 => 1027,  3293 => 1026,  3289 => 1024,  3287 => 1023,  3283 => 1021,  3280 => 1020,  3273 => 1019,  3264 => 1014,  3259 => 1013,  3257 => 1012,  3255 => 1011,  3249 => 1008,  3247 => 1007,  3242 => 1006,  3240 => 1004,  3237 => 1003,  3235 => 1001,  3233 => 1000,  3231 => 999,  3229 => 994,  3228 => 993,  3221 => 989,  3217 => 987,  3210 => 986,  3203 => 981,  3201 => 980,  3199 => 977,  3198 => 976,  3197 => 975,  3196 => 974,  3193 => 972,  3190 => 971,  3188 => 970,  3185 => 969,  3180 => 967,  3178 => 966,  3176 => 965,  3173 => 963,  3170 => 962,  3163 => 961,  3157 => 958,  3151 => 956,  3145 => 954,  3143 => 953,  3136 => 952,  3131 => 949,  3126 => 946,  3115 => 944,  3111 => 943,  3107 => 942,  3102 => 940,  3097 => 938,  3093 => 936,  3087 => 934,  3085 => 933,  3079 => 929,  3076 => 928,  3067 => 925,  3060 => 924,  3057 => 923,  3054 => 922,  3051 => 921,  3048 => 920,  3045 => 919,  3041 => 918,  3034 => 917,  3032 => 916,  3025 => 915,  3018 => 911,  3009 => 908,  2988 => 907,  2984 => 906,  2980 => 904,  2976 => 902,  2966 => 898,  2956 => 897,  2953 => 896,  2949 => 895,  2946 => 894,  2944 => 893,  2939 => 892,  2932 => 891,  2927 => 838,  2920 => 884,  2913 => 882,  2906 => 880,  2902 => 878,  2899 => 877,  2893 => 875,  2887 => 873,  2885 => 872,  2882 => 871,  2879 => 870,  2877 => 869,  2874 => 868,  2870 => 867,  2865 => 865,  2861 => 863,  2857 => 862,  2852 => 859,  2837 => 857,  2831 => 855,  2825 => 852,  2819 => 849,  2815 => 847,  2813 => 846,  2810 => 845,  2793 => 844,  2789 => 843,  2779 => 839,  2776 => 838,  2769 => 837,  2761 => 834,  2759 => 800,  2752 => 830,  2742 => 826,  2738 => 824,  2734 => 823,  2726 => 817,  2718 => 816,  2714 => 814,  2710 => 812,  2708 => 811,  2696 => 801,  2693 => 800,  2686 => 799,  2678 => 792,  2669 => 789,  2665 => 788,  2658 => 783,  2655 => 782,  2648 => 781,  2641 => 776,  2632 => 772,  2629 => 771,  2625 => 770,  2619 => 766,  2611 => 760,  2606 => 757,  2599 => 754,  2594 => 752,  2587 => 748,  2583 => 746,  2581 => 745,  2575 => 742,  2571 => 741,  2568 => 740,  2562 => 737,  2552 => 734,  2548 => 733,  2545 => 731,  2543 => 730,  2537 => 728,  2535 => 727,  2533 => 725,  2530 => 723,  2523 => 722,  2514 => 718,  2508 => 716,  2506 => 715,  2499 => 714,  2494 => 709,  2492 => 708,  2485 => 707,  2483 => 706,  2481 => 705,  2474 => 704,  2468 => 700,  2466 => 699,  2462 => 698,  2460 => 697,  2457 => 695,  2455 => 694,  2451 => 693,  2449 => 692,  2447 => 691,  2445 => 690,  2438 => 689,  2432 => 686,  2427 => 683,  2425 => 682,  2423 => 681,  2421 => 680,  2407 => 679,  2404 => 678,  2400 => 676,  2398 => 675,  2396 => 673,  2394 => 671,  2379 => 670,  2377 => 669,  2374 => 668,  2371 => 667,  2368 => 666,  2365 => 665,  2362 => 664,  2359 => 663,  2356 => 662,  2353 => 661,  2350 => 660,  2347 => 659,  2344 => 658,  2342 => 657,  2335 => 656,  2330 => 653,  2323 => 652,  2318 => 649,  2311 => 648,  2306 => 645,  2304 => 644,  2297 => 642,  2287 => 633,  2270 => 630,  2266 => 629,  2262 => 628,  2259 => 627,  2242 => 626,  2236 => 622,  2232 => 621,  2228 => 620,  2220 => 615,  2214 => 612,  2209 => 611,  2202 => 610,  2190 => 606,  2188 => 605,  2184 => 604,  2182 => 603,  2175 => 602,  2170 => 599,  2168 => 579,  2161 => 595,  2147 => 594,  2139 => 593,  2135 => 591,  2130 => 590,  2126 => 589,  2122 => 588,  2118 => 587,  2114 => 586,  2109 => 585,  2106 => 584,  2089 => 583,  2085 => 582,  2065 => 581,  2062 => 580,  2059 => 579,  2052 => 578,  2047 => 553,  2043 => 575,  2036 => 571,  2030 => 568,  2026 => 567,  2021 => 565,  2017 => 563,  2015 => 562,  2010 => 560,  2004 => 557,  2000 => 556,  1996 => 554,  1993 => 553,  1986 => 552,  1981 => 536,  1975 => 547,  1970 => 545,  1965 => 544,  1963 => 543,  1959 => 542,  1953 => 539,  1949 => 537,  1946 => 536,  1939 => 535,  1934 => 521,  1928 => 531,  1910 => 524,  1907 => 523,  1904 => 522,  1901 => 521,  1894 => 520,  1889 => 517,  1884 => 514,  1875 => 511,  1870 => 509,  1867 => 508,  1863 => 507,  1859 => 506,  1853 => 503,  1848 => 501,  1840 => 495,  1838 => 494,  1835 => 493,  1826 => 490,  1822 => 489,  1819 => 488,  1816 => 487,  1813 => 486,  1811 => 485,  1808 => 484,  1805 => 483,  1802 => 482,  1798 => 481,  1793 => 479,  1786 => 478,  1781 => 475,  1776 => 472,  1765 => 470,  1761 => 469,  1757 => 468,  1751 => 465,  1746 => 463,  1738 => 457,  1736 => 456,  1733 => 455,  1717 => 453,  1715 => 452,  1712 => 450,  1709 => 449,  1707 => 448,  1704 => 447,  1701 => 446,  1698 => 445,  1681 => 444,  1676 => 442,  1669 => 441,  1664 => 438,  1661 => 436,  1659 => 435,  1652 => 434,  1645 => 430,  1636 => 427,  1632 => 426,  1611 => 425,  1607 => 424,  1603 => 422,  1599 => 420,  1589 => 416,  1579 => 415,  1576 => 414,  1572 => 413,  1569 => 412,  1567 => 411,  1563 => 410,  1558 => 409,  1551 => 408,  1546 => 405,  1542 => 403,  1525 => 401,  1522 => 400,  1505 => 399,  1502 => 398,  1499 => 397,  1495 => 394,  1489 => 392,  1487 => 391,  1483 => 390,  1475 => 389,  1471 => 387,  1467 => 384,  1461 => 382,  1458 => 381,  1453 => 379,  1448 => 377,  1446 => 376,  1438 => 375,  1434 => 373,  1431 => 372,  1429 => 371,  1426 => 370,  1419 => 369,  1413 => 365,  1396 => 363,  1379 => 362,  1376 => 361,  1370 => 359,  1363 => 358,  1357 => 354,  1351 => 351,  1350 => 350,  1349 => 349,  1348 => 348,  1344 => 347,  1340 => 346,  1337 => 344,  1331 => 341,  1330 => 340,  1329 => 339,  1328 => 338,  1324 => 337,  1322 => 336,  1320 => 335,  1313 => 334,  1308 => 331,  1306 => 330,  1299 => 329,  1292 => 326,  1290 => 325,  1283 => 324,  1277 => 321,  1273 => 320,  1269 => 319,  1263 => 318,  1260 => 317,  1257 => 316,  1254 => 315,  1251 => 314,  1248 => 313,  1245 => 312,  1242 => 311,  1239 => 310,  1237 => 309,  1234 => 308,  1231 => 307,  1229 => 306,  1222 => 305,  1217 => 302,  1215 => 301,  1208 => 300,  1203 => 297,  1199 => 296,  1197 => 295,  1190 => 294,  1183 => 289,  1180 => 288,  1172 => 287,  1167 => 285,  1165 => 284,  1163 => 283,  1160 => 281,  1158 => 280,  1151 => 279,  1144 => 274,  1142 => 273,  1140 => 271,  1139 => 270,  1138 => 269,  1137 => 268,  1132 => 266,  1130 => 265,  1128 => 264,  1125 => 262,  1123 => 261,  1116 => 260,  1111 => 257,  1107 => 256,  1105 => 255,  1098 => 254,  1092 => 250,  1090 => 249,  1088 => 248,  1086 => 247,  1084 => 246,  1080 => 245,  1078 => 244,  1075 => 242,  1073 => 241,  1066 => 240,  1058 => 234,  1056 => 233,  1054 => 232,  1047 => 231,  1042 => 228,  1038 => 226,  1032 => 223,  1029 => 222,  1027 => 221,  1025 => 220,  1019 => 217,  1016 => 216,  1013 => 215,  1011 => 214,  1008 => 213,  1001 => 212,  996 => 209,  992 => 208,  990 => 207,  988 => 206,  981 => 205,  972 => 199,  970 => 198,  965 => 196,  963 => 195,  957 => 193,  954 => 192,  951 => 191,  949 => 190,  946 => 189,  941 => 187,  936 => 186,  933 => 185,  931 => 184,  926 => 183,  922 => 181,  920 => 180,  903 => 179,  901 => 178,  897 => 174,  894 => 171,  893 => 170,  892 => 169,  890 => 168,  887 => 167,  884 => 165,  881 => 164,  878 => 162,  876 => 161,  874 => 160,  867 => 159,  861 => 139,  854 => 152,  851 => 151,  848 => 150,  845 => 149,  842 => 148,  839 => 147,  836 => 146,  833 => 145,  830 => 144,  827 => 143,  824 => 142,  822 => 141,  819 => 140,  816 => 139,  814 => 138,  807 => 137,  799 => 133,  794 => 132,  791 => 131,  788 => 130,  781 => 129,  773 => 125,  768 => 124,  765 => 123,  762 => 122,  755 => 121,  748 => 113,  746 => 112,  742 => 110,  740 => 109,  738 => 108,  736 => 106,  734 => 105,  732 => 104,  730 => 102,  728 => 101,  726 => 100,  715 => 99,  708 => 98,  703 => 93,  699 => 92,  697 => 91,  690 => 90,  683 => 87,  677 => 84,  672 => 83,  670 => 82,  668 => 81,  661 => 80,  656 => 77,  652 => 76,  645 => 75,  640 => 72,  637 => 71,  634 => 70,  631 => 69,  629 => 68,  622 => 67,  614 => 64,  611 => 63,  608 => 62,  605 => 61,  602 => 60,  599 => 59,  596 => 58,  589 => 57,  584 => 1642,  582 => 1628,  580 => 1588,  577 => 1587,  575 => 1577,  572 => 1576,  570 => 1530,  568 => 1484,  566 => 1426,  564 => 1412,  561 => 1411,  559 => 1406,  556 => 1405,  554 => 1392,  551 => 1391,  549 => 1386,  546 => 1385,  544 => 1369,  541 => 1368,  539 => 1356,  536 => 1355,  534 => 1342,  531 => 1341,  529 => 1332,  526 => 1331,  524 => 1324,  521 => 1323,  519 => 1293,  516 => 1292,  514 => 1285,  512 => 1244,  510 => 1238,  508 => 1232,  506 => 1215,  503 => 1214,  501 => 1211,  499 => 1197,  497 => 1179,  494 => 1178,  492 => 1173,  489 => 1172,  487 => 1167,  484 => 1166,  482 => 1157,  479 => 1156,  477 => 1149,  474 => 1148,  472 => 1141,  470 => 1131,  468 => 1121,  466 => 1116,  463 => 1115,  461 => 1111,  458 => 1110,  456 => 1082,  453 => 1081,  451 => 1056,  448 => 1055,  446 => 1036,  443 => 1035,  441 => 1019,  438 => 1018,  436 => 986,  433 => 985,  431 => 961,  428 => 960,  426 => 952,  423 => 951,  421 => 915,  418 => 914,  416 => 891,  413 => 889,  411 => 837,  408 => 836,  406 => 799,  403 => 798,  400 => 796,  398 => 781,  395 => 780,  393 => 722,  390 => 721,  388 => 714,  385 => 713,  382 => 711,  380 => 704,  377 => 703,  375 => 689,  372 => 688,  370 => 656,  367 => 655,  365 => 652,  362 => 651,  360 => 648,  357 => 647,  355 => 642,  352 => 641,  349 => 639,  347 => 610,  345 => 602,  343 => 578,  340 => 577,  338 => 552,  335 => 551,  333 => 535,  330 => 534,  328 => 520,  325 => 519,  323 => 478,  320 => 477,  318 => 441,  315 => 440,  313 => 434,  310 => 433,  308 => 408,  305 => 407,  303 => 369,  300 => 368,  298 => 358,  295 => 357,  293 => 334,  290 => 333,  288 => 329,  285 => 328,  283 => 324,  280 => 323,  278 => 305,  275 => 304,  273 => 300,  271 => 294,  269 => 279,  266 => 278,  264 => 260,  262 => 254,  260 => 240,  257 => 239,  255 => 231,  252 => 230,  250 => 212,  247 => 211,  245 => 205,  242 => 204,  240 => 159,  237 => 156,  235 => 137,  232 => 136,  230 => 129,  227 => 128,  225 => 121,  222 => 116,  220 => 98,  217 => 97,  215 => 90,  213 => 80,  211 => 75,  209 => 67,  207 => 57,  204 => 56,  201 => 54,  198 => 52,  195 => 46,  192 => 34,  189 => 25,  75 => 51,  68 => 50,  61 => 49,  54 => 48,  35 => 45,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", "/home/sheridantools/public_html/src/PrestaShopBundle/Resources/views/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig");
    }
}
