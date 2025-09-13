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

/* @PrestaShop/Admin/TwigTemplateForm/multishop.html.twig */
class __TwigTemplate_d7ce7979592ab8cd10d2e89e114912ac extends Template
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
        $_trait_0 = $this->loadTemplate("bootstrap_4_layout.html.twig", "@PrestaShop/Admin/TwigTemplateForm/multishop.html.twig", 25);
        if (!$_trait_0->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_4_layout.html.twig".'" cannot be used as a trait.', 25, $this->source);
        }
        $_trait_0_blocks = $_trait_0->unwrap()->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'shop_selector_widget' => [$this, 'block_shop_selector_widget'],
                'shop_option_checkbox_widget' => [$this, 'block_shop_option_checkbox_widget'],
                'shop_option_radio_widget' => [$this, 'block_shop_option_radio_widget'],
                'shop_selector_item_name' => [$this, 'block_shop_selector_item_name'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 26
        yield "
";
        // line 27
        yield from $this->unwrap()->yieldBlock('shop_selector_widget', $context, $blocks);
        // line 53
        yield "
";
        // line 54
        yield from $this->unwrap()->yieldBlock('shop_option_checkbox_widget', $context, $blocks);
        // line 67
        yield "
";
        // line 68
        yield from $this->unwrap()->yieldBlock('shop_option_radio_widget', $context, $blocks);
        // line 71
        yield "
";
        // line 72
        yield from $this->unwrap()->yieldBlock('shop_selector_item_name', $context, $blocks);
        yield from [];
    }

    // line 27
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_shop_selector_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 28
        yield "  <div class=\"shop-selector-content shop-selector\" data-multiple=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["multiple"] ?? null), "html", null, true);
        yield "\">
    <ul class=\"shop-selector-group-list\">
      ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 30), "choices", [], "any", false, false, false, 30));
        foreach ($context['_seq'] as $context["groupName"] => $context["groupShops"]) {
            // line 31
            yield "        <li class=\"shop-selector-group-item shop-selector-item\">
          ";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Group", [], "Admin.Global") . " ") . $context["groupName"]), "html", null, true);
            yield "
        </li>

        ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["groupShops"]);
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
            foreach ($context['_seq'] as $context["_key"] => $context["shopChoice"]) {
                // line 36
                yield "          ";
                $context["shop"] = CoreExtension::getAttribute($this->env, $this->source, $context["shopChoice"], "data", [], "any", false, false, false, 36);
                // line 37
                yield "
          <li class=\"shop-selector-shop-item shop-selector-item";
                // line 38
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["shop"] ?? null), "id", [], "any", false, false, false, 38) == ($context["contextShopId"] ?? null))) {
                    yield " selected-shop current-shop disabled";
                }
                yield "\" data-shop-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["shop"] ?? null), "id", [], "any", false, false, false, 38), "html", null, true);
                yield "\">
            ";
                // line 39
                if (($context["multiple"] ?? null)) {
                    // line 40
                    yield "              ";
                    yield from                     $this->unwrap()->yieldBlock("shop_option_checkbox_widget", $context, $blocks);
                    yield "
            ";
                } else {
                    // line 42
                    yield "              ";
                    yield from                     $this->unwrap()->yieldBlock("shop_option_radio_widget", $context, $blocks);
                    yield "
            ";
                }
                // line 44
                yield "          </li>
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
            unset($context['_seq'], $context['_key'], $context['shopChoice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            yield "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['groupName'], $context['groupShops'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        yield "    </ul>

    ";
        // line 49
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => "d-none shop-selector-input"]);
        // line 50
        yield "    ";
        yield from         $this->unwrap()->yieldBlock("choice_widget", $context, $blocks);
        yield "
  </div>
";
        yield from [];
    }

    // line 54
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_shop_option_checkbox_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 55
        yield "  <div class=\"md-checkbox md-checkbox-inline\">
    <label class=\"shop-selector-item-label\">
      <input
        type=\"checkbox\" data-value-type=\"boolean\" class=\"form-check-input\" value=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["shop"] ?? null), "id", [], "any", false, false, false, 58), "html", null, true);
        yield "\"
        ";
        // line 59
        if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice(($context["shopChoice"] ?? null), ($context["value"] ?? null))) {
            yield "checked";
        }
        // line 60
        yield "        ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["shop"] ?? null), "id", [], "any", false, false, false, 60) == ($context["contextShopId"] ?? null))) {
            yield "disabled=\"disabled\"";
        }
        // line 61
        yield "      />
      <i class=\"md-checkbox-control\"></i>
      ";
        // line 63
        yield from         $this->unwrap()->yieldBlock("shop_selector_item_name", $context, $blocks);
        yield "
    </label>
  </div>
";
        yield from [];
    }

    // line 68
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_shop_option_radio_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 69
        yield "  ";
        yield from         $this->unwrap()->yieldBlock("shop_selector_item_name", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 72
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_shop_selector_item_name(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 73
        yield "  <div class=\"shop-selector-item-name\">
    <span class=\"shop-selector-color-container\">
      <span class=\"shop-selector-color\"";
        // line 75
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["shop"] ?? null), "color", [], "any", false, false, false, 75))) {
            yield " style=\"background-color: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["shop"] ?? null), "color", [], "any", false, false, false, 75), "html", null, true);
            yield ";\"";
        }
        yield "></span>
    </span>
    ";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["shop"] ?? null), "name", [], "any", false, false, false, 77), "html", null, true);
        yield "
    ";
        // line 78
        if ( !($context["multiple"] ?? null)) {
            // line 79
            yield "      <i class=\"material-icons\">arrow_forward</i>
    ";
        } else {
            // line 81
            yield "      <span class=\"shop-selector-status\" data-added-label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Added", [], "Admin.Global"), "html", null, true);
            yield "\" data-removed-label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Removed", [], "Admin.Global"), "html", null, true);
            yield "\">
        ";
            // line 82
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["shop"] ?? null), "id", [], "any", false, false, false, 82) == ($context["contextShopId"] ?? null))) {
                // line 83
                yield "          ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Current store", [], "Admin.Global"), "html", null, true);
                yield "
        ";
            }
            // line 85
            yield "      </span>
    ";
        }
        // line 87
        yield "  </div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/TwigTemplateForm/multishop.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  290 => 87,  286 => 85,  280 => 83,  278 => 82,  271 => 81,  267 => 79,  265 => 78,  261 => 77,  252 => 75,  248 => 73,  241 => 72,  233 => 69,  226 => 68,  217 => 63,  213 => 61,  208 => 60,  204 => 59,  200 => 58,  195 => 55,  188 => 54,  179 => 50,  177 => 49,  173 => 47,  167 => 46,  152 => 44,  146 => 42,  140 => 40,  138 => 39,  130 => 38,  127 => 37,  124 => 36,  107 => 35,  101 => 32,  98 => 31,  94 => 30,  88 => 28,  81 => 27,  76 => 72,  73 => 71,  71 => 68,  68 => 67,  66 => 54,  63 => 53,  61 => 27,  58 => 26,  35 => 25,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/TwigTemplateForm/multishop.html.twig", "/home/sheridantools/public_html/src/PrestaShopBundle/Resources/views/Admin/TwigTemplateForm/multishop.html.twig");
    }
}
