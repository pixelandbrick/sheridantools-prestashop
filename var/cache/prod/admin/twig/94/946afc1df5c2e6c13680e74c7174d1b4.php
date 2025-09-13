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

/* @PrestaShop/Admin/TwigTemplateForm/entity_search_input.html.twig */
class __TwigTemplate_4c116dd9236510755fa88c44c3ce3dc6 extends Template
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
            'entity_search_input_widget' => [$this, 'block_entity_search_input_widget'],
            'entity_search_list_layout' => [$this, 'block_entity_search_list_layout'],
            'entity_search_table_layout' => [$this, 'block_entity_search_table_layout'],
            'entity_item_row' => [$this, 'block_entity_item_row'],
            'entity_item_list_row' => [$this, 'block_entity_item_list_row'],
            'entity_item_table_row' => [$this, 'block_entity_item_table_row'],
            'searched_customer_row' => [$this, 'block_searched_customer_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 25
        yield "
";
        // line 26
        yield from $this->unwrap()->yieldBlock('entity_search_input_widget', $context, $blocks);
        // line 75
        yield "
";
        // line 76
        yield from $this->unwrap()->yieldBlock('entity_search_list_layout', $context, $blocks);
        // line 82
        yield "
";
        // line 83
        yield from $this->unwrap()->yieldBlock('entity_search_table_layout', $context, $blocks);
        // line 112
        yield "
";
        // line 113
        yield from $this->unwrap()->yieldBlock('entity_item_row', $context, $blocks);
        // line 120
        yield "
";
        // line 121
        yield from $this->unwrap()->yieldBlock('entity_item_list_row', $context, $blocks);
        // line 135
        yield from $this->unwrap()->yieldBlock('entity_item_table_row', $context, $blocks);
        // line 158
        yield from $this->unwrap()->yieldBlock('searched_customer_row', $context, $blocks);
        yield from [];
    }

    // line 26
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_entity_search_input_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 27
        yield "  ";
        // line 28
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["data-prototype-template" =>         // line 29
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["prototype"] ?? null), 'row'), "data-prototype-index" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 30
($context["prototype"] ?? null), "vars", [], "any", false, false, false, 30), "name", [], "any", false, false, false, 30), "html_attr"), "data-prototype-mapping" => json_encode(        // line 31
($context["prototype_mapping"] ?? null)), "data-identifier-field" =>         // line 32
($context["identifier_field"] ?? null), "data-filtered-identities" => json_encode(        // line 33
($context["filtered_identities"] ?? null)), "data-remove-modal" => json_encode(        // line 34
($context["remove_modal"] ?? null)), "data-remote-url" =>         // line 35
($context["remote_url"] ?? null), "data-data-limit" =>         // line 36
($context["limit"] ?? null), "data-min-length" =>         // line 37
($context["min_length"] ?? null), "data-allow-delete" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 38
($context["form"] ?? null), "vars", [], "any", false, false, false, 38), "allow_delete", [], "any", false, false, false, 38)) ? (1) : (0)), "data-suggestion-field" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 39
($context["form"] ?? null), "vars", [], "any", false, false, false, 39), "suggestion_field", [], "any", false, false, false, 39)]);
        // line 41
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 41)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 41), "")) : ("")) . " entity-search-widget"))]);
        // line 44
        yield "  <div ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield ">
    ";
        // line 46
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 46), "allow_search", [], "any", false, false, false, 46)) {
            // line 47
            yield "      <div class=\"search search-with-icon\">";
            // line 48
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["search_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source,             // line 49
($context["search_attr"] ?? null), "class", [], "any", true, true, false, 49)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["search_attr"] ?? null), "class", [], "any", false, false, false, 49), "")) : ("")) . " entity-search-input form-control")), "autocomplete" => "off", "placeholder" =>             // line 51
($context["placeholder"] ?? null), "type" => "text"]);
            // line 54
            $context["id"] = (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 54), "id", [], "any", false, false, false, 54) . "_search_input");
            // line 55
            yield "<input ";
            yield from             $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
            yield " />
      </div>
    ";
        }
        // line 58
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        // line 60
        $context["id"] = (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 60), "id", [], "any", false, false, false, 60) . "_list");
        // line 61
        if ((($context["list_layout"] ?? null) == "table")) {
            // line 62
            yield from             $this->unwrap()->yieldBlock("entity_search_table_layout", $context, $blocks);
        } else {
            // line 64
            yield from             $this->unwrap()->yieldBlock("entity_search_list_layout", $context, $blocks);
        }
        // line 66
        yield "    ";
        if ( !(null === ($context["empty_state"] ?? null))) {
            // line 67
            yield "      <div class=\"alert alert-info empty-entity-list mt-2\" role=\"alert\">
        <p class=\"alert-text\">
          ";
            // line 69
            yield ($context["empty_state"] ?? null);
            yield "
        </p>
      </div>
    ";
        }
        // line 73
        yield "  </div>
";
        yield from [];
    }

    // line 76
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_entity_search_list_layout(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 77
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["list_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["list_attr"] ?? null), "class", [], "any", true, true, false, 77)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["list_attr"] ?? null), "class", [], "any", false, false, false, 77), "")) : ("")) . " entities-list entities-list-container"))]);
        // line 78
        yield "<ul ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield ">";
        // line 79
        yield from         $this->unwrap()->yieldBlock("form_rows", $context, $blocks);
        // line 80
        yield "</ul>
";
        yield from [];
    }

    // line 83
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_entity_search_table_layout(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 84
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["list_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["list_attr"] ?? null), "class", [], "any", true, true, false, 84)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["list_attr"] ?? null), "class", [], "any", false, false, false, 84), "")) : ("")) . " entities-list-container"))]);
        // line 85
        yield "<div ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield ">
    <div class=\"row\">
      <div class=\"col-sm\">
        <table class=\"table\">
          <thead class=\"thead-default\">
            <tr>
            ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["prototype"] ?? null), "children", [], "any", false, false, false, 91));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 92
            yield "              ";
            $context["childType"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 92), "block_prefixes", [], "any", false, false, false, 92), 1, [], "any", false, false, false, 92);
            // line 93
            yield "              ";
            if ((($context["childType"] ?? null) != "hidden")) {
                // line 94
                yield "                <th>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 94), "label", [], "any", false, false, false, 94), "html", null, true);
                yield "</th>
              ";
            }
            // line 96
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        yield "
            ";
        // line 99
        yield "            ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 99), "allow_delete", [], "any", false, false, false, 99)) {
            // line 100
            yield "              <th></th>
            ";
        }
        // line 102
        yield "            </tr>
          </thead>
          <tbody class=\"entities-list\">";
        // line 105
        yield from         $this->unwrap()->yieldBlock("form_rows", $context, $blocks);
        // line 106
        yield "</tbody>
        </table>
      </div>
    </div>
  </div>
";
        yield from [];
    }

    // line 113
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_entity_item_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 114
        yield "  ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 114), "vars", [], "any", false, false, false, 114), "list_layout", [], "any", false, false, false, 114) == "table")) {
            // line 115
            yield from             $this->unwrap()->yieldBlock("entity_item_table_row", $context, $blocks);
        } else {
            // line 117
            yield from             $this->unwrap()->yieldBlock("entity_item_list_row", $context, $blocks);
        }
        yield from [];
    }

    // line 121
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_entity_item_list_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 122
        yield "  ";
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 122)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 122), "")) : ("")) . " media entity-item"))]);
        // line 123
        yield "  <li ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield ">
    <div class=\"media-left\">
      ";
        // line 125
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "image", [], "any", false, false, false, 125), 'widget');
        yield "
    </div>
    <div class=\"media-body media-middle\">
      ";
        // line 128
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 128), 'widget');
        yield "
      <i class=\"material-icons entity-item-delete\">clear</i>
    </div>
    ";
        // line 131
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        yield "
  </li>
";
        yield from [];
    }

    // line 135
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_entity_item_table_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 136
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 136)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 136), "")) : ("")) . " entity-item"))]);
        // line 137
        yield "  <tr ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield ">
  ";
        // line 138
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 138));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 139
            yield "    ";
            $context["childType"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 139), "block_prefixes", [], "any", false, false, false, 139), 1, [], "any", false, false, false, 139);
            // line 140
            yield "    ";
            if ((($context["childType"] ?? null) == "hidden")) {
                // line 141
                yield "      ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
                yield "
    ";
            } else {
                // line 143
                yield "    <td>
      ";
                // line 144
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
                yield "
    </td>
    ";
            }
            // line 147
            yield "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        yield "
  ";
        // line 150
        yield "  ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 150), "vars", [], "any", false, false, false, 150), "allow_delete", [], "any", false, false, false, 150)) {
            // line 151
            yield "    <td>
      <i class=\"material-icons entity-item-delete\">clear</i>
    </td>
  ";
        }
        // line 155
        yield "  </tr>";
        yield from [];
    }

    // line 158
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_searched_customer_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 159
        yield "  ";
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 159)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 159), "")) : ("")) . " media entity-item"))]);
        // line 160
        yield "  <li ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield ">
    <div class=\"media-body media-middle\">
      ";
        // line 162
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "fullname_and_email", [], "any", false, false, false, 162), 'widget');
        yield "
      <i class=\"material-icons entity-item-delete\">clear</i>
    </div>
    ";
        // line 165
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "id_customer", [], "any", false, false, false, 165), 'widget');
        yield "
  </li>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/TwigTemplateForm/entity_search_input.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  387 => 165,  381 => 162,  375 => 160,  372 => 159,  365 => 158,  360 => 155,  354 => 151,  351 => 150,  348 => 148,  342 => 147,  336 => 144,  333 => 143,  327 => 141,  324 => 140,  321 => 139,  317 => 138,  312 => 137,  310 => 136,  303 => 135,  295 => 131,  289 => 128,  283 => 125,  277 => 123,  274 => 122,  267 => 121,  261 => 117,  258 => 115,  255 => 114,  248 => 113,  238 => 106,  236 => 105,  232 => 102,  228 => 100,  225 => 99,  222 => 97,  216 => 96,  210 => 94,  207 => 93,  204 => 92,  200 => 91,  190 => 85,  188 => 84,  181 => 83,  175 => 80,  173 => 79,  169 => 78,  167 => 77,  160 => 76,  154 => 73,  147 => 69,  143 => 67,  140 => 66,  137 => 64,  134 => 62,  132 => 61,  130 => 60,  128 => 58,  121 => 55,  119 => 54,  117 => 51,  116 => 49,  115 => 48,  113 => 47,  110 => 46,  105 => 44,  103 => 41,  101 => 39,  100 => 38,  99 => 37,  98 => 36,  97 => 35,  96 => 34,  95 => 33,  94 => 32,  93 => 31,  92 => 30,  91 => 29,  90 => 28,  88 => 27,  81 => 26,  76 => 158,  74 => 135,  72 => 121,  69 => 120,  67 => 113,  64 => 112,  62 => 83,  59 => 82,  57 => 76,  54 => 75,  52 => 26,  49 => 25,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/TwigTemplateForm/entity_search_input.html.twig", "/home/sheridantools/public_html/src/PrestaShopBundle/Resources/views/Admin/TwigTemplateForm/entity_search_input.html.twig");
    }
}
